<?php
require('inc/essentials.php');
adminLogin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-carousel</title>
    <?php require('inc/links.php');
    ?>
</head>

<body class="bg-light">
    <?php
    require('inc/header.php');
    ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">CAROUSEL</h3>


                <!-- CAROUSEL section -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 mb-3">Images</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#carousel-s ">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>


                        <div class="row" id="carousel-data">
                        </div>


                    </div>
                </div>

                <!-- CAROUSEL Modal -->
                <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

                    <form id="carousel_s_form">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Image</h5>
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Picture</label>
                                        <input type="file" name="carousel_picture" id="carousel_picture_inp" accept="[.jpg, .jpeg, .png, .webp" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="carousel_picture.value=''" class="btn btn-secondary shadow-none text-white" data-bs-dismiss="modal">Cancel</button>
                                    <!-- onclick function is used to reset the entered name and picture if the user click on cancel after putting data  -->
                                    <button type="submit" class="btn btn-success shadow-none text-white">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php
    require('inc/scripts.php');
    ?>
    <script src="scripts/carousel.js"></script>
</body>

</html>