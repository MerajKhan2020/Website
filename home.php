<?php
	include('menu.php');
?>
<div id="contentthree"><img src="Images/Wood.GIF" alt="woodenframe" width="1400" height="570" id="image1"/>
					<img src="Images/wedding3.jpg" width="1235px" id="image2" height="470px" alt=""/></div>
<div id="whyuseus">
  <p1><strong>Why use MK Studio</strong></p1>
  <br>
  <p2>We believe that high-end fashion photography shouldn’t be exclusive to high-end fashion models. Founded in 2007, MK Photo Studio blurs the line between editorial fashion photography and personal portraiture. Located in heart of Sydney CBD, our studio’s offer people the chance to step out of their comfort zones and spend a day playing adult dress-ups with the professionals.
Ultimately our mission is to help people to see beauty in themselves while creating wonderful works of art that will be passed down through generations.
</strong></p2>
</div>

<div id="conbook">
	<table width="691" height="332" border="0" id="tablesix">
    <form method="post" action="formprocessone.php" id="formone">
<tr>
	<td colspan="2"><p1><a name="confee"><b>Contact &amp; Feedback</b></a></p1> 
</tr>    
<tr>
  <td width="282" >Customer Name:</td>
  <td width="399"><input type="text" name="customer"></td>
</tr>
<tr>
  <td><b>Choose one:</b></td>
  <td> 
  	<select name="services">
  	<optgroup label="services">
	<option value="Photography">Photography Services</option>
	<option value="Studio Hire">Studio Hire</option>
	<option value="Courses">Courses</option>
	<option value="Photo Enhancement">Photo Enhancement</option>
	</optgroup>
	</select>
  </td>  
</tr>
<tr>
  <td>Prefered Contact Method</td>
  <td> Email <input type="radio" name="contact" value="Email">
       Phone <input type="radio" name="contact" value="Phone"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
 <td>Phone</td>
 <td><input type="text" name="phn"></td>
</tr>
<tr>
 <td colspan="2">Message</td>
 </tr>
 <tr>
  <td colspan="2"><input size="59" type="text" name="message"></td>
</tr>
<tr>
	<td><input type="submit" value="Submit your form"></td>
    <td><input type="reset" value="Reset your form"></td>
</tr>
</form>
</table> 
</div>



<div id="boopri">
 	<p1><a name="boopri"><strong>Booking &amp; Pricing</strong></a></p1>
    <br>
    <p2>Our services offer a very competitive price. Prices are listed below – 
    <br>
Photography Services: Single session with 15 photos - $235.00<br>
Studio Hire: Single Session Studio hire per hour - $199.00<br>
Courses: Beginners Photography lesson - Enquire within.<br>
Photo Enhancement: Bring your old photo to the studio for enhancement. The cost ranges from $25 to $55 case to case basis.  
Please use the form above for booking. 
</p2>
</div>

<?php
	include('footer.php')
?>