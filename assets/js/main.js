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

// document.addEventListener("DOMContentLoaded", function () {
//   if (window.location.hash) {
//     history.replaceState(null, null, ' ');
//   }
//   window.scrollTo(0, 0);
// });

AOS.init({
  duration: 1200,
  easing: 'ease-in-out-sine',
  once: true,
  offset: 100
});

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      entry.target.classList.add('show');
    }
  });
}, {
  threshold: 0.3   // 30% element visible zala ki animation
});

document.querySelectorAll('.zoomin, .slideup')
  .forEach(el => observer.observe(el));


document.querySelectorAll("h1")
  .forEach(el => observer.observe(el));


