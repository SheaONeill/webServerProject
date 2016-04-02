<?php
/**
 * Created by PhpStorm.
 * User: sheaoneill
 * Date: 23/03/16
 * Time: 00:13
 */

?>

<?php
//----------------------------
if ($isLoggedIn):


?>

you are logged in as: <strong><?= $username ?></strong>

<form action="index.php?action=logout" method="post">

    <input type="submit" value="logout">

    <?php require_once __DIR__ . '/../includes/admin_links.php'; ?>

    <?php

    else:

    ?>

    <form action="index.php?action=processLogin"
          method="post">

        username:<input type="text" name="username">
        password: <input type="password" name="password"/>
        <input type="submit" value="login">

        <?php

        endif;

        ?>

    </form>
