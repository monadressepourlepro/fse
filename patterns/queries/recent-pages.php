<?php
/**
 * Title: Query — Recent pages
 * Slug: fse/query-recent-pages
 * Categories: fse-queries
 * Inserter: true
 *
 * @package FSE
 */
?>
<!-- wp:query {"query":{"perPage":6,"postType":"page","order":"desc","orderBy":"date","inherit":false}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:post-title {"isLink":true,"level":3} /-->
		<!-- wp:post-excerpt /-->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
