
<?php
	include('menu.php');
?>
<div id="contentthree"><img src="Images/wooden frame.GIF" alt="woodenframe" width="1400" height="570" id="image1"/>
					<img src="Images/wedding 1.PNG" width="1235px" id="image2" height="470px" alt=""/></div>
<div id="welcomenote">
  <p1><strong> Thank you</strong></p1>
  <br>
  <p2>We have received your purchase order. One of out staff will contact you shorty.</p2>
</div>

<?php
		
	$customer=$_POST['customer'];
	$proid=$_POST['Product_id'];
	$quantity=$_POST['quantity'];
	$delivery=$_POST['delivery'];
	$address=$_POST['address'];
	$postcode=$_POST['Postcode'];
	$email=$_POST['email'];
	$phn=$_POST['phn'];
	$message=$_POST['message'];
	
$servername = "203.10.47.150";
$username = "S00140169";
$password = "pla5roAN";
$dbname="s00140169";
$table="purchase";
error_reporting(E_ALL & ~E_NOTICE);


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
 


$sql = "INSERT INTO $table (customer, proid, quantity, del_mthod, address, postcode, email, phone, message)
VALUES('$customer', '$proid', '$quantity','$delivery', '$address', '$postcode', '$email','$phn','$message')";

if (mysqli_query($conn, $sql)) {
echo "We have received your details as follows- ";
echo "<br>";
echo "<b>Cusotmer Name:</b>";
echo "$customer&nbsp;";
echo "&nbsp &nbsp ";
echo "<br>";
echo "<b>Product ID</b>:";
echo "$proid&nbsp;";
echo "&nbsp &nbsp ";
echo "<br>";
echo "<b>Quantity:</b>";
echo "$quantity&nbsp;";
echo "&nbsp &nbsp ";
echo "<br>";
echo "<b>Delivery:</b>";
echo "$delivery&nbsp;";
echo "&nbsp &nbsp ";
echo "<br>";
echo "<b>Address:</b>";
echo "$address&nbsp;";
echo "&nbsp &nbsp ";
echo "<br>";
echo "<b>Post code:</b>";
echo "$postcode&nbsp;";
echo "&nbsp &nbsp ";
echo "<br>";
echo "<b>Email:</b>";
echo "$email&nbsp;";
echo "&nbsp &nbsp ";
echo "<br>";
echo "<b>Phone:</b>";
echo "$phn&nbsp;";
echo "&nbsp &nbsp ";
echo "<br>";
echo "<b>Message:</b>";
echo "$message&nbsp;";
echo "&nbsp &nbsp ";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br><br><br><br><br> Please click the back button and refresh the form";
}


if (empty($customer) && empty($proid) && empty($quantity) && empty($delivery)) {
    echo 'Please go back and fill out all mandatory fields';
    return;
}

mysqli_close($conn);
?>

<?php
	include('footer.php')
?>

