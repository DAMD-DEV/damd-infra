import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',

                'resources/scss/cart.scss',
                'resources/scss/front.scss',

                'resources/css/base.css',
                'resources/css/style.css',
                'resources/css/modal.css',
                'resources/css/products_head.css',

                'resources/css/common.css',
                'resources/css/common-sp.css',
                'resources/css/general.css',
                'resources/css/general-sp.css',

                'resources/js/update.js',
                'resources/js/jquery.tile.js',
                'resources/js/form.js',
                'resources/js/mitsumori.js',
                'resources/js/mitsumori2.js',
            ],
            refresh: true,
        }),
    ],
});
