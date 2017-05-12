const createFragments = () =>
{
    const fragment = document.createDocumentFragment();
    
    const setAttributes = (element, attributes) => {
        for (let key in attributes) element.setAttribute(key, attributes[key]);
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

fetch(url).then(response => response.json()).then(data =>
{
    const fragment = createFragments();
    
    fragment.create(data.title, 'h1');
    
    fragment.create(data.description, 'p');
    
    Object.keys(data).forEach(key => {
        fragment.create(data[key].value, 'div', { 'class': 'examples' });
    });
    
    fragment.render();
});
