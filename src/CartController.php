<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 12/04/2016
 * Time: 15:35
 */

namespace Itb;


class CartController {

    private $loginController;

    public function __construct()
    {
        $this->loginController = new LoginController();
    }//end constructor

    public function addToCart()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        // get the ID of product to add to cart
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        // get the cart array
        $shoppingCart = $this->getShoppingCart();

        // default is old total is zero
        $oldTotal = 0;

        // if quantity found in cart array, then use this
        if(isset($shoppingCart[$id])){
            $oldTotal = $shoppingCart[$id];
        }

        // store old total + 1 as new quantity into cart array
        $shoppingCart[$id] = $oldTotal + 1;

        // store new  array into SESSION
        $_SESSION['shoppingCart'] = $shoppingCart;

        // redirect display page
        require_once __DIR__ . '/../templates/donate.php';
    }

    public function removeFromCart()
    {

        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        // get the ID of product to add to cart
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        // get the cart array
        $shoppingCart = $this->getShoppingCart();

        // remove entry for this ID
        unset($shoppingCart[$id]);

        // store new  array into SESSION
        $_SESSION['shoppingCart'] = $shoppingCart;

        // redirect display page
        require_once __DIR__ . '/../templates/donate.php';
    }

    public function getShoppingCart()
    {



        if (isset($_SESSION['shoppingCart'])){
            return $_SESSION['shoppingCart'];
        } else {
            return [];
        }
    }

    public function forgetSession()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $this->killSession();

        // redirect to display text
        require_once __DIR__ . '/../templates/donate.php';
    }

    /**
     * advice on how to kill session from PHP.net
     * URL: http://php.net/manual/en/function.session-destroy.php
     */
    public function killSession()
    {
        // (1) Unset all of the session variables.
        $_SESSION = [];

        // (2) If it is desired to kill the session, also delete the session cookie.
        // Note: This will destroy the session, and not just the session data!
        if (ini_get('session.use_cookies')){
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params['path'],
                $params['domain'],
                $params['secure'],
                $params['httponly']
            );
        }

        // (3) destroy the session.
        session_destroy();
    }

}