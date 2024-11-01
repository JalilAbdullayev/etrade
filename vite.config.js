import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/front/css/vendor/bootstrap.min.css',
                'public/front/css/vendor/font-awesome.css',
                'public/front/css/vendor/flaticon/flaticon.css',
                'public/front/css/vendor/slick.css',
                'public/front/css/vendor/slick-theme.css',
                'public/front/css/vendor/jquery-ui.min.css',
                'public/front/css/vendor/sal.css',
                'public/front/css/vendor/magnific-popup.css',
                'public/front/css/vendor/base.css',
                'public/front/css/style.min.css',
                'public/back/css/style.min.css',
                'public/back/node_modules/toast-master/css/jquery.toast.css'
            ],
            refresh: true,
        }),
    ],
});
