import { defineConfig } from 'vite';
import { resolve } from 'path';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    build: {
        outDir: 'public/dist',
        rolldownOptions: {
            input: 'ui/ts/main.ts',
        },
        copyPublicDir: false,
    },
    server: {
        cors: true,
        watch: {
            ignored: [resolve(__dirname, 'public/**')],
        },
    },
    plugins: [
        tailwindcss(),
    ],
});
