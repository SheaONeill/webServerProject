<?php
//include the doctype from header_doctype.php
require_once __DIR__ . '/../templates/header_doctype.php';

//insert the title of the page
print '<title>St. Joseph\'s Parish, East Wall</title><!-- title of webpage -->';

//include the meta tags from header_meta.php
require_once __DIR__ . '/../templates/header_meta.php';

//include imports and favicon from header_imports.php
require_once __DIR__ . '/../templates/header_imports.php';

//-------------------------------------------
?>
<body><!-- begin body opening tag -->
<div id="main_container"><!-- div to wrap everything-->
	<!-- ***** header ***** -->
	<header><!-- begin header opening tag -->
		<?php
		//include the social media links from body_header_media_logos.php
		require_once __DIR__ . '/../templates/body_header_media_logos.php';
		?>
	</header><!-- close header tag -->
	<div id="nav_container"><!-- div to wrap the nav-->
		<?php
		//include the navbar from body_header_nav.php
		require_once __DIR__ . '/../templates/body_header_nav.php';
		?>
	</div><!-- close nav_container -->


<div id="section_container"><!-- div to wrap the sections -->
    <!-- ****************** section - block 1 ******************** -->
    <section class="flex_welcome_left"><!-- begin section tag-->
		<article><!-- begin article -->
			<h2>A Journey through East Wall Parish.</h2><!-- heading type three-->
			<video id="video_size" controls><!-- begin video -->
			  <source src="" type="video/mp4"><!-- video source -->
			   Your browser does not support the video tag.<!-- if video element is unsupported display this -->
			</video><!-- close video tag -->
		</article><!-- close article tag -->
		
		<article class="random_verse"><!-- begin article -->
			<h2>Random Bible Verse</h2><!-- heading type two-->
			<img alt="open_book.png" src="../public/images/background/open_book.png" ><!-- image of open_book -->
			<div id="tipbox"></div><!-- div to hold random verse -->
			<br><!-- line break -->
			<a href="javascript:history.go(0);"><p id="refresh">Click here to refresh this page to see a new verse.</p></a><!-- paragraph -->
		</article><!-- close article tag -->
    </section><!-- close section tag -->

    <!-- ****************** section - block 2 ******************** -->
    <section class="flex_welcome_main"><!-- begin section tag-->
		<article class="outline_main"><!-- begin article -->
			<h2>Decoding the Church:</h2><!-- heading type two -->
			<br><!-- line break -->
			<p><span id="decoded"><q>Mapping the DNA of Christ's Body.</q></span><span id="encoded"></span></p><!-- wrap text to be decoded in span tag -->
			<p>by Howard A. Snyder (Author), Daniel V. Runyon (Contributor)</p><!-- paragraph one -->
			<p>While many models have been proposed for understanding the nature of the church, the primary biblical image is that of the body of Christ. Decoding the Church takes this organic metaphor and examines its DNA to find the key to church structure and mission. The authors suggest that the classical understanding of the church as defined by the Nicene Creed-one, holy, catholic, apostolic church-comprises only one strand of the church's DNA. They propose a more complex, living model for structuring the church and understanding its mission, and then explore how a biblically structured church can transform the world. Decoding the Church evaluates models based in hierarchy, psychology, and ecology, and stresses the biblical and contemporary reality of globalization. Includes discussion questions.</p><!-- paragraph two -->
        </article><!-- close article tag -->
    </section><!-- close section tag -->
	<!-- ****************** section - block 3 ******************** -->
    <section class="flex_welcome_right"><!-- begin section tag-->
		<article class="stitched"><!-- begin article -->
			<h2>Prayer For The Church In Ireland</h2><!-- heading type two -->
			<p>God of our fathers, renew us in the faith which is our life and salvation, the hope which promises forgiveness and interior renewal, the charity which purifies and opens our hearts to love you, and in you, each of our brothers and sisters.</p><!-- paragraph one --> 
			<img alt="code.png" src="../public/images/background/code.png" ><!-- image of code -->
			<p>Lord Jesus Christ, may the Church in Ireland renew her age-old commitment to the education of our young people in the way of truth and goodness, holiness and generous service to society.</p><!-- paragraph two -->
			<p>Holy Spirit, comforter, advocate and guide, inspire a new springtime of holiness and apostolic zeal for the Church in Ireland. 	May our sorrow and our tears, our sincere effort to redress past wrongs, and our firm purpose of amendment bear an abundant harvest of grace for the deepening of the faith in our families, parishes, schools and communities, for the spiritual progress of Irish society, and the growth of charity, justice, joy and peace within the whole human family. To you, Triune God, confident in the loving protection of Mary, Queen of Ireland, our Mother, and of Saint Patrick, Saint Brigid and all the saints, do we entrust ourselves, our children, and the needs of the Church in Ireland.</p><!-- paragraph three -->
			<p>Amen.</p><!-- paragraph four -->
        </article><!-- close article tag -->
    </section><!-- close section tag -->
	</div><!-- close section_container tag -->
<div id="the_footer_wrapper"><!-- div to wrap the footer -->


	<?php
	//include the footer from footer.php
	require_once __DIR__ . '/../templates/footer.php';

	?>
		<p id="copyright">&copy; 2015&nbsp;&nbsp;James O&#39;Neill&nbsp;&nbsp;<a href="mailto:B00084432@student.itb.ie">Email</a></li></p><!-- footer copyright-->
	</div><!-- close the_footer_wrapper tag -->
</div><!-- close main_container div tag -->
</body><!-- close body tag -->
</html><!-- close html tag -->