<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(): View
    {
        return view('web.dashboard.index');
    }

    public function profile(): View
    {
        return view('web.dashboard.profile');
    }

    public function cvManager(): View
    {
        return view('web.dashboard.cv-manager');
    }

    public function appliedJob(): View
    {
        return view('web.dashboard.applied-job');
    }

    public function shortlisted(): View
    {
        return view('web.dashboard.shortlisted');
    }

    public function changePassword(): View
    {
        return view('web.dashboard.change-password');
    }

    public function notification(): View
    {
        return view('web.dashboard.notification');
    }

    public function message(): View
    {
        return view('web.dashboard.message');
    }
}
