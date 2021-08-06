<?php 
   
   		$connect = mysqli_connect("localhost","root","" ,"std_tbl");
   		$query = "SELECT * FROM `triangle`";
   		$result = mysqli_query($connect,$query);
   		while ($row= mysqli_fetch_array($result))
    	{
   	  
   	  		echo $row['A']."  ".$row['B']."  ".$row['C']." ".$row['Area']."<br><br>";

  		}

 ?>
