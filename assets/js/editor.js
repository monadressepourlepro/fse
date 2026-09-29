import { registerBlockVariation } from "@wordpress/blocks";

registerBlockVariation("core/query", {
	name: "fse-posts",
	title: "FSE — Articles",
	description: "Articles configurables avec les contrôles éditoriaux essentiels.",
	icon: "admin-post",
	isActive: (blockAttributes) => blockAttributes.namespace === "fse-posts",
	attributes: {
		namespace: "fse-posts",
		query: {
			perPage: 3,
			pages: 0,
			offset: 0,
			postType: "post",
			order: "desc",
			orderBy: "date",
			author: "",
			search: "",
			exclude: [],
			sticky: "ignore",
			inherit: false,
			taxQuery: null,
			parents: [],
			format: [],
			excludeCurrent: false
		}
	},
	allowedControls: [
		"order",
		"sticky",
		"taxQuery",
		"author",
		"search"
	]
});

registerBlockVariation("core/query", {
	name: "fse-pages",
	title: "FSE — Pages",
	description: "Pages configurables avec filtrage par parent.",
	icon: "admin-page",
	isActive: (blockAttributes) => blockAttributes.namespace === "fse-pages",
	attributes: {
		namespace: "fse-pages",
		query: {
			perPage: 6,
			pages: 0,
			offset: 0,
			postType: "page",
			order: "asc",
			orderBy: "menu_order",
			author: "",
			search: "",
			exclude: [],
			sticky: "",
			inherit: false,
			taxQuery: null,
			parents: [],
			format: [],
			excludeCurrent: false
		}
	},
	allowedControls: [
		"order",
		"parents",
		"search"
	]
});

registerBlockVariation("core/query", {
	name: "fse-related-posts",
	title: "FSE — Articles similaires",
	description: "Articles excluant automatiquement l’article courant.",
	icon: "admin-post",
	isActive: (blockAttributes) => blockAttributes.namespace === "fse-related-posts",
	attributes: {
		namespace: "fse-related-posts",
		query: {
			perPage: 3,
			pages: 0,
			offset: 0,
			postType: "post",
			order: "desc",
			orderBy: "date",
			author: "",
			search: "",
			exclude: [],
			sticky: "ignore",
			inherit: false,
			taxQuery: null,
			parents: [],
			format: [],
			excludeCurrent: true
		}
	},
	allowedControls: [
		"order",
		"taxQuery",
		"author"
	]
});
