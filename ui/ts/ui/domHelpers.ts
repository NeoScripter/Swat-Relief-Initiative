export class DOMHelpers {
    static getElementById<T extends HTMLElement>(id: string): T {
        const element = document.getElementById(id);
        if (!element) {
            throw new Error(`Element with id '${id}' not found`);
        }
        return element as T;
    }

    static qsa<T extends Element>(selector: string, parent: Element | Document = document): NodeListOf<T> {
        const elements = parent.querySelectorAll<T>(selector);
        if (!elements) {
            throw new Error(`Could not find elements with '${selector}' selector`);
        }
        return elements;
    }

    static qs<T extends Element>(selector: string, parent: Element | Document = document): T {
        const element = parent.querySelector<T>(selector);
        if (!element) {
            throw new Error(`Could not find an element with '${selector}' selector`);
        }
        return element;
    }
}
