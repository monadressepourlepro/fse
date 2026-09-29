import { defineConfig } from "vite";
import { resolve } from "path";

export default defineConfig({
  build: {
    outDir: resolve(__dirname, "assets/dist"),
    emptyOutDir: true,
    rollupOptions: {
      input: resolve(__dirname, "assets/js/main.js"),
      output: {
        entryFileNames: "main.js",
        assetFileNames: (assetInfo) => {
          if (assetInfo.name?.endsWith(".css")) {
            return "main.css";
          }

          return "assets/[name][extname]";
        },
      },
    },
  },
});