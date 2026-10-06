<?php
/**
 * Title: Section — Latest posts
 * Slug: fse/section-latest-posts
 * Categories: fse-sections
 * Inserter: true
 *
 * @package FSE
 */
?>
<!-- wp:group {"align":"full","style":{"templateLock":"contentOnly","spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Derniers articles</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size">Découvrez nos dernières actualités, conseils et publications.</p>
		<!-- /wp:paragraph -->

		<!-- wp:query {"align":"wide","query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true,"height":"240px"} /-->
					<!-- wp:post-date {"fontSize":"small"} /-->
					<!-- wp:post-title {"isLink":true,"level":3} /-->
					<!-- wp:post-excerpt /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Voir tous les articles</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
