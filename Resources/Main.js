const main = {
    createEventListeners(events = {}) {
        return {
            create(event, callback) {
                events.event = callback;
            },
            render() {
                for (let key in events) {
                    document.body.addEventListener(key, events[key]);
                }
            }
        };
    },
    createFragments() {
        const fragment = document.createDocumentFragment();
    
        const setAttributes = (element, attributes) => {
            for (let key in attributes) {
                element.setAttribute(key, attributes[key]);
            }
        };
    
        return {
            create(content, element = 'div', attributes = {}) {
                let c = document.createTextNode(content);
                let e = document.createElement(element);
                if (Object.keys(attributes).length) setAttributes(e, attributes);
                fragment.appendChild(e).appendChild(c);
            },
            render(element = 'main') {
                if (!fragment.hasChildNodes()) return;
                document.querySelector(element).appendChild(fragment);
            }
        };
    }
};
