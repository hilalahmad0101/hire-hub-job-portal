// Global Loading Button System
window.initLoadingButtons = function () {
    // Find all buttons with data-loading attribute
    const loadingButtons = document.querySelectorAll(
        "button[data-loading], button[data-loading-text]",
    );

    loadingButtons.forEach((button) => {
        // Skip if already initialized
        if (button.hasAttribute("data-loading-initialized")) return;

        // Mark as initialized
        button.setAttribute("data-loading-initialized", "true");

        // Store original content
        const originalContent = button.innerHTML;
        button.setAttribute("data-original-content", originalContent);

        // Add submit event listener to form
        const form = button.closest("form");
        if (form) {
            form.addEventListener("submit", function (e) {
                if (!button.disabled) {
                    showLoadingState(button);
                }
            });
        } else {
            // Fallback for buttons without forms
            button.addEventListener("click", function (e) {
                if (!button.disabled) {
                    showLoadingState(button);
                }
            });
        }
    });
};

// Show loading state for a button
window.showLoadingState = function (button) {
    if (button.disabled) return; // Already loading

    const loadingText =
        button.getAttribute("data-loading-text") || "Loading...";
    const showSpinner = button.getAttribute("data-loading-spinner") !== "false";

    // Store original content if not already stored
    if (!button.hasAttribute("data-original-content")) {
        button.setAttribute("data-original-content", button.innerHTML);
    }

    // Disable button
    button.disabled = true;

    // Update content
    if (showSpinner) {
        button.innerHTML = `<span class="material-symbols-outlined animate-spin mr-2">refresh</span>${loadingText}`;
    } else {
        button.textContent = loadingText;
    }

    // Add loading class
    button.classList.add("loading");
};

// Hide loading state for a button
window.hideLoadingState = function (button) {
    const originalContent = button.getAttribute("data-original-content");

    if (originalContent) {
        button.innerHTML = originalContent;
    }

    button.disabled = false;
    button.classList.remove("loading");
};

// Auto-initialize when DOM is ready
document.addEventListener("DOMContentLoaded", function () {
    initLoadingButtons();
});

// Re-initialize when content changes (for dynamic content)
const observer = new MutationObserver(function (mutations) {
    mutations.forEach(function (mutation) {
        if (mutation.type === "childList") {
            initLoadingButtons();
        }
    });
});

observer.observe(document.body, {
    childList: true,
    subtree: true,
});
