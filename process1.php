<?php
$host="localhost";
$user="shelton";
$pwd="@gmail.com1";
$db="mku";


$myconn=mysqli_connect($host,$user,$pwd, $db);
if (!$myconn)
{
echo "Connection to database server failed";
}
else {
	echo "Connection to database server established<br>";
}

$user=$_POST['user'];
$value1=$_POST['value1'];
$value2=$_POST['value2'];

$sumof=$value1+$value2;
echo "Calculator user:".$user."<br>";
echo "number1= ".$value1."<br>";
echo "number2= ".$value2."<br>";
echo "The sum is:".$sumof."<br><br /><br />";

//insert details into database

if (isset($_POST['submit'])) {
	$user = $_POST['user'];
	$value1 = $_POST['value1'];
	$value2 = $_POST['value2'];
	$sumof= $value1 + $value2;

$query="INSERT INTO calculator(user, value1, value2,sumof)
VALUES('$user', '$value1','$value2','$sumof')";

 if (!mysqli_query($myconn, $query)) {
					die("An error occured. Sum Not Received." .$myconn -> error);
				} 
				else
				{
					echo "SUM Calculated.";
				}
			}
			$mysqli -> close();
?>