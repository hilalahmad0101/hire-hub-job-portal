@extends('layouts.web.guest')

@section('title', 'Companies')

@section('content')
    <main class="flex-1">
        <section class="w-full bg-white dark:bg-background-dark pt-8 pb-12">
            <div class="max-w-[1280px] mx-auto px-4 lg:px-10">
                <div class="@container">
                    <div class="relative overflow-hidden rounded-xl bg-slate-900 min-h-[420px] flex flex-col items-center justify-center p-6 text-center shadow-2xl"
                        style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.7) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAokAeoAV9t_gf7hgayfOfFm1V4mYYP0PUocMdlYPBi1IxHelnocE4CX6dDXb9j0H9C3jyQ9JO6yRF6Q391rgotHOaE2eHH6qnsW_2YeZIPjWogCmUxmclYVuapjpev6kSBj6dlNfRRw_RBkXBZatkQNEDWlXpJFL77dfO-TBORmwGTkkthCwEiGhcRO-yDq5lzzhB6nMpVYWgW00Y8GbNVTMHu2h2f8pYfYOHoq3U81fTI3gCta8R-rYLmS4yirm2vPbsuMnSRpbM"); background-size: cover; background-position: center;'>
                        <div class="max-w-3xl flex flex-col gap-4">
                            <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight font-display">
                                Browse Companies
                            </h1>
                            <p class="text-white/90 text-base md:text-xl font-medium max-w-xl mx-auto">
                                Find the best companies to work for and discover your next career move.
                            </p>
                        </div>
                        <div
                            class="mt-10 w-full max-w-4xl bg-white dark:bg-gray-900 p-2 rounded-xl shadow-lg flex flex-col md:flex-row items-center gap-2">
                            <div
                                class="flex flex-1 items-center px-4 w-full border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 h-14">
                                <span class="material-symbols-outlined text-gray-400 mr-3">search</span>
                                <input
                                    class="w-full border-none focus:ring-0 bg-transparent text-gray-900 dark:text-white placeholder:text-gray-500 text-base font-normal"
                                    placeholder="Search by company name or industry..." type="text" />
                            </div>
                            <button
                                class="w-full md:w-auto min-w-[140px] h-12 md:h-14 px-8 bg-primary hover:bg-blue-700 text-white font-bold rounded-lg transition-all flex items-center justify-center gap-2">
                                <span>Search</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-[1280px] mx-auto px-4 lg:px-10 py-10">
            <div class="flex items-center justify-between px-4 pb-8">
                <div class="flex flex-col gap-1">
                    <h2 class="text-[#111418] dark:text-white text-2xl font-bold tracking-tight font-display">Companies
                    </h2>
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex bg-gray-100 dark:bg-gray-800 p-1 rounded-lg space-x-2">
                        <button id="grid-view-btn"
                            class="flex cursor-pointer items-center justify-center p-1.5 rounded-md bg-white dark:bg-gray-700 hover:bg-primary hover:text-white transition-colors shadow-sm"
                            title="Grid View">
                            <span class="material-symbols-outlined text-[20px]">grid_view</span>
                        </button>
                        <button id="list-view-btn"
                            class="flex cursor-pointer items-center justify-center p-1.5 rounded-md text-gray-500 dark:text-gray-400 hover:text-primary hover:bg-primary hover:text-white transition-colors"
                            title="List View">
                            <span class="material-symbols-outlined text-[20px]">view_list</span>
                        </button>
                    </div>
                </div>
            </div>
            <div id="company-container-list">
                <div
                    class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow flex items-center gap-6">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg min-h-20 w-20 border border-gray-50 dark:border-gray-800"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBp7cFNv31BH0NqMw2YvMGZf7iNGfeFBe2AyROfr9MGa51KT9h1rTUvI3jCDMgDSiAQ8MxhO0j7GsmiVyKMoww1AMJAejj6rbwKqrClKw7Pg6TGoBQFGkGP3cOZRsZKMDqGy-2kvpNlyF4s2W4JApa-y3uOQUvdff-3GlteGsWk42OxGFKFTwC4HvV9746Dt2KQUizg9bRoUaTyf7CqcQM1vLMkwQ9Tjxdbj0RTEVAKFUV7GQhfE1QvUi8rGGjLJbZ_xpp818_SYnk");'>
                    </div>
                    <div class="flex-1 flex flex-col gap-1 min-w-0">
                        <div class="flex items-center gap-3">
                            <h3 class="text-[#111418] dark:text-white text-lg font-bold truncate">TechNova Solutions</h3>
                            <div
                                class="flex items-center gap-1 bg-yellow-400/10 px-2 py-0.5 rounded text-yellow-600 dark:text-yellow-400 text-xs font-bold">
                                <span>4.8</span>
                                <span class="material-symbols-outlined text-[14px] fill-current">star</span>
                            </div>
                        </div>
                        <p class="text-primary text-sm font-semibold">Information Technology &amp; Services</p>
                        <p class="text-[#617289] dark:text-gray-400 text-sm line-clamp-2 mt-1">
                            A leading innovator in cloud computing and enterprise AI, helping global businesses scale
                            through digital transformation. They offer a remote-first culture and prioritize continuous
                            employee growth.
                        </p>
                    </div>
                    <div class="flex flex-col items-end gap-3 min-w-[140px]">
                        <div class="text-right">
                            <p class="text-[#111418] dark:text-white text-sm font-bold">42 Open Jobs</p>
                            <p class="text-[#617289] dark:text-gray-400 text-xs">San Francisco, CA</p>
                        </div>
                        <a href="{{ route('web.company.detail') }}"
                            class="flex w-full cursor-pointer items-center justify-center rounded-lg h-9 px-4 bg-primary text-white text-xs font-bold hover:bg-primary/90 transition-all">
                            View Profile
                        </a>
                    </div>
                </div>
            </div>

            <div id="company-container-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
                <div
                    class="bg-white dark:bg-[#1a202c] border border-[#f0f2f4] dark:border-[#2d3748] rounded-xl p-6 flex flex-col shadow-sm hover:shadow-md transition-shadow group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-16 h-16 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-100 dark:border-gray-700 bg-center bg-no-repeat bg-contain"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBp7cFNv31BH0NqMw2YvMGZf7iNGfeFBe2AyROfr9MGa51KT9h1rTUvI3jCDMgDSiAQ8MxhO0j7GsmiVyKMoww1AMJAejj6rbwKqrClKw7Pg6TGoBQFGkGP3cOZRsZKMDqGy-2kvpNlyF4s2W4JApa-y3uOQUvdff-3GlteGsWk42OxGFKFTwC4HvV9746Dt2KQUizg9bRoUaTyf7CqcQM1vLMkwQ9Tjxdbj0RTEVAKFUV7GQhfE1QvUi8rGGjLJbZ_xpp818_SYnk");'>
                        </div>
                        <div class="flex items-center gap-1 bg-yellow-50 dark:bg-yellow-900/20 px-2 py-1 rounded">
                            <span class="material-symbols-outlined text-yellow-500 text-[16px] fill-current">star</span>
                            <span class="text-xs font-bold text-yellow-700 dark:text-yellow-400">4.8</span>
                        </div>
                    </div>
                    <h3
                        class="text-xl font-bold text-[#111418] dark:text-white mb-1 group-hover:text-primary transition-colors">
                        TechNova Solutions</h3>
                    <p class="text-sm font-medium text-primary mb-3">Information Technology</p>
                    <p class="text-sm text-[#617289] dark:text-gray-400 leading-relaxed mb-6 flex-grow">A leading innovator
                        in cloud computing and enterprise-grade artificial intelligence solutions.</p>
                    <div class="pt-4 border-t border-[#f0f2f4] dark:border-[#2d3748] flex items-center justify-between">
                        <span class="text-xs text-[#617289] dark:text-gray-400 font-medium uppercase tracking-wider">1k - 5k
                            Employees</span>
                        <a href="{{ route('web.company.detail') }}"
                            class="text-primary font-bold text-sm hover:underline">View
                            Profile</a>
                    </div>
                </div>
            </div>
            <div class="flex px-4 py-12 justify-center">
                <button
                    class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-xl h-12 px-8 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-[#111418] dark:text-white text-base font-bold transition-all hover:bg-gray-50 dark:hover:bg-gray-700 shadow-sm">
                    Show more companies
                </button>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script>
        const companyContainerGrid = document.getElementById('company-container-grid');
        const companyContainerList = document.getElementById('company-container-list');
        const gridBtn = document.getElementById('grid-view-btn');
        const listBtn = document.getElementById('list-view-btn');

        // Function to set the view
        function setView(view) {
            if (view === 'list') {
                companyContainerGrid.classList.add('hidden');
                companyContainerList.classList.remove('hidden');
                listBtn.classList.add('bg-white', 'dark:bg-gray-700', 'text-primary', 'shadow-sm');
                gridBtn.classList.remove('bg-white', 'dark:bg-gray-700', 'text-primary', 'shadow-sm');
                gridBtn.classList.add('text-gray-500');
            } else {
                companyContainerGrid.classList.remove('hidden');
                companyContainerList.classList.add('hidden');
                gridBtn.classList.add('bg-white', 'dark:bg-gray-700', 'text-primary', 'shadow-sm');
                listBtn.classList.remove('bg-white', 'dark:bg-gray-700', 'text-primary', 'shadow-sm');
                listBtn.classList.add('text-gray-500');
            }
            // Save to LocalStorage
            localStorage.setItem('companyViewPreference', view);
        }

        // Event Listeners
        gridBtn.addEventListener('click', () => setView('grid'));
        listBtn.addEventListener('click', () => setView('list'));

        // Check LocalStorage on Page Load
        const savedView = localStorage.getItem('companyViewPreference') || 'grid';
        setView(savedView);
    </script>
@endpush
