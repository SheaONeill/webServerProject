<?php
namespace Itb;
use Itb;
class MainController
{

    //added this from seperate controllers example
    private $loginController;

    public function __construct()
    {
        $this->loginController = new LoginController();
    }
    
    // testing verse list
    public function listAction() {

    $verses = Verse::getAll();
    require_once __DIR__ . '/../templates/list.php';
}
    
    public function  showOneAction()
    {

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $heading = filter_input(INPUT_GET, 'heading', FILTER_SANITIZE_NUMBER_STR);
        $verses = Verse::getAll();

        if (null != $verses) {

            require_once __DIR__ . '/../templates/details.php';
        } else {


            require_once __DIR__ . '/../templates/message.php';
        }

    }//end show functiom



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
        $verse = new Verse();
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

    public function contactFormAction()
    {
        //added this from seperate controllers example
        //$isLoggedIn = $this->loginController->isLoggedInFromSession();
        //$username = $this->loginController->usernameFromSession();

        $numItems = sizeof($_GET);

        $who_to_contact = filter_input(INPUT_POST, 'who_to_contact', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $textArea = filter_input(INPUT_POST, 'textArea', FILTER_SANITIZE_STRING);
        $newsletter = filter_input(INPUT_POST, 'newsletter', FILTER_SANITIZE_STRING);
        $messenger = filter_input(INPUT_POST, '$messenger', FILTER_SANITIZE_STRING);

        //refresh page
        //header('Location: /../templates/thank_you.php');

        $message_heading = 'Thank You for your message';
        $mainMessage = 'Here are the message details:';
        
         //replace the underscore with space and capitalise each word
        $messageDetails_01 = 'Contact: ' . ucwords(str_replace('_',' ',$who_to_contact));
        $messageDetails_02 = 'Your Email: ' . $email;
        $messageDetails_03 = 'Message sent to ' . ucwords(str_replace('_',' ',$who_to_contact)). " : ". $textArea;

        // if subscribed to newsletter then set the variable value
        if (!empty($messageDetails_04)) {
            $messageDetails_04 = 'Newsletter Subscription: ' . $newsletter;
        }
         // if subscribed to messenger then set then variable value
        if (!empty($messageDetails_05)) {
            $messageDetails_05 = 'Messenger Subscription: ' . $messenger;
        }
        require_once __DIR__ . '/../templates/includes/src/message.php';
        
        //$pageTitle = 'Site Map';
        //$site_mapLinkStyle = 'current_page';
        
    }
    /*public function loginAction()
    {
        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        require_once __DIR__ . '/../templates/loginForm.php';
    }*/

}