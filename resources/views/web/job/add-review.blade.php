@extends('layouts.web.guest')

@section('title', 'Add Review')

@section('content')
    <x-web.job-main>
        <div class="bg-white dark:bg-[#1a202c] p-6 rounded-xl border border-gray-100 dark:border-gray-700">
            <form class="space-y-8">
                <div>
                    <label class="block text-sm font-bold text-gray-900 dark:text-white mb-3" for="overall-rating">Overall
                        Rating*</label>
                    <input type="hidden" id="overall-rating" name="overall_rating" value="4" />
                    <div class="flex gap-2">
                        <button class="group focus:outline-none star-button" type="button">
                            <span class="material-symbols-outlined !text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1">star</span>
                        </button>
                        <button class="group focus:outline-none star-button" type="button">
                            <span class="material-symbols-outlined !text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1">star</span>
                        </button>
                        <button class="group focus:outline-none star-button" type="button">
                            <span class="material-symbols-outlined !text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1">star</span>
                        </button>
                        <button class="group focus:outline-none star-button" type="button">
                            <span class="material-symbols-outlined !text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1">star</span>
                        </button>
                        <button class="group focus:outline-none star-button" type="button">
                            <span class="material-symbols-outlined !text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1">star</span>
                        </button>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-900 dark:text-white mb-2" for="review-title">Review
                        Title*</label>
                    <input
                        class="w-full bg-gray-50 dark:bg-gray-900 border-gray-200 dark:border-gray-800 rounded-lg focus:ring-primary focus:border-primary text-sm p-3"
                        id="review-title" placeholder="Summarize your experience in one sentence" type="text" />
                </div>
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-900 dark:text-white mb-2"
                            for="pros">Pros*</label>
                        <textarea
                            class="w-full bg-gray-50 dark:bg-gray-900 border-gray-200 dark:border-gray-800 rounded-lg focus:ring-primary focus:border-primary text-sm p-3"
                            id="pros" placeholder="What do you like about working here?" rows="4"></textarea>
                        <p class="text-xs text-gray-400 mt-2">Minimum 15 characters</p>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-900 dark:text-white mb-2"
                            for="cons">Cons*</label>
                        <textarea
                            class="w-full bg-gray-50 dark:bg-gray-900 border-gray-200 dark:border-gray-800 rounded-lg focus:ring-primary focus:border-primary text-sm p-3"
                            id="cons" placeholder="What are the challenges or areas for improvement?" rows="4"></textarea>
                        <p class="text-xs text-gray-400 mt-2">Minimum 15 characters</p>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-900 dark:text-white mb-2" for="advice">Advice to
                        Management</label>
                    <textarea
                        class="w-full bg-gray-50 dark:bg-gray-900 border-gray-200 dark:border-gray-800 rounded-lg focus:ring-primary focus:border-primary text-sm p-3"
                        id="advice" placeholder="Any suggestions for the leadership team?" rows="3"></textarea>
                </div>
                <div
                    class="pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <p class="text-xs text-gray-500 max-w-md">
                        By submitting this review, you agree to our Community Guidelines and confirm that this review is an
                        honest account of your experience.
                    </p>
                    <div class="flex gap-3">
                        <button
                            class="px-6 py-3 text-sm font-bold text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors"
                            type="button">
                            Cancel
                        </button>
                        <button
                            class="bg-primary hover:bg-primary/90 text-white font-bold py-3 px-8 rounded-lg transition-colors shadow-sm shadow-primary/20"
                            type="submit">
                            Submit Review
                        </button>
                    </div>
                </div>
            </form>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex gap-3">
                    <span class="material-symbols-outlined text-primary">visibility_off</span>
                    <div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Anonymous</h4>
                        <p class="text-xs text-gray-500 mt-1">Your review will be posted anonymously to protect your
                            privacy.
                        </p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <span class="material-symbols-outlined text-primary">verified_user</span>
                    <div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Authentic</h4>
                        <p class="text-xs text-gray-500 mt-1">We verify all reviews to ensure they come from real employees.
                        </p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <span class="material-symbols-outlined text-primary">forum</span>
                    <div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Impactful</h4>
                        <p class="text-xs text-gray-500 mt-1">Your feedback helps companies improve their workplace culture.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </x-web.job-main>
@endsection
@push('scripts')
    <script>
        document.querySelectorAll('.star-button').forEach((button, index) => {
            button.addEventListener('click', () => {
                document.getElementById('overall-rating').value = index + 1;
            });
        });
    </script>
@endpush
