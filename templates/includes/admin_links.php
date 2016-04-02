<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 01/04/2016
 * Time: 01:10
 */


//-------------------------------------------------
// default style strings to empty, if not set
if (empty($adminNewsLinkStyle)) {
    $adminNewsLinkStyle = '';
}
if (empty($adminVerseLinkStyle)) {
    $adminVerseLinkStyle = '';
}
if (empty($adminDonationLinkStyle)) {
    $adminDonationLinkStyle = '';
}
if (empty($adminUserLinkStyle)) {
    $adminUserLinkStyle = '';
}


?>
<nav><!-- begin navigation -->
    <ul><!-- begin unordered link list opening tag -->
        <li><a href="index.php?action=adminNews" class="<?= $adminNewsLinkStyle ?>"> News</a></li>
        <!-- list item and set current page-->
        <li><a href="index.php?action=adminVerse" class="<?= $adminVerseLinkStyle ?>"> Verse</a></li>
        <!-- list item and set current page-->
        <li><a href="index.php?action=adminDonation" class="<?= $adminDonationLinkStyle ?>"> Donation</a>
        </li><!-- list item and set current page-->
        <li><a href="index.php?action=adminUser" class="<?= $adminUserLinkStyle ?>"> User</a></li>
        <!-- list item and set current page-->
    </ul><!-- close unordered link list tag -->
</nav><!-- close navigation tag -->