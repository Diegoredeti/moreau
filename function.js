window.onload = function() {
    // Toggle do menu mobile
    const btnMobile = document.getElementById('button-mobile');

    function toggleMenu() {
        const nav = document.getElementById('nav');
        const contentWithBorder = document.getElementById('content-with-border');

        nav.classList.toggle('active');

        if (nav.classList.contains('active')) {
            contentWithBorder.classList.remove('com-borda');
        } else {
            contentWithBorder.classList.add('com-borda');
        }
    }

    if (btnMobile) {
        btnMobile.addEventListener('click', toggleMenu);
    }

    // Carrossel
    const carrossel = document.querySelector(".carrossel-container");
    const carrosselItems = document.querySelectorAll(".carrossel-item");
    const prevBtn = document.querySelector(".carrossel-prev");
    const nextBtn = document.querySelector(".carrossel-next");

    if (carrossel && carrosselItems.length > 0 && prevBtn && nextBtn) {
        let itemWidth = carrosselItems[0].offsetWidth; // Largura do primeiro item do carrossel

        prevBtn.addEventListener("click", function() {
            console.log('Prev button clicked');
            carrossel.scrollBy({
                left: -itemWidth,
                behavior: "smooth"
            });
        });

        nextBtn.addEventListener("click", function() {
            console.log('Next button clicked');
            carrossel.scrollBy({
                left: itemWidth,
                behavior: "smooth"
            });
        });
    } else {
        console.error('Carousel elements not found or no carousel items present');
    }
};
