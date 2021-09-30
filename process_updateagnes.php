<body>
<h2> Customer Booking Details</h2>
<?php
require_once('bookingdb.php');
//receive data from form and assign to variables
$id=$_POST['id'];


$lname=$_POST['lastname'];
$guests=$_POST['guests'];
$nights=$_POST['nights'];
$room=$_POST['room'];
$checkin=$_POST['checkin'];
$timein=$_POST['timein'];
$guests=$_POST['guests'];
$nights=$_POST['nights'];
$meals=$_POST['meals'];
$room=$_POST['room'];
$total=$_POST['charges'];
$checkbox1=$_POST['food'];



//print  the details
echo "Customer name : ".$lname."<br>";
echo "Check in Date : ".$checkin."<br>";
echo "Check in time : ".$timein."<br>";
echo "Room Requested : ".$room."<br>";
echo "Number of meals : ".$meals."<br>";
if(!empty($_POST['food']))
{
// Loop to store and display values of individual checked checkbox.
foreach($_POST['food'] as $selected)
{
echo "Meals selected; " .$selected."<br>";
}
}

$chk="";
foreach ($checkbox1 as $chk1)
{
	$chk .=$chk1.",";
}
echo "Number of Guests : ".$guests."<br>";
echo "Nights Requested : ".$nights."<br>";

//calculate total charges
$total=($guests*$nights*3000)+($guests*$nights*$meals*500);


echo "Total Charges =	".$total."<br><br>";



//UPDATE data into table
$update="UPDATE booking SET guests='$guests', nights='$nights', room='$room',
        charges='$total',checkin='$checkin',timein='$timein',meals='$meals',selected='$chk' WHERE id='$id' ";
 

if(!mysqli_query($myconn,$update))
{
echo "Record not updated. Try Again";
}
else
echo"Recorded updated successfully!";
?>

</body>



