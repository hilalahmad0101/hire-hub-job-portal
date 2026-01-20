@extends('layouts.web.guest')

@section('title', 'Login')

@section('content')
    <main class="flex-grow flex flex-col md:flex-row">
        <!-- Left Side: Inspirational Image & Marketing Copy -->
        <div class="hidden md:flex md:w-1/2 lg:w-3/5 bg-cover bg-center relative items-center justify-center p-12 text-white"
            data-alt="Group of diverse professionals collaborating in a bright modern office space"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://lh3.googleusercontent.com/aida-public/AB6AXuBDuwOayPwe2eITg4tmdc6bmvAHKL-I82_YL526YQclGMBGTHY8mdeVMJZ57f-XoCXdCkPj7o85VsPT9e610A1GNECv1VIYrdPe1lPKGY4_P0Csh2pP0wikP-ijBpppzBLICpM7A0NNKJJEhkkRPShK2cRVePUpZwpBBPBqLmLIR-U6ohhto8Q7gLfNkA1YTSVRThxsCLUAHcYYFZtDXiL3cHJl8pWPNZ2JmQq9XaXOM5T3M9FazXXcGBAemhfwZAd4sLdBGm7q1dA');">
            <div class="max-w-xl">
                <h1 class="text-5xl font-black leading-tight tracking-tight mb-6">
                    Your next career move starts here.
                </h1>
                <p class="text-xl font-medium opacity-90 leading-relaxed">
                    Join thousands of professionals finding their dream jobs daily. Unlock your potential with our curated
                    listings and expert career tools.
                </p>
                <div class="mt-12 flex gap-4">
                    <div class="flex -space-x-4">
                        <div class="w-12 h-12 rounded-full border-2 border-white bg-gray-200 overflow-hidden"
                            data-alt="Profile photo of a professional smiling">
                            <img alt="User"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuARD3DVJoHZGnNDh8cXmDPxOVJ2C0fqQavVcIXU3QuLseoqWtGPrlvtKXlv0v-zDbvO7EN2ko488942kZHZLW-WBnWCFhcG6WneAyuboGvKrIeGhfFjO028C_cJD-2tPqMx319Y5qvHuF95soPYYiD40s1Pc1wYEPRbF95sE4NFoifYRdHsBNIL4YWDQh5mGtGwD1P8c0ISHe1hEHYXwcA97vLDmHYGERhqInqSxxTUPi0yRMuyySvTdW1GMkfl-Lm4yxaWXoT8wzg" />
                        </div>
                        <div class="w-12 h-12 rounded-full border-2 border-white bg-gray-200 overflow-hidden"
                            data-alt="Profile photo of a male business executive">
                            <img alt="User"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWX7I78UpxPSYDUFiejdMLGrckqWYZX5e0IjhJ-zLRrfdtYRYiWhOActg3WgvlglDfog1uxPdXNQCFIkplpCJg3SvBRUPMltgCfBYpVhSsveKKUt_IeL8Y4m1jJIib-EsJo1q3pPrtCPcX6jd3MuRwXf3Yik0UbVBtzs7F635mjx9zdoQkdrpR9VuFJYnzzV32duo7rt1offiHhgPPHHjGlIQfFOiYPgg6_48cRq8KtW0VLM7xBxc-WHd4uzoBNJbPkyzFwmJZOZI" />
                        </div>
                        <div class="w-12 h-12 rounded-full border-2 border-white bg-gray-200 overflow-hidden"
                            data-alt="Profile photo of a woman in business attire">
                            <img alt="User"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfIoCg1wAyNto_YbR35wnL3X7oj8TVOWlf6RLuZeNbC9RfoQjkGHx1BAUfoesox-cunZOXFNKvSywOEv_5QlDyA8eFfJLqHECNGMOYZBqbUUKP647ng0IfIYBZnmr73KTsqZaPFwWpNqga7NFqQikOVSGeN5WSEgVYZbKfRYos4xKALS0mA8I_446AAztFMq3Qrrngik8SLkSyQzyFBONbsi5T40GC8TOmNfRruD7J-NLhvC8Ot9JOAHBDjE2u63gXJSzdc6DMCok" />
                        </div>
                        <div
                            class="w-12 h-12 rounded-full border-2 border-white bg-primary flex items-center justify-center text-xs font-bold">
                            +10k
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm font-semibold">Over 10,000+ hires</p>
                        <p class="text-xs opacity-75">this month alone</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Side: Sign In Form -->
        <div
            class="w-full md:w-1/2 lg:w-2/5 flex items-center justify-center bg-white dark:bg-background-dark px-6 py-12 lg:px-20">
            <div class="w-full max-w-[400px] flex flex-col">
                <div class="mb-10 text-center md:text-left">
                    <h2 class="text-[#111418] dark:text-white text-3xl font-bold leading-tight tracking-tight mb-2">Welcome
                        Back</h2>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Please enter your details to sign in.</p>
                </div>
                <!-- Social Sign In -->
                <button
                    class="flex w-full cursor-pointer items-center justify-center gap-3 rounded-lg h-12 px-5 border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-transparent text-[#111418] dark:text-white text-base font-medium hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <svg class="w-5 h-5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                            fill="#4285F4"></path>
                        <path
                            d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                            fill="#34A853"></path>
                        <path
                            d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"
                            fill="#FBBC05"></path>
                        <path
                            d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 12-4.53z"
                            fill="#EA4335"></path>
                    </svg>
                    <span>Continue with Google</span>
                </button>
                <div class="relative flex items-center my-8">
                    <div class="flex-grow border-t border-[#dbe0e6] dark:border-gray-700"></div>
                    <span class="flex-shrink mx-4 text-gray-400 text-xs font-medium uppercase tracking-wider">or sign in
                        with email</span>
                    <div class="flex-grow border-t border-[#dbe0e6] dark:border-gray-700"></div>
                </div>
                <!-- Form Fields -->
                <form class="flex flex-col gap-5">
                    <div class="flex flex-col">
                        <label class="text-[#111418] dark:text-gray-200 text-sm font-semibold pb-2">Email Address</label>
                        <input
                            class="form-input flex w-full rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary h-12 placeholder:text-gray-400 p-4 text-base font-normal"
                            placeholder="michaelsmith@example.com" type="email" value="" />
                    </div>
                    <div class="flex flex-col">
                        <div class="flex justify-between items-center pb-2">
                            <label class="text-[#111418] dark:text-gray-200 text-sm font-semibold">Password</label>
                            <a class="text-primary text-xs font-bold hover:underline" href="#">Forgot Password?</a>
                        </div>
                        <div class="relative flex w-full items-stretch">
                            <input
                                class="form-input flex w-full rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary h-12 placeholder:text-gray-400 p-4 pr-12 text-base font-normal"
                                placeholder="Enter your password" type="password" value="" />
                            <button
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 mt-1">
                        <input class="w-4 h-4 text-primary rounded border-gray-300 focus:ring-primary" id="remember"
                            type="checkbox" />
                        <label class="text-sm text-gray-600 dark:text-gray-400" for="remember">Remember me for 30
                            days</label>
                    </div>
                    <button
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-blue-700 transition-colors mt-4"
                        type="submit">
                        <span class="truncate">Sign In</span>
                    </button>
                </form>
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">
                        Don't have an account?
                        <a class="text-primary font-bold hover:underline ml-1"
                            href="{{ route('web.auth.register.view') }}">Sign
                            up for free</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
