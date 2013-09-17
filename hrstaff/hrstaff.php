<?php
session_start();

include('dbcon.php');
if (!$_SESSION["userid"]) {
    // User not logged in, redirect to login page
    Header("Location: ../index.php");
} else if ($_SESSION["user_post"] != 3) {
    Header("Location: ../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<link rel="icon" type="image/jpg" href="../img/logoicon.jpg">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HR Staff</title>
		<link rel="icon" type="image/jpg" href="../img/logo1.jpg">
        <link rel="stylesheet" href="../css/css.css"/>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/bootstrap-responsive.css"/>
        <link rel="stylesheet" href="../css/bootstrap-responsive.min.css"/>
         <link rel="stylesheet" type="../text/css" href="../css/menu.css" />
   

     
		
		
    </head>

    <body>
        <div id="UpperContainer">
            <div id="logo">
                <img src="../img/logo.png" alt="logo" />
            </div>
			<div ><h7 style="font-type:Cambria;">Human Resourse Informantion System</h7> 
			<div style="float:right; padding-right:140px; margin-top:20px;"><p>HR staff&nbsp;<a href="../logout.php">(logout)</a></p></div>
			</div>
            <div ><h8 style="font-type:Cambria;">Polytex Garments(pvt) Ltd</h8></div>
		
            <div id="tab">  
               
				<div id="mainMenu">
                    <div id="main">
                         <div class="moduletable_menu flatmenu" id="flat_munu">

                            <ul class="menu" >
                                <li class="item-475"><a href="hrstaff.php">Home</a></li>
								<li class="dropdown">
								
								<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">
									Registration
								<b class="caret"></b>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li ><a href="Regexecutive.php" >Executive</a></li>
								<li ><a href="Regstaff.php">Staff</a></li>
								<li ><a href="Regemployee.php" >Employee</a></li>
								</ul>
								
								</li>
                                <li class="dropdown">
								 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">
									Interview
								<b class="caret"></b>
								</a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        
										<li ><a href="Sinterview.php" >Schedule</a></li>
										<li ><a href="viewinterview.php" >View</a></li>
                                    </ul>
                                </li>
                                 <li class="dropdown">
								 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">
									Training
								<b class="caret"></b>
								</a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        
										<li ><a href="Straining.php" >Schedule</a></li>
										<li ><a href="#" >View</a></li>
                                    </ul>
                                </li>
                                 <li class="dropdown">
								 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">
									Performance
								<b class="caret"></b>
								</a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        
										<li ><a href="#" >Get Reports</a></li>
										<li ><a href="#" >View Reports</a></li>
                                    </ul>
                                </li>
                                
								<li class="item-475"><a href="search.php">Search</a></li>
								</ul>
                        </div>
                    </div>
                </div>

                <div class="well" id="well">
                  
				   </br>
				   </br>
					 <form action="addingstudent.php" method="post" id="details" onsubmit=" return validatingStudents('nic','im','phone')">
					</br>
					</br>
					  <ul class="thumbnails">
						<li class="span5 clearfix">
						  <div class="thumbnail clearfix">
							<img src="../img/user.jpg" alt="HRM" class="pull-left span2 clearfix" style='margin-right:10px'>
							<div class="caption" class="pull-left">
							  <a href="Regexecutive.php" class="btn btn-primary icon  pull-right">Select</a>
							  <h4>      
							  <a href="#" >Register Executive</a>
							  </h4>
							  
							 
								
							  
							</div>
						  </div>
						</li>
						  <li class="span5 clearfix">
						  <div class="thumbnail clearfix">
							<img src="../img/user.jpg" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
							<div class="caption" class="pull-left">
							  <a href="Regstaff.php" class="btn btn-primary icon  pull-right">Select</a>
							  <h4>      
							  <a href="#" >Register Staff</a>
							  </h4>
							  
								
							  
							</div>
						  </div>
						</li>
						  <li class="span5 clearfix">
						  <div class="thumbnail clearfix">
							<img src="../img/user.jpg" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
							<div class="caption" class="pull-left">
							  <a href="Regemployee.php" class="btn btn-primary icon  pull-right">Select</a>
							  <h4>      
							  <a href="#" >Register Employee</a>
							  </h4>
							  
								
							  
							</div>
						  </div>
						</li>
						  <li class="span5 clearfix">
						  <div class="thumbnail clearfix">
							<img src="../img/user.jpg" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
							<div class="caption" class="pull-left">
							  <a href="Sinterview.php" class="btn btn-primary icon  pull-right">Select</a>
							  <h4>      
							  <a href="#" >Schedule Interview</a>
							  </h4>
							  
								
							  
							</div>
						  </div>
						</li>
						  <li class="span5 clearfix">
						  <div class="thumbnail clearfix">
							<img src="../img/user.jpg" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
							<div class="caption" class="pull-left">
							  <a href="Straining.php" class="btn btn-primary icon  pull-right">Select</a>
							  <h4>      
							  <a href="#" >Schedule Trainings</a>
							  </h4>
							  
								
							  
							</div>
						  </div>
						</li>
						  <li class="span5 clearfix">
						  <div class="thumbnail clearfix">
							<img src="../img/user.jpg" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
							<div class="caption" class="pull-left">
							  <a href="http://bootsnipp.com/" class="btn btn-primary icon  pull-right">Select</a>
							  <h4>      
							  <a href="#" >Manage Performance</a>
							  </h4>
							  
								
							  
							</div>
						  </div>
						</li>
						  
						</ul>
						
                    </form>
					
                </div> 
				<div id="footer1">PTX,Koggala</div>
				<br>
         </div>
        </div> 

      
               
    </body>
</html>
