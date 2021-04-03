<?php
   include('session.php');
   require('../connect.php');
?>

<?php
    $id = $_GET['id'];
    $query = mysqli_query($conn,"select * from users where userid = '$id'");
    $row = mysqli_fetch_array($query);
    $userid = $row['userid'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $profession = $row['profession'];
    $posts = $row['posts'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../jquery/jquery3.2.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/profile.css">    
    <title>Profile</title>
</head>
<body>
    <?php include('include/navbar.php'); ?>

    <div id="main-content">
        <div class="container mt-5 d-flex justify-content-center">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <div class="image"> <img src="../images/user_logo.png" class="rounded" width="155"> </div>
                    <div class="ml-3 w-100">
                    <h4 class="mb-0 mt-0"><?php echo $name; ?></h4>Profession: <span><?php echo $profession; ?></span>
                        <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                            <div class="d-flex flex-column"> <span class="feild">Posts</span> <span class="number"> <?php echo $posts; ?> </span> </div>
                            <div class="d-flex flex-column"> <span class="feild">Email</span> <span class="number"> <?php echo $email; ?> </span> </div>
                            <div class="d-flex flex-column"> <span class="feild">Mobile Number</span> <span class="number"> <?php echo $mobile; ?> </span> </div>
                        </div>
                        <div class="button mt-2 d-flex flex-row align-items-center"> <a href="posts.php?user=<?php echo $userid; ?>"class="btn btn-sm btn-primary w-100 ml-2" style="color:white;">See posts</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php'); ?>
</body>
</html>