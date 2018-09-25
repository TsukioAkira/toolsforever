<?php 
 include 'login.php';
?>
<html>
   
   <head>
      <title>Login Page</title>    
	  <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
	  <link rel="stylesheet" type="text/css" href="css/main.css">
   </head>
   
   <body>
	
	<div class="container-fluid">
		<div class="row card">
		
			<div class="Aligner">
			 <div style = "width:300px; border: solid 1px #333333; " align = "left">
				<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
					
				<div style = "margin:30px">
				   
				   <form action = "" method = "post">
					  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
					  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
					  <input type = "submit" name = "logging" value = " Submit "/><br />
				   </form>
				   
						
				</div>
					
			 </div>
				
		  </div>
		
		</div>
		
	</div>

   </body>
</html>