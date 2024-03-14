<?php 

require_once 'database.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekdatabase = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $hitung = mysqli_num_rows($cekdatabase);
    if ($hitung > 0) {
        $_SESSION['log'] = 'True';
        header('location:index.php');
    }else {
        header('location:login.php');
    }
}

if (!isset($_SESSION['log'])) {

} else {
    header('location:index.php');
}
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="card col-sm-4 mx-auto mt-5">
      <div class="card-header">
        <h4 class="text-center"><span class="font-weight-bold text-primary">Welcome</span></h4>
      </div>
      <div class="card-body">
        <form method="post" action="" autocomplete="off">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Usename" autofocus>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="Masukan Password" autofocus>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="login">Masuk</button>
        </form>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>