const createFragments = () =>
{
    const fragment = document.createDocumentFragment();
    
    return {
        add(content, element) {
            let c = document.createTextNode(content);
            let e = document.createElement(element);
            fragment.appendChild(e).appendChild(c);
        },
        make(element = 'main') {
            if (!fragment.hasChildNodes()) return;
            document.querySelector(element).appendChild(fragment);
        }
    };
}

fetch(url).then(response => response.json()).then(data =>
{
    const fragment = createFragments();
    
    Object.key(data).forEach(key => {
        fragment.add(data[key], 'div');
    });
    
    fragment.make();
});
