@extends('layouts.web.guest')

@section('title', 'FAQ')

@section('content')
    <main class="flex-grow">
        <!-- Hero & Search -->
        <div class="bg-white dark:bg-[#1a2430] border-b border-[#dbe0e6] dark:border-gray-800 py-12">
            <div class="max-w-[1280px] mx-auto px-4">
                <h1
                    class="text-[#111418] dark:text-white tracking-light text-[40px] font-bold leading-tight text-center pb-8">
                    How can we help you?</h1>
                <div class="max-w-2xl mx-auto">
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-[#617289] dark:text-gray-400">
                            <span class="material-symbols-outlined">search</span>
                        </div>
                        <input
                            class="w-full bg-[#f0f2f4] dark:bg-[#25303f] border-none rounded-xl h-14 pl-12 pr-4 text-[#111418] dark:text-white placeholder:text-[#617289] dark:placeholder:text-gray-400 focus:ring-2 focus:ring-primary transition-all text-lg"
                            placeholder="Search for answers (e.g., 'how to upload resume', 'posting a job')..."
                            type="text" />
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Content -->
        <div class="max-w-[1280px] mx-auto px-4 py-12">
            <!-- Category Tabs -->
            <div class="pb-8">
                <div class="flex border-b border-[#dbe0e6] dark:border-gray-800 gap-8 justify-center">
                    <a class="flex flex-col items-center justify-center border-b-[3px] border-primary text-primary pb-[13px] pt-4 px-4 transition-all"
                        href="#">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">person</span>
                            <p class="text-sm font-bold leading-normal tracking-[0.015em]">For Job Seekers</p>
                        </div>
                    </a>
                    <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-[#617289] dark:text-gray-400 pb-[13px] pt-4 px-4 hover:text-primary transition-all"
                        href="#">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">business_center</span>
                            <p class="text-sm font-bold leading-normal tracking-[0.015em]">For Employers</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Accordion List -->
            <div class="space-y-4 max-w-3xl mx-auto">
                <!-- FAQ Item 1 (Expanded) -->
                <div
                    class="bg-white dark:bg-[#1a2430] rounded-xl border border-[#dbe0e6] dark:border-gray-800 overflow-hidden shadow-sm">
                    <button class="w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#111418] dark:text-white font-semibold text-lg">How do I track my application
                            status?</span>
                        <span
                            class="material-symbols-outlined text-[#617289] group-hover:text-primary transition-colors">expand_less</span>
                    </button>
                    <div
                        class="px-6 pb-6 text-[#4a5568] dark:text-gray-300 leading-relaxed border-t border-[#f0f2f4] dark:border-gray-800 pt-4">
                        You can track your applications by logging into your dashboard and navigating to the "My
                        Applications" tab. There, you'll see a real-time status update for every job you've applied to,
                        ranging from "Received" to "Under Review" or "Closed."
                    </div>
                </div>
                <!-- FAQ Item 2 -->
                <div
                    class="bg-white dark:bg-[#1a2430] rounded-xl border border-[#dbe0e6] dark:border-gray-800 overflow-hidden shadow-sm hover:border-primary/50 transition-all">
                    <button class="w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#111418] dark:text-white font-semibold text-lg">Can I hide my profile from my
                            current employer?</span>
                        <span
                            class="material-symbols-outlined text-[#617289] group-hover:text-primary transition-colors">expand_more</span>
                    </button>
                </div>
                <!-- FAQ Item 3 -->
                <div
                    class="bg-white dark:bg-[#1a2430] rounded-xl border border-[#dbe0e6] dark:border-gray-800 overflow-hidden shadow-sm hover:border-primary/50 transition-all">
                    <button class="w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#111418] dark:text-white font-semibold text-lg">How do I set up custom job
                            alerts?</span>
                        <span
                            class="material-symbols-outlined text-[#617289] group-hover:text-primary transition-colors">expand_more</span>
                    </button>
                </div>
                <!-- FAQ Item 4 -->
                <div
                    class="bg-white dark:bg-[#1a2430] rounded-xl border border-[#dbe0e6] dark:border-gray-800 overflow-hidden shadow-sm hover:border-primary/50 transition-all">
                    <button class="w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#111418] dark:text-white font-semibold text-lg">What are the requirements for a
                            verified profile?</span>
                        <span
                            class="material-symbols-outlined text-[#617289] group-hover:text-primary transition-colors">expand_more</span>
                    </button>
                </div>
                <!-- FAQ Item 5 -->
                <div
                    class="bg-white dark:bg-[#1a2430] rounded-xl border border-[#dbe0e6] dark:border-gray-800 overflow-hidden shadow-sm hover:border-primary/50 transition-all">
                    <button class="w-full flex items-center justify-between p-6 text-left group">
                        <span class="text-[#111418] dark:text-white font-semibold text-lg">How can I delete my account
                            permanently?</span>
                        <span
                            class="material-symbols-outlined text-[#617289] group-hover:text-primary transition-colors">expand_more</span>
                    </button>
                </div>
            </div>
            <!-- Still need help? CTA -->
            <div
                class="mt-16 bg-primary/5 dark:bg-primary/10 rounded-2xl p-8 text-center max-w-3xl mx-auto border border-primary/20">
                <div class="size-12 bg-primary rounded-full flex items-center justify-center text-white mx-auto mb-4">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Still need help?</h3>
                <p class="text-[#617289] dark:text-gray-400 mb-6">Our support team is available 24/7 to answer your
                    questions.</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <button
                        class="bg-primary text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-600 transition-colors">Contact
                        Support</button>
                    <button
                        class="bg-white dark:bg-[#1a2430] text-[#111418] dark:text-white border border-[#dbe0e6] dark:border-gray-700 px-8 py-3 rounded-lg font-bold hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Live
                        Chat</button>
                </div>
            </div>
        </div>
    </main>
@endsection
