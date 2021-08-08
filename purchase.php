<?php
	include('menu.php');
?>
<div id="contentthree"><img src="Images/wooden frame.GIF" alt="woodenframe" width="1400" height="570" id="image1"/>
					<img src="Images/wedding3.jpg" width="1235px" id="image2" height="470px" alt=""/></div>
<div id="welcomenote">
  <p1><strong>Please fill out the form below</strong></p1>
  <br>

</div>

<div id="purchaseorderform">
	<table width="650" height="332" border="0" id="tablesix">
    <form method="post" action="formprocesstwo.php" id="formtwo">
<tr>
	<td colspan="2"><p1><a name="confee"><strong>Order Form</strong></a></p1> 
</tr>    
<tr>
  <td width="200" >Customer Name*</td>
  <td width="395"><input type="text" name="customer"></td>
</tr>
<tr>
<td>Please enter Product id*</td>
<td><input type="text" name="Product_id"></td>
</tr>
<tr>
<td>Quantity*</td>
<td><input type="text" name="quantity"></td>
</tr>
<tr>
  <td>Delivery</td>
  <td> Home Delivery<input type="radio" name="delivery" value="homedelivery">
       PickUp: <input type="radio" name="delivery" value="pickup"></td>
</tr>
<tr>
  <td colspan="2">Address</td>
 </tr>
 <tr>
  <td colspan="2"><input size="51" type="text" name="address"></td>
</tr>
  <tr>
  <td>Postcode</td>
  <td><input type="text" name="Postcode"></td>
</tr>
<tr>
<td>Email*</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
 <td>Phone*</td>
 <td><input type="text" name="phn"></td>
</tr>
<tr>
 <td colspan="2">Message</td>
 </tr>
 <tr>
  <td colspan="2"><input size="51" type="text" name="message"></td>
</tr>
<tr>
	<td><input type="submit" value="Submit your form"></td>
    <td><input type="reset" value="Reset your form"></td>
</tr>
</form>
</table> 
</div>



<?php
	include('footer.php')
?>