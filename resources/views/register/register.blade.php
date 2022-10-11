
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi</title>
  <link rel="shortcut icon" href="/assets/gambar/logo.png" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="/assets/index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrasi akun baru</p>

      <form action="/register" method="post">
        @csrf
        

        <div class="input-group mb-3">
          <input type="text" name="name" id="name" class="form-control (@error('name') is-invalid @enderror) ? @error('name') is-invalid @enderror : '' " value="{{ old('name') }}" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control (@error('email') is-invalid @enderror) ? @error('email') is-invalid @enderror : '' "  value="{{ old('email') }}" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control (@error('password') is-invalid @enderror) ? @error('password') is-invalid @enderror : '' "  value="{{ old('password') }}" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="input-group mb-3">
          <input type="password" name="retypepassword" id="retypepassword" class="form-control (@error('retypepassword') is-invalid @enderror) ? @error('retypepassword') is-invalid @enderror : '' "  value="{{ old('retypepassword') }}" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('retypepassword')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block" id="daftar">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
      

      

      <p class="mt-2">
        Sudah punya akun ?  <a href="/" class="text-center">Silahkan login!</a>
      </p>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>




</body>
</html>
