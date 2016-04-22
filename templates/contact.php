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

<fieldset>
    <h2>
      Contact us
    </h2>

    <h3>Address</h3>

        43 Windmill Terrace
        <br/>
        Blanchardstown
        <br/>
        Dublin 15
        <br/>

    </p>

    <h3>Telephone</h3>
    <p>
        086 8416265
    </p>

    <h3>Email</h3>
    <p>
        <a href="mailto:B00009712@student.itb.ie">B00009712@student.itb.ie</a>
    </p>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <p><b>Your Name : </b><input type="text" name="name" value="

    <?php if(isset($_POST['name'])) echo $_POST['name'];
            ?>
    " /></p>
        <p><b>Leave a Comment : </b><br />
    <textarea name="Comment" cols="35" rows="5">
        <?php if(isset($_POST['Comment'])) echo $_POST['Comment'];?>
    </textarea>
        <p><input type="submit" name="submit" value="Submit" /></p>
    </form>
</fieldset>
    </body>
    </html>



    <!--<tr>
            <td>Name:  </td>
            <td><input type= "text" size="10" maxlength="25" name="name" value =""></td><br>
        </tr>
        <form method= "post"  action = "index.php?action=submitMessage">
            <tr>
                <td>Phone:  </td>
                <td><input type= "text" size="10" maxlength="25" name="phone" value =""></td><br>
            </tr>
            <tr>
                 <td>Comment:</td>
            </tr>
            <form method= "post"  action = "index.php?action=submitMessage">

                <table>
                <tr>
                    <textarea name ="comment" rows ="5" cols ="20"></textarea>
                    <br>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                    <br>
                </table>-->
        </form>
<br>


<?php
require_once __DIR__ . '/../templates/footer.inc.php';

