<?php
//require_once '_header.php';
require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';

if (isset($_SESSION['counter'])) {

    $_SESSION['counter'] += 1;
}else{
    $_SESSION['counter'] = 1;
}

$message = 'You have visited this page ' . $_SESSION['counter'] . ' times';


?>

    <div class = "column_container">
         <section class="site_text">
            <h1><?= $username ?>, You Have Sucessfully Logged In To The System.</h1>
        </section>
    </div>

<?php

echo $message;


require_once __DIR__ . '/../templates/footer.inc.php';

?>