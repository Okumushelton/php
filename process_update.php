<body>
<h2> Customer order details</h2>
<?php
$host="localhost";
$user="shelton";
$pwd="@gmail.com1";
$db="mku";


$myconn=mysqli_connect($host,$user,$pwd, $db);

//receive data from form and assign to variables
$id=$_POST['id'];
$customer=$_POST['name'];
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




//UPDATE data into table
$update="UPDATE orders SET product='$product', quantity='$qty', price='$price',total='$totalcost' WHERE id='$id' ";
 

if(!mysqli_query($myconn,$update))
{
echo "Record not updated. Try Again";
}
else
echo"Recorded updated successfully!";
?>

</body>



