<?php 
include('index.php');
include('connect.php');

$username=$_POST['username'];
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$profession = $_POST['profession'];
$mail_notification = $_POST['mailNotification'] == "on" ? "Yes" : "No";

// print($mail_notification);
// print($_POST);

    mysqli_select_db($conn,"cyberspace");
    $data="insert into users(userid,name,password,email,mobile,profession,mailNotification) values('$username','$name','$password','$email','$mobile','$profession','$mail_notification')";
    $insertData=mysqli_query($conn,"$data");
    if(!$insertData){
        echo ("<script>alert('Registration fail');</script>").mysqli_error();
    }
    else{
        mysqli_query($conn,"insert into user_notifications (notification,userid) values ('Welcome to CyberSpace','$username')");
        mysqli_query($conn,"insert into admin_notifications (notification) values ('user <b>$username</b> joined CyberSpace')");
        echo ("<script>alert('Registration Done');
        window.location.href='index.php';
        </script>");
    }
?>


<!-- martin369
martin123
john007
john123 -->