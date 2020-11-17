require('./bootstrap');

window.onload = () => {
    const modalTriggers = document.querySelectorAll(".js-modal-trigger");
    const modalClosers = document.querySelectorAll(".js-modal-close");
    const modalBg = document.querySelector(".js-modal-bg");

    for (const trigger of modalTriggers) {
        const modalContentNum = trigger.dataset.target;
        const modalContent = document.querySelector(`.${modalContentNum}`);
        trigger.addEventListener("click", () => {
            modalContent.classList.remove("hidden");
            modalBg.classList.remove("hidden");
            modalClosers.forEach(trigger => trigger.dataset.target = modalContentNum);
        });
    }

    modalClosers.forEach(trigger => trigger.addEventListener("click", event => {
        if (event.target.classList.contains("js-modal-close")) {
            const modalContentNum = event.target.dataset.target;
            const modalContent = document.querySelector(`.${modalContentNum}`);
            modalContent.classList.add("hidden");
            modalBg.classList.add("hidden");
        }
        return;
    }));
}
