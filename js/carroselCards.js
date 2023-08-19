const carroselvisivel = document.querySelector(".carrosel-visivel");
const carrosel = carroselvisivel.querySelector(".carrosel");
const prevButton = document.querySelectorAll(".prvItem");
const nextButton = document.querySelectorAll(".nxtItem");

let currentIndex = 0;

function moveToNextItem() {
    const card = carrosel.querySelector(".card").offsetWidth;
    const containerWidth = carroselvisivel.offsetWidth;
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
    const containerWidth = carroselvisivel.offsetWidth;
    const visibleItems = Math.floor(containerWidth / card);
    const maxVisibleIndex = Math.floor(carrosel.scrollWidth / card) - visibleItems;

    if (currentIndex >= maxVisibleIndex) {
        nextButton.forEach(button => {
            button.classList.add("disabled");
            button.disabled = true;
        });
    } else {
        nextButton.forEach(button => {
            button.classList.remove("disabled");
            button.disabled = false;
        });
    }

    if (currentIndex === 0) {
        prevButton.forEach(button => {
            button.classList.add("disabled");
            button.disabled = true;
        });
    } else {
        prevButton.forEach(button => {
            button.classList.remove("disabled");
            button.disabled = false;
        });
    }
}

nextButton.forEach(button => {
    button.addEventListener("click", moveToNextItem);
});
prevButton.forEach(button => {
    button.addEventListener("click", moveToPrevItem);
});

// Verificar estado inicial do carrossel
checkLastItem();