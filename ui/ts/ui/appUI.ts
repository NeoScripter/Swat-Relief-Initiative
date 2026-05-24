import { DOMHelpers } from './domHelpers';

type AppElements = ReturnType<AppUI['initElements']>;

export class AppUI {
    elements: AppElements;

    constructor() {
        this.elements = this.initElements();
        this.bindEvents();
    }

    private initElements() {
        return {
            adaptiveImgs: DOMHelpers.qsa<HTMLDivElement>('.adaptive-img'),
        };
    }

    private bindEvents(): void {
        this.elements.adaptiveImgs.forEach((frame) => {
            const img = DOMHelpers.qs<HTMLImageElement>('img', frame);

            const handleImgLoad = () => {
                frame.style.backgroundImage = 'none';
                img.classList.remove('opacity-0');
                DOMHelpers.qs('.adaptive-overlay', frame).remove();
            };

            if (img.complete) {
                handleImgLoad();
            } else {
                img.addEventListener('load', () => handleImgLoad());
            }
        });
    }
}
