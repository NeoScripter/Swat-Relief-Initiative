import '../css/styles.css'
import { AppUI } from './ui/appUI';

class App {
    ui: AppUI | null;
    constructor() {
        this.ui = null;
    }

    init() {
        try {
            this.ui = new AppUI();
            console.log('App initialized successfully');
        } catch (error) {
            console.error('Failed to initialize app:', error);
        }
    }
}

// Global app instance
let app: App | null;

// Initialize the application when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    app = new App();
    app.init();
});

window.addEventListener('load', () => {
    if (!app) {
        app = new App();
        app.init();
    }
});
