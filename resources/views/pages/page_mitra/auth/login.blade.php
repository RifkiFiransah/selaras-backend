<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selaras | Login</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/Brand-Selaras.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
  <style>
    .btn-primary {
      background-color: #000;
      border-radius: 20%; 
      border: none;
    }
    
    .btn-primary:hover {
      background-color:  chocolate;
    }

    .text-primary {
      color: chocolate !important;
    }

    .form-check-input:checked {
      background-color: chocolate;
      border-color: chocolate;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="overflow-hidden position-relative radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-6">
            <div class="mb-0 card">
              <div class="card-body">
                <a href="./index.html" class="py-3 text-center text-nowrap logo-img d-block w-100">
                  <img src="{{ asset('assets/images/logos/Selaras (1).png') }}" width="180" alt="">
                </a>
                <p class="mb-5 text-center fs-4">Platform Sewa Setelan Busana dan Jasa Tata Rias</p>
                <form action="{{ route('mitra.signIn') }}" method="POST" class="mx-auto w-75"">
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="mb-4 d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                  <button type="submit" class="py-8 mb-4 btn btn-primary w-100 fs-4 rounded-2">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-3 fw-bold">New To Selaras?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>