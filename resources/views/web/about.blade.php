@extends('layouts.web.guest')

@section('title', 'About us')

@section('content')
    <main class="flex-1">
        <!-- Hero Section -->
        <div class="w-full r">
            <div class="p-0 @[480px]:p-6">
                <div class="flex min-h-[520px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:rounded-xl items-center justify-center p-8 text-center"
                    data-alt="Professional office workspace with soft natural lighting"
                    style='background-image: linear-gradient(rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 20, 0.7) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCUgICga52ttcUU3EaDWvtiDuuGgtf5L3O6T1qof9zaOpqN8506Cl_jQVjkc-7vmt1CiOSH2JknC9lyTrtJnW2E8LHL93jk-jE4nKsAs6rjov7U6tA50QAV_xWNdfijHolmRnsE7pLoXzeOPn9Vj1AMiqWBbbdPo94hNGNWBreWpIr5kJlidgTbK1JSS3EEK8Hx8kbOWqW4hzhwnBbE5TMqM-V2SWC-Miyi8GT5uW1IQ-500W9sjVgziBIrcmi2v-FwxUYQs2tdG5k");'>
                    <div class="max-w-[800px] flex flex-col gap-4">
                        <h1
                            class="text-white text-5xl font-black leading-tight tracking-[-0.033em] @[480px]:text-6xl font-display">
                            Connecting talent with opportunity
                        </h1>
                        <p class="text-white/90 text-lg font-normal leading-relaxed @[480px]:text-xl">
                            Building the future of work, one connection at a time. We empower individuals to find their
                            passion and companies to find their catalysts.
                        </p>
                        <div class="mt-4">
                            <button
                                class="inline-flex min-w-[160px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:scale-105 transition-transform">
                                Join Our Mission
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Story Section -->
        <section class="max-w-[1200px] mx-auto px-10 py-20 flex flex-col md:flex-row items-center gap-16">
            <div class="flex-1 flex flex-col gap-6">
                <div class="inline-flex items-center gap-2 text-primary font-bold tracking-wider text-xs uppercase">
                    <span class="w-8 h-px bg-primary"></span> Our Journey
                </div>
                <h2
                    class="text-[#111118] dark:text-white text-4xl font-bold leading-tight tracking-[-0.015em] font-display">
                    Our Story</h2>
                <div class="flex flex-col gap-4 text-[#111118] dark:text-gray-300 text-lg font-normal leading-relaxed">
                    <p>
                        Founded in 2018 with a vision to revolutionize the hiring process, JobPlatform has grown from a
                        small garage startup to a global bridge between world-class talent and innovative companies.
                    </p>
                    <p>
                        We realized that the traditional job search was broken—disconnected, impersonal, and inefficient.
                        Our founders, former recruiters and engineers, decided to build something better: a platform where
                        values and skills align, creating long-term success for both parties.
                    </p>
                    <p>
                        Today, we serve over 5 million users worldwide, helping thousands of companies build diverse,
                        high-performing teams through data-driven matching and human-centric design.
                    </p>
                </div>
            </div>
            <div class="flex-1 w-full max-w-[500px]">
                <div class="relative group">
                    <div
                        class="absolute -inset-4 bg-primary/10 rounded-2xl rotate-2 group-hover:rotate-1 transition-transform">
                    </div>
                    <img alt="Team collaborating in a modern office"
                        class="relative rounded-2xl shadow-xl w-full aspect-square object-cover"
                        data-alt="Group of diverse professionals collaborating around a laptop"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAS8YbG8jO28k6wKTFhKpPuAnK_xXGYcfpp7DbW3cNMcb3zquqrSiM6GJK4VTjrp9HDvWXADSvEJhAr1is9dZsgPMShXUu7U69YJ5baMkcq0rHwd1aulaz_d0qLDS73xy6U-ra2DlG883_uFTemeySEHG7z9hgxlgEElyHT8wyj1rnTEpVPZAVzdIJSDt94nDCRZaiyCNvpGH6lM4A5nS3OuKamBEWdSHBzPVyjADvoLYjaP_LAHY6lPE37Mbs9FI-op7FgzYVBBk" />
                </div>
            </div>
        </section>
        <!-- Core Values Grid -->
        <section class="bg-primary/5 dark:bg-white/5 py-24">
            <div class="max-w-[1200px] mx-auto px-10">
                <div class="text-center mb-16">
                    <h2
                        class="text-[#111118] dark:text-white text-4xl font-bold leading-tight tracking-[-0.015em] font-display mb-4">
                        Our Core Values</h2>
                    <p class="text-[#111118]/60 dark:text-gray-400 max-w-[600px] mx-auto text-lg">The principles that guide
                        every decision we make and every feature we build.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Integrity -->
                    <div
                        class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md transition-shadow group">
                        <div
                            class="w-14 h-14 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">verified_user</span>
                        </div>
                        <h3 class="text-[#111118] dark:text-white text-xl font-bold mb-3 font-display">Integrity</h3>
                        <p class="text-[#111118]/70 dark:text-gray-400 leading-relaxed">
                            We believe in radical transparency. Whether it's salary ranges or job requirements, we
                            prioritize honesty and fairness for every user.
                        </p>
                    </div>
                    <!-- Innovation -->
                    <div
                        class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md transition-shadow group">
                        <div
                            class="w-14 h-14 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">lightbulb</span>
                        </div>
                        <h3 class="text-[#111118] dark:text-white text-xl font-bold mb-3 font-display">Innovation</h3>
                        <p class="text-[#111118]/70 dark:text-gray-400 leading-relaxed">
                            The world of work is changing rapidly. We build smarter tools and AI-driven insights to stay
                            ahead of the curve and simplify the complex.
                        </p>
                    </div>
                    <!-- Community -->
                    <div
                        class="bg-white dark:bg-gray-900 p-8 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md transition-shadow group">
                        <div
                            class="w-14 h-14 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">groups</span>
                        </div>
                        <h3 class="text-[#111118] dark:text-white text-xl font-bold mb-3 font-display">Community</h3>
                        <p class="text-[#111118]/70 dark:text-gray-400 leading-relaxed">
                            We aren't just a job board; we're a supportive network. We foster growth beyond the application
                            through mentorship and resource sharing.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Meet the Team Section -->
        <section class="max-w-[1200px] mx-auto px-10 py-24">
            <div class="text-center mb-16">
                <h2
                    class="text-[#111118] dark:text-white text-4xl font-bold leading-tight tracking-[-0.015em] font-display mb-4">
                    Meet the Team</h2>
                <p class="text-[#111118]/60 dark:text-gray-400 max-w-[600px] mx-auto text-lg">The passionate people behind
                    JobPlatform working to build your future.</p>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Member 1 -->
                <div class="flex flex-col items-center group">
                    <div
                        class="relative w-40 h-40 mb-6 overflow-hidden rounded-full ring-4 ring-primary/5 group-hover:ring-primary/20 transition-all">
                        <img alt="Sarah Jenkins, CEO &amp; Founder"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            data-alt="Headshot of a confident female executive with a friendly smile"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuACup6yDa8W1hs4qsH3ejCaNPY4X5DcnBjiMm6olF41abVE9ixp8SRcTQgRQgAa8U1I02aO9M3rQr02lRiCY40WlGqCZ49PHdMKG4NmFupDxnggnw1QL6kqtyqaFMUhAYzKebbT4-iRkCVWMrUZ-YFU23UWZvV7pe6trIj6dxp9xHrWVzsZ2POVr3JZpBhrtPMQGxgkpqiudW94DVKri_O2ufHzfWJdxJHgCIdrlbt3Bkp1loByr3K1oVP0a8JZ4fQMxfE48LGgBD0" />
                    </div>
                    <h4 class="text-lg font-bold text-[#111118] dark:text-white font-display">Sarah Jenkins</h4>
                    <p class="text-primary font-medium text-sm">CEO &amp; Founder</p>
                </div>
                <!-- Member 2 -->
                <div class="flex flex-col items-center group">
                    <div
                        class="relative w-40 h-40 mb-6 overflow-hidden rounded-full ring-4 ring-primary/5 group-hover:ring-primary/20 transition-all">
                        <img alt="David Chen, Head of Product"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            data-alt="Headshot of a male professional in a smart-casual outfit"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCb_gp1FGnsjkL6ocYiVbiXzV8ZPThi7Pau402FHDmZ3NyIdOeJPzsmYDbwISCGlWTDejam3Ozi_Hfi48PZoBxcMkidqGuaNrLyOWmPLdao2BEP_Y0j1WoImCs0aV_peUN-1fGybxZ-m5O4oRiu-9jnAiCZMPncsrieKag3Sg0GF7DbkMG48UFLR0pFhsmfFuP0cQBWsvt0lvn77wi3L2AEfh6Yz4YBhAsJ4zwrs8nTbVqkxA0tKlEJ46Ey1S9VyDsu8KuFX_xtUIo" />
                    </div>
                    <h4 class="text-lg font-bold text-[#111118] dark:text-white font-display">David Chen</h4>
                    <p class="text-primary font-medium text-sm">Head of Product</p>
                </div>
                <!-- Member 3 -->
                <div class="flex flex-col items-center group">
                    <div
                        class="relative w-40 h-40 mb-6 overflow-hidden rounded-full ring-4 ring-primary/5 group-hover:ring-primary/20 transition-all">
                        <img alt="Elena Rodriguez, CTO"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            data-alt="Headshot of a smiling female tech professional"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJOHpGGssCN3wVN1WH2fuMtLNuMcVFJhfKDh3D_51x2mz-NnHNA2jGp0kmiBTAMYaLd12thcFb9EVwn9FnbAdTGkqEMsNvc7DGFcKz6oGhDNxPOZOIPzZJcJP3MUE_hPgrQwyKUSB0Ql40oDJ9avyC55jR9dTJAMeCEbDpsGqIic_BnPJK7PFlNv-BxhSB1TVYsc4XkVsx1YnvQvFQsuE3aJo9_bwdWq6cHGQZ1STr4BUn14bxy9CEYntGEGbI4_D9bY7EvUkwjGg" />
                    </div>
                    <h4 class="text-lg font-bold text-[#111118] dark:text-white font-display">Elena Rodriguez</h4>
                    <p class="text-primary font-medium text-sm">CTO</p>
                </div>
                <!-- Member 4 -->
                <div class="flex flex-col items-center group">
                    <div
                        class="relative w-40 h-40 mb-6 overflow-hidden rounded-full ring-4 ring-primary/5 group-hover:ring-primary/20 transition-all">
                        <img alt="Marcus Thorne, Head of People"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            data-alt="Headshot of a male professional with glasses"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwQ0FZamzmT3Aq3C-NeSuMv938cdDd8_qBXqqMc0WHKQBVVW7I22oP4K0cD02WCwXzgvMC9wuO1OBfqHZGmU0Y9QCvUizxlojoNlTyD7r7KZfuCwnmGbuzxqc5o3LpNiiQ2G4XIL9oPBd1_4jkemxkPBbN4cQmEFjJxQhapY1ojJf0LSvazxOBpLb8i4k0RnRMMWAHeJd0TDtbK1kTJPnTxf2aAnHOVOG7XTuCsLcmcK945nB9bdraLgeuG5BrYyxNAa-UQjg_7ZM" />
                    </div>
                    <h4 class="text-lg font-bold text-[#111118] dark:text-white font-display">Marcus Thorne</h4>
                    <p class="text-primary font-medium text-sm">Head of People</p>
                </div>
            </div>
        </section>
        <!-- Final CTA Section -->
        <section class="w-full mx-auto">
            <div
                class="bg-primary dark:bg-primary/90 p-12 text-center text-white flex flex-col items-center gap-6 overflow-hidden relative">
                <!-- Decorative Blobs -->
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                <h2 class="text-3xl md:text-4xl font-black font-display relative z-10">Ready to find your next role?</h2>
                <p class="text-white/80 text-lg max-w-[600px] relative z-10">
                    Join thousands of professionals who have found their dream career through JobPlatform.
                </p>
                <div class="flex flex-wrap justify-center gap-4 relative z-10">
                    <button
                        class="flex min-w-[160px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-white text-primary text-base font-bold transition-all hover:bg-opacity-90 shadow-lg">
                        Browse Jobs
                    </button>
                    <button
                        class="flex min-w-[160px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-primary-dark/20 border-2 border-white/30 text-white text-base font-bold transition-all hover:bg-white/10">
                        Hire Talent
                    </button>
                </div>
            </div>
        </section>
    </main>
@endsection
