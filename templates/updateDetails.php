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

                 <table>
            <tr>
                <td>Name:  </td>
                <td><input type= "text" size="10" maxlength="25" name="name" value =""></td><br>
            </tr>
            <br>
            <tr>
                <td>Handicap</td>
                <td><input type= "text" size="10" maxlength="10" name="handicap"></td><br>
            </tr>
            <br>
                <td>Team Name:</td>
                <td><input type= "text" size="10" maxlength="10" name="teamName"></td><br>
                </tr>
     </table>
                <br>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
                <br>
        </form>



<?php
require_once __DIR__ . '/../templates/footer.inc.php';

