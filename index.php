
<?php
session_start();
if (!$_SESSION["userid"]) {
} else {

    $u_post = $_SESSION['user_post'];
    if ($u_post == '1') {
        Header("Location: admin/admin.php");
    } else if ($u_post == '2') {
        Header("Location: hrmanager/hrm.php");
    } else if ($u_post == '3') {
        Header("Location: hrstaff/hrstaff.php");
    } else if ($u_post == '4') {
        Header("Location: Staff_pro.php");
    } else {
        Header("Location: Stud_Pro.php");
    }
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HRIS</title>
		
		<link rel="icon" type="image/jpg" href="../img/logoicon.jpg">
        <link rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
        <link rel="stylesheet" href="css/js-image-slider.css"/>
        <link rel="stylesheet" href="css/tooltip.css"/>
        <link rel="stylesheet" href="css/generic.css"/>

        <script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-affix.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-alert.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-button.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-carousel.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-collapse.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-dropdown.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-modal.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-popover.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-scrollspy.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-tab.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-tooltip.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-transition.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap-typeahead.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery-1.8.3.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/js-image-slider.js"></script>
        <script language="javascript" type="text/javascript" src="js/tooltip.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/new.js"></script>
    </head>

    <body>
        <div id="UpperContainer">
            <div id="logo">
                <img src="img/logo.png" alt="logo" />
            </div>
			<div ><h7 style="font-type:Cambria;">Human Resourse Informantion System</h7></div>
            <div ><h8 style="font-type:Cambria;">Polytex Garments(pvt) Ltd</h8></div>
			
            <div id="tab">
                <ul class="nav nav-tabs">
                    <li><a href="#home" data-toggle="tab">Home</a>
					
					</li>
                    <li><a href="#profile" data-toggle="tab">About Us</a></li>
                    <li><a href="#profile" data-toggle="tab">HRIS</a></li>
                    <li><a href="#messages" data-toggle="tab">Performance</a></li>
                    <li><a href="#settings" data-toggle="tab">Contact</a></li>
                    
                </ul> 

                <div class="well" id="well">
                    <div id="sliderFrame">
                        <div id="slider">

                            <img src="img/1.jpg" style="-webkit-border-radius:5px 5px 5px 5px;" alt="Human Resourse Information System." />
                            <img src="img/2.jpg" style="-webkit-border-radius:5px 5px 5px 5px;" alt="Best Quality Garments." />
							<img src="img/5.jpg" style="-webkit-border-radius:5px 5px 5px 5px;" alt="Best Consultancy and Engineering Sevices." />
                            <img src="img/4.jpg" style="-webkit-border-radius:5px 5px 5px 5px;" alt="Cotton Collection." />
                        </div> 
                        <div id="well2">
                            <div id="divlog"><p>HRIS Login</p></div>
                            <div id="wellinputbox">
                                <form class="form-horizontal" id="logon" action="login.php"  method="post" enctype="multipart/form-data" >
								<table  >
								<tr><td>User Name</td></tr>
								<tr><td>
								<div class="controls">
                                    <input type="text" style="margin-left:-20px;" id="username" name="userid" placeholder="Username" required="">
                                </div>
								</td></tr>
								<tr><td></br></td></tr>
								<tr><td>Password</td></tr>
								<tr><td>
								<div class="controls">
                                    <input type="password" style="margin-left:-20px;" id="password" name="password" placeholder="Password" required=""><br /><br />		                                            
									<button class="btn btn-danger" type="submit" class="btn" style="margin-left:-175px;">Login</button>
                                </div>
								</td></tr>
								</table>
                                </form>
                            </div>
							
                        </div>
						
                        <div style="clear:both;height:0;"></div>
                    </div>
					</br>
					</br>
					<div class="entry">
				Polytex garments (pvt) ltd, a member of Esquel Group in Sri Lanka. It is operating from 1978. Today PTX has four factories in Sri Lanka. The PTX is a leading and pioneer apparel manufacturing and exporting company in Sri Lanka, and it is a prominent Men’s wear supplier in the world. PTX has factories in Koggala, Kegalle,Yakkala & ja ela
                                                    </div>
                </div>
				<div id="footer1">PTX,Koggala</div>
				<br>
            </div>  
			
        </div>

      
               
    </body>
</html>
