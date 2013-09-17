<?php
session_start();

include('dbcon.php');
if (!$_SESSION["userid"]) {
    // User not logged in, redirect to login page
    Header("Location: ../index.php");
} else if ($_SESSION["user_post"] != 1) {
    Header("Location: ../index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Regexecutive</title>
		<link rel="icon" type="image/jpg" href="../img/logoicon.jpg">
        <link rel="stylesheet" href="../css/css.css"/>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/bootstrap-responsive.css"/>
        <link rel="stylesheet" href="../css/bootstrap-responsive.min.css"/>
         <link rel="stylesheet" type="text/css" href="../css/menu.css" />
     

      
		
		<script type="text/javascript" src="js/Regstaffvalidate.js"></script>
    </head>

    <body>
        <div id="UpperContainer">
            <div id="logo">
                <img src="../img/logo.png" alt="logo" />
            </div>
			<div ><h7 style="font-type:Cambria;">Human Resourse Informantion System</h7> 
			<div style="float:right; padding-right:140px; margin-top:20px;"><p>Administrator&nbsp;<a href="../logout.php">(logout)</a></p></div>
			</div>
            <div ><h8 style="font-type:Cambria;">Polytex Garments(pvt) Ltd</h8></div>
			
            <div id="tab">  
               
				<div id="mainMenu">
                    <div id="main">
                        <div class="moduletable_menu flatmenu" id="flat_munu">

                            <ul class="menu" >
                                <li class="item-475"><a href="../index.php">Home</a></li>
								<li class="dropdown">
								
								<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
									Executive
								<b class="caret"></b>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li ><a href="Add Course.php" >All Executive</a></li>
								<li ><a href="Regexecutive.php" >Add Executive</a></li>
								</ul>
								
								</li>
                                <li class="dropdown">
								 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
									Staff
								<b class="caret"></b>
								</a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        
										<li ><a href="#" >All Staff</a></li>
										<li ><a href="Regstaff.php" >Add Staff</a></li>
                                    </ul>
                                </li>
                                 <li class="dropdown">
								 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
									Employee
								<b class="caret"></b>
								</a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        
										<li ><a href="#" >All Employee</a></li>
										<li ><a href="Regemployee.php" >Add Employee</a></li>
                                    </ul>
                                </li>
                                 <li class="dropdown">
								 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
									Performance
								<b class="caret"></b>
								</a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        
										<li ><a href="#" >Get Reports</a></li>
										<li ><a href="#" >View Reports</a></li>
                                    </ul>
                                </li>
                                
								<li class="item-475"><a href="../index.php">Contact</a></li>
								</ul>
                        </div>
                    </div>
                </div>

                <div class="well" id="well">
                  <form action="addingstudent.php" method="post" id="details" onsubmit=" return validatingStudents('nic','im','phone')">
					 <h3 align="right" style="margin-left:150px;">Executive Registration</h3>
				  
					<table style="margin-left:5%;" >
                            <tr>
                                <td width="150px">EPF Number &nbsp;<span class="sp">*</span></td>
                                <td><input type="text" name="epf" id="epf" placeholder="ex: G00001" required="" /></td>
                                
								
								<td style text-align:center;><strong>Department</strong></td>
                            </tr>
                           <tr>
                                <td>Password&nbsp;<span class="sp">*</span></td>
                                <td><input type="password" name="Password" id="password" required=""/></td>
                                
								<td width="150px">Department &nbsp;<span class="sp">*</span></td>
								<td><input type="text" name="epfk" id="epfk"  required=""/></td>
                            </tr>
                            <tr>
                                <td>First name&nbsp;<span class="sp">*</span></td>
                                <td><input type="text" name="f_name" id="fname" required=""></td>
                                
								<td width="150px">Position &nbsp;<span class="sp">*</span></td>
								<td><input type="text" name="epfk" id="epfk"  required=""/></td>
                            </tr>
                            <tr>
                                <td>Last name&nbsp;<span class="sp"></span></td>
                                <td><input type="text" name="l_name" id="lname" /></td>
                                
								<td width="150px">Date of Birth &nbsp;<span class="sp"></span></td>
								<td><input type="date" name="epfk" id="epfk" required="" /></td>
                            </tr>
                            <tr>
                                <td>NIC No&nbsp;<span class="sp">*</span></td>
                                <td><input type="text" name="nic" id="nic" required="" /></td>
                                
                            </tr>
                            <tr>
                                <td>Email&nbsp;<span class="sp"></span></td>
                                <td><input type="Email" name="email" id="email" /></td>
                                
                            </tr>
                            <tr>
                                <td>Phone Number &nbsp;<span class="sp"></span></td>
                                <td><input type="text" name="Phone" id="phone" /></td>
                                
                            </tr>
                       
                        </br>
                       
							  <tr>
                                <td style text-align:center;><strong>Address</strong></td>
                                
                            </tr>
                            <tr>
                                <td >Address No </td>
                                <td><input type="text" name="H_NO"></td>
                            </tr>
                            <tr>
                                <td>Address Street</td>
                                <td><input type="text" name="Street"></td>
                            </tr>
                            <tr>
                                <td>Address City</td>
                                <td><input type="text" name="City"></td>
                            </tr>
                            <tr>
                                <td>Address District</td>
                                <td><input type="text" name="District"></td>
                            </tr>
							
						
                        </table>
                      	<div style="text-align: center">
                            <input class="btn btn-danger" type="submit" value="Register"/>
                        </div>

                    </form>
					
                </div> 
				<div id="footer1">PTX,Koggala</div>
				<br>
         </div>
        </div> 

      
               
    </body>
</html>
