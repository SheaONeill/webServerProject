<?php
/*//include the doctype from header_doctype.php
require_once __DIR__ . '/../templates/header_doctype.php';

//include the meta tags from header_meta.php
require_once __DIR__ . '/../templates/header_meta.php';

//include imports and favicon from header_imports.php
require_once __DIR__ . '/../templates/header_imports.php';*/

//include the full header header_full.php
require_once __DIR__ . '/../templates/includes/header_full.php';
?>
<body><!-- begin body opening tag -->
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
	<section class="fixed_left"><!-- begin section tag-->
		<article class="outline_main"><!-- begin article -->
			<h3>Contact Us</h3>
				<p><q>Fields marked with asterisk (<span class="red">*</span>) are required</q></p>
				<!-- Fieldset around data -->
				<!--<form action= "index.php" method="post" onsubmit="alert('Thank you your form has been submitted!')">--><!-- begin form-->
			<form action="/index.php?action=processLogin" method="post">

				<fieldset><legend>Use the following form to send a message</legend><br>
				<!-- Dropdown Menu -->  
				Who you would like to contact?<span class="red">*</span><br><!-- red asterisk -->
				<select name="who_to_contact" id ="who_to_contact" size = "1" required><!-- select with options -->
					<option class="disabled_selected" value="" disabled selected>Choose option</option><!-- option value -->
					<option value="sacristy">Sacristy</option><!-- option value -->
					<option value="parish_priest">Parish Priest</option><!-- option value -->
					<option value="parish_chaplin">Parish Chaplin</option><!-- option value -->
					<option value="parish_secretary">Parish Secretary</option><!-- option value -->
				</select><br>
				Your contact email address<span class="red">*</span><br>
				<input type="email" size="20" maxlength="40" name="email" id = "email" placeholder="jesus@heaven.god" required><br>
				<!-- Message Box -->
				Message<br>
				<textarea name = "textArea" id = "textArea" rows="10" cols="40" wrap="hard" > 
				</textarea><br>
				
				<!-- Checkbox -->
				Subscription for Parish Newsletter<input type="checkbox" name="newsletter" id = "newsletter" value="newsletter" checked><br>
				Sacred Heart Messenger Subscription<input type="checkbox" name="messenger" id = "messenger" value="messenger" ><a href="https://messenger.ie" target="_blank" >more info</a>
				<br>
				<p><input type = "submit" name = "submit" id = "submit" value = "Send Message" /><!-- form input -->
				<input type = "reset"></p><!-- form input -->
				</fieldset>
				</form><!-- close form -->
		</article><!-- close article -->
    </section><!-- close section tag -->
	<!-- ****************** section - block 2 ******************** -->
    <section class="fixed_right"><!-- begin section tag-->
		<article class="outline_main"><!-- begin outline_main article -->
		<article><!-- begin article -->
			<h3>How to find us</h3> <!-- parish priest phone number -->
			<br><!-- line break -->
			<iframe id="google_map_size" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9525.51550616469!2d-6.236613!3d53.354374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3b5e9d734f79beb!2sSaint+Joseph&#39;s+Catholic+Church!5e0!3m2!1sen!2sie!4v1428164367616" ></iframe><!-- http://www.w3schools.com/html/html5_geolocation.asp -->
		</article><!-- close article -->
		<article><!-- begin article -->
			<br><!-- line break -->
			<form action="http://maps.google.com/maps" method="get" target="_blank"><!-- begin form -->
				<label for="saddr">Enter your location</label><!-- form label -->
				<span class="red">*</span><br><!-- red asterisk -->
				 <input type="text" name="saddr" id="saddr" required/><!-- form input -->
				 <input type="hidden" name="daddr" value="@53.354374,-6.236613" /><!-- form input -->
				 <input type="submit" value="Get directions" /><!-- form input -->
			</form><!-- close form -->
			<br><!-- line break -->
			<p>Bus: 53 - stops at the Church</p><!-- parish priest phone number-->
			<p>Bus: 151 - (from town) : stops at East Rd.</p><!-- parish priest phone number-->
			
		</article><!-- close article -->
		</article><!-- close article -->
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