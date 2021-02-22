<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('login/assets/css/login.css')}}">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="{{asset('login/assets/images/logo.svg')}}" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Нэвтрэх</h1>
            <form action="log" method="POST">
            @csrf
              <div class="form-group">
                <label for="email">Имэйл</label>
                <input name="email" type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
              </div>
              <div class="form-group mb-4">
                <label for="password">Нууц үг</label>
                <input name="password" type="password" name="password" id="password" class="form-control" placeholder="нууг үг">
              </div>
              <button type="submit" name="submit" class="btn btn-block login-btn">Нэвтрэх</button>
            </form>
            <a href="#!" class="forgot-password-link">Forgot password?</a>
            <p class="login-wrapper-footer-text">Та системд бүртгэл үүсгээгүй бол  <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
              Бүртгүүлэх
            </button></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{asset('login/assets/images/login.jpg')}}" alt="login image" class="login-img">
        
        </div>
      </div>
    </div>
  </main>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Бүртгүүлэх</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action='register' method="POST">
    <div class="form-group">
        @csrf
        <label for="exampleInputEmail1">Овог</label>
        <input type="text" name = "surname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Овогоо оруулна уу">
    </div>
    <div class="form-group">
        @csrf
        <label for="exampleInputEmail1">Нэр</label>
        <input type="text" name = "fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="нэр оруулна уу">
    </div>
    <div class="form-group">
        @csrf
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="имэйлээ оруулна уу">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="нууц үг">
    </div>
    
    
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Бүртгүүлэх</button>
        </form> 
      </div>
    </div>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
