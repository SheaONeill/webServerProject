<?php
namespace Itb;

class LoginController
{

    public function logoutAction()
    {
        // remove 'user' element from SESSION array
        unset($_SESSION['user']);

        // redirect to index action
        $mainController = new MainController();
        $mainController->indexAction();
    }

    public function processLoginAction()
    {
        // default is bad login
        $isLoggedIn = false;

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        // search for user with username in repository
        $isLoggedIn = User::canFindMatchingUsernameAndPassword($username, $password);

        // action depending on login success
        if($isLoggedIn){
            // STORE login status SESSION
            $_SESSION['user'] = $username;

            //save name in a cookie, to expire
            $hour_as_seconds = 15 * 1;
            $expire_time = time() + $hour_as_seconds;
            setcookie( 'user', $username, $expire_time );
            setcookie( 'password', $password, $expire_time );

            //refresh page
            //http://stackoverflow.com/questions/4221116/php-refresh-current-page
            header('Location: '.$_SERVER['PHP_SELF']);

            //or http://stackoverflow.com/questions/10643626/refresh-page-after-form-submiting

        } else {
            $message_heading = "It's a Sin!";
            $mainMessage = 'bad username or password, please try again';
            require_once __DIR__ . '/../templates/includes/src/message.php';
        }
    }


    //--------- helper functions -------


    public function isLoggedInFromSession()
    {
        $isLoggedIn = false;

        // user is logged in if there is a 'user' entry in the SESSION superglobal
        if(isset($_SESSION['user'])){
            $isLoggedIn = true;
        }

        return $isLoggedIn;
    }

    public function usernameFromSession()
    {
        $username = '';

        // extract username from SESSION superglobal
        if (isset($_SESSION['user'])) {
            $username = $_SESSION['user'];
        }

        return $username;
    }



}