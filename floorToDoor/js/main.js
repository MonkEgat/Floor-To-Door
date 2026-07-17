//code used by EVERY page in here

function toggleMobileNav() {
  const navLinks = document.getElementById('navLinks');

  if (navLinks) {
    navLinks.classList.toggle('open');
  }
}