<?php
namespace Itb;

class AdminController
{
    private $loginController;

    public function __construct()
    {
        $this->loginController = new LoginController();
    }

    public function adminHomeAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn){
            $username = $this->loginController->usernameFromSession();
            require_once __DIR__ . '/../templates/admin/index.php';
        } else {

            $message_heading = "************************************************************";
            $message = 'UNAUTHORIZED ACCESS AREA 1';
            require_once __DIR__ . '/../templates/includes/src/message.php';
        }
    }

    public function adminCodesAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn){
            $username = $this->loginController->usernameFromSession();
            require_once __DIR__ . '/../templates/admin/codes.php';
        } else {

            $message_heading = "--------------------------------------------------------------";
            $message = 'UNAUTHORIZED ACCESS AREA 2).';
            require_once __DIR__ . '/../templates/includes/src/message.php';
        }
    }


}