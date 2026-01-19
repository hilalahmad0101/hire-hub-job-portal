<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(): View
    {
        return view('web.employer.dashboard');
    }

    public function companyProfile(): View
    {
        return view('web.employer.company-profile');
    }
}
