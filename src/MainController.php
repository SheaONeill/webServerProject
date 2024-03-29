<?php
namespace StJosephsChurchEastWall;

use StJosephsChurchEastWall;

class MainController
{

    private $loginController;

    //------------testing----------------

    public function __construct()
    {
        $this->loginController = new LoginController();
    }
    
    public function indexAction()
    {
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
        $verse = new Verse();
        $pageTitle = 'News';
        $newsLinkStyle = 'current_page';
        require_once __DIR__ . '/../templates/news.php';
    }

    public function shopAction()
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $pageTitle = 'Shop';
        $shopLinkStyle = 'current_page';
     
        require_once __DIR__ . '/../templates/shop.php';
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

    public function obituaryAction($twig)
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();


        $obituaryRepository = new ObituaryRepository();
        $obituarys = $obituaryRepository->getAll();

        $argsArray = [
            'obituarys' => $obituarys,
        ];

        $templateName = 'obituary';
        print $twig->render($templateName . '.twig', $argsArray);

        $pageTitle = 'Site Map';
        $obituaryLinkStyle = 'current_page';
        /* require_once __DIR__ . '/../templates/obituary.php';*/
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

    public function contactFormAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $numItems = sizeof($_GET);

        $who_to_contact = filter_input(INPUT_POST, 'who_to_contact', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $textArea = filter_input(INPUT_POST, 'textArea', FILTER_SANITIZE_STRING);
        $newsletter = filter_input(INPUT_POST, 'newsletter', FILTER_SANITIZE_STRING);
        $messenger = filter_input(INPUT_POST, 'messenger', FILTER_SANITIZE_STRING);

        $message_heading = 'Thank You for your message';
        $mainMessage = 'Here are the message details:';
        
         //replace the underscore with space and capitalise each word
        $messageDetails_01 = 'Contact: ' . ucwords(str_replace('_', ' ', $who_to_contact));
        $messageDetails_02 = 'Your Email: ' . $email;
        $messageDetails_03 = 'Message sent to ' . ucwords(str_replace('_', ' ', $who_to_contact)). " : ". $textArea;

        // if subscribed to newsletter then set the variable value
        if (!empty($newsletter)) {
            $messageDetails_04 = 'Newsletter Subscription: Subscribed';
        }
         // if subscribed to messenger then set then variable value
        if (!empty($messenger)) {
            $messageDetails_05 = 'Messenger Subscription: Subscribed';
        }
        require_once __DIR__ . '/../templates/includes/src/message.php';
    }//end contact form action

    //testing list newsfeeds
}//end class MainController

