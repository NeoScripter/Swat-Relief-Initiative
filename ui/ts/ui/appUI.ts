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
            lazyVideos: DOMHelpers.qsa<HTMLVideoElement>('video[data-lazy]'),
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

        this.elements.lazyVideos.forEach((video) => {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (!entry.isIntersecting) return;

                        video
                            .querySelectorAll('source[data-src]')
                            .forEach((source) => {
                                const dataSrc = source.getAttribute('data-src');

                                if (dataSrc) {
                                    source.setAttribute('src', dataSrc);
                                    source.removeAttribute('data-src');
                                }
                            });

                        video.load();
                        observer.disconnect();
                    });
                },
                { rootMargin: '200px' }
            ); 

            observer.observe(video);
        });
    }
}
