<?php
/**
 * Title: Articles — Par catégorie
 * Slug: fse/query-posts-by-category
 * Categories: fse-queries
 * Description: Affiche les articles appartenant à une catégorie sélectionnée.
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
		<!-- wp:post-excerpt /-->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
