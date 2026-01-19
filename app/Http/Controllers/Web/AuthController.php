<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(): View
    {
        return view('web.auth.register');
    }

    public function login(): View
    {
        return view('web.auth.login');
    }

    public function verify(): View
    {
        return view('web.auth.verify');
    }
}
