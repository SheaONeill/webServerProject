<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 01/04/2016
 * Time: 02:06
 */

//include the full header header_full.php
require_once __DIR__ . '/../includes/header_full.php';
?>
<body><!-- begin body opening tag -->
<div id="main_container"><!-- div to wrap everything-->
    <!-- ***** header ***** -->
    <header><!-- begin header opening tag -->
        <?php
        //include the social media links from body_header_media_logos.php
        require_once __DIR__ . '/../includes/body_header_media_logos.php';
        ?>
    </header><!-- close header tag -->
    <div id="login_header"><!-- begin login header opening tag -->
        <?php
        //include the login_header.php
        require_once __DIR__ . '/../includes/login_header.php';
        ?>
    </div><!-- close login header -->
    <div id="nav_container"><!-- div to wrap the nav-->
        <?php
        //include the navbar from body_header_nav.php
        require_once __DIR__ . '/../includes/body_header_nav.php';
        ?>
    </div><!-- close nav_container -->

    <div id="section_container"><!-- div to wrap the sections -->
        <!-- ****************** section - block 1 ******************** -->
        <section class="flex_welcome_main"><!-- begin section tag-->
            <article class="outline_main"><!-- begin article -->
                <?php


                ?>
                <h1> Donation</h1><!-- incoming message heading-->


            </article>
        </section><!-- close section tag -->
    </div><!-- close section_container tag -->

    <!-- ****************** footer - block  ******************** -->
    <div id="the_footer_wrapper"><!-- div to wrap the footer -->

        <!-- ****************** php includes footer  ******************** -->
        <?php
        //include the footer from footer.php
        require_once __DIR__ . '/../includes/footer.php';
        ?>

        <!-- ****************** copyright footer  ******************** -->
        <p id="copyright">&copy; 2016&nbsp;&nbsp;James O&#39;Neill&nbsp;&nbsp;<a href="mailto:B00084432@student.itb.ie">Email</a></li>
        </p><!-- footer copyright-->
    </div><!-- close the_footer_wrapper tag -->

</div><!-- close main_container div tag -->

</body><!-- close body tag -->

</html><!-- close html tag -->