import { defineConfig } from 'vite';
import { resolve } from 'path';
import tailwindcss from '@tailwindcss/vite';

const VALET_HOST = 'swatreliefinitiative.test';
const VITE_PORT = 5173;

export default defineConfig({
    build: {
        outDir: 'public/dist',
        rollupOptions: {
            input: 'ui/ts/main.ts',
        },
        copyPublicDir: false,
    },
    server: {
        host: 'localhost',
        port: VITE_PORT,
        strictPort: true,

        origin: `http://${VALET_HOST}`,

        hmr: {
            host: 'localhost',
            port: VITE_PORT,
            protocol: 'ws',
        },

        cors: {
            origin: [`http://${VALET_HOST}`, `https://${VALET_HOST}`],
        },

        watch: {
            ignored: [resolve(__dirname, 'public/**')],
        },
    },
    plugins: [tailwindcss()],
});
