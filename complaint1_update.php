<body>
<h2> Complaint Details</h2>
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
$mydb=mysqli_select_db($myconn,$db);
if(!$mydb)
{
	echo "database not selected<br>";
}
else {
    echo "database selected<br><br>";
}
//receive data from form and assign to variables
$id=$_POST['id'];
$fname=$_POST['lname'];
$lname=$_POST['fname'];
$identification=$_POST['identification'];
$gender=$_POST['gender'];
$birth =$_POST['birth'];
$yos=$_POST['yos'];
$complaint=$_POST['complaint'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$age = 2021 - $birth;

//print  the details
echo "First Name : ".$fname."<br>";
echo "Last Name : ".$lname."<br>";
echo "ID : ".$identification."<br>";
echo "Gender : ".$gender."<br>";
echo "Year of Birth : ".$birth."<br>";
echo "Yeaor of Study : ".$yos."<br>";
echo "Complaint : ".$complaint."<br>";
echo "E-Mail : ".$email."<br>";
echo "Phone : ".$phone."<br>";


//UPDATE data into table
$update="UPDATE complaint SET fname='$fname', lname='$lname', identification='$identification',
        gender='$gender', yos='$yos',complaint='$complaint',email='$email', phone='$phone' WHERE id='$id' ";


if(!mysqli_query($myconn,$update))
{
echo "Record not updated. Try Again";
}
else
echo"Recorded updated successfully!";
?>
<p align="center"><a href='complaint_display.php'><b><i>VIEW CHANGES</i></b></a></p>
</body>


