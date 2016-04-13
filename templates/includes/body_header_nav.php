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
if (empty($shopLinkStyle)){
    $shopLinkStyle = '';
}

?>

<nav><!-- begin navigation -->
    <ul><!-- begin unordered link list opening tag -->
        <li><a href="..index.php?action=index" class="<?= $indexLinkStyle ?>">Welcome</a></li>
        <!-- list item and set current page-->
        <li><a href="../history.php?action=history" class="<?= $historyLinkStyle ?>">History</a></li>
        <!-- list item and set current page-->
        <li><a href="../news.php?action=news" class="<?= $newsLinkStyle ?>">News</a></li>
        <!-- list item and set current page-->
        <li><a href="../shop.php?action=shop" class="<?= $shopLinkStyle ?>">Shop</a></li>
        <!-- list item and set current page-->
        <li><a href="../contact.php?action=contact" class="<?= $contactLinkStyle ?>">Contact</a></li>
        <!-- list item and set current page-->
    </ul><!-- close unordered link list tag -->
</nav><!-- close navigation tag -->
