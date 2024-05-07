// Dropdown - filter

document.addEventListener('DOMContentLoaded', function () {
  var filterButton = document.querySelector('.filter-button');
  var filterDropdown = document.querySelector('.filter-dropdown');
  filterButton.addEventListener('click', function() {

      if (filterDropdown.style.display === "none" || !filterDropdown.style.display) {
          filterDropdown.style.display = "block";
      } else {
          filterDropdown.style.display = "none";
      }
  });
});

document.addEventListener('DOMContentLoaded', function () {
var filterfButton = document.querySelector('.filter-f-button');
var filterfDropdown = document.querySelector('.filter-f-dropdown');
filterfButton.addEventListener('click', function() {

    if (filterfDropdown.style.display === "none" || !filterfDropdown.style.display) {
        filterfDropdown.style.display = "block";
    } else {
        filterfDropdown.style.display = "none";
    }
});
});

// Slider

document.addEventListener('DOMContentLoaded', function () {
  var slides = document.querySelector('.slides');
  var slideIndex = 0;
  var slideCount = slides.children.length;

  function nextSlide() {
    slideIndex++;
    if (slideIndex >= slideCount) {
      slideIndex = 0;
    }
    updateSlidePosition();
  }

  function updateSlidePosition() {
    slides.style.transform = 'translateX(-' + (slideIndex * 100) + '%)';
  }

  setInterval(nextSlide, 7000); 
});