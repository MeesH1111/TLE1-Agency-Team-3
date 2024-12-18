import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/css/aboutUs.css', 'resources/css/categories.css', 'resources/css/login.css', 'resources/css/succes.css', 'resources/css/vacancy.css', 'resources/css/vacancyDetails.css', 'resources/css/werknemeruitleg.css', "resources/css/companies.css"],
            refresh: true,
        }),
    ],
});
