<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="./b.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  .app-menu__item.active {
    background-color: #007bff; 
    color: white;
}

.app-menu__item.active i,
.app-menu__item.active .app-menu__label {
    color: white;
}

</style>
<body class="app sidebar-mini rtl">
    <header class="app-header bg-primary">
        <a class="app-header__logo bg-primary" href="index.html">
            <img height="60px" src="./c.png" alt="">
        </a>
    </header>
    <aside class="app-sidebar bg-light">

        <?php
            session_start();
            echo '<h5 class="text-primary mt-3 p-2"> <i class="fa-solid fa-user-tie"></i> '.$_SESSION['a_name'].'</h5>';
        ?>
        <ul class="app-menu text-primary">
            <?php
                $currentPage = basename($_SERVER['PHP_SELF']);
            ?>
            <li>
                <a class="app-menu__item <?php echo $currentPage == 'index.php' ? 'active' : ''; ?>" href="index.php">
                    <i class="app-menu__icon fa fa-dashboard"></i>
                    <br>
                    <span class="app-menu__label"> Dashboard</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item <?php echo $currentPage == 'admin.php' ? 'active' : ''; ?>" href="./admin.php">
                    <i class="fa-solid fa-user-tie"></i>
                    <br>
                    <span class="app-menu__label"> Admin</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item <?php echo $currentPage == 'services.php' ? 'active' : ''; ?>" href="./services.php">
                    <i class="fa-solid fa-briefcase"></i>
                    <br>
                    <span class="app-menu__label"> Services</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item <?php echo $currentPage == 'users.php' ? 'active' : ''; ?>" href="./users.php">
                    <i class="fa-solid fa-users-line"></i>
                    <br>
                    <span class="app-menu__label"> Users</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item <?php echo $currentPage == 'vacancies.php' ? 'active' : ''; ?>" href="./vacancies.php">
                    <i class="fa-solid fa-globe"></i>
                    <br>
                    <span class="app-menu__label"> All Vacancies</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item <?php echo $currentPage == 'office_request.php' ? 'active' : ''; ?>" href="./office_request.php">
                    <i class="fa-regular fa-building"></i>
                    <br>
                    <span class="app-menu__label"> Office Request</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item <?php echo $currentPage == 'office_approved.php' ? 'active' : ''; ?>" href="./office_approved.php">
                    <i class="fa-solid fa-circle-check"></i>
                    <br>
                    <span class="app-menu__label"> Approved Office</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item <?php echo $currentPage == 'contact.php' ? 'active' : ''; ?>" href="./contact.php">
                    <i class="fa-solid fa-address-book"></i>
                    <br>
                    <span class="app-menu__label"> Contact</span>
                </a>
            </li>
        </ul>
    </aside>
</body>

</html>
