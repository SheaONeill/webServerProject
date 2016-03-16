<?php
/*//include the doctype from header_doctype.php
require_once __DIR__ . '/../templates/header_doctype.php';

//include the meta tags from header_meta.php
require_once __DIR__ . '/../templates/header_meta.php';

//include imports and favicon from header_imports.php
require_once __DIR__ . '/../templates/header_imports.php';*/

//include the full header header_full.php
require_once __DIR__ . '/../templates/header_full.php';
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
    <section class="flex_four_column_left"><!-- begin section tag-->
		<article><!-- begin article -->
			<h2>Our Church</h2>
				<img src="/images/church/east_wall_church.png" alt="East Wall Church image placeholder" title="St. Joseph's Parish, East Wall"><!-- East Wall Church image with alt and title attributes for search engine optimisation -->
				<p>In 1717 Dublin Corporation decided to reclaim part of Dublin Bay: the North Wall was built eastwards on the north side of the Liffey and the East Wall was built on the south side of the Tolka. The point where they met is called The Point.</p><p><a href="#">See more.</a></p>
					<div id="church" class="more"><!-- hidden div -->
						<p>St. Laurence O'Toole's church opened on Seville Place in 1850, and in 1852 Seville Place became an independent parish.</p><p>In 1941 East Wall parish was formed from part of St. Laurence O'Toole's, and in 1956 the present church replaced the 1919 St. Joseph's</p><p><a href="#">See more.</a></p>
					</div><!-- close div -->
		</article><!-- close article -->
    </section><!-- close section tag -->

    <!-- ****************** section - block 2 ******************** -->
    <section class="flex_four_column"><!-- begin section tag-->
		<article><!-- begin article -->
			<h2>The Tin Church</h2>
				<img src="/images/church/tin_church.png" alt="image placeholder" title="St. Joseph's Parish, East Wall"><!-- image with alt and title attributes for search engine optimisation -->
				<p>Although St Joseph's parish was not established until 1941, there was a church in the parish area from 1919. 'The Tin Church', as it is affectionately remembered by parishioners, was located on Church Road opposite Seaview Avenue.</p><p><a href="#">See more.</a></p>
					<div id="tin_church" class="more"><!-- hidden div -->
					<p>Because of the growing size of the Parish, Fr Fitzgibbon, (Parish Priest in 1941), believed that a bigger Church was needed so plans were put in place for the present Church. This is located at the corner of Church Road and St. Mary's Road. When Fr Fitzgibbon died, Fr Frederick Hooke continued with the building.</p><p>The Foundation Stone was blessed on 8 November 1954, and on the 29 July 1956 the then Archbishop John Charles McQuaid blessed and officially opened the new Church of St Joseph, East Wall.</p><p><a href="#">See less.</a></p>
					</div><!-- close tin_church div -->
		</article><!-- close article -->
    </section><!-- close section tag -->
	<!-- ****************** section - block 3 ******************** -->
    <section class="flex_four_column"><!-- begin section tag-->
		<article><!-- begin article -->
			<h2>The Sanctuary</h2>
				<img src="/images/church/sanctuary.png" alt="image placeholder" title="St. Joseph's Parish, East Wall"><!-- image with alt and title attributes for search engine optimisation -->
				<p>St Joseph's church has seen significant changes since it was built. Many of these changes are reflected in work that has been carried out on our church building over the years.</p><p><a href="#">See more.</a></p>
					<div id="sanctuary" class="more"><!-- hidden div -->
					<p>The Sanctuary, which is the main altar and its surrounding area, was reordered. The railing that separated the Sanctuary from the body of the church was removed and a new altar, ambo and chair were built. This enables the priest to celebrate Mass facing the people. The reordered Sanctuary is a much bigger space and facilitates the active involvement of lay people, who now read the Scriptures, and assist with the distribution of Communion.</p><p>In the late 1980's, the mortuary chapel was converted to a Blessed Sacrament Oratory that could accommodate small groups for the celebration of Mass. At the present time, the Blessed Sacrament is reserved in this area.</p><p><a href="#">See less.</a></p>
					</div><!-- close sanctuary div -->
		</article><!-- close article -->	
    </section><!-- close section tag -->
	<!-- ****************** section - block 4 ******************** -->
    <section class="flex_four_column_right"><!-- begin section tag-->
		<article><!-- begin article -->
			<h2>Baptismal Font</h2>
				<img src="/images/church/baptismal_font.png" alt="image placeholder" title="St. Joseph's Parish, East Wall"><!-- image with alt and title attributes for search engine optimisation -->
				<p>In the 1990s, the marble baptismal font was moved from its original location off the front porch area to a position in front of the Sanctuary where Baptisms are now carried out in front of the Sanctuary.</p><p><a href="#">See more.</a></p>
					<div id="baptismal_font" class="more"><!-- hidden div -->
					<p>One recent and very important change in society is our attitude to people with disabilities. People realised that any building needs to be inclusive of the needs of all people, whatever their disabilities. New ramps have been constructed outside the front of the church, elimination of the step at the main door. Special toilet facilities are available inside the main entrance. Changes for people with hearing and visual impairments have also taken place: improvement of the sound system and the introduction of a loop system, and improvement of lighting within the church.</p><p>The establishment of a new Radio Link will enable most of our housebound parishioners to participate by radio in the liturgical life of the parish.</p><p><a href="#">See less.</a></p>
					</div><!-- close baptismal_font div -->
		</article><!-- close article -->	
    </section><!-- close section tag -->
	</div><!-- close section_container tag -->
<div id="the_footer_wrapper"><!-- div to wrap the footer -->


	<?php
	//include the footer from footer.php
	require_once __DIR__ . '/../templates/footer.php';

	?>

		<p id="copyright">&copy; 2016&nbsp;&nbsp;James O&#39;Neill&nbsp;&nbsp;<a href="mailto:B00084432@student.itb.ie">Email</a></li></p><!-- footer copyright-->
	</div><!-- close the_footer_wrapper tag -->
</div><!-- close main_container div tag -->
</body><!-- close body tag -->
</html><!-- close html tag -->