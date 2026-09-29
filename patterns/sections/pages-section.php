<?php
/**
 * Title: Section — Pages
 * Slug: fse/section-pages
 * Categories: fse-sections
 * Inserter: true
 *
 * @package FSE
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Nos pages</h2>
		<!-- /wp:heading -->
		<!-- wp:query {"query":{"perPage":6,"postType":"page","order":"asc","orderBy":"menu_order","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true,"height":"220px"} /-->
					<!-- wp:post-title {"isLink":true,"level":3} /-->
					<!-- wp:post-excerpt /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
