@extends('layouts.web.guest')

@section('title', 'Contact')

@section('content')
    <main class="flex-1 flex flex-col items-center">
        <div class="w-full max-w-[1280px] px-8 py-12">
            <!-- Page Heading -->
            <div class="flex flex-col gap-3 mb-12">
                <h1 class="text-[#111418] dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                    Get in Touch</h1>
                <p class="text-[#617289] dark:text-[#a0aab8] text-lg font-normal max-w-2xl">Have questions about our job
                    listings or career tools? Our team is ready to assist you every step of the way.</p>
            </div>
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Left Column: Contact Info & Map -->
                <div class="flex flex-col flex-1 gap-8">
                    <div>
                        <h2
                            class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] mb-6">
                            Contact Information</h2>
                        <div class="space-y-2">
                            <!-- Email Item -->
                            <div
                                class="flex items-center gap-4 bg-white dark:bg-[#1c242f] p-4 rounded-xl shadow-sm border border-[#f0f2f4] dark:border-[#2a3038]">
                                <div
                                    class="text-primary flex items-center justify-center rounded-lg bg-primary/10 shrink-0 size-12">
                                    <span class="material-symbols-outlined">mail</span>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <p class="text-[#111418] dark:text-white text-base font-semibold leading-normal">Email
                                    </p>
                                    <p class="text-[#617289] dark:text-[#a0aab8] text-sm font-normal">
                                        support@jobplatform.com</p>
                                </div>
                            </div>
                            <!-- Phone Item -->
                            <div
                                class="flex items-center gap-4 bg-white dark:bg-[#1c242f] p-4 rounded-xl shadow-sm border border-[#f0f2f4] dark:border-[#2a3038]">
                                <div
                                    class="text-primary flex items-center justify-center rounded-lg bg-primary/10 shrink-0 size-12">
                                    <span class="material-symbols-outlined">call</span>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <p class="text-[#111418] dark:text-white text-base font-semibold leading-normal">Phone
                                    </p>
                                    <p class="text-[#617289] dark:text-[#a0aab8] text-sm font-normal">+1 (555) 000-0000</p>
                                </div>
                            </div>
                            <!-- Address Item -->
                            <div
                                class="flex items-center gap-4 bg-white dark:bg-[#1c242f] p-4 rounded-xl shadow-sm border border-[#f0f2f4] dark:border-[#2a3038]">
                                <div
                                    class="text-primary flex items-center justify-center rounded-lg bg-primary/10 shrink-0 size-12">
                                    <span class="material-symbols-outlined">location_on</span>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <p class="text-[#111418] dark:text-white text-base font-semibold leading-normal">Office
                                        Address</p>
                                    <p class="text-[#617289] dark:text-[#a0aab8] text-sm font-normal">123 Tech Plaza, San
                                        Francisco, CA 94105</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Map Section -->
                    <div
                        class="w-full h-64 rounded-xl overflow-hidden shadow-lg border border-[#f0f2f4] dark:border-[#2a3038] relative bg-[#e5e7eb] dark:bg-[#1c242f]">
                        <img alt="Map location in San Francisco" class="w-full h-full object-cover grayscale opacity-80"
                            data-location="San Francisco"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsCZLQw_3dMB7Uc-MUb4MA-ou0OrCJ3bqwXxzT1H-3Py-jGb94sceGvTeEZ6xeAv3PyL1jow3PmhbQ1VyTZR6eh_LU2B-i3_CJq4l9VAZEI21jU_uWQuEZxXJrAUtuuM3NpC7O4YTgfcN7QlkTYxbGO7L2UrtNOGwRXdv29_dHkM8bNaSsVSReICt-LuoW_IsGKeiE9cs9ONPiAi6a55avRfUzCP5c1nabVLgXAPXOPvUYF2X4GW9IYorAsuxkNF6KfXrrslFhNNw" />
                        <div class="absolute inset-0 bg-primary/5 pointer-events-none"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <span class="material-symbols-outlined text-primary text-5xl">location_on</span>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Contact Form -->
                <div
                    class="flex flex-col flex-[1.4] bg-white dark:bg-[#1c242f] p-8 md:p-10 rounded-2xl shadow-xl border border-[#f0f2f4] dark:border-[#2a3038]">
                    <h2 class="text-[#111418] dark:text-white text-2xl font-bold mb-8">Send us a Message</h2>
                    <form class="flex flex-col gap-6" onsubmit="return false;">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name Field -->
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-[#111418] dark:text-[#a0aab8]">Full Name</label>
                                <input
                                    class="border w-full rounded-lg border-[#d1d5db] dark:border-[#2a3038] bg-transparent focus:ring-primary focus:border-primary px-4 py-3 text-base outline-none"
                                    placeholder="John Doe" type="text" />
                            </div>
                            <!-- Email Field -->
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-[#111418] dark:text-[#a0aab8]">Email
                                    Address</label>
                                <input
                                    class="border w-full rounded-lg border-[#d1d5db] dark:border-[#2a3038] bg-transparent focus:ring-primary focus:border-primary px-4 py-3 text-base outline-none"
                                    placeholder="john@example.com" type="email" />
                            </div>
                        </div>
                        <!-- Subject Field -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-[#111418] dark:text-[#a0aab8]">Subject</label>
                            <input
                                class="border w-full rounded-lg border-[#d1d5db] dark:border-[#2a3038] bg-transparent focus:ring-primary focus:border-primary px-4 py-3 text-base outline-none"
                                placeholder="How can we help?" type="text" />
                        </div>
                        <!-- Message Field -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-[#111418] dark:text-[#a0aab8]">Message</label>
                            <textarea
                                class="border w-full rounded-lg border-[#d1d5db] dark:border-[#2a3038] bg-transparent focus:ring-primary focus:border-primary px-4 py-3 text-base outline-none resize-none"
                                placeholder="Write your message here..." rows="5"></textarea>
                        </div>
                        <!-- Submit Button -->
                        <button
                            class="flex items-center justify-center w-full md:w-max min-w-[180px] bg-primary hover:bg-[#0f5ac9] text-white font-bold py-4 px-8 rounded-lg transition-all shadow-md active:scale-95"
                            type="submit">
                            Send Message
                            <span class="material-symbols-outlined ml-2 text-xl">send</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
