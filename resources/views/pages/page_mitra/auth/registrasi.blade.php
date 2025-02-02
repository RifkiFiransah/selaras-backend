<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selaras | Login</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/Brand-Selaras.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.10/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.10/dist/sweetalert2.min.css" rel="stylesheet">
  <style>
    .btn-primary, .btn-primary:active, .btn-primary:visited {
      background-color: #000;
      border-radius: 20%; 
      border: none;
    }
    
    .btn-primary:hover {
      background-color:  chocolate !important;
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
                <p class="mb-5 text-center fs-4">Platform Sewa Setelan Busana dan Jasa Rias</p>
                <form action="{{ route('mitra.signUp') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3 row">
                    <div class="col">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" required name="name">
                    </div>
                    <div class="col">
                      <label for="email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="email" required name="email">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <div class="col">
                      <label for="toko" class="form-label">Nama Toko</label>
                      <input type="text" class="form-control" id="toko" required name="toko">
                    </div>
                    <div class="col">
                      <label for="logo" class="form-label">Logo</label>
                      <input type="file" required name="logo" class="form-control" id="logo" onchange="upload(this);">
                      <img id="image" width="100"/>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <div class="col">
                      <label for="no_hp" class="form-label">Nomor Handphone</label>
                      <input type="number" class="form-control" id="no_hp" required name="no_hp">
                    </div>
                    <div class="col">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" required name="password">
                    </div>
                  </div>
                  <button type="submit" class="py-8 mb-4 btn btn-primary w-100 fs-4 rounded-2" id="btnsignup">Sign Up</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="mb-0 fs-4 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="{{ route('mitra.login') }}">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script>
    const btnSignUp = document.querySelector('#btnsignup');
    btnSignUp.addEventListener('click', function (e) {
      e.preventDefault();
      
      Swal.fire({
        title: "Konfirmasi Pendaftaran?",
        text: "Apakah anda sudah mengisi data dengan benar!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Iya, Itu Sudah Benar!"
        }).then((result) => {
        if (result.isConfirmed) {
          // Swal.fire({
          //   title: "Berhasil!",
          //   text: "Akun anda berhasil dibuat.",
          //   icon: "success"
          // });
          document.querySelector("form").submit();
        }
      });
    })

    function upload(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#image').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
    }   
  </script>
</body>

</html>