@extends('layouts.web.auth')

@section('title', 'Dashboard')

@section('content')
    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div
            class="bg-white dark:bg-[#1a2432] p-6 rounded-xl border border-[#dbe0e6] dark:border-gray-800 flex items-center justify-between">
            <div class="flex flex-col">
                <p class="text-sm font-medium text-[#617289] dark:text-gray-400 uppercase tracking-wider mb-1">
                    Applied Jobs</p>
                <p class="text-3xl font-bold dark:text-white">12</p>
            </div>
            <div class="size-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
                <span class="material-symbols-outlined" style="font-size: 28px;">send</span>
            </div>
        </div>
        <div
            class="bg-white dark:bg-[#1a2432] p-6 rounded-xl border border-[#dbe0e6] dark:border-gray-800 flex items-center justify-between">
            <div class="flex flex-col">
                <p class="text-sm font-medium text-[#617289] dark:text-gray-400 uppercase tracking-wider mb-1">
                    Interviews</p>
                <p class="text-3xl font-bold dark:text-white">4</p>
            </div>
            <div
                class="size-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center text-green-600 dark:text-green-400">
                <span class="material-symbols-outlined" style="font-size: 28px;">event_available</span>
            </div>
        </div>
        <div
            class="bg-white dark:bg-[#1a2432] p-6 rounded-xl border border-[#dbe0e6] dark:border-gray-800 flex items-center justify-between">
            <div class="flex flex-col">
                <p class="text-sm font-medium text-[#617289] dark:text-gray-400 uppercase tracking-wider mb-1">
                    Profile Views</p>
                <p class="text-3xl font-bold dark:text-white">85</p>
            </div>
            <div
                class="size-12 bg-amber-100 dark:bg-amber-900/30 rounded-lg flex items-center justify-center text-amber-600 dark:text-amber-400">
                <span class="material-symbols-outlined" style="font-size: 28px;">visibility</span>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Recent Applications Table -->
        <div class="lg:col-span-2">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold dark:text-white">Recent Applications</h3>
                <button class="text-primary text-sm font-semibold hover:underline">View All</button>
            </div>
            <div class="bg-white dark:bg-[#1a2432] rounded-xl border border-[#dbe0e6] dark:border-gray-800 overflow-hidden">
                <table class="w-full text-left">
                    <thead>
                        <tr
                            class="bg-background-light dark:bg-[#242f3d] text-[#617289] dark:text-gray-400 text-xs uppercase tracking-wider">
                            <th class="px-6 py-4 font-semibold">Job Role / Company</th>
                            <th class="px-6 py-4 font-semibold">Date Applied</th>
                            <th class="px-6 py-4 font-semibold">Status</th>
                            <th class="px-6 py-4 font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#dbe0e6] dark:divide-gray-800">
                        <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-sm">Senior Product Designer</span>
                                    <span class="text-xs text-[#617289] dark:text-gray-400">TechCorp
                                        Systems</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm">Oct 22, 2023</td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400">Pending</span>
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-primary font-bold text-sm">View</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-sm">UX Researcher</span>
                                    <span class="text-xs text-[#617289] dark:text-gray-400">Designly
                                        Studio</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm">Oct 20, 2023</td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-2.5 py-1 rounded-full text-xs font-semibold bg-primary/10 text-primary dark:bg-primary/20 dark:text-blue-400">Interview</span>
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-primary font-bold text-sm">View</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-sm">Lead Frontend Engineer</span>
                                    <span class="text-xs text-[#617289] dark:text-gray-400">WebFlow
                                        App</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm">Oct 18, 2023</td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-2.5 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400">Rejected</span>
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-primary font-bold text-sm">View</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <span class="font-semibold text-sm">Product Manager</span>
                                    <span class="text-xs text-[#617289] dark:text-gray-400">InnovaSoft</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm">Oct 15, 2023</td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400">Pending</span>
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-primary font-bold text-sm">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Notifications Widget -->
        <div>
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold dark:text-white">Recent Activity</h3>
                <button class="text-[#617289] dark:text-gray-400 hover:text-primary">
                    <span class="material-symbols-outlined text-xl">more_horiz</span>
                </button>
            </div>
            <div class="bg-white dark:bg-[#1a2432] rounded-xl border border-[#dbe0e6] dark:border-gray-800 p-4 space-y-4">
                <!-- Alert 1 -->
                <div class="flex gap-4">
                    <div
                        class="size-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 shrink-0">
                        <span class="material-symbols-outlined text-xl">calendar_today</span>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-sm font-semibold dark:text-gray-200">Interview scheduled</p>
                        <p class="text-xs text-[#617289] dark:text-gray-400">With TechCorp Systems for UX
                            role.</p>
                        <p class="text-[10px] text-primary font-bold mt-1 uppercase">2 hours ago</p>
                    </div>
                </div>
                <hr class="border-[#dbe0e6] dark:border-gray-800" />
                <!-- Alert 2 -->
                <div class="flex gap-4">
                    <div
                        class="size-10 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-600 dark:text-green-400 shrink-0">
                        <span class="material-symbols-outlined text-xl">visibility</span>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-sm font-semibold dark:text-gray-200">Application viewed</p>
                        <p class="text-xs text-[#617289] dark:text-gray-400">Designly Studio reviewed your
                            CV.</p>
                        <p class="text-[10px] text-[#617289] font-bold mt-1 uppercase">5 hours ago</p>
                    </div>
                </div>
                <hr class="border-[#dbe0e6] dark:border-gray-800" />
                <!-- Alert 3 -->
                <div class="flex gap-4">
                    <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
                        <span class="material-symbols-outlined text-xl">auto_awesome</span>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-sm font-semibold dark:text-gray-200">New job match</p>
                        <p class="text-xs text-[#617289] dark:text-gray-400">Senior Designer role at
                            MetaMatch.</p>
                        <p class="text-[10px] text-[#617289] font-bold mt-1 uppercase">1 day ago</p>
                    </div>
                </div>
                <button
                    class="w-full mt-2 py-2 text-sm font-semibold text-[#617289] dark:text-gray-400 bg-background-light dark:bg-[#242f3d] rounded-lg hover:bg-primary hover:text-white transition-all">
                    See all notifications
                </button>
            </div>
            <!-- Mini Ad/Profile Tip Card -->
            <div class="mt-6 p-5 bg-primary rounded-xl text-white relative overflow-hidden">
                <div class="relative z-10">
                    <h4 class="font-bold text-lg leading-tight mb-2">Enhance your CV</h4>
                    <p class="text-sm text-blue-100 mb-4 leading-snug">Users with professional portfolios
                        get 4x more interview calls.</p>
                    <button
                        class="bg-white text-primary px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider">Upgrade
                        now</button>
                </div>
                <span
                    class="material-symbols-outlined absolute -bottom-4 -right-4 text-8xl opacity-10">rocket_launch</span>
            </div>
        </div>
    </div>
@endsection
