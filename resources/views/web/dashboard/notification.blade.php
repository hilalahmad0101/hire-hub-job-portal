@extends('layouts.web.auth')

@section('title', 'Notification')

@section('content')
    <div class="flex flex-1 justify-center">
        <div class="layout-content-container flex flex-col w-full">
            <!-- Page Heading -->
            <div class="flex flex-wrap justify-between items-end gap-3 pb-6">
                <p class="text-gray-900 dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Notifications
                </p>
                <button
                    class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-gray-200 dark:hover:bg-gray-700 transition-all">
                    <span class="truncate">Mark all as read</span>
                </button>
            </div>
            <!-- Tabs -->
            <div class="pb-6">
                <div class="flex border-b border-gray-200 dark:border-gray-800 gap-8">
                    <a class="flex flex-col items-center justify-center border-b-[3px] border-primary text-primary pb-[13px] pt-4"
                        href="#">
                        <p class="text-sm font-bold leading-normal tracking-[0.015em]">All</p>
                    </a>
                    <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-gray-500 dark:text-gray-400 pb-[13px] pt-4 hover:text-primary transition-colors"
                        href="#">
                        <p class="text-sm font-bold leading-normal tracking-[0.015em]">Unread (3)</p>
                    </a>
                    <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-gray-500 dark:text-gray-400 pb-[13px] pt-4 hover:text-primary transition-colors"
                        href="#">
                        <p class="text-sm font-bold leading-normal tracking-[0.015em]">Read</p>
                    </a>
                </div>
            </div>
            <!-- Notification List -->
            <div class="flex flex-col gap-2">
                <!-- Notification Item: Unread / Success -->
                <div
                    class="flex items-center gap-4 bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-xl px-4 min-h-[88px] py-4 justify-between group hover:bg-primary/10 transition-colors relative">
                    <div class="flex items-center gap-4">
                        <div class="absolute left-1 top-1/2 -translate-y-1/2 w-1.5 h-1.5 bg-primary rounded-full"></div>
                        <div
                            class="text-green-600 dark:text-green-400 flex items-center justify-center rounded-lg bg-green-50 dark:bg-green-900/30 shrink-0 size-12">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-gray-900 dark:text-white text-base font-bold leading-normal line-clamp-1">Your
                                application for Senior UI Designer was viewed</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm font-normal leading-normal line-clamp-2">
                                TechCorp viewed your profile and application for the Senior UI Designer position. Good luck!
                            </p>
                        </div>
                    </div>
                    <div class="shrink-0 text-right">
                        <p class="text-primary text-xs font-bold mb-1 uppercase tracking-wider">New</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">2 hours ago</p>
                    </div>
                </div>
                <!-- Notification Item: Unread / Message -->
                <div
                    class="flex items-center gap-4 bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-xl px-4 min-h-[88px] py-4 justify-between group hover:bg-primary/10 transition-colors relative">
                    <div class="flex items-center gap-4">
                        <div class="absolute left-1 top-1/2 -translate-y-1/2 w-1.5 h-1.5 bg-primary rounded-full"></div>
                        <div
                            class="text-primary flex items-center justify-center rounded-lg bg-primary/10 dark:bg-primary/20 shrink-0 size-12">
                            <span class="material-symbols-outlined">chat</span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-gray-900 dark:text-white text-base font-bold leading-normal line-clamp-1">Hiring
                                Manager at TechCorp sent you a message</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm font-normal leading-normal line-clamp-2">"Hi
                                there, we'd love to schedule a quick introductory call to discuss your portfolio and role
                                expectations..."</p>
                        </div>
                    </div>
                    <div class="shrink-0 text-right">
                        <p class="text-primary text-xs font-bold mb-1 uppercase tracking-wider">New</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">5 hours ago</p>
                    </div>
                </div>
                <!-- Notification Item: Unread / Alert -->
                <div
                    class="flex items-center gap-4 bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-xl px-4 min-h-[88px] py-4 justify-between group hover:bg-primary/10 transition-colors relative">
                    <div class="flex items-center gap-4">
                        <div class="absolute left-1 top-1/2 -translate-y-1/2 w-1.5 h-1.5 bg-primary rounded-full"></div>
                        <div
                            class="text-amber-600 dark:text-amber-400 flex items-center justify-center rounded-lg bg-amber-50 dark:bg-amber-900/30 shrink-0 size-12">
                            <span class="material-symbols-outlined">warning</span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-gray-900 dark:text-white text-base font-bold leading-normal line-clamp-1">Profile
                                Incomplete: Missing Resume</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm font-normal leading-normal line-clamp-2">Your
                                profile is missing a resume. Upload one now to increase your visibility to top recruiters.
                            </p>
                        </div>
                    </div>
                    <div class="shrink-0 text-right">
                        <p class="text-primary text-xs font-bold mb-1 uppercase tracking-wider">New</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">8 hours ago</p>
                    </div>
                </div>
                <!-- Notification Item: Read / Generic -->
                <div
                    class="flex items-center gap-4 bg-white dark:bg-gray-800/50 border border-gray-100 dark:border-gray-800 rounded-xl px-4 min-h-[88px] py-4 justify-between group hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <div class="flex items-center gap-4">
                        <div
                            class="text-gray-400 flex items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-700 shrink-0 size-12">
                            <span class="material-symbols-outlined">work</span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-gray-700 dark:text-gray-300 text-base font-medium leading-normal line-clamp-1">
                                New job matches for "UI Designer"</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal line-clamp-2">We
                                found 12 new job openings that match your skills and location preferences.</p>
                        </div>
                    </div>
                    <div class="shrink-0">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Yesterday</p>
                    </div>
                </div>
                <!-- Notification Item: Read / Generic -->
                <div
                    class="flex items-center gap-4 bg-white dark:bg-gray-800/50 border border-gray-100 dark:border-gray-800 rounded-xl px-4 min-h-[88px] py-4 justify-between group hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <div class="flex items-center gap-4">
                        <div
                            class="text-gray-400 flex items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-700 shrink-0 size-12">
                            <span class="material-symbols-outlined">verified</span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-gray-700 dark:text-gray-300 text-base font-medium leading-normal line-clamp-1">
                                Account Verified</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal line-clamp-2">Your
                                professional email address has been successfully verified.</p>
                        </div>
                    </div>
                    <div class="shrink-0">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">3 days ago</p>
                    </div>
                </div>
            </div>
            <!-- Load More (Optional) -->
            <div class="flex justify-center mt-10">
                <button class="text-primary font-bold text-sm hover:underline cursor-pointer">Load older
                    notifications</button>
            </div>
        </div>
    </div>
@endsection
