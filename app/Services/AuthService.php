<?php

namespace App\Services;

use App\Mail\UserVerification;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AuthService
{
    public function registerUser(array $data): User
    {
        $code = rand(1000, 9999);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'user_type' => $data['user_type'],
            'code' => $code,
            'uuid' => str()->uuid(),
        ]);

        return $user;
    }

    public function sendOtp(User $user): bool
    {
        $details = [
            'title' => 'Verify your email',
            'code' => $user->code,
        ];

        $user->isVerified = 0;
        $user->save();
        Mail::to($user->email)->send(new UserVerification($details));

        return true;
    }

    public function getUserByEmail(string $email): User
    {
        return User::whereEmail($email)->firstOrFail();
    }

    public function verifyEmail(User $user, int $code): bool
    {
        if ($user->code == $code) {
            $user->code = 0;
            $user->save();

            return true;
        }

        return false;
    }

    public function getUserByUuid(string $uuid): User
    {
        return User::where('uuid', '=', $uuid)->firstOrFail();
    }
}
