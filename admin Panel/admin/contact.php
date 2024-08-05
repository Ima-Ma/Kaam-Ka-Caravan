<?php
include("header.php");
include("connection.php");
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1 class="text-primary">
                <i class="fa fa-th-list"></i> Contact
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover" id="sampleTable">
                        <thead>
                            <tr class="text-primary">
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Message</th>
                                <th>Action</th>
                                <th>Response</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM contact";
                            $result = mysqli_query($conn, $sql);
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $rows['id']; ?></td>
                                    <td><?php echo $rows['firstname']; ?></td>
                                    <td><?php echo $rows['lastname']; ?></td>
                                    <td><?php echo $rows['email']; ?></td>
                                    <td><?php echo $rows['phonenumber']; ?></td>
                                    <td><?php echo $rows['message']; ?></td>
                                    <td>
                                        <a href="contact_delete.php?id=<?php echo $rows['id']; ?>" class="mx-5 text-primary">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="contact_reply.php?id=<?php echo $rows['id']; ?>" class="mx-5 text-primary">
                                            <i class="fa-solid fa-message"></i>
                                        </a>
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

<?php
include("footer.php");
?>
