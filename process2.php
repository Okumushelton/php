<body>
<h2> Customer order details</h2>
<?php
$host="localhost";
$user="shelton";
$pwd="@gmail.com1";
$db="mku";


$myconn=mysqli_connect($host,$user,$pwd, $db);// Database connection

//receive data from form and assign to variables
$customer=$_POST['customer'];
$product=$_POST['product'];
$qty=$_POST['quantity'];
$price=$_POST['price'];

//calculate total order cost
$totalcost=$qty*$price;

//print  the details
echo "Customer name : ".$customer."<br>";
echo "Product name : ".$product."<br>";
echo "Quantity ordered : ".$qty."<br>";
echo "Unit price : ".$price."<br>";
echo "Total Cost : ".$totalcost."<br>";


//insert details into database
$insert="INSERT INTO orders(customer,product,quantity,price,total)
     values('$customer','$product','$qty','$price','$totalcost')";

if(mysqli_query($myconn,$insert))
{
echo "Record added successfully<br>";
}
else
echo "Failed. Try again<br>";


?>
<br />
<a href='display.php'> <button width="2" type="danger">VIEW RECORDS<button></a>

</body>



