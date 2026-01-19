<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
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
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
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
            class="w-64 bg-white dark:bg-[#1a2432] border-r border-[#dbe0e6] dark:border-gray-800 flex flex-col fixed h-full">
            <div class="p-6 flex items-center gap-3">
                <div class="size-8 bg-primary rounded flex items-center justify-center text-white">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <span class="text-xl font-bold tracking-tight text-primary">{{ env('APP_NAME') }}</span>
            </div>
            <nav class="flex-1 px-4 space-y-2">
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary text-white font-medium"
                    href="{{ route('web.dashboard') }}">
                    <span class="material-symbols-outlined">grid_view</span>
                    <span class="text-sm">Dashboard</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617289] dark:text-gray-400 hover:bg-primary/10 hover:text-primary transition-colors"
                    href="{{ route('web.dashboard.profile') }}">
                    <span class="material-symbols-outlined">person</span>
                    <span class="text-sm">Profile</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617289] dark:text-gray-400 hover:bg-primary/10 hover:text-primary transition-colors"
                    href="{{ route('web.dashboard.cv-manager') }}">
                    <span class="material-symbols-outlined">description</span>
                    <span class="text-sm">CV Manager</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617289] dark:text-gray-400 hover:bg-primary/10 hover:text-primary transition-colors"
                    href="{{ route('web.dashboard.applied-job') }}">
                    <span class="material-symbols-outlined">business_center</span>
                    <span class="text-sm">Applied Jobs</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617289] dark:text-gray-400 hover:bg-primary/10 hover:text-primary transition-colors"
                    href="{{ route('web.dashboard.shortlisted') }}">
                    <span class="material-symbols-outlined">favorite</span>
                    <span class="text-sm">Shortlisted</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617289] dark:text-gray-400 hover:bg-primary/10 hover:text-primary transition-colors"
                    href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <span class="text-sm">Settings</span>
                </a>
            </nav>
            <div class="p-4 mt-auto">
                <button
                    class="flex items-center gap-3 px-3 py-2.5 w-full rounded-lg text-[#617289] dark:text-gray-400 hover:bg-red-50 hover:text-red-500 transition-colors">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="text-sm font-medium">Logout</span>
                </button>
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
                    <button onclick="window.location.href = '{{ route('web.dashboard.message') }}'"
                        class="size-10 flex items-center justify-center bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors relative">
                        <span class="material-symbols-outlined">chat_bubble</span>
                        <span
                            class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-800"></span>
                    </button>
                    <button onclick="window.location.href = '{{ route('web.dashboard.notification') }}'"
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

</html>
