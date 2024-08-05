<?php
include("header.php");
include("connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $user_id = $_POST['user_id'];
    $code = random_int(10000, 99999);
    $_SESSION['confirm_code'] = $code;
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mushtaqueimama@gmail.com';
        $mail->Password   = 'llfegxrlynyzregx'; // Consider using environment variables for security
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->setFrom('mushtaqueimama@gmail.com', 'Kaam Ka Caravan');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Office Verification Code';
        $mail->Body    = "Your verification code is: $code";
        $mail->send();

        // Update the status in the database
        $updateSql = "UPDATE office_req SET status = 1 WHERE id = ?";
        $stmt = $conn->prepare($updateSql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();

        echo "<script>
            window.location.href='office_request.php';
        </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<main class="app-content">
    <div class="app-title">
        <h1 class="display-3 text-primary">
            <i class="fa-solid fa-building-user"></i> Office Request
        </h1>
    </div>

    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover" id="sampleTable">
                        <thead>
                            <tr class="text-primary">
                                <th>Id</th>
                                <th>Office Name</th>
                                <th>Office Email</th>
                                <th>Password</th>
                                <th>Approved</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM office_req WHERE status = 0";
                            $result = mysqli_query($conn, $sql);
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $rows['id']; ?></td>
                                    <td><?php echo $rows['username']; ?></td>
                                    <td><?php echo $rows['office_email']; ?></td>
                                    <td>************</td>
                                    <td>
                                        <i class="mx-5 fa-solid text-primary fa-user-check accept" data-bs-toggle="modal" data-bs-target="#exampleModal" data-email="<?php echo $rows['office_email']; ?>" data-id="<?php echo $rows['id']; ?>"></i>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const icons = document.querySelectorAll('.accept');
        const nameInput = document.getElementById('name');
        const userIdInput = document.getElementById('user_id');

        icons.forEach(icon => {
            icon.addEventListener('click', function() {
                const clickedId = this.getAttribute('data-id');
                const email = this.getAttribute('data-email');

                nameInput.value = email;
                userIdInput.value = clickedId;
            });
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Modal Work Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold text-primary" id="exampleModalLabel">Send Verification Code!</h3>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST">
                        <input type="hidden" name="user_id" id="user_id">
                        <div class="form-grp">
                            <label class="text-primary" for="name">Email:</label>
                            <input type="text" class="form-control" name="email" id="name">
                        </div>
                        <button type="submit" name="send" class="btn mt-3 btn-primary fw-bold">Send Approval Code!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Work End -->

<?php
include("footer.php");
?>
