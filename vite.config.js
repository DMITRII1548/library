import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/header.css',
                'resources/css/home.css',

                'resources/css/book/index.css',
                'resources/css/book/show.css',

                'resources/css/auth/register.css',

                'resources/css/user/book/index.css',


                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
