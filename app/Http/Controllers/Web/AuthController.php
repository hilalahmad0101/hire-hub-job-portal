<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChangeEmailRequest;
use App\Http\Requests\Auth\EmailVerifyRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function __construct(
        public readonly AuthService $authService,
    ) {}

    public function registerView(): View
    {
        return view('web.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        try {
            DB::beginTransaction();
            $user = $this->authService->registerUser($validated);
            $this->authService->sendOtp($user);
            DB::commit();

            return to_route('web.auth.verify.view', ['uuid' => $user->uuid])->with('success', 'Please verify your email');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }

    }

    public function loginView(): View
    {
        return view('web.auth.login');
    }

    // login
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        try {
            $user = $this->authService->getUserByEmail($validated['email']);
            if (! $user) {
                return back()->with('error', 'Invalid email or password');
            }
            $login = $this->authService->login($user, $validated['password']);
            if (! $login['success']) {
                return back()->with('error', $login['message']);
            }

            if ($user->user_type == 'employer') {
                if ($user->is_task_complete) {
                    Auth::login($user);

                    return to_route('web.employer.dashboard')->with('success', $login['message']);
                } else {
                    return to_route('web.setup-company.view', ['uuid' => $user->uuid])->with('success', 'Complete company profile');
                }
            }
            Auth::login($user);

            return to_route('web.home')->with('success', $login['message']);

        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function verifyView(string $uuid): View|RedirectResponse
    {
        try {
            $user = $this->authService->getUserByUuid($uuid);

            return view('web.auth.verify', compact('user'));
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function verifyEmail(EmailVerifyRequest $request)
    {
        $validated = $request->validated();
        try {
            DB::beginTransaction();
            $user = $this->authService->getUserByEmail($validated['email']);
            $verify = $this->authService->verifyEmail($user, $validated['code']);
            if (! $verify) {
                return back()->with('error', 'Invalid code');
            }
            DB::commit();

            return to_route('web.auth.login.view')->with('success', 'Email verified successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function resendOtp(string $uuid)
    {
        try {
            $user = $this->authService->getUserByUuid($uuid);
            $rand = rand(1000, 9999);
            $user->code = $rand;
            $user->save();
            $this->authService->sendOtp($user);

            return back()->with('success', 'OTP sent successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function changeEmail(ChangeEmailRequest $request, string $uuid)
    {
        $validated = $request->validated();
        try {
            $user = $this->authService->getUserByUuid($uuid);
            $rand = rand(1000, 9999);
            $user->email = $validated['email'];
            $user->code = $rand;
            $user->save();
            $this->authService->sendOtp($user);

            return back()->with('success', 'Email changed successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function setupCompanyView(string $uuid)
    {
        try {
            $user = $this->authService->getUserByUuid($uuid);

            return view('web.auth.setup-company', compact('user'));
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    // logout with regenerate session
    public function logout()
    {
        session()->regenerate();

        Auth::logout();

        session()->regenerateToken();
        session()->flush();

        return to_route('web.auth.login.view');
    }
}
