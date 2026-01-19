<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class JobController extends Controller
{
    public function index()
    {
        return view('web.employer.job.list');
    }

    public function postJob(): View
    {
        return view('web.employer.job.post-job');
    }
}
