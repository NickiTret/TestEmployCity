import Choices from "choices.js";
import SimpleBar from "simplebar";

const defaultSelect = () => {
    const element = document.querySelector(".default");
    const choices = new Choices(element, {
        searchEnabled: false,
    });

    let ariaLabel = element.getAttribute("aria-label");
    element.closest(".choices").setAttribute("aria-label", ariaLabel);
};

defaultSelect();

const scrollInit = Array.from(document.querySelectorAll(".choices__list"));

if (scrollInit) {
    scrollInit.forEach((el) => {
       el.classList.add('custom-scroll');
    });
}
