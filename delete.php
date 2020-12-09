
<?php
//STEP 1: 	Get the ID 

$MID=$_GET['id'];
echo $MID;

// step 2: CONNECTING TO THE FORM TO THE DATABASE(MYSQL SERVER) localHost=127.0.0.0.1
$con=@mysqli_connect("localhost","root",""); 

//step 3: Select the database to use
$db=@mysqli_select_db($con,"Yougouslavie") or die(@mysqli_error($con));

//step 4: write the sql statement
$stat="delete from inventaires where id='$MID'";

//step 5: Execute the sql statement
$result=@mysqli_query($con,$stat) or die(@mysqli_error($con));

if ($result) {
	
	header("Location:tables.php");
}

?>