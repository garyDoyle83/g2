<?php
//--------------------------------
require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';
//require_once '_header.php';
//--------------------------------
?>



    <form action="index.php?action=processLogin" method="post"" class="form_member">
        <h1>Log-on</h1>
        <fieldset>
            <!--information-->
            <table>
                <tr>
                    <td class="form_border">Username:</td>
                    <td><input type="text" name = "username"  required placeholder="Enter your username" autofocus></td>
                </tr>
                <tr>
                    <td class="form_border">Password:</td>
                    <td><input type="password" name="password" required placeholder="Enter your Password"></td>
                </tr>
            </table>
        </fieldset>
        <!--submet/reset buttons-->
        <div class="buttons">
            <input type="submit" value="Login">
            <input type="reset" value="Reset">
        </div>
    </form>


<?php

require_once __DIR__ . '/../templates/footer.inc.php';