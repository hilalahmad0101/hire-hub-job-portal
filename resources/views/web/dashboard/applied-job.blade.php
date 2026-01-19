@extends('layouts.web.auth')

@section('title', 'Applied Job')

@section('content')
    <!-- Page Heading -->
    <div class="flex flex-wrap justify-between items-end gap-4 mb-8">
        <div class="flex flex-col gap-2">
            <p class="text-[#111418] dark:text-white text-4xl font-black tracking-tight">Applied Jobs</p>
            <p class="text-[#617289] dark:text-gray-400 text-base font-normal">You have applied to 24 jobs in the last 30
                days.</p>
        </div>
        <button
            class="flex items-center gap-2 rounded-lg h-11 px-6 bg-[#f0f2f4] dark:bg-gray-800 text-[#111418] dark:text-white text-sm font-bold hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
            <span class="material-symbols-outlined text-lg">add_circle</span>
            Find More Jobs
        </button>
    </div>
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
        <div
            class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-gray-900 border border-[#dbe0e6] dark:border-gray-800 shadow-sm">
            <p class="text-[#617289] dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Total Applications</p>
            <div class="flex items-baseline gap-2">
                <p class="text-[#111418] dark:text-white text-3xl font-bold leading-tight">24</p>
                <p class="text-[#07883b] text-sm font-semibold">+15% this month</p>
            </div>
        </div>
        <div
            class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-gray-900 border border-[#dbe0e6] dark:border-gray-800 shadow-sm">
            <p class="text-[#617289] dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Active Interviews</p>
            <div class="flex items-baseline gap-2">
                <p class="text-[#111418] dark:text-white text-3xl font-bold leading-tight">5</p>
                <p class="text-[#07883b] text-sm font-semibold">+2 new</p>
            </div>
        </div>
        <div
            class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-gray-900 border border-[#dbe0e6] dark:border-gray-800 shadow-sm">
            <p class="text-[#617289] dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Pending Responses</p>
            <div class="flex items-baseline gap-2">
                <p class="text-[#111418] dark:text-white text-3xl font-bold leading-tight">12</p>
                <p class="text-[#617289] dark:text-gray-400 text-sm font-semibold">0% change</p>
            </div>
        </div>
    </div>
    <!-- Tabs Navigation -->
    <div class="mb-6 border-b border-[#dbe0e6] dark:border-gray-800">
        <div class="flex gap-8 overflow-x-auto no-scrollbar">
            <a class="flex flex-col items-center justify-center border-b-[3px] border-primary text-primary pb-3 pt-2"
                href="#">
                <p class="text-sm font-bold whitespace-nowrap">All Applications</p>
            </a>
            <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-[#617289] dark:text-gray-400 pb-3 pt-2 hover:text-primary transition-colors"
                href="#">
                <p class="text-sm font-bold whitespace-nowrap">Interviewing</p>
            </a>
            <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-[#617289] dark:text-gray-400 pb-3 pt-2 hover:text-primary transition-colors"
                href="#">
                <p class="text-sm font-bold whitespace-nowrap">Pending</p>
            </a>
            <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-[#617289] dark:text-gray-400 pb-3 pt-2 hover:text-primary transition-colors"
                href="#">
                <p class="text-sm font-bold whitespace-nowrap">Closed</p>
            </a>
        </div>
    </div>
    <!-- Tracking Table -->
    <div
        class="bg-white dark:bg-gray-900 border border-[#dbe0e6] dark:border-gray-800 rounded-xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead
                    class="bg-[#f8f9fa] dark:bg-gray-800/50 text-[#617289] dark:text-gray-400 text-xs font-semibold uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-4">Company &amp; Role</th>
                        <th class="px-6 py-4">Applied Date</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#dbe0e6] dark:divide-gray-800">
                    <!-- Table Row 1 -->
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/40 transition-colors">
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">
                                <div class="size-10 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center flex-shrink-0"
                                    data-alt="Stripe company logo"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDqS8Mt64HvffREX314al-1CdtmNgE2R_P8rwN4lcI2dZ1BejDWV0HywdbMH81P5z32ncxCC-r6gdpP4E8Z6jCPNmukEE4J1o165XVdJLlwfupfYs9SuFW6aUZppuCH3IeEaUCabLp6uR0n7dQwd1h58D92TeFmb4Jd6p3fZkOBFnsPN0wF0DZgFUkeCeOCEPRgvkINbObumHlFWSJF91e0ykHeudD6o2yTA8NdbjAorqqm0CKK8oYaKxOdR0-V87Sz-STPWB1N7Fw'); background-size: cover;">
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-[#111418] dark:text-white leading-tight">Senior Product
                                        Designer</p>
                                    <p class="text-xs text-[#617289] dark:text-gray-400 mt-0.5">Stripe • Remote</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5">
                            <p class="text-sm text-[#111418] dark:text-gray-300">Oct 24, 2023</p>
                        </td>
                        <td class="px-6 py-5">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">
                                Interviewing
                            </span>
                        </td>
                        <td class="px-6 py-5 text-right">
                            <a class="text-sm font-bold text-primary hover:underline" href="#">View Application</a>
                        </td>
                    </tr>
                    <!-- Table Row 2 -->
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/40 transition-colors">
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">
                                <div class="size-10 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center flex-shrink-0"
                                    data-alt="Google company logo"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDuXExmQJ1ebl2dM1y_D8JO-fiaQHN8BrF8QTdKs0USDJ1FSEu9Faa1sN99emK1LShOIZpIsriDOlH_G5cwDWNGNZ3-JHOEbbemBIjzZXruMdTOsmro4xS0h2Bpa5iPPmO1kR1_rbRrA14dJ4TbzO6XSxbvT1qOn__yTk7QpxNVzBYhYq6UonWRVcFy2iYt0fq8SOZDKMi2t0ytXaGixb5uLEQ3sqPZbSDUABIcLF28A3zGuSnKs7qEYIKYwUxNWIirkLqintiOllk'); background-size: cover;">
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-[#111418] dark:text-white leading-tight">Frontend
                                        Engineer</p>
                                    <p class="text-xs text-[#617289] dark:text-gray-400 mt-0.5">Google • Mountain View, CA
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5">
                            <p class="text-sm text-[#111418] dark:text-gray-300">Oct 22, 2023</p>
                        </td>
                        <td class="px-6 py-5">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-5 text-right">
                            <a class="text-sm font-bold text-primary hover:underline" href="#">View Application</a>
                        </td>
                    </tr>
                    <!-- Table Row 3 -->
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/40 transition-colors">
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">
                                <div class="size-10 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center flex-shrink-0"
                                    data-alt="Airbnb company logo"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCwD7wD_y2drWI6-l3S0_vtggSRlymoKC7bfvrwxmdA8dD9hLODZndm6rJn22ivlF-R9uAg_fxhrlZ3-7QSCkRn9wrj_D9LhWtXluW6VtgkWGh0UJrTVjwSW1YbSQoaeLbP5ohcmwz-YRorT9w3-_HmUGKY9GeZqQaobSs9wn5zLnsTLl-Z2GFkg9EBcLio6FJJ7B0aVOHBsvEl2vcYmPAlUCRauOwfbgHloIZ2n0euq2HxTAsyP7U20QzKkpXIkxMiAYf2wvR6a9M'); background-size: cover;">
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-[#111418] dark:text-white leading-tight">Product
                                        Manager</p>
                                    <p class="text-xs text-[#617289] dark:text-gray-400 mt-0.5">Airbnb • San Francisco, CA
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5">
                            <p class="text-sm text-[#111418] dark:text-gray-300">Oct 18, 2023</p>
                        </td>
                        <td class="px-6 py-5">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400">
                                Rejected
                            </span>
                        </td>
                        <td class="px-6 py-5 text-right">
                            <a class="text-sm font-bold text-primary hover:underline" href="#">View Application</a>
                        </td>
                    </tr>
                    <!-- Table Row 4 -->
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/40 transition-colors">
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">
                                <div class="size-10 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center flex-shrink-0"
                                    data-alt="Slack company logo"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD_2LduEaFmI4udx3_PTak-HTj90blmGwWV3g7tt2TABRjtIaZyS5y0WRGJ_tZ9Po1gJspw2W81mBXIWaa_t7Pe2BrIVTZi2KCcwMfRC1n--a5EFMCsko8ZbE7_02-pOwQ6IwRZLmaNZ4x85WUp-3omXWTgSw8h9YaA3N9XOg4pOvxp2l5ATkhQiITRJYr9dfEYC6TwrOhJ0TYlCFaB3FvZooEjU3qHPbWe5U-y4SPT5NiM_ORCZHyj5d7z-y-85swsbgSP8L6TdpY'); background-size: cover;">
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-[#111418] dark:text-white leading-tight">UI Engineer
                                    </p>
                                    <p class="text-xs text-[#617289] dark:text-gray-400 mt-0.5">Slack • Hybrid</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5">
                            <p class="text-sm text-[#111418] dark:text-gray-300">Oct 15, 2023</p>
                        </td>
                        <td class="px-6 py-5">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                Offer Received
                            </span>
                        </td>
                        <td class="px-6 py-5 text-right">
                            <a class="text-sm font-bold text-primary hover:underline" href="#">View Application</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination Footer -->
        <div
            class="px-6 py-4 border-t border-[#dbe0e6] dark:border-gray-800 flex items-center justify-between bg-[#f8f9fa] dark:bg-gray-800/30">
            <p class="text-xs text-[#617289] dark:text-gray-400 font-medium">Showing 1 to 4 of 24 applications</p>
            <div class="flex gap-2">
                <button
                    class="px-3 py-1.5 rounded-lg border border-[#dbe0e6] dark:border-gray-700 text-xs font-bold text-[#111418] dark:text-white bg-white dark:bg-gray-800 hover:bg-gray-50 transition-colors disabled:opacity-50"
                    disabled="">
                    Previous
                </button>
                <button
                    class="px-3 py-1.5 rounded-lg border border-[#dbe0e6] dark:border-gray-700 text-xs font-bold text-[#111418] dark:text-white bg-white dark:bg-gray-800 hover:bg-gray-50 transition-colors">
                    Next
                </button>
            </div>
        </div>
    </div>
@endsection
