require("./bootstrap");

window.onload = () => {
    // Select all modal content elements on load so we don't load them on every click
    const modalContentElements = Array.from(document.querySelectorAll(".js-modal-content"));

    // Load these elements into a map - keyed by the dataset attribute identifying the modal content
    const contents = new Map();
    for (const content of modalContentElements) {
        const contentId = content.dataset.id;
        contents.set(contentId, content);
    }

    // Select elements to add event listeners to
    const modalTriggers = document.querySelectorAll(".js-modal-trigger");
    const modalClosers = document.querySelectorAll(".js-modal-close");
    const modalBg = document.querySelector(".js-modal-bg");

    // Store the currently active modal content in JavaScript.
    let currentContent = null;

    for (const trigger of modalTriggers) {
        // Rather than query selecting the modal content, we already have it saved in our Map
        // meaning we can just check the trigger for the target content and get it from our map.
        // Much more efficient in time complexity, but naturally storing elements in memory increases space complexity.
        // Inconsequential in this usecase, but important to consider with large scale systems.
        const modalContentNum = trigger.dataset.target;
        const modalContent = contents.get(modalContentNum);

        trigger.addEventListener("click", () => {
            // By setting the current content here, the modal closers will know which to close without
            // setting or checking data attributes on them
            currentContent = modalContent;
            currentContent.classList.remove("hidden");
            modalBg.classList.remove("hidden");
        });
    }

    for (const closer of modalClosers) {
        closer.addEventListener("click", event => {
            if (event.target.classList.contains("js-modal-close") === false) {
                return;
            }
            if (currentContent === null) {
                return;
            }

            currentContent.classList.add("hidden");
            modalBg.classList.add("hidden");
            // Reset the current content
            currentContent = null;
        });
    }
};
