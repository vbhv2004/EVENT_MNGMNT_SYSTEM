<?php

?>
<!DOCTYPE html> 
<html> 

<head> 
	<title>Vendor Registration</title> 
	<link rel="stylesheet"
		href="css/userReg.css"> 
</head> 

<body> 

	<div class="main"> 
		<h1>Add Vendor</h1> 
		<form action="vendor_add_code.php" method="POST"> 
			<label for="first">Vendor Id:</label> 
			<input type="text" name="vendorId"
				placeholder="VendorId" required> 
			<label for="first">Vendor Name:</label> 
			<input type="text" name="vendorName" id="first"
				placeholder="Vendor Name" required> 

			<label for="email">Email:</label> 
			<input type="email" id="email"
				name="email"
				placeholder="Enter your email" required> 

			<label for="dob">Date of Birth:</label> 
			<input type="date"
				id="dob" name="dob"
				placeholder="Enter your DOB" required> 
			<label for="mobile">Contact:</label> 
			<input type="text" id="mobile"
				name="contact"
				placeholder="Contact Number" required 
				maxlength="10"/> 
			<label for="gender">Gender:</label> 
			<select id="gender" name="gender" required> 
				<option value="male">Male</option> 
				<option value="female">Female</option> 
				<option value="other">Other</option> 
			</select> 
			<label for="mobile">Shop Name:</label> 
			<input type="text"
				name="shop"
				placeholder="Shop Name" required/>
			<label for="password">Password:</label> 
			<input type="password" id="password"
					name="password"
					placeholder="Enter your password"/>
			<div class="wrap"> 
				<button type="submit" > 
				Submit 
				</button> 
			</div> 
		</form> 
	</div> 
	<script src="script.js"></script> 
</body> 

</html>
