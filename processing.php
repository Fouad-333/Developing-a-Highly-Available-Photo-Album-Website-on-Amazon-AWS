
	
<?php

//filename: [rcessing.php]
//author: [Fouad Nazir Ahmad Saleemi]

	$title=trim($_POST["title"]);
	$keywords=trim($_POST["keywords"]);
	$datefrom=trim($_POST["datefrom"]);
	$dateto=trim($_POST["dateto"]);
	
	
	if($title == "" && $keywords == "" && $datefrom == "" && $dateto == "" )
	{
		echo "<p>Please fill up at least one field to search a photo!!!!!!!!!</p>";
	}
		
	else if($title != "" && $keywords == "" && $datefrom == "" && $dateto == "")
	{
		$query = "select title, description, date_dt, keywords,reference from photos where title like '%$title%';";
	}
	
	else if($title == "" && $keywords != "" && $datefrom == "" && $dateto == "")
	{
		$query = "select title, description, date_dt, keywords,reference from photos where keywords like '%$keywords%';";
	}
	
	else if($title != "" && $keywords != "" && $datefrom == "" && $dateto == "" )
	{
		$query = "select title, description, date_dt, keywords,reference from photos where title like '%$title%' or keywords like '%$keywords%' ;";
	}
	
	else if( !preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $datefrom))
		{
			echo "<p>Please fill the date according to the format!!!!!</p>";
		}
		
	else if( !preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $dateto))
		{
			echo "<p>Please fill the date according to the format!!!!!</p>";
		}
	
	else if( $datefrom != "" && $dateto != "" )
	{
		$query = "select title, description, date_dt, keywords,reference from photos where date_dt between '$datefrom' and  '$dateto' ;";
	}
	
	else if($title != "" && $keywords == "" && $datefrom != "" && $dateto != "" )
	{
		$query = "select title, description, date_dt, keywords,reference from photos where title like '%$title%' or date_dt between '$datefrom' and  '$dateto' ;";
	}
	
	else if($title == "" && $keywords != "" && $datefrom != "" && $dateto != "" )
	{
		$query = "select title, description, date_dt, keywords,reference from photos where keywords like '%$keywords%' and date_dt between '$datefrom' and  '$dateto' ;";
	}
	
	else if($title != "" && $keywords != "" && $datefrom != "" && $dateto != "" )
	{
		$query = "select title, description, date_dt, keywords,reference from photos where title like '%$title%' or keywords like '%$keywords%'  or date_dt between '$datefrom' and  '$dateto' ;";
	}
	//-----------------------------------------------------------------------------------------------------------------//
	
	
	require_once ("settings.php");


	
	$conn = new mysqli ($host, $user, $password, $db_name);
	if(!$conn)
	{
		echo "<p>Database connection failed!!!!!!!</p>";
	}
	else
    {
		
		
	
		
		
		$result = mysqli_query($conn, $query);
		if(!$result)
		{
			echo "<p>Something wrong with query ", $query, "</p>";
		}
		else 
		{
			$record = mysqli_fetch_assoc ($result);
			
			if($record){
		        echo "<table border='1'>\n";
				echo "<tr><th>Title</th><th>Description</th><th>Date</th><th>Keywords</th>\n";
				while($record)
				{
					echo "<tr><td>",$record["title"], "</td>\n";
					echo "<td>", $record["description"], "</td>\n";
					echo "<td>",$record["date_dt"],"</td>\n";
					echo "<td>", $record["keywords"], "</td></tr>\n";
					
					
					
	                	$f = $record["reference"];
						$image = $f;
				$imageData = base64_encode(file_get_contents($image));
			     echo '<img src="data:image/png;base64,'.$imageData.'">';
				 
				 
						
						
						
					$record = mysqli_fetch_assoc($result);
					
					
				}
				echo  "<table>\n";
				
				
				
				mysqli_free_result($result);
			}
			else
			{
				echo "<p>Record doesn't exist</p>";
			}
			
			
		}
		
		
		mysqli_close($conn); 
	}
	
	
?>
		
		
		
