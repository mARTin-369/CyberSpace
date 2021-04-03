<nav class="navbar navbar-expand-lg navbar-dark" id="headerWrapper">
    <div class="container">
        <a class="navbar-brand" href="home.php">CyberSpace</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="background-color: #000;" id="navbarSupportedContent">
            <ul class="navbar-nav ml-left">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>History</span>
                        <br>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="user_ques.php">Questions</a>
                        <a class="dropdown-item" href="user_answer.php">Answers</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="posts.php">
                        Posts & Stories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_notifications.php">
                        <?php
                        $q="SELECT count(*) FROM user_notifications where userid='".$_SESSION['username']."'";
                        $d=mysqli_query($conn,$q);
                        $notif_count=mysqli_fetch_row($d);
                        ?>
                        Notifications <b><span style='background-color:red; margin-left: 2px; padding: 2px; border: 1px solid white;color:white;'><?php echo"$notif_count[0]";?></span></b>
                    </a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="dashboard.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle fa-2x"></i>
                        <br>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="dashboard.php">Profile</a>
                        <a class="dropdown-item" href="setting.php">Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>