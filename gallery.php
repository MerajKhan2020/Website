
<?php
	include('menu.php');
?>
<div id="contentthree"><img src="Images/wooden frame.GIF" alt="woodenframe" width="1400" height="570" id="image1"/>
					<img src="Images/wedding 1.PNG" width="1235px" id="image2" height="470px" alt=""/></div>
<div id="welcomenote">
  <p1><strong> Welcome to MK Photo Gallery.</strong></p1>
  <br>
  <p2>Here we have listed few of many original works of our photographers. You can order them from our <a href="products.php"><b>Products</b></a> page.</p2>
 </div>
 
 <div id="gallery">
  
  <?php
$folder_path = 'Images/Gallery/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
  {
   ?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="200" id="image7"/></a>
            <?php
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
?>
  
  
  
</div>
<?php
	include('footer.php')
?>

