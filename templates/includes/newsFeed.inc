<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 26/03/2016
 * Time: 03:11
 */
use StJosephsChurchEastWall\NewsFeed;

//-------------------------------------------
?>

    <!-- start table for displaying DVD details -->
    <h2>Lists of DVDs and their average votes</h2>

    <table>
        <tr>
            <th> ID </th>
            <th> title </th>
            <th> category </th>
            <th> price </th>
            <th> vote average </th>
            <th> num votes </th>
            <th> stars </th>
        </tr>

        <!-- ********************* HTML for dvd items ****************** -->
        <!--
            //   	0 - 15 - 40 - 55 - 70 - 85 - 100 %age
            // 	      .5   1    2    3    4    5     stars
        -->

        <?php

        $newsFeeds = NewsFeed::getAll();

        foreach((array)$newsFeeds as $newsFeed) {
            ?>

            <tr>
                <td><?= $newsFeed->getId() ?></td>
                <td><?= $newsFeed->getHeading() ?></td>
                <td><?= $newsFeed->getNewsFeedSub1() ?></td>
                <td>&euro; <?= $newsFeed->getNewsFeedSub2() ?></td>
                <td><?= $newsFeed->getNewsText1() ?> %</td>
                <td><?= $newsFeed->getNewsText2() ?></td>
                <td><?= $newsFeed->getAuthor() ?></td>
                <td><?= $newsFeed->getDate() ?></td>
            </tr>

            <?php
        }
        ?>


    </table>
