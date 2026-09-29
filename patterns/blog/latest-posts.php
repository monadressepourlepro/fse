<?php
/**
 * Title: Latest posts
 * Slug: fse/latest-posts
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
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Derniers articles</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date"},"displayLayout":{"type":"flex","columns":3}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true,"height":"220px"} /-->
					<!-- wp:post-date {"fontSize":"small"} /-->
					<!-- wp:post-title {"isLink":true,"level":3} /-->
					<!-- wp:post-excerpt {"moreText":"Lire l’article"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->