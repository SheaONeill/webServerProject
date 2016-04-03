<?php
namespace Itb;

/**
 * Class AdminController
 *
 * this class is responsible handling all the requests for the admin section
 * @package Itb
 */
class AdminController
{
    /**
     * this is the variable for the login controller
     * @var LoginController
     */
    private $loginController;

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->loginController = new LoginController();
    }

    /**
     * this function checks to see if the user is logged in
     * and sets the title and link styles and then imports
     * the verse page for admin editing actions
     * if false it returns an error message
     */
    public function adminVerseAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn){
            $username = $this->loginController->usernameFromSession();
            $pageTitle = ' Verse';
            $adminVerseLinkStyle = 'current_page';
            require_once __DIR__ . '/../templates/admin/adminVerse.php';
        } else {

            $message_heading = "--------------------------------------------------------------";
            $mainMessage = 'UNAUTHORIZED ACCESS AREA 2).';
            require_once __DIR__ . '/../templates/includes/src/message.php';
        }
    }//end admin verse function

    /**
     * this function checks to see if the user is logged in
     * and sets the title and link styles and then imports
     * the donations page for admin editing actions
     * if false it returns an error message
     */
    public function adminDonationAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn) {
            $username = $this->loginController->usernameFromSession();
            $pageTitle = ' Donation';
            $adminDonationLinkStyle = 'current_page';
            require_once __DIR__ . '/../templates/admin/adminDonation.php';
        } else {

            $message_heading = "--------------------------------------------------------------";
            $mainMessage = 'UNAUTHORIZED ACCESS AREA 3).';
            require_once __DIR__ . '/../templates/includes/src/message.php';
        }
    }//end admin donation function

    /**
     * this function checks to see if the user is logged in
     * and sets the title and link styles and then imports
     * the user page for admin editing actions
     * if false it returns an error message
     */
    public function adminUserAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn) {
            $username = $this->loginController->usernameFromSession();
            $pageTitle = ' User';
            $adminUserLinkStyle = 'current_page';
            require_once __DIR__ . '/../templates/admin/adminUser.php';
        } else {

            $message_heading = "--------------------------------------------------------------";
            $mainMessage = 'UNAUTHORIZED ACCESS AREA 4).';
            require_once __DIR__ . '/../templates/includes/src/message.php';
        }
    }//end admin user function


}//end class