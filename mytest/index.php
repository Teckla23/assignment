<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <title>Sign In</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="m-0 bg-danger text-center py-2 text-white">
    <strong>Assignment</strong>
</div>
<div class="sign-in round">
    <div class="card shadow text-center">
        <i class="fa fa-user-circle-o fa-user-top text-info"></i>
        <div class="card-header border-0">
        <h2>Welcome Back!</h2>
        </div>
        <div class="card-header border-0">
        <h5>Sign In</h5>
        </div>
        <form action="" method="post" class="px-3">
            
            <div class="container my-1 pb-4">
                <input type="email" name="email" class="form-control px-4" placeholder="Email">
                <i class="fa fa-envelope-o email text-info i"></i>
            </div>
            
            <div class="container my-1">
                <button type="submit" class="btn btn-info text-center form-control border-0" style="border-radius:50px 50px 50px 50px;">
                    Next
                </button>
                <div>
                    <hr style="postion:relative;  z-index:-1;">
                    <div style="margin-top:-1.8rem"><span style="background:white; z-index:100;">OR</span></div>
                </div>
                <button id="my-signin2" class="btn text-center form-control border-0"></button>
            </div>
        </form>
    </div>
</div>
<div class="footer bg-primary py-2 m-0 px-4 d-flex justify-content-between">
    <div class="py-2 d-flex">
            <li><a href="#" class="text-white px-2 text-decoration-none">About us</a></li>
            <li><a href="#" class="text-white px-2 text-decoration-none">Advertizemnet</a></li>
    </div>
    <div class="text-center"><a href="#"  class="text-white px-2 text-decoration-none">Kigali, Rwanda</a></div>
    <div class="py-2 d-flex">
        <li><a href="#" class="text-white px-2 text-decoration-none">how search work</a></li>
        <li><a href="#" class="text-white px-2 text-decoration-none">Privacy</a></li>
    </div>
</div>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script>
    const show = ()=>{
        const eye = document.querySelector(".eye");
        var pwd = document.querySelector("#pwd");
        if(pwd.type === 'password'){
            pwd.type="text";
        }else{
            pwd.type="password";
        }
    }
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width':'300',
        'longtitle': true,
        'background':'red',
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</html>