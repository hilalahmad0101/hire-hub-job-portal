@extends('layouts.web.guest')

@section('title', 'Job List')

@push('styles')
    <style type="text/tailwindcss">
        @layer base {
            body {
                @apply bg-slate-50 dark:bg-[#0f172a] text-slate-900 dark:text-gray-100 font-sans;
            }
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 20;
            font-size: 20px;
        }

        .filter-section {
            @apply border-b border-slate-100 dark:border-gray-700 pb-6 mb-6 last:border-0;
        }

        .premium-shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.02), 0 1px 2px -1px rgba(0, 0, 0, 0.02);
        }

        .card-hover {
            @apply transition-all duration-300 ease-in-out;
        }

        .card-hover:hover {
            @apply shadow-xl shadow-indigo-500/5 dark:shadow-indigo-500/10 -translate-y-0.5 border-indigo-100 dark:border-indigo-900;
        }

        input[type="range"] {
            @apply appearance-none bg-slate-200 dark:bg-gray-700 h-1 rounded-full;
        }

        input[type="range"]::-webkit-slider-thumb {
            @apply appearance-none w-5 h-5 bg-white dark:bg-gray-200 border-2 border-accent rounded-full cursor-pointer shadow-md;
            transition: all 0.2s ease;
        }

        input[type="range"]::-webkit-slider-thumb:hover {
            @apply scale-110 bg-accent;
        }

        .custom-checkbox {
            @apply w-5 h-5 rounded border-slate-300 dark:border-gray-600 text-accent focus:ring-accent/20 transition-all cursor-pointer;
        }

        .custom-radio {
            @apply w-5 h-5 border-slate-300 dark:border-gray-600 text-accent focus:ring-accent/20 transition-all cursor-pointer;
        }
    </style>
@endpush

@section('content')
    <main class="flex-1 mt-20">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-6">
            <div class="bg-white dark:bg-[#1a202c] px-6 lg:px-6 border-b border-slate-100 dark:border-gray-700 pt-12 pb-14">
                <div class="mb-8">
                    <h1 class="text-3xl font-800 text-slate-custom dark:text-white tracking-tight mb-2">Discover your next
                        move</h1>
                    <p class="text-slate-500 dark:text-gray-400 font-medium">Over 2,400+ premium positions available today.
                    </p>
                </div>
                <div
                    class="flex flex-col md:flex-row items-stretch gap-3 p-2 bg-white dark:bg-[#2d3748] rounded-2xl shadow-2xl shadow-slate-200/50 dark:shadow-gray-900/50 border border-slate-100 dark:border-gray-700">
                    <div class="flex-1 flex items-center px-4 py-3 group">
                        <span
                            class="material-symbols-outlined text-slate-400 dark:text-gray-500 group-focus-within:text-accent transition-colors">search</span>
                        <input
                            class="w-full border-none bg-transparent focus:ring-0 text-slate-700 dark:text-gray-200 font-medium placeholder:text-slate-400 dark:placeholder:text-gray-500"
                            placeholder="Role, company or expertise" type="text" value="Frontend Developer" />
                    </div>
                    <div class="hidden md:block w-px bg-slate-100 dark:bg-gray-700 my-2"></div>
                    <div class="flex-1 flex items-center px-4 py-3 group">
                        <span
                            class="material-symbols-outlined text-slate-400 dark:text-gray-500 group-focus-within:text-accent transition-colors">location_on</span>
                        <input
                            class="w-full border-none bg-transparent focus:ring-0 text-slate-700 dark:text-gray-200 font-medium placeholder:text-slate-400 dark:placeholder:text-gray-500"
                            placeholder="City, country or remote" type="text" value="Remote" />
                    </div>
                    <button
                        class="px-10 h-14 bg-accent text-white font-bold rounded-xl hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-200/40 dark:shadow-indigo-900/40">
                        Search Jobs
                    </button>
                </div>
            </div>
        </div>
        <div class="max-w-[1280px] mx-auto px-6 flex gap-10 py-10 w-full">
           <aside class="w-full lg:w-80 flex flex-col gap-6">
                <!-- Search Box -->
                <div
                    class="bg-white dark:bg-[#1a202c] p-5 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-lg">search</span>
                        <input
                            class="w-full bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-600 rounded-lg py-3 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary placeholder:text-gray-500 dark:text-white"
                            placeholder="Search jobs, companies..." type="text" />
                    </div>
                </div>

                <!-- Filter by Category -->
                <div
                    class="bg-white dark:bg-[#1a202c] p-5 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-[#111418] dark:text-white text-sm font-bold">Category</h3>
                        <button class="text-xs text-primary hover:underline font-medium">Clear all</button>
                    </div>
                    <div class="flex flex-col gap-3">
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input checked class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Engineering</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">24</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Design</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">12</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Product</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">8</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Marketing</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">15</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Sales</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">6</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Job Type -->
                <div
                    class="bg-white dark:bg-[#1a202c] p-5 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-[#111418] dark:text-white text-sm font-bold">Job Type</h3>
                        <button class="text-xs text-primary hover:underline font-medium">Clear all</button>
                    </div>
                    <div class="flex flex-col gap-3">
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input checked class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Full-time</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">38</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Part-time</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">8</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Contract</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">12</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Remote</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">22</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Salary Range -->
                <div
                    class="bg-white dark:bg-[#1a202c] p-5 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-[#111418] dark:text-white text-sm font-bold">Salary Range</h3>
                        <button class="text-xs text-primary hover:underline font-medium">Clear all</button>
                    </div>
                    <div class="flex flex-col gap-3">
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="salary"
                                type="radio" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">$0
                                    - $80k</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">5</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="salary"
                                type="radio" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">$80k
                                    - $120k</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">18</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="salary"
                                type="radio" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">$120k
                                    - $160k</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">15</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="border-gray-300 text-primary focus:ring-primary h-4 w-4" name="salary"
                                type="radio" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">$160k+</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">12</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Experience Level -->
                <div
                    class="bg-white dark:bg-[#1a202c] p-5 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-[#111418] dark:text-white text-sm font-bold">Experience Level</h3>
                        <button class="text-xs text-primary hover:underline font-medium">Clear all</button>
                    </div>
                    <div class="flex flex-col gap-3">
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Entry
                                    Level</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">8</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Mid
                                    Level</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">20</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Senior
                                    Level</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">25</span>
                            </div>
                        </label>
                        <label
                            class="flex items-center gap-3 cursor-pointer group p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4"
                                type="checkbox" />
                            <div class="flex-1 flex items-center justify-between">
                                <span
                                    class="text-sm text-[#111418] dark:text-gray-300 group-hover:text-primary transition-colors">Director/VP</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">6</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Apply Filters Button -->
                <button data-loading data-loading-text="Applying..."
                    class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-3 rounded-lg transition-colors shadow-lg shadow-primary/20">
                    Apply Filters
                </button>
            </aside>
            <div class="flex-1 flex flex-col gap-8">
                <div
                    class="flex items-center justify-between bg-white dark:bg-[#1a202c] px-6 py-4 rounded-xl border border-slate-100 dark:border-gray-700">
                    <div>
                        <span class="text-sm font-medium text-slate-500 dark:text-gray-400">Showing <span
                                class="text-slate-900 dark:text-white font-bold">124</span> premium opportunities</span>
                    </div>
                    <div class="flex items-center gap-6">
                        <div class="flex items-center gap-2">
                            <span
                                class="text-[10px] font-800 text-slate-400 dark:text-gray-500 uppercase tracking-widest">Sort
                                by:</span>
                            <select
                                class="bg-transparent border-none text-sm font-bold text-slate-700 dark:text-gray-200 focus:ring-0 cursor-pointer p-0">
                                <option>Most Recent</option>
                                <option>Highest Compensation</option>
                                <option>Strategic Relevance</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div
                        class="group bg-white dark:bg-[#1a202c] border border-slate-100 dark:border-gray-700 p-6 lg:p-8 rounded-2xl card-hover cursor-pointer relative">
                        <div class="flex items-start gap-6">
                            <div
                                class="size-14 rounded-2xl bg-purple-50 dark:bg-purple-900/30 flex items-center justify-center overflow-hidden flex-shrink-0 border border-purple-100/50 dark:border-purple-800/50">
                                <img alt="Logo" class="object-contain w-8 h-8"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaH2T5G_HIUDQdbKwYc4UQb-IDwttltZvwgHhrHjUVn4q23yJjjtn-tPgSE-QB9l_E4hDGbBHLHQwHM1QE1iLV_HX-QtKb8K8B5ha4PROH0bnxXkRRAe275skRqGx5p8hrce6G4lsoicEmcy1R1MO3mVvv_06j4vVIGJp6tjxE4c5f0WqsQADdovRfyLmU-6_3MijmJhFQnn14PT69IxW4i7TvRH0Jbi9ADuz9oDJOTCs3ICIBSQnIZxjqT3wTyhNGwD1Nbpoc4sI" />
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3
                                            class="text-xl font-700 text-slate-custom dark:text-white group-hover:text-accent transition-colors mb-1">
                                            Principal Product Designer</h3>
                                        <p
                                            class="text-sm font-medium text-slate-500 dark:text-gray-400 flex items-center gap-2">
                                            CreativePulse Labs <span
                                                class="size-1 rounded-full bg-slate-300 dark:bg-gray-600"></span>
                                            London, UK (Hybrid)
                                        </p>
                                    </div>
                                    <div class="text-right">
                                        <span class="block text-lg font-700 text-slate-900 dark:text-white">$160k –
                                            $210k</span>
                                        <span
                                            class="text-[11px] font-bold text-slate-400 dark:text-gray-500 uppercase tracking-tighter">per
                                            annum</span>
                                    </div>
                                </div>
                                <div class="mt-6 flex flex-wrap gap-2 items-center">
                                    <span
                                        class="px-3 py-1 bg-sky-50 text-sky-700 text-[11px] font-bold rounded-full border border-sky-100">Work
                                        from anywhere</span>
                                    <span
                                        class="px-3 py-1 bg-rose-50 text-rose-700 text-[11px] font-bold rounded-full border border-rose-100">Unlimited
                                        PTO</span>
                                    <div class="flex-1"></div>
                                    <div class="flex items-center gap-4">
                                        <span class="text-xs font-medium text-slate-400 dark:text-gray-500">Posted 5h
                                            ago</span>
                                        <button
                                            class="h-10 px-6 rounded-full border border-slate-200 dark:border-gray-700 text-sm font-bold text-slate-700 dark:text-gray-300 hover:bg-slate-custom hover:text-white hover:border-slate-custom transition-all">
                                            Apply Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="group bg-white dark:bg-[#1a202c] border border-slate-100 dark:border-gray-700 p-6 lg:p-8 rounded-2xl card-hover cursor-pointer relative">
                        <div class="flex items-start gap-6">
                            <div
                                class="size-14 rounded-2xl bg-orange-50 dark:bg-orange-900/30 flex items-center justify-center overflow-hidden flex-shrink-0 border border-orange-100/50 dark:border-orange-800/50">
                                <img alt="Logo" class="object-contain w-8 h-8"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtFIyU-oevJd_stUR_UIjxC9JR-htkbNSUapcjeogP_Ha5Io98CdMRp4Rsz6-msBH7ir8xVjUUR5ddCqCvsjlKE724rRW5euH4Wq_2RM3bJL2FLhx4nVzAuk0bQKs9UywJdHoatEFbwmA30DJtKrt6wW45ieS8FD9KqheVhCdGEnNApu2ms2SNfps8ca4bYSDkz8FYwGy9OhhVHgY4W-eE6VijzIQ6TCM-kX9kwsOtTkfYPCi_Bu9Gj94A1pQAm8Sv0j4PwsNDIZ8" />
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3
                                            class="text-xl font-700 text-slate-custom dark:text-white group-hover:text-accent transition-colors mb-1">
                                            Growth Marketing Lead</h3>
                                        <p
                                            class="text-sm font-medium text-slate-500 dark:text-gray-400 flex items-center gap-2">
                                            GrowthOps <span
                                                class="size-1 rounded-full bg-slate-300 dark:bg-gray-600"></span> Austin,
                                            TX
                                        </p>
                                    </div>
                                    <div class="text-right">
                                        <span class="block text-lg font-700 text-slate-900 dark:text-white">$110k –
                                            $145k</span>
                                        <span
                                            class="text-[11px] font-bold text-slate-400 dark:text-gray-500 uppercase tracking-tighter">per
                                            annum</span>
                                    </div>
                                </div>
                                <div class="mt-6 flex flex-wrap gap-2 items-center">
                                    <span
                                        class="px-3 py-1 bg-emerald-50 text-emerald-700 text-[11px] font-bold rounded-full border border-emerald-100">Annual
                                        Bonus</span>
                                    <span
                                        class="px-3 py-1 bg-slate-50 text-slate-600 text-[11px] font-bold rounded-full border border-slate-100">Fitness
                                        Stipend</span>
                                    <div class="flex-1"></div>
                                    <div class="flex items-center gap-4">
                                        <span class="text-xs font-medium text-slate-400 dark:text-gray-500">Posted 1 day
                                            ago</span>
                                        <button
                                            class="h-10 px-6 rounded-full border border-slate-200 dark:border-gray-700 text-sm font-bold text-slate-700 dark:text-gray-300 hover:bg-slate-custom hover:text-white hover:border-slate-custom transition-all">
                                            Apply Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="group bg-white dark:bg-[#1a202c] border border-slate-100 dark:border-gray-700 p-6 lg:p-8 rounded-2xl card-hover cursor-pointer relative">
                        <div class="flex items-start gap-6">
                            <div
                                class="size-14 rounded-2xl bg-slate-100 dark:bg-gray-700 flex items-center justify-center overflow-hidden flex-shrink-0 border border-slate-200/50 dark:border-gray-600/50">
                                <img alt="Logo" class="object-contain w-8 h-8"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKxBuHrBmB_YhJoMdG-O5ZZtxPrXZmtPbRDIROXFod25LtTgGbbH461yvxu1bKcXyB8_8Tc0mHKSCK3ygy9HBnZ0FKU08frTXTaxSb5aVhlLSBa39WhmJ15JKwFGSEfQlWCJe39IHApcP6SXves6jeuKywpxUVXXGRR0X67hirLBc43DpCEKBsSQhhmGXCgUjrLfRe_sfvJR_vhXNoi6dGH5U3bomjLDAMtJzo4Q31CuQA23NrXtv_9qv_LIc2BxVl-uEpiGuL-NE" />
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3
                                            class="text-xl font-700 text-slate-custom dark:text-white group-hover:text-accent transition-colors mb-1">
                                            Lead Backend Engineer (Go)</h3>
                                        <p
                                            class="text-sm font-medium text-slate-500 dark:text-gray-400 flex items-center gap-2">
                                            DataBridge <span
                                                class="size-1 rounded-full bg-slate-300 dark:bg-gray-600"></span> New York,
                                            NY
                                            (Remote)
                                        </p>
                                    </div>
                                    <div class="text-right">
                                        <span class="block text-lg font-700 text-slate-900 dark:text-white">$150k –
                                            $200k</span>
                                        <span
                                            class="text-[11px] font-bold text-slate-400 dark:text-gray-500 uppercase tracking-tighter">per
                                            annum</span>
                                    </div>
                                </div>
                                <div class="mt-6 flex flex-wrap gap-2 items-center">
                                    <span
                                        class="px-3 py-1 bg-violet-50 text-violet-700 text-[11px] font-bold rounded-full border border-violet-100">High
                                        Growth</span>
                                    <span
                                        class="px-3 py-1 bg-emerald-50 text-emerald-700 text-[11px] font-bold rounded-full border border-emerald-100">Parental
                                        Leave</span>
                                    <div class="flex-1"></div>
                                    <div class="flex items-center gap-4">
                                        <span class="text-xs font-medium text-slate-400 dark:text-gray-500">Posted 2 days
                                            ago</span>
                                        <button
                                            class="h-10 px-6 rounded-full border border-slate-200 dark:border-gray-700 text-sm font-bold text-slate-700 dark:text-gray-300 hover:bg-slate-custom hover:text-white hover:border-slate-custom transition-all">
                                            Apply Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-12">
                        <button
                            class="flex items-center gap-2 px-6 py-3 border-2 border-slate-100 dark:border-gray-700 rounded-xl text-sm font-bold text-slate-400 dark:text-gray-500 cursor-not-allowed"
                            disabled="">
                            <span class="material-symbols-outlined">arrow_back</span>
                            Previous
                        </button>
                        <div class="flex items-center gap-2">
                            <button
                                class="size-11 rounded-xl bg-gray-500 dark:bg-gray-700 text-white text-sm font-bold shadow-lg shadow-slate-200 dark:shadow-gray-900">1</button>
                            <button
                                class="size-11 rounded-xl text-slate-500 dark:text-gray-400 text-sm font-bold hover:bg-white dark:hover:bg-gray-800 hover:shadow-sm transition-all">2</button>
                            <button
                                class="size-11 rounded-xl text-slate-500 dark:text-gray-400 text-sm font-bold hover:bg-white dark:hover:bg-gray-800 hover:shadow-sm transition-all">3</button>
                            <span class="px-2 text-slate-300 dark:text-gray-600 font-bold">...</span>
                            <button
                                class="size-11 rounded-xl text-slate-500 dark:text-gray-400 text-sm font-bold hover:bg-white dark:hover:bg-gray-800 hover:shadow-sm transition-all">12</button>
                        </div>
                        <button
                            class="flex items-center gap-2 px-6 py-3 border-2 border-slate-100 dark:border-gray-700 rounded-xl text-sm font-bold text-slate-700 dark:text-gray-300 hover:border-slate-200 dark:hover:border-gray-600 hover:bg-white dark:hover:bg-gray-800 transition-all">
                            Next
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
