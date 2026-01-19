<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('web.home');
    }

    public function list(): View
    {
        return view('web.job.list');
    }

    public function jobDetail(): View
    {
        return view('web.job.job-detail');
    }

    public function company(): View
    {
        return view('web.job.company');
    }

    public function reviews(): View
    {
        return view('web.job.reviews');
    }

    public function addReview(): View
    {
        return view('web.job.add-review');
    }

    public function benefit(): View
    {
        return view('web.job.benefit');
    }

    public function jobApplicationForm(): View
    {
        return view('web.job.job-application-form');
    }

    public function contact(): View
    {
        return view('web.contact');
    }

    public function faq(): View
    {
        return view('web.faq');
    }

    public function aboutUs(): View
    {
        return view('web.about');
    }

    public function candidateProfile(): View
    {
        return view('web.candidate-profile');
    }


}
