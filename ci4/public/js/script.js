window.addEventListener('scroll', revealContent);

function revealContent() {
  const intro = document.querySelector('.intro');
  const content = document.querySelector('.content');
  const introBottom = intro.getBoundingClientRect().bottom;

  if (introBottom <= window.innerHeight) {
    content.classList.add('visible');
    content.classList.remove('hidden');
  }
}
