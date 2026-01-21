@extends('layouts.web.guest')

@section('title', 'Verification')
{{-- all the code is in description --}}
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
            class="max-w-120 w-full bg-white dark:bg-background-dark/50 border border-gray-100 dark:border-gray-800 rounded-xl shadow-sm p-8 flex flex-col items-center">
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
                We've sent a 4-digit verification code to <span
                    class="font-semibold text-[#111418] dark:text-white">{{ $user->email }}</span>. Please enter it below
                to confirm your account.
            </p>
            <x-web.form-wrapper action="{{ route('web.auth.verify') }}">
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
                    {{-- added this hidden filed to combine the code --}}
                    <input type="hidden" id="code" name="code">
                    <input type="hidden" name="email" value="{{ $user->email }}">
                </div>
                <!-- Action Button -->
                <button
                    class="w-full h-12 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 transition-all flex items-center justify-center gap-2 mb-6">
                    <span>Verify Email</span>
                </button>
            </x-web.form-wrapper>

            <!-- Footer Links -->
            <div class="flex flex-col items-center gap-4 text-sm">
                <p class="text-gray-500 dark:text-gray-400">
                    <x-web.form-wrapper action="{{ route('web.auth.resend.otp', ['uuid' => $user->uuid]) }}">
                        Didn't receive the code?
                        <button class="text-primary cursor-pointer font-bold hover:underline" type="submit">Resend
                            Code</button>
                    </x-web.form-wrapper>
                </p>
                <div class="flex gap-4">
                    <button id="changeEmailBtn"
                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">edit</span>
                        Change email
                    </button>
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

    <!-- Change Email Modal -->
    <div id="changeEmailModal"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center p-4 z-50 hidden">
        <div
            class="bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-800 rounded-xl shadow-xl max-w-md w-full p-6">
            <!-- Modal Header -->
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-[#111418] dark:text-white">Change Email Address</h2>
                <button id="closeModal"
                    class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <!-- Modal Content -->
            <x-web.form-wrapper action="{{ route('web.auth.change.email', ['uuid' => $user->uuid]) }}">
                <div class="mb-6">
                    <label for="newEmail" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        New Email Address
                    </label>
                    <input type="email" id="newEmail" name="email" required placeholder="Enter your new email"
                        class="w-full h-12 px-4 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark text-[#111418] dark:text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
                </div>

                <!-- Modal Actions -->
                <div class="flex gap-3">
                    <button type="button" id="cancelBtn"
                        class="flex-1 h-12 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 font-medium rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition-all">
                        Cancel
                    </button>
                    <button type="submit"
                        class="flex-1 h-12 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 transition-all">
                        Update Email
                    </button>
                </div>
            </x-web.form-wrapper>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const inputs = document.querySelectorAll('input[type="number"]');
        const hiddenInput = document.getElementById('code');
        inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                if (e.target.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }

                combineValues();
            });
            // Handle Backspace
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && e.target.value === '' && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });

        function combineValues() {
            let fullCode = "";
            inputs.forEach(input => {
                fullCode += input.value;
            });
            hiddenInput.value = fullCode;
        }

        // Modal functionality
        const modal = document.getElementById('changeEmailModal');
        const changeEmailBtn = document.getElementById('changeEmailBtn');
        const closeModal = document.getElementById('closeModal');
        const cancelBtn = document.getElementById('cancelBtn');

        changeEmailBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
            document.getElementById('newEmail').focus();
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        cancelBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Close modal when clicking outside
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });

        // Close modal on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                modal.classList.add('hidden');
            }
        });
    </script>
@endpush
