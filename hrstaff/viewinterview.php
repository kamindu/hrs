<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>View Interview</title>
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
								 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
									Performance
								<b class="caret"></b>
								</a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        
										<li ><a href="#" >Get Reports</a></li>
										<li ><a href="#" >View Reports</a></li>
                                    </ul>
                                </li>
                                
								<li class="item-475"><a href="../index.php">Search</a></li>
								</ul>
                        </div>
                    </div>
                </div>

                <div class="well" id="well">
                  <form action="addingstudent.php" method="post" id="details" onsubmit=" return validatingStudents('nic','im','phone')">
				  </br>
				  </br>
					<div class="span10">
							<table class="table table-striped table-condensed">
								  <thead>
								  <tr>
									  <th>Username</th>
									  <th>Date registered</th>
									  <th>Role</th>
									  <th>Status</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>Donna R. Folse</td>
									<td>2012/05/06</td>
									<td>Editor</td>
									<td><span class="label label-success">Active</span>
									</td>                                       
								</tr>
								<tr>
									<td>Emily F. Burns</td>
									<td>2011/12/01</td>
									<td>Staff</td>
									<td><span class="label label-important">Banned</span></td>                                       
								</tr>
								<tr>
									<td>Andrew A. Stout</td>
									<td>2010/08/21</td>
									<td>User</td>
									<td><span class="label">Inactive</span></td>                                        
								</tr>
								<tr>
									<td>Mary M. Bryan</td>
									<td>2009/04/11</td>
									<td>Editor</td>
									<td><span class="label label-warning">Pending</span></td>                                       
								</tr>
								<tr>
									<td>Mary A. Lewis</td>
									<td>2007/02/01</td>
									<td>Staff</td>
									<td><span class="label label-success">Active</span></td>                                        
								</tr>                                   
							  </tbody>
							</table>
							</div>
					
                    </form>
					
                </div> 
				<div id="footer1">PTX,Koggala</div>
				<br>
         </div>
        </div> 

      
               
    </body>
</html>
