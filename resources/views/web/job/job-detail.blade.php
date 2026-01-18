@extends('layouts.web.guest')

@section('title', 'Job Detail')
@push('styles')
    <style type="text/tailwindcss">
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: 20px;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .hero-pattern {
            background-color: #136dec;
            background-image: radial-gradient(at 0% 0%, hsla(215, 85%, 39%, 1) 0, transparent 50%),
                radial-gradient(at 100% 0%, hsla(215, 80%, 45%, 1) 0, transparent 50%);
        }

        .dark .hero-pattern {
            background-color: #0f172a;
            background-image: radial-gradient(at 0% 0%, hsla(215, 50%, 15%, 1) 0, transparent 50%),
                radial-gradient(at 100% 0%, hsla(215, 50%, 10%, 1) 0, transparent 50%);
        }
    </style>
@endpush
@section('content')
    <x-web.job-main>
        <div class="">
            <div class="space-y-12 bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-gray-100 dark:border-gray-700">
                <section>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-5">About the role</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-lg">
                        TechFlow Solutions is looking for a Senior Software Engineer to join our core infrastructure
                        team. In this role, you will be responsible for building and maintaining high-performance,
                        scalable backend services that power our global platform. You'll work closely with product
                        managers and other engineers to deliver innovative features that serve millions of users.
                    </p>
                </section>
                <section>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-5">Responsibilities</h3>
                    <ul class="space-y-4 list-none">
                        <li class="flex gap-4 text-gray-600 dark:text-gray-400 leading-relaxed text-base">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center font-bold text-xs mt-0.5">✓</span>
                            Design, develop, and deploy scalable backend services using Node.js and TypeScript.
                        </li>
                        <li class="flex gap-4 text-gray-600 dark:text-gray-400 leading-relaxed text-base">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center font-bold text-xs mt-0.5">✓</span>
                            Optimize application performance and ensure high availability of services.
                        </li>
                        <li class="flex gap-4 text-gray-600 dark:text-gray-400 leading-relaxed text-base">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center font-bold text-xs mt-0.5">✓</span>
                            Collaborate with cross-functional teams to define requirements and deliver solutions.
                        </li>
                        <li class="flex gap-4 text-gray-600 dark:text-gray-400 leading-relaxed text-base">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center font-bold text-xs mt-0.5">✓</span>
                            Write clean, maintainable, and well-tested code following best practices.
                        </li>
                        <li class="flex gap-4 text-gray-600 dark:text-gray-400 leading-relaxed text-base">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center font-bold text-xs mt-0.5">✓</span>
                            Mentor junior developers and participate in design reviews and code reviews.
                        </li>
                    </ul>
                </section>
                <section>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-5">Requirements</h3>
                    <ul class="space-y-4 list-none">
                        <li class="flex gap-4 text-gray-600 dark:text-gray-400 leading-relaxed text-base">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center font-bold text-xs mt-0.5">✓</span>
                            5+ years of experience in software engineering with a focus on backend development.
                        </li>
                        <li class="flex gap-4 text-gray-600 dark:text-gray-400 leading-relaxed text-base">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center font-bold text-xs mt-0.5">✓</span>
                            Strong proficiency in Node.js, Go, or Python.
                        </li>
                        <li class="flex gap-4 text-gray-600 dark:text-gray-400 leading-relaxed text-base">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center font-bold text-xs mt-0.5">✓</span>
                            Experience with cloud platforms (AWS, GCP, or Azure) and containerization (Docker,
                            Kubernetes).
                        </li>
                        <li class="flex gap-4 text-gray-600 dark:text-gray-400 leading-relaxed text-base">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center font-bold text-xs mt-0.5">✓</span>
                            Deep understanding of SQL and NoSQL databases.
                        </li>
                        <li class="flex gap-4 text-gray-600 dark:text-gray-400 leading-relaxed text-base">
                            <span
                                class="flex-shrink-0 size-6 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary flex items-center justify-center font-bold text-xs mt-0.5">✓</span>
                            Bachelor's degree in Computer Science or a related field (or equivalent experience).
                        </li>
                    </ul>
                </section>
                <section class="bg-gray-50 dark:bg-gray-900/50 p-8 rounded-2xl border border-gray-100 dark:border-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">About TechFlow Solutions</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-base leading-relaxed mb-6">
                        TechFlow Solutions is a fast-growing technology company dedicated to building
                        next-generation
                        workflow management tools. Our mission is to empower teams to work more efficiently through
                        intelligent automation and seamless collaboration.
                    </p>
                    <a class="text-primary text-base font-bold flex items-center gap-2 hover:underline" href="#">
                        View company profile <span class="material-symbols-outlined !text-lg">arrow_forward</span>
                    </a>
                </section>
            </div>
        </div>
    </x-web.job-main>
@endsection
