<?php
    include('session.php');  	
    require('../connect.php');

    $uid=$_SESSION['username'];
    $name=$_SESSION['name'];
    $mydate=getdate(date("U"));
    $date="$mydate[mday] $mydate[month] $mydate[year]";

    if(isset($_POST['title-name']) and isset($_POST['image-link']) and isset($_POST['content-text'])){
        $title = htmlentities($_POST['title-name']);
        $image = htmlentities($_POST['image-link']);
        $content = htmlentities($_POST['content-text']);
        // echo "$title $image $content $date $name $uid";
        $sql = "insert into posts (userid,username,title,image_link,content,date) values ('$uid', '$name', '$title', '$image', '$content', '$date')";
        $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($res){
            $sql = "update users set posts = posts + 1 where userid='$uid'";
            mysqli_query($conn,$sql);
            echo ("<script>alert('Your post has been added');
                    window.location.href='posts.php';
                    </script>");
        }else{
            echo "<script type='text/javascript'>alert('Failed to add Your post');</script>";
        }     
    }
?>