@extends('layouts.web.auth')

@section('title', 'Message')

@section('content')
    <main class="flex-1 flex overflow-hidden">
        <!-- Conversation List Sidebar (Internal) -->
        <section
            class="w-[380px] h-[calc(100vh-64px)] border-r border-[#e2e2e7] dark:border-[#312e4d] bg-white dark:bg-background-dark flex flex-col shrink-0">
            <div class=" pr-4">
                <h2 class="text-[#121118] dark:text-white text-xl font-bold mb-4">Messages</h2>
                <!-- Search Bar Component -->
                <div class="mb-4">
                    <label class="flex flex-col min-w-40 h-11 w-full">
                        <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                            <div
                                class="text-[#656189] flex border-none bg-background-light dark:bg-[#1e1c31] items-center justify-center pl-4 rounded-l-lg">
                                <span class="material-symbols-outlined text-[20px]">search</span>
                            </div>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 border-none bg-background-light dark:bg-[#1e1c31] focus:ring-0 focus:outline-0 text-[#121118] dark:text-white placeholder:text-[#656189] px-3 rounded-r-lg text-sm"
                                placeholder="Search conversations" value="" />
                        </div>
                    </label>
                </div>
            </div>
            <!-- Conversations Scrollable Area -->
            <div class="flex-1 overflow-y-auto custom-scrollbar">
                <!-- Active List Item -->
                <div
                    class="flex items-center gap-4  dark:bg-background-dark border-r-4 border-primary px-4 py-3 cursor-pointer">
                    <div class="relative shrink-0">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12"
                            data-alt="TechFlow Company Logo"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDC1ZCbse7TqW5WXU0baL2iVSUeCeZRhZqBDaTKj7CqFgV-i5xL-fDoU_mb8ri05yU1XgqlyuxhZAxBREj9DWZyGCkc3HS0RdC6R4l2K1R6VB8vyifn0ztHjfi7hPtMtFi4EmTVwhHgvk42JROx9PHl-glTlc8bNjU_KyAFjNIvaeM1nBLXZPBcCuUWqcF1TTgB9q_BzJcZhN337HGuSZLFjlbLP2BvH7tQZWgoCJww4DdNW3kj38E1BCw1l2oxRIprkLrUU8yZBQM");'>
                        </div>
                        <div
                            class="absolute bottom-0 right-0 h-3 w-3 bg-green-500 border-2 border-white dark:border-[#1e1c31] rounded-full">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center flex-1 min-w-0">
                        <div class="flex justify-between items-baseline mb-0.5">
                            <p class="text-[#121118] dark:text-white text-sm font-semibold truncate">Sarah from TechFlow</p>
                            <span class="text-[#656189] dark:text-[#a1a1aa] text-[10px] uppercase font-bold">2m ago</span>
                        </div>
                        <p class="text-primary text-xs font-medium line-clamp-1">We would like to invite you for a tech...
                        </p>
                    </div>
                </div>
                <!-- List Item 2 -->
                <div
                    class="flex items-center gap-4 hover:bg-background-light dark:hover:bg-[#1e1c31] px-4 min-h-[80px] py-3 cursor-pointer transition-colors border-b border-[#f0f0f4] dark:border-[#312e4d]">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12 shrink-0"
                        data-alt="DesignCo Company Logo"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBqvPi1lbW3i-jDEqa0mVhzDTLlPchSQzVlikMjcPnH9UHHwjVfEiTAxzQucKeTn1TSVyLbd93gfLyMuGBYZDXi8SxdlreUf4SmJuv598TkItDraCeLaLs4bL8osi8xXxz-Hcm_ZyAIjDyYCUUBInx0ukMWoMB_TVwnyNs5WRAQFCkiai5VgwGWUEbV9EyZeR2ApLvDHhVZxh9Han1yM6ukLn5NhspNJI-Eg5UFHbpYdpkNNwfX8vxTyZV6kKKKSCAkRTRjKyRwdEo");'>
                    </div>
                    <div class="flex flex-col justify-center flex-1 min-w-0">
                        <div class="flex justify-between items-baseline mb-0.5">
                            <p class="text-[#121118] dark:text-white text-sm font-medium truncate">Mark at DesignCo</p>
                            <span class="text-[#656189] dark:text-[#a1a1aa] text-[10px] font-normal">1h ago</span>
                        </div>
                        <p class="text-[#656189] dark:text-[#a1a1aa] text-xs font-normal line-clamp-1">Thanks for the
                            portfolio link! The team...</p>
                    </div>
                </div>
                <!-- List Item 3 -->
                <div
                    class="flex items-center gap-4 hover:bg-background-light dark:hover:bg-[#1e1c31] px-4 min-h-[80px] py-3 cursor-pointer transition-colors border-b border-[#f0f0f4] dark:border-[#312e4d]">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12 shrink-0"
                        data-alt="Innovate Studio Logo"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDbf03n3AVx_6C5UH5_h3uAd_hWU8a3bJuK5Ykpq8V-96WhMdsU_fFWaUsF1rTYpgINqz-H1wVTYqz3A2vcyZkhOwHfQPwUcyU_KQmaxhSGcm4dBDpdoizCXtiQcc3m9O3AShIP3Z0itykdiuxIzf7NWLXSIwFie-fZQ8AJVtp3uSj3uReL1bhSsLmevWj42aYabbDAMDfy8oKB48wf1-M_DyWYn0zvBATY4yyHIN2lST2l1Pz-AqT_BnduQ1AfnKFSh_OEtWaLHdI");'>
                    </div>
                    <div class="flex flex-col justify-center flex-1 min-w-0">
                        <div class="flex justify-between items-baseline mb-0.5">
                            <p class="text-[#121118] dark:text-white text-sm font-medium truncate">Innovate Studio</p>
                            <span class="text-[#656189] dark:text-[#a1a1aa] text-[10px] font-normal">4h ago</span>
                        </div>
                        <p class="text-[#656189] dark:text-[#a1a1aa] text-xs font-normal line-clamp-1">Can you confirm your
                            availability for...</p>
                    </div>
                </div>
                <!-- List Item 4 -->
                <div
                    class="flex items-center gap-4 hover:bg-background-light dark:hover:bg-[#1e1c31] px-4 min-h-[80px] py-3 cursor-pointer transition-colors border-b border-[#f0f0f4] dark:border-[#312e4d]">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12 shrink-0"
                        data-alt="Global Link Systems Logo"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC3Q-5eDV6fB-JOE0i9EPbisu7muGATnWhQj0b9JRW-2SQykSvdJvEoJRKoHGRusDInK1UygN6nN0C7oNw9gF4kcs7fPI35J_vWkLnBb2NLQ3EEr80EolpxfWPMAOd0rUHFgyrwFuhiv7OLB1jDZbQ6G2z3Iyz2OxLUO2q4EFt8G-AEDw67IvV-VvAlU6e12Onq_TfziibCacnb7_tvWgSAYS0nSni3i8R4aBv3cEYM3Xqy-YPkXc0Zu9cYtKUAadrG-Cp91cRzL6g");'>
                    </div>
                    <div class="flex flex-col justify-center flex-1 min-w-0">
                        <div class="flex justify-between items-baseline mb-0.5">
                            <p class="text-[#121118] dark:text-white text-sm font-medium truncate">Global Link Systems</p>
                            <span class="text-[#656189] dark:text-[#a1a1aa] text-[10px] font-normal">Yesterday</span>
                        </div>
                        <p class="text-[#656189] dark:text-[#a1a1aa] text-xs font-normal line-clamp-1">Welcome to the talent
                            pool! We will notify...</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Active Chat Window -->
        <section class="flex-1 flex flex-col bg-white dark:bg-[#1e1c31]">
            <!-- Chat Header -->
            <header
                class="h-16 border-b border-[#e2e2e7] dark:border-[#312e4d] px-6 flex items-center justify-between shrink-0">
                <div class="flex items-center gap-3">
                    <div class="relative shrink-0">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-10 w-10"
                            data-alt="Recruiter profile"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBwNueeIxPQ4i_W7Y4XcbNCD5wBc8_Gbkatgh16xrsX17kTxykzcfR1qqYfAc9kyqxTOMbPyEzW64GXOILQQrMWKyPWnFFXjjgU43ArBstRSKBbKsHrf88Q6EQhG7hO1ce_9kPRpAJZt6Mwq2Zuo58N4tCkZlXwSiHElnuJfNn9CiNEuws6vwwXyXV1nQhaXeuWq8OvpKMCV36DdaHR2VzSSr1tP8TEplEm77QYmuSMnUL2-KluOR6z8HF0X2keg_24ZwoN1p2qEYo");'>
                        </div>
                        <div
                            class="absolute bottom-0 right-0 h-2.5 w-2.5 bg-green-500 border-2 border-white dark:border-[#1e1c31] rounded-full">
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <h3 class="text-[#121118] dark:text-white text-sm font-bold">Sarah from TechFlow</h3>
                            <span
                                class="bg-primary/10 text-primary text-[10px] px-1.5 py-0.5 rounded font-bold uppercase tracking-wide">Recruiter</span>
                        </div>
                        <p class="text-[#656189] dark:text-[#a1a1aa] text-[11px] font-medium uppercase tracking-tight">
                            Active for Senior UI Designer Role</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <button
                        class="text-[#656189] dark:text-[#a1a1aa] hover:text-primary transition-colors flex items-center gap-1.5 text-sm font-medium">
                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                        View Job
                    </button>
                    <button class="text-[#656189] dark:text-[#a1a1aa] hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">more_vert</span>
                    </button>
                </div>
            </header>
            <!-- Message Thread -->
            <div
                class="flex-1 overflow-y-auto p-6 custom-scrollbar bg-background-light/30 dark:bg-background-dark/20 flex flex-col gap-6">
                <div class="flex justify-center">
                    <span
                        class="bg-[#e2e2e7] dark:bg-[#312e4d] text-[#656189] dark:text-[#a1a1aa] text-[10px] font-bold uppercase px-3 py-1 rounded-full">Today</span>
                </div>
                <!-- Recruiter Message -->
                <div class="flex gap-3 max-w-[80%]">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-8 w-8 shrink-0 mt-1"
                        data-alt="Sarah profile"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCb9C8WxZ2QJqND9Ja9C3HsjpW_iBnldXkYMz9ZPuMSwz8KyZitr-_20Mdk2BsCHSJM_DHH5o0KjBpjoatLpa-IcYoSj2nSDNl5hSVVtreIj1K9cyYMp9UZtErJuZLLMugW-_6aDTOyh8p2JKInAZqH0QKpOuItQFRVyBO2_0o5tpGSf2lpXYz4JrTQBg67jrGPtt8z6w1hkFmEd0oo5xp7hdIC1AjY8sAMpiQi3v806Jo7Ievj9ZiZu34y786vNda0BbgBIH9hPPY");'>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="bg-[#f0f0f4] dark:bg-[#2a2842] p-4 rounded-xl rounded-tl-none">
                            <p class="text-[#121118] dark:text-white text-sm leading-relaxed">
                                Hi Alex! We were really impressed with your portfolio, especially the recent case study on
                                the Fintech dashboard.
                            </p>
                        </div>
                        <span class="text-[#656189] dark:text-[#a1a1aa] text-[10px]">10:15 AM</span>
                    </div>
                </div>
                <!-- Recruiter Message 2 -->
                <div class="flex gap-3 max-w-[80%] ml-11 -mt-4">
                    <div class="flex flex-col gap-1">
                        <div class="bg-[#f0f0f4] dark:bg-[#2a2842] p-4 rounded-xl rounded-tl-none">
                            <p class="text-[#121118] dark:text-white text-sm leading-relaxed">
                                We'd love to invite you for a first-round technical interview this Thursday at 2:00 PM. Does
                                that work for you?
                            </p>
                        </div>
                        <span class="text-[#656189] dark:text-[#a1a1aa] text-[10px]">10:15 AM</span>
                    </div>
                </div>
                <!-- User Message -->
                <div class="flex flex-row-reverse gap-3 max-w-[80%] self-end">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-8 w-8 shrink-0 mt-1"
                        data-alt="Alex profile"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCNj3Cb-ftevvujGYwmHh7oIQ7gesh7xIxsLAyui7E5WEzwIIDztYI41az-RD8Jw1UKL1W54OVN2WwWtASagjMN0-4YR7EwGNxHUDn8upy_OmvanxnhzzQQoOKHZA_R1WBKiPid03eIzGwu4Bd-WLHGDjFrY7t9ZFCPK6UQZtKhTdksVQQp6EImGHRda4I2oohOEnYi5bIRAfBPPRZUiFf2KlWmlBnQmMZwRsAg8l0J2AdoVBT8pCAzBVPw-snuvMYmolFCRqqlUzo");'>
                    </div>
                    <div class="flex flex-col items-end gap-1">
                        <div class="bg-primary p-4 rounded-xl rounded-tr-none">
                            <p class="text-white text-sm leading-relaxed">
                                Hello Sarah! Thank you so much for reaching out. I'm glad you liked the portfolio.
                            </p>
                        </div>
                        <span class="text-[#656189] dark:text-[#a1a1aa] text-[10px]">10:22 AM</span>
                    </div>
                </div>
                <!-- User Message 2 -->
                <div class="flex flex-row-reverse gap-3 max-w-[80%] self-end -mt-4 mr-11">
                    <div class="flex flex-col items-end gap-1">
                        <div class="bg-primary p-4 rounded-xl rounded-tr-none">
                            <p class="text-white text-sm leading-relaxed">
                                Thursday at 2:00 PM works perfectly for me. Should I prepare anything specific or just a
                                review of past projects?
                            </p>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px] text-primary">done_all</span>
                            <span class="text-[#656189] dark:text-[#a1a1aa] text-[10px]">10:23 AM</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chat Input Area -->
            <div class="p-4 border-t border-[#e2e2e7] dark:border-[#312e4d]">
                <div class="flex flex-col bg-background-light dark:bg-[#2a2842] rounded-xl p-2">
                    <textarea
                        class="w-full bg-transparent border-none focus:ring-0 text-sm text-[#121118] dark:text-white placeholder:text-[#656189] resize-none h-20 custom-scrollbar p-3"
                        placeholder="Type your message here..."></textarea>
                    <div class="flex items-center justify-between mt-2 px-2 pb-1">
                        <div class="flex items-center gap-2">
                            <button
                                class="p-2 text-[#656189] dark:text-[#a1a1aa] hover:bg-white dark:hover:bg-[#1e1c31] rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-[20px]">attach_file</span>
                            </button>
                            <button
                                class="p-2 text-[#656189] dark:text-[#a1a1aa] hover:bg-white dark:hover:bg-[#1e1c31] rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-[20px]">sentiment_satisfied</span>
                            </button>
                            <button
                                class="p-2 text-[#656189] dark:text-[#a1a1aa] hover:bg-white dark:hover:bg-[#1e1c31] rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-[20px]">image</span>
                            </button>
                        </div>
                        <button
                            class="bg-primary text-white px-6 py-2 rounded-lg text-sm font-semibold flex items-center gap-2 hover:bg-primary/90 transition-all shadow-lg shadow-primary/20">
                            <span>Send</span>
                            <span class="material-symbols-outlined text-[18px]">send</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
