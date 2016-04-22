<?php

require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 09/03/2016
 * Time: 15:33
 */
?>

    <form method= "post"  action = "index.php?action=processNewMember">
        <fieldset>
            <legend>Register for Tournament</legend>
            <p>*Indicates required field</span></p>
            <p>Please leave your contact details on our Contact page <a href="index.php?action=contact">Contact</a> </p>

            <table>
                <tr>
                    <td>*Name:  </td>
                    <td><input type= "text" size="10" maxlength="25" name="name" value ="" required></td><br>
                </tr>
                <br>
                <tr>
                    <td>*Handicap:</td>
                    <td><input type= "text" size="10" maxlength="10" name="handicap" required></td><br>
                </tr>
                <br>
                <td>*Team Name:</td>
                <td><input type= "text" size="10" maxlength="10" name="teamName" required></td><br>
                </tr>
                <td>Upload:</td>
                <td><input type= "file"  name="upload" ></td><br>
                </tr>
            </table>
            <br>
            <input type="submit" value="Submit" >
            <input type="reset" value="Reset">
            <br>
    </form>

<?php
/*
$file_exts = array("jpg", "bmp", "jpeg", "gif", "png");

$upload_exts = end(explode(".", $_FILES["file"]["name"]));

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))

&& ($_FILES["file"]["size"] < 2000000)
&& in_array($upload_exts, $file_exts))

{
if ($_FILES["file"]["error"] > 0) {
echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
} else {

echo "Upload: " . $_FILES["file"]["name"] . "<br>";
echo "Type: " . $_FILES["file"]["type"] . "<br>";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

// Enter your path to upload file here

if (file_exists("c:laragon.www.upload/newupload/" .

$_FILES["file"]["name"]))

{

echo "<div class='error'>"."(".$_FILES["file"]["name"].")".

" already exists. "."</div>";

} else {
move_uploaded_file($_FILES["file"]["tmp_name"],

"c:\wamp\www\upload/newupload/" . $_FILES["file"]["name"]);

echo "<div class='sucess'>"."Stored in: " .

"c:\wamp\www\upload/newupload/" . $_FILES["file"]["name"]."</div>";

}

}
} else
{

echo "<div class='error'>Invalid file</div>";
}

*/?>





<?php
require_once __DIR__ . '/../templates/footer.inc.php';

