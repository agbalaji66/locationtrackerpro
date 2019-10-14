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

  <title>Tracking</title>
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
<body >
    <meta http-equiv="refresh" content="60"/>
<div onload="getLoaction()">
  <p id="demo"></p>
  <script>
  var x = document.getElementById("demo");
  var lat;
  var lon;
  var test;
  var auto_refresh = setInterval
  (
      function()
      {
      getLocation();
      }, 1000);

  function getLocation()
  {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
        fillLatitudeLongitudeElements();
        navigator.geolocation.getCurrentPosition(success, error);

  }

  function showPosition(position)
  {
   lat =position.coords.latitude;
   lon = position.coords.longitude;
  //x.innerHTML = "Latitude: " + lat + "<br>Longitude: " + lon;
   test = "Hello";
  document.getElementById("latt").value = lat;
  document.getElementById("longg").value = lon;
  }

   // Repeat every 60000 milliseconds (1 minute)
  </script>
  </div>
  <?php
  function getUserIpAddr()
{
 // echo 'User IP - '.$_SERVER['REMOTE_ADDR'];
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$host1= getUserIpAddr();
 // $host1= gethostname();
  //echo "kingd".$host1;
  //if(isset($_GET['latt']) && isset($_GET['longg']))
  if(isset($_GET['submit']))
  //if(isset($_POST['submit']))
  {
  $lattitude=$_GET['latt'];
  $longitude=$_GET['longg'];
  //echo "varuthu". + $lattitude;
  //echo "varuthu". + $longitude;
$host="localhost";
$user="root";
$passd="";
$db="test";
  //echo "good".$User;
  $conn=new mysqli($host,$user,$passd,$db);
  if($conn->connect_error)
  {
  echo"connection failed";
  }
  $sql="INSERT INTO gps(`ip`,`lat`, `long`) VALUES ('".$host1."','".$lattitude."','".$longitude."')";
  if(mysqli_query($conn,$sql))
  {
  //echo "data enter success";
  }
  else{echo"failed";}

  echo"<p id='long1'></p>";
  $lat= "<script>document.writeln(latitude);</script>";
  $lon= "<script>document.writeln(longitude);</script>";
  //echo $lat."good".$lon;
  //sleep(30);
  //header("refresh: 60");
  }
  ?>
  <form name="myForm" method="GET" id="myForm">
    <div onload="time()">
  <script>
    var timeleft = 60;
    var downloadTimer = setInterval(function(){
      document.getElementById("countdown").innerHTML = timeleft + " Time remaining";
      timeleft -= 1;
      if(timeleft <= 0){
        clearInterval(downloadTimer);
        document.getElementById("countdown").innerHTML = "Data added"
      }
    }, 1000);
  </script>
<section class="pricing-table3 cid-rBQHm9og8F" id="pricing-tables3-12">
    <div class="container">
        <div class="media-container-row">
            <div class=" col-12 col-lg- col-md-6 my-4">
                <div class="pricing">
                    <div class="plan-body">
                        <div class="mbr-section-btn pt-4 text-center">
                          <h1>Click start get your coordinates.</h1>
                          <?php

                          if(isset($_GET['submit']))
                          {
                            echo"<div id='photo' style='text-align: center'>
                            <img style='vertical-align:middle' src='lol.gif' alt='' height='142px' width='142px'>
                            <span style='vertical-align:middle' ><h2 id='countdown'></h3></span>
                          </div>";
                          //echo  "<img src='lol.gif' alt='Smiley face' height='142' width='142'>";
                          //echo"<h2 class='text-center text-white pt-5' id='countdown'></h2></image>";
                          }
                          ?>
						<h1>Lattitude</h1>
						<input type="text" class="btn btn-primary display-12" id="latt" name="latt" readonly></input>
						<h1>Longitude</h1>
						<input type="text" class="btn btn-primary display-12" id="longg" name="longg" readonly></input>
                            <input type="submit"  name="submit" value="Start" class="btn btn-primary display-4"></input>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>
<h3 class="text-center text-white pt-5">Click start get your coordinates.</h3>
</div>
</form>
<script type="text/javascript">
var auto_refresh = setInterval
var subs=document.getElementById("submit");
(
    function()
    {
    submitform();
    }, 600000);

    function submitform()
    {
	alert("test");
      document.getElementById('myForm').submit(); // SUBMIT FORM
    }
}
</script>
</body>
</html>
