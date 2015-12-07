<?php
$clientname = $_POST['clientname'];
$clientname = preg_replace("/[^a-zA-Z]+/", "", $clientname);

if (isset($_POST['submit'])) {

    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);

    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
            ) && ($_FILES["file"]["size"] < 500000)//Approx. 500kb files can be uploaded.
            && in_array($file_extension, $validextensions)) {

        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        } else {
            
            echo "<span>Your File Uploaded Succesfully...!!</span><br/>";
            echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
            echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
            echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
// Create directory if it does not exist

$uploadpath = "mockups/".$clientname."/logos/";

if(!is_dir($uploadpath)) {
    mkdir($uploadpath, 0755, true);
}

            if (file_exists($uploadpath . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " <b>already exists.</b> ";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $uploadpath . $_FILES["file"]["name"]);
                $imgFullpath = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. $uploadpath . $_FILES["file"]["name"];
				echo "<b>Stored in:</b><a href = '$imgFullpath' target='_blank'> " .$imgFullpath.'<a>';

            }
        
        }
    } else {
        echo "<span>***Invalid file Size or Type***<span>";
    }
}

if(empty($imgFullpath))
{
    $msg = "need an image";
    header("Location: logoadd.php ");
}

mysqli_query($conn, "INSERT INTO logos (clientname, image, date, description) VALUES ('$_POST[clientname]','$imgFullpath',now() ,'$_POST[logodesc]')" );


	
?>