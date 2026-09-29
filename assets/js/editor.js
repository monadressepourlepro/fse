const { registerBlockVariation } = window.wp.blocks;

registerBlockVariation("core/query", {
  name: "fse-posts",
  title: "FSE — Articles",
  description: "Articles configurables dans le cadre du système FSE.",
  icon: "admin-post",
  scope: ["inserter"],
  isActive: (attributes) => attributes.namespace === "fse-posts",
  attributes: {
    namespace: "fse-posts",
    query: {
      perPage: 3,
      postType: "post",
      order: "desc",
      orderBy: "date",
      sticky: "ignore",
      inherit: false,
      exclude: [],
      taxQuery: null,
      author: "",
      search: ""
    }
  },
  allowedControls: ["order", "sticky", "taxQuery", "author", "search"]
});

registerBlockVariation("core/query", {
  name: "fse-pages",
  title: "FSE — Pages",
  description: "Pages configurables dans le cadre du système FSE.",
  icon: "admin-page",
  scope: ["inserter"],
  isActive: (attributes) => attributes.namespace === "fse-pages",
  attributes: {
    namespace: "fse-pages",
    query: {
      perPage: 6,
      postType: "page",
      order: "asc",
      orderBy: "menu_order",
      inherit: false,
      exclude: [],
      parents: [],
      search: ""
    }
  },
  allowedControls: ["order", "parents", "search"]
});

registerBlockVariation("core/query", {
  name: "fse-related-posts",
  title: "FSE — Articles similaires",
  description: "Articles similaires avec exclusion de l’article courant.",
  icon: "admin-post",
  scope: ["inserter"],
  isActive: (attributes) => attributes.namespace === "fse-related-posts",
  attributes: {
    namespace: "fse-related-posts",
    query: {
      perPage: 3,
      postType: "post",
      order: "desc",
      orderBy: "date",
      sticky: "ignore",
      inherit: false,
      exclude: [],
      taxQuery: null,
      author: ""
    }
  },
  allowedControls: ["order", "taxQuery", "author"]
});
