<html>
<head><title>Database Connection</title></head>
<body>
<?php

$host="localhost";
$user="shelton";
$pwd="@gmail.com1";
$db="mku";


$myconn=mysqli_connect($host,$user,$pwd);
if (!$myconn)
{
echo "Connection to database server failed";
}
else {
    echo "Connection to database server established<br>";
}

//select the database
$mydb= mysqli_select_db($myconn,$db);
if (!$mydb)
{
echo "Database not selected";
}
else
echo "Database selected<br>";

if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $identification= $_POST['identification'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $yos = $_POST['yos'];
    $complaint = $_POST['complaint'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = 2021 - $birth;

    $query = "INSERT INTO complaint(fname, lname, identification, gender, age, yos, complaint, email, phone)
                VALUES('$fname', '$lname', '$identification', '$gender', '$age', '$yos', '$complaint', '$email', '$phone')";

                if (!mysqli_query($myconn,$query)) {
                    die ('An error occured. Complaint not Received.');
                }else
                {
                    echo "Complaint Received";
                }
}


?><br /><br />
<h4>Details Received</h4>
First Name:
<?php echo $_POST["fname"];?><br />
Last Name:
<?php echo $_POST["lname"];?><br />
ID Number:
<?php echo $_POST["identification"];?><br />
Year of Birth
<?php echo $_POST["birth"];?><br />
Gender:
<?php echo $_POST["gender"];?><br />
Course:
<?php echo $_POST["course"];?><br />
Year of Study:
<?php echo $_POST["yos"];?><br />
Complaint About:
<?php echo $_POST["about"];?><br />
Complaint:
<?php echo $_POST["complaint"];?><br />
E-Mail Address:
<?php echo $_POST["email"];?><br />
Phone:
<?php echo $_POST["phone"];?><br /><br />


<a href='complaint_display.php'> <button width="2" type="danger">VIEW RECORDS<button></a>

</body>
</html>