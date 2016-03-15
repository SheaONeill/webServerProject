<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 15/03/2016
 * Time: 16:18
 */

namespace ItbProject2016;

class MainController
{

    function historyAction()
    {
        $pageTitle = 'History';
        $historyLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/history.php';
    }

    function newsAction()
    {
        $pageTitle = 'News';
        $newsLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/news.php';
    }

    function donateAction()
    {
        $pageTitle = 'Donate';
        $donateLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/donate.php';
    }

    function indexAction()
    {
        $pageTitle = 'Home Page';
        $indexLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/index.php';
    }

    function contactAction()
    {
        $pageTitle = 'Contact';
        $contactLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/contact.php';
    }

    function sitemapAction()
    {
        $pageTitle = 'Site Map';
        $sitemapLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/site_map.php';
    }

}//end class