<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <?php require('inc/links.php'); ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>

.box{
  border-top-color: var(--teal) !important;
}
</style>

</head>

<body class="bg-light">


  <?php require('inc/header.php'); ?>

     <!-- Our Facilities-->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center"> About Us</h2>
    <div class="h-line bg-dark"></div>
    <P class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit."
      Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
      Iusto nemo quibusdam quo iure,
      voluptatibus saepe debitis architecto quam odit tempore!
    </P>

  </div>
  <div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-0 mb-0 order-lg-2 order-2">
      <h3 class="mb-">Lorem ipsum dolor sit amet.</h3>
      <p> 
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Facilis animi magni aliquid ex possimus et alias repellendus consequatur invent
        ore nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae veritatis plac
        at, officiis nostrum praesentium, cumque, aliquam quibusdam alias ipsum quaerat aliquid suscipit? Maiores ip
        sam quaerat a quam suscipit. Exercitationem, veniam?
      </p>  
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1">
      <img src="https://img.freepik.com/free-vector/about-us-concept-illustration_114360-639.jpg" alt="about" class="w-100 rounded-3">
    </div>
  </div>
</div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="https://cdn-icons-png.freepik.com/512/429/429192.png"width="100px" >
          <h4 class="mt-3">100+ rooms</h4>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="https://icons.veryicon.com/png/o/business/baox/for-new-customers.png"width="100px" >
          <h4 class="mt-3">200+ customers</h4>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="https://www.iconpacks.net/icons/2/free-review-like-icon-2800-thumb.png"width="100px" >
          <h4 class="mt-3">100+ reviews</h4>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="https://cdn-icons-png.freepik.com/256/10857/10857085.png"width="100px" >
          <h4 class="mt-3">150+ Staff</h4>
        </div>

      </div>
    </div>
  </div>
<h3 class="my-5 fw-bold h-font text-center" >Managment Team</h3>

<div class="container px-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="https://prium-transition.com/wp-content/uploads/2021/01/Comment-devenir-manager-de-transition.jpg" class="w-100">
        <h5 class="mt-2">Gunathilka</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="https://prium-transition.com/wp-content/uploads/2021/01/Comment-devenir-manager-de-transition.jpg" class="w-100">
        <h5 class="mt-2">Gunathilka</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="https://prium-transition.com/wp-content/uploads/2021/01/Comment-devenir-manager-de-transition.jpg" class="w-100">
        <h5 class="mt-2">Gunathilka</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="https://prium-transition.com/wp-content/uploads/2021/01/Comment-devenir-manager-de-transition.jpg" class="w-100">
        <h5 class="mt-2">Gunathilka</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="https://prium-transition.com/wp-content/uploads/2021/01/Comment-devenir-manager-de-transition.jpg" class="w-100">
        <h5 class="mt-2">Gunathilka</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="https://prium-transition.com/wp-content/uploads/2021/01/Comment-devenir-manager-de-transition.jpg" class="w-100">
        <h5 class="mt-2">Gunathilka</h5>
      </div>
     
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

</div>
  <?php require('inc/footer.php'); ?>

 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // when window width is >= 576px
      576: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 3,
        spaceBetween: 40
      }
      // Add more breakpoints as needed
    }
  });
</script>

</body>

</html>