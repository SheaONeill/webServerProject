<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 15/03/2016
 * Time: 14:20
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
if (empty($shopLinkStyle)){
    $shopLinkStyle = '';
}
if (empty($contactLinkStyle)){
    $contactLinkStyle = '';
}
if (empty($obituaryLinkStyle)){
    $obituaryLinkStyle = '';
}
if (empty($site_mapLinkStyle)){
    $site_mapLinkStyle = '';
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

<footer class="the_footer"><!-- begin footer tag and give it an id-->
    <!-- footer_nav -->
    <ul class="footer_list"><!-- begin unordered footer link list opening tag -->
        <li class="footer_item"><a href="../index.php?action=index" class="footer__link">Welcome</a></li><!-- footer link list item -->
        <li class="footer_item"><a href="../history.php?action=history" class="footer__link">History</a></li><!-- footer link list item -->
        <li class="footer_item"><a href="../news.php?action=news" class="footer__link">News</a></li><!-- footer link list item -->
        <li class="footer_item"><a href="../shop.php?action=shop" class="footer__link">Shop</a></li><!-- footer link list item -->
        <li class="footer_item"><a href="../contact.php?action=contact" class="footer__link">Contact Us</a></li><!-- footer link list item -->
        <li class="footer_item"><a href="../obituary.php?action=obituary" target="_blank">Obituary</a></li><!-- footer link list item -->
        <li class="footer_item"><a href="../site_map.php?action=site_map" class="footer__link">Site Map</a></li><!-- footer link list item -->
    </ul><!-- close unordered link list tag -->
    <!-- contact details -->
    <div class="footer_contact_details"><!-- begin div to hold footer contact details -->
        <ul><!-- begin unordered contact details link list -->
            <li>St. Joseph's Parish East Wall</li><!-- list item church name-->
            <li class="line_break"><b>+353 874 2320</b></li><!-- list item phone number-->
            <li>Church Road, East Wall</li><!-- list item address line 1 -->
            <li>Dublin 3. Ireland</li><!-- list item address line 2 -->
            <li><a href="mailto:stjosephsparish1941@gmail.com">stjosephsparish1941@gmail.com</a></li><!-- list item church email -->
        </ul><!-- close unordered contact details link list -->
    </div><!-- close footer contact details holder -->
    <!-- footer logo -->
    <div class="footer_logo"><!-- begin div to hold footer logo -->
        <a href="#"><img alt="" src="/images/logo/christian_fish_cross.png"></a>
    </div><!-- close footer logo holder -->

</footer><!-- close footer tag -->

