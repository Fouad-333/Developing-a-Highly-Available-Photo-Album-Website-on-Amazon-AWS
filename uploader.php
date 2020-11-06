 	<?php
   
    ini_set('display_errors', 1); 
	require_once ("settings.php");


	$phototitleone=trim($_POST["phototitleone"]);
	$photodescriptionone=trim($_POST["photodescriptionone"]);
	$keywordsone=trim($_POST["keywordsone"]);
	$dateone=trim($_POST["dateone"]);
	
	
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
			
			
			echo "<p>Done!!!!!!!!!!!!</p>";
			
		}
		
		
		mysqli_close($conn); 
	}
	
	 










?>