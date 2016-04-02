<?php
namespace Itb;

class AdminController
{
    private $loginController;

    public function __construct()
    {
        $this->loginController = new LoginController();
    }

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
    }

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
    }

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
    }


}