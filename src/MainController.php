<?php
namespace Itb;

class MainController
{

    //added this from seperate controllers example
    private $loginController;

    public function __construct()
    {
        $this->loginController = new LoginController();
    }




    public function indexAction()
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $pageTitle = 'Welcome';
        $indexLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/index.php';
    }

    public function historyAction()
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $pageTitle = 'History';
        $historyLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/history.php';
    }

    public function newsAction()
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $pageTitle = 'News';
        $newsLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/news.php';
    }

    public function donateAction()
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $pageTitle = 'Donate';
        $donateLinkStyle = 'current_page';

        //$dvdRepository = new DvdRepository();
        //$dvds = $dvdRepository->getAll();

        require_once __DIR__ . '/../templates/donate.php';
    }

    public function contactAction()
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $pageTitle = 'Contact Us';
        $contactLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/contact.php';
    }

    public function obituaryAction()
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $pageTitle = 'Site Map';
        $obituaryLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/obituary.php';
    }

    public function site_mapAction()
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $pageTitle = 'Site Map';
        $site_mapLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/site_map.php';
    }


    public function loginAction()
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        require_once __DIR__ . '/../templates/loginForm.php';
    }

}