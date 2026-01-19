@extends('layouts.web.employee-auth')

@section('title', 'Company Profile')

@section('content')
    <div class="flex flex-wrap justify-between items-end gap-4 pb-8 mb-6 border-b border-gray-200 dark:border-gray-800">
        <div class="flex min-w-72 flex-col gap-1">
            <h1 class="text-[#121118] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Edit Company
                Profile</h1>
            <p class="text-[#656189] dark:text-gray-400 text-base font-normal leading-normal">Manage your company's public
                identity and branding.</p>
        </div>
        <div class="flex gap-3">
            <button
                class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-11 px-6 bg-white dark:bg-background-dark border border-gray-200 dark:border-gray-700 text-[#121118] dark:text-white text-sm font-bold transition-all hover:bg-gray-50">
                Discard Changes
            </button>
            <button
                class="flex min-w-[120px] cursor-pointer items-center justify-center rounded-lg h-11 px-6 bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                Save Profile
            </button>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row gap-10">
        <!-- Left Side: Form Content -->
        <div class="flex-1 space-y-8">
            <!-- Media Assets Section -->
            <section
                class="bg-white dark:bg-background-dark rounded-xl p-6 shadow-sm border border-gray-100 dark:border-gray-800">
                <h2 class="text-[#121118] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] mb-6">
                    Media Assets</h2>
                <!-- Banner Upload -->
                <div class="mb-8">
                    <label class="block text-sm font-semibold mb-3 text-gray-700 dark:text-gray-300">Banner Image</label>
                    <div class="relative group">
                        <div class="w-full bg-center bg-no-repeat bg-cover flex flex-col items-center justify-center overflow-hidden bg-gray-100 dark:bg-gray-800 rounded-xl min-h-[220px] border-2 border-dashed border-gray-300 dark:border-gray-600 transition-all hover:border-primary"
                            data-alt="Modern company office banner placeholder"
                            style='background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.3)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAF5SkhIW24TMmlxWcrROPryb6j-gFLia9CtToZc9O76_AKQzV2T5KeGyfersQs1_Uc0YBoVQ0OP52Gkjioufhzgypg7p0y1E4bTfkFzM3oGfgfVU1crV3u6NUadDdtVUClBqkY63gewkdaaHTYO9V_X-PWOkqL_3jZJYDqZQo90-b22bBGxv1QNwbSDEfKaytoYAo7P3E4Du1Xzvqqct6Sx9AyP2OZqQaGSjX08Z_zQvA5qucWf3kPUIw0IKQLCTIumszdfQS_pnI");'>
                            <div
                                class="bg-white/90 dark:bg-black/50 px-4 py-2 rounded-lg flex items-center gap-2 cursor-pointer shadow-lg">
                                <span class="material-symbols-outlined text-primary">cloud_upload</span>
                                <span class="text-sm font-bold">Replace Banner</span>
                            </div>
                        </div>
                        <p class="mt-2 text-xs text-gray-500">Recommended: 1200x400px. Max 5MB.</p>
                    </div>
                </div>
                <!-- Profile Header: Logo Upload -->
                <div class="flex items-center gap-6">
                    <div class="relative">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-32 w-32 border-4  dark:border-[#1a1735] shadow-md overflow-hidden bg-primary/10 flex items-center justify-center"
                            data-alt="Company logo upload preview"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBEuApYb-v844AlIoPasn6lYtgZrWkEcLa-4-Oo6u85WJkETGLgZQ8Kz6ZEg__jUoujIvl5puaDokOPcj8q6vgRGa9dcSIQFEaE0ofwxUWZ4HKpi-fs11iPiuZVHO9AxM-ww4C56AisavbHc7T_PW0r30-6PAhq5am_ZsuvCD3lIopAD_aKSRFxGlu302LogDOqMn8atkhy7WzEkn06dznhDnRPb1itaeqeS4Em__bKdz3oi0juBFUdY6UvmP_fdF2uNkiZ6RGDh5I");'>
                        </div>
                        <button
                            class="absolute bottom-0 right-0 bg-primary text-white p-2 rounded-full shadow-lg border-2  dark:border-[#1a1735]">
                            <span class="material-symbols-outlined text-sm">edit</span>
                        </button>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-[#121118] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">
                            Upload Logo</p>
                        <p class="text-[#656189] dark:text-gray-400 text-base font-normal leading-normal">Recommended:
                            400x400px (SVG, PNG)</p>
                    </div>
                </div>
            </section>
            <!-- Company Details Section -->
            <section
                class="bg-white dark:bg-background-dark rounded-xl p-6 shadow-sm border border-gray-100 dark:border-gray-800">
                <h2 class="text-[#121118] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] mb-6">
                    Company Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Company Name</label>
                        <input
                            class="w-full h-11 px-4 rounded-lg bg-background-light dark:bg-background-dark border  dark:bg-background-dark  focus:border-primary focus:ring-0 text-sm"
                            type="text" value="InnovateTech Solutions" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Website URL</label>
                        <input
                            class="w-full h-11 px-4 rounded-lg bg-background-light border  dark:bg-background-dark  focus:border-primary focus:ring-0 text-sm"
                            type="url" value="https://innovatetech.io" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Industry</label>
                        <select
                            class="w-full h-11 px-4 rounded-lg bg-background-light border  dark:bg-background-dark  focus:border-primary focus:ring-0 text-sm">
                            <option>Information Technology</option>
                            <option>Financial Services</option>
                            <option>Healthcare</option>
                            <option>E-commerce</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Company Size</label>
                        <select
                            class="w-full h-11 px-4 rounded-lg bg-background-light border  dark:bg-background-dark  focus:border-primary focus:ring-0 text-sm">
                            <option>1-10 Employees</option>
                            <option>11-50 Employees</option>
                            <option selected="">51-200 Employees</option>
                            <option>201-500 Employees</option>
                            <option>500+ Employees</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Company Bio</label>
                        <textarea
                            class="w-full p-4 rounded-lg bg-background-light border  dark:bg-background-dark  focus:border-primary focus:ring-0 text-sm resize-none"
                            placeholder="Describe your company culture, mission, and what makes you unique..." rows="6">InnovateTech Solutions is a leading provider of enterprise cloud software, helping organizations accelerate their digital transformation. Founded in 2015, we've grown into a global team of over 150 passionate innovators committed to building tools that empower developers.</textarea>
                        <p class="text-right text-xs text-gray-500">214 / 1000 characters</p>
                    </div>
                </div>
            </section>
        </div>
        <!-- Right Side: Live Preview -->
        <aside class="w-full lg:w-[380px] shrink-0">
            <div class="sticky top-24">
                <div class="flex items-center justify-between mb-4 px-1">
                    <span class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Public View
                        Preview</span>
                    <div class="flex gap-1">
                        <span class="size-2 rounded-full bg-green-500"></span>
                        <span class="text-xs text-green-500 font-medium">Live</span>
                    </div>
                </div>
                <!-- Preview Card -->
                <div
                    class="bg-white dark:bg-background-dark rounded-xl overflow-hidden shadow-2xl border border-gray-100 dark:border-gray-800">
                    <!-- Preview Banner -->
                    <div class="h-32 bg-center bg-cover" data-alt="Abstract colorful office pattern"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDjkYMKyTne4vO2bZi6X-s9LI8dYAmMZSZy7w0aUUhd346TwPYnbaWful1Sbsh-XnW2I_kPEjWJT2r2km8gv0Z7uU2BV_qGtvgWWjon5B0znnNh0mKyWtTF6743ip3ixfQ1pUd12nyailOmYzzLktnCC5hPXTWICZTX85zNRdr1_yJYV6siLm_eIikiPUODin0MHnvYeNsUrOwFphzX4CO4CqKgq7Gu1LJifuKp2p1EUFtTONa-AFNbtWrFK2FdwZICW2wsEcLuc-o");'>
                    </div>
                    <div class="px-5 pb-6">
                        <!-- Preview Logo overlap -->
                        <div class="relative -mt-10 mb-4">
                            <div class="size-20 rounded-xl bg-white border  dark:bg-background-dark p-1 shadow-md">
                                <div class="size-full bg-center bg-cover rounded-lg" data-alt="Small tech company logo"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBi6R2PFBnS4IoTwbaLQGSLFywM3F4tuXLLqbuulZ4IFk7aUnfFd4v14KQnxAar-vnsibPfvX71YUxZSFHJyYiFp3eUjG0LS7BQcFp37g-o2pS0C1zeJYZsHw792dXznlUlBmJ_-y9lM2f0tbaPjsF1BDpIbM51asRpMavh3ObTFNJfuRGC2FfBDUSYazSOmxq8hoG4mJmQYnmoZMOYrmYtEjvOuenR6ZcZUMSdRkOIHEmsQgwDmtlh9GDwnIaIC3ywUUfp94cgEx4");'>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-1">InnovateTech Solutions</h3>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="text-primary text-xs font-semibold bg-primary/10 px-2 py-0.5 rounded">Tech &amp;
                                Software</span>
                            <span class="text-gray-400 text-xs">•</span>
                            <span class="text-gray-500 dark:text-gray-400 text-xs font-medium">51-200 Employees</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-4 leading-relaxed mb-6">
                            InnovateTech Solutions is a leading provider of enterprise cloud software, helping organizations
                            accelerate their digital transformation. Founded in 2015, we've grown into a global team of over
                            150 passionate innovators...
                        </p>
                        <div class="border-t border-gray-100 dark:border-gray-800 pt-5 flex items-center justify-between">
                            <div class="flex items-center gap-2 text-primary font-bold text-sm">
                                <span class="material-symbols-outlined text-sm">link</span>
                                <span>innovatetech.io</span>
                            </div>
                            <button
                                class="bg-background-light border  dark:bg-background-dark px-4 py-2 rounded text-xs font-bold hover:bg-gray-200 transition-colors">
                                View Page
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-6 p-4 bg-primary/5 rounded-lg border border-primary/20">
                    <div class="flex gap-3">
                        <span class="material-symbols-outlined text-primary">info</span>
                        <p class="text-xs leading-normal text-primary/80">
                            This is how your company profile appears to prospective candidates. Make sure to keep your bio
                            updated to attract the best talent.
                        </p>
                    </div>
                </div>
            </div>
        </aside>
    </div>
@endsection
