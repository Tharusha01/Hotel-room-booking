<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <?php require('inc/links.php'); ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.05);
      transition: all 0.5s;
    }
  </style>

</head>

<body class="bg-light">


  <?php require('inc/header.php'); ?>

  <!-- Our Facilities-->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center"> Meet Us</h2>
    <div class="h-line bg-dark"></div>
    <P class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit."
      Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
      Iusto nemo quibusdam quo iure,
      voluptatibus saepe debitis architecto quam odit tempore!
    </P>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class=" bg-white rounded shadow p-4 ">

          <iframe class="w-100 rounded mb-4" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15871.507606817215!2d80.25435445000001!3d6.0116356500000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae172f162bf926d%3A0xc0444c5e8377446c!2sUnawatuna!5e0!3m2!1sen!2slk!4v1710221753294!5m2!1sen!2slk" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/4hRFGr8ATx2iMM4R8" target="_blank" class="D-inline-block text-decoration-none text-dark">
            <i class="bi bi-geo-alt"></i> Hikkaduwa,Sri Lanka
          </a>
          <h5 class="mt-4">Call Us</h5>
          <a href="tel:+94 11 234 5678" class="D-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-inbound-fill"></i> +94 11 234 5678
          </a>
          <br>
          <a href="tel:+94 11 234 5678" class="D-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-inbound-fill"></i> +94 11 234 5678
          </a>
          <h5 class="mt-4">Email</h5>
          <a href="mailto:WlTzA@example.com" class="D-inline-block text-decoration-none text-dark"> <i class="bi bi-envelope-fill"></i>   ask.tharusha@gmail.com</a>
          <h5>Find us</h5>
          <a href="#" class="d-inline-block mb-3 mb-3 text-dark fs-5 me-2">

            <span class="mx-1"><i class="bi bi-twitter-x"></i>
            </span>
          </a>
          <a href="#" class="d-inline-block mb-3 mb-3 text-dark fs-5 me-2">


            <span class="mx-1"><i class="bi bi-facebook"></i>
            </span>
          </a>
          <a href="#" class="d-inline-block mb-3  text-dark fs-5 me-2 ">

            <span class="mx-1"><i class="bi bi-instagram"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class=" bg-white rounded shadow p-4 ">
         <form>
          <h5>Send a message</h5>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Name </label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Email </label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Subject </label>
            <input type="text" class="form-control shadow-none">
            <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">message </label>
           
            <textarea class="form-control shadow-none" rows="5" style="resize: none;" ></textarea>
          </div>
          <button type="submit" class="btn text-white custom-bg mt-3 shadow-none">Send</button>
          </div>
         </form>
        </div>
      </div>

    </div>
  </div>


  <?php require('inc/footer.php'); ?>


</body>

</html>