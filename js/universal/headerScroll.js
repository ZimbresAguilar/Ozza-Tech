// -----===VARIÁVEIS===----- //
const headerBottom = document.querySelector('.header-bottom');
// Posição inicial do scroll
let lastScrollPosition = window.scrollY;

window.addEventListener("scroll", headerPosition);

// -----===FUNÇÕES===----- //
function headerPosition(){
  const currentScrollPosition = window.scrollY;

  if (currentScrollPosition > lastScrollPosition) {
    headerBottom.style.opacity = '0';
    headerBottom.style.pointerEvents = 'none';
    headerBottom.style.display = 'none';
  } else {
    headerBottom.style.opacity = '1';
    headerBottom.style.pointerEvents = 'auto';
  }

  lastScrollPosition = currentScrollPosition;
}