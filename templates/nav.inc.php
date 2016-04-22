<?php
//-------------------------------------------------
// default style strings to empty, if not set
if (empty($indexLinkStyle)){
    $indexLinkStyle = '';
}
if (empty($membershipLinkStyle)){
    $membershipLinkStyle = '';
}

if (empty($playerLinkStyle)){
    $playerLinkStyle = '';
}
if (empty($contactLinkStyle)){
    $contactLinkStyle = '';
}
if (empty($listLinkStyle)){
    $listLinkStyle = '';
}
if (empty($sitemapLinkStyle)){
    $sitemapLinkStyle = '';
}

/* here is the same logic, using the '?' ternary operator and 'isset()' function
$indexLinkStyle = isset($homeLinkStyle) ? $homeLinkStyle : '';
$aboutLinkStyle = isset($aboutLinkStyle) ? $aboutLinkStyle : '';
$contactLinkStyle = isset($contactLinkStyle) ? $contactLinkStyle : '';
$sitemapLinkStyle = isset($sitemapLinkStyle) ? $sitemapLinkStyle : '';
*/
//-------------------------------------------------
?>
<?php
if($isLoggedIn):
?>
<nav>
    <ul>
        <li>
            <a href="index.php?action=index" class="<?= $indexLinkStyle ?>">Home</a>
        </li>

        <li>
            <a href="index.php?action=player" class="<?= $playerLinkStyle ?>">Players</a>
        </li>

        <li>
            <a href ="index.php?action=list" class="<?= $listLinkStyle ?>" > Golf Times</a>
        </li>

        <li>
            <a href="index.php?action=sitemap" class="<?= $sitemapLinkStyle ?>">Sitemap</a>
        </li>
    </ul>
</nav>
<?php
else:
?>

            <nav>
                <ul>
                    <li>
                        <a href="index.php?action=index" class="<?= $indexLinkStyle ?>">Home</a>
                    </li>

                    <li>
                        <a href="index.php?action=membership" class="<?= $membershipLinkStyle ?>">Register</a>
                    </li>

                    <li>
                        <a href="index.php?action=contact" class="<?= $contactLinkStyle ?>">Contact</a>
                    </li>
                    <li>
                        <a href ="index.php?action=list" class="<?= $listLinkStyle ?>" > Golf Times</a>
                    </li>
                    <li>
                        <a href="index.php?action=sitemap" class="<?= $sitemapLinkStyle ?>">Sitemap</a>
                    </li>

                </ul>
            </nav>

    </nav>
<?php
endif;
?>
