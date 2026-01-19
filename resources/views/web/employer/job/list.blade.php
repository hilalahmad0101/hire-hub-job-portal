@extends('layouts.web.employee-auth')

@section('title', 'Job List')

@section('content')
    <main class="">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Manage Jobs</h1>
                <p class="text-slate-500 dark:text-slate-400">Track and manage your company's open positions.</p>
            </div>
            <button
                class="bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-lg font-medium inline-flex items-center gap-2 shadow-lg shadow-primary/20 transition-all">
                <span class="material-icons text-sm">add</span>
                Post New Job
            </button>
        </div>
        <!-- Table Container -->
        <div
            class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
            <!-- Filters Bar -->
            <div class="p-4 border-b border-slate-200 dark:border-slate-800 flex flex-col sm:flex-row items-center gap-4">
                <div class="relative w-full sm:max-w-xs">
                    <span
                        class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 bg-background-light dark:bg-slate-800 border-transparent focus:border-primary focus:ring-0 rounded-lg text-sm transition-all"
                        placeholder="Search jobs..." type="text" />
                </div>
                <div class="flex items-center gap-4 w-full sm:w-auto">
                    <select
                        class="bg-background-light dark:bg-slate-800 border-transparent focus:border-primary focus:ring-0 rounded-lg text-sm py-2 px-4 transition-all min-w-[140px]">
                        <option>All Status</option>
                        <option>Active</option>
                        <option>Draft</option>
                        <option>Expired</option>
                    </select>
                    <select
                        class="bg-background-light dark:bg-slate-800 border-transparent focus:border-primary focus:ring-0 rounded-lg text-sm py-2 px-4 transition-all min-w-[140px]">
                        <option>Sort by: Newest</option>
                        <option>Sort by: Applications</option>
                        <option>Sort by: Title</option>
                    </select>
                </div>
            </div>
            <!-- Table Content -->
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
                        <tr>
                            <th class="px-6 py-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Job Title
                            </th>
                            <th class="px-6 py-4 text-xs font-semibold text-slate-500 uppercase tracking-wider text-center">
                                Status</th>
                            <th class="px-6 py-4 text-xs font-semibold text-slate-500 uppercase tracking-wider text-center">
                                Applications</th>
                            <th class="px-6 py-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Posted Date
                            </th>
                            <th class="px-6 py-4 text-xs font-semibold text-slate-500 uppercase tracking-wider text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <a class="font-semibold text-primary hover:underline" href="#">Senior Frontend
                                        Engineer</a>
                                    <span class="text-xs text-slate-500 mt-1">Full-time • Remote</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span
                                    class="px-2.5 py-1 text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-400 rounded-full">Active</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex flex-col items-center">
                                    <span class="font-bold">48</span>
                                    <span class="text-[10px] text-slate-400 uppercase">12 new</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">
                                Oct 24, 2023
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-slate-500 transition-colors"
                                        title="Edit">
                                        <span class="material-icons text-[18px]">edit</span>
                                    </button>
                                    <button
                                        class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-slate-500 transition-colors"
                                        title="Deactivate">
                                        <span class="material-icons text-[18px]">pause_circle</span>
                                    </button>
                                    <button
                                        class="p-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg text-slate-500 hover:text-red-600 transition-colors"
                                        title="Delete">
                                        <span class="material-icons text-[18px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <a class="font-semibold text-primary hover:underline" href="#">Product Designer
                                        (UI/UX)</a>
                                    <span class="text-xs text-slate-500 mt-1">Contract • On-site</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span
                                    class="px-2.5 py-1 text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-400 rounded-full">Draft</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex flex-col items-center">
                                    <span class="font-bold">0</span>
                                    <span class="text-[10px] text-slate-400 uppercase">N/A</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">
                                Pending
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-slate-500 transition-colors"
                                        title="Edit">
                                        <span class="material-icons text-[18px]">edit</span>
                                    </button>
                                    <button
                                        class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-slate-500 transition-colors"
                                        title="Publish">
                                        <span class="material-icons text-[18px]">publish</span>
                                    </button>
                                    <button
                                        class="p-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg text-slate-500 hover:text-red-600 transition-colors"
                                        title="Delete">
                                        <span class="material-icons text-[18px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <a class="font-semibold text-primary hover:underline" href="#">Lead Backend
                                        Developer</a>
                                    <span class="text-xs text-slate-500 mt-1">Full-time • Hybrid</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span
                                    class="px-2.5 py-1 text-xs font-medium bg-amber-100 text-amber-700 dark:bg-amber-900/40 dark:text-amber-400 rounded-full">Expired</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex flex-col items-center">
                                    <span class="font-bold">156</span>
                                    <span class="text-[10px] text-slate-400 uppercase">Closed</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">
                                Aug 12, 2023
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-slate-500 transition-colors"
                                        title="Repost">
                                        <span class="material-icons text-[18px]">refresh</span>
                                    </button>
                                    <button
                                        class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-slate-500 transition-colors"
                                        title="View Results">
                                        <span class="material-icons text-[18px]">visibility</span>
                                    </button>
                                    <button
                                        class="p-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg text-slate-500 hover:text-red-600 transition-colors"
                                        title="Delete">
                                        <span class="material-icons text-[18px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <a class="font-semibold text-primary hover:underline" href="#">Marketing
                                        Coordinator</a>
                                    <span class="text-xs text-slate-500 mt-1">Full-time • London</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span
                                    class="px-2.5 py-1 text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-400 rounded-full">Active</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex flex-col items-center">
                                    <span class="font-bold">32</span>
                                    <span class="text-[10px] text-slate-400 uppercase">3 new</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">
                                Oct 19, 2023
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-slate-500 transition-colors"
                                        title="Edit">
                                        <span class="material-icons text-[18px]">edit</span>
                                    </button>
                                    <button
                                        class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-slate-500 transition-colors"
                                        title="Deactivate">
                                        <span class="material-icons text-[18px]">pause_circle</span>
                                    </button>
                                    <button
                                        class="p-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg text-slate-500 hover:text-red-600 transition-colors"
                                        title="Delete">
                                        <span class="material-icons text-[18px]">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div
                class="p-4 bg-slate-50 dark:bg-slate-800/50 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                <span class="text-sm text-slate-500">Showing 1 to 4 of 24 results</span>
                <div class="flex gap-2">
                    <button
                        class="p-2 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors disabled:opacity-50"
                        disabled="">
                        <span class="material-icons text-sm">chevron_left</span>
                    </button>
                    <button
                        class="w-9 h-9 flex items-center justify-center bg-primary text-white rounded-lg text-sm font-medium">1</button>
                    <button
                        class="w-9 h-9 flex items-center justify-center border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-sm font-medium transition-colors">2</button>
                    <button
                        class="w-9 h-9 flex items-center justify-center border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-sm font-medium transition-colors">3</button>
                    <button
                        class="p-2 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                        <span class="material-icons text-sm">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Promotion Banner -->
        <div
            class="mt-8 bg-gradient-to-r from-primary to-indigo-600 rounded-xl p-8 text-white flex flex-col md:flex-row items-center justify-between gap-6 overflow-hidden relative">
            <div class="absolute right-0 top-0 opacity-10">
                <span class="material-icons text-[200px]">auto_awesome</span>
            </div>
            <div class="relative z-10">
                <h3 class="text-xl font-bold mb-2">Boost your reach with Featured Ads</h3>
                <p class="text-white/80 max-w-lg">Get up to 5x more qualified applications by promoting your job listings
                    to the top of our search results.</p>
            </div>
            <button
                class="bg-white text-primary px-6 py-2.5 rounded-lg font-bold whitespace-nowrap hover:bg-slate-100 transition-colors relative z-10">
                Learn More
            </button>
        </div>
    </main>
@endsection
