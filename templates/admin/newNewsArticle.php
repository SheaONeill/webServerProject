<?php
/**
 * Created by PhpStorm.
 * User: sheaoneill
 * Date: 01/04/16
 * Time: 12:35
 */

//include the full header header_full.php
require_once __DIR__ . '/../includes/header_full.php';

use Itb\NewsFeed;

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
                <h3>News Feed or</h3>


                <p><q>Fields marked with asterisk (<span class="red">*</span>) are required</q></p>
                <!-- Fieldset around data -->
                <form action="index.php?action=createNewsArticle" method="post">

                    <fieldset>
                        <legend>Testing Crud</legend>
                        <br>
                        Author:<span class="red">*</span><br><!-- red asterisk -->
                        <p><input name="author" type="text"></p>
                        Date:<span class="red">*</span><br><!-- red asterisk -->
                        <p><input name="date" type="text"></p>
                        Heading:<span class="red">*</span><br><!-- red asterisk -->
                        <p><input name="newsFeedHeading" type="text"></p>
                        SubHeading1:<span class="red">*</span><br><!-- red asterisk -->
                        <p><input name="newsFeedSubHeading1" type="text"></p>
                        SubHeading2:<span class="red">*</span><br><!-- red asterisk -->
                        <p><input name="newsFeedSubHeading2" type="text"></p>
                        Paragraph1:<span class="red">*</span><br><!-- red asterisk -->
                        <p><input name="newsFeedParagraph1" type="text"></p>
                        Paragraph2:<span class="red">*</span><br><!-- red asterisk -->
                        <p><input name="newsFeedParagraph2" type="text"></p>

                        <p><input type="submit" name="submit" id="submit" value="Publish"/><!-- form input -->

                            <input type="reset"></p><!-- form input -->
                    </fieldset>
                </form><!-- close form -->
            </article><!-- close article -->
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