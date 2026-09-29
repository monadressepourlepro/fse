<?php
/**
 * Title: Section — Search results
 * Slug: fse/section-search-results
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
		<!-- wp:search {"label":"Rechercher","showLabel":false,"buttonText":"Rechercher"} /-->
		<!-- wp:query {"query":{"perPage":10,"inherit":true}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"isLink":true,"level":3} /-->
					<!-- wp:post-excerpt /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
			<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
			<!-- wp:query-no-results -->
				<!-- wp:paragraph -->
				<p>Aucun résultat trouvé.</p>
				<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
