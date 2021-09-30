<?php
$host="localhost";
$user="shelton";
$pwd="@gmail.com1";
$db="mku";


$myconn=mysqli_connect($host,$user,$pwd, $db);// Connecting t the Database

//Retreiving records from the database and display in results web page
$result=mysqli_query($myconn,"SELECT * FROM orders");

//Create table headers
echo "<table border=1px cellpadding= 4>";
echo "<tr>";
echo "<td> ID</td>";
echo "<td>Customer Name </td>";
echo "<td>Product</td>";
echo "<td>Qauntity</td>";
echo "<td>Price</td>";
echo "<td>Total</td>";
echo "<td> Delete</td>";
echo "<td>Update</td>";
echo "</tr>";

// fetch and loop the records
while($row = mysqli_fetch_array($result)) // fetch the row values
{
$id=$row['id'];
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['customer']."</td>";
echo "<td>".$row['product']."</td>";
echo "<td>".$row['quantity']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td>".$row['total']."</td>";
echo"<td><a href='delete.php?id=$id'>Delete record</a></td>";// create link to delete.php  file
echo"<td><a href='orderform_update.php?id=$id'>update record</a></td>";
}
echo "</table>";
?> 
<p align="center"><a href='orderform.html'><b><i>Go back to order</i></b></a></p>