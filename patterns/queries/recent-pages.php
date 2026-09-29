<?php
/**
 * Title: Pages — Pages récentes
 * Slug: fse/query-recent-pages
 * Categories: fse-queries
 * Description: Affiche les pages les plus récemment publiées ou modifiées.
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
