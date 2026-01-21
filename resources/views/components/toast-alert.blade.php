<div class="toast-item pointer-events-auto bg-white dark:bg-gray-900 border-l-4 {{ $type == 'success' ? 'border-green-500' : 'border-red-500' }} rounded-lg shadow-xl overflow-hidden flex flex-col ring-1 ring-black/5 transition-all duration-300 transform translate-x-0"
    role="alert">
    <div class="p-4 flex items-start gap-4">
        <div class="shrink-0">
            <span
                class="material-symbols-outlined {{ $type == 'success' ? 'text-green-500' : 'text-red-500' }} text-2xl">{{ $icon }}</span>
        </div>
        <div class="flex-1">
            <h3 class="text-sm font-bold text-[#111118] dark:text-white">{{ $title }}</h3>
            <p class="text-xs text-[#616189] dark:text-gray-400 mt-1">{{ $message }}</p>
        </div>
        <button class="toast-close text-[#616189] hover:text-[#111118] dark:hover:text-white transition-colors">
            <span class="material-symbols-outlined text-lg leading-none">close</span>
        </button>
    </div>
    <div class="h-1 {{ $type == 'success' ? 'bg-green-500' : 'bg-red-500' }} transition-all linear toast-progress"
        style="width: 100%"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toasts = document.querySelectorAll('.toast-item');

        toasts.forEach((toast) => {
            let timeout;
            let startTime;
            let remainingTime = 5000; // 5 seconds
            const progressBar = toast.querySelector('.toast-progress');
            const closeBtn = toast.querySelector('.toast-close');

            const hideToast = () => {
                toast.classList.add('translate-x-full', 'opacity-0');
                setTimeout(() => toast.remove(), 300); // Remove from DOM after animation
            };

            const startTimer = () => {
                startTime = Date.now();
                // Update Progress Bar visually
                progressBar.style.transition = `width ${remainingTime}ms linear`;
                progressBar.style.width = '0%';

                timeout = setTimeout(hideToast, remainingTime);
            };

            const stopTimer = () => {
                clearTimeout(timeout);
                const elapsedTime = Date.now() - startTime;
                remainingTime -= elapsedTime;

                // Stop progress bar animation
                const computedStyle = window.getComputedStyle(progressBar);
                const width = computedStyle.getPropertyValue('width');
                progressBar.style.transition = 'none';
                progressBar.style.width = width;
            };

            // Manual Close
            closeBtn.addEventListener('click', hideToast);

            // Pause on Hover
            toast.addEventListener('mouseenter', stopTimer);

            // Resume on Leave
            toast.addEventListener('mouseleave', () => {
                if (remainingTime > 0) startTimer();
            });

            // Initial Start
            startTimer();
        });
    });
</script>
