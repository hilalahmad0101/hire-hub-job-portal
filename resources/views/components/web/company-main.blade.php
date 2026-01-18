 <main class="flex-1 overflow-y-auto">
     <div class="flex flex-1 justify-center py-5">
         <div class="layout-content-container flex flex-col max-w-[1280px] flex-1 px-6 md:px-8">
             <!-- Banner & Header Image -->
             <div class="@container">
                 <div class="@[480px]:px-0 @[480px]:py-3">
                     <div class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden bg-white dark:bg-gray-800 rounded-xl min-h-[260px] shadow-sm"
                         data-alt="Modern company office space with tech employees"
                         style='background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.4)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDHnXmc1U339IA-4OXYhqy6YeTMKzy8YooMfkoeR1YrskUkzlTzi3H3ZnE1EoEuieKaO4WcanYNO-2RVFu-YQzpuxT6-Qz9lh2vn66Xdu1cet05hbI5798D4TBW6UCrlxTdHb9bsWasNwwRI3Z-2rp0BcRS2aaFrJSPsroMVm2y1VvHZBFI3gjaLJjhQdTgoS6huPqANgRxh20Ren7QU_f1V3pGtoLWGy1dsmfu5GBbwf_Ex_R-EYDn3kf6bs0LkvPmIIRt0YOSVnM");'>
                     </div>
                 </div>
             </div>
             <!-- Company Identity Section -->
             <div
                 class="flex p-4 @container bg-white dark:bg-[#1a202c] rounded-xl mt-[-40px] relative z-10 mx-4 shadow-lg border border-gray-100 dark:border-gray-700">
                 <div class="flex w-full flex-col gap-4 @[520px]:flex-row @[520px]:justify-between">
                     <div class="flex gap-6 items-start">
                         <div class="bg-white p-1 rounded-xl shadow-md -mt-12">
                             <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg min-h-32 w-32"
                                 data-alt="TechNova Solutions minimalist corporate logo"
                                 style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBp7cFNv31BH0NqMw2YvMGZf7iNGfeFBe2AyROfr9MGa51KT9h1rTUvI3jCDMgDSiAQ8MxhO0j7GsmiVyKMoww1AMJAejj6rbwKqrClKw7Pg6TGoBQFGkGP3cOZRsZKMDqGy-2kvpNlyF4s2W4JApa-y3uOQUvdff-3GlteGsWk42OxGFKFTwC4HvV9746Dt2KQUizg9bRoUaTyf7CqcQM1vLMkwQ9Tjxdbj0RTEVAKFUV7GQhfE1QvUi8rGGjLJbZ_xpp818_SYnk");'>
                             </div>
                         </div>
                         <div class="flex flex-col pt-2">
                             <h1
                                 class="text-[#111418] dark:text-white text-[28px] font-bold leading-tight tracking-[-0.015em]">
                                 TechNova Solutions</h1>
                             <div class="flex items-center gap-2 mt-1">
                                 <span class="material-symbols-outlined text-[#617289] text-base">domain</span>
                                 <p class="text-[#617289] dark:text-gray-400 text-base font-normal leading-normal">
                                     Information Technology &amp; Services</p>
                             </div>
                             <div class="flex items-center gap-2 mt-1">
                                 <span class="material-symbols-outlined text-[#617289] text-base">location_on</span>
                                 <p class="text-[#617289] dark:text-gray-400 text-base font-normal leading-normal"
                                     data-location="San Francisco">San Francisco, CA</p>
                             </div>
                         </div>
                     </div>
                     <div class="flex items-center gap-3 self-end @[520px]:self-center">
                         <button
                             class="flex min-w-[120px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-all">
                             <span class="material-symbols-outlined text-[18px]">add</span>
                             <span class="truncate">Follow</span>
                         </button>
                         <button
                             class="flex size-10 cursor-pointer items-center justify-center rounded-lg bg-[#f0f2f4] dark:bg-[#2d3748] text-[#111418] dark:text-white hover:bg-gray-200 transition-all">
                             <span class="material-symbols-outlined text-[20px]">share</span>
                         </button>
                     </div>
                 </div>
             </div>
             <!-- Navigation Tabs -->
             <div class="pb-3 mt-4 sticky top-[64px] bg-background-light dark:bg-background-dark z-40">
                 <div class="flex border-b border-[#dbe0e6] dark:border-[#2d3748] px-4 gap-8">
                     <a class="flex flex-col items-center justify-center border-b-[3px] border-primary text-primary pb-[13px] pt-4"
                         href="{{ route('web.company.detail') }}">
                         <p class="text-sm font-bold leading-normal tracking-[0.015em]">Overview</p>
                     </a>
                     <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-[#617289] dark:text-gray-400 pb-[13px] pt-4 hover:text-primary transition-all"
                         href="{{ route('web.company.jobs') }}">
                         <p class="text-sm font-bold leading-normal tracking-[0.015em]">Jobs</p>
                     </a>
                     <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-[#617289] dark:text-gray-400 pb-[13px] pt-4 hover:text-primary transition-all"
                         href="{{ route('web.company.reviews') }}">
                         <p class="text-sm font-bold leading-normal tracking-[0.015em]">Reviews</p>
                     </a>
                     <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-[#617289] dark:text-gray-400 pb-[13px] pt-4 hover:text-primary transition-all"
                         href="{{ route('web.company.benefit') }}">
                         <p class="text-sm font-bold leading-normal tracking-[0.015em]">Benefits</p>
                     </a>
                 </div>
             </div>
             {{ $slot }}
         </div>
     </div>
 </main>
