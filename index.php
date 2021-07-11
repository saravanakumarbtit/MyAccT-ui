<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="index.js"></script>
  <title>MyAccTrac</title>
</head>
<body>
  <div class="container">
    <div class="row">
      MyAccTrac
    </div>
    <div class="row">
      <div class="col-6">
        <span id="login-page-data">Sign up</span>
      </div>
      <div class="col-6">
        <div id="login-div">
        <form id="login-form" onsubmit="return false">
          <div class="mb-3">
            <label for="login-email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="login-email" aria-describedby="emailHelp" />
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="login-password" class="form-label">Password</label>
            <input type="password" class="form-control" id="login-password" />
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="login-remember-me">
            <label class="form-check-label" for="login-remember-me">Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary" onclick="loginSubmit()">Login</button>
        </form>
        <label class="form-check-label" onclick="forgotPassword()"><a href="#">Forgot password?</a></label>
        <label class="form-check-label" onclick="register()"><a href="#">Register Here!</a></label>
      </div>
      <div id="forgot-password-div" style="display:none">
        forgotPassword
        <form onsubmit="return false">
          <div class="mb-3">
            <label for="forgot-password-email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="forgot-password-email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Please enter your registered email</div>
          </div>
          <button type="submit" class="btn btn-primary" onclick="submitForgotPassword()">Click Here!</button>
        </form>
        <label class="form-check-label" onclick="login()"><a href="#">Login</a></label>
      </div>
      <div id="register-div" style="display:none">
        register
        <form onsubmit="return false">
          <div class="mb-3">
            <label for="register-username" class="form-label">Name</label>
            <input type="text" class="form-control" id="register-username">
          </div>
          <div class="mb-3">
            <label for="register-email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="register-email" />
          </div>
          <div class="mb-3">
            <label for="register-phone-number" class="form-label">Phone number</label>
            <input type="text" class="form-control" id="register-phone-number" />
          </div>
          <div class="mb-3">
            <label for="register-password" class="form-label">Password</label>
            <input type="password" class="form-control" id="register-password">
            <input type="checkbox" onclick="myFunction()">Show Password
          </div>
          <button type="submit" class="btn btn-primary" onclick="registerNewUser()">Register</button>
        </form>
        <label class="form-check-label" onclick="login()"><a href="#">Login</a></label>
      </div>
    </div>
    <span id="controller-result"></span>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
<script>
@media screen and (max-width: 600px) {
  div.example {
    display: none;
  }
}
</script>

<span id="toastr" />

</body>
</html>
