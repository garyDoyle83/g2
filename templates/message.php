<?php
require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';
//require_once '_header.php';
?>
    <div class = "column_container">
        <section class="site_text">
            <h1>ERROR - Something Went Wrong. <?= $message ?></h1>
        </section>
    </div>

<?php
require_once __DIR__ . '/../templates/footer.inc.php';