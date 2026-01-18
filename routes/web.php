<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CompanyController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->name('web.')->group(function (): void {
    Route::controller(HomeController::class)->group(function (): void {
        Route::get('/', 'index')->name('home');
        Route::get('job/list', 'list')->name('job.list');
        Route::get('job/job-detail', 'jobDetail')->name('job-detail');
        Route::get('job/company', 'company')->name('company');
        Route::get('job/reviews', 'reviews')->name('reviews');
        Route::get('job/add-review', 'addReview')->name('add-review');
        Route::get('job/benefit', 'benefit')->name('benefit');
        Route::get('job/application-form', 'jobApplicationForm')->name('job.application-form');
    });

    Route::controller(CompanyController::class)->group(function (): void {
        Route::get('company/list', 'index')->name('company.list');
        Route::get('company/detail', 'show')->name('company.detail');
        Route::get('company/jobs', 'jobs')->name('company.jobs');
        Route::get('company/reviews', 'reviews')->name('company.reviews');
        Route::get('company/add-review', 'addReview')->name('company.add-review');
        Route::get('company/benefit', 'benefit')->name('company.benefit');
    });

    Route::controller(AuthController::class)->group(function (): void {
        Route::get('auth/register', 'register')->name('auth.register');
        Route::get('auth/login', 'login')->name('auth.login');
    });
});
