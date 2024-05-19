<?php
 require('inc\essentials.php');
 adminLogin();
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel- Dashboard</title>
   <?php require('inc\links.php'); ?>

</head>
<body class="bg-light">
    <div class="comtainer-fluid bg-dark text-light p-3 d-flex justify-content-between">
        <h3 class="mb-0">Admin Panel</h3>
        <a class="btn btn-light btn-sm" href="logout.php">LOG OUT</a>
    </div>

    <div class="col-lg-2 bg-dark border-top border-secondary"> <nav class="navbar navbar-expand-lg navbar-dark bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">Filters<h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                  <div class="border bg-light p-3 rounded mb-3">

                    <h5 class="mb-3" style="font-size:20px">Check Avilability</h5>
                    <label class="form-label">Check-in</label>
                    <input type="date" class="form-control shadow-none mb-3">
                    <label class="form-label">Check-out</label>
                    <input type="date" class="form-control shadow-none mb-3">
                  </div>
                  <div class="border bg-light p-3 rounded mb-3">
                    <h5 class="mb-3" style="font-size:20px;">Facilities</h5>
                    <div class="mb-2">
                      <input type="checkbox" id="f1" class="form-check-input shadow-none me-1" />
                      <label class="form-check-label" style="font-size:17px;" for="f1">Facilitie One</label>
                    </div>
                    <div class="mb-2">
                      <input type="checkbox" id="f2" class="form-check-input shadow-none me-1" />
                      <label class="form-check-label" style="font-size:17px;" for="f2">Facilitie two</label>
                    </div>
                    <div class="mb-2">
                      <input type="checkbox" id="f3" class="form-check-input shadow-none me-1" />
                      <label class="form-check-label" style="font-size:17px;" for="f3">Facilitie three</label>
                    </div>
                  </div>
                  <div class="border bg-light p-3 rounded mb-3">
                    <h5 class="mb-3" style="font-size:20px;">Guests</h5>
                    <div class="d-flex">
                      <div class="me-3">
                        <label class="form-label" style="font-size:17px;">Adults</label>
                        <input type="number" class="form-control shadow-none">
                      </div>
                      <div>
                        <label class="form-label" style="font-size:17px;">Kids</label>
                        <input type="number" class="form-control shadow-none">
                      </div>
                    </div>

                  </div>
                </div>
          </div>
        </nav></div>

<?php require('inc\scripts.php'); ?>
</body>
</html>