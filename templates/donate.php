<?php
/*//include the doctype from header_doctype.php
require_once __DIR__ . '/../templates/header_doctype.php';

//include the meta tags from header_meta.php
require_once __DIR__ . '/../templates/header_meta.php';

//include imports and favicon from header_imports.php
require_once __DIR__ . '/../templates/header_imports.php';*/

//include the full header header_full.php
require_once __DIR__ . '/../templates/includes/header_full.php';

use Itb\Product;
use Itb\CartController;

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
    <div id="login_header">
        <?php
        //include the login_header.php
        require_once __DIR__ . '/../templates/includes/login_header.php';
        ?>
    </div>
    <div id="nav_container"><!-- div to wrap the nav-->
        <?php
        //include the navbar from body_header_nav.php
        require_once __DIR__ . '/../templates/includes/body_header_nav.php';
        ?>
    </div><!-- close nav_container -->

<div id="section_container"><!-- div to wrap the sections -->
    
	<!-- ****************** section - block 1 ******************** -->
    <section class="flex"><!-- begin section tag-->
		<article class="flex"><!-- begin article -->
			<table class ="donations" ><!-- begin table -->

                <tr>
                    <td colspan="5"><h2>Church Sale Items</h2></td>
                </tr>
				<tr>
					<th id="totals">ID</th>
					<th id="totals">Product</th>
					<th id="totals">Price</th>
                    <th id="totals">Available</th>
					<th id="totals"></th>

				</tr>
				<?php

				//testing shopping cart

				$shoppingCart = \Itb\CartController::getShoppingCart();

				$products = Product::getAll();

				//-----------------------------
				foreach($products as $product):
//-----------------------------
					?>
					<tr class="odd">
                        <td><?= $product->getId() ?></td>
						<td id="refresh"><?= $product->getDescription() ?></td>
						<td >&euro; <?= number_format((float)$product->getPrice(), 2, '.', '') ?></td>
                        <td><?= $product->getQuantity() ?></td>
						<td><form action="index.php" method="get">
								<input type="hidden" name="action" value="addToCart">
								<input type="hidden" name="id" value="<?= $product->getId() ?>">
								<input type="submit" value="Add Item to Cart"></form></td>
					</tr>

					<?php
//-----------------------------
				endforeach;
				//-----------------------------
				?>
			</table><!-- close table -->



		</article><!-- close article -->	
    
		<article class="flex"><!-- begin article -->

			<?php
			//--------------------------------
			require_once '_cart.php';
			//--------------------------------
			?>


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