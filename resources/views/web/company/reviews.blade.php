@extends('layouts.web.guest')

@section('title', 'Reviews')

@section('content')
    <x-web.company-main>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Left Sidebar: Summaries -->
            <aside class="lg:col-span-4 space-y-6">
                <!-- Rating Summary -->
                <div
                    class="bg-white dark:bg-white/5 rounded-xl p-6 border border-[#f0f2f4] dark:border-white/10 sticky top-24">
                    <h3 class="text-lg font-bold mb-4">Reviews Summary</h3>
                    <div class="flex items-center gap-4 mb-6">
                        <p class="text-[#111418] dark:text-white text-5xl font-black tracking-tighter">4.5</p>
                        <div>
                            <div class="flex text-yellow-400 mb-1">
                                <span class="material-symbols-outlined fill text-[20px]">star</span>
                                <span class="material-symbols-outlined fill text-[20px]">star</span>
                                <span class="material-symbols-outlined fill text-[20px]">star</span>
                                <span class="material-symbols-outlined fill text-[20px]">star</span>
                                <span class="material-symbols-outlined fill text-[20px]">star_half</span>
                            </div>
                            <p class="text-[#617289] dark:text-white/60 text-sm font-medium">15,234 reviews</p>
                        </div>
                    </div>
                    <div class="space-y-3 mb-8">
                        <div class="grid grid-cols-[20px_1fr_40px] items-center gap-3">
                            <p class="text-sm font-bold">5</p>
                            <div class="h-2 rounded-full bg-[#f0f2f4] dark:bg-white/10 overflow-hidden">
                                <div class="bg-primary h-full" style="width: 65%;"></div>
                            </div>
                            <p class="text-[#617289] dark:text-white/60 text-xs text-right">65%</p>
                        </div>
                        <div class="grid grid-cols-[20px_1fr_40px] items-center gap-3">
                            <p class="text-sm font-bold">4</p>
                            <div class="h-2 rounded-full bg-[#f0f2f4] dark:bg-white/10 overflow-hidden">
                                <div class="bg-primary h-full" style="width: 20%;"></div>
                            </div>
                            <p class="text-[#617289] dark:text-white/60 text-xs text-right">20%</p>
                        </div>
                        <div class="grid grid-cols-[20px_1fr_40px] items-center gap-3">
                            <p class="text-sm font-bold">3</p>
                            <div class="h-2 rounded-full bg-[#f0f2f4] dark:bg-white/10 overflow-hidden">
                                <div class="bg-primary h-full" style="width: 10%;"></div>
                            </div>
                            <p class="text-[#617289] dark:text-white/60 text-xs text-right">10%</p>
                        </div>
                        <div class="grid grid-cols-[20px_1fr_40px] items-center gap-3">
                            <p class="text-sm font-bold">2</p>
                            <div class="h-2 rounded-full bg-[#f0f2f4] dark:bg-white/10 overflow-hidden">
                                <div class="bg-primary h-full" style="width: 3%;"></div>
                            </div>
                            <p class="text-[#617289] dark:text-white/60 text-xs text-right">3%</p>
                        </div>
                        <div class="grid grid-cols-[20px_1fr_40px] items-center gap-3">
                            <p class="text-sm font-bold">1</p>
                            <div class="h-2 rounded-full bg-[#f0f2f4] dark:bg-white/10 overflow-hidden">
                                <div class="bg-primary h-full" style="width: 2%;"></div>
                            </div>
                            <p class="text-[#617289] dark:text-white/60 text-xs text-right">2%</p>
                        </div>
                    </div>
                    <h3 class="text-sm font-bold uppercase tracking-wider text-[#617289] dark:text-white/40 mb-4">Rating
                        Breakdown</h3>
                    <div class="space-y-4">
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center text-sm">
                                <span class="font-medium">Culture &amp; Values</span>
                                <span class="font-bold text-primary">4.8</span>
                            </div>
                            <div class="h-1.5 rounded-full bg-[#f0f2f4] dark:bg-white/10 overflow-hidden">
                                <div class="bg-primary/60 h-full" style="width: 96%;"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center text-sm">
                                <span class="font-medium">Work-Life Balance</span>
                                <span class="font-bold text-primary">4.2</span>
                            </div>
                            <div class="h-1.5 rounded-full bg-[#f0f2f4] dark:bg-white/10 overflow-hidden">
                                <div class="bg-primary/60 h-full" style="width: 84%;"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center text-sm">
                                <span class="font-medium">Senior Management</span>
                                <span class="font-bold text-primary">4.0</span>
                            </div>
                            <div class="h-1.5 rounded-full bg-[#f0f2f4] dark:bg-white/10 overflow-hidden">
                                <div class="bg-primary/60 h-full" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center text-sm">
                                <span class="font-medium">Comp &amp; Benefits</span>
                                <span class="font-bold text-primary">4.7</span>
                            </div>
                            <div class="h-1.5 rounded-full bg-[#f0f2f4] dark:bg-white/10 overflow-hidden">
                                <div class="bg-primary/60 h-full" style="width: 94%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Right Content: Review Feed -->
            <div class="lg:col-span-8 space-y-4">
                <!-- Filters Bar -->
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
                <!-- Review Card 1 -->
                <article
                    class="bg-white dark:bg-white/5 rounded-xl p-6 border border-[#f0f2f4] dark:border-white/10 space-y-4 hover:border-primary/30 transition-colors">
                    <div class="flex justify-between items-start">
                        <div class="space-y-1">
                            <h4 class="text-lg font-black leading-tight">"Great culture, but slow growth"</h4>
                            <div class="flex items-center gap-3">
                                <div class="flex text-yellow-400">
                                    <span class="material-symbols-outlined fill text-[18px]">star</span>
                                    <span class="material-symbols-outlined fill text-[18px]">star</span>
                                    <span class="material-symbols-outlined fill text-[18px]">star</span>
                                    <span class="material-symbols-outlined fill text-[18px]">star</span>
                                    <span class="material-symbols-outlined text-[18px]">star</span>
                                </div>
                                <span
                                    class="text-xs font-bold px-2 py-0.5 bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded">Verified
                                    Review</span>
                            </div>
                        </div>
                        <span class="text-xs text-[#617289] dark:text-white/40">October 12, 2023</span>
                    </div>
                    <div class="text-sm font-medium text-[#617289] dark:text-white/60">
                        Current Employee - Software Engineer in San Francisco, CA
                    </div>
                    <p class="text-sm leading-relaxed text-[#111418] dark:text-white/90">
                        The engineering culture here is top-notch. Everyone is incredibly supportive and there is a strong
                        emphasis on clean code and peer reviews. The benefits package is world-class, including full health
                        coverage and generous 401k matching.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
                        <div class="space-y-2">
                            <div class="flex items-center gap-2 text-green-600 dark:text-green-400 font-bold text-sm">
                                <span class="material-symbols-outlined text-[18px]">check_circle</span>
                                <span>Pros</span>
                            </div>
                            <ul class="text-xs space-y-1 text-[#617289] dark:text-white/60 list-disc pl-5">
                                <li>Remote-first environment</li>
                                <li>Excellent health benefits</li>
                                <li>Latest tech stack</li>
                            </ul>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2 text-red-600 dark:text-red-400 font-bold text-sm">
                                <span class="material-symbols-outlined text-[18px]">cancel</span>
                                <span>Cons</span>
                            </div>
                            <ul class="text-xs space-y-1 text-[#617289] dark:text-white/60 list-disc pl-5">
                                <li>Slow promotion cycles</li>
                                <li>Meetings can be overwhelming</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-[#f0f2f4] dark:border-white/10 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <button
                                class="flex items-center gap-1 text-xs font-bold text-[#617289] dark:text-white/40 hover:text-primary">
                                <span class="material-symbols-outlined text-[18px]">thumb_up</span>
                                <span>Helpful (24)</span>
                            </button>
                            <button
                                class="flex items-center gap-1 text-xs font-bold text-[#617289] dark:text-white/40 hover:text-primary">
                                <span class="material-symbols-outlined text-[18px]">share</span>
                                <span>Share</span>
                            </button>
                        </div>
                        <button
                            class="text-xs font-bold text-[#617289] dark:text-white/40 hover:text-red-500">Report</button>
                    </div>
                </article>
                <!-- Review Card 2 -->
                <article
                    class="bg-white dark:bg-white/5 rounded-xl p-6 border border-[#f0f2f4] dark:border-white/10 space-y-4 hover:border-primary/30 transition-colors">
                    <div class="flex justify-between items-start">
                        <div class="space-y-1">
                            <h4 class="text-lg font-black leading-tight">"Innovation is the core here"</h4>
                            <div class="flex items-center gap-3">
                                <div class="flex text-yellow-400">
                                    <span class="material-symbols-outlined fill text-[18px]">star</span>
                                    <span class="material-symbols-outlined fill text-[18px]">star</span>
                                    <span class="material-symbols-outlined fill text-[18px]">star</span>
                                    <span class="material-symbols-outlined fill text-[18px]">star</span>
                                    <span class="material-symbols-outlined fill text-[18px]">star</span>
                                </div>
                            </div>
                        </div>
                        <span class="text-xs text-[#617289] dark:text-white/40">September 28, 2023</span>
                    </div>
                    <div class="text-sm font-medium text-[#617289] dark:text-white/60">
                        Former Employee - Product Designer in Austin, TX
                    </div>
                    <p class="text-sm leading-relaxed text-[#111418] dark:text-white/90">
                        Working at TechNova was a career-defining experience. The design team is treated as a first-class
                        citizen in the product development process. I learned more in two years here than I did in the
                        previous five at other firms. Highly recommend for any ambitious creative.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
                        <div class="space-y-2">
                            <div class="flex items-center gap-2 text-green-600 dark:text-green-400 font-bold text-sm">
                                <span class="material-symbols-outlined text-[18px]">check_circle</span>
                                <span>Pros</span>
                            </div>
                            <ul class="text-xs space-y-1 text-[#617289] dark:text-white/60 list-disc pl-5">
                                <li>High-impact projects</li>
                                <li>Great mentorship from senior leaders</li>
                                <li>Unlimited PTO that people actually use</li>
                            </ul>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2 text-red-600 dark:text-red-400 font-bold text-sm">
                                <span class="material-symbols-outlined text-[18px]">cancel</span>
                                <span>Cons</span>
                            </div>
                            <ul class="text-xs space-y-1 text-[#617289] dark:text-white/60 list-disc pl-5">
                                <li>Workload can be intense during launches</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-[#f0f2f4] dark:border-white/10 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <button
                                class="flex items-center gap-1 text-xs font-bold text-[#617289] dark:text-white/40 hover:text-primary">
                                <span class="material-symbols-outlined text-[18px]">thumb_up</span>
                                <span>Helpful (12)</span>
                            </button>
                            <button
                                class="flex items-center gap-1 text-xs font-bold text-[#617289] dark:text-white/40 hover:text-primary">
                                <span class="material-symbols-outlined text-[18px]">share</span>
                                <span>Share</span>
                            </button>
                        </div>
                        <button
                            class="text-xs font-bold text-[#617289] dark:text-white/40 hover:text-red-500">Report</button>
                    </div>
                </article>
                <!-- Load More Button -->
                <button
                    class="w-full py-4 bg-[#f0f2f4] dark:bg-white/10 text-sm font-bold rounded-xl hover:bg-[#e4e7ea] dark:hover:bg-white/20 transition-all">
                    Load More Reviews
                </button>
            </div>
        </div>
    </x-web.company-main>
@endsection
