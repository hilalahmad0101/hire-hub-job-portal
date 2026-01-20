<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

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

            return to_route('web.auth.verify')->with('success', 'Please verify your email');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }

    }

    public function login(): View
    {
        return view('web.auth.login');
    }

    public function verifyView(): View
    {
        return view('web.auth.verify');
    }
}
