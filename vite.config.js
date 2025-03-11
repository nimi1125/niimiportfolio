import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import path from 'path';

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
    ],
    resolve: {
        alias: {
            'jquery': path.resolve(__dirname, 'node_modules/jquery/dist/jquery.js')
        }
    },
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
