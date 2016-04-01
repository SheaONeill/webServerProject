<?php
namespace Itb;

class AdminController
{
    private $loginController;

    public function __construct()
    {
        $this->loginController = new LoginController();
    }

    public function adminEditNewsAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn){
            $username = $this->loginController->usernameFromSession();
            $pageTitle = 'Edit News';
            $adminEditNewsLinkStyle = 'current_page';
            require_once __DIR__ . '/../templates/admin/adminEditNews.php';
        } else {

            $message_heading = "************************************************************";
            $mainMessage = 'UNAUTHORIZED ACCESS AREA 1';
            require_once __DIR__ . '/../templates/includes/src/message.php';
        }
    }

    public function adminEditVerseAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn){
            $username = $this->loginController->usernameFromSession();
            $pageTitle = 'Edit Verse';
            $adminEditVerseLinkStyle = 'current_page';
            require_once __DIR__ . '/../templates/admin/adminEditVerse.php';
        } else {

            $message_heading = "--------------------------------------------------------------";
            $mainMessage = 'UNAUTHORIZED ACCESS AREA 2).';
            require_once __DIR__ . '/../templates/includes/src/message.php';
        }
    }

    public function adminEditDonationAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn) {
            $username = $this->loginController->usernameFromSession();
            $pageTitle = 'Edit Donation';
            $adminEditDonationLinkStyle = 'current_page';
            require_once __DIR__ . '/../templates/admin/adminEditDonation.php';
        } else {

            $message_heading = "--------------------------------------------------------------";
            $mainMessage = 'UNAUTHORIZED ACCESS AREA 3).';
            require_once __DIR__ . '/../templates/includes/src/message.php';
        }
    }

    public function adminEditUserAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn) {
            $username = $this->loginController->usernameFromSession();
            $pageTitle = 'Edit User';
            $adminEditUserLinkStyle = 'current_page';
            require_once __DIR__ . '/../templates/admin/adminEditUser.php';
        } else {

            $message_heading = "--------------------------------------------------------------";
            $mainMessage = 'UNAUTHORIZED ACCESS AREA 4).';
            require_once __DIR__ . '/../templates/includes/src/message.php';
        }
    }


}