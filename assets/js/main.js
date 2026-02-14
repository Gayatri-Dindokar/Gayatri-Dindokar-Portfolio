document.addEventListener('DOMContentLoaded', function () {
  const navbar = document.getElementById('mainNavbar');

  window.addEventListener('scroll', function () {
    if (window.scrollY > 80) {
      navbar.classList.add('navbar-scrolled');
      navbar.classList.remove('navbar-transparent');
    } else {
      navbar.classList.add('navbar-transparent');
      navbar.classList.remove('navbar-scrolled');
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  if (window.location.hash) {
    history.replaceState(null, null, ' ');
  }
  window.scrollTo(0, 0);
});



