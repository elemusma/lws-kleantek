jQuery(document).ready(function($) {
$('.products-carousel').owlCarousel({
    // center: true,
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    // autoHeight: false,
    // autoHeightClass: 'owl-height',
    // stagePadding:170,
    autoplay: false,
    autoplayTimeout: 2500,
    autoplaySpeed: 5000, // this seems to make it autoscroll
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
    responsive: {
        0: {
            items: 2,
            // slideBy: 2
        },
        600: {
            items: 3,
            // slideBy: 3
        },
        1000: {
            items: 4,
            // slideBy: 4
        }
    }
});

$('.styku-scanner-carousel').owlCarousel({
    // center: true,
    loop: false,
    margin: 40,
    nav: true,
    dots: true,
    autoHeight: false,
    // autoHeightClass: 'owl-height',
    // stagePadding:170,
    autoplay: false,
    autoplayTimeout: 3500,
    autoplaySpeed: 2000, // this seems to make it autoscroll
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    // navText : ["<img src='https://resources.latinowebstudio.com/wp-content/uploads/2024/10/Arrow-within-Circle-Left-Gray.png' />","<img src='https://resources.latinowebstudio.com/wp-content/uploads/2024/10/Arrow-within-Circle-Right-Gray.png' />"],
    responsive: {
        0: {
            items: 1,
            // slideBy: 2
        },
        600: {
            items: 2,
            // slideBy: 3
        },
        1000: {
            items: 2,
            slideBy: 1
        }
    }
});
 // Initialize carousel-cars
  var $carouselCars = $('.carousel-cars');

  $carouselCars.owlCarousel({
    center: true,
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    autoHeight: false,
    autoplay: false,
    autoplayTimeout: 3500,
    autoplaySpeed: 2000,
    autoplayHoverPause: false,
    // animateIn: 'fadeIn',
    // animateOut: 'fadeOut',
    navText : ["<img src='/wp-content/uploads/2025/11/Arrow-Right.png' alt='previous arrow for gallery' />","<img src='/wp-content/uploads/2025/11/Arrow-Left.png' alt='next arrow for gallery' />"],
    stagePadding: 150,
    responsive: {
      0: {
        items: 1,
        stagePadding: 40
      },
      600: {
        items: 1,
        stagePadding: 60
      },
      1000: {
        items: 1,
        stagePadding: 250
      }
    },
    onInitialized: addCenterSiblings,
    onTranslated: addCenterSiblings
  });

  // Function to add is-prev and is-next classes
  function addCenterSiblings(event) {
    var $items = $(event.target).find('.owl-item');
    $items.removeClass('is-prev is-next');

    var $center = $items.filter('.center');
    $center.prev('.owl-item').addClass('is-prev');
    $center.next('.owl-item').addClass('is-next');
  }


// $('.testimonials-carousel').owlCarousel({
//     // center: true,
//     loop: false,
//     margin: 40,
//     nav: true,
//     dots: true,
//     autoHeight: false,
//     // autoHeightClass: 'owl-height',
//     // stagePadding:170,
//     autoplay: false,
//     autoplayTimeout: 3500,
//     autoplaySpeed: 2000, // this seems to make it autoscroll
//     autoplayHoverPause: false,
//     animateIn: 'fadeIn',
//     animateOut: 'fadeOut',
//     // navText : ["<img src='https://resources.latinowebstudio.com/wp-content/uploads/2024/10/Arrow-within-Circle-Left-Gray.png' />","<img src='https://resources.latinowebstudio.com/wp-content/uploads/2024/10/Arrow-within-Circle-Right-Gray.png' />"],
//     responsive: {
//         0: {
//             items: 1,
//             // slideBy: 2
//         },
//         600: {
//             items: 2,
//             // slideBy: 3
//         },
//         1000: {
//             items: 4,
//             slideBy: 1
//         }
//     }
// });

});