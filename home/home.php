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
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <div>
        <div class="container" id="main-content">
            <h1 class="mt-6 text-dark font-weight-dark">Ask your question</h1>

            <form method="post" action="post_ques.php">
                <div class="form-group">
                    <input type="hidden" name="uid" value="$_SESSION['$name']">
                    <textarea name="question" class="form-control" rows="3" required
                        placeholder="Write your question here...."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ask ?</button><br>
            </form>
        </div>

        <hr>
        
        <div class="container mt-3">
            <h2>Resent Discussions</h2>
            <div class="media border p-3">
               
                <div class="media-body">
                        <?php
                        
                        $ques=mysqli_query($conn,"SELECT *  FROM questions order by `date` desc");
                        
                        while($q=mysqli_fetch_array($ques))
                        {
                            $qid=$q['qid'];
                            print("<div class='left'>");
                            print ("<h4><a class='profile' href='profile.php?id=" . $q['userid'] . "'>".$q['userid']."<a>&nbsp;&nbsp;&nbsp;");
                            print ("<small style='color:blue; font-size:0.13in;'><i>Posted on: ".$q['date']."</i></small></h4><br/>");
                            print ("<u>Question:</u> <i style='color:darkblue;'>".$q['question']."</i><br/>");
                            print("</div>");
                            $ans=mysqli_query($conn,"SELECT answer,userid FROM answers WHERE qid='$qid'");
                            while($a=mysqli_fetch_row($ans)){
                                print("<div class='right'>");
                                print ("<u>Answered</u> by <b><a class='profile' href='profile.php?id=" . $a[1] . "'>".$a[1]."</a></b>: <span><i>".$a[0]."</i></span>");
                                print("</div>");
                                
                            }
                            
                            print("<div class='right'>");
                            print ("<br/></br><div class='media-body' style='width:80%' >
                                    <form method='post' action='post_answer.php?qid=$qid'>
                                        <textarea class='form-control' name='ans' row='3' placeholder='Answer here' required/></textarea>
                                        <button  class='btn btn-primary' type='submit' value='submit'>Submit</button>
                                    </form>
                                    <hr style='height:2px; border:dot; color:blue; background-color:darkblue; width:100%; text-align:center; margin: 0 auto;'/></div>");
                            print("</div>");
                            print("<br><br>");
                        }

                        ?>
                </div>
            </div>
        </div>
        
        <?php include('include/footer.php'); ?>
    </div>
</div>
</body>

</html>
