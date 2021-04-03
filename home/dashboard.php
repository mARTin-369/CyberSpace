<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CyberSpace</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../jQuery/jQuery3.2.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <?php include('include/navbar.php'); ?>

    <div>
    <div id="main-content">
        <div class="container mt-5 d-flex justify-content-center">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <div class="image"> <img src="../images/user_logo.png" class="rounded" width="155"> </div>
                    <div class="ml-3 w-100">
                        <h4 class="mb-0 mt-0"><?php echo $username; ?></h4>Profession: <span><?php echo $profession; ?></span>
                        <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                            <div class="d-flex flex-column"> <span class="feild">Posts</span> <span class="number"> <?php echo $posts; ?> </span> </div>
                            <div class="d-flex flex-column"> <span class="feild">Email</span> <span class="number"> <?php echo $email; ?> </span> </div>
                            <div class="d-flex flex-column"> <span class="feild">Mobile Number</span> <span class="number"> <?php echo $mobile; ?> </span> </div>
                        </div>
                        <div class="button mt-2 d-flex flex-row align-items-center"> <a href="setting.php" class="btn btn-primary">Edit Profile</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <?php include('include/footer.php'); ?>
    </div>
</body>

</html>