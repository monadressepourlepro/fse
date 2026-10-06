<?php
/**
 * Title: Posts — 2 columns
 * Slug: fse/posts-grid-2
 * Categories: fse-content
 * Inserter: true
 *
 * @package FSE
 */
?>
<!-- wp:query {"align":"wide","query":{"perPage":4,"postType":"post","order":"desc","orderBy":"date","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true,"height":"300px","sizeSlug":"large"} /-->
			<!-- wp:post-date {"fontSize":"small"} /-->
			<!-- wp:post-title {"isLink":true,"level":3} /-->
			<!-- wp:post-excerpt /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
