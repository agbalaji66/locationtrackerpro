<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.8, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.8, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">

  <title>Login</title>
  <!--<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">-->
  <!--<link rel="stylesheet" href="assets/tether/tether.min.css">-->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <!--<link rel="stylesheet" href="assets/socicon/css/styles.css">-->
  <!--<link rel="stylesheet" href="assets/dropdown/css/style.css">-->
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
  <form id="login-form" class="form" action="" method="post">
<section class="pricing-table3 cid-rBQHm9og8F" id="pricing-tables3-12">
    <div class="container">
        <div class="media-container-row">
            <div class=" col-12 col-lg- col-md-6 my-4">
                <div class="pricing">
                    <div class="plan-body">
                        <div class="mbr-section-btn pt-4 text-center">
                          <div id="photo" style="text-align: center">
                          <img style="vertical-align:middle" src="login.gif" alt='' height="200px" width="220px">
                        </div>
                          <h1>Login</h1>
						<h2>Username</h2>
						<input type="text" class="btn btn-primary display-12" name="uname" id="username"></input>
						<h2>Password</h2>
						<input type="password" class="btn btn-primary display-12" name="pass" id="password"></input>
                            <input type="submit" name="submit" value="Login" class="btn btn-primary display-4"></input>
                            <!--<input type="submit" name="submit" value="submit" class="btn btn-info btn-md" onclick="validate()">
                        --></div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>
</form>
<?php
if(isset($_POST['submit']))
{
  $idname=$_POST['uname'];
  $idpass=$_POST['pass'];
  $uname="admin";
  $pass="admin";
  if ($uname == $idname &&$pass == $idpass)
  {
    echo"<meta http-equiv='refresh' content='0.2;url=tracker.php'/>";
  }
  else
  { echo "Failed";
    echo"<meta http-equiv='refresh' content='0.2;url=login.php'/>";
  }

}

?>

</body>
</html>
