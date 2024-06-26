import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // Pastikan jalur ini sesuai dengan struktur direktori Anda
                'vendor/filament/filament/resources/css/theme.css'
            ],
            refresh: true,
        }),
    ],
});
