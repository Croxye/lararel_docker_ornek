import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    server: {
        host: "0.0.0.0",
        hmr: {
            clientPort: 5173,
            host: "laravelornek1.test",
        },
        port: 5173,
        watch: {
            usePolling: true,
        },
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
