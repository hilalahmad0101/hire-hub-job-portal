@extends('layouts.web.guest')

@section('title', 'Verification')

@push('styles')
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endpush

@section('content')
    <!-- Main Content Area -->
    <main class="flex-1 flex items-center justify-center p-6">
        <div
            class="max-w-[480px] w-full bg-white dark:bg-background-dark/50 border border-gray-100 dark:border-gray-800 rounded-xl shadow-sm p-8 flex flex-col items-center">
            <!-- Email Icon Illustration -->
            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-primary text-4xl">mark_email_unread</span>
            </div>
            <!-- HeadlineText Component -->
            <h1
                class="text-[#111418] dark:text-white tracking-tight text-[28px] md:text-[32px] font-bold leading-tight text-center pb-2">
                Verify your email
            </h1>
            <!-- BodyText Component -->
            <p class="text-gray-600 dark:text-gray-400 text-base font-normal leading-relaxed text-center pb-8">
                We've sent a 6-digit verification code to <span
                    class="font-semibold text-[#111418] dark:text-white">alex.smith@example.com</span>. Please enter it below
                to confirm your account.
            </p>
            <!-- ConfirmationCode Component (Customized for Dark Mode & Styling) -->
            <div class="w-full flex justify-center pb-8">
                <fieldset class="relative flex gap-3 md:gap-4">
                    <!-- Digit 1 -->
                    <input autofocus=""
                        class="flex h-14 w-12 md:w-14 text-center [appearance:textfield] focus:outline-0 focus:ring-2 focus:ring-primary/20 border-0 border-b-2 border-gray-200 dark:border-gray-700 bg-transparent dark:text-white text-2xl font-bold leading-normal transition-all focus:border-primary"
                        max="9" maxlength="1" min="0" type="number" />
                    <!-- Digit 2 -->
                    <input
                        class="flex h-14 w-12 md:w-14 text-center [appearance:textfield] focus:outline-0 focus:ring-2 focus:ring-primary/20 border-0 border-b-2 border-gray-200 dark:border-gray-700 bg-transparent dark:text-white text-2xl font-bold leading-normal transition-all focus:border-primary"
                        max="9" maxlength="1" min="0" type="number" />
                    <!-- Digit 3 -->
                    <input
                        class="flex h-14 w-12 md:w-14 text-center [appearance:textfield] focus:outline-0 focus:ring-2 focus:ring-primary/20 border-0 border-b-2 border-gray-200 dark:border-gray-700 bg-transparent dark:text-white text-2xl font-bold leading-normal transition-all focus:border-primary"
                        max="9" maxlength="1" min="0" type="number" />
                    <!-- Digit 4 -->
                    <input
                        class="flex h-14 w-12 md:w-14 text-center [appearance:textfield] focus:outline-0 focus:ring-2 focus:ring-primary/20 border-0 border-b-2 border-gray-200 dark:border-gray-700 bg-transparent dark:text-white text-2xl font-bold leading-normal transition-all focus:border-primary"
                        max="9" maxlength="1" min="0" type="number" />
                </fieldset>
            </div>
            <!-- Action Button -->
            <button
                class="w-full h-12 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 transition-all flex items-center justify-center gap-2 mb-6">
                <span>Verify Email</span>
            </button>
            <!-- Footer Links -->
            <div class="flex flex-col items-center gap-4 text-sm">
                <p class="text-gray-500 dark:text-gray-400">
                    Didn't receive the code?
                    <a class="text-primary font-bold hover:underline" href="#">Resend Code</a>
                </p>
                <div class="flex gap-4">
                    <a class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors flex items-center gap-1"
                        href="#">
                        <span class="material-symbols-outlined text-sm">edit</span>
                        Change email
                    </a>
                    <span class="text-gray-300 dark:text-gray-700">|</span>
                    <a class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors flex items-center gap-1"
                        href="#">
                        <span class="material-symbols-outlined text-sm">logout</span>
                        Back to Login
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        const inputs = document.querySelectorAll('input[type="number"]');

        inputs.forEach((input, index) => {
            // Handle typing a number
            input.addEventListener('input', (e) => {
                if (e.target.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            // Handle Backspace
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && e.target.value === '' && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
    </script>
@endpush
