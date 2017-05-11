const createFragments = () =>
{
    const fragment = document.createDocumentFragment();
    
    return {
        create(content, element = 'div', attribute = []) {
            let c = document.createTextNode(content);
            let e = document.createElement(element);
            if (attribute.length) e.setAttribute(...attribute);
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
    
    Object.key(data).forEach(key => {
        fragment.create(data[key].value, 'div', ['class', 'examples']);
    });
    
    fragment.render();
});
