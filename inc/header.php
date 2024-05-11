  <!-- Your HTML content goes here -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark px-lg-3 py-lg-2 shadow-top">
    <div class="container-fluid px-lg-4 mt-4">
      <a class="navbar-brand roboto-thin" href="index.php">My Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rooms.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success shadow-none " type="submit">Search</button>  -->
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal"
            data-bs-target="#LoginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal"
            data-bs-target="#registerModal">
            Register
          </button>
        </form>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
          </h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none" />
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none" />
          </div>
          <div class="d-flex align-items-center justify-content-between mb-3">
            <button class="btn btn-dark shadow-none">Login</button>
            <a href="javascript:void(0)" class="text-decoration-none text-dark">Forgot password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Register
          </h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <span class="badge rounded-pill text-bg-light text-wrap lh-basse">
            Note: Your Details must match with Your id (Id,Passport,Driving
            license) that will be required during check-in
          </span>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none" />
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Email </label>
                <input type="email" class="form-control shadow-none" />
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control shadow-none" />
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Picture</label>
                <input type="file" class="form-control shadow-none" />
              </div>
              <div class="col-md-12 p-0 mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control shadow-none" rows="1"></textarea>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Pin code</label>
                <input type="number" class="form-control shadow-none" />
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Date Of Birthday</label>
                <input type="date" class="form-control shadow-none" />
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Password</label>
                <input type="Password" class="form-control shadow-none" />
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="Password" class="form-control shadow-none" />
              </div>
            </div>
          </div>
          <div class="text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none">
              REGISTER
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>