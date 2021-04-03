<?php
    include('session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];
?>
<html>
    <head>
        <title>CyberSpace</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/my-questions.css">
        <script src="../jquery/jquery3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include('include/navbar.php'); ?>
        <p></p>
        <div class="container">
            <div id="main-content">
                <h2>Questions Asked By You</h2>
                <div class="media border p-3">
                    <div class="media-body">
                        <p>
                            <?php                 
                                $ques=mysqli_query($conn,"SELECT `question`,`date`  FROM questions where userid='".$_SESSION['username']."' order by `date` desc");
                                
                                while($q=mysqli_fetch_array($ques))
                                {
                                    print ("<div class='left'><small style='color:blue; font-size:0.13in;'><i>Posted on:".$q['date']."</i></small></h4><br/>");
                                    print ("Question: <i>".$q['question']."</i><br/><hr/></div>");                     
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        <?php include('include/footer.php'); ?>
    </body>
</html>