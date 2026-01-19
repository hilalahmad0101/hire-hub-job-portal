@extends('layouts.web.employee-auth')

@section('title', 'Dashboard')

@section('content')
    <!-- Stat Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div
            class="bg-white dark:bg-background-dark p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">Active Jobs</span>
                <div
                    class="size-8 rounded-lg bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 flex items-center justify-center">
                    <span class="material-symbols-outlined text-lg">work</span>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <p class="text-3xl font-bold text-slate-900 dark:text-white">12</p>
                <span class="text-emerald-500 text-sm font-bold mb-1">+2%</span>
            </div>
        </div>
        <div
            class="bg-white dark:bg-background-dark p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total
                    Applications</span>
                <div
                    class="size-8 rounded-lg bg-indigo-50 dark:bg-indigo-900/20 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-lg">description</span>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <p class="text-3xl font-bold text-slate-900 dark:text-white">458</p>
                <span class="text-emerald-500 text-sm font-bold mb-1">+15%</span>
            </div>
        </div>
        <div
            class="bg-white dark:bg-background-dark p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">Shortlisted
                    Candidates</span>
                <div
                    class="size-8 rounded-lg bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-400 flex items-center justify-center">
                    <span class="material-symbols-outlined text-lg">star</span>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <p class="text-3xl font-bold text-slate-900 dark:text-white">85</p>
                <span class="text-rose-500 text-sm font-bold mb-1">-3%</span>
            </div>
        </div>
        <div
            class="bg-white dark:bg-background-dark p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">Remaining
                    Credits</span>
                <div
                    class="size-8 rounded-lg bg-amber-50 dark:bg-amber-900/20 text-amber-600 dark:text-amber-400 flex items-center justify-center">
                    <span class="material-symbols-outlined text-lg">payments</span>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <p class="text-3xl font-bold text-slate-900 dark:text-white">5</p>
                <span class="text-slate-500 text-sm font-medium mb-1">0%</span>
            </div>
        </div>
    </div>
    <!-- Charts & Trends Section -->
    <div class="bg-white dark:bg-background-dark rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-sm">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h3 class="text-slate-900 dark:text-white text-lg font-bold">Monthly Application Trends
                </h3>
                <div class="flex items-center gap-2 mt-1">
                    <span class="text-slate-500 dark:text-slate-400 text-sm">Last 6 Months</span>
                    <span class="text-emerald-500 text-sm font-bold">+12% growth</span>
                </div>
            </div>
            <div class="flex gap-2">
                <button
                    class="px-3 py-1.5 text-xs font-bold border border-slate-200 dark:border-slate-700 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">Export
                    CSV</button>
            </div>
        </div>
        <!-- Bar Chart Implementation -->
        <div class="grid grid-flow-col auto-cols-fr items-end gap-4 h-64 px-4">
            <div class="flex flex-col items-center gap-2 group h-full justify-end">
                <div
                    class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg transition-all group-hover:bg-primary/20 relative h-[60%]">
                    <div class="absolute inset-x-0 bottom-0 bg-primary/40 rounded-t-lg h-[40%]"></div>
                </div>
                <span class="text-xs font-bold text-slate-500 dark:text-slate-400">Jan</span>
            </div>
            <div class="flex flex-col items-center gap-2 group h-full justify-end">
                <div
                    class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg transition-all group-hover:bg-primary/20 relative h-[80%]">
                    <div class="absolute inset-x-0 bottom-0 bg-primary/40 rounded-t-lg h-[55%]"></div>
                </div>
                <span class="text-xs font-bold text-slate-500 dark:text-slate-400">Feb</span>
            </div>
            <div class="flex flex-col items-center gap-2 group h-full justify-end">
                <div
                    class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg transition-all group-hover:bg-primary/20 relative h-[50%]">
                    <div class="absolute inset-x-0 bottom-0 bg-primary rounded-t-lg h-[70%]"></div>
                </div>
                <span class="text-xs font-bold text-slate-500 dark:text-slate-400">Mar</span>
            </div>
            <div class="flex flex-col items-center gap-2 group h-full justify-end">
                <div
                    class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg transition-all group-hover:bg-primary/20 relative h-[100%]">
                    <div class="absolute inset-x-0 bottom-0 bg-primary/40 rounded-t-lg h-[45%]"></div>
                </div>
                <span class="text-xs font-bold text-slate-500 dark:text-slate-400">Apr</span>
            </div>
            <div class="flex flex-col items-center gap-2 group h-full justify-end">
                <div
                    class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg transition-all group-hover:bg-primary/20 relative h-[90%]">
                    <div class="absolute inset-x-0 bottom-0 bg-primary/40 rounded-t-lg h-[65%]"></div>
                </div>
                <span class="text-xs font-bold text-slate-500 dark:text-slate-400">May</span>
            </div>
            <div class="flex flex-col items-center gap-2 group h-full justify-end">
                <div
                    class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg transition-all group-hover:bg-primary/20 relative h-[70%]">
                    <div class="absolute inset-x-0 bottom-0 bg-primary/40 rounded-t-lg h-[80%]"></div>
                </div>
                <span class="text-xs font-bold text-slate-500 dark:text-slate-400">Jun</span>
            </div>
        </div>
    </div>
    <!-- Recent Applicants Table -->
    <div
        class="bg-white dark:bg-background-dark rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
        <div class="px-6 py-5 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
            <h3 class="text-slate-900 dark:text-white text-lg font-bold">Recent Applicants</h3>
            <button class="text-primary text-sm font-bold hover:underline">View All</button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50 dark:bg-slate-800/50">
                    <tr>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Candidate</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Applied Job</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Date Applied</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Status</th>
                        <th
                            class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="size-8 rounded-full bg-slate-200 bg-cover bg-center"
                                    data-alt="Candidate profile photo"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDmU00ekFCBynSV2s60CpOzlaO4X8DS839S_45cSMtZIp65k-XsOIQJ1Yf2JA0Q_uLSGofdJAdMIjVJYqkwSk5AjSPnOkVYczg6xTRdxsmRbhPSVMd96wkmV6_P0dUt7g6IgNaLBD4cNBTeerKCyFcERoXoYgAcvcHvVShXWGPZDdngjwSqrgig_BO-9n4kiqGDAmYSzGXkHJMp_Fdu5A4HhbsKn6J9oqIJd3VcrJjKUTEoQRDT9ZQx9GJDdmbZ4NKFWDVMZkEmlA0');">
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">Alex Rivera
                                    </p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Full Stack
                                        Engineer</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300">Senior React Developer
                            </p>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300">2 mins ago</p>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                                New
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-primary hover:text-primary/80 transition-colors">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="size-8 rounded-full bg-slate-200 bg-cover bg-center"
                                    data-alt="Candidate profile photo"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCz5wF8_nB59JiwFlcZwnDGWyzK3AHE3rs896uZxtaK8W9PohZ_3McCnzo13OIfUvLHBzdQ7v8thTpW3-kw3pD2sGQMd06S1q7nbguDGnxaa0ngBEakHiYKnkwyLbOI3CZaIZs5xBsoyFkJQb4V3QRZgRzip0fhAw8TFw2NkORT9jHJHoZ6il3mmr7Fnuwv4T1xlvtUVxp9-MQ8ETKLov9OS3WRO8PXFJGerxwWCtFwZOXMezKvur5mDCvO0vRoc8oGU0JxEJ9-74Q');">
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">Marcus Chen
                                    </p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">UI Designer</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300">Product Designer</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300">3 hours ago</p>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 dark:bg-indigo-900/30 text-indigo-800 dark:text-indigo-300">
                                Shortlisted
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-primary hover:text-primary/80 transition-colors">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="size-8 rounded-full bg-slate-200 bg-cover bg-center"
                                    data-alt="Candidate profile photo"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCE_gzgFIZWJePOtE4YeSypE8FIVReYVsxOOqn2oC4lR-LEOAnHH_32mCESNs_4rQpbleF6_uuiFkUwfwRwxtD2-B4KObZMjkFcpcj0nrPmsuXmE57ERq0Vr4AEvtsqqH-Ui4ZwiJjJEE-68X80ayoP05jBNuv7FjKDQhPOONBJyXL0NyUsIfNAidUxG1-IGQ6AsUJiY0P4pP6UjlwaqXMjXzqmd68RHEJKHNn1gWJYIA5wcxCJ126xshQOSw7vCMkZX7ufOnkp8XA');">
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-900 dark:text-white">Sarah
                                        Jenkins</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Marketing Lead
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300">SEO Specialist</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-sm text-slate-600 dark:text-slate-300">Yesterday</p>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 dark:bg-amber-900/30 text-amber-800 dark:text-amber-300">
                                Interviewing
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-primary hover:text-primary/80 transition-colors">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
