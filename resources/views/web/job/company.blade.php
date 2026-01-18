@extends('layouts.web.guest')

@section('title', 'Company')

@section('content')
    <x-web.job-main>
        <div class="flex-1 flex flex-col gap-6">
            <div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-gray-100 dark:border-gray-700">
                <h2 class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] pb-4">
                    About
                    TechNova Solutions</h2>
                <div class="text-[#617289] dark:text-gray-300 text-base leading-relaxed space-y-4">
                    <p>TechNova Solutions is a leading innovator in cloud computing and enterprise AI. Founded with the
                        mission to accelerate the digital transformation of global enterprises, we provide cutting-edge
                        software solutions that help businesses scale efficiently and securely.</p>
                    <p>With a presence in over 15 countries and a diverse team of over 5,000 employees, we pride
                        ourselves
                        on a culture of continuous learning, inclusivity, and technical excellence. Our San Francisco
                        headquarters serves as the hub for our R&amp;D and core engineering teams.</p>
                    <p>We are consistently recognized as one of the "Best Places to Work" in the tech industry, offering
                        an
                        environment where creativity meets impact.</p>
                </div>
                <div class="mt-6 flex flex-wrap gap-4">
                    <div class="bg-primary/10 px-3 py-1 rounded text-primary text-sm font-medium">#CloudComputing</div>
                    <div class="bg-primary/10 px-3 py-1 rounded text-primary text-sm font-medium">#EnterpriseAI</div>
                    <div class="bg-primary/10 px-3 py-1 rounded text-primary text-sm font-medium">#SaaS</div>
                    <div class="bg-primary/10 px-3 py-1 rounded text-primary text-sm font-medium">#Innovation</div>
                </div>
            </div>
            <!-- Quick Stats Row -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <div
                    class="bg-white dark:bg-[#1a202c] p-4 rounded-xl border border-gray-100 dark:border-gray-700 text-center">
                    <p class="text-[#617289] dark:text-gray-400 text-xs font-bold uppercase tracking-wider">Open Jobs
                    </p>
                    <p class="text-primary text-2xl font-bold mt-1">42</p>
                </div>
                <div
                    class="bg-white dark:bg-[#1a202c] p-4 rounded-xl border border-gray-100 dark:border-gray-700 text-center">
                    <p class="text-[#617289] dark:text-gray-400 text-xs font-bold uppercase tracking-wider">Rating</p>
                    <p
                        class="text-[#111418] dark:text-white text-2xl font-bold mt-1 flex items-center justify-center gap-1">
                        4.8 <span class="material-symbols-outlined text-yellow-400 text-[20px] fill-current">star</span>
                    </p>
                </div>
                <div
                    class="bg-white dark:bg-[#1a202c] p-4 rounded-xl border border-gray-100 dark:border-gray-700 text-center">
                    <p class="text-[#617289] dark:text-gray-400 text-xs font-bold uppercase tracking-wider">Followers
                    </p>
                    <p class="text-[#111418] dark:text-white text-2xl font-bold mt-1">12k</p>
                </div>
                <div
                    class="bg-white dark:bg-[#1a202c] p-4 rounded-xl border border-gray-100 dark:border-gray-700 text-center">
                    <p class="text-[#617289] dark:text-gray-400 text-xs font-bold uppercase tracking-wider">Employees
                    </p>
                    <p class="text-[#111418] dark:text-white text-2xl font-bold mt-1">5,000+</p>
                </div>
            </div>
            <div
                class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-gray-100 dark:border-gray-700 flex flex-col gap-6">
                <h3 class="text-[#111418] dark:text-white text-lg font-bold">Company Facts</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">group</span>
                        <div>
                            <p class="text-xs text-[#617289] dark:text-gray-400 font-medium">Company Size</p>
                            <p class="text-sm text-[#111418] dark:text-white font-semibold">1,001 - 5,000 Employees</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">event</span>
                        <div>
                            <p class="text-xs text-[#617289] dark:text-gray-400 font-medium">Founded</p>
                            <p class="text-sm text-[#111418] dark:text-white font-semibold">October 12, 2012</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">language</span>
                        <div>
                            <p class="text-xs text-[#617289] dark:text-gray-400 font-medium">Website</p>
                            <a class="text-sm text-primary font-semibold hover:underline"
                                href="#">www.technova.com</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span
                            class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">business_center</span>
                        <div>
                            <p class="text-xs text-[#617289] dark:text-gray-400 font-medium">Ownership</p>
                            <p class="text-sm text-[#111418] dark:text-white font-semibold">Public (NASDAQ: TNOVA)</p>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-100 dark:border-gray-700 pt-6">
                    <p class="text-xs text-[#617289] dark:text-gray-400 font-bold uppercase tracking-wider mb-4">Follow
                        us
                    </p>
                    <div class="flex gap-4">
                        <a class="size-8 rounded-full bg-gray-100 dark:bg-[#2d3748] flex items-center justify-center text-[#617289] dark:text-gray-300 hover:bg-primary/20 hover:text-primary transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-[18px]">public</span>
                        </a>
                        <a class="size-8 rounded-full bg-gray-100 dark:bg-[#2d3748] flex items-center justify-center text-[#617289] dark:text-gray-300 hover:bg-primary/20 hover:text-primary transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-[18px]">share</span>
                        </a>
                        <a class="size-8 rounded-full bg-gray-100 dark:bg-[#2d3748] flex items-center justify-center text-[#617289] dark:text-gray-300 hover:bg-primary/20 hover:text-primary transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-[18px]">link</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-web.job-main>
@endsection
