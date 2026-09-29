<?php
/**
 * Title: Posts — 3 columns
 * Slug: fse/posts-grid-3
 * Categories: fse-content
 * Inserter: true
 *
 * @package FSE
 */
?>
<!-- wp:query {"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
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
