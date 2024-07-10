initializeStellarNav(1, '#main-nav');
function initializeStellarNav(index, element) {
  $(element).stellarNav({
    breakpoint: 1024,
    position: 'left'
  });
}

// $(document).ready(function () {
//     var currentPageUrl = window.location.href;

//     $(".header__list a").each(function () {
//         var linkUrl = $(this).attr("href");

//         if (currentPageUrl.indexOf(linkUrl) !== -1) {
//             $(this).addClass("active");
//         }
//     });
// });


$(document).ready(function() {
    var seconds = 0;
    var milliseconds = 0;
    var timer;

    function startTimer() {
        timer = setInterval(function() {
            milliseconds += 10;
            if (milliseconds >= 1000) {
                seconds++;
                milliseconds = 0;
            }
            updateTime();
        }, 10); // Update every 10 milliseconds
    }

    function stopTimer() {
        clearInterval(timer);
    }

    function updateTime() {
        var formattedSeconds = ("0" + seconds).slice(-2);
        var formattedMilliseconds = ("00" + milliseconds).slice(-3);
        var formattedTime = formattedSeconds + ":" + formattedMilliseconds.slice(0, -1);
        $("#timer").text(formattedTime);
    }

    // Start the timer when the document is ready
    startTimer();

    // Stop the timer after 1 minute (60000 milliseconds)
    setTimeout(stopTimer, 60000); // 60000 milliseconds = 1 minute
});

//
var swiper = new Swiper(".testimonialSwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    //   },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      910: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1366: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
    },
});


// Datepicker Calender Js
$(function() {
    $( ".datepicker" ).datepicker({ firstDay: 1});
  });
