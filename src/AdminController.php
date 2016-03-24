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
            $message = 'UNAUTHORIZED ACCESS - the Guards are on their way to arrest you ...';
            require_once __DIR__ . '/../templates/includes/message.php';
        }
    }

    public function adminCodesAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn){
            $username = $this->loginController->usernameFromSession();
            require_once __DIR__ . '/../templates/admin/codes.php';
        } else {
            $message = 'UNAUTHORIZED ACCESS - the Guards are on their way to arrest you ...';
            require_once __DIR__ . '/../templates/includes/message.php';
        }
    }


}