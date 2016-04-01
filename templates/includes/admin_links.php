<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 01/04/2016
 * Time: 01:10
 */


//-------------------------------------------------
// default style strings to empty, if not set
if (empty($adminEditNewsLinkStyle)) {
    $adminEditNewsLinkStyle = '';
}
if (empty($adminEditVerseLinkStyle)) {
    $adminEditVerseLinkStyle = '';
}
if (empty($adminEditDonationLinkStyle)) {
    $adminEditDonationLinkStyle = '';
}
if (empty($adminEditUserLinkStyle)) {
    $adminEditUserLinkStyle = '';
}


?>
<nav><!-- begin navigation -->
    <ul><!-- begin unordered link list opening tag -->
        <li><a href="/index.php?action=adminEditNews" class="<?= $adminEditNewsLinkStyle ?>">Edit News</a></li>
        <!-- list item and set current page-->
        <li><a href="/index.php?action=adminEditVerse" class="<?= $adminEditVerseLinkStyle ?>">Edit Verse</a></li>
        <!-- list item and set current page-->
        <li><a href="/index.php?action=adminEditDonation" class="<?= $adminEditDonationLinkStyle ?>">Edit Donation</a>
        </li><!-- list item and set current page-->
        <li><a href="/index.php?action=adminEditUser" class="<?= $adminEditUserLinkStyle ?>">Edit User</a></li>
        <!-- list item and set current page-->
    </ul><!-- close unordered link list tag -->
</nav><!-- close navigation tag -->