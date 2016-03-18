<?php
namespace Itb;

class MainController
{
    public function indexAction()
    {
        $pageTitle = 'Welcome';
        $indexLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/index.php';
    }

    public function historyAction()
    {
        $pageTitle = 'History';
        $historyLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/history.php';
    }

    public function newsAction()
    {
        $pageTitle = 'News';
        $newsLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/news.php';
    }

    public function donateAction()
    {
        $pageTitle = 'Donate';
        $donateLinkStyle = 'current_page';

        //$dvdRepository = new DvdRepository();
        //$dvds = $dvdRepository->getAll();

        require_once __DIR__ . '/../templates/donate.php';
    }

    public function contactAction()
    {
        $pageTitle = 'Contact Us';
        $contactLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/contact.php';
    }

    public function obituaryAction()
    {
        $pageTitle = 'Site Map';
        $obituaryLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/obituary.php';
    }

    public function site_mapAction()
    {
        $pageTitle = 'Site Map';
        $site_mapLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/site_map.php';
    }
}