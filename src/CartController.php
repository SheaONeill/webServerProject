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
        require_once __DIR__ . '/../templates/shop.php';
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
        require_once __DIR__ . '/../templates/shop.php';
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

        //redirect to refresh the shopping cart order details
        require_once __DIR__ . '/../templates/shop.php';
    }

    /**
     * this function removes the session     * 
     */
    public function killSession()
    {
        //unset all of the session variables.
        $_SESSION = [];

        // delete the session cookie.
        // destroy the session and the session data!
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

        //destroy the session.
        session_destroy();
    }

}