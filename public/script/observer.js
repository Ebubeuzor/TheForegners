<script>
    const header = document.querySelector(".header");
const hero = document.querySelector(".hero");

console.log('hello');
// Options for this observer
const heroOptions = {
  root: null,
  threshold: 0.7,
  rootMargin: "0px"
};

// Observer
const heroObserver = new IntersectionObserver(function(entries, heroObserver) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      header.classList.add("header--scrolled");
    } else {
      header.classList.remove("header--scrolled");
    }
  });
}, heroOptions);

// Which observes
heroObserver.observe(hero);

</script>