<?php
include("connection.php");
$sql = "select * from admin_login";
$result = mysqli_query($conn, $sql);
session_start();

?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
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
  
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Open+Sans:300,400,600,700"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
 *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
 }
  #login{
    background-color: white;
   margin-right: 20px;
    float: 3px left;
    box-shadow: 3px 3px 4px 4px black;
  
  }
</style>
</head>

<body>
<div class="login">
    <a href="../../User/User_panel/index.php"><i id="icon" class="fa-solid fa-house text-secondary"></i></a>
    <div class="wrapper wrapper-login">
  <div id="login" class="container container-login animated fadeIn mt-5 ">
    
      <div class="col-md-12">
        <div class="title">
          <div class="row">
            <div class="col-lg-6 form-group form-floating-label">
              <form method="POST">
                <div class="form-group form-floating-label">
                  <label for="exampleInputEmail1">EMAIL</label>
                  <input type="email" name="email" id="exampleInputEmail1" placeholder="Enter email" class="form-control input-border-bottom" required>
                </div>
                <div class="form-group form-floating-label">
                  <label for="exampleInputPassword1">PASSWORD</label>
                  <input class="form-control" type="password" name="password" id="exampleInputPassword1" placeholder="Enter Password" class="form-control input-border-bottom" required>
                </div>
                <div class="text-center mt-4">
                <button type="submit" name="submit" class=" text-white btn btn-primary btn-block">Log In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>

  
  </div>
  

  
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script> 

</body>

</html>
<?php


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from  login where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $name = $data['username'];
  

    if($result->num_rows>0){
    $_SESSION['a_name'] = $name;
       
            echo"<script>
            swal('login successfully!', 'login!', 'success')
            setTimeout(function(){
                window.location.href='index.php';
            },3000)
            </script>";
        
    }
    else{
        echo"<script>
        swal({
            title: 'login failed',
            text: 'I will close in 2 seconds.',
            timer: 2000
          });
        setTimeout(function(){
            window.location.href='login.php';
        },3000)
        </script>";
    }
}

include("footer.php");
?>