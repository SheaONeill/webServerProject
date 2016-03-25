<?php
/**
 * Created by PhpStorm.
 * User: sheaoneill
 * Date: 23/03/16
 * Time: 00:13
 */

?>
<!-- login header -->
<!--<header>-->

    <!-- login / logout -->
<!--<form action="/index.php?action=processLogin" method="post">-->
        <?php
        //----------------------------
        if($isLoggedIn):

            //require_once __DIR__ . '/admin/_links.php';
            //----------------------------
            ?>

            you are logged in as: <strong><?= $username ?></strong>

            <form action="/index.php?action=logout" method = "post">

                <input type="submit" value="logout">            
            <?php require_once __DIR__ . '/admin/_links.php'; ?>
            <!--<a href="/index.php?action=logout">(logout)</a>-->
            <?php
        //----------------------------
        else:
            //----------------------------
            ?>



                <form action="/index.php?action=processLogin"
                      method="post">

                    username:<input type="text" name="username">
                    password: <input type="password" name = "password"/>
                    <input type="submit" value="login">





            <?php
            //----------------------------
        endif;
        //----------------------------
        ?>

</form>

<!--</header>
-->





<!--<div>

<form action="/index.php?action=processLogin"
      method="post">

    username:<input type="text" name="username">
    password: <input type="password" name = "password"/>
    <input type="submit" value="login">

</form>

</div>-->

