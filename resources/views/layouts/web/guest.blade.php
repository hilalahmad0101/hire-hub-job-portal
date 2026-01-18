<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white antialiased">
    <div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <header
            class="sticky top-0 z-50 w-full bg-white dark:bg-background-dark border-b border-solid border-[#f0f2f4] dark:border-gray-800">
            <div class="max-w-[1280px] mx-auto px-4 lg:px-10 flex h-16 items-center justify-between whitespace-nowrap">
                <div class="flex items-center gap-4 text-primary">
                    <div class="size-6">
                        <svg fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M24 4H6V17.3333V30.6667H24V44H42V30.6667V17.3333H24V44H42V30.6667V17.3333H24V4Z"
                                fill-rule="evenodd" style="display: none;"></path>
                            <path clip-rule="evenodd" d="M24 4H6V17.3333V30.6667H24V44H42V30.6667V17.3333H24V4Z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h2
                        class="text-[#111418] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em] font-display">
                        {{ env('APP_NAME') }}</h2>
                </div>
                <div class="hidden md:flex flex-1 justify-center gap-8">
                    <nav class="flex items-center gap-9">
                        <a class="text-[#111418] dark:text-gray-300 text-sm font-semibold hover:text-primary transition-colors"
                            href="{{ route('web.home') }}">Home</a>
                        <a class="text-[#111418] dark:text-gray-300 text-sm font-semibold hover:text-primary transition-colors"
                            href="{{ route('web.job.list') }}"> Job List</a>
                        <a class="text-[#111418] dark:text-gray-300 text-sm font-semibold hover:text-primary transition-colors"
                            href="{{ route('web.company.list') }}">Companies</a>
                    </nav>
                </div>
                <div class="flex items-center gap-3">
                    <button
                        class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold transition-all hover:bg-blue-700">
                        Post a Job
                    </button>
                    <button
                        class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-[#f0f2f4] dark:bg-gray-800 text-[#111418] dark:text-white text-sm font-bold transition-all hover:bg-gray-200 dark:hover:bg-gray-700">
                        Sign In
                    </button>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="bg-white dark:bg-background-dark border-t border-gray-200 dark:border-gray-800 py-12">
            <div class="max-w-[1280px] mx-auto px-4 lg:px-10 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="col-span-2 md:col-span-1">
                    <div class="flex items-center gap-2 text-primary mb-6">
                        <div class="size-6">
                            <svg fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M24 4H6V17.3333V30.6667H24V44H42V30.6667V17.3333H24V4Z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h2 class="text-[#111418] dark:text-white text-lg font-bold">JobPortal</h2>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Connecting the world's best talent with the most innovative companies. Your dream career starts
                        here.
                    </p>
                </div>
                <div>
                    <h4 class="text-[#111418] dark:text-white font-bold mb-4">For Candidates</h4>
                    <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                        <li><a class="hover:text-primary transition-colors" href="#">Browse Jobs</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Career Advice</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Resume Builder</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Job Alerts</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-[#111418] dark:text-white font-bold mb-4">For Employers</h4>
                    <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                        <li><a class="hover:text-primary transition-colors" href="#">Post a Job</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Pricing Plans</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Hiring Solutions</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Recruiter Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-[#111418] dark:text-white font-bold mb-4">Company</h4>
                    <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                        <li><a class="hover:text-primary transition-colors" href="#">About Us</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Contact</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="max-w-[1280px] mx-auto px-4 lg:px-10 mt-12 pt-8 border-t border-gray-100 dark:border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-xs text-gray-400">© 2024 JobPortal. All rights reserved.</p>
                <div class="flex gap-4">
                    <a class="text-gray-400 hover:text-primary" href="#"><span
                            class="material-symbols-outlined text-xl">public</span></a>
                    <a class="text-gray-400 hover:text-primary" href="#"><span
                            class="material-symbols-outlined text-xl">share</span></a>
                    <a class="text-gray-400 hover:text-primary" href="#"><span
                            class="material-symbols-outlined text-xl">mail</span></a>
                </div>
            </div>
        </footer>
    </div>

    @stack('scripts')
</body>

</html>
