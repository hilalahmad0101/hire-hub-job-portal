@extends('layouts.web.auth')

@section('title', 'Change Password')

@section('content')
    <div class="flex-1 flex flex-col gap-6">
        <!-- Breadcrumbs -->
        <div class="flex flex-wrap items-center gap-2">
            <a class="text-[#617289] dark:text-gray-400 text-sm font-medium hover:text-primary" href="#">Settings</a>
            <span class="material-symbols-outlined text-gray-400 text-sm">chevron_right</span>
            <span class="text-[#111418] dark:text-white text-sm font-semibold">Security</span>
            <span class="material-symbols-outlined text-gray-400 text-sm">chevron_right</span>
            <span class="text-primary text-sm font-semibold">Change Password</span>
        </div>
        <!-- Header -->
        <div class="bg-white dark:bg-background-dark p-8 rounded-xl border border-gray-200 dark:border-gray-800">
            <div class="mx-auto">
                <h1 class="text-[#111418] dark:text-white tracking-tight text-2xl font-bold leading-tight pb-2">Change
                    Password</h1>
                <p class="text-[#617289] dark:text-gray-400 text-base font-normal leading-normal pb-8">
                    For your security, please do not share your password with others. We recommend using a unique password
                    that you don't use for other services.
                </p>
                <!-- Form -->
                <form class="flex flex-col gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-[#111418] dark:text-white text-sm font-semibold">Current Password</label>
                        <div class="relative">
                            <input
                                class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-3 text-[#111418] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary transition-all"
                                placeholder="Enter current password" type="password" />
                            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
                                type="button">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#111418] dark:text-white text-sm font-semibold">New Password</label>
                        <div class="relative">
                            <input
                                class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-3 text-[#111418] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary transition-all"
                                placeholder="Enter new password" type="password" />
                            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
                                type="button">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </div>
                        <!-- Password Strength Meter -->
                        <div class="mt-2 space-y-3">
                            <div class="flex gap-1 h-1.5 w-full">
                                <div class="flex-1 bg-primary rounded-full"></div>
                                <div class="flex-1 bg-primary rounded-full"></div>
                                <div class="flex-1 bg-gray-200 dark:bg-gray-700 rounded-full"></div>
                                <div class="flex-1 bg-gray-200 dark:bg-gray-700 rounded-full"></div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="flex items-center gap-2 text-xs text-green-600 dark:text-green-500">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span>
                                    At least 8 characters
                                </div>
                                <div class="flex items-center gap-2 text-xs text-green-600 dark:text-green-500">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span>
                                    One uppercase letter
                                </div>
                                <div class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">circle</span>
                                    One number
                                </div>
                                <div class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">circle</span>
                                    One special character
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#111418] dark:text-white text-sm font-semibold">Confirm New Password</label>
                        <div class="relative">
                            <input
                                class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 px-4 py-3 text-[#111418] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary transition-all"
                                placeholder="Confirm new password" type="password" />
                        </div>
                    </div>
                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                        <button
                            class="px-4 py-3 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg transition-colors"
                            type="submit">
                            Update Password
                        </button>
                        <button
                            class="px-4 py-3 text-gray-600 dark:text-gray-300 font-medium hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-colors"
                            type="button">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Security Info Card -->
        <div class="bg-primary/5 dark:bg-primary/10 border border-primary/20 p-6 rounded-xl flex gap-4 items-start">
            <span class="material-symbols-outlined text-primary">security</span>
            <div>
                <h4 class="text-primary font-bold text-sm mb-1">Account Security Tips</h4>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    Changing your password will sign you out of all your active sessions except for this one. This helps
                    prevent unauthorized access to your account from other devices.
                </p>
            </div>
        </div>
    </div>
@endsection
