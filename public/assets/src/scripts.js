AOS.init();



// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "10px 15px";
        document.getElementById("navbar").classList.add("nav-scroll");
        document.getElementById("navbar").classList.add("shadow-lg");
        document.getElementById("shadow-nav").classList.add("shadow-nav");
        document.getElementById("list-menu").classList.add("list-menu-scroll");
    } else {
        document.getElementById("navbar").style.padding = "15px 15px";
        document.getElementById("navbar").classList.remove("nav-scroll");
        document.getElementById("navbar").classList.remove("shadow-lg");
        document.getElementById("shadow-nav").classList.remove("shadow-nav");
        document.getElementById("list-menu").classList.remove("list-menu-scroll");
    }
}

function animatedCounter(targer, time = 200, start = 0) {
  return {
    current: 0,
    target: targer,
    time: time,
    start: start,
    updatecounter: function () {
      start = this.start;
      const increment = (this.target - start) / this.time;
      const handle = setInterval(() => {
        if (this.current < this.target) this.current += increment;
        else {
          clearInterval(handle);
          this.current = this.target;
        }
      }, 1);
    },
  };
}

Alpine.start()
