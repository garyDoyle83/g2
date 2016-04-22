<?php
require_once __DIR__ . '/../templates/header.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';

use Itb\Player;

//-------------------------------------------
?>
    <h2>Players</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Handicap</th>
            <th>Team Name</th>
            <th>Image file</th>
        </tr>

        <?php
        foreach($players as $player){
            ?>
            <tr>
                <td><?= $player->getName() ?></td>
                <td><?= $player->getHandicap() ?></td>
                <td><?= $player->getTeamName() ?></td>
             <!-- <td><?/*= $player->getFile()*/?> </td>-->
                <td>
                   <form action="index.php" method="get">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?= $player->getId()?>">
                    <input type="submit"  value="delete"></form>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
<?php
//-------------------------------------------
require_once __DIR__ . '/../templates/footer.inc.php';