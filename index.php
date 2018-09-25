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
			
			<div class="col-md-6">
			
				<div class="Aligner">
					<div class="login-box">
						<div class="login-header"><b>Login</b></div>
							
						<div class="m15">
						   <form action = "" method = "post">
								
								<ul class="flex-outer">
									<li>
										<?php
											if(isset($loginState))
												if ($loginState == false)
													echo '<label class="incorrect">Incorrecte inlog gegevens!</label>';	
										?>
									</li>
									<li>
										<label>Username:</label>
										<input type = "text" name = "username" class = "box"/>
									</li>
									<li>
										<label>Password:</label>
										<input type = "password" name = "password" class = "box" />
									</li>
									<li class="btn-center btn-position">
										<input class="btn" type = "submit" name = "logging" value = " Login "/>
									</li>
								</ul>
								
						   </form>	
						</div>
							
					</div>
				</div>
		
			</div>
			
		</div>
	</div>

   </body>
</html>