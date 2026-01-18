@extends('layouts.web.guest')
@section('title', 'Job Application Form')

@section('content')
    <div class="py-12">
        <!-- Application Card -->
        <div
            class="bg-white max-w-[1280px] mx-auto  px-4 dark:bg-gray-900 rounded-xl shadow-sm border border-[#dbe0e6] dark:border-gray-800 overflow-hidden">
            <!-- Page Heading Section -->
            <div class="p-8 border-b border-[#f0f2f4] dark:border-gray-800 bg-white dark:bg-gray-900">
                <div class="flex flex-wrap justify-between items-start gap-4">
                    <div class="flex flex-col gap-1">
                        <p class="text-[#111418] dark:text-white text-3xl font-black leading-tight tracking-[-0.033em]">
                            Senior Software Engineer</p>
                        <p class="text-primary text-base font-semibold leading-normal">Tech Solutions Inc.</p>
                        <div class="flex items-center gap-2 mt-1 text-gray-500 dark:text-gray-400 text-sm">
                            <span class="material-symbols-outlined text-sm">location_on</span>
                            <span>San Francisco, CA (Remote Friendly)</span>
                        </div>
                    </div>
                    <button
                        class="flex items-center justify-center rounded-lg h-10 px-4 bg-background-light dark:bg-gray-800 text-[#111418] dark:text-white text-sm font-bold leading-normal transition-all hover:bg-gray-200 dark:hover:bg-gray-700">
                        <span class="material-symbols-outlined mr-2 text-sm">arrow_back</span>
                        <span>Job details</span>
                    </button>
                </div>
            </div>
            <!-- Form Content -->
            <form class="p-8 flex flex-col gap-8">
                <div>
                    <h3
                        class="text-[#111418] dark:text-white text-xl font-bold leading-tight pb-6 border-b border-gray-100 dark:border-gray-800">
                        Application Form</h3>
                </div>
                <!-- Personal Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-[#111418] dark:text-gray-200 text-sm font-semibold leading-normal">Full
                            Name</label>
                        <input
                            class="w-full rounded-lg text-[#111418] dark:text-white border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary focus:ring-2 focus:ring-primary/20 h-12 px-4 transition-all placeholder:text-[#617289]"
                            placeholder="e.g. John Doe" type="text" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#111418] dark:text-gray-200 text-sm font-semibold leading-normal">Email
                            Address</label>
                        <input
                            class="w-full rounded-lg text-[#111418] dark:text-white border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary focus:ring-2 focus:ring-primary/20 h-12 px-4 transition-all placeholder:text-[#617289]"
                            placeholder="john.doe@example.com" type="email" />
                    </div>
                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label class="text-[#111418] dark:text-gray-200 text-sm font-semibold leading-normal">Phone
                            Number</label>
                        <input
                            class="w-full rounded-lg text-[#111418] dark:text-white border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary focus:ring-2 focus:ring-primary/20 h-12 px-4 transition-all placeholder:text-[#617289]"
                            placeholder="+1 (555) 000-0000" type="tel" />
                    </div>
                </div>
                <!-- Resume Upload -->
                <div class="flex flex-col gap-2">
                    <label class="text-[#111418] dark:text-gray-200 text-sm font-semibold leading-normal">Resume /
                        CV</label>
                    <div
                        class="border-2 border-dashed border-[#dbe0e6] dark:border-gray-700 rounded-xl p-8 flex flex-col items-center justify-center bg-background-light/50 dark:bg-gray-800/30 hover:border-primary transition-colors cursor-pointer group">
                        <div
                            class="bg-primary/10 text-primary p-3 rounded-full mb-3 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl">cloud_upload</span>
                        </div>
                        <p class="text-[#111418] dark:text-white font-semibold">Click to upload or drag and drop</p>
                        <p class="text-gray-500 dark:text-gray-400 text-xs mt-1">PDF, DOCX or RTF (max. 5MB)</p>
                        <input class="hidden" type="file" />
                    </div>
                </div>
                <!-- Cover Letter -->
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between items-center">
                        <label class="text-[#111418] dark:text-gray-200 text-sm font-semibold leading-normal">Cover
                            Letter</label>
                        <span class="text-xs text-gray-400">Optional</span>
                    </div>
                    <textarea
                        class="w-full rounded-lg text-[#111418] dark:text-white border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary focus:ring-2 focus:ring-primary/20 min-h-[160px] p-4 transition-all placeholder:text-[#617289]"
                        placeholder="Tell us why you're a great fit for this role..."></textarea>
                </div>
                <!-- Submit Section -->
                <div class="pt-6 border-t border-[#f0f2f4] dark:border-gray-800 flex flex-col gap-4">
                    <div class="flex justify-end">
                        <button
                            class=" px-4 py-2 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2"
                            type="submit">
                            <span>Submit Application</span>
                            <span class="material-symbols-outlined">send</span>
                        </button>
                    </div>
                    <p class="text-center text-xs text-gray-500 dark:text-gray-400">
                        By submitting this application, you agree to our <a class="text-primary hover:underline"
                            href="#">Terms of Service</a> and <a class="text-primary hover:underline"
                            href="#">Privacy Policy</a>.
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
