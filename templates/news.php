<?php
/*//include the doctype from header_doctype.php
require_once __DIR__ . '/../templates/header_doctype.php';

//include the meta tags from header_meta.php
require_once __DIR__ . '/../templates/header_meta.php';

//include imports and favicon from header_imports.php
require_once __DIR__ . '/../templates/header_imports.php';*/

//include the full header header_full.php
require_once __DIR__ . '/../templates/includes/header_full.php';

use Itb\Verse;
use Itb\NewsFeed;


?>

<body xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"><!-- begin body opening tag -->
<div id="main_container"><!-- div to wrap everything-->
	<!-- ***** header ***** -->
	<header><!-- begin header opening tag -->
		<?php
		//include the social media links from body_header_media_logos.php
		require_once __DIR__ . '/../templates/includes/body_header_media_logos.php';
		?>
	</header><!-- close header tag -->
	<div id="nav_container"><!-- div to wrap the nav-->
		<?php
		//include the navbar from body_header_nav.php
		require_once __DIR__ . '/../templates/includes/body_header_nav.php';
		?>
	</div><!-- close nav_container -->


<div id="section_container"><!-- div to wrap the sections -->
    <!-- ****************** section - block 1 ******************** -->
    <section class="flex_welcome_left"><!-- begin section tag-->
		<article><!-- begin article -->
			<h2>A Journey through East Wall Parish.</h2><!-- heading type three-->
			<p>Video of parish to go here!</p>
			<video id="video_size" controls><!-- begin video -->
			  <source src="" type="video/mp4"><!-- video source -->
			   Your browser does not support the video tag.<!-- if video element is unsupported display this -->
			</video><!-- close video tag -->
		</article><!-- close article tag -->
		
		<article class="random_verse"><!-- begin article -->
			<h2>Random Bible Verse<!-- random stage 1->
			<img alt="open_book.png" src="/images/background/open_book.png" ><!-- image of open_book -->
			<div id="bibleVerse">
			<p>

			<!-- maybe put this in a class and call more oranised less messy-->
                <?php
				// define some variables for random bible verse -->/
				$randomVerseGen = rand(1000,1002);
				$currentVerse = Verse::getOneById($randomVerseGen);
				?>
  			<!--display verse with value stored in $randomVerseGen-->
				<p><?=$currentVerse->getHeading($randomVerseGen);?></p>
				<p><?=$currentVerse->getSubheading1($randomVerseGen);?></p>
				<p><?=$currentVerse->getSubheading2($randomVerseGen);?></p>
				<p><?=$currentVerse->getParagraph($randomVerseGen);?></p>

			</div><!-- div to hold random verse -->
			<br><!-- line break -->

			<!--php refresh page-->
			<a href="<?php echo $_SERVER["REQUEST_URI"]; ?>"><p id="refresh">Click here to refresh this page to see a new verse.</p></a><!-- paragraph -->

		</article><!-- close article tag -->
    </section><!-- close verse section tag -->

    <!-- ****************** news feed section  ******************** -->
    <section class="flex_welcome_main"><!-- begin section tag-->
		<article class="outline_main"><!-- begin article -->



			<!-- maybe put this in a class and call more organised less messy-->
			<?php
			// -- define some variables for news feed  -->
			//temp string for testing
            $whichNewsFeed = 1;
			//get the news array for whichnewsfeed
			$currentFeed = NewsFeed::getOneById($whichNewsFeed);
			?>
			<!--display news from db matching value stored in $whichNewsFeed-->
			<p><h2><?=$currentFeed->getHeading();?></h2></p><!-- news feed heading-->
			<p><h3><?=$currentFeed->getNewsFeedSub1($whichNewsFeed);?></h3></p><!-- subheading 1 -->
			<p><?=$currentFeed->getNewsFeedSub2($whichNewsFeed);?></p><!-- subheading 2 -->
			<p><?=$currentFeed->getNewsText1($whichNewsFeed);?></p><!--  news text 1 -->
			<p><?=$currentFeed->getNewsText2($whichNewsFeed);?></p><!--  news text 2 -->
			<p>Author: <?=$currentFeed->getAuthor($whichNewsFeed);?></p><!-- author -->
			<p>Date: <?=$currentFeed->getDate($whichNewsFeed);?></p><!-- date -->

        </article><!-- close article tag -->
    </section><!-- close news feed section -->
	<!-- ****************** section - block 3 ******************** -->
    <section class="flex_welcome_right"><!-- begin section tag-->
		<article class="stitched"><!-- begin article -->
			<h2>Prayer For The Church In Ireland</h2><!-- heading type two -->
			<p>God of our fathers, renew us in the faith which is our life and salvation, the hope which promises forgiveness and interior renewal, the charity which purifies and opens our hearts to love you, and in you, each of our brothers and sisters.</p><!-- paragraph one --> 
			<img alt="code.png" src="/images/background/code.png" ><!-- image of code -->
			<p>Lord Jesus Christ, may the Church in Ireland renew her age-old commitment to the education of our young people in the way of truth and goodness, holiness and generous service to society.</p><!-- paragraph two -->
			<p>Holy Spirit, comforter, advocate and guide, inspire a new springtime of holiness and apostolic zeal for the Church in Ireland. 	May our sorrow and our tears, our sincere effort to redress past wrongs, and our firm purpose of amendment bear an abundant harvest of grace for the deepening of the faith in our families, parishes, schools and communities, for the spiritual progress of Irish society, and the growth of charity, justice, joy and peace within the whole human family. To you, Triune God, confident in the loving protection of Mary, Queen of Ireland, our Mother, and of Saint Patrick, Saint Brigid and all the saints, do we entrust ourselves, our children, and the needs of the Church in Ireland.</p><!-- paragraph three -->
			<p>Amen.</p><!-- paragraph four -->
        </article><!-- close article tag -->
    </section><!-- close section tag -->
	</div><!-- close section_container tag -->
<div id="the_footer_wrapper"><!-- div to wrap the footer -->


	<?php
	//include the footer from footer.php
	require_once __DIR__ . '/../templates/includes/footer.php';

	?>
		<p id="copyright">&copy; 2016&nbsp;&nbsp;James O&#39;Neill&nbsp;&nbsp;<a href="mailto:B00084432@student.itb.ie">Email</a></li></p><!-- footer copyright-->
	</div><!-- close the_footer_wrapper tag -->
</div><!-- close main_container div tag -->
</body><!-- close body tag -->
</html><!-- close html tag -->