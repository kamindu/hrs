<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Schedule Interview</title>
        
        
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
								 <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">
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
					<table>
					<tr>
                                            <td width="150px">Interview ID &nbsp;<span class="sp"></span></td>
                                            <td><input type="text" name="iid" id="iid" placeholder="ex: IN001" required="" /></td>
                                            
                                            <td width="150px">Applicants: &nbsp;</td>
                                            
					</tr>
                                        <tr>
                                            <td width="150px">Date &nbsp;<span class="sp"></span></td>
                                            <td><input type="date" name="date" id="date" placeholder="" required="" /></td>
                                            
                                                <td>Num Of Applicants</td>
                                            	<td><div class="control-group">
							 
							  <div class="controls">
								<select id="Position" name="Position" class="input-large" required="">
								  <option></option>
								  <option>01</option>
								  <option>02</option>
								  <option>03</option>
								  <option>04</option>
                                                                  <option>05</option>
                                                                  
                                                                  
								</select>
							  </div>
							</div></td>
					</tr>
                                        <tr>
                                            <td width="150px"><strong>Panel &nbsp;</strong></td>
                                            <td></td>
                                            <td width="150px">Applicant: &nbsp;</td>
                                            <td><input type="text" name="a1" id="a1" placeholder="" required="" /></td>
                                            
					</tr>
                                        <tr>
                                            <td width="150px">NO 1: &nbsp;</td>
                                            <td><input type="text" name="p1" id="p1" placeholder="" required="" /></td>
                                            
                                            <td width="150px">Applicant: &nbsp;</td>
                                            <td><input type="text" name="a2" id="a2" placeholder="" required="" /></td>
					</tr>
                                        <tr>
                                            <td width="150px">NO 2: &nbsp;</td>
                                            <td><input type="text" name="p2" id="p2" placeholder="" required="" /></td>
                                            
                                            <td width="150px">Applicant: &nbsp;</td>
                                            <td><input type="text" name="a3" id="a3" placeholder="" required="" /></td>
					</tr>
                                        <tr>
                                            <td width="150px">NO 3: &nbsp;</td>
                                            <td><input type="text" name="p3" id="p3" placeholder=""/></td>
                                            
                                            
					</tr>  
                                            
                                            <tr>
                                <tr>
                                <td></td>
                                <td colspan="2"><input class="btn btn-primary" type="submit" value="Register">
                                <button id="Cancel" name="Cancel" class="btn btn-danger" type="reset">Clear</button></td>
								
                                
                                
                            </tr>
                                            
                         		</table>
                  </br>
                  </br>
                                  <div class="span10">
							<table class="table table-striped table-condensed">
								  <thead>
								  <tr>
									  <th>Interview ID</th>
									  <th>Date </th>
									  <th>Applicant ID</th>
									  <th>Status</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>IN001</td>
									<td>2013/09/26</td>
									<td>01</td>
									<td><span class="label label-success">success</span>
									</td>                                       
								</tr>
								<tr>
									<td>IN001</td>
									<td>2013/09/26</td>
									<td>02</td>
									<td><span class="label label-important">pending</span></td>                                       
								</tr>
                                                              <tr>
									<td>IN001</td>
									<td>2013/09/26</td>
									<td>03</td>
									<td><span class="label label-success">success</span></td>                                       
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
