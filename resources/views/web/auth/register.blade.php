@extends('layouts.web.guest')

@section('title', 'Register')

@section('content')
    <div class="flex min-h-screen w-full">
        <!-- Left Side: Registration Form -->
        <div class="flex flex-col w-full lg:w-1/2 p-8 md:p-16 lg:p-24 bg-white dark:bg-background-dark justify-center">
            <div class="max-w-md w-full mx-auto">
                <!-- Logo -->
                <div class="flex items-center gap-3 mb-10">
                    <div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
                        <svg class="size-6" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M24 4H6V17.3333V30.6667H24V44H42V30.6667V17.3333H24V4Z"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-[#111118] dark:text-white leading-tight">{{ env('APP_NAME') }}</h2>
                </div>
                <!-- Headline -->
                <div class="mb-8">
                    <h1 class="text-3xl font-black text-[#111118] dark:text-white leading-tight mb-2">Create your account
                    </h1>
                    <p class="text-[#616189] dark:text-gray-400">Join 50,000+ professionals finding their dream jobs.</p>
                </div>
                <!-- Form Fields -->
                <form class="space-y-5" action="{{ route('web.auth.register') }}" method="post">
                    @csrf

                    {{-- select user type --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-medium text-[#111118] dark:text-gray-200">User Type</label>
                        <select
                            class="w-full rounded-lg border border-[#dbdbe6] dark:border-gray-700 bg-white dark:bg-gray-800 p-3.5 text-base text-[#111118] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-[#616189]"
                            name="user_type">
                            <option value="">Select User Type</option>
                            <option value="employer">Employer</option>
                            <option value="candidate">Candidate</option>
                        </select>
                        @error('user_type')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Full Name -->
                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-medium text-[#111118] dark:text-gray-200">Full Name</label>
                        <input name="name"
                            class="w-full rounded-lg border border-[#dbdbe6] dark:border-gray-700 bg-white dark:bg-gray-800 p-3.5 text-base text-[#111118] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-[#616189]"
                            placeholder="John Doe" type="text" />
                        @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Email -->
                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-medium text-[#111118] dark:text-gray-200">Email Address</label>
                        <input name="email"
                            class="w-full rounded-lg border border-[#dbdbe6] dark:border-gray-700 bg-white dark:bg-gray-800 p-3.5 text-base text-[#111118] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-[#616189]"
                            placeholder="email@example.com" type="email" />
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Password Group -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-medium text-[#111118] dark:text-gray-200">Password</label>
                            <div class="relative">
                                <input name="password"
                                    class="w-full rounded-lg border border-[#dbdbe6] dark:border-gray-700 bg-white dark:bg-gray-800 p-3.5 text-base text-[#111118] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                                    placeholder="••••••••" type="password" />
                                <span
                                    class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-[#616189] cursor-pointer text-xl">visibility</span>
                            </div>
                            @error('password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-medium text-[#111118] dark:text-gray-200">Confirm Password</label>
                            <div class="relative">
                                <input name="password_confirmation"
                                    class="w-full rounded-lg border border-[#dbdbe6] dark:border-gray-700 bg-white dark:bg-gray-800 p-3.5 text-base text-[#111118] dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                                    placeholder="••••••••" type="password" />
                                <span
                                    class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-[#616189] cursor-pointer text-xl">visibility</span>
                            </div>
                            @error('password_confirmation')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Terms -->
                    <div class="flex items-start gap-3 py-2">
                        <input class="mt-1 size-4 rounded border-[#dbdbe6] text-primary focus:ring-primary" id="terms"
                            type="checkbox" />
                        <label class="text-sm text-[#616189] dark:text-gray-400 leading-tight" for="terms">
                            By creating an account, I agree to the <a class="text-primary font-semibold hover:underline"
                                href="#">Terms and Conditions</a> and <a
                                class="text-primary font-semibold hover:underline" href="#">Privacy Policy</a>.
                        </label>
                    </div>
                    <!-- CTA Button -->
                    <button
                        class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-lg transition-colors shadow-lg shadow-primary/20"
                        type="submit">
                        Create Account
                    </button>
                    <!-- Divider -->
                    <div class="relative flex items-center py-4">
                        <div class="grow border-t border-[#dbdbe6] dark:border-gray-700"></div>
                        <span class="shrink mx-4 text-sm text-[#616189] dark:text-gray-400">or sign up with</span>
                        <div class="grow border-t border-[#dbdbe6] dark:border-gray-700"></div>
                    </div>
                    <!-- Social Buttons -->
                    <div class="grid grid-cols-2 gap-4">
                        <button
                            class="flex items-center justify-center gap-2 rounded-lg border border-[#dbdbe6] dark:border-gray-700 p-3 text-sm font-semibold text-[#111118] dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                            type="button">
                            <img alt="Google Logo" class="size-4" data-alt="Google company logo icon"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDFwcst8gaoD-s_e2n-7Gw0pyxkXcHmiMgCDEqKQPZdrEMig5wC662--SZFL7Nv-zhJhSj_UMIzFx855GxcBX4qCmq_kQHb1BJgzJdVEbhHgiNCB9sT2ANXRNVbVqjanl1is2MW9gIHysq0a6kf_WDT3a-lgBTzwiEz5gsp-j1eAgv-Q-JZWE5v84tePbDMuslmmem7LmSyCoSm7Fj122mrsc4rX9qQO03oicslSsE42NX_MpFoin5jHYAPgs14jvUQs7EIJQyXuM" />
                            Google
                        </button>
                        <button
                            class="flex items-center justify-center gap-2 rounded-lg border border-[#dbdbe6] dark:border-gray-700 p-3 text-sm font-semibold text-[#111118] dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                            type="button">
                            <img alt="LinkedIn Logo" class="size-4" data-alt="LinkedIn company logo icon"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeWi2l7tkon3T0GLp_q3Gb7tgtyeTA38P_zWYTcQZiQnVeJiv2_uHrak3dOKJ7tT-Rk18CvD_SAG4XyNMBuo7ljg14z5FlhxDbrqEr7voTa1g8VLJtThOQjh0QVjyMk0y-q5T4kzinMINiP4CuawuJEsno3eYBNraA35P6CLM_VPjHNpc7SlUI0GWN1vCOBxNQhBklGbWzg-iyJBrylhIm59lhipjwtCAjzMJ9aK-NloaHQUNIECc40Rd6XO_qQ9UUvHFPGKYa2fU" />
                            LinkedIn
                        </button>
                    </div>
                    <!-- Footer Link -->
                    <p class="text-center text-sm text-[#616189] dark:text-gray-400 pt-4">
                        Already have an account? <a class="text-primary font-bold hover:underline"
                            href="{{ route('web.auth.login') }}">Log In</a>
                    </p>
                </form>
            </div>
        </div>
        <!-- Right Side: Marketing Visual -->
        <div class="hidden lg:flex w-1/2 bg-primary relative overflow-hidden flex-col justify-center p-24 text-white">
            <!-- Background Abstract Patterns -->
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern height="40" id="grid" patternunits="userSpaceOnUse" width="40">
                            <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"></path>
                        </pattern>
                    </defs>
                    <rect fill="url(#grid)" height="100%" width="100%"></rect>
                </svg>
            </div>
            <div class="relative z-10">
                <div class="mb-12">
                    <div class="w-full h-80 bg-center bg-no-repeat bg-cover rounded-2xl shadow-2xl mb-12"
                        data-alt="Group of diverse professionals working together in a modern office"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCeHjNflJMXJnlYlgH-GyzK7tuDZ46JqsBFbpHeE7xKrzghIAARvfhrETcPlVAJ0uM3p1K7bSOFAxS7iu8wwAGuYzEulKJrCahUHrYXcUsQRQrjufG-PzD_rx7rzmcHHjsQuqeDVHHmdpWspqlvf6szGQXx2XhBkOUNrLHWaae0VVANxd3M2A_mKK4sKqsnicOURQNPYNKXfQVsPS33wJsbt5s9FXFmUCfa2vuEf5Oygmv6fwHhymzmUdm1j7sMSBJE4foy6_93jpk");'>
                    </div>
                </div>
                <h2 class="text-5xl font-black leading-tight mb-6">Join the Future of Work.</h2>
                <p class="text-xl text-white/80 leading-relaxed mb-8">
                    Discover opportunities at top-tier companies. Our AI-driven platform connects you with roles that match
                    your skills and ambitions perfectly.
                </p>
                <!-- Statistics/Social Proof -->
                <div class="grid grid-cols-2 gap-8 border-t border-white/20 pt-8">
                    <div>
                        <div class="text-3xl font-bold mb-1">50k+</div>
                        <div class="text-white/60 text-sm font-medium uppercase tracking-wider">Active Users</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold mb-1">12k+</div>
                        <div class="text-white/60 text-sm font-medium uppercase tracking-wider">Companies Hiring</div>
                    </div>
                </div>
            </div>
            <!-- Floating Decoration -->
            <div class="absolute -bottom-20 -right-20 size-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute -top-20 -left-20 size-64 bg-white/10 rounded-full blur-3xl"></div>
        </div>
    </div>
@endsection
