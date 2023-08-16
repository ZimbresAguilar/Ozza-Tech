const headerBottom = document.querySelector('.header-bottom');
let lastScrollPosition = window.scrollY;

window.addEventListener('scroll', () => {
  const currentScrollPosition = window.scrollY;

  if (currentScrollPosition > lastScrollPosition) {
    headerBottom.style.opacity = '0';
    headerBottom.style.pointerEvents = 'none';
  } else {
    headerBottom.style.opacity = '1';
    headerBottom.style.pointerEvents = 'auto';
  }

  lastScrollPosition = currentScrollPosition;
});
