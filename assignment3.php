<!DOCTYPE html>
<html>
<head>
<title> Php Forms</title>
</head>
<body align = "center" bgcolor="">
	
<h4>MKU COMPLAINT FORM</h4>

<!--<p><i><b><marquee>Name, ID Number and Year of Birth cannot be changed. Confirm before Submitting.</marquee></b></i></p>-->
<form action="process.php" method="post">
	<!-- Text Area -->
	<label >First Name</label>
	<input type="text" name="fname" placeholder="Enter First Name" required=""></br><br>
	<label for="fname">Last Name</label>
	<input type="text" name="lname" placeholder="Enter Last Name" required></br></br>
	<label >Enter ID Number</label>
	<input type="text" name="identification" placeholder="Enter ID" required><br><br>
    <label for="fname">Enter Year of Birth as per ID</label>
	<input type="text" name="birth" id="birth" placeholder="Enter Year of Birth" required></br></br>

	<!-- Radio Buttons -->
	<label> Gender </label><br>
            <input type="radio" id="male" name="gender" value="Male" required>
            <label for="Male"> Male</label><br>
            <input type="radio" id="female" name="gender" value="Female" required>
            <label for="Female"> Female</label><br><br>


	<!-- Radio buttons -->
	<label> COURSE </label><br>
            <input type="radio" id="male" name="course" value="BBIT" required>
            <label for="Male"> BBIT</label><br>
            <input type="radio" id="female" name="course" value="BIT" required>
            <label for="Female"> BIT </label><br>
            <input type="radio" id="female" name="course" value="BscIT" required>
            <label for="Female"> BscIT </label><br><br>

    
	<!-- Drop down/option -->
	<label for="yos" required>Year of Study</label>
	<select name="yos">
		<option >SELECT</option>
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
		<label>Email Address: <input type="email" name="email" required></label><br><br>
		<label>Phone Number: <input type="text" name="phone" required></label>
	</fieldset>

	<br><br>
	<button type="submit" class="danger" name = "submit">SUBMIT</button>
	<button type="reset">CLEAR DATA</button>
<br><br>	
</form>

&copy; 2021
</body>
</html>