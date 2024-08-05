<?php
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
 <div class="container">
 <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input class="form-control" name="name" id="exampleInputEmail1" type="text" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
                  </div>
                  <div class="text-center mt-4">
                  <button type="submit" name="submit" class=" text-white btn btn-primary btn-block">Sign In</button>
                  </div>
                </form>
              </div>
             
            </div>
           
          </div>
        </div>
      </div>
 </div>
 <?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO admin_login (name , email , password ) VALUES ('$name','$email','$password')";
    $result = mysqli_query($conn , $sql);
    $_SESSION['a_name'] = $a_name;

$h_id = mysqli_insert_id($conn);

$_SESSION['a_id'] = $a_id;

    echo "<script>
    alert('RECORD HAS BEEN INSERTED!');
            window.location.href='login.php';

    </script>";
}

?>