<?php
	include('menu.php');
?>
<div id="contentthree"><img src="Images/wooden frame.GIF" alt="woodenframe" width="1400" height="570" id="image1"/>
					<img src="Images/wedding 1.PNG" width="1235px" id="image2" height="470px" alt=""/></div>
                    
<div id="aboutus">
  <p1><strong><a name="photography">Photography services</a></strong></p1>
  <br>
  <p2> Here at MK Photo Studio we specialise in Lookbooks (Catalogue) for fashion, corporate portraiture and product photography, as well as food. <br>There are several ways we can help you make the shoot efficient and cost effective. <br>

For a price guide please see <a href="home.php#confee">Booking and Pricing</a><br>

Photography service only, includes:<br>
Studio hire<br>
Equipment hire<br>
In house props<br>
In house studio wardrobe<br>
Backgrounds <br>
Tethered shooting (to 27 inch Mac)<br>
Digital enhancements (on the flow)<br>
Conversion to low res and high res jpegs (for web and print)<br>
Dropbox folder access within 24 hours to all images (pending payment)</p2>
</div>                    

<div id="aboutus">
  <p1><strong><a name="products">Products</a></strong></p1>
  <br>
  <p2> Here we have listed few famous photographs taken by our professional photographers. Please click on <b><u>Buy now</u></b> to place order.</p2>
</div>
<div id="products">
 
<?php


// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);


$db = new PDO('mysql:host=localhost;dbname=mydata;charset=utf8mb4', 'root', '');
try {
    //connect as appropriate as above
	$result = $db->query("SELECT * FROM products");

} catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message

}


while ($a = $result->fetch(/* PDO::FETCH_ASSOC */)) {

	?>
    <div class="items">
    <?php
	echo "<u><b>Product ID</b></u>";
	echo "&nbsp &nbsp";
	echo $a['Product_id'];
	echo "<br>";
	echo "Product Name";
	echo "&nbsp &nbsp";
	echo $a['Product_name'];
	echo "<br>";
	echo "Product Preview";
	echo "<br>";
	?>
	<img src="<?php echo $a['Product_image']?>" height="150" style="border:solid">
	<?php
	
	echo "<br>";
	echo "Price: AUD";
	echo $a['Product_price'];
	echo "<br>";
	echo "&nbsp &nbsp";
	echo $a['Product_des'];
	echo "<br>";

	?>
    	<a href="purchase.php">Buy Now </a>
    <?php
	};
	//mysql_close ($db);
	
	?>
	</div>
 </div>

