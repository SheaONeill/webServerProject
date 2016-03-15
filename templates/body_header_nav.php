<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 15/03/2016
 * Time: 15:10
 */


//-------------------------------------------------
// default style strings to empty, if not set
if (empty($indexLinkStyle)){
    $indexLinkStyle = '';
}
if (empty($historyLinkStyle)){
    $historyLinkStyle = '';
}
if (empty($newsLinkStyle)){
    $newsLinkStyle = '';
}
if (empty($contactLinkStyle)){
    $contactLinkStyle = '';
}
if (empty($donateLinkStyle)){
    $donateLinkStyle = '';
}

/* here is the same logic, using the '?' ternary operator and 'isset()' function
$indexLinkStyle = isset($homeLinkStyle) ? $homeLinkStyle : '';
$aboutLinkStyle = isset($aboutLinkStyle) ? $aboutLinkStyle : '';
$listLinkStyle = isset($listLinkStyle) ? $listLinkStyle : '';
$contactLinkStyle = isset($contactLinkStyle) ? $contactLinkStyle : '';
$sitemapLinkStyle = isset($sitemapLinkStyle) ? $sitemapLinkStyle : '';
*/
//-------------------------------------------------
?>

<nav><!-- begin navigation -->
    <ul><!-- begin unordered link list opening tag -->
        <li><a href="index.php?action=index" class="<?= $indexLinkStyle ?>">Welcome</a></li><!-- list item and set current page-->
        <li><a href="history.php?action=history" class="<?= $historyLinkStyle ?>">History</a></li><!-- list item -->
        <li><a href="news.php?action=news" class="<?= $newsLinkStyle ?>">News</a></li><!-- list item -->
        <li><a href="donate.php?action=donate" class="<?= $donateLinkStyle ?>">Donate</a></li><!-- list item -->
        <li><a href="contact.php?action=contact" class="<?= $contactLinkStyle ?>">Contact</a></li><!-- list item -->
    </ul><!-- close unordered link list tag -->
</nav><!-- close navigation tag -->
