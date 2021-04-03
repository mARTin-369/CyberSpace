<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jQuery\jQery3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap\css\bootstrap.css">
    <script src="bootstrap\js\bootstrap.js"></script>
</head>

<body id="particles-js">
    <div class="container">
    <div class="row">
        
        <div class="col-lg-6">
            <div id="webtitle">
                <div id="main-name">CyberSpace</div>
                <div id="main-name-sub">At the end of the day, the goals are simple: safety and security</div>             
            </div>
        </div>

        <div class="col-lg-6">
            <div id="login">
                <div class="card-body">
                    <div class="login-wrap">
                        <div class="login-html">
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                                class="tab">Sign In</label>
                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign
                                Up</label>
                            <div class="login-form">
                                <form action="login.php" method="post">
                                    <div class="sign-in-htm">
                                        <div class="group">
                                            <label for="user" class="label">Username</label>
                                            <input id="user" type="text" class="input" name="username" required>
                                        </div>
                                        <div class="group">
                                            <label for="password" class="label">Password</label>
                                            <input id="password" type="password" class="input" data-type="password" name="password"
                                                required>
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button" value="Sign In">
                                        </div>
                                        
                                        <div class="hr"></div>
                                        <div class="foot-lnk">
                                            <label for="tab-2">Don't have Account?</a>
                                        </div>
                                    </div>
                                </form>

                                <form action="registration.php" method="POST">
                                    <div class="sign-up-htm">
                                        <div class="group">
                                            <label for="username" class="label">Username</label>
                                            <input id="username" type="text" class="input" name="username" required>
                                        </div>
                                        <div class="group">
                                            <label for="name" class="label">Name</label>
                                            <input id="name" type="text" class="input" name="name" required>
                                        </div>
                                        <div class="group">
                                            <label for="name" class="label">Profession</label>
                                            <input id="profession" type="text" class="input" name="profession" required>
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Password</label>
                                            <input id="pass" type="password" class="input" data-type="password" name="password" required>
                                        </div>
                                        <div class="group">
                                            <label for="rpass" class="label">Repeat Password</label>
                                            <input id="rpass" type="password" class="input" data-type="password" name="rpassword" required>
                                        </div>
                                        <div class="group">
                                            <label for="email" class="label">Email Address</label>
                                            <input id="email" type="text" class="input" name="email" required>
                                        </div>
                                        <div class="group">
                                            <label for="mobile" class="label">Mobile</label>
                                            <input id="mobile" type="text" class="input" name="mobile">
                                        </div>
                                        <div class="group">
                                            <input id="check" type="checkbox" class="check" name="mailNotification" checked>
                                            <label for="check"><span class="icon"></span> Receive email notification</label>
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button" value="Sign Up">
                                        </div>
                                        <div class="hr"></div>
                                        <div class="foot-lnk">
                                            <label for="tab-1">Already Member?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- scripts -->
    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>

</html>