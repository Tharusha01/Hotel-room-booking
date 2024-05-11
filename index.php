<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <?php require('inc/links.php'); ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   
  <style>
    /*  custom styles here    */

    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .avilability-form {
        margin-top: 25px;
        z-index: 2;
        position: relative;
        padding: 0 35px;
      }
    }
  </style>
</head>

<body class="bg-light">


<?php require('inc/header.php'); ?>


  <!-- Carousel picture pannel -->
  <div class="container-fluid">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/carousel/IMG_40905.png?raw=true"
            class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img
            src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/carousel/IMG_99736.png?raw=true"
            class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img
            src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/carousel/IMG_62045.png?raw=true"
            class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img
            src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/carousel/IMG_15372.png?raw=true"
            class="img-fluid" />
        </div>
      </div>
    </div>
  </div>

  <!-- check availability -->
  <div class="container avilability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking availability</h5>
        <form>
          <div class="row align-items-end justify-content-end">
            <!-- Updated this line -->
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Check In</label>
              <input type="date" class="form-control shadow-none" />
            </div>

            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Check Out</label>
              <input type="date" class="form-control shadow-none" />
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-1 mt-3">
              <button type="submit" class="btn btn-white shadow-none custom-bg ms-auto">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- our rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-lg-4 col-md-6 my-3">
        <!-- Card 1 -->
        <div class="card border-0 shadow" style="max-width: 310px; margin: auto">
          <!-- Card Image -->
          <img src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/rooms/1.jpg?raw=true"
            class="card-img-top" style="height: 200px; object-fit: cover" />
          <div class="card-body">
            <!-- Card Title -->
            <h5 class="card-title">Simple Room</h5>
            <h6>Rs.2500 per night</h6>
            <!-- Features -->
            <div class="features mb-4">
              <h6 class="mb-2">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
            </div>
            <!-- Facilities -->
            <div class="facilities mb-4">
              <div class="features mb-4">
                <h6 class="mb-2">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
              </div>
            </div>
              <!-- Guests-->
              <div class="facilities mb-4">
              <div class="features mb-4">
                <h6 class="mb-2">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">5 adults</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                
              </div>
            </div>
            <!-- Rating -->
            <div class="rating mb-4">
              <h6>Rating</h6>
              <h6 class="mb-1 text-warning"></h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <!-- Buttons -->
            <div class="d-flex justify-content-between">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the same structure for other cards -->
      <div class="col-lg-4 col-md-6 my-3">
  <div class="card border-0 shadow" style="max-width: 310px; margin: auto">
    <!-- Card Image -->
    <img src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/rooms/1.jpg?raw=true"
      class="card-img-top" style="height: 200px; object-fit: cover" />
    <div class="card-body">
      <!-- Card Title -->
      <h5 class="card-title">Simple Room</h5>
      <h6>Rs.2500 per night</h6>
      <!-- Features -->
      <div class="features mb-4">
        <h6 class="mb-2">Features</h6>
        <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
        <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
      </div>
      <!-- Facilities -->
      <div class="facilities mb-4">
        <div class="features mb-4">
          <h6 class="mb-2">Facilities</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
        </div>
      </div>
      <!-- Guests -->
      <div class="facilities mb-4">
        <div class="features mb-4">
          <h6 class="mb-2">Guests</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">5 adults</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">2 adults</span>
        </div>
      </div>
      <!-- Rating -->
      <div class="rating mb-4">
        <h6>Rating</h6>
        <h6 class="mb-1 text-warning"></h6>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
      </div>
      <!-- Buttons -->
      <div class="d-flex justify-content-between">
        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
      </div>
    </div>
  </div>
</div>

      <!-- Repeat the same structure for other cards -->
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 310px; margin: auto">
          <!-- Card Image -->
          <img src="https://github.com/tj-webdev/Hotel-Booking-Website-Assets/blob/main/images/rooms/1.jpg?raw=true"
            class="card-img-top" style="height: 200px; object-fit: cover" />
          <div class="card-body">
            <!-- Card Title -->
            <h5 class="card-title">Simple Room</h5>
            <h6>Rs.2500 per night</h6>
            <!-- Features -->
            <div class="features mb-4">
              <h6 class="mb-2">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
            </div>
            <!-- Facilities -->
            <div class="facilities mb-4">
              <div class="features mb-4">
                <h6 class="mb-2">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
              </div>
            </div>
             <!-- Guests-->
             <div class="facilities mb-4">
              <div class="features mb-4">
                <h6 class="mb-2">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">5 adults</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                
              </div>
            <!-- Rating -->
            <div class="rating mb-4">
              <h6>Rating</h6>
              <h6 class="mb-1 text-warning"></h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <!-- Buttons -->
            <div class="d-flex justify-content-between">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>



  <div class="row justify-content-center mt-5">
    <div class="col-lg-4 col-md-6 text-center">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none">More Rooms</a>
    </div>
  </div>
  </div>
  <!-- our facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 rounded ">
        <img src="images/faciliteis/wifi-logo-svgrepo-com.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 rounded ">
        <img src="images/faciliteis/IMG_27079.svg" width="80px">
        <h5 class="mt-3">Hot shower</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 rounded ">
        <img src="images/faciliteis/IMG_41622.svg" width="80px">
        <h5 class="mt-3">TV</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 rounded ">
        <img src="images/faciliteis/IMG_47816.svg" width="80px">
        <h5 class="mt-3">Spa</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 rounded ">
        <img src="images/faciliteis/IMG_49949.svg" width="80px">
        <h5 class="mt-3">Ac</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none ">More facilities>></a>
      </div>
    </div>
  </div>
  <!-- Testimonial -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonial</h2>
  <div class="container mt-5">
    <div class="swiper swiper-testimonial">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-4">
            <img src="images\faciliteis\star.svg" width="50px">
            <h6 class="mb-0 ms-3">Random User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis eum perferendis voluptas quia repellat natus
            dicta nemo perspiciatis magni hic.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="images\faciliteis\star.svg" width="50px">
            <h6 class="mb-0 ms-3">Random User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis eum perferendis voluptas quia repellat natus
            dicta nemo perspiciatis magni hic.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="images\faciliteis\star.svg" width="50px">
            <h6 class="mb-0 ms-3">Random User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis eum perferendis voluptas quia repellat natus
            dicta nemo perspiciatis magni hic.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="images\faciliteis\star.svg" width="50px">
            <h6 class="mb-0 ms-3">Random User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis eum perferendis voluptas quia repellat natus
            dicta nemo perspiciatis magni hic.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- Map eka -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach us</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15871.507606817215!2d80.25435445000001!3d6.0116356500000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae172f162bf926d%3A0xc0444c5e8377446c!2sUnawatuna!5e0!3m2!1sen!2slk!4v1710221753294!5m2!1sen!2slk"
          style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel:+94 11 234 5678" class="d-inlline-block mb-2 text-decoration-none text-dark">
            <p>
              <i class="bi bi-telephone-inbound-fill"></i> +94 11 234 5678
            </p>
          </a>
          <br>
          <a href="tel:+94 11 234 5678" class="d-inlline-block mb-2 text-decoration-none text-dark">
            <p>
              <i class="bi bi-telephone-inbound-fill"></i> +94 11 234 5678
            </p>
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              Twitter
              <span class="mx-1"><i class="bi bi-twitter-x"></i></span>
            </span>
          </a><br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              Facebook
              <span class="mx-1"><i class="bi bi-facebook"></i></span>
            </span>
          </a><br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              Instagram
              <span class="mx-1"><i class="bi bi-instagram"></i></span>
            </span>
          </a><br>
        </div>
      </div>
    </div>
  </div>

 <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".swiper-container", {
          spaceBetween: 30,
          effect: "fade",
          loop: true,
          autoplay: {
            delay: 3500,
            disableOnInteraction: false,
          },
        });
      });

      var swiper = new Swiper(".swiper-testimonial", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        slidesPerView: "3",

        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: "1",
          },
          640: {
            slidesPerView: "1",
          },
          768: {
            slidesPerView: "2",
          },
          1024: {
            slidesPerView: "3",
          },
        }
      });
    </script>
</body>

</html>