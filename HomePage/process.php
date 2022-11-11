<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $Event_Name = $_POST['Event_Name'];
	 $Event_Details = $_POST['Event_Details'];
	 $Speaker = $_POST['Speaker'];
	 $Location = $_POST['Location'];
	 $City = $_POST['City'];
	 $Timing = $_POST['Timing'];


	 $sql = "INSERT INTO events (Event_Name,Event_Details,Speaker,Location,City,Timing)
	 VALUES ('$Event_Name','$Event_Details','$Speaker','$Location','$City','$Timing')";
	 if (mysqli_query($con, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>