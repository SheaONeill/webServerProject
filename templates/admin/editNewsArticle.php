<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 01/04/2016
 * Time: 02:04
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

                <!-- maybe put this in a class and call more organised less messy-->
                <?php
                // -- define some variables for news feed  -->
                //$newsFeedArray = new NewsFeed();
                //$newsFeeds = $newsFeedArray->getAll();

                /*foreach ($newsFeeds as $newsFeed) {
                }*/
                ?>

                <p><q>Fields marked with asterisk (<span class="red">*</span>) are required</q></p>
                <!-- Fieldset around data -->
                <form action="index.php?action=editNewsArticle" method="post">

                    <fieldset>
                        <legend>Testing Crud</legend>
                        <br>
                        <?php echo '<input name="id" type="textbox" value="' . $newsFeed->getId() . '" />'; ?>

                        <!--http://www.dreamincode.net/forums/topic/163327-printing-a-php-variable-in-a-text-box/-->
                        <!-- Text Box -->
                        Author:<span class="red">*</span><br><!-- red asterisk -->
                        <?php echo '<input name="author" type="textbox" value="' . $newsFeed->getAuthor() . '" />'; ?>
                        <!-- Message Box -->
                        <br>
                        Date:<span class="red">*</span><br><!-- red asterisk -->
                        <?php echo '<input name="date" type="textbox" value="' . $newsFeed->getDate() . '" />'; ?>

                        <!--http://stackoverflow.com/questions/3318132/setting-value-of-a-html-form-textarea-->
                        <!-- Message Box -->

                        <br><br>Heading<span class="red">*</span><br><!-- red asterisk --><br>
                        <textarea name="newsFeedHeading" cols="40"
                                  rows="1"><?= $newsFeed->getNewsFeedSubHeading1() ?></textarea>


                        <br><br>SubHeading1<span class="red">*</span><br><!-- red asterisk --><br>
                        <textarea name="newsFeedSubHeading1" cols="40"
                                  rows="1"><?= $newsFeed->getNewsFeedSubHeading1() ?></textarea>

                        <!-- Message Box -->
                        <br>SubHeading2<span class="red">*</span><br><!-- red asterisk -->
                        <textarea name="newsFeedSubHeading2" cols="40"
                                  rows="1"><?= $newsFeed->getNewsFeedSubHeading2() ?></textarea>
                        <!-- Message Box -->
                        <br>Paragraph1<span class="red">*</span><br><!-- red asterisk -->
                        <textarea name="newsFeedParagraph1" cols="40"
                                  rows="10"><?= $newsFeed->getNewsFeedParagraph1() ?></textarea>
                        <br>
                        <!-- Message Box -->
                        <br>Paragraph2<span class="red">*</span><br><!-- red asterisk -->
                        <textarea name="newsFeedParagraph2" cols="40"
                                  rows="10"><?= $newsFeed->getNewsFeedParagraph2() ?></textarea>

                        <br>
                        <!--<a href="http://www.stackoverflow.com/"><button>Click me</button></a>-->
                        <p><input type="submit" name="submit" id="submit" value="Post"/><!-- form input -->
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