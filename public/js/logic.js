function setActiveNavbar() {
    var links = document.querySelectorAll('.nav-link');
    var underline = document.querySelector(".navbar-nav .nav-item:nth-child(1)");
    var currentLocation = window.location.href;
    
    links.forEach(link => {
      var href = link.getAttribute('href');
      if (currentLocation.indexOf(href) !== -1) {
        
        link.classList.add("active");
        link.parentNode.classList.add("active");
      }
      console.log(href);

    if (href !== 'home') {
        navbar.classList.add("navbar-scrolled");
        console.log("excuted!")
    }
    });

  }

  const navbar = document.querySelector(".navbar");
  const toggleNavbar = document.querySelector(".navbar-nav");
  const toggler = document.querySelector(".navbar-toggler");

  let screenWidth = window.innerWidth;
  setActiveNavbar();
  function resizeNav() {
    if (screenWidth < 992) {
      toggleNavbar.classList.remove('show');
    } else {
      toggleNavbar.classList.add('show');
    }
  }

  toggler.addEventListener("click", () => {
    toggleNavbar.classList.toggle("show");
  });

  window.addEventListener('DOMContentLoaded', resizeNav);
  window.addEventListener('resize', () => {
    screenWidth = window.innerWidth;
    resizeNav();
  });



  window.addEventListener('DOMContentLoaded', resizeNav);
  window.addEventListener('resize', resizeNav);