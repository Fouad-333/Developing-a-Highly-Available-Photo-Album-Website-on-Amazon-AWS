 	<?php
   //filename: [uploading.php]
    //author: [Fouad Nazir Ahmad Saleemi]
  



     ini_set('display_errors', 1); 
	require 'AWS/aws-autoloader.php';
	require_once ("settings.php");
	
	$phototitleone=trim($_POST["phototitleone"]);
	$photodescriptionone=trim($_POST["photodescriptionone"]);
	$keywordsone=trim($_POST["keywordsone"]);
	$dateone=trim($_POST["dateone"]);
	
	  use Aws\S3\S3Client;
      $s3_client = new S3Client([ 'version' => 'latest','region' => 'us-east-1']);
	  
	  use Aws\S3\MultipartUploader;
      use Aws\Common\Exception\S3Exception;
	  $file = $_FILES['fileuploader']['name']; 
	  $temp = dirname(__FILE__)."/uploads/".$file;
	  
	 

	 is_file_uploaded== move_uploaded_file($_FILES["fileuploader"]["tmp_name"], $temp );
	   
	   if(is_file_uploaded)
	  {
		 	$conn = new mysqli ($host, $user, $password, $db_name);
			if(!$conn)
			{
				echo "<p>Database connection failed!!!!!!!</p>";
			}
			else
			{
				
				$query = "INSERT INTO photos (title, description, date_dt, keywords) VALUES ('$phototitleone', '$photodescriptionone', '$dateone', '$keywordsone')";
			
				
				
				$result = mysqli_query($conn, $query);
				if(!$result)
				{
					echo "<p>Something wrong with query ", $query, "</p>";
				}
				else 
				{
					$uploader = new MultipartUploader ($s3_client,$temp, ['bucket' => 'fscat3', 'key' => 'Assignment2']);
					  try{
						  $result = $uploader->upload();
						   echo "<p>Done!!!!!!!</p>";
					  }
					  catch(S3Exception $e)
					  {}
								
					
				}
				
				
				mysqli_close($conn); 
			}
		   	
		  
	
			 
		  
	  }


	
	 










?>