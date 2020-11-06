<!--
filename: [upload.html]
author: [Fouad Nazir Ahmad Saleemi]

-->
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8" />
	  <meta name="description" content="Upload Photos" />
	  <meta name="keywords" content="HTML5, tags" />
	  <meta name="author" content="Fouad Nazir Ahmad Saleemi"  />
	  <title>Upload</title>
	  
	 
	</head>
	
	<body>
	
		<header>
			<h1> <strong>Photo Search</strong> </h1>
			<h3> <strong>Student ID: </strong> </h3>
			<h3> <strong>Name: </strong> </h3>
		</header>
		<section>
			
			<form id="serachform" method="post" action="processing.php">
				<fieldset>
				    <legend> Photo Search</legend>
					
					<p>
						<label><strong> Photo Title: </strong></label>
						<input  type="text" name = "title"/> 
					</p> <br/>
					
					<p>	
						
						<label for="keywords"> <strong>Keywords:</strong> </label>
							<select id="keywords" name = "keywords">
							    <option value=""> </option>
								<option value="cat"> cat </option>
								<option value="chic"> chic </option>
								<option value="king"> king </option>
								<option value="bird"> bird </option>
								<option value="sea"> sea </option>
								<option value="zeb"> zeb </option>
							</select> 
					</p> <br />
						
				
					
					<p>
						<label><strong> Date: </strong></label>
						<input  type="text" name = "datefrom" placeholder="yyyy-mm-dd"/> (From)
						<input  type="text" name = "dateto" placeholder="yyyy-mm-dd"/> (To)
						
					</p> <br/>
					
				
					
					<p>	
						<button type="submit" >Search</button>
						
					</p> <br/>
					
					
				</fieldset>
				
		
				
				
			</form>
		</section> <br />
	
	</body>
 </html>