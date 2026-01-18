@extends('layouts.web.guest')

@section('title', 'Home')

@section('content')
    <main class="flex-1">
        <section class="w-full bg-white dark:bg-background-dark pt-8 pb-12">
            <div class="max-w-[1280px] mx-auto px-4 lg:px-10">
                <div class="@container">
                    <div class="relative overflow-hidden rounded-xl bg-slate-900 min-h-[420px] flex flex-col items-center justify-center p-6 text-center shadow-2xl"
                        style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.7) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAokAeoAV9t_gf7hgayfOfFm1V4mYYP0PUocMdlYPBi1IxHelnocE4CX6dDXb9j0H9C3jyQ9JO6yRF6Q391rgotHOaE2eHH6qnsW_2YeZIPjWogCmUxmclYVuapjpev6kSBj6dlNfRRw_RBkXBZatkQNEDWlXpJFL77dfO-TBORmwGTkkthCwEiGhcRO-yDq5lzzhB6nMpVYWgW00Y8GbNVTMHu2h2f8pYfYOHoq3U81fTI3gCta8R-rYLmS4yirm2vPbsuMnSRpbM"); background-size: cover; background-position: center;'>
                        <div class="max-w-3xl flex flex-col gap-4">
                            <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight font-display">
                                Find your dream job
                            </h1>
                            <p class="text-white/90 text-base md:text-xl font-medium max-w-xl mx-auto">
                                Over 50,000+ new opportunities are waiting for you from top tech companies.
                            </p>
                        </div>
                        <div
                            class="mt-10 w-full max-w-4xl bg-white dark:bg-gray-900 p-2 rounded-xl shadow-lg flex flex-col md:flex-row items-center gap-2">
                            <div
                                class="flex flex-1 items-center px-4 w-full border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 h-14">
                                <span class="material-symbols-outlined text-gray-400 mr-3">search</span>
                                <input
                                    class="w-full border-none focus:ring-0 bg-transparent text-gray-900 dark:text-white placeholder:text-gray-500 text-base font-normal"
                                    placeholder="Job title, keywords, or company" type="text" />
                            </div>
                            <div class="flex flex-1 items-center px-4 w-full h-14">
                                <span class="material-symbols-outlined text-gray-400 mr-3">location_on</span>
                                <input
                                    class="w-full border-none focus:ring-0 bg-transparent text-gray-900 dark:text-white placeholder:text-gray-500 text-base font-normal"
                                    placeholder="City, state, or remote" type="text" />
                            </div>
                            <button
                                class="w-full md:w-auto min-w-[140px] h-12 md:h-14 px-8 bg-primary hover:bg-blue-700 text-white font-bold rounded-lg transition-all flex items-center justify-center gap-2">
                                <span>Search</span>
                            </button>
                        </div>
                        <div class="mt-6 flex flex-wrap justify-center gap-3 text-white/80 text-sm">
                            <span>Popular:</span>
                            <a class="underline hover:text-white" href="#">Frontend</a>
                            <a class="underline hover:text-white" href="#">Product Designer</a>
                            <a class="underline hover:text-white" href="#">Fullstack</a>
                            <a class="underline hover:text-white" href="#">Manager</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-[1280px] mx-auto px-4 lg:px-10 py-10">
            <div class="flex items-center justify-between px-4 pb-8">
                <div class="flex flex-col gap-1">
                    <h2 class="text-[#111418] dark:text-white text-2xl font-bold tracking-tight font-display">Latest
                        Job Openings</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Discover your next career move</p>
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
            <div id="job-container-list">
                <div
                    class="group relative bg-white dark:bg-gray-800 p-6 rounded-2xl border border-[#f0f2f4] dark:border-gray-700 shadow-sm hover:shadow-md hover:border-primary/30 transition-all flex flex-col md:flex-row gap-6">
                    <div class="flex-shrink-0">
                        <div class="size-16 rounded-xl bg-orange-50 flex items-center justify-center p-2 border border-orange-50 overflow-hidden"
                            data-alt="Creative agency logo with abstract shapes">
                            <img alt="Company Logo" class="object-contain"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCL5mG5zoOHHum2-lEE3rAZgdk7PQNGSX6qwKCEIugja8YxUH1SN5sfHPY2OnB3Kvjl4VexWZeNtLH85HM7RnZGQmZ8DQGun-B7Vdj27SgHNl7jCpmlrCqV9i6OsKWoLOOjo_E6XNygrTKJW_hSwdBCj3EDGfUh3PJh5ezoc6Ts-vAW-Yw08TiaCHNwS_mkMCFPWGZPakjTvlXbZqBQ4B0Hy8gmi_1wSjmiUNdB_b5ccO8GbGJHMkXRW2E_nxsdpNIsFKoXbiWwtZQ" />
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <h3 class="text-xl font-bold group-hover:text-primary transition-colors truncate">Staff
                                    Software
                                    Engineer (Backend)</h3>
                            </div>
                            <p class="text-sm font-semibold text-[#617289] dark:text-gray-400">CloudScale Dynamics • Austin,
                                TX
                                (On-site)</p>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-3">
                            <span
                                class="bg-primary/5 text-primary text-xs font-bold px-3 py-1 rounded-full border border-primary/10">Full-time</span>
                            <span
                                class="bg-gray-100 dark:bg-gray-900 text-[#617289] text-xs font-bold px-3 py-1 rounded-full border border-transparent">Urgent</span>
                            <span
                                class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold px-3 py-1 rounded-full">$180k
                                – $240k</span>
                        </div>
                        <p class="mt-4 text-sm text-[#617289] dark:text-gray-300 line-clamp-2 leading-relaxed">
                            Scale our core infrastructure to handle millions of requests per second. We use Go, Kubernetes,
                            and
                            AWS to power our high-availability services across 5 continents.
                        </p>
                    </div>
                    <div class="flex md:flex-col justify-between items-end gap-4 min-w-[140px]">
                        <div class="text-right">
                            <p class="text-xs text-[#617289] font-medium mb-1">Posted 5h ago</p>
                            <p class="text-xs font-bold text-gray-400">12 Applicants</p>
                        </div>
                        <a href="{{ route('web.job-detail') }}"
                            class="w-full md:w-auto px-6 py-2.5 bg-primary text-center text-white font-bold rounded-xl shadow-lg shadow-primary/20 hover:opacity-90 transition-opacity whitespace-nowrap">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>

            <div id="job-container-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
                <div
                    class="group bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 p-5 rounded-2xl shadow-sm hover:shadow-xl hover:ring-2 hover:ring-primary/20 transition-all duration-300">
                    <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-5">
                            <div
                                class="size-14 rounded-xl bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center overflow-hidden border border-blue-100 dark:border-blue-800 p-2">
                                <img alt="TechFlow Logo" class="object-contain w-full h-full"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD239mkUo4epQqhvxP76sEjl4chkudVak84g1poCqchlP1BPh2CrGQ514zmbUetkLHdheSA6Ac8Thp9bi25LPG7BWGmvh5_fqrZM7yrxW8qgvKbZcgYmEeav-ivXJheIcP_WiSMDBUy0wbDSPXIDRuOxhXAD3l7MHQqF4p90OtwrvR9DdIw_EorJjRGvbtr1N7KrEUSaX9dg7niOxyMDnWlHCYeKcAztQDeSbKiNLBcHbEE7at5DB6TPQzS3QyLs1k3GJDWrKcxDPk" />
                            </div>
                            <span
                                class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-[10px] uppercase tracking-wider font-extrabold px-2 py-1 rounded-full">New</span>
                        </div>
                        <div class="flex-1">
                            <h3
                                class="text-[#111418] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors mb-1">
                                Senior Frontend Developer</h3>
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-4">TechFlow Inc.</p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">location_on</span>
                                    <span>San Francisco</span>
                                </div>
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">payments</span>
                                    <span>$120k - $150k</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('web.job-detail') }}"
                            class="w-full py-2.5 bg-primary text-center text-white font-bold rounded-xl transition-all shadow-sm hover:bg-blue-700 active:scale-[0.98]">
                            Apply Now
                        </a>
                    </div>
                </div>
                <div
                    class="group bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 p-5 rounded-2xl shadow-sm hover:shadow-xl hover:ring-2 hover:ring-primary/20 transition-all duration-300">
                    <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-5">
                            <div
                                class="size-14 rounded-xl bg-purple-50 dark:bg-purple-900/20 flex items-center justify-center overflow-hidden border border-purple-100 dark:border-purple-800 p-2">
                                <img alt="CreativePulse Logo" class="object-contain w-full h-full"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaH2T5G_HIUDQdbKwYc4UQb-IDwttltZvwgHhrHjUVn4q23yJjjtn-tPgSE-QB9l_E4hDGbBHLHQwHM1QE1iLV_HX-QtKb8K8B5ha4PROH0bnxXkRRAe275skRqGx5p8hrce6G4lsoicEmcy1R1MO3mVvv_06j4vVIGJp6tjxE4c5f0WqsQADdovRfyLmU-6_3MijmJhFQnn14PT69IxW4i7TvRH0Jbi9ADuz9oDJOTCs3ICIBSQnIZxjqT3wTyhNGwD1Nbpoc4sI" />
                            </div>
                            <span
                                class="bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-[10px] uppercase tracking-wider font-extrabold px-2 py-1 rounded-full">Remote</span>
                        </div>
                        <div class="flex-1">
                            <h3
                                class="text-[#111418] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors mb-1">
                                Product Designer</h3>
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-4">CreativePulse</p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">public</span>
                                    <span>Remote</span>
                                </div>
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">payments</span>
                                    <span>$110k - $140k</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('web.job-detail') }}"
                            class="w-full py-2.5 bg-primary text-center text-white font-bold rounded-xl transition-all shadow-sm hover:bg-blue-700 active:scale-[0.98]">
                            Apply Now
                        </a>
                    </div>
                </div>
                <div
                    class="group bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 p-5 rounded-2xl shadow-sm hover:shadow-xl hover:ring-2 hover:ring-primary/20 transition-all duration-300">
                    <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-5">
                            <div
                                class="size-14 rounded-xl bg-orange-50 dark:bg-orange-900/20 flex items-center justify-center overflow-hidden border border-orange-100 dark:border-orange-800 p-2">
                                <img alt="GrowthOps Logo" class="object-contain w-full h-full"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtFIyU-oevJd_stUR_UIjxC9JR-htkbNSUapcjeogP_Ha5Io98CdMRp4Rsz6-msBH7ir8xVjUUR5ddCqCvsjlKE724rRW5euH4Wq_2RM3bJL2FLhx4nVzAuk0bQKs9UywJdHoatEFbwmA30DJtKrt6wW45ieS8FD9KqheVhCdGEnNApu2ms2SNfps8ca4bYSDkz8FYwGy9OhhVHgY4W-eE6VijzIQ6TCM-kX9kwsOtTkfYPCi_Bu9Gj94A1pQAm8Sv0j4PwsNDIZ8" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3
                                class="text-[#111418] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors mb-1">
                                Marketing Manager</h3>
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-4">GrowthOps</p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">location_on</span>
                                    <span>London, UK</span>
                                </div>
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">payments</span>
                                    <span>$90k - $120k</span>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full py-2.5 bg-primary text-white font-bold rounded-xl transition-all shadow-sm hover:bg-blue-700 active:scale-[0.98]">
                            Apply Now
                        </button>
                    </div>
                </div>
                <div
                    class="group bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 p-5 rounded-2xl shadow-sm hover:shadow-xl hover:ring-2 hover:ring-primary/20 transition-all duration-300">
                    <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-5">
                            <div
                                class="size-14 rounded-xl bg-slate-50 dark:bg-slate-800 flex items-center justify-center overflow-hidden border border-slate-100 dark:border-slate-700 p-2">
                                <img alt="DataBridge Logo" class="object-contain w-full h-full"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKxBuHrBmB_YhJoMdG-O5ZZtxPrXZmtPbRDIROXFod25LtTgGbbH461yvxu1bKcXyB8_8Tc0mHKSCK3ygy9HBnZ0FKU08frTXTaxSb5aVhlLSBa39WhmJ15JKwFGSEfQlWCJe39IHApcP6SXves6jeuKywpxUVXXGRR0X67hirLBc43DpCEKBsSQhhmGXCgUjrLfRe_sfvJR_vhXNoi6dGH5U3bomjLDAMtJzo4Q31CuQA23NrXtv_9qv_LIc2BxVl-uEpiGuL-NE" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3
                                class="text-[#111418] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors mb-1">
                                Backend Engineer (Go)</h3>
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-4">DataBridge</p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">location_on</span>
                                    <span>New York, NY</span>
                                </div>
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">payments</span>
                                    <span>$130k - $170k</span>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full py-2.5 bg-primary text-white font-bold rounded-xl transition-all shadow-sm hover:bg-blue-700 active:scale-[0.98]">
                            Apply Now
                        </button>
                    </div>
                </div>
                <div
                    class="group bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 p-5 rounded-2xl shadow-sm hover:shadow-xl hover:ring-2 hover:ring-primary/20 transition-all duration-300">
                    <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-5">
                            <div
                                class="size-14 rounded-xl bg-indigo-50 dark:bg-indigo-900/20 flex items-center justify-center overflow-hidden border border-indigo-100 dark:border-indigo-800 p-2">
                                <img alt="Insight AI Logo" class="object-contain w-full h-full"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC66cDSLpsTTNwN7tAmpVfSBZMToAZ_3bxtntzf-JCWQA__uDdZsJSXtvMPXg2eZiCZ6dmLhzTM9280knAxq5N6m6CYpia3k85AWl_tgyx4lp1EUtUenO2cfwXXfL2bzh6oTkHGdgSPpmJq8c4piWD3am8rI2BOM7faacS17aHmGgJqN4kzlf_oT5u3RvKMhptnlfU_yhAxHBXgdjIc7kRTVyZb1X-_7KDV67Y6ebtarWpx-NDY8X3VwAVLjYv0t--nAE1M4Ld7Pyc" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3
                                class="text-[#111418] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors mb-1">
                                Senior Data Scientist</h3>
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-4">Insight AI</p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">location_on</span>
                                    <span>Austin, TX</span>
                                </div>
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">payments</span>
                                    <span>$140k - $180k</span>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full py-2.5 bg-primary text-white font-bold rounded-xl transition-all shadow-sm hover:bg-blue-700 active:scale-[0.98]">
                            Apply Now
                        </button>
                    </div>
                </div>
                <div
                    class="group bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 p-5 rounded-2xl shadow-sm hover:shadow-xl hover:ring-2 hover:ring-primary/20 transition-all duration-300">
                    <div class="flex flex-col h-full">
                        <div class="flex items-start justify-between mb-5">
                            <div
                                class="size-14 rounded-xl bg-rose-50 dark:bg-rose-900/20 flex items-center justify-center overflow-hidden border border-rose-100 dark:border-rose-800 p-2">
                                <img alt="BuildStream Logo" class="object-contain w-full h-full"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCL9tlpBP_d_aHs7VP77MFzSJpVN4lNUyqQR6A9BzC8UsGvv40BvQJsqz0ZruHG7-w69-mIB7uIBNEp4pwm4WttzYpFn1ZDlItipxe9kHv_S-3WFZOulUDqjWr807KN_8IrlAX6uaOn8XcRnEkfh86tc9_Tz-nThmLU1qGLJ_PouEjN9fZ5gho3yB5HUjKJYtiMcLWB3-rtGpZkVmbXnHbaSQnFOa-9F5IQRloLuw65-PXvKlwWZzpZ3CItPXKCS2ry3XqLDocaazY" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3
                                class="text-[#111418] dark:text-white text-lg font-bold leading-snug group-hover:text-primary transition-colors mb-1">
                                Project Manager</h3>
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-4">BuildStream</p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">location_on</span>
                                    <span>Chicago, IL</span>
                                </div>
                                <div
                                    class="flex items-center gap-1.5 px-2.5 py-1 bg-gray-50 dark:bg-gray-800 rounded-full text-xs text-gray-500 dark:text-gray-400">
                                    <span class="material-symbols-outlined text-[14px]">payments</span>
                                    <span>$100k - $130k</span>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full py-2.5 bg-primary text-white font-bold rounded-xl transition-all shadow-sm hover:bg-blue-700 active:scale-[0.98]">
                            Apply Now
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex px-4 py-12 justify-center">
                <button
                    class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-xl h-12 px-8 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-[#111418] dark:text-white text-base font-bold transition-all hover:bg-gray-50 dark:hover:bg-gray-700 shadow-sm">
                    Show more jobs
                </button>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script>
        const jobContainerGrid = document.getElementById('job-container-grid');
        const jobContainerList = document.getElementById('job-container-list');
        const gridBtn = document.getElementById('grid-view-btn');
        const listBtn = document.getElementById('list-view-btn');

        // Function to set the view
        function setView(view) {
            if (view === 'list') {
                jobContainerGrid.classList.add('hidden');
                jobContainerList.classList.remove('hidden');
                listBtn.classList.add('bg-white', 'dark:bg-gray-700', 'text-primary', 'shadow-sm');
                gridBtn.classList.remove('bg-white', 'dark:bg-gray-700', 'text-primary', 'shadow-sm');
                gridBtn.classList.add('text-gray-500');
            } else {
                jobContainerGrid.classList.remove('hidden');
                jobContainerList.classList.add('hidden');
                gridBtn.classList.add('bg-white', 'dark:bg-gray-700', 'text-primary', 'shadow-sm');
                listBtn.classList.remove('bg-white', 'dark:bg-gray-700', 'text-primary', 'shadow-sm');
                listBtn.classList.add('text-gray-500');
            }
            // Save to LocalStorage
            localStorage.setItem('jobViewPreference', view);
        }

        // Event Listeners
        gridBtn.addEventListener('click', () => setView('grid'));
        listBtn.addEventListener('click', () => setView('list'));

        // Check LocalStorage on Page Load
        const savedView = localStorage.getItem('jobViewPreference') || 'grid';
        setView(savedView);
    </script>
@endpush
