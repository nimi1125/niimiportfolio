import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        vue(), 
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/reset.css',
                'resources/css/style.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    base: '/build/', 
    build: {
        outDir: 'public/build', 
        emptyOutDir: true,
        rollupOptions: {
            output: {
                globals: {
                    jquery: 'window.jQuery',
                }
            }
        }
    }
});
