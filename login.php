<?php
include("connect.php");
session_start();
if($_POST['Login']){
    $dbuserName="admin";
    $dbpassword="password";
    $user=strip_tags($_POST['username']);
    $user=strtolower($username);
    $password=strip_tags($_POST['password']);
    if($user==$dbuserName && $pass==$dbpassword){
        $_SESSION['user']=$user;
        header('Location:admin.php');
    }
    else{
        echo "Wrong username or password.";
        
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--Site Metas-->
    <meta name="description" content="A boutique non-bank financial services company specializing in providing growth solutions to small and medium-sized business" />
    <meta name="keywords" content="Financial, CorFinancial,Business, small business, medium business " />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/timeline.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>Login</title>
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '691197158357706'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=691197158357706&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->


    <link rel="stylesheet" href="style.css" />
   
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/main.css" />
   </head>
<body id="page-top" class="politics_version">

    <!--Navigation Start-->
    <nav class="navbar navbar-expand-sm navbar-dark" style="margin-bottom: 15px;">
   <div class="container-fluid">
   <a class="navbar-brand js-scroll-trigger" href="about.php">
                <img class="img-fluid" src="images/logo2.png" alt="" style="height:80px; margin-left:25px;margin-top: 30px;"/>
            </a>
            <h3 style="color:black;margin-left:25px;">FINANCIAL RESTRUCTURING SPECIALISTS</h3>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="navbarsExampleCenteredNav" aria-expanded="false" aria-label="Toggle navigation" style="border-color:#8B040B;background-color: #8B040B;">
      <span class="navbar-toggler-icon"></span>
      </button>    
      <div class="collapse navbar-collapse navbar-collapse justify-content-md-end" id="mainNav">
        
      <a href="cred.php" class="sim-btn hvr-bounce-to-top" style="font-size: 1.5em;margin-right:10px;">Finance Application -APPLY NOW</a>
      <ul class="navbar-nav social-icons">         
                            <li><a class="facebook" href="https://www.facebook.com/CORFinancial-Corp-118192885553051/"><i class="fa fa-facebook facebook-bg"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/cor_financial/"><i class="fa fa-instagram"></i></a></li>
                            <!--<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>-->
                            <li><a class="linkedin" href="https://www.linkedin.com/company/corfinancialcorp/"><i class="fa fa-linkedin"></i></a></li>
            </ul>    
      </div>
   </div>
</nav>
<nav class="navbar navbar-expand-sm navbar-dark" style="margin-bottom: 0px;">
   <div class="container-fluid" style="border-top:0.5px solid #44444C; border-bottom: 0.5px solid #44444C;background-color: #ececed;">
     
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="navbarsExampleCenteredNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>    
      <div class="collapse navbar-collapse navbar-collapse justify-content-md-center" id="mainNav">
         <ul class="navbar-nav">
         <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="LendingSolutions.php">LENDING SOLUTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="LendingStructure.php">LENDING STRUCTURE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="Industry.php">INDUSTRIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="CORsolutions.php">CORSOLUTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="transcation.php">TRANSACTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="blog.php">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="Partnerships.php">PARTNERSHIPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="Contact.php">CONTACT US</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="CreditApplication.php">Finance Application</a>
                    </li> -->
                
                
         </ul>
      </div>
   </div>
</nav>

<form method="post" action="admin.php">
Username:
<input type="text" name="username"/><br/>
Password:
<input type="password" name="password"/><br/>

<input type="submit" name="Login" value="login"/>

</form>


<footer class="footer-section">
        <div class="container">

            <div class="footer-content pt-5 ">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-30">
                        <div class="footer-widget">
                            <div class="footer-logo" style="margin-top:50px;">
                                <a href="index.html"><img src="images/logo2.png" class="img-fluid" alt="logo"></a>
                            </div>
                        

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                           
                            <ul>
                                <li><a href="index.php">About</a></li>
                                <li><a href="LendingSolutions.php">Lending Solutions</a></li>
                                <li><a href="LendingStructure.php">Lending Structure</a></li>
                                <li><a href="Industry.php">Industry</a></li>
                                <li><a href="transcation.php">Transcations</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="Partnerships.php">Partnerships</a></li>
                                <li><a href="Contact.php">Contact Us</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Contact Us</h3>
                            </div>
                            
                            <p style="color:#8E0414; font-size:1em; margin-bottom:5px;"><i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (416) 546-2859</p>    
                            <p style="color:#8E0414; font-size:1em; margin-bottom:5px;"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:someone@example.com?Subject=Inquired%20Financial%20Solutions" style="color:#8E0414;">info@corfinancialcorp.com</a></p>
                            <p style="color:#8E0414; font-size:1.5em;"><strong>Stay Connected !!</strong></p>
                       
                            <ul class="social-icons">
                            <li style="width:50px;"><a class="facebook" href="https://www.facebook.com/CORFinancial-Corp-118192885553051/"><i class="fa fa-facebook facebook-bg" style="color:white;"></i></a></li>
                            <li style="width:50px;"><a class="instagram" href="https://www.instagram.com/cor_financial/"><i class="fa fa-instagram" style="color:white;"></i></a></li>
                            <!--<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>-->
                            <li style="width:100px;"><a class="linkedin" href="https://www.linkedin.com/company/corfinancialcorp/"><i class="fa fa-linkedin" style="color:white;"></i></a></li>
                        </ul>
                       
                    </div>
                </div>
            </div>
            <hr />
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text" style="color:#44444C;">
                            Copyright &copy; 2020 <span style="color:#8B040B;">COR</span>Financial Corp.All Rights Reserved
                            
                        </p>
                    </div>
                

                </div>
            </div>
        </div>
    </footer>
    </body>
</html >