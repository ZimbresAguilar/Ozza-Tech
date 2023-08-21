// Pegando todos .carrossel-contanter
const carrosselContainers = document.querySelectorAll(".carrossel-conteudo");

// Iterando por cada .carrossel-container
carrosselContainers.forEach(carrosselContainer => {
    const carrosselVisivel = carrosselContainer.querySelector(".carrosel-visivel");
    const carrosel = carrosselVisivel.querySelector(".carrosel");
    const prevButton = carrosselContainer.querySelector(".prvItem");
    const nextButton = carrosselContainer.querySelector(".nxtItem");
    
    let currentIndex = 0;
    
    function moveToNextItem() {
        const card = carrosel.querySelector(".card").offsetWidth;
        const containerWidth = carrosselVisivel.offsetWidth;
        const maxVisibleIndex = Math.floor(carrosel.scrollWidth / card) - Math.floor(containerWidth / card);
        
        if (currentIndex < maxVisibleIndex) {
            currentIndex++;
            carrosel.style.transform = `translateX(-${(currentIndex * card) * 1.08}px)`;
        }
        checkLastItem();
    }
    
    function moveToPrevItem() {
        const card = carrosel.querySelector(".card").offsetWidth;
        
        if (currentIndex > 0) {
            currentIndex--;
            carrosel.style.transform = `translateX(-${(currentIndex * card) * 1.08}px)`;
        }
        checkLastItem();
    }
    
    function checkLastItem() {
        const card = carrosel.querySelector(".card").offsetWidth;
        const containerWidth = carrosselVisivel.offsetWidth;
        const visibleItems = Math.floor(containerWidth / card);
        const maxVisibleIndex = Math.floor(carrosel.scrollWidth / card) - visibleItems;
    
        if (currentIndex >= maxVisibleIndex) {
            nextButton.classList.add("disabled");
            nextButton.disabled = true;
        } else {
            nextButton.classList.remove("disabled");
            nextButton.disabled = false;
        }
    
        if (currentIndex === 0) {
            prevButton.classList.add("disabled");
            prevButton.disabled = true;
        } else {
            prevButton.classList.remove("disabled");
            prevButton.disabled = false;
        }
    }
    
    nextButton.addEventListener("click", moveToNextItem);
    prevButton.addEventListener("click", moveToPrevItem);
    
    // Verificar estado inicial do carrossel
    checkLastItem();
});
