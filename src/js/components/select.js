import Choices from "choices.js";

const defaultSelect = () => {
    const element = document.querySelector(".default");
    const choices = new Choices(element, {
        searchEnabled: false,
    });

    let ariaLabel = element.getAttribute("aria-label");
    element.closest(".choices").setAttribute("aria-label", ariaLabel);
};

defaultSelect();


