const createFragments = () =>
{
    const fragment = document.createDocumentFragment();
    
    return {
        create(content, element = 'div', attribute = []) {
            let c = document.createTextNode(content);
            let e = document.createElement(element);
            if (attribute) e.setAttribute(...attribute);
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
    
    Object.key(data).forEach(key => {
        fragment.create(data[key], 'div', ['class', 'examples']);
    });
    
    fragment.render();
});
