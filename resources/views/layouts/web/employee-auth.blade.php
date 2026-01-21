<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation -->
        <aside
            class="w-64 bg-white dark:bg-background-dark border-r border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-10">
            <div class="p-6 flex flex-col h-full">
                <!-- Branding -->
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-primary size-10 rounded-lg flex items-center justify-center text-white">
                        <span class="material-symbols-outlined">work</span>
                    </div>
                    <div>
                        <h1 class="text-slate-900 dark:text-white text-base font-bold leading-none">
                            {{ env('APP_NAME') }}</h1>
                        <p class="text-slate-500 dark:text-slate-400 text-xs mt-1">Recruitment Portal</p>
                    </div>
                </div>
                <!-- Nav Groups -->
                <nav class="flex-1 space-y-1">
                    <a href="{{ route('web.employer.dashboard') }}"
                        class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary">
                        <span class="material-symbols-outlined text-[22px]">dashboard</span>
                        <p class="text-sm font-semibold">Dashboard</p>
                    </a>
                    <a href="{{ route('web.employer.company-profile') }}"
                        class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary">
                        <span class="material-symbols-outlined text-[22px]">business</span>
                        <p class="text-sm font-semibold">Company Profile</p>
                    </a>
                    <!-- Dropdown Item -->
                    <div class="space-y-1 pt-1">
                        <div
                            class="flex items-center justify-between px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 cursor-pointer rounded-lg group transition-colors">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-[22px]">work_outline</span>
                                <p class="text-sm font-medium">Manage Jobs</p>
                            </div>
                            <span class="material-symbols-outlined text-sm">expand_more</span>
                        </div>
                        <div class="pl-10 space-y-1">
                            <a href="{{ route('web.employer.job.list') }}"
                                class="text-xs text-slate-500 hover:text-primary cursor-pointer py-1">Active Jobs</a>
                            <br>
                            <a href="{{ route('web.employer.job.list') }}"
                                class="text-xs text-slate-500 hover:text-primary cursor-pointer py-1">Expired Jobs</a>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 cursor-pointer rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-[22px]">group</span>
                        <p class="text-sm font-medium">All Applicants</p>
                    </div>
                    <div
                        class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 cursor-pointer rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-[22px]">shopping_cart</span>
                        <p class="text-sm font-medium">My Orders</p>
                    </div>
                    <div
                        class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 cursor-pointer rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-[22px]">subscriptions</span>
                        <p class="text-sm font-medium">Subscriptions</p>
                    </div>
                </nav>
                <!-- Settings Bottom -->
                <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800 space-y-1">
                    <p class="px-3 pb-2 text-[10px] uppercase tracking-wider font-bold text-slate-400">Account Settings
                    </p>
                    <div
                        class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 cursor-pointer rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-[22px]">person</span>
                        <p class="text-sm font-medium">Profile</p>
                    </div>
                    <div
                        class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 cursor-pointer rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-[22px]">lock</span>
                        <p class="text-sm font-medium">Password</p>
                    </div>
                    <div class="mt-auto">
                        <x-web.form-wrapper action="{{ route('web.auth.logout') }}">
                            <button type="submit"
                                class="flex items-center gap-3 px-3 py-2.5 w-full rounded-lg text-[#617289] dark:text-gray-400 hover:bg-red-50 hover:text-red-500 transition-colors">
                                <span class="material-symbols-outlined">logout</span>
                                <span class="text-sm font-medium">Logout</span>
                            </button>
                        </x-web.form-wrapper>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 ml-64 min-h-screen">
            <!-- Top Navbar -->
            <header
                class="h-16 bg-white dark:bg-background-dark border-b border-slate-200 dark:border-slate-800 px-8 flex items-center justify-between sticky top-0 z-20">
                <div class="flex items-center gap-6">
                    <h2 class="text-slate-900 dark:text-white text-lg font-bold tracking-tight">Dashboard Overview</h2>
                    <div class="relative w-64">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
                        <input
                            class="w-full bg-slate-100 dark:bg-slate-800 border-none rounded-lg py-1.5 pl-10 pr-4 text-sm focus:ring-1 focus:ring-primary placeholder:text-slate-500"
                            placeholder="Search candidates..." type="text" />
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <button
                        class="size-10 flex items-center justify-center bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors relative">
                        <span class="material-symbols-outlined">notifications</span>
                        <span
                            class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-800"></span>
                    </button>
                    <div class="flex items-center gap-3 pl-4 border-l border-slate-200 dark:border-slate-800">
                        <div class="text-right">
                            <p class="text-sm font-bold text-slate-900 dark:text-white leading-none">Acme Corp</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">HR Manager</p>
                        </div>
                        <div class="size-10 rounded-full bg-slate-200 bg-cover bg-center border border-slate-300 dark:border-slate-700"
                            data-alt="Portrait of the HR manager"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDnKKUS52UXpQSTR5-Gs_fAH_2Sf0GMtanxk1C48WH-pYKwIDvih9qJXnr8rYxx2wyZNOAa9w6KY61rb_9aJxraQrdvHXz6ZbyCDnq0prOwt3XO5OM8x02KQgW03esbK8vcor1Q4ZW5PHI0c-N_LF5GTygrB8U68z7wbiCbYjC1vH-HW6Oyi35cRwzxhM4EMLIIfXyHLF6vQ5Tr90E9vhltRCwuYRX_gZii2lufXLYcbXO7ME35mXrRrG3HelD5QW9TJVXC7jQS50M');">
                        </div>
                    </div>
                </div>
            </header>
            <!-- Dashboard Content -->
            <div class="p-8 space-y-8">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
