<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(): View
    {
        return view('web.company.list');
    }

    public function show(): View
    {
        return view('web.company.detail');
    }

    public function jobs(): View
    {
        return view('web.company.jobs');
    }

    public function reviews(): View
    {
        return view('web.company.reviews');
    }

    public function addReview(): View
    {
        return view('web.company.add-review');
    }

    public function benefit(): View
    {
        return view('web.company.benefit');
    }
}
