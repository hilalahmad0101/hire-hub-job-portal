<?php

namespace App\Services;

use App\Mail\UserVerification;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
            $user->isVerified = 1;
            $user->save();

            return true;
        }

        return false;
    }

    public function getUserByUuid(string $uuid): User
    {
        return User::where('uuid', '=', $uuid)->firstOrFail();
    }

    public function login(User $user, string $password): array
    {
        if (! Hash::check($password, $user->password)) {
            return [
                'success' => false,
                'message' => 'Invalid password',
            ];
        }
        if ($user->isVerified == 0) {
            return [
                'success' => false,
                'message' => 'Please verify your email',
            ];
        }

        return [
            'success' => true,
            'message' => 'Login successful',
            'user' => $user,
        ];
    }

    public function findOrCreateGoogleUser($googleUser): User
    {
        // Check if user exists with this Google ID
        $user = User::where('google_id', $googleUser->getId())->first();

        if ($user) {
            return $user;
        }

        // Check if user exists with this email
        $user = User::where('email', $googleUser->getEmail())->first();

        if ($user) {
            // Link Google account to existing user
            $user->google_id = $googleUser->getId();
            $user->save();

            return $user;
        }

        // Create new user from Google data
        return User::create([
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'google_id' => $googleUser->getId(),
            'user_type' => 'candidate', // Default to candidate
            'isVerified' => 1, // Google accounts are pre-verified
            'code' => 0,
            'uuid' => str()->uuid(),
            'password' => bcrypt(str()->random(32)), // Random password
        ]);
    }
}
