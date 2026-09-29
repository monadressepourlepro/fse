<?php
/**
 * Title: Pages — Pages enfants
 * Slug: fse/query-child-pages
 * Categories: fse-queries
 * Description: Affiche les pages enfants rattachées à une page parente.
 * Inserter: true
 *
 * @package FSE
 */
?>
<!-- wp:query {"query":{"perPage":6,"postType":"page","order":"asc","orderBy":"menu_order","inherit":false}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:post-title {"isLink":true,"level":3} /-->
		<!-- wp:post-excerpt /-->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
