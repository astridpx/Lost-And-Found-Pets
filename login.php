<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="author" content="Muhamad Nauval Azhar" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="This is a login page template based on Bootstrap 5" />
  <title>Pets login</title>
  <link rel="stylesheet" href="./style/login.css" />
  <!-- BOOTSRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />

</head>

<body>

<main class="position-relative">
<span class="home-icon position-absolute fs-1 px-3  rounded text bg-secondary bg-gradient">

<a href="/Pets" class="text-decoration-none text-light "> <i class="bi bi-house-door"></i></a></span>

  <section class="wrapper justify-content-sm-center d-flex justify-content-center align-items-center">

    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
      <div class="card shadow-lg">
        <div class="card-body p-5">
          <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
          <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
            <div class="mb-3">
              <label class="mb-2 text-muted" for="email">Email Address</label>
              <input id="email" type="email" class="form-control" name="email" value="" required autofocus />
              <div class="invalid-feedback">Email is invalid</div>
            </div>

            <div class="mb-3">
              <div class="mb-2 w-100">
                <label class="text-muted" for="password">Password</label>
                <!-- <a href="forgot.html" class="float-end">
                        Forgot Password?
                      </a> -->
              </div>
              <input id="password" type="password" class="form-control" name="password" required />
              <div class="invalid-feedback">Password is required</div>
            </div>

            <div class="d-flex align-items-center">
              <button type="submit" class="w-100 btn btn-primary ms-auto fw-bold">
                Login
              </button>
            </div>
          </form>
        </div>
        <div class="card-footer py-3 border-0">
          <div class="text-center">
            Don't have an account?
            <a href="register.html" class="text-dark">Create One</a>
          </div>
        </div>
      </div>
      <!-- <div class="text-center mt-5 text-muted">
          Copyright &copy; 2017-2021 &mdash; Your Company
        </div> -->
    </div>
  </section>
</main>


  <script src="js/login.js"></script>
</body>

</html>
