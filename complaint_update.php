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

$id=$_REQUEST['id'];
$result=mysqli_query($myconn,"SELECT * FROM complaint where id='$id'"); // select records from DB table complaint
$row = mysqli_fetch_array($result);

if($row)
{
$fname=$row['fname'];
$lname=$row['lname'];
$identification=$row['identification'];
$gender=$row['gender'];
$birth =$row['birth'];
$yos=$row['yos'];
$complaint=$row['complaint'];
$email=$row['email'];
$phone=$row['phone'];
$age = 2021 - $birth;
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Php Forms</title>
</head>
<body align = "center" bgcolor="">
	
<h4>MKU COMPLAINT UPDATE FORM</h4>

<form action="complaint1_update.php" method="post" name="updateform">
	<!-- Text Area -->
	<input type="hidden" name='id' value="<?php echo $id ?>">
	<label >First Name</label>
	<input type="text" name="fname" value="<?php echo $fname?>" readonly placeholder="Enter First Name"></br><br>
	<label for="fname">Last Name</label>
	<input type="text" name="lname" value="<?php echo $lname?>" readonly placeholder="Enter Last Name" ></br></br>
	<label >Enter ID Number</label>
	<input type="text" name="identification" value="<?php echo $identification ?>" readonly placeholder="Enter ID" required><br><br>
    <label for="fname">Enter Year of Birth as per ID</label>
	<input type="text" name="birth" id="birth" value="<?php echo $birth ?>"placeholder="Enter Year of Birth" readonly required></br></br>

	<!-- Radio Buttons -->
	<label> Gender </label><br>
            <input type="radio" id="male" name="gender" value="Male" required>
            <label for="Male"> Male</label><br>
            <input type="radio" id="female" name="gender" value="Female" required>
            <label for="Female"> Female</label><br><br>


	<!-- Radio buttons -->
	<label> COURSE </label><br>
            <input type="radio" id="male" name="course" value="<?php echo $course ?>" required>
            <label for="Male"> BBIT</label><br>
            <input type="radio" id="female" name="course" value="<?php echo $course ?>" required>
            <label for="Female"> BIT </label><br>
            <input type="radio" id="female" name="course" value="<?php echo $course ?>" required>
            <label for="Female"> BscIT </label><br><br>

    
	<!-- Drop down/option -->
	<label for="yos" required>Year of Study</label>
	<select name="yos">
		<option selected="selected"><?php echo $yos?></option>
		<option  name="yos">First Year Sem 1</option>
		<option  name="yos">First Year Sem 2</option>
		<option  name="yos">Second Year Sem 1</option>
		<option  name="yos">Second Year Sem 2</option>
		<option  name="yos">Third Year Sem 1</option>
		<option  name="yos">Third Year Sem 2</option>
		<option  name="yos">Fourth Year Sem 1</option>
		<option  name="yos">Fourth Year Sem 2</option>
	</select><br><br>

    <!-- Check boxes -->
    <label> <b>Copmplaint About</b></label><small><i> Select one</i></small><br>
            <input type="checkbox" id="security" name="about" value="SECURITY">
            <label for="Male"> SECURITY</label><br>
            <input type="checkbox" id="teachers" name="about" value="TEACHERS">
            <label for="Female"> TEACHERS </label><br>
            <input type="checkbox" id="fees" name="about" value="FEES">
            <label for="Female"> FEES </label><br><br>


	<label for="feedback">Complaint</label>
	<textarea rows="5" cols="40" name="complaint" id="complaint"></textarea><br><br>

	


	<fieldset>
		<legend>Contact Details</legend>
		<label>Email Address: <input type="email" name="email" required value="<?php echo $email ?>"></label><br><br>
		<label>Phone Number: <input type="text" name="phone" required value="<?php echo $phone ?>"></label>
	</fieldset>

	<br><br>
	<button type="submit"  name = "submit">UPDATE</button>
	<button type="reset">RESET</button>
<br><br>	
</form>
&copy; <b>2021.</b>
</body>
</html>