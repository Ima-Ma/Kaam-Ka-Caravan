<?php
include("header.php");
include("connection.php");
?>
<div class="container-fluid bg-primary py-5 bg-header2">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Book Your Flexible Workspace</h1>
                    <a href="" class="h5 text-white">Kaam Ka کاروان</a>
               
                </div>
            </div>
        </div>
    </div>

    
    <!-- About Start -->
    <?php
                            $ID = $_GET["id"];
                            $sql = "select * from  meeting_office where id = $ID";
                            $result = mysqli_query($conn, $sql);
                            $rows = mysqli_fetch_assoc($result);
                        ?>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Meeting Room</h5>
                        <h1 class="mb-0"><?php echo $rows ['title'] ?></h1>
                    </div>
                    <p class="mb-4"><?php echo $rows ['about'] ?></p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Free WIFI</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;"> <h2 class="text-white">$</h2>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Price Per Month</h5>
                            <h4 class="text-primary mb-0"><?php echo $rows ['price'] ?></h4>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"  data-bs-toggle="modal" data-bs-target="#exampleModal"  data-wow-delay="0.9s">Book Now</a>
                </div>
                <div class="col-lg-5" >
                    <div class="position-relative" >
                    <?php
             echo "<img  src=\"image_meeting/{$rows['image']}\" height=400px width=450px>"
                 ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Application</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
    <?php
        $ID = $_GET["id"];
        $sql = "SELECT * FROM meeting_office WHERE id = $ID";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_assoc($result);
    ?>
    <div class="form-grp">
        <label class="text-dark mt-3" for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name!" required>
    </div>
    <div class="form-grp">
        <label class="text-dark mt-3" for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email!" required>
    </div>
    <div class="form-grp">
        <label class="text-dark mt-3" for="title">Title</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($rows['title']); ?>" id="title" class="form-control" required>
    </div>

    <div class="row">
        <div class="form-grp col-lg-6">
            <label class="text-dark mt-3" for="check-in">Check-In Date</label>
            <input type="date" name="check_in" id="check-in" class="form-control" required>
        </div>
        <div class="form-grp col-lg-6">
            <label class="text-dark mt-3" for="check-out">Check-Out Date</label>
            <input type="date" name="check_out" id="check-out" class="form-control" required>
        </div>
    </div>
    
</div>
<div class="modal-footer">
  <button  type="submit" data-bs-toggle="modal" data-bs-target="#Modal"  data-bs-dismiss="modal" aria-label="Close" class="btn btn-primary">Next</button>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Method</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit"  class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $check_in= $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $sql = "INSERT INTO booking (name , title, email, check_in, check_out)
            VALUES ('$name' , '$title', '$email', '$check_in', '$check_out')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>
                    swal('Thank You!', 'Your Job Application Is Successfully Delivered!.', 'success')
              </script>";
    } else {
        echo "<script>
                    swal('Oops!', 'Failed to submit job application.', 'error');
              </script>";
    }
}
include("footer.php")
?>