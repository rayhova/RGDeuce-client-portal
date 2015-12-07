<?php

include_once 'header.php';

$pagetitle = "Add Homepage Mockup";

?>
 <?php if (login_check($mysqli) == true) : ?>
Client Name:<input type="text" id="name" /><br/>
Client UserName:<input type="text" id="username"  /><br/>
Client Password:<input type="text" name="password" id="password"/><br/>
User Role: <select name="role" id="role">
<option value="Client">Client</option>
<option value="Admin">Admin</option>
</select><br />
<INPUT TYPE="button" id="submit" VALUE="Submit" >

<script>


$(document).ready(function(){
$("#submit").click(function(){
var name = $("#name").val();
var username = $("#username").val();
var password = $("#password").val();
var role = $("#role").val();
var p = hex_sha512(password);

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + '&username1='+ username + '&p1='+ p + "&role1=" + role ;
if(name==''||username==''||p==''||role=='')

{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxclientadd.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});
</script>
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
</body>
</html>