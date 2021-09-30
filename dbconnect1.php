<?php
$host="localhost";
$user="root";
$pwd="";
$db="jumia";

$myconn=mysqli_connect($host,$user,$pwd);
if(!$myconn)
{
echo "Connection to database  server failed";
}
else
echo "Connection to database server established<br>";

//select the database
$mydb= mysqli_select_db($myconn,$db);
if(!$mydb)
{
echo "Database not selected";
}
else
echo "Database  selected<br>";


?>
