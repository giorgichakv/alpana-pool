console.log("JS ჩაიტვირთა");

/* -----------------------------
   SWIPE AREA HIDE ON SCROLL
------------------------------*/
window.addEventListener("scroll", () => {
    const swipe = document.querySelector(".swipe-area");
    if (!swipe) return;

    if (window.scrollY > 50) {
        swipe.style.display = "none";
    } else {
        swipe.style.display = "flex";
    }
});


/* -----------------------------
   SECTION REVEAL ANIMATION
------------------------------*/
document.addEventListener("DOMContentLoaded", () => {

    const sections = document.querySelectorAll("section");

    const observer = new IntersectionObserver((entries, obs) => {

        entries.forEach((entry) => {

            if (entry.isIntersecting) {
                entry.target.classList.add("show");

                // ერთხელ ანიმაცია და მორჩა (სუფთა UX)
                obs.unobserve(entry.target);
            }

        });

    }, {
        threshold: 0.15
    });

    sections.forEach((section) => {
        observer.observe(section);
    });

});