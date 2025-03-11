const { defineConfig } = require('vite');
const vue = require('@vitejs/plugin-vue');
const laravel = require('laravel-vite-plugin');

module.exports = defineConfig({
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
