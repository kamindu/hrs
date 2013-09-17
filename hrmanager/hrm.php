
<?php
session_start();

include('dbcon.php');
if (!$_SESSION["userid"]) {
    // User not logged in, redirect to login page
    Header("Location: ../index.php");
} else if ($_SESSION["user_post"] != 2) {
    Header("Location: ../index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HR Manager</title>
		<link rel="icon" type="image/jpg" href="../img/logoicon.jpg">
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
			<div style="float:right; padding-right:140px; margin-top:20px;"><p>HR Manager&nbsp;<a href="../logout.php">(logout)</a></p></div>
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
									Staff
								<b class="caret"></b>
								</a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        
										<li ><a href="#" >All Staff</a></li>
										<li ><a href="#" >Add Staff</a></li>
                                    </ul>
                                </li>
                                 <li class="dropdown">
								 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
									Employee
								<b class="caret"></b>
								</a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        
										<li ><a href="#" >All Employee</a></li>
										<li ><a href="#" >Add Employee</a></li>
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
                                <li class="dropdown">
								
								<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
									Contacts
								<b class="caret"></b>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li ><a href="Add Course.php" >Get Reports</a></li>
								<li ><a href="Add Course.php" >Get Reports</a></li>
								</ul>
							
							
								</li>
								</ul>
                        </div>
                    </div>
                </div>

                <div class="well" id="well">
                  
				   </br>
				   </br>
					 <form action="#" method="post" id="details">
                       
						 <div style="">
                                                     <table>
                                                         <tr><td>
                                                            <div class="entry">
                                                            Polytex garments (pvt) ltd, a member of Esquel Group in Sri Lanka. It is operating from 1978.
                                                            Today PTX has four factories in Sri Lanka. The PTX is a leading and pioneer apparel manufacturing and exporting company in Sri Lanka, and it is a prominent Men? wear supplier in the world.
                                                            PTX has factories in Koggala, Kegalle,Yakkala & ja ela
                                                            </div>   
                                                            </td>
                                                            <td>
                                                                 <img src="../img/interview.jpg" class="img-polaroid">
                                                             </td>
                                                       </tr>  
                                                         
                                                     </table>
						
						</div>	
						 </br>
			

                    </form>
					
                </div> 
				<div id="footer1">PTX,Koggala</div>
				<br>
         </div>
        </div> 

      
               
    </body>
</html>
