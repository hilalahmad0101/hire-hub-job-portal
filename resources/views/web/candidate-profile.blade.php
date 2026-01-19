@extends('layouts.web.guest')

@section('title', 'Candidate Profile')

@section('content')
    <main class="max-w-[1280px] mx-auto px-4 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column: Sidebar (Sticky) -->
            <aside class="w-full lg:w-1/3 flex flex-col gap-6">
                <div class="lg:sticky lg:top-24 space-y-6">
                    <!-- Candidate Bio Card -->
                    <div
                        class="bg-white dark:bg-background-dark rounded-xl shadow-sm border border-[#f0f0f4] dark:border-[#2a2845] p-6">
                        <div class="flex flex-col items-center text-center">
                            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-2xl size-32 mb-4 shadow-lg"
                                data-alt="Professional headshot of Alex Rivera"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBaEKXbVpz3QNhSHS8xe5X-aely2DLAUQIpFq54ZFjKJdwrTOIupVkx6f3zO94KGov_7AShSWEm9vUIRknQ5OiWEaISrvR6QkRl_EAOHTwgCXc3XYu82Z6QaGVdwOBhZaTYaeI9h0OsMbRoXVonUX6gYhAGdo7aryC6w_stmhWeFvf9vc_KEQ_-FI7BwILBnOVZHrrSVwpnZUY77F7YyYohPN0_Uf7GwHUzTO2MVAceijNtsAIFz9_QjJHVKo9QMKkZjCEMlqnNolg");'>
                            </div>
                            <h1 class="text-[#121118] dark:text-white text-2xl font-bold leading-normal">Alex Rivera</h1>
                            <p class="text-primary text-sm font-semibold uppercase tracking-wider mb-4">Senior Full-Stack
                                Engineer</p>
                            <div class="flex flex-wrap justify-center gap-2 mb-6">
                                <span
                                    class="px-3 py-1 bg-[#f0f0f4] dark:bg-[#2a2845] rounded-full text-xs font-medium flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px]">location_on</span> San Francisco, CA
                                </span>
                                <span
                                    class="px-3 py-1 bg-[#f0f0f4] dark:bg-[#2a2845] rounded-full text-xs font-medium flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px]">work</span> 10+ Years Exp.
                                </span>
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <button
                                    class="w-full flex items-center justify-center gap-2 rounded-lg h-11 bg-primary text-white text-sm font-bold tracking-[0.015em] hover:bg-primary/90 transition-all">
                                    <span class="material-symbols-outlined text-[20px]">download</span>
                                    <span>Download Resume</span>
                                </button>
                                <button
                                    class="w-full flex items-center justify-center gap-2 rounded-lg h-11 bg-[#f0f0f4] dark:bg-[#2a2845] text-[#121118] dark:text-white text-sm font-bold tracking-[0.015em] hover:bg-gray-200 dark:hover:bg-gray-700 transition-all">
                                    <span class="material-symbols-outlined text-[20px]">star</span>
                                    <span>Shortlist Candidate</span>
                                </button>
                            </div>
                        </div>
                        <div class="mt-8 border-t border-[#f0f0f4] dark:border-[#2a2845] pt-6 space-y-4">
                            <div class="flex items-center gap-3 text-sm">
                                <span class="material-symbols-outlined text-primary">mail</span>
                                <span class="text-[#656189] dark:text-[#a19fc1]">alex.rivera@example.com</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm">
                                <span class="material-symbols-outlined text-primary">call</span>
                                <span class="text-[#656189] dark:text-[#a19fc1]">+1 (555) 982-1234</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm">
                                <span class="material-symbols-outlined text-primary">language</span>
                                <span class="text-[#656189] dark:text-[#a19fc1]">alexrivera.dev</span>
                            </div>
                        </div>
                    </div>
                    <!-- Composer: Quick Messaging Widget -->
                    <div
                        class="bg-white dark:bg-background-dark rounded-xl shadow-sm border border-[#f0f0f4] dark:border-[#2a2845] overflow-hidden">
                        <div class="p-4 border-b border-[#f0f0f4] dark:border-[#2a2845] flex items-center justify-between">
                            <h3 class="font-bold text-sm">Quick Message</h3>
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                        </div>
                        <div class="p-4 flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-8 shrink-0"
                                    data-alt="Recruiter small avatar"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBT9frxsg04MG_vJ827HyNiyu3KAELM0MioLDMVoLXLJchL6LQ_6S2itJkUXjL-RMucSX2f8bywr-0JH1tTJWCjn8Dj8B0347AGtZ7EukmDitR3oEqKGKHluo2sdaJf27dyyHV2gaHc6KNtkBF2D7Pvaglt0SGtoTHrgQdiF6WbgP6069vTCEZin89ZPP9NoNKc0MehUjwXggXXYxVNpVUZJcXmPKjnqKTiH9KZLDispYJ17WKD-6CQcQRkHjQeu-Te63qMmHOpVhU");'>
                                </div>
                                <div class="flex-1">
                                    <div class="flex w-full flex-col">
                                        <textarea
                                            class="form-textarea w-full resize-none rounded-lg border-none bg-[#f0f0f4] dark:bg-[#2a2845] text-sm focus:ring-1 focus:ring-primary placeholder:text-[#656189] p-3 transition-all min-h-[100px]"
                                            placeholder="Type a message to Alex..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex gap-1">
                                    <button class="text-[#656189] hover:text-primary p-1 rounded transition-colors"><span
                                            class="material-symbols-outlined text-[20px]">attach_file</span></button>
                                    <button class="text-[#656189] hover:text-primary p-1 rounded transition-colors"><span
                                            class="material-symbols-outlined text-[20px]">sentiment_satisfied</span></button>
                                    <button class="text-[#656189] hover:text-primary p-1 rounded transition-colors"><span
                                            class="material-symbols-outlined text-[20px]">calendar_today</span></button>
                                </div>
                                <button
                                    class="cursor-pointer rounded-lg h-9 px-4 bg-primary text-white text-sm font-medium hover:bg-primary/90 shadow-md shadow-primary/20">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Right Column: CV Details -->
            <div class="w-full lg:w-2/3 flex flex-col gap-6">
                <!-- Page Heading (Title) -->
                <div
                    class="bg-white dark:bg-background-dark rounded-xl shadow-sm border border-[#f0f0f4] dark:border-[#2a2845] p-8">
                    <h2 class="text-3xl font-black leading-tight tracking-[-0.033em] mb-4">Professional Summary</h2>
                    <p class="text-[#656189] dark:text-[#a19fc1] text-lg leading-relaxed">
                        Highly motivated Senior Full-Stack Engineer with over 10 years of experience designing and building
                        scalable web applications. Expert in modern JavaScript frameworks, distributed systems, and cloud
                        infrastructure. Proven track record of leading high-performing engineering teams and delivering
                        complex
                        projects in fast-paced startup environments.
                    </p>
                </div>
                <!-- Experience Section -->
                <div
                    class="bg-white dark:bg-background-dark rounded-xl shadow-sm border border-[#f0f0f4] dark:border-[#2a2845] p-8">
                    <div class="flex items-center gap-3 mb-8">
                        <span class="material-symbols-outlined text-primary text-3xl">work_history</span>
                        <h3 class="text-2xl font-bold tracking-tight">Work Experience</h3>
                    </div>
                    <div
                        class="space-y-12 relative before:absolute before:left-6 before:top-2 before:bottom-0 before:w-0.5 before:bg-[#f0f0f4] dark:before:bg-[#2a2845]">
                        <!-- Experience Item 1 -->
                        <div class="relative pl-16">
                            <div
                                class="absolute left-3.5 top-0 w-5 h-5 bg-primary rounded-full border-4 border-white dark:border-[#1a1831] z-10">
                            </div>
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2 gap-2">
                                <div>
                                    <h4 class="text-lg font-bold">Principal Engineer</h4>
                                    <p class="text-primary font-medium">CloudScale AI Systems</p>
                                </div>
                                <span
                                    class="px-3 py-1 bg-[#f0f0f4] dark:bg-[#2a2845] rounded-lg text-xs font-bold text-[#656189] dark:text-[#a19fc1]">JAN
                                    2020 — PRESENT</span>
                            </div>
                            <ul
                                class="list-disc list-outside ml-4 text-[#656189] dark:text-[#a19fc1] space-y-2 text-sm leading-relaxed">
                                <li>Architected and launched a real-time data processing engine that handles over 10M events
                                    per
                                    second.</li>
                                <li>Reduced infrastructure costs by 40% by migrating services to a Kubernetes-based
                                    microservices architecture.</li>
                                <li>Managed a cross-functional team of 12 engineers, overseeing technical strategy and code
                                    quality.</li>
                            </ul>
                        </div>
                        <!-- Experience Item 2 -->
                        <div class="relative pl-16">
                            <div
                                class="absolute left-3.5 top-0 w-5 h-5 bg-primary/40 rounded-full border-4 border-white dark:border-[#1a1831] z-10">
                            </div>
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2 gap-2">
                                <div>
                                    <h4 class="text-lg font-bold">Senior Web Developer</h4>
                                    <p class="text-primary font-medium">FinTech Innovations</p>
                                </div>
                                <span
                                    class="px-3 py-1 bg-[#f0f0f4] dark:bg-[#2a2845] rounded-lg text-xs font-bold text-[#656189] dark:text-[#a19fc1]">MAR
                                    2016 — DEC 2019</span>
                            </div>
                            <ul
                                class="list-disc list-outside ml-4 text-[#656189] dark:text-[#a19fc1] space-y-2 text-sm leading-relaxed">
                                <li>Led the development of the primary customer-facing portal using React and Redux.</li>
                                <li>Optimized application performance, resulting in a 50% decrease in initial load times.
                                </li>
                                <li>Collaborated closely with UX designers to implement a new design system from scratch.
                                </li>
                            </ul>
                        </div>
                        <!-- Experience Item 3 -->
                        <div class="relative pl-16">
                            <div
                                class="absolute left-3.5 top-0 w-5 h-5 bg-primary/20 rounded-full border-4 border-white dark:border-[#1a1831] z-10">
                            </div>
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2 gap-2">
                                <div>
                                    <h4 class="text-lg font-bold">Software Engineer</h4>
                                    <p class="text-primary font-medium">EarlyBird Startups</p>
                                </div>
                                <span
                                    class="px-3 py-1 bg-[#f0f0f4] dark:bg-[#2a2845] rounded-lg text-xs font-bold text-[#656189] dark:text-[#a19fc1]">JUL
                                    2013 — FEB 2016</span>
                            </div>
                            <p class="text-[#656189] dark:text-[#a19fc1] text-sm leading-relaxed">
                                Joined as the 3rd engineering hire. Built the MVP of the core platform using Python/Django
                                and
                                PostgreSQL. Contributed to all stages of the software development lifecycle.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Skills Section -->
                <div
                    class="bg-white dark:bg-background-dark rounded-xl shadow-sm border border-[#f0f0f4] dark:border-[#2a2845] p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="material-symbols-outlined text-primary text-3xl">terminal</span>
                        <h3 class="text-2xl font-bold tracking-tight">Technical Skills</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <p class="text-xs font-bold text-[#656189] uppercase tracking-widest mb-4">Frontend &amp; Mobile
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="bg-primary/10 text-primary border border-primary/20 px-3 py-1.5 rounded-lg text-sm font-semibold">React
                                    / Next.js</span>
                                <span
                                    class="bg-primary/10 text-primary border border-primary/20 px-3 py-1.5 rounded-lg text-sm font-semibold">TypeScript</span>
                                <span
                                    class="bg-primary/10 text-primary border border-primary/20 px-3 py-1.5 rounded-lg text-sm font-semibold">Tailwind
                                    CSS</span>
                                <span
                                    class="bg-primary/10 text-primary border border-primary/20 px-3 py-1.5 rounded-lg text-sm font-semibold">GraphQL</span>
                                <span
                                    class="bg-primary/10 text-primary border border-primary/20 px-3 py-1.5 rounded-lg text-sm font-semibold">Redux</span>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-[#656189] uppercase tracking-widest mb-4">Backend &amp;
                                Infrastructure</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="bg-primary/10 text-primary border border-primary/20 px-3 py-1.5 rounded-lg text-sm font-semibold">Node.js</span>
                                <span
                                    class="bg-primary/10 text-primary border border-primary/20 px-3 py-1.5 rounded-lg text-sm font-semibold">PostgreSQL</span>
                                <span
                                    class="bg-primary/10 text-primary border border-primary/20 px-3 py-1.5 rounded-lg text-sm font-semibold">AWS
                                    (EKS, RDS)</span>
                                <span
                                    class="bg-primary/10 text-primary border border-primary/20 px-3 py-1.5 rounded-lg text-sm font-semibold">Redis</span>
                                <span
                                    class="bg-primary/10 text-primary border border-primary/20 px-3 py-1.5 rounded-lg text-sm font-semibold">Docker</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education Section -->
                <div
                    class="bg-white dark:bg-background-dark rounded-xl shadow-sm border border-[#f0f0f4] dark:border-[#2a2845] p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="material-symbols-outlined text-primary text-3xl">school</span>
                        <h3 class="text-2xl font-bold tracking-tight">Education</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold">M.S. in Computer Science</h4>
                                <p class="text-[#656189] dark:text-[#a19fc1]">Stanford University</p>
                            </div>
                            <span class="text-sm font-medium text-[#656189]">2011 — 2013</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold">B.S. in Software Engineering</h4>
                                <p class="text-[#656189] dark:text-[#a19fc1]">University of California, Berkeley</p>
                            </div>
                            <span class="text-sm font-medium text-[#656189]">2007 — 2011</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
