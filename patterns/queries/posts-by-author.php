<?php
/**
 * Title: Query — Posts by author
 * Slug: fse/query-posts-by-author
 * Categories: fse-queries
 * Inserter: true
 *
 * @package FSE
 */
?>
<!-- wp:query {"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:post-title {"isLink":true,"level":3} /-->
		<!-- wp:post-date {"fontSize":"small"} /-->
		<!-- wp:post-author-name {"fontSize":"small"} /-->
		<!-- wp:post-excerpt /-->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
