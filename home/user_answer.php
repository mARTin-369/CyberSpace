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
    <script src="../jquery/jquery3.2.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/my-answers.css">
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <p></p>
    <div class="container">
        <div id="main-content">
            <h2>Answers by You</h2>
            <div class="media border p-3">
                <div class="media-body">
                    <p>
                        <?php
                            $ans=mysqli_query($conn,"SELECT qid,answer,userid  FROM answers where userid='".$_SESSION['username']."'");
                            
                            while($a=mysqli_fetch_array($ans))
                            {
                                $qid=$a['qid'];
                                $ques=mysqli_query($conn,"SELECT `question`,`date` FROM questions WHERE qid='$qid'order by `date` desc");

                                while($q=mysqli_fetch_array($ques)){
                                    print ("<div class='right'><small style='color:blue; font-size:0.13in;'><i>Posted on:".$q['date']."</i></small></h4><br/>");
                                    print ("<b><u>Question:</u></b> <i>".$q['question']."</i><br/>");
                                    print ("Your Answer<b></b>: <i>".$a['answer']."</i></div>");  
                                } 
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