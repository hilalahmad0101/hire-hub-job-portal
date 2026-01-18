@extends('layouts.web.guest')

@section('title', 'Jobs list')
@section('content')
    <x-web.company-main>
        <div class="flex flex-col lg:flex-row gap-6 px-4 py-4">
            <aside class="w-full lg:w-64 flex flex-col gap-6">
                <div class="bg-white dark:bg-[#1a202c] p-5 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                    <h3 class="text-[#111418] dark:text-white text-sm font-bold mb-4">Filter by</h3>
                    <div class="mb-6">
                        <div class="text-xs font-bold text-[#617289] dark:text-gray-400 uppercase tracking-wider mb-3 block">
                            Category</div>
                        <div class="flex flex-col gap-2">
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input checked="" class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Engineering</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Design</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Product</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Marketing</span>
                            </label>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div
                            class="text-xs font-bold text-[#617289] dark:text-gray-400 uppercase tracking-wider mb-3 block">
                            Job
                            Type</div>
                        <div class="flex flex-col gap-2">
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input checked=""
                                    class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Full-time</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Contract</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                    type="checkbox" />
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Remote</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <div
                            class="text-xs font-bold text-[#617289] dark:text-gray-400 uppercase tracking-wider mb-3 block">
                            Salary
                            Range</div>
                        <div class="flex flex-col gap-2">
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="salary"
                                    type="radio" />
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">$80k
                                    - $120k</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="salary"
                                    type="radio" />
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">$120k
                                    - $160k</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="salary"
                                    type="radio" />
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">$160k+</span>
                            </label>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="flex-1 flex flex-col gap-4">
                <div class="flex items-center justify-between px-2">
                    <p class="text-sm font-bold text-[#111418] dark:text-white">42 Open Positions</p>
                    <div class="flex items-center gap-2">
                        <span class="text-sm text-[#617289] dark:text-gray-400">Sort by:</span>
                        <select
                            class="text-sm bg-transparent border-none focus:ring-0 text-[#111418] dark:text-white font-bold cursor-pointer">
                            <option>Newest</option>
                            <option>Salary: High to Low</option>
                            <option>Most Relevant</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <div
                        class="bg-white dark:bg-[#1a202c] p-5 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow group cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex flex-col gap-1">
                                <h3
                                    class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">
                                    Senior Software Engineer (AI/ML)</h3>
                                <div class="flex flex-wrap items-center gap-4 text-sm text-[#617289] dark:text-gray-400">
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                                        San Francisco, CA
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">work</span>
                                        Full-time
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">laptop_mac</span>
                                        Remote Friendly
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-end gap-2">
                                <p class="text-xs font-bold text-gray-400 dark:text-gray-500">Posted 2 days ago</p>
                                <button
                                    class="text-primary text-sm font-bold px-4 py-2 bg-primary/5 rounded-lg hover:bg-primary/10 transition-all">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-[#1a202c] p-5 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow group cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex flex-col gap-1">
                                <h3
                                    class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">
                                    Product Designer, Ecosystem</h3>
                                <div class="flex flex-wrap items-center gap-4 text-sm text-[#617289] dark:text-gray-400">
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                                        New York, NY
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">work</span>
                                        Full-time
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">payments</span>
                                        $140k - $180k
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-end gap-2">
                                <p class="text-xs font-bold text-gray-400 dark:text-gray-500">Posted 5 days ago</p>
                                <button
                                    class="text-primary text-sm font-bold px-4 py-2 bg-primary/5 rounded-lg hover:bg-primary/10 transition-all">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-[#1a202c] p-5 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow group cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex flex-col gap-1">
                                <h3
                                    class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">
                                    Cloud Infrastructure Lead</h3>
                                <div class="flex flex-wrap items-center gap-4 text-sm text-[#617289] dark:text-gray-400">
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                                        Remote
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">work</span>
                                        Full-time
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">verified</span>
                                        Urgent
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-end gap-2">
                                <p class="text-xs font-bold text-gray-400 dark:text-gray-500">Posted 1 week ago</p>
                                <button
                                    class="text-primary text-sm font-bold px-4 py-2 bg-primary/5 rounded-lg hover:bg-primary/10 transition-all">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-[#1a202c] p-5 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow group cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex flex-col gap-1">
                                <h3
                                    class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">
                                    Strategic Account Executive</h3>
                                <div class="flex flex-wrap items-center gap-4 text-sm text-[#617289] dark:text-gray-400">
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                                        Austin, TX
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">work</span>
                                        Contract
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">language</span>
                                        Global
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-end gap-2">
                                <p class="text-xs font-bold text-gray-400 dark:text-gray-500">Posted 2 weeks ago</p>
                                <button
                                    class="text-primary text-sm font-bold px-4 py-2 bg-primary/5 rounded-lg hover:bg-primary/10 transition-all">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-2 mt-4">
                        <button
                            class="size-8 flex items-center justify-center rounded border border-gray-200 dark:border-gray-700 text-[#617289] hover:bg-gray-100 dark:hover:bg-gray-800">
                            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                        </button>
                        <button
                            class="size-8 flex items-center justify-center rounded bg-primary text-white font-bold text-sm">1</button>
                        <button
                            class="size-8 flex items-center justify-center rounded border border-gray-200 dark:border-gray-700 text-[#617289] hover:bg-gray-100 dark:hover:bg-gray-800 font-medium text-sm">2</button>
                        <button
                            class="size-8 flex items-center justify-center rounded border border-gray-200 dark:border-gray-700 text-[#617289] hover:bg-gray-100 dark:hover:bg-gray-800 font-medium text-sm">3</button>
                        <button
                            class="size-8 flex items-center justify-center rounded border border-gray-200 dark:border-gray-700 text-[#617289] hover:bg-gray-100 dark:hover:bg-gray-800">
                            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-web.company-main>
@endsection
