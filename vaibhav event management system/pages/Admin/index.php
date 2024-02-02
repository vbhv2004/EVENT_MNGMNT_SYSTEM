<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/logincss.css">
    </head>
    <body>
		<div class="form-box">
           
			<div class="button-box">
				<div id="btn"></div>
				<h1> Admin Login</h1> 
			</div>
			
			
			<!-- Login Form -->
			<form id="login" class="input-group" method="POST" action="admin_login_code.php">
				<div class="inp">
					<h3>Admin Id</h3><input type="text" id="email" name="userid" class="input-field" placeholder="User ID" style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<h3>Password </h3><input type="password" id="password" name="userPassword" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Remember Password
				<button type="submit" class="submit-btn">Log In</button>
			</form>
			</div>
			
		
		</div>
</html>