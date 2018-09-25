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
				<div class="login-box">
					<div class="login-header"><b>Login</b></div>
						
					<div class="m15">
					   <form action = "" method = "post">
							
							<ul class="flex-outer">
								<li>
									<label>UserName:</label>
									<input type = "text" name = "username" class = "box"/>
								</li>
								<li>
									<label>Password:</label>
									<input type = "password" name = "password" class = "box" />
								</li>
								<br />
								<li>
									<input type = "submit" name = "logging" value = " Submit "/><br />
								</li>
							</ul>
							
					   </form>	
					</div>
						
				</div>
				
		  </div>
		
		</div>
	</div>

   </body>
</html>