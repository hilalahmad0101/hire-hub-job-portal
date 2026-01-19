@extends('layouts.web.auth')

@section('title', 'CV Manager')

@section('content')
    <div class="layout-content-container flex flex-col flex-1 px-4">
        <!-- Page Heading -->
        <div class="flex flex-wrap justify-between gap-3 pb-8">
            <div class="flex min-w-72 flex-col gap-1">
                <p class="text-[#121118] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">CV Manager
                </p>
                <p class="text-[#656189] dark:text-slate-400 text-base font-normal leading-normal">Manage and update your
                    resumes for job applications.</p>
            </div>
            <div class="flex items-center">
                <button
                    class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-slate-100 dark:bg-slate-800 text-[#121118] dark:text-white text-sm font-bold leading-normal hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                    <span class="truncate">View Public Profile</span>
                </button>
            </div>
        </div>
        <!-- Upload Empty State / Dropzone -->
        <div class="flex flex-col mb-8">
            <div
                class="flex flex-col items-center gap-6 rounded-xl border-2 border-dashed border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900/40 px-6 py-12 hover:border-primary transition-colors cursor-pointer group">
                <div class="size-16 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-4xl">cloud_upload</span>
                </div>
                <div class="flex max-w-[480px] flex-col items-center gap-2">
                    <p
                        class="text-[#121118] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em] text-center">
                        Upload New CV</p>
                    <p
                        class="text-slate-500 dark:text-slate-400 text-sm font-normal leading-normal max-w-[480px] text-center">
                        Drag and drop your resume here, or click to browse.
                    </p>
                    <p class="text-xs text-slate-400 font-medium">Supported formats: PDF, DOCX (Max 5MB)</p>
                </div>
                <button
                    class="flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-11 px-6 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all active:scale-95">
                    <span class="material-symbols-outlined mr-2">add</span>
                    <span class="truncate">Browse Files</span>
                </button>
            </div>
        </div>
        <!-- Section Header -->
        <div class="flex items-center justify-between px-4 pb-4">
            <h2 class="text-[#121118] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">Your Uploaded
                CVs</h2>
            <span class="text-xs font-semibold text-slate-500 bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded">3 of 5
                CVs</span>
        </div>
        <!-- Table Container -->
        <div class="px-4 py-3 @container">
            <div
                class="flex overflow-hidden rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm">
                <table class="flex-1 text-left">
                    <thead>
                        <tr class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
                            <th
                                class="px-4 py-4 text-[#121118] dark:text-white text-sm font-semibold leading-normal w-[40%]">
                                File Name</th>
                            <th
                                class="px-4 py-4 text-[#121118] dark:text-white text-sm font-semibold leading-normal w-[20%]">
                                Uploaded</th>
                            <th
                                class="px-4 py-4 text-[#121118] dark:text-white text-sm font-semibold leading-normal w-[15%]">
                                Status</th>
                            <th
                                class="px-4 py-4 text-right text-slate-500 dark:text-slate-400 text-sm font-semibold leading-normal w-[25%]">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 (Primary) -->
                        <tr
                            class="border-t border-slate-100 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800/20 transition-colors">
                            <td class="h-[72px] px-4 py-2">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-9 rounded bg-red-50 dark:bg-red-900/20 flex items-center justify-center text-red-600">
                                        <span class="material-symbols-outlined">picture_as_pdf</span>
                                    </div>
                                    <span
                                        class="text-[#121118] dark:text-white text-sm font-medium">John_Doe_Product_Designer.pdf</span>
                                </div>
                            </td>
                            <td class="h-[72px] px-4 py-2 text-slate-500 dark:text-slate-400 text-sm font-normal">Oct 24,
                                2023</td>
                            <td class="h-[72px] px-4 py-2">
                                <span
                                    class="inline-flex items-center rounded-full bg-primary/10 px-2.5 py-0.5 text-xs font-bold text-primary ring-1 ring-inset ring-primary/20">
                                    Primary
                                </span>
                            </td>
                            <td class="h-[72px] px-4 py-2 text-right">
                                <div class="flex justify-end gap-1">
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-all"
                                        title="Download">
                                        <span class="material-symbols-outlined text-xl">download</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-all"
                                        title="Rename">
                                        <span class="material-symbols-outlined text-xl">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-all"
                                        title="Delete">
                                        <span class="material-symbols-outlined text-xl">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr
                            class="border-t border-slate-100 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800/20 transition-colors">
                            <td class="h-[72px] px-4 py-2">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-9 rounded bg-red-50 dark:bg-red-900/20 flex items-center justify-center text-red-600">
                                        <span class="material-symbols-outlined">picture_as_pdf</span>
                                    </div>
                                    <span
                                        class="text-[#121118] dark:text-white text-sm font-medium">John_Doe_UX_Research.pdf</span>
                                </div>
                            </td>
                            <td class="h-[72px] px-4 py-2 text-slate-500 dark:text-slate-400 text-sm font-normal">Oct 12,
                                2023</td>
                            <td class="h-[72px] px-4 py-2">
                                <button class="text-xs font-bold text-slate-400 hover:text-primary transition-colors">Make
                                    Primary</button>
                            </td>
                            <td class="h-[72px] px-4 py-2 text-right">
                                <div class="flex justify-end gap-1">
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-all"
                                        title="Download">
                                        <span class="material-symbols-outlined text-xl">download</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-all"
                                        title="Rename">
                                        <span class="material-symbols-outlined text-xl">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-all"
                                        title="Delete">
                                        <span class="material-symbols-outlined text-xl">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr
                            class="border-t border-slate-100 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800/20 transition-colors">
                            <td class="h-[72px] px-4 py-2">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-9 rounded bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center text-blue-600">
                                        <span class="material-symbols-outlined">article</span>
                                    </div>
                                    <span
                                        class="text-[#121118] dark:text-white text-sm font-medium">General_Resume_v2.docx</span>
                                </div>
                            </td>
                            <td class="h-[72px] px-4 py-2 text-slate-500 dark:text-slate-400 text-sm font-normal">Sep 15,
                                2023</td>
                            <td class="h-[72px] px-4 py-2">
                                <button class="text-xs font-bold text-slate-400 hover:text-primary transition-colors">Make
                                    Primary</button>
                            </td>
                            <td class="h-[72px] px-4 py-2 text-right">
                                <div class="flex justify-end gap-1">
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-all"
                                        title="Download">
                                        <span class="material-symbols-outlined text-xl">download</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-primary hover:bg-primary/5 rounded-lg transition-all"
                                        title="Rename">
                                        <span class="material-symbols-outlined text-xl">edit</span>
                                    </button>
                                    <button
                                        class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-all"
                                        title="Delete">
                                        <span class="material-symbols-outlined text-xl">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Additional Help Info -->
        <div class="mt-12 px-4 py-6 rounded-xl bg-primary/5 border border-primary/10 flex items-start gap-4">
            <div class="text-primary mt-1">
                <span class="material-symbols-outlined">info</span>
            </div>
            <div>
                <p class="text-primary font-bold text-sm mb-1">Tips for your CV</p>
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                    Most employers prefer resumes in PDF format to ensure formatting remains consistent.
                    Your "Primary" resume is the one that will be shown to recruiters by default when they find your
                    profile.
                </p>
            </div>
        </div>
    </div>
@endsection
