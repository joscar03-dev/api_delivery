import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','public/filament/css/filament.css', 'public/filament/js/filament.js'],
            refresh: true,
        }),
    ],
});
