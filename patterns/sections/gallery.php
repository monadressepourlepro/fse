<?php
/**
 * Title: Gallery
 * Slug: fse/gallery
 * Categories: fse-content
 * Inserter: true
 *
 * @package FSE
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center">Galerie</h2>
		<!-- /wp:heading -->
		<!-- wp:gallery {"columns":3,"linkTo":"none","sizeSlug":"large"} -->
		<figure class="wp-block-gallery has-nested-images columns-3 is-cropped"></figure>
		<!-- /wp:gallery -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->