<?php
session_start();
include_once 'class.user.php';
$user = new User();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CAT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Computerised Adaptive Test</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">About</a></li>
                    <li><a href="#">Take a Test</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#myModal" class="trigger-btn" data-toggle="modal"><span class="	glyphicon glyphicon-user"></span> Login</a></li>
                    <li><a href="index.php?q=logout" class="trigger-btn"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid banner">

        <div class="text-center container-fluid" id="tc">
            <h1 style="padding:350px;font-size:60px;color:white;">Computerised Adaptive Testing<br>The future of Exams</h1>

        </div>


        <div class="container-fluid whycat">
            <h3 style="font-size: 30px;text-align: center;margin-bottom: -35px;padding-top: 15px;">Why Cat ?</h3>
            <div class="row">
                <div class="col-md-3 info1 text-center">
                    <div class="icon"><img src="hourglass.svg" alt="ft"></div>
                    <div class="infohead">
                        <h4><b>FASTER TESTS</b></h4>
                    </div>
                    <div class="info">
                        <h4>CAT provide 50%-90% reduction in test length – a big deal if you are paying for seat time.
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 info2 text-center">
                    <div class="icon"><img src="arrow-up.svg" alt="ft"></div>
                    <div class="infohead">
                        <h4><b>FASTER TESTS</b></h4>
                    </div>
                    <div class="info">
                        <h4>CAT provide 50%-90% reduction in test length – a big deal if you are paying for seat time.
                        </h4>
                    </div>

                </div>
                <div class="col-md-3 info3 text-center">
                    <div class="icon"><img src="locked-padlock.svg" alt="ft"></div>
                    <div class="infohead">
                        <h4><b>FASTER TESTS</b></h4>
                    </div>
                    <div class="info">
                        <h4>CAT provide 50%-90% reduction in test length – a big deal if you are paying for seat time.
                        </h4>
                    </div>

                </div>

                <div class="col-md-3 info4 text-center">
                    <div class="icon"><img src="target.svg" alt="ft"></div>
                    <div class="infohead">
                        <h4><b>FASTER TESTS</b></h4>
                    </div>
                    <div class="info">
                        <h4>CAT provide 50%-90% reduction in test length – a big deal if you are paying for seat time.
                        </h4>
                    </div>

                </div>
            </div>
        </div>


        <div class="container-fluid whycat" style="background-color:#1F1F1F">
            <h3 style="font-size: 30px;text-align: center;margin-bottom: -35px;padding-top: 15px;">What is Cat ?</h3>
            <div class="row">
                <div class="col-md-3 info1 text-center">
                    <div class="icon"><img src="hourglass.svg" alt="ft"></div>
                    <div class="infohead">
                        <h4><b>Individualized</b></h4>
                    </div>
                    <div class="info">
                        <h4>CAT provide 50%-90% reduction in test length – a big deal if you are paying for seat time.
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 info2 text-center">
                    <div class="icon"><img src="arrow-up.svg" alt="ft"></div>
                    <div class="infohead">
                        <h4><b>Science Based</b></h4>
                    </div>
                    <div class="info">
                        <h4>CAT provide 50%-90% reduction in test length – a big deal if you are paying for seat time.
                        </h4>
                    </div>

                </div>
                <div class="col-md-3 info3 text-center">
                    <div class="icon"><img src="locked-padlock.svg" alt="ft"></div>
                    <div class="infohead">
                        <h4><b>Fair</b></h4>
                    </div>
                    <div class="info">
                        <h4>CAT provide 50%-90% reduction in test length – a big deal if you are paying for seat time.
                        </h4>
                    </div>

                </div>

                <div class="col-md-3 info4 text-center">
                    <div class="icon"><img src="target.svg" alt="ft"></div>
                    <div class="infohead">
                        <h4><b>Oh ! The math</b></h4>
                    </div>
                    <div class="info">
                        <h4>CAT provide 50%-90% reduction in test length – a big deal if you are paying for seat time.
                        </h4>
                    </div>

                </div>
            </div>
        </div>













    </div>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="avatar" style="text-align:center;">
                        <img src="https://cdn.iconscout.com/icon/free/png-256/avatar-372-456324.png" width="80px" height="80px" alt="Avatar">

                        <h4 class="modal-title" style="padding-top:20px;">Member Login</h4>
                    </div>

                </div>
                <div class="modal-body">
                    <form action="" name="login" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" value="Login" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                        </div>
                    </form>
                    <p id="wrong_id"></p>

                    <?php
                    if (isset($_REQUEST['submit'])) {
                        extract($_REQUEST);

                        $login = $user->check_login($username, $password);
                        if ($login) {
                            if ($_SESSION['category'] == 1) {
                                    echo "<script>location='student.php'</script>";
                                }
                            if ($_SESSION['category'] == 2) {
                                    echo "teacher";
                                }
                            if ($_SESSION['category'] == 3) {
                                    echo "admin";
                                }
                        } else { ?>
                            <script type="text/javascript">
                                alert("Wrong credentials");
                            </script>

                                <?php
                        }
                    } ?>
                </div>


                <div class="modal-footer">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>