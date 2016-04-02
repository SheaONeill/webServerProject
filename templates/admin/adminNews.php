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

    <div id=""><!-- div to wrap the sections -->
        <!-- ****************** section - block 1 ******************** -->
        <section class="flex_news_feed"><!-- begin section tag-->
            <article class=""><!-- begin article -->
                <h3><?= ucwords($username) ?> News Feed Editor Section</h3>

                <?php foreach ($newsFeeds as $newsFeed) :

                ?>

                <table id="totals">
                    <tr><!-- temporary styles -> use css for these widths -->
                        <th style="width: 11%">Details</th>
                        <th style="width: 3%">ID</th>
                        <th style="width: 10%">Date</th>
                        <th style="width:25%">Author</th>
                        <th style="width: 30%">Title</th>
                        <th colspan="2" style="width: 15%">Actions</th>
                    </tr>

                    <tr class="even">
                        <form action="index.php" method="get">
                            <td><input type="hidden" name="action" value="showSingleNewsItem">
                                <input type="hidden" name="id" value="<?= $newsFeed->getId() ?>">
                                <input type="submit" value="Preview Article">
                        </form>
                        </td>
                        <td><?= $newsFeed->getId() ?></td>
                        <td><?= $newsFeed->getDate() ?></td>
                        <td><?= $newsFeed->getAuthor() ?></td>
                        <td><?= $newsFeed->getNewsFeedHeading() ?></td>
                        <td>
                            <form action="index.php" method="get">
                                <input type="hidden" name="action" value="showEditNewsArticle">
                                <input type="hidden" name="id" value="<?= $newsFeed->getId() ?>">
                                <input type="submit" value="Edit Article"></form>
                        </td>


                        <td>
                            <form action="index.php" method="get">
                                <input type="hidden" name="action" value="deleteNewsArticle">
                            <input type="hidden" name="id" value="<?= $newsFeed->getId() ?>">
                                <input type="submit" value="Delete Article"></form>
                        </td>
                    </tr>
                    <?php endforeach; ?><!--using alternative syntax for control structures-->
                </table>


                <form action="index.php" method="get"><input type="hidden" name="action" value="showCreateNewsArticle">
                    <input type="submit" value="New News Article">
                </form>
            </article><!-- close article -->
        </section><!-- close section tag -->


        <!-- ****************** footer - block  ******************** -->
        <div id="the_footer_wrapper"><!-- div to wrap the footer -->

            <!-- ****************** php includes footer  ******************** -->
            <?php
            //include the footer from footer.php
            require_once __DIR__ . '/../includes/footer.php';
            ?>

            <!-- ****************** copyright footer  ******************** -->
            <p id="copyright">&copy; 2016&nbsp;&nbsp;James O&#39;Neill&nbsp;&nbsp;<a
                    href="mailto:B00084432@student.itb.ie">Email</a></li>
            </p><!-- footer copyright-->
        </div><!-- close the_footer_wrapper tag -->

    </div><!-- close main_container div tag -->

</body><!-- close body tag -->

</html><!-- close html tag -->