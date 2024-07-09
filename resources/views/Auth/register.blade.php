<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <!-- bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
     <div class="container d-flex justify-content-center align-items-center min-vh-100">
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
     
        
          <div class="row align-items-center text-center">
            <div class="header-text mb-4">
                     <h2>SIGN UP</h2>
                </div>
                <div class="input-group mb-3 ">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password">
                </div>

               
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6">Sign Up</button>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><i class="bi bi-google me-2" style="width:25px;"></i><small>Sign up with Google</small></button>
                </div>
                <div class="row">
                    <small>You have account? <a href="{{route('Auth.login')}}">Login</a></small>
                </div>
          </div>
       </div> 
      </div>
    
</body>
</html>