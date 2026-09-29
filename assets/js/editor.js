const { registerBlockVariation } = window.wp.blocks;

const fsePostsQuery = {
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
    };

const registerPostsView = ({ name, title, description, displayLayout, innerBlocks }) => {
  registerBlockVariation("core/query", {
    name,
    title,
    description,
    icon: "admin-post",
    scope: ["inserter"],
    isActive: (attributes) => attributes.namespace === name,
    attributes: {
      namespace: name,
      query: fsePostsQuery,
      displayLayout
    },
    innerBlocks,
    allowedControls: ["order", "sticky", "taxQuery", "author", "search"]
  });
};

registerPostsView({
  name: "fse-posts-list",
  title: "FSE — Articles — Liste",
  description: "Affiche les articles sous forme de liste.",
  displayLayout: {
    type: "list"
  },
  innerBlocks: [
      [
        "core/post-template",
        {},
        [
          ["core/post-featured-image", { isLink: true, aspectRatio: "16/9" }],
          ["core/post-date", { fontSize: "small" }],
          ["core/post-title", { isLink: true, level: 3 }],
          ["core/post-excerpt"]
        ]
      ]
    ]
});

registerPostsView({
  name: "fse-posts-grid-2",
  title: "FSE — Articles — Grille 2 colonnes",
  description: "Affiche les articles sous forme de grille sur 2 colonnes.",
  displayLayout: {
    type: "flex",
    columns: 2
  },
  innerBlocks: [
      [
        "core/post-template",
        {},
        [
          ["core/post-featured-image", { isLink: true, aspectRatio: "4/3" }],
          ["core/post-date", { fontSize: "small" }],
          ["core/post-title", { isLink: true, level: 3 }],
          ["core/post-excerpt"]
        ]
      ]
    ]
});

registerPostsView({
  name: "fse-posts-grid-3",
  title: "FSE — Articles — Grille 3 colonnes",
  description: "Affiche les articles sous forme de grille sur 3 colonnes.",
  displayLayout: {
    type: "flex",
    columns: 3
  },
  innerBlocks: [
      [
        "core/post-template",
        {},
        [
          ["core/post-featured-image", { isLink: true, aspectRatio: "4/3" }],
          ["core/post-date", { fontSize: "small" }],
          ["core/post-title", { isLink: true, level: 3 }],
          ["core/post-excerpt"]
        ]
      ]
    ]
});

registerPostsView({
  name: "fse-posts-grid-4",
  title: "FSE — Articles — Grille 4 colonnes",
  description: "Affiche les articles sous forme de grille sur 4 colonnes.",
  displayLayout: {
    type: "flex",
    columns: 4
  },
  innerBlocks: [
      [
        "core/post-template",
        {},
        [
          ["core/post-featured-image", { isLink: true, aspectRatio: "4/3" }],
          ["core/post-date", { fontSize: "small" }],
          ["core/post-title", { isLink: true, level: 3 }],
          ["core/post-excerpt"]
        ]
      ]
    ]
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
