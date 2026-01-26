// Function for link active
document.addEventListener("DOMContentLoaded", () => {
    
    const sections = document.querySelectorAll("main section");
    const navItems = document.querySelectorAll(".linkmenu");

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5 
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                
                const activeId = entry.target.getAttribute("id");

                navItems.forEach((item) => {
                    item.classList.remove("active");
                });

                const activeLink = document.querySelector(`.linkmenu a[href="#${activeId}"]`);

                if (activeLink) {
                    const listItem = activeLink.closest("li");
                    listItem.classList.add("active");
                }
            }
        });
    }, observerOptions);

    sections.forEach((section) => {
        observer.observe(section);
    });
});