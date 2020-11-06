 	<?php
    ini_set('display_errors', 1); 
	require 'AWS/aws-autoloader.php';

 
      use Aws\S3\S3Client;
      $s3_client = new S3Client([ 'version' => 'latest','region' => 'us-east-1']);
	  
	    use Aws\S3\MultipartUploader;
      use Aws\Common\Exception\S3Exception;
	  $file_name = $_FILES['fileuploader']['name']; 
	  $temp = dirname(__FILE__)."/uploads/".$file_name;
	 
	 is_file_uploaded== move_uploaded_file($_FILES["fileuploader"]["tmp_name"], $temp );
	   
	   if(is_file_uploaded)
	  {
		 	
		   	
		  $uploader = new MultipartUploader ($s3_client,$temp, ['bucket' => 'fscat3', 'key' => 'Assignment2']);
		  try{
			  $result = $uploader->upload();
			   echo "<p>Done!!!!!!!</p>";
		  }
		  catch(S3Exception $e)
		  {}
	
			 
		  
	  }
	  else
	  {
		  echo "<p>Failed!!!!!!!</p>";
	  }
	 










?>