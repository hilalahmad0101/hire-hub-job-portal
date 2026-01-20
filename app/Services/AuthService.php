<?php

namespace App\Services;

use App\Mail\UserVerification;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AuthService
{
    public function registerUser(array $data)
    {
        $code = rand(1000, 9999);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'user_type' => $data['user_type'],
            'code' => $code,
        ]);

        return $user;
    }

    public function sendOtp(User $user)
    {
        $details = [
            'title' => 'Verify your email',
            'code' => $user->code,
        ];

        Mail::to($user->email)->send(new UserVerification($details));
    }
}
