$(document).ready(function () {
  $(".owl-one").owlCarousel({
    item: 4,
    singleItem: true,
    autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    margin: 30,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        dots: true,
      },
      600: {
        items: 2,
        dots: true,
      },
      1200: {
        items: 4,
        loop: false,
      },
    },
  });

  $(".owl-two").owlCarousel({
    item: 4,
    singleItem: true,
    autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    margin: 20,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        dots: true,
      },
      600: {
        items: 2,
        dots: true,
      },
      1200: {
        items: 4,
        loop: false,
      },
    },
  });

  $(".owl-about").owlCarousel({
    singleItem: true,
    autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    margin: 30,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        dots: true,
      },
      600: {
        items: 2,
        dots: true,
      },
      1200: {
        items: 3,
        dots: true,
      },
    },
  });

  $(".watch").magnificPopup({
    type: "iframe",
    iframe: {
      markup:
        '<div class="mfp-iframe-scaler">' +
        '<div class="mfp-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
        "</div>",
      patterns: {
        youtube: {
          index: "youtube.com/",
          id: "v=",
          src: "https://www.youtube.com/embed/%id%?autoplay=1",
        },
      },
      srcAction: "iframe_src",
    },
  });

  if (document.body.classList.contains("home")) {
    document.querySelector("header").style.background =
      "linear-gradient(to right, #0C0023 0%, #0C0023 75%, #FCCA2E 75%, #FCCA2E 100%)";

    let phoneIcon = document.querySelector(".fa-mobile-screen-button");
    phoneIcon.style.color = "#0C0023";

    let phoneNumber = document.querySelector(".nav-phone");
    phoneNumber.style.color = "#0C0023";

    let serviceCard = document.querySelectorAll(".services-card");

    for (let elem of serviceCard) {
      elem.addEventListener("mouseenter", () => {
        elem.style.backgroundColor = "#FCCA2E";
      });
      elem.addEventListener("mouseleave", () => {
        elem.style.backgroundColor = "";
      });
    }
  }

  let reportButton = document.querySelector("#report");
  let form = document.querySelector("#contact-form");

  if (reportButton !== null && form !== null) {
    reportButton.addEventListener("click", function () {
      let reportVal = form.reportValidity();
      if (reportVal == true) {
        alert("Form Submitted!");
        form.reset();
      } else {
        alert("Please fill in the required fields");
      }
    });
  }

  const portfolioBtn = document.querySelector(".portfolio-button");
  let portfolioImg = document.querySelectorAll(".portfolio-img");

  if (portfolioBtn !== null && portfolioImg !== null) {
    portfolioBtn.addEventListener("click", showAllPortfolio);

    function showAllPortfolio() {
      for (let imageBlock of portfolioImg) {
        if (imageBlock.style.display == "none") {
          imageBlock.style.display = "block";
          portfolioBtn.style.display = "none";
        }
      }
    }
  }
});
