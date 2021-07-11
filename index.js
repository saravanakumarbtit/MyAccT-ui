$(function() {
  $('#login-email').focus();
});

function forgotPassword() {
  document.getElementById("login-div").hidden = true;
  document.getElementById("forgot-password-div").style.display = "block";
  document.getElementById("register-div").style.display = "none";
  $('#forgot-password-email').focus();
  clearLoginDiv();
}

function register() {
  document.getElementById("login-div").hidden = true;
  document.getElementById("register-div").style.display = "block";
  document.getElementById("forgot-password-div").style.display = "none";
  $('#register-username').focus();
  clearLoginDiv();
}

function login() {
  document.getElementById("login-div").hidden = false;
  document.getElementById("register-div").style.display = "none";
  document.getElementById("forgot-password-div").style.display = "none";
  $('#login-email').focus();
  clearForgotPasswordDiv();
  clearRegisterDivValues();
}

function clearAllValues(){
  clearLoginDiv();
  clearForgotPasswordDiv();
  clearRegisterDivValues();
}

function clearRegisterDivValues(){
  $('#register-username').val(null);
  $('#register-email').val(null);
  $('#register-phone-number').val(null);
  $('#register-password').val(null);
}

function clearForgotPasswordDiv(){
  $('#forgot-password-email').val(null);
}

function clearLoginDiv(){
  $('#login-email').val(null);
  $('#login-password').val(null);
}

function myFunction() {
  var x = document.getElementById("register-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function loginSubmit() {
  var email = document.getElementById("login-email").value;
  var password = document.getElementById("login-password").value;
  var formData = {
    mailId: email,
    password: password
  };
  $.ajax({
    url: "http://localhost:8080/validate_user",
    type: 'post',
    dataType: 'json',
    contentType: 'application/json',
    success: function(data) {
      if (data.loginResult) {
        $('#controller-result').text("Welcome " + data.userName);
      } else {
        $('#controller-result').text("Invalid mail id or password");
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      $('#controller-result').text(errorThrown);
    },
    data: JSON.stringify(formData)
  });
}

function submitForgotPassword() {
  var email = document.getElementById("forgot-password-email").value;
  var formData = {
    mailId: email
  };
  $.ajax({
    url: "http://localhost:8080/forgot_password",
    type: 'post',
    dataType: 'json',
    contentType: 'application/json',
    success: function(data) {
      if (data.loginResult) {
        M.toast({html: 'Your password has been sent to your registered mail Id'});
        //$('#controller-result').text("Your password has been sent to your registered mail Id");
      } else {
        M.toast({html: 'Invalid mail id'});
        //$('#controller-result').text("Invalid mail id");
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      $('#controller-result').text(errorThrown);
    },
    data: JSON.stringify(formData)
  });
}

function registerNewUser(){
  var name = document.getElementById("register-username").value;
  var email = document.getElementById("register-email").value;
  var phoneNumber = document.getElementById("register-phone-number").value;
  var password = document.getElementById("register-password").value;
  var formData = {
    userName:name,
    mailId: email,
    phoneNumber: phoneNumber,
    password: password
  };
  $.ajax({
    url: "http://localhost:8080/register_user",
    type: 'post',
    dataType: 'json',
    contentType: 'application/json',
    success: function(data) {
      if (data.loginResult) {
//        $('#controller-result').text("User already Registered");
//        M.toast({html: 'User already Registered'});
        $('#controller-result').text("User already Registered");
      } else {
//        $('#controller-result').text("Sucessfully Registered");
        M.toast({html: 'Sucessfully Registered'})
        login();
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      $('#controller-result').text(errorThrown);
    },
    data: JSON.stringify(formData)
  });
}
