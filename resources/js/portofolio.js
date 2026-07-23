document.addEventListener("DOMContentLoaded", () => {
    /* ---------- Scroll progress arc ---------- */
    const arcBar = document.querySelector(".progress-arc__bar");
    const CIRCUMFERENCE = 176; // 2 * PI * r(28)
    function updateProgressArc() {
        const max = document.documentElement.scrollHeight - window.innerHeight;
        const pct = max > 0 ? window.scrollY / max : 0;
        arcBar.style.strokeDashoffset = String(CIRCUMFERENCE * (1 - pct));
    }

    /* ---------- Nav scroll state + mobile toggle ---------- */
    const nav = document.getElementById("nav");
    const navToggle = document.getElementById("navToggle");
    const navLinks = document.getElementById("navLinks");

    const onScroll = () => {
        nav.classList.toggle("is-scrolled", window.scrollY > 12);
        updateProgressArc();
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    navToggle.addEventListener("click", () => {
        const isOpen = navLinks.classList.toggle("is-open");
        navToggle.classList.toggle("is-active", isOpen);
        navToggle.setAttribute("aria-expanded", isOpen);
    });

    navLinks.querySelectorAll("a").forEach((a) => {
        a.addEventListener("click", () => {
            navLinks.classList.remove("is-open");
            navToggle.classList.remove("is-active");
            navToggle.setAttribute("aria-expanded", "false");
        });
    });

    /* ---------- Scroll reveal ---------- */
    const revealEls = document.querySelectorAll("[data-reveal]");
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(
                        () => entry.target.classList.add("is-visible"),
                        i * 60
                    );
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15, rootMargin: "0px 0px -60px 0px" }
    );
    revealEls.forEach((el) => observer.observe(el));

    /* ---------- Project filter ---------- */
    const filterBtns = document.querySelectorAll(".filter-btn");
    const projectCards = document.querySelectorAll(".project-card");
    filterBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            filterBtns.forEach((b) => b.classList.remove("is-active"));
            btn.classList.add("is-active");
            const filter = btn.dataset.filter;
            projectCards.forEach((card) => {
                const match =
                    filter === "all" || card.dataset.category === filter;
                card.classList.toggle("is-hidden", !match);
            });
        });
    });

    /* ---------- Back to top ---------- */
    const backToTop = document.getElementById("backToTop");
    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });

    /* ---------- Subtle tilt on project & exp cards ---------- */
    const tiltTargets = document.querySelectorAll(
        ".project-card, .exp-item__body"
    );
    tiltTargets.forEach((card) => {
        card.addEventListener("mousemove", (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            card.style.transform = `perspective(700px) rotateX(${
                y * -4
            }deg) rotateY(${x * 4}deg) translateY(-4px)`;
        });
        card.addEventListener("mouseleave", () => {
            card.style.transform = "";
        });
    });

    /* ---------- Hire Modal ---------- */

    const hireModal = document.getElementById("hireModal");
    const hireClose = document.getElementById("hireClose");

    if (hireBtn && hireModal && hireClose) {
        hireBtn.addEventListener("click", function () {
            hireModal.classList.add("show");
        });

        hireClose.addEventListener("click", function () {
            hireModal.classList.remove("show");
        });

        hireModal.addEventListener("click", function (e) {
            if (e.target === hireModal) {
                hireModal.classList.remove("show");
            }
        });
    }
});
