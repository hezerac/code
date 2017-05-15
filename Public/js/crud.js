const main = {};

main.createEventListeners = (events = {}) => 
{
    return {
        create(event, callback) {
            events.event = callback;
        },
        render() {
            for (let key in events) {
                document.body.addEventListener(key, events[key]());
            }
        }
    };
}
    
main.createFragments = () =>
{
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

const crud = Object.create(main);

const buildEvents = () =>
{
    const event = createEventListeners();
    
    event.create('click', 'buildResults');
    
    event.render();
};

const buildResults = () =>
{
    fetch(url)
        .then(response => response.json())
        .then(data => { buildContent(data) });
};

const buildContent = (data) => 
{
    const fragment = createFragments();
    
    fragment.create(data.title, 'h1');
    
    fragment.create(data.description, 'p');
    
    Object.keys(data).forEach(key => {
        fragment.create(data[key].value, 'div', { 'class': 'examples' });
    });
    
    fragment.render();
};
    

