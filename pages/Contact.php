<?php

$header = <<<_HEADER
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AIMS Society - Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/small-business.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                <img src="../images/logo-small.png" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navMenu">
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Us</h1>
           </div>
        <!-- /.row -->


        <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <div class="form-area">
                <form role="form" action="Contact.php" method="POST">
                <br style="clear:both">
                            <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
            				<div class="form-group">
        						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
        					</div>
        					<div class="form-group">
        						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
        					</div>
        					<div class="form-group">
        						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
        					</div>
        					<div class="form-group">
        						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
        					</div>
                            <div class="form-group">
                            <textarea class="form-control" name="message" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            </div>

                <button type="submit" id="submit" name="ent" class="btn btn-primary pull-right">Submit Form</button>
                </form>
            </div>
        </div>
        </div>


        <hr>
        <br><br>
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <h2>Follow Us on Facebook!</h2>
                <p>Follow us on Facebook to stay connected with current students and/or alumni!</p>
               <a class="btn btn-default" href="https://www.facebook.com/lmula/"><img src="../images/fb.png"></a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Find Us on LinkedIn!</h2>
                <p>Follow us on LinkedIn to receive notifications about potential jobs and to connect with current students
                    and/or alumni!</p>
                <a class="btn btn-default" href="https://www.linkedin.com/edu/loyola-marymount-university-17875"><img src="../images/in.png"></a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Email Us</h2>
                <p>Have a question, comment, or suggestion? Email us your thoughts! </p>
                <a class="btn btn-default" href="mailto:html@aboutguide.com? & subject=AIMS Society Website Help"><img src="../images/email.png"></a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
<p>Copyright &copy; AIMS Society 2017
                </div>
            </div>
        </footer>

    </div>    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>
<script src="nav.js"></script>
</html>


_HEADER;

echo $header;

$servername = "localhost";
$username = "root";
$password = "cadele7";
$dbname = "CD_CrudExample";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}


$st_name = $_POST["name"];
$st_emn = $_POST["email"];
$st_phone = $_POST["mobile"];
$st_s = $_POST["subject"];
$st_msg = $_POST["message"];


$sql_insert = "INSERT INTO Contact
	               VALUES ('$st_name', '$st_emn', '$st_phone', '$st_s', '$st_msg')";

$result = mysqli_query($conn, $sql_insert);	

if (isset($_POST["ent"])) {
echo "<script> alert('Thank you. Your inquiry has been submitted.'); </script>";}

mysqli_close($conn);



?>