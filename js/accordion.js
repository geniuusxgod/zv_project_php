function toggleAccordion(heading) {
    heading.classList.toggle('active');
    const panel = heading.nextElementSibling;
    if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
    } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
    }
}