<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EmailVerifyRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Contracts\View\View;
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

    public function login(): View
    {
        return view('web.auth.login');
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
}
