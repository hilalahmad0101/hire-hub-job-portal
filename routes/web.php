<?php

use App\Http\Controllers\Employer\DashboardController as EmployerDashboardController;
use App\Http\Controllers\Employer\JobController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CompanyController;
use App\Http\Controllers\Web\DashboardController;
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
        Route::get('contact', 'contact')->name('contact');
        Route::get('faq', 'faq')->name('faq');
        Route::get('about-us', 'aboutUs')->name('about-us');
        Route::get('candidate-profile', 'candidateProfile')->name('candidate-profile');
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
        Route::get('auth/register', 'registerView')->name('auth.register.view');
        Route::post('auth/register', 'register')->name('auth.register');
        Route::get('auth/login', 'loginView')->name('auth.login.view');
        Route::post('auth/login', 'login')->name('auth.login');
        Route::get('auth/verify/{uuid}', 'verifyView')->name('auth.verify.view');
        Route::post('auth/verify', 'verifyEmail')->name('auth.verify');
        Route::post('auth/resend/otp/{uuid}', 'resendOtp')->name('auth.resend.otp');
        Route::post('auth/change/email/{uuid}', 'changeEmail')->name('auth.change.email');
        Route::get('setup-company/{uuid}', 'setupCompanyView')->name('setup-company.view');
        Route::post('setup-company/{uuid}', 'setupCompany')->name('setup-company');
        Route::post('auth/logout', 'logout')->name('auth.logout');
    });

    Route::controller(DashboardController::class)->group(function (): void {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('dashboard/profile', 'profile')->name('dashboard.profile');
        Route::get('dashboard/cv-manager', 'cvManager')->name('dashboard.cv-manager');
        Route::get('dashboard/applied-job', 'appliedJob')->name('dashboard.applied-job');
        Route::get('dashboard/shortlisted', 'shortlisted')->name('dashboard.shortlisted');
        Route::get('dashboard/change-password', 'changePassword')->name('dashboard.change-password');
        Route::get('dashboard/notification', 'notification')->name('dashboard.notification');
        Route::get('dashboard/message', 'message')->name('dashboard.message');
    });

    Route::controller(EmployerDashboardController::class)->group(function (): void {
        Route::get('employer/dashboard', 'dashboard')->name('employer.dashboard');
        Route::get('employer/company-profile', 'companyProfile')->name('employer.company-profile');
    });

    Route::controller(JobController::class)->group(function (): void {
        Route::get('employer/job/list', 'index')->name('employer.job.list');
        Route::get('employer/job/post-job', 'postJob')->name('employer.job.post-job');
    });
});
