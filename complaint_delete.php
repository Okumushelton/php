<?php
$host="localhost";
$user="shelton";
$pwd="@gmail.com1";
$db="mku";


$myconn=mysqli_connect($host,$user,$pwd, $db);

$id=$_REQUEST['id'];

if($id!=null)
{
$del=mysqli_query($myconn,"DELETE FROM complaint WHERE id='$id'");
if($del)
{
echo"Record Successfully Deleted!!";
}
else
{
echo"Record Not Deleted!!";
}
}
echo "<br /> <br />";
echo "<a href='complaint_display.php'> Go back to records list</a>";
?>


