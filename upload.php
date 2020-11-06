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
			<h1> <strong>Photo Uploader</strong> </h1>
			<h3> <strong>Student ID: </strong> </h3>
			<h3> <strong>Name: </strong> </h3>
		</header>
		
		<section>
			
			<form id="uploadform" enctype="multipart/form-data" method="post" action="uploading.php">
				<fieldset>
				    <legend> </legend>
					
					<p>
						<label><strong> Photo Title: </strong></label>
						<input  name = "phototitleone" type="text" /> 
					</p> <br/>
					
					<p>	
						<label><strong> Select a Photo: </strong></label>
						<input name="fileuploader" type="file" />
						
					</p> <br/>
					
					<p>
						<label><strong> Description: </strong></label>
						<input  name ="photodescriptionone" type="text" /> 
					</p> <br/>
					
					<p>
						<label><strong> Date:(yyyy-mm-dd) </strong></label>
						<input  name="dateone"  type="text" /> 
					</p> <br/>
					
					<p>
						<label><strong> Keywords (seperated by a semicolon, e.g. Keyword1; Keyword2; etc.): </strong></label><br/>
						<input name="keywordsone" type="text" /> 
					</p> <br/>
					
					<p>	
						<button name = "uploadpic" type="submit" >Upload</button>
						
					</p> <br/>
					
					
				</fieldset>
				
					<p>	
						<a href="getphotos.php"> Photo Album </a>
						
					</p> <br/>
				
				
			</form>
		</section> <br />
	
	</body>
 </html>