<?php
include("header.php");
include("connection.php");

?>
    <main class="app-content">
              <!-- Facts Start -->
    <div class="container-fluid facts pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0 mx-3"> Job Availaible</h5>
                            <h1 class="text-white mb-0 mx-3" data-toggle="counter-up"><?php 
                                $sql = "SELECT office_name FROM vacancies ORDER BY id";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_num_rows($result);
                                echo $row;
                                ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0 mx-3">Offices Join Us</h5>
                            <h1 class="mb-0 text-primary mx-3"  data-toggle="counter-up"><?php 
                                $sql = "SELECT username FROM office_req ORDER BY id";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_num_rows($result);
                                echo $row;
                                ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0 mx-3">Happy Users</h5>
                            <h1 class="text-white mb-0 mx-3" data-toggle="counter-up"><?php 
                                $sql = "SELECT username FROM user_login ORDER BY id";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_num_rows($result);
                                echo $row;
                                ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->
    <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-primary card-title-primary"> Kaam Ka کاروان</h4>
                        </div>
                        <div class="card-body">
                            <div class="widget-timeline">
                                <ul class="timeline">
                                    <!-- Job Facilities -->
                                    <li class="text-primary">
                                            <span class="text-primary">Facilities</span>
                                            <h6 class="m-t-5 text-dark"><strong>High workload during peak times and occasional tight deadlines can be challenging but rewarding.</strong>.</h6>
                                    </li>

                                    <!-- Job Advantages -->
                                    <li class="text-primary">
                                            <span class="text-primary">Advantages</span>
                                            <h6 class="m-t-5 text-dark"><strong>High workload during peak times and occasional tight deadlines can be challenging but rewarding.</strong></h6>
                                    </li>

                                    <!-- Job Disadvantages -->
                                    <li class="text-primary">
                                            <span class="text-primary">Disadvantages</span>
                                            <h6 class="m-t-5 text-dark"><strong>High workload during peak times and occasional tight deadlines can be challenging but rewarding.</strong></h6>
                                    </li>

                                    <!-- How to Apply -->
                                    <li class="text-primary">
                                        <div class="timeline-badge info"></div>
                                            <span class="text-primary">Apply Now</span>
                                            <h6 class="m-t-5 text-dark"><strong>Submit your resume and cover letter through our online application portal. We look forward to having you join our team!</strong></h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    </main>
