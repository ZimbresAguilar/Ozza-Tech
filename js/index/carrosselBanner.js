//-----===VARIÁVEIS===-----//
const bannerVisivel = document.querySelector(".banner-visivel");
const banners = document.querySelector(".banners");
const prevButton = document.querySelector(".prv-banner");
const nextButton = document.querySelector(".nxt-banner");

let currentIndex = 0;

//-----===FUNÇÕES===-----//
function moveToNextItem() {
    const banner = banners.querySelector(".banner").offsetWidth;
    currentIndex++;
    updateCarouselPosition();
}

function moveToPrevItem() {
    const banner = banners.querySelector(".banner").offsetWidth;
    currentIndex--;
    updateCarouselPosition();
}

function updateCarouselPosition() {
    const banner = banners.querySelector(".banner").offsetWidth;
    const containerWidth = bannerVisivel.offsetWidth;
    const maxVisibleIndex = Math.floor(banners.scrollWidth / banner) - 1;

    if (currentIndex > maxVisibleIndex) {
        currentIndex = 0;
        banners.style.transition = "none";
        banners.style.transform = `translateX(-${currentIndex * banner}px)`;
    } else if (currentIndex < 0) {
        currentIndex = maxVisibleIndex;
        banners.style.transition = "none";
        banners.style.transform = `translateX(-${currentIndex * banner}px)`;
    } else {
        banners.style.transition = "all .75s ease-in-out";
        banners.style.transform = `translateX(-${currentIndex * banner}px)`;
    }
}

nextButton.addEventListener("click", moveToNextItem);
prevButton.addEventListener("click", moveToPrevItem);

// Verificar estado inicial do carrossel
updateCarouselPosition();


//---=CHAT GPT=---//
// Função para trocar automaticamente para o próximo banner
function autoChangeBanner() {
    moveToNextItem();
}
// Intervalo de tempo em milissegundos (3 segundos)
const intervalTime = 3000;
// Iniciar o intervalo para trocar automaticamente os banners
let autoChangeInterval = setInterval(autoChangeBanner, intervalTime);
// Parar o intervalo quando o mouse estiver sobre o carrossel
banners.addEventListener("mouseenter", () => {
    clearInterval(autoChangeInterval);
});
// Retomar o intervalo quando o mouse sair do carrossel
banners.addEventListener("mouseleave", () => {
    autoChangeInterval = setInterval(autoChangeBanner, intervalTime);
});