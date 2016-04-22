<!DOCtype html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <title>The Egg Cup (The John Egan Memorial Cup)-<?= $pageTitle ?></title>

    <style>
        @import "css/layout.css";
        @import "css/index.css";
    </style>

</head>

<body>

<!--Header-->

<header>
    <div class="column_container">
        <section>
            <img src ="/../images/-golf-emblem.png" alt="emblem">
        </section>

        <section>
            <h1>The Egg Cup
            </h1>
            <img src="/../images/eggCup1.png" alt="golfers">
        </section>

        <section class="image_right">

            <img src="/../images/-golf-emblem.png" alt="emblem">
        </section>

    </div>

        <section class="links">
            <?php
            //----------------------------
            if($isLoggedIn):
                //----------------------------
                ?>
                Logged in as: <strong><?= $username ?></strong>
                <br>
                <a href="index.php?action=logout">(Logout)</a>
                <?php
            //----------------------------
            else:
                //----------------------------
                ?>
                <a href="index.php?action=login">LOGIN</a>
                <?php
                //----------------------------
            endif;
            //----------------------------
            ?>
        </section>

</header>