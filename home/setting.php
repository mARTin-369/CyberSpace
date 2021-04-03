<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CyberSpace</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/settings.css">
    <script src="../jQuery/jQuery3.2.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <div id="main-content">
        <div align="center">
        <p></p>
        <h4> Your Name: <?php echo $full_name; ?></h4>
            <form action="update_name.php" method="post">
                <b>Change UserName:</b> <input type="text" name="name" placeholder="<?php echo "Name"; ?>"
                    required />
                <button type="submit" value="submit" class="btn btn-danger">Change</button><br><br>
            </form>
            <p></p>
        
            <h4> Old Password: <?php echo "******"; ?></h4>
            <form action="update_password.php" method="post"><b>Enter New Password:</b> <input type="password"
                    name="password" data-type="password" placeholder="<?php echo "password"; ?>" required />
                <button type="submit" value="submit" class="btn btn-danger">Update</button><br><br>
            </form>
            <p></p>
            <h4> Primary Mobile Number : +91-<?php echo $mobile; ?></h4>
            <form action="update_mobile.php" method="post"><b>Enter New Mobile Number:</b> <input type="text" name="mobile"
                    placeholder="<?php echo "mobile number"; ?>" required />
                <button type="submit" value="submit" class="btn btn-danger">Change</button><br><br>
            </form>
        </div>
    </div>
    <br><br><br><br><br>
    <?php include('include/footer.php'); ?>
</body>

</html>
