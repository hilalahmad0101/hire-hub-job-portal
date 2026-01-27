@extends('layouts.web.employee-auth')

@section('title', 'Company Profile')

@section('content')
    <x-web.form-wrapper action="{{ route('web.setup-company', ['uuid' => auth()->user()->uuid]) }}">
        <div class="flex flex-col lg:flex-row gap-10">
            <!-- Left Side: Form Content -->
            <div class="flex-1 space-y-8">
                <!-- Media Assets Section -->
                <section
                    class="bg-white dark:bg-background-dark rounded-xl p-6 shadow-sm border border-gray-100 dark:border-gray-800">
                    <h2 class="text-[#121118] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] mb-6">
                        Media Assets
                    </h2>

                    <!-- Banner Upload -->
                    <div class="mb-8">
                        <label class="block text-sm font-semibold mb-3 text-gray-700 dark:text-gray-300">
                            Banner Image
                        </label>
                        <div class="relative group">
                            <input type="file" id="bannerInput" name="banner_image" accept="image/*" class="hidden">
                            <div id="bannerPreview"
                                class="w-full bg-center bg-no-repeat bg-cover flex flex-col items-center justify-center overflow-hidden bg-gray-100 dark:bg-gray-800 rounded-xl min-h-[220px] border-2 border-dashed border-gray-300 dark:border-gray-600 transition-all hover:border-primary cursor-pointer"
                                onclick="document.getElementById('bannerInput').click()"
                                style='background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.3)), url("{{ asset('storage/' . auth()->user()->company->banner_image) }}")'>
                                <div
                                    class="bg-white/90 dark:bg-black/50 px-4 py-2 rounded-lg flex items-center gap-2 cursor-pointer shadow-lg">
                                    <span class="material-symbols-outlined text-primary">cloud_upload</span>
                                    <span class="text-sm font-bold">Upload Banner</span>
                                </div>
                            </div>
                            <p class="mt-2 text-xs text-gray-500">Recommended: 1200x400px. Max 5MB.</p>
                            @error('banner_image')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Profile Header: Logo Upload -->
                    <div class="flex items-center gap-6">
                        <div class="relative">
                            <input type="file" id="logoInput" name="logo_image" accept="image/*" class="hidden">
                            <div id="logoPreview"
                                class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-32 w-32 border-4 dark:border-[#1a1735] shadow-md overflow-hidden bg-primary/10 flex items-center justify-center cursor-pointer"
                                onclick="document.getElementById('logoInput').click()"
                                style='background-image: url("{{ asset('storage/' . auth()->user()->company->logo_image) }}")'>
                            </div>
                            <button type="button" onclick="document.getElementById('logoInput').click()"
                                class="absolute bottom-0 right-0 bg-primary text-white p-2 rounded-full shadow-lg border-2 dark:border-[#1a1735]">
                                <span class="material-symbols-outlined text-sm">edit</span>
                            </button>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p
                                class="text-[#121118] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">
                                Upload Logo
                            </p>
                            <p class="text-[#656189] dark:text-gray-400 text-base font-normal leading-normal">
                                Recommended: 400x400px (SVG, PNG)
                            </p>
                            @error('logo_image')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </section>

                <!-- Company Details Section -->
                <section
                    class="bg-white dark:bg-background-dark rounded-xl p-6 shadow-sm border border-gray-100 dark:border-gray-800">
                    <h2 class="text-[#121118] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] mb-6">
                        Company Information
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Company Name *</label>
                            <input id="companyName" name="company_name"
                                class="w-full h-11 px-4 rounded-lg bg-background-light dark:bg-background-dark border focus:border-primary focus:ring-0 text-sm @error('company_name') border-red-500 @enderror"
                                type="text" value="{{ auth()->user()->company->company_name }}" required />
                            @error('company_name')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Website URL</label>
                            <input id="websiteUrl" name="website_url"
                                class="w-full h-11 px-4 rounded-lg bg-background-light border dark:bg-background-dark focus:border-primary focus:ring-0 text-sm @error('website_url') border-red-500 @enderror"
                                type="url" value="{{ old('website_url') }}" placeholder="https://example.com" />
                            @error('website_url')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Industry</label>
                            <select id="industry" name="industry"
                                class="w-full h-11 px-4 rounded-lg bg-background-light border dark:bg-background-dark focus:border-primary focus:ring-0 text-sm">
                                <option value="">Select Industry</option>
                                <option value="Information Technology" {{ old('industry') }}>
                                    Information Technology</option>
                                <option value="Financial Services" {{ old('industry') }}>
                                    Financial Services</option>
                                <option value="Healthcare" {{ old('industry') }}>
                                    Healthcare</option>
                                <option value="E-commerce" {{ old('industry') }}>
                                    E-commerce</option>
                                <option value="Education" {{ old('industry') }}>
                                    Education</option>
                                <option value="Manufacturing" {{ old('industry') }}>
                                    Manufacturing</option>
                                <option value="Retail" {{ old('industry') }}>
                                    Retail</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Company Size</label>
                            <select id="companySize" name="company_size"
                                class="w-full h-11 px-4 rounded-lg bg-background-light border dark:bg-background-dark focus:border-primary focus:ring-0 text-sm">
                                <option value="">Select Size</option>
                                <option value="1-10 Employees" {{ old('company_size') }}>
                                    1-10 Employees</option>
                                <option value="11-50 Employees" {{ old('company_size') }}>
                                    11-50 Employees</option>
                                <option value="51-200 Employees" {{ old('company_size') }}>
                                    51-200 Employees</option>
                                <option value="201-500 Employees" {{ old('company_size') }}>
                                    201-500 Employees</option>
                                <option value="500+ Employees" {{ old('company_size') }}>
                                    500+ Employees</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-2 md:col-span-2">
                            <label class="text-sm font-bold text-gray-700 dark:text-gray-300">Company Bio</label>
                            <textarea id="companyBio" name="company_bio"
                                class="w-full p-4 rounded-lg bg-background-light border dark:bg-background-dark focus:border-primary focus:ring-0 text-sm resize-none @error('company_bio') border-red-500 @enderror"
                                placeholder="Describe your company culture, mission, and what makes you unique..." rows="6"
                                maxlength="1000">{{ old('company_bio') }}</textarea>
                            <div class="flex justify-between items-center">
                                <div>
                                    @error('company_bio')
                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <p class="text-right text-xs text-gray-500">
                                    <span id="charCount"></span> / 1000
                                    characters
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-6">

                        <button type="submit"
                            class="flex cursor-pointer items-center justify-center rounded-lg h-11 px-6 bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                            <span class="material-symbols-outlined text-sm mr-2">save</span>
                            Create Profile
                        </button>
                    </div>
                </section>
            </div>

            <!-- Right Side: Live Preview -->
            <aside class="w-full lg:w-[380px] shrink-0">
                <div class="sticky top-24">
                    <div class="flex items-center justify-between mb-4 px-1">
                        <span class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Public View Preview
                        </span>
                        <div class="flex gap-1">
                            <span class="size-2 rounded-full bg-green-500 animate-pulse"></span>
                            <span class="text-xs text-green-500 font-medium">Live</span>
                        </div>
                    </div>

                    <!-- Preview Card -->
                    <div
                        class="bg-white dark:bg-background-dark rounded-xl overflow-hidden shadow-2xl border border-gray-100 dark:border-gray-800">
                        <!-- Preview Banner -->
                        <div id="previewBanner" class="h-32 bg-center bg-cover"
                            style='background-image: url("{{ asset('storage/' . auth()->user()->company->banner_image) }}")'>
                        </div>
                        <div class="px-5 pb-6">
                            <!-- Preview Logo overlap -->
                            <div class="relative -mt-10 mb-4">
                                <div class="size-20 rounded-xl bg-white border dark:bg-background-dark p-1 shadow-md">
                                    <div id="previewLogo" class="size-full bg-center bg-cover rounded-lg"
                                        style='background-image: url("{{ asset('storage/' . auth()->user()->company->logo) }}")'>
                                    </div>
                                </div>
                            </div>
                            <h3 id="previewCompanyName" class="text-xl font-bold mb-1">
                                {{ auth()->user()->company->name }}
                            </h3>
                            <div class="flex items-center gap-2 mb-4">
                                <span id="previewIndustry"
                                    class="text-primary text-xs font-semibold bg-primary/10 px-2 py-0.5 rounded">
                                    {{ auth()->user()->company->industry }}
                                </span>
                                <span class="text-gray-400 text-xs">•</span>
                                <span id="previewCompanySize" class="text-gray-500 dark:text-gray-400 text-xs font-medium">
                                    {{ auth()->user()->company->company_size }}
                                </span>
                            </div>
                            <p id="previewBio"
                                class="text-sm text-gray-600 dark:text-gray-300 line-clamp-4 leading-relaxed mb-6">
                            </p>
                            <div
                                class="border-t border-gray-100 dark:border-gray-800 pt-5 flex items-center justify-between">
                                <div class="flex items-center gap-2 text-primary font-bold text-sm">
                                    <span class="material-symbols-outlined text-sm">link</span>
                                    <span id="previewWebsite"></span>
                                </div>
                                {{-- @if ($profile && $profile->is_published)
                                <a href="{{ route('company.profile.show', $profile->slug) }}" target="_blank"
                                    class="bg-background-light border dark:bg-background-dark px-4 py-2 rounded text-xs font-bold hover:bg-gray-200 transition-colors">
                                    View Page
                                </a>
                                @else
                                <button type="button" disabled
                                    class="bg-background-light border dark:bg-background-dark px-4 py-2 rounded text-xs font-bold opacity-50 cursor-not-allowed">
                                    View Page
                                </button>
                                @endif --}}
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 p-4 bg-primary/5 rounded-lg border border-primary/20">
                        <div class="flex gap-3">
                            <span class="material-symbols-outlined text-primary">info</span>
                            <p class="text-xs leading-normal text-primary/80">
                                This is how your company profile appears to prospective candidates. Make sure to
                                keep your bio updated to attract the best talent.
                            </p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </x-web.form-wrapper>

@endsection

@push('scripts')
    <script>
        // Live preview updates (same as before)
        const companyNameInput = document.getElementById('companyName');
        const websiteUrlInput = document.getElementById('websiteUrl');
        const industryInput = document.getElementById('industry');
        const companySizeInput = document.getElementById('companySize');
        const companyBioInput = document.getElementById('companyBio');

        const previewCompanyName = document.getElementById('previewCompanyName');
        const previewWebsite = document.getElementById('previewWebsite');
        const previewIndustry = document.getElementById('previewIndustry');
        const previewCompanySize = document.getElementById('previewCompanySize');
        const previewBio = document.getElementById('previewBio');
        const charCount = document.getElementById('charCount');

        companyNameInput.addEventListener('input', (e) => {
            previewCompanyName.textContent = e.target.value || 'Company Name';
        });

        websiteUrlInput.addEventListener('input', (e) => {
            let url = e.target.value;
            url = url.replace(/^https?:\/\//, '');
            previewWebsite.textContent = url || 'yourwebsite.com';
        });

        industryInput.addEventListener('change', (e) => {
            previewIndustry.textContent = e.target.value || 'Industry';
        });

        companySizeInput.addEventListener('change', (e) => {
            previewCompanySize.textContent = e.target.value || 'Company Size';
        });

        companyBioInput.addEventListener('input', (e) => {
            const text = e.target.value;
            charCount.textContent = text.length;

            if (text.length > 200) {
                previewBio.textContent = text.substring(0, 200) + '...';
            } else {
                previewBio.textContent = text || 'No bio added yet.';
            }
        });

        // Banner image upload
        const bannerInput = document.getElementById('bannerInput');
        const bannerPreview = document.getElementById('bannerPreview');
        const previewBanner = document.getElementById('previewBanner');

        bannerInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (event) => {
                    const imageUrl = event.target.result;
                    bannerPreview.style.backgroundImage =
                        `linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.3)), url('${imageUrl}')`;
                    previewBanner.style.backgroundImage = `url('${imageUrl}')`;
                };
                reader.readAsDataURL(file);
            }
        });

        // Logo image upload
        const logoInput = document.getElementById('logoInput');
        const logoPreview = document.getElementById('logoPreview');
        const previewLogo = document.getElementById('previewLogo');

        logoInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (event) => {
                    const imageUrl = event.target.result;
                    logoPreview.style.backgroundImage = `url('${imageUrl}')`;
                    previewLogo.style.backgroundImage = `url('${imageUrl}')`;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endpush