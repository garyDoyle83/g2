<?php

require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';



/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 13/04/2016
 * Time: 11:37
 */

class submitMessage {

}
?>



<p><?php if (isset($message)) echo $message?></p>
    <p><?php if (isset($message1)) echo $message1?></p>
    <p><?php if (isset($message2)) echo $message2?></p>
    <p><?php if (isset($message3)) echo $message3?></p>
    <p><?php if (isset($message4)) echo $message4?></p>
    <p><?php if (isset($message5)) echo $message5?></p>

<?php


require_once __DIR__ . '/../templates/submitMessage.php';



?>