<?php
/**
 * Title: Articles — Aléatoires
 * Slug: fse/query-random-posts
 * Categories: fse-queries
 * Description: Affiche une sélection aléatoire d’articles.
 * Inserter: true
 *
 * @package FSE
 */
?>
<!-- wp:query {"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"rand","inherit":false}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:post-title {"isLink":true,"level":3} /-->
		<!-- wp:post-date {"fontSize":"small"} /-->
		<!-- wp:post-excerpt /-->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
