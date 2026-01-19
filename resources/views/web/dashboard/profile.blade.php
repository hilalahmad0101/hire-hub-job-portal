@extends('layouts.web.auth')

@section('title', 'Profile')

@section('content')
    <div class=" mx-auto space-y-6">
        <!-- Profile Header -->
        <div
            class="bg-white dark:bg-background-dark  rounded-xl border border-[#dbe0e6] dark:border-slate-800 shadow-sm p-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div class="flex items-center gap-6">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-24 md:min-h-32 w-24 md:w-32 border-4 border-white dark:border-slate-800 shadow-sm"
                        data-alt="Alex Johnson headshot"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBhmgd-y94bDc-ekpzsH0UuDNZJykPtjDtNy4Ns6EbAhuKPf4sB5XKE39tn33gyrRxs8-8CeVyhQ_pD6M16WVc7uD5cdt_qHPP7Oo04ADEdjsPnCZ-BCnvF00ZFLWK6t_6lqLenA2nwncM8_Y5DnX3z5YHbB6kSiiy0mAcdelu_VmTeLkE_pRRWsXU6-te-hylVnhH3OCyBpc81Nm2ZYQ2yXzmsCTPZ5tb_CTG0sJXLu-kUTEP0EgaP573Aq81lTc9Opl7D2sTRcbw");'>
                    </div>
                    <div class="flex flex-col">
                        <h1
                            class="text-[#111418] dark:text-white text-2xl md:text-3xl font-bold leading-tight tracking-[-0.015em]">
                            Alex Johnson</h1>
                        <p class="text-primary text-base font-semibold">Senior Product Designer</p>
                        <p class="text-[#617289] dark:text-slate-400 text-sm mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">location_on</span>
                            San Francisco, CA • <span class="ml-1">alex.design@example.com</span>
                        </p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button
                        class="flex items-center justify-center gap-2 rounded-lg h-10 px-4 bg-background-light dark:bg-slate-800 text-[#111418] dark:text-white text-sm font-bold border border-[#dbe0e6] dark:border-slate-700 hover:bg-gray-100 transition-colors">
                        <span class="material-symbols-outlined text-lg">visibility</span>
                        Public Profile
                    </button>
                    <button
                        class="flex items-center justify-center gap-2 rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold hover:bg-blue-700 transition-colors">
                        <span class="material-symbols-outlined text-lg">edit</span>
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
        <!-- Personal Information Section -->
        <section
            class="bg-white dark:bg-background-dark  rounded-xl border border-[#dbe0e6] dark:border-slate-800 shadow-sm overflow-hidden">
            <div
                class="p-5 border-b border-[#dbe0e6] dark:border-slate-800 flex justify-between items-center bg-white dark:bg-background-dark ">
                <div class="flex flex-col gap-1">
                    <h3 class="text-[#111418] dark:text-white text-lg font-bold">Personal Information</h3>
                    <p class="text-[#617289] dark:text-slate-400 text-sm">Update your basic profile details and bio.</p>
                </div>
                <button
                    class="flex items-center gap-1 px-3 py-1.5 rounded-lg border border-[#dbe0e6] dark:border-slate-700 text-sm font-medium hover:bg-background-light dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined text-sm">edit</span>
                    Edit
                </button>
            </div>
            <div class="px-6 py-4">
                <div class="grid grid-cols-1 md:grid-cols-[200px_1fr] gap-y-4 md:gap-y-6">
                    <div
                        class="grid grid-cols-subgrid col-span-full border-b border-[#f0f2f4] dark:border-slate-800/50 py-4">
                        <p class="text-[#617289] dark:text-slate-400 text-sm font-medium">Email</p>
                        <p class="text-[#111418] dark:text-slate-200 text-sm">alex.design@example.com</p>
                    </div>
                    <div
                        class="grid grid-cols-subgrid col-span-full border-b border-[#f0f2f4] dark:border-slate-800/50 py-4">
                        <p class="text-[#617289] dark:text-slate-400 text-sm font-medium">Phone</p>
                        <p class="text-[#111418] dark:text-slate-200 text-sm">+1 (555) 123-4567</p>
                    </div>
                    <div
                        class="grid grid-cols-subgrid col-span-full border-b border-[#f0f2f4] dark:border-slate-800/50 py-4">
                        <p class="text-[#617289] dark:text-slate-400 text-sm font-medium">Website</p>
                        <p class="text-primary text-sm font-medium hover:underline cursor-pointer">www.alexdesign.com</p>
                    </div>
                    <div class="grid grid-cols-subgrid col-span-full py-4">
                        <p class="text-[#617289] dark:text-slate-400 text-sm font-medium">Bio</p>
                        <p class="text-[#111418] dark:text-slate-200 text-sm leading-relaxed max-w-2xl">
                            Product designer with over 8 years of experience building scalable design systems and
                            user-centric web applications. Passionate about bridging the gap between design and engineering.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work Experience Section -->
        <section
            class="bg-white dark:bg-background-dark  rounded-xl border border-[#dbe0e6] dark:border-slate-800 shadow-sm overflow-hidden">
            <div
                class="p-5 border-b border-[#dbe0e6] dark:border-slate-800 flex justify-between items-center bg-white dark:bg-background-dark ">
                <div class="flex flex-col gap-1">
                    <h3 class="text-[#111418] dark:text-white text-lg font-bold">Work Experience</h3>
                    <p class="text-[#617289] dark:text-slate-400 text-sm">Your professional journey and achievements.</p>
                </div>
                <button
                    class="flex items-center gap-1 px-3 py-1.5 rounded-lg border border-[#dbe0e6] dark:border-slate-700 text-sm font-medium hover:bg-background-light dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined text-sm">add</span>
                    Add Experience
                </button>
            </div>
            <div class="p-6 space-y-8">
                <!-- Experience Item 1 -->
                <div class="flex gap-4 relative">
                    <div
                        class="h-12 w-12 rounded-lg bg-background-light dark:bg-slate-800 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-slate-400">corporate_fare</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-[#111418] dark:text-white font-bold">Senior Product Designer</h4>
                                <p class="text-primary text-sm font-medium">TechNova Solutions</p>
                            </div>
                            <p
                                class="text-[#617289] dark:text-slate-400 text-xs font-medium bg-background-light dark:bg-slate-800 px-2 py-1 rounded">
                                2020 - Present</p>
                        </div>
                        <p class="mt-3 text-sm text-[#617289] dark:text-slate-400 leading-relaxed">
                            Leading the design of the core enterprise dashboard, improving user retention by 24%. Managed a
                            team of 4 designers and coordinated with cross-functional product squads.
                        </p>
                    </div>
                    <button class="absolute top-0 right-0 p-1 text-slate-400 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-lg">more_horiz</span>
                    </button>
                </div>
                <!-- Experience Item 2 -->
                <div class="flex gap-4 relative">
                    <div
                        class="h-12 w-12 rounded-lg bg-background-light dark:bg-slate-800 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-slate-400">store</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-[#111418] dark:text-white font-bold">UX Designer</h4>
                                <p class="text-primary text-sm font-medium">Creative Agency Inc.</p>
                            </div>
                            <p
                                class="text-[#617289] dark:text-slate-400 text-xs font-medium bg-background-light dark:bg-slate-800 px-2 py-1 rounded">
                                2017 - 2020</p>
                        </div>
                        <p class="mt-3 text-sm text-[#617289] dark:text-slate-400 leading-relaxed">
                            Delivered end-to-end design solutions for Fortune 500 clients. Specialized in mobile application
                            design and user research methodologies.
                        </p>
                    </div>
                    <button class="absolute top-0 right-0 p-1 text-slate-400 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-lg">more_horiz</span>
                    </button>
                </div>
            </div>
        </section>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Education Section -->
            <section
                class="bg-white dark:bg-background-dark  rounded-xl border border-[#dbe0e6] dark:border-slate-800 shadow-sm flex flex-col">
                <div class="p-5 border-b border-[#dbe0e6] dark:border-slate-800 flex justify-between items-center">
                    <h3 class="text-[#111418] dark:text-white text-lg font-bold">Education</h3>
                    <button
                        class="text-primary text-sm font-bold hover:bg-primary/10 px-2 py-1 rounded transition-colors">Add</button>
                </div>
                <div class="p-6 space-y-6 flex-1">
                    <div class="flex gap-4">
                        <div
                            class="h-10 w-10 rounded-lg bg-background-light dark:bg-slate-800 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-slate-400">school</span>
                        </div>
                        <div>
                            <h4 class="text-[#111418] dark:text-white text-sm font-bold leading-tight">BFA in Graphic Design
                            </h4>
                            <p class="text-[#617289] dark:text-slate-400 text-xs">Rhode Island School of Design</p>
                            <p class="text-[#617289] dark:text-slate-400 text-xs mt-1">Class of 2016</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div
                            class="h-10 w-10 rounded-lg bg-background-light dark:bg-slate-800 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-slate-400">history_edu</span>
                        </div>
                        <div>
                            <h4 class="text-[#111418] dark:text-white text-sm font-bold leading-tight">Professional UX
                                Certification</h4>
                            <p class="text-[#617289] dark:text-slate-400 text-xs">Google Design Institute</p>
                            <p class="text-[#617289] dark:text-slate-400 text-xs mt-1">2018</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Skills Section -->
            <section
                class="bg-white dark:bg-background-dark  rounded-xl border border-[#dbe0e6] dark:border-slate-800 shadow-sm flex flex-col">
                <div class="p-5 border-b border-[#dbe0e6] dark:border-slate-800 flex justify-between items-center">
                    <h3 class="text-[#111418] dark:text-white text-lg font-bold">Skills</h3>
                    <button
                        class="text-primary text-sm font-bold hover:bg-primary/10 px-2 py-1 rounded transition-colors">Manage</button>
                </div>
                <div class="p-6">
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="px-3 py-1.5 bg-background-light dark:bg-slate-800 text-[#111418] dark:text-slate-200 text-xs font-medium rounded-lg border border-[#dbe0e6] dark:border-slate-700">UI/UX
                            Design</span>
                        <span
                            class="px-3 py-1.5 bg-background-light dark:bg-slate-800 text-[#111418] dark:text-slate-200 text-xs font-medium rounded-lg border border-[#dbe0e6] dark:border-slate-700">Figma</span>
                        <span
                            class="px-3 py-1.5 bg-background-light dark:bg-slate-800 text-[#111418] dark:text-slate-200 text-xs font-medium rounded-lg border border-[#dbe0e6] dark:border-slate-700">Prototyping</span>
                        <span
                            class="px-3 py-1.5 bg-background-light dark:bg-slate-800 text-[#111418] dark:text-slate-200 text-xs font-medium rounded-lg border border-[#dbe0e6] dark:border-slate-700">Design
                            Systems</span>
                        <span
                            class="px-3 py-1.5 bg-background-light dark:bg-slate-800 text-[#111418] dark:text-slate-200 text-xs font-medium rounded-lg border border-[#dbe0e6] dark:border-slate-700">User
                            Research</span>
                        <span
                            class="px-3 py-1.5 bg-background-light dark:bg-slate-800 text-[#111418] dark:text-slate-200 text-xs font-medium rounded-lg border border-[#dbe0e6] dark:border-slate-700">React</span>
                        <span
                            class="px-3 py-1.5 bg-background-light dark:bg-slate-800 text-[#111418] dark:text-slate-200 text-xs font-medium rounded-lg border border-[#dbe0e6] dark:border-slate-700">HTML/CSS</span>
                        <span
                            class="px-3 py-1.5 bg-background-light dark:bg-slate-800 text-[#111418] dark:text-slate-200 text-xs font-medium rounded-lg border border-[#dbe0e6] dark:border-slate-700">Agile</span>
                    </div>
                </div>
            </section>
        </div>
        <!-- Delete Account (Danger Zone) -->
        <div class="pt-10 pb-6">
            <div
                class="flex items-center justify-between p-4 rounded-xl border border-red-200 dark:border-red-900/50 bg-red-50 dark:bg-red-900/10">
                <div>
                    <p class="text-red-700 dark:text-red-400 text-sm font-bold">Privacy &amp; Account</p>
                    <p class="text-red-600 dark:text-red-500/80 text-xs">Permanently delete your profile and all associated
                        data.</p>
                </div>
                <button
                    class="px-4 py-2 text-red-600 dark:text-red-400 text-xs font-bold hover:bg-red-100 dark:hover:bg-red-900/20 rounded-lg transition-colors">
                    Delete Account
                </button>
            </div>
        </div>
    </div>
@endsection
