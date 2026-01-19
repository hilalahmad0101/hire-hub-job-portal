@extends('layouts.web.auth')

@section('title', 'Shortlisted')

@section('content')
    <div class="container mx-auto">
        <!-- Breadcrumbs -->
        <div class="flex items-center gap-2 mb-6">
            <a class="text-sm font-medium text-gray-500 hover:text-primary transition-colors" href="#">Dashboard</a>
            <span class="material-symbols-outlined text-sm text-gray-400">chevron_right</span>
            <span class="text-sm font-semibold text-gray-900 dark:text-white">Shortlisted</span>
        </div>
        <!-- Page Heading -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4 mb-8">
            <div>
                <h2 class="text-3xl font-black text-gray-900 dark:text-white tracking-tight">Shortlisted Jobs</h2>
                <p class="text-gray-500 dark:text-gray-400 mt-1 font-medium">You have <span class="text-primary font-bold">12
                        jobs</span> saved in your personal list.</p>
            </div>
            <button
                class="bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-white px-5 py-2.5 rounded-lg text-sm font-bold hover:bg-gray-300 transition-colors">
                Browse More Jobs
            </button>
        </div>
        <!-- Filter Chips -->
        <div class="flex flex-wrap gap-2 mb-8">
            <button
                class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg text-sm font-semibold shadow-md shadow-primary/20">
                All Saved
            </button>
            <button
                class="flex items-center gap-2 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 px-4 py-2 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-400 hover:border-primary/50 transition-all">
                Expiring Soon
                <span class="material-symbols-outlined text-lg">arrow_drop_down</span>
            </button>
            <button
                class="flex items-center gap-2 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 px-4 py-2 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-400 hover:border-primary/50 transition-all">
                Remote Only
                <span class="material-symbols-outlined text-lg">arrow_drop_down</span>
            </button>
            <button
                class="flex items-center gap-2 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 px-4 py-2 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-400 hover:border-primary/50 transition-all">
                Salary Range
                <span class="material-symbols-outlined text-lg">arrow_drop_down</span>
            </button>
        </div>
        <!-- Jobs Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Job Card 1 -->
            <div
                class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-800 p-6 flex flex-col hover:shadow-xl hover:shadow-gray-200/50 dark:hover:shadow-none transition-all relative">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="size-12 rounded-lg bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center border border-blue-100 dark:border-blue-800">
                        <span class="material-symbols-outlined text-primary text-2xl">rocket_launch</span>
                    </div>
                    <button
                        class="text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 p-1.5 rounded-lg transition-colors group"
                        title="Remove from list">
                        <span class="material-symbols-outlined material-fill">bookmark_remove</span>
                    </button>
                </div>
                <div class="flex-1">
                    <h3
                        class="text-lg font-bold text-gray-900 dark:text-white mb-1 group-hover:text-primary transition-colors">
                        Senior Product Designer</h3>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-4">TechFlow • San Francisco, CA</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span
                            class="px-2 py-1 bg-gray-100 dark:bg-gray-800 rounded text-[11px] font-bold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Full-time</span>
                        <span
                            class="px-2 py-1 bg-green-50 dark:bg-green-900/20 rounded text-[11px] font-bold text-green-600 dark:text-green-400 uppercase tracking-wider">$140k
                            - $180k</span>
                        <span
                            class="px-2 py-1 bg-blue-50 dark:bg-blue-900/20 rounded text-[11px] font-bold text-blue-600 dark:text-blue-400 uppercase tracking-wider underline">Remote
                            Friendly</span>
                    </div>
                </div>
                <div class="mt-auto pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-col gap-3">
                    <div class="flex items-center text-xs text-amber-600 dark:text-amber-500 font-semibold gap-1">
                        <span class="material-symbols-outlined text-sm">schedule</span>
                        Expiring in 2 days
                    </div>
                    <button
                        class="w-full bg-primary text-white py-2.5 rounded-lg font-bold hover:bg-blue-700 transition-colors">Apply
                        Now</button>
                </div>
            </div>
            <!-- Job Card 2 -->
            <div
                class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-800 p-6 flex flex-col hover:shadow-xl hover:shadow-gray-200/50 dark:hover:shadow-none transition-all relative">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="size-12 rounded-lg bg-purple-50 dark:bg-purple-900/20 flex items-center justify-center border border-purple-100 dark:border-purple-800">
                        <span class="material-symbols-outlined text-purple-600 text-2xl">code</span>
                    </div>
                    <button class="text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 p-1.5 rounded-lg transition-colors"
                        title="Remove from list">
                        <span class="material-symbols-outlined material-fill">bookmark_remove</span>
                    </button>
                </div>
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Frontend Engineer (React)</h3>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-4">CodeCraft Studios • Remote</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span
                            class="px-2 py-1 bg-gray-100 dark:bg-gray-800 rounded text-[11px] font-bold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Contract</span>
                        <span
                            class="px-2 py-1 bg-green-50 dark:bg-green-900/20 rounded text-[11px] font-bold text-green-600 dark:text-green-400 uppercase tracking-wider">$80
                            - $110 / hr</span>
                    </div>
                </div>
                <div class="mt-auto pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-col gap-3">
                    <div class="flex items-center text-xs text-gray-400 font-medium gap-1">
                        <span class="material-symbols-outlined text-sm">history</span>
                        Saved 1 week ago
                    </div>
                    <button
                        class="w-full bg-primary text-white py-2.5 rounded-lg font-bold hover:bg-blue-700 transition-colors">Apply
                        Now</button>
                </div>
            </div>
            <!-- Job Card 3 -->
            <div
                class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-800 p-6 flex flex-col hover:shadow-xl hover:shadow-gray-200/50 dark:hover:shadow-none transition-all relative">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="size-12 rounded-lg bg-orange-50 dark:bg-orange-900/20 flex items-center justify-center border border-orange-100 dark:border-orange-800">
                        <span class="material-symbols-outlined text-orange-600 text-2xl">campaign</span>
                    </div>
                    <button class="text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 p-1.5 rounded-lg transition-colors"
                        title="Remove from list">
                        <span class="material-symbols-outlined material-fill">bookmark_remove</span>
                    </button>
                </div>
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Marketing Manager</h3>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-4">GrowthLabs • Austin, TX</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span
                            class="px-2 py-1 bg-gray-100 dark:bg-gray-800 rounded text-[11px] font-bold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Full-time</span>
                        <span
                            class="px-2 py-1 bg-green-50 dark:bg-green-900/20 rounded text-[11px] font-bold text-green-600 dark:text-green-400 uppercase tracking-wider">$110k
                            - $140k</span>
                    </div>
                </div>
                <div class="mt-auto pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-col gap-3">
                    <div class="flex items-center text-xs text-green-600 dark:text-green-500 font-semibold gap-1">
                        <span class="material-symbols-outlined text-sm">bolt</span>
                        Active recruiter
                    </div>
                    <button
                        class="w-full bg-primary text-white py-2.5 rounded-lg font-bold hover:bg-blue-700 transition-colors">Apply
                        Now</button>
                </div>
            </div>
            <!-- Job Card 4 -->
            <div
                class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-800 p-6 flex flex-col hover:shadow-xl hover:shadow-gray-200/50 dark:hover:shadow-none transition-all relative">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="size-12 rounded-lg bg-teal-50 dark:bg-teal-900/20 flex items-center justify-center border border-teal-100 dark:border-teal-800">
                        <span class="material-symbols-outlined text-teal-600 text-2xl">database</span>
                    </div>
                    <button class="text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 p-1.5 rounded-lg transition-colors"
                        title="Remove from list">
                        <span class="material-symbols-outlined material-fill">bookmark_remove</span>
                    </button>
                </div>
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Data Scientist</h3>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-4">InsightAI • New York, NY</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span
                            class="px-2 py-1 bg-gray-100 dark:bg-gray-800 rounded text-[11px] font-bold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Hybrid</span>
                        <span
                            class="px-2 py-1 bg-green-50 dark:bg-green-900/20 rounded text-[11px] font-bold text-green-600 dark:text-green-400 uppercase tracking-wider">$160k
                            - $210k</span>
                    </div>
                </div>
                <div class="mt-auto pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-col gap-3">
                    <div class="flex items-center text-xs text-gray-400 font-medium gap-1">
                        <span class="material-symbols-outlined text-sm">history</span>
                        Saved 3 days ago
                    </div>
                    <button
                        class="w-full bg-primary text-white py-2.5 rounded-lg font-bold hover:bg-blue-700 transition-colors">Apply
                        Now</button>
                </div>
            </div>
        </div>
        <!-- Load More / Pagination Placeholder -->
        <div class="mt-12 flex justify-center">
            <button
                class="flex items-center gap-2 text-gray-500 dark:text-gray-400 font-semibold hover:text-primary transition-colors">
                Show more saved jobs
                <span class="material-symbols-outlined">expand_more</span>
            </button>
        </div>
    </div>
@endsection
