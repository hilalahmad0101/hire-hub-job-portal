@extends('layouts.web.guest')

@section('title', 'Reviews')

@section('content')
    <x-web.job-main>
        <div class="flex-1 space-y-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Employee Feedback</h3>
                <a href="{{ route('web.add-review') }}"
                    class="bg-primary hover:bg-primary/90 text-white font-bold py-2.5 px-6 rounded-lg transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">rate_review</span>
                    Write a Review
                </a>
            </div>
            <div class="space-y-6">
                <div
                    class="bg-white dark:bg-white/5 rounded-xl p-4 border border-[#f0f2f4] dark:border-white/10 flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <span class="text-sm font-medium text-[#617289] dark:text-white/60">Sort by:</span>
                        <div class="relative">
                            <select
                                class="appearance-none bg-[#f0f2f4] dark:bg-white/10 border-none rounded-lg text-sm font-bold py-2 pl-4 pr-10 focus:ring-2 focus:ring-primary/50">
                                <option>Most Recent</option>
                                <option>Highest Rating</option>
                                <option>Lowest Rating</option>
                                <option>Most Helpful</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-xl">expand_more</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 flex-1 justify-end">
                        <label
                            class="flex items-center gap-2 bg-[#f0f2f4] dark:bg-white/10 px-4 py-2 rounded-lg flex-1 max-w-[300px]">
                            <span class="material-symbols-outlined text-[#617289] text-[20px]">search</span>
                            <input
                                class="bg-transparent border-none p-0 text-sm w-full focus:ring-0 placeholder:text-[#617289]"
                                placeholder="Search reviews..." type="text" />
                        </label>
                    </div>
                </div>
                <article class="bg-white dark:bg-[#1a232e] p-6 rounded-xl border border-gray-100 dark:border-gray-800">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined filled-star !text-base">star</span>
                                <span class="material-symbols-outlined filled-star !text-base">star</span>
                                <span class="material-symbols-outlined filled-star !text-base">star</span>
                                <span class="material-symbols-outlined filled-star !text-base">star</span>
                                <span class="material-symbols-outlined filled-star !text-base">star</span>
                            </div>
                            <span class="text-sm font-bold text-gray-900 dark:text-white">"Incredible culture and
                                growth"</span>
                        </div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Oct 24, 2024</span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Senior Software Engineer (Current Employee) in
                        San
                        Francisco, CA</p>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-green-600 dark:text-green-400 flex items-center gap-1 mb-1">
                                <span class="material-symbols-outlined !text-sm">add_circle</span> Pros
                            </h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                The company culture is exceptional. Management truly cares about work-life balance and
                                provides
                                great mentorship opportunities. The benefits package is top-tier.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-red-600 dark:text-red-400 flex items-center gap-1 mb-1">
                                <span class="material-symbols-outlined !text-sm">remove_circle</span> Cons
                            </h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                Fast-paced environment can occasionally lead to tight deadlines, but expectations are
                                usually
                                realistic.
                            </p>
                        </div>
                    </div>
                </article>
                <article class="bg-white dark:bg-[#1a232e] p-6 rounded-xl border border-gray-100 dark:border-gray-800">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined filled-star !text-base">star</span>
                                <span class="material-symbols-outlined filled-star !text-base">star</span>
                                <span class="material-symbols-outlined filled-star !text-base">star</span>
                                <span class="material-symbols-outlined filled-star !text-base">star</span>
                                <span class="material-symbols-outlined empty-star !text-base">star</span>
                            </div>
                            <span class="text-sm font-bold text-gray-900 dark:text-white">"Great place to learn and
                                innovate"</span>
                        </div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Sep 15, 2024</span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Product Manager (Current Employee) in Remote
                    </p>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-sm font-bold text-green-600 dark:text-green-400 flex items-center gap-1 mb-1">
                                <span class="material-symbols-outlined !text-sm">add_circle</span> Pros
                            </h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                Excellent remote-first policies. The tech stack is modern and they aren't afraid to adopt
                                new
                                technologies. Strong focus on data-driven decision making.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-red-600 dark:text-red-400 flex items-center gap-1 mb-1">
                                <span class="material-symbols-outlined !text-sm">remove_circle</span> Cons
                            </h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                Communication across different time zones can be challenging at times. Documentation could
                                be
                                better in some areas.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <button
                class="w-full py-3 text-sm font-bold text-primary hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors border border-gray-200 dark:border-gray-800">
                Load more reviews
            </button>
        </div>
    </x-web.job-main>
@endsection
