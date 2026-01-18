<div>
    <section class="hero-pattern text-white pt-10 pb-16">
        <div class="max-w-[1200px] mx-auto ">
            <div class="flex flex-wrap items-center gap-2 mb-8 opacity-80">
                <a class="hover:underline text-xs font-medium" href="#">Home</a>
                <span class="material-symbols-outlined !text-[10px]">chevron_right</span>
                <a class="hover:underline text-xs font-medium" href="#">Engineering</a>
                <span class="material-symbols-outlined !text-[10px]">chevron_right</span>
                <span class="text-xs font-medium">Senior Software Engineer</span>
            </div>
            <div class="flex flex-col md:flex-row items-start justify-between gap-8">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="bg-white p-1 rounded-2xl shadow-xl flex-shrink-0">
                        <div class="size-24 rounded-xl bg-cover bg-center"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB0WE7yM_3hCw5BggIgvIsOp7sTTynlL0iS5GIswA6GXdaJJdNdr9PtCfsOf4RHePHVJgbrIBfwfS4YJ08KMM3wWPp2uZ3dm9yylR80xmFLy807G-NE4PdcdaRpg0dd0ePS5dvYdl2SP9peiyC8DkRxG06EDBKX4S5AqK7xRqCfkOa0ngGkoouyOXM6Qfeh7XQj7HUszzAzNpOcQL3STDFwEX1lafzrSSRCJgP54bIU2AxgBuzj51F0-9xeij9C0RmqGUvfSvfFNG8');">
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                            Senior Software Engineer
                        </h1>
                        <div class="flex flex-wrap items-center gap-y-3 gap-x-6 text-blue-50">
                            <span class="flex items-center gap-2 font-semibold text-lg">
                                <span class="material-symbols-outlined !text-xl opacity-75">domain</span>
                                TechFlow Solutions
                            </span>
                            <div class="h-4 w-[1px] bg-white/20 hidden md:block"></div>
                            <span class="flex items-center gap-1.5 opacity-90">
                                <span class="material-symbols-outlined !text-lg">location_on</span>
                                San Francisco, CA (Remote)
                            </span>
                            <span class="flex items-center gap-1.5 opacity-90">
                                <span class="material-symbols-outlined !text-lg">payments</span>
                                $140k - $180k per year
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3 self-end md:self-start">
                    <button
                        class="flex items-center gap-2 px-5 py-2.5 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 rounded-xl font-semibold transition-all">
                        <span class="material-symbols-outlined">share</span>
                        Share
                    </button>
                    <button
                        class="flex items-center gap-2 px-5 py-2.5 bg-white text-primary hover:bg-blue-50 rounded-xl font-bold shadow-lg transition-all">
                        <span class="material-symbols-outlined"
                            style="font-variation-settings: 'FILL' 1;">bookmark</span>
                        Save Job
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white dark:bg-[#1a232e] border-b border-gray-200 dark:border-gray-800 sticky top-16 z-40">
        <div class="max-w-[1280px] mx-auto px-6">
            <div class="flex gap-8">
                <a class="border-b-[3px] border-primary text-primary py-5 px-1 text-sm font-bold whitespace-nowrap"
                    href="{{ route('web.job-detail') }}">Job Description</a>
                <a class="border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 py-5 px-1 text-sm font-bold whitespace-nowrap transition-all"
                    href="{{ route('web.company') }}">Company</a>
                <a class="border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 py-5 px-1 text-sm font-bold whitespace-nowrap transition-all"
                    href="{{ route('web.reviews') }}">Reviews</a>
                <a class="border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 py-5 px-1 text-sm font-bold whitespace-nowrap transition-all"
                    href="{{ route('web.benefit') }}">Benefits</a>
            </div>
        </div>
    </div>
    <main class="max-w-[1280px] mx-auto px-6 py-10">
        <div class="flex flex-col lg:flex-row gap-10">
            {{ $slot }}
            <aside class="w-full lg:w-[360px] flex-shrink-0">
                <div class="sticky top-40 space-y-6">
                    <div
                        class="bg-white dark:bg-[#1a232e] p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm">
                        <a href="{{ route('web.job.application-form') }}"
                            class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 px-4 rounded-xl shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2 mb-4">
                            <span class="material-symbols-outlined">send</span>
                            Apply Now
                        </a>
                        <p class="text-center text-xs text-gray-400 mb-6">Application takes less than 2 minutes</p>
                        <div class="space-y-4 border-t border-gray-100 dark:border-gray-800 pt-6">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 dark:text-gray-400 text-sm">Posted</span>
                                <span class="text-gray-900 dark:text-white text-sm font-semibold">2 days ago</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 dark:text-gray-400 text-sm">Applicants</span>
                                <span class="text-gray-900 dark:text-white text-sm font-semibold">54 applicants</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 dark:text-gray-400 text-sm">Job ID</span>
                                <span class="text-gray-900 dark:text-white text-sm font-semibold">TF-88421</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-500 dark:text-gray-400 text-sm">Experience level</span>
                                <span class="text-gray-900 dark:text-white text-sm font-semibold">Senior (5+ yrs)</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-[#1a232e] p-6 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm">
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white mb-4">Location</h4>
                        <div class="rounded-xl h-40 w-full bg-cover bg-center mb-4 grayscale hover:grayscale-0 transition-all cursor-pointer"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDuyJuOocesl0LlLXkIzKV85DNJNFI4S9roAvlMWjFcpWgGlJPl72d0pOU-gwAfB_dsFuMPKka2-xqD4a1KKvYVWfmKES0UYqphs9nvmxzR7muY-2h2fvw-dCIOGKE7X8AQBAHIGNvR3QtW53M-ArAwwqw9J-K7XrxzSIsgbpC8XyAncAYl9SqAqtxDs2cnGQN7EAn0kDFavGnXCOPGeop00oEAE0pfkmamKUgxurlCLgNMiJ9UcbbpksflndOUl9IkEVbDV_kBEjQ');">
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">
                            123 Tech Center Blvd, Suite 500<br />
                            San Francisco, CA 94105
                        </p>
                    </div>
                    <div
                        class="flex gap-3 p-4 bg-orange-50 dark:bg-orange-900/10 rounded-xl border border-orange-100 dark:border-orange-900/20">
                        <span class="material-symbols-outlined text-orange-500">info</span>
                        <p class="text-xs text-orange-800 dark:text-orange-300 leading-normal">
                            Always research employers. Never send money or personal banking info to recruiters.
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </main>
</div>
