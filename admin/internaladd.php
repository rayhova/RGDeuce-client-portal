<?php

include_once 'header.php';

$pagetitle = "Add Homepage Mockup";


	
?>
<?php if (login_check($mysqli) == true) : ?>
<H2>RGDeuce Client System - Internal Mockup</H2>



<FORM METHOD="POST" ACTION="internaladd.php" enctype="multipart/form-data" id="form" name="form">
<P><B>Client internal design info...</B>

<P><B>Client Name: </B><select NAME="clientname" id="clientname">

<?php  $stmt = "SELECT name FROM clients";
      $result = mysqli_query($conn,$stmt) or die(mysqli_error());
        while(list($clientname) = mysqli_fetch_row($result)){
          $option = '<option value="'.$clientname.'">'.$clientname.'</option>';
          echo ($option);
        }     
										
            ?>
          
</select>
    
<P><B>Internal Description: </B><BR>
<TEXTAREA NAME="internaldesc" COLS=80 ROWS=4><?php print $internaldesc ?></TEXTAREA>
<input id="file" name="file" type="file">



<P><input id="submit" name="submit" type="submit">
</FORM>
<div id="clear"></div>
<div id="preview">
<img id="previewimg" src=""><img id="deleteimg" src="delete.png">
<span class="pre">IMAGE PREVIEW</span>
</div>
<div id="message">
<script>
$(document).ready(function() {
// Function for Preview Image.
$(function() {
$(":file").change(function() {
if (this.files && this.files[0]) {
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$('#message').css("display", "none");
$('#preview').css("display", "block");
$('#previewimg').attr('src', e.target.result);
};
// Function for Deleting Preview Image.
$("#deleteimg").click(function() {
$('#preview').css("display", "none");
$('#file').val("");
});
// Function for Displaying Details of Uploaded Image.
$("#submit").click(function() {
$('#preview').css("display", "none");
$('#message').css("display", "block");
});
});
</script>

<?php include 'uploadiphp.php';?>
<?php
include 'dbdisconnect.php';
?>
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
</body></html>