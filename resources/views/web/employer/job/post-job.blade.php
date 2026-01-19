@extends('layouts.web.employee-auth')

@section('title', 'Post Job')

@section('content')
    <!-- Page Heading -->
    <div class="flex flex-wrap justify-between items-end gap-3 mb-8">
        <div class="flex flex-col gap-2">
            <h1 class="text-[#121118] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Post a New Job
            </h1>
            <p class="text-[#656189] dark:text-gray-400 text-base font-normal">Fill in the details to find your next great
                hire.</p>
        </div>
        <button class="flex items-center gap-2 text-primary font-semibold text-sm hover:underline">
            <span class="material-symbols-outlined text-sm">visibility</span>
            Preview Listing
        </button>
    </div>
    <!-- Progress Bar Stepper -->
    <div class="bg-white dark:bg-white/5 border border-[#dcdbe6] dark:border-white/10 rounded-xl p-6 mb-8">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white font-bold text-sm">1
                </div>
                <span class="font-bold text-[#121118] dark:text-white">Job Details</span>
            </div>
            <div class="h-[2px] flex-1 mx-4 bg-[#dcdbe6] dark:bg-white/10">
                <div class="h-full bg-primary/30 w-1/3"></div>
            </div>
            <div class="flex items-center gap-3 opacity-50">
                <div
                    class="flex h-8 w-8 items-center justify-center rounded-full bg-[#dcdbe6] dark:bg-white/20 text-[#121118] dark:text-white font-bold text-sm">
                    2</div>
                <span class="font-medium text-[#121118] dark:text-white">Requirements</span>
            </div>
            <div class="h-[2px] flex-1 mx-4 bg-[#dcdbe6] dark:bg-white/10"></div>
            <div class="flex items-center gap-3 opacity-50">
                <div
                    class="flex h-8 w-8 items-center justify-center rounded-full bg-[#dcdbe6] dark:bg-white/20 text-[#121118] dark:text-white font-bold text-sm">
                    3</div>
                <span class="font-medium text-[#121118] dark:text-white">Settings</span>
            </div>
        </div>
        <div class="flex justify-between items-center text-sm">
            <p class="text-[#656189] dark:text-gray-400">Step 1 of 3: Basic Information</p>
            <p class="text-primary font-medium">Next: Requirements</p>
        </div>
    </div>
    <!-- Form Sections -->
    <div class="space-y-6">
        <!-- Job Basic Details -->
        <section class="bg-white dark:bg-white/5 border border-[#dcdbe6] dark:border-white/10 rounded-xl overflow-hidden">
            <h2 class="text-[#121118] dark:text-white text-[20px] font-bold px-6 pt-6 pb-2">Job Basics</h2>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div class="col-span-2">
                    <label class="flex flex-col gap-2">
                        <span class="text-[#121118] dark:text-white text-sm font-semibold">Job Title</span>
                        <input
                            class="w-full rounded-lg border border-[#dcdbe6] dark:border-white/20 bg-white dark:bg-white/5 text-[#121118] dark:text-white h-12 px-4 focus:ring-2 focus:ring-primary focus:border-primary placeholder:text-[#656189]"
                            placeholder="e.g. Senior Product Designer" type="text" />
                    </label>
                </div>
                <!-- Category -->
                <div class="col-span-1">
                    <label class="flex flex-col gap-2">
                        <span class="text-[#121118] dark:text-white text-sm font-semibold">Category</span>
                        <select
                            class="w-full rounded-lg border border-[#dcdbe6] dark:border-white/20 bg-white dark:bg-white/5 text-[#121118] dark:text-white h-12 px-4 focus:ring-2 focus:ring-primary focus:border-primary">
                            <option>Design</option>
                            <option>Engineering</option>
                            <option>Marketing</option>
                            <option>Sales</option>
                            <option>Product Management</option>
                        </select>
                    </label>
                </div>
                <!-- Job Type Toggle -->
                <div class="col-span-1">
                    <span class="text-[#121118] dark:text-white text-sm font-semibold block mb-2">Job Type</span>
                    <div class="flex p-1 bg-[#f0f0f4] dark:bg-white/10 rounded-lg">
                        <button
                            class="flex-1 py-2 text-sm font-bold rounded-md bg-white dark:bg-primary shadow-sm text-primary dark:text-white">On-site</button>
                        <button class="flex-1 py-2 text-sm font-medium text-[#656189] dark:text-gray-400">Remote</button>
                        <button class="flex-1 py-2 text-sm font-medium text-[#656189] dark:text-gray-400">Hybrid</button>
                    </div>
                </div>
                <!-- Salary Range -->
                <div class="col-span-2">
                    <span class="text-[#121118] dark:text-white text-sm font-semibold block mb-2">Salary Range (Annual
                        USD)</span>
                    <div class="flex items-center gap-4">
                        <div class="relative flex-1">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-[#656189]">$</span>
                            <input
                                class="w-full pl-8 pr-4 rounded-lg border border-[#dcdbe6] dark:border-white/20 bg-white dark:bg-white/5 text-[#121118] dark:text-white h-12 focus:ring-2 focus:ring-primary focus:border-primary"
                                placeholder="Min (e.g. 80,000)" type="number" />
                        </div>
                        <span class="text-[#656189]">to</span>
                        <div class="relative flex-1">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-[#656189]">$</span>
                            <input
                                class="w-full pl-8 pr-4 rounded-lg border border-[#dcdbe6] dark:border-white/20 bg-white dark:bg-white/5 text-[#121118] dark:text-white h-12 focus:ring-2 focus:ring-primary focus:border-primary"
                                placeholder="Max (e.g. 120,000)" type="number" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Job Description (Rich Text Simulation) -->
        <section class="bg-white dark:bg-white/5 border border-[#dcdbe6] dark:border-white/10 rounded-xl overflow-hidden">
            <h2 class="text-[#121118] dark:text-white text-[20px] font-bold px-6 pt-6 pb-2">Job Description</h2>
            <div class="px-6 pb-6">
                <div class="border border-[#dcdbe6] dark:border-white/20 rounded-lg overflow-hidden">
                    <div
                        class="bg-[#f0f0f4] dark:bg-white/10 border-b border-[#dcdbe6] dark:border-white/10 p-2 flex gap-2">
                        <button class="p-1.5 hover:bg-white dark:hover:bg-white/10 rounded transition-colors"><span
                                class="material-symbols-outlined text-xl">format_bold</span></button>
                        <button class="p-1.5 hover:bg-white dark:hover:bg-white/10 rounded transition-colors"><span
                                class="material-symbols-outlined text-xl">format_italic</span></button>
                        <button class="p-1.5 hover:bg-white dark:hover:bg-white/10 rounded transition-colors"><span
                                class="material-symbols-outlined text-xl">format_list_bulleted</span></button>
                        <button class="p-1.5 hover:bg-white dark:hover:bg-white/10 rounded transition-colors"><span
                                class="material-symbols-outlined text-xl">format_list_numbered</span></button>
                        <div class="w-px h-6 bg-[#dcdbe6] dark:bg-white/20 mx-1"></div>
                        <button class="p-1.5 hover:bg-white dark:hover:bg-white/10 rounded transition-colors"><span
                                class="material-symbols-outlined text-xl">link</span></button>
                    </div>
                    <textarea
                        class="w-full p-4 border-none focus:ring-0 bg-transparent text-[#121118] dark:text-white placeholder:text-[#656189]"
                        placeholder="Describe the role, responsibilities, and what a typical day looks like..." rows="8"></textarea>
                </div>
                <p class="mt-2 text-xs text-[#656189] dark:text-gray-400">Pro tip: Jobs with clear, concise descriptions get
                    30% more applicants.</p>
            </div>
        </section>
        <!-- Settings -->
        <section class="bg-white dark:bg-white/5 border border-[#dcdbe6] dark:border-white/10 rounded-xl overflow-hidden">
            <h2 class="text-[#121118] dark:text-white text-[20px] font-bold px-6 pt-6 pb-2">Application Deadline</h2>
            <div class="p-6">
                <label class="flex flex-col gap-2 max-w-sm">
                    <span class="text-[#121118] dark:text-white text-sm font-semibold">Select Date</span>
                    <div class="relative">
                        <span
                            class="absolute right-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-[#656189]">calendar_today</span>
                        <input
                            class="w-full rounded-lg border border-[#dcdbe6] dark:border-white/20 bg-white dark:bg-white/5 text-[#121118] dark:text-white h-12 px-4 focus:ring-2 focus:ring-primary focus:border-primary"
                            type="date" />
                    </div>
                </label>
            </div>
        </section>
        <!-- Bottom Actions -->
        <div class="flex items-center justify-between pt-6 border-t border-[#dcdbe6] dark:border-white/10">
            <button
                class="px-6 py-3 rounded-lg border border-[#dcdbe6] dark:border-white/20 text-[#121118] dark:text-white font-bold hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                Back
            </button>
            <div class="flex gap-4">
                <button
                    class="px-6 py-3 rounded-lg border border-[#dcdbe6] dark:border-white/20 text-[#121118] dark:text-white font-bold hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                    Save as Draft
                </button>
                <button
                    class="px-8 py-3 rounded-lg bg-primary text-white font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all flex items-center gap-2">
                    Post Job
                    <span class="material-symbols-outlined text-lg">rocket_launch</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Spacer -->
    <div class="h-20"></div>
@endsection
