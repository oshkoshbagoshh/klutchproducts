import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
            '~': '/resources/css',
        },
    },
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `
                    @import "resources/css/_variables.scss";
                    @import "resources/css/_mixins.scss";
                `
            }
        }
    },
    build: {
        chunkSizeWarningLimit: 1600,
    },
    server: {
        hmr: {
            host: 'localhost',
        },
    },
});
