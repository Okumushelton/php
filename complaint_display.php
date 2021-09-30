<?php
$host="localhost";
$user="shelton";
$pwd="@gmail.com1";
$db="mku";


$myconn=mysqli_connect($host,$user,$pwd, $db);// Connecting t the Database

//Retreiving records from the database and display in results web page
$result=mysqli_query($myconn,"SELECT * FROM complaint");

//Create table headers
echo "<table border=1px cellpadding= 4>";
echo "<tr>";
echo "<td><b> ID </td>";
echo "<td><b> First Name </td>";
echo "<td><b> Last Name</td>";
echo "<td><b> ID Number</td>";
echo "<td><b> Gender</td>";
echo "<td><b> Age</td>";
echo "<td><b> Year of Study</td>";
echo "<td><b> Complaint</td>";
echo "<td><b> E-Mail</td>";
echo "<td><b> Phone</td>";
echo "<td><b> Delete</td>";
echo "<td><b>Update</td>";
echo "</tr>";

// fetch and loop the records
while($row = mysqli_fetch_array($result)) // fetch the row values
{
$id=$row['id'];
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['lname']."</td>";
echo "<td>".$row['identification']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>".$row['yos']."</td>";
echo "<td>".$row['complaint']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['phone']."</td>";
echo"<td><a href='complaint_delete.php?id=$id'>Delete record</a></td>";// create link to delete.php  file
echo"<td><a href='complaint_update.php?id=$id'>update record</a></td>";
}
echo "</table>";
?> 
<p align="center"><a href='assignment3.php'><b><i>HOME</i></b></a></p>
<p align ="center">&copy; <b>2021</b></p>