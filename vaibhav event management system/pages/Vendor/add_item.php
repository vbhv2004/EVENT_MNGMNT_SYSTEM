<!DOCTYPE html> 
<html> 

<head> 
	<title>Registration Form</title> 
	<link rel="stylesheet"
		href="css/style.css"> 
</head> 

<body> 
	<div id="itemsDescription">

		<div class="main"> 
			<h1>Add Product</h1> 
			<form action="add_prodcut_code.php" method="POST" enctype="multipart/form-data"> 
				<label for="itemId">Product Name</label> 
				<input type="text" name="pName" required>
				<label for="product Image"></label> 
				<input type="file" id="productImage" name="productImage" required>
                <label for="itemId">Price</label> 
				<input type="number" name="price" required/>

				<label for="product Dscription"></label> 
				<textarea  id="productionDscription" name="dis"  cols="40" rows="5"></textarea>
				
				 <div class="wrap">
					<button type="submit" class="submit-btn">Submit</button>&nbsp&nbsp
					<button type="reset" class="reset-btn">Reset</button>
				 </div>
			</form> 
		</div> 
	</div>
</body> 

</html>
