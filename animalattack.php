<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/medical-512x512.png" type="image/x-icon">
  <meta name="description" content="Web Site Creator Description">
  <title>Cardio</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-qyMbzrT5JC" once="menu" id="menu1-1n" data-rv-view="11859">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                         <img src="assets/images/medical-512x512.png" alt="Mobirise" title="" media-simple="true" style="height: 4.6rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.html">HEALTH CARE</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.html">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="firstaid.html"><span class="mbri-briefcase mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Firstaids</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="ambulance.php"><span class="mbri-delivery mbr-iconfont mbr-iconfont-btn"></span>
                        &nbsp;Ambulance</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="finder.html"><span class="mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>
                        &nbsp;Finder</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="contact.html"><span class="mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>Contact</a></li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.co/l">bootstrap themes</a></section><section class="features11 cid-qyNDM6RwDb" id="features11-25" data-rv-view="11861">

    

    

    
                      
                                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection Failed". $conn->connect_error);
}
$sql = "SELECT heading1,symptomes,heading2,cause,heading3,firstaid,firstaid2 FROM animalattack";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<br>" . $row["heading1"]. "<br><br>" . $row["symptomes"]. "<br><br>" . $row["heading2"]. "<br><br>" . $row["cause"]. "<br><br>" . $row["heading3"]. "<br><br>" . $row["firstaid"]. "<br><br>" . $row["firstaid2"]."<br>";
	}
}
else
	{
		echo "No Results";
	}
$conn->close();
?>
                           
</section>

<section once="" class="cid-qyNEwt14hC" id="footer7-26" data-rv-view="11864">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">Home</li></ul>
            </div>
            <div class="row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social" media-simple="true"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white display-7"></p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>