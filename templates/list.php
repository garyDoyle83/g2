<?php
require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';

//-------------------------------------------
?>

    <!-- start table for displaying DVD details -->
    <h2>Lists of golfers , teams and handicaps</h2>

    <table>
        <tr>
            <th> ID </th>
            <th> Name </th>
            <th> Handicap </th>
            <th> Team Name </th>

        </tr>

        <!-- ********************* HTML for golf items ****************** -->
        <!--
            //   	0 - 15 - 40 - 55 - 70 - 85 - 100 %age
            // 	      .5   1    2    3    4    5     stars
        -->

        <?php
        foreach($golfs as $golf) {
            ?>

            <tr>
                <td><?= $golf->getId() ?></td>
                <td><?= $golf->getName() ?></td>
                <td><?= $golf->getHandicap() ?></td>
                <td><?= $golf->getTeamName() ?></td>


            </tr>

            <?php
        }
        ?>

    </table>
    <section class="image_right">
    <img src="/../images/eggCup7.jpg" alt="golfers">
        </section>
<?php
//-------------------------------------------
require_once __DIR__ . '/../templates/footer.inc.php';

//  don't close the PHP tags