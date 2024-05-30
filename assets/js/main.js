document.addEventListener("DOMContentLoaded", function () {
    const animatedElements = document.querySelectorAll(".animated-element, .animated-element-left");
  
    function checkScroll() {
      animatedElements.forEach((element) => {
        const elementTop = element.getBoundingClientRect().top;
        if (elementTop < window.innerHeight) {
          element.classList.add("show");
        }
      });
    }
  
    window.addEventListener("scroll", checkScroll);
    checkScroll();
  });
  