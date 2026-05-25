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
            navPopup: DOMHelpers.getElementById<HTMLDialogElement>('nav-popup'),
            openNavMenuBtn:
                DOMHelpers.getElementById<HTMLDivElement>('open-nav-menu-btn'),
            closeNavMenuBtn:
                DOMHelpers.getElementById<HTMLDivElement>('close-nav-menu-btn'),
        };
    }

    private bindEvents(): void {
        this.elements.adaptiveImgs.forEach((container) =>
            this.handleImageLoaded(container)
        );

        this.elements.lazyVideos.forEach((video) =>
            this.deferVideoLoading(video)
        );

        this.elements.openNavMenuBtn.addEventListener('click', () => {
            this.elements.navPopup.showModal();
        });

        this.elements.closeNavMenuBtn.addEventListener('click', () => {
            this.elements.navPopup.close();
        });

        this.elements.navPopup.addEventListener('click', (e) => {
            if (e.target === this.elements.navPopup) {
                this.elements.navPopup.close();
            }
        });
    }

    private deferVideoLoading(video: HTMLVideoElement) {
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
    }

    private handleImageLoaded(container: HTMLDivElement) {
        const img = DOMHelpers.qs<HTMLImageElement>('img', container);

        const handleImgLoad = () => {
            container.style.backgroundImage = 'none';
            img.classList.remove('opacity-0');
            DOMHelpers.qs('.adaptive-overlay', container).remove();
        };

        if (img.complete) {
            handleImgLoad();
        } else {
            img.addEventListener('load', () => handleImgLoad());
        }
    }
}
