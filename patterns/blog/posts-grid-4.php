<?php
/**
 * Title: Posts — 4 columns
 * Slug: fse/posts-grid-4
 * Categories: fse-content
 * Inserter: true
 *
 * @package FSE
 */
?>
<!-- wp:query {"query":{"perPage":4,"postType":"post","order":"desc","orderBy":"date","inherit":false},"displayLayout":{"type":"flex","columns":4}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true,"height":"220px"} /-->
			<!-- wp:post-date {"fontSize":"small"} /-->
			<!-- wp:post-title {"isLink":true,"level":3} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
