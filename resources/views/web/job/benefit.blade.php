@extends('layouts.web.guest')

@section('title', 'Benefit')

@section('content')
    <x-web.job-main>
        <div>
            <div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-gray-100 dark:border-gray-700">
                <!-- Section: Health & Wellness -->
                <div class="">
                    <h2
                        class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3">
                        Health &amp; Wellness</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 p-4">
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">health_and_safety</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Medical
                                    Insurance</h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">100%
                                    employer-paid premiums for employees and 75% for dependents with multiple plan options.
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">visibility</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Dental &amp;
                                    Vision</h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">Full dental
                                    and vision insurance including annual cleanings and vision hardware stipend.</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">psychology</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Mental Health
                                    Support</h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">Free access
                                    to meditation apps and 12 sessions of confidential therapy per year.</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">fitness_center</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Gym &amp;
                                    Wellness Stipend</h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">$100 monthly
                                    stipend for gym memberships, fitness classes, or outdoor equipment.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section: Financial -->
                <div class="pt-8">
                    <h2
                        class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3">
                        Financial &amp; Retirement</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 p-4">
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">savings</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">401(k) Matching
                                </h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">
                                    Dollar-for-dollar matching up to 5% of your annual salary with immediate vesting.</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">monetization_on</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Equity &amp;
                                    Stock Options</h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">Competitive
                                    stock option grants for all full-time employees upon hiring.</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">payments</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Annual Bonus
                                </h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">
                                    Performance-based cash bonuses delivered annually based on individual and company goals.
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">receipt_long</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">HSA &amp; FSA
                                </h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">
                                    Tax-advantaged savings accounts for medical and dependent care expenses.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section: Perks & Lifestyle -->
                <div class="pt-8">
                    <h2
                        class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3">
                        Perks &amp; Lifestyle</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 p-4">
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">cottage</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Remote-First
                                    Culture</h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">Work from
                                    anywhere. We provide a $1,000 home office setup stipend.</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">event_available</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Unlimited PTO
                                </h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">Flexible
                                    vacation policy with a mandatory minimum of 3 weeks off per year.</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">school</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Learning
                                    Stipend</h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">$2,500
                                    annual budget for conferences, courses, books, and professional growth.</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-gray-800/50 p-5 flex-row items-start hover:border-primary/50 transition-all">
                            <div class="text-primary bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined">pets</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Pet Friendly
                                </h2>
                                <p class="text-[#617289] dark:text-gray-400 text-sm font-normal leading-normal">Pet
                                    insurance options and a pet-friendly office environment for those who commute.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CTA Section -->
                <div
                    class="mt-12 mx-4 p-8 bg-primary/5 dark:bg-primary/10 rounded-2xl border border-primary/20 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-[#111418] dark:text-white text-xl font-bold">Interested in these benefits?</h3>
                        <p class="text-[#617289] dark:text-gray-400">We're hiring across all departments. Join our team and
                            grow with us.</p>
                    </div>
                    <button
                        class="flex min-w-[160px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform">
                        View Openings
                    </button>
                </div>
            </div>
        </div>
    </x-web.job-main>
@endsection
