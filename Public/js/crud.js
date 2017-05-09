
const create = (data, elements = []) =>
{
    const fragment = document.createDocumentFragment();
    
    Object.keys(data).forEach(key =>
    {
        const element = document.createElement(elements[key] || 'div');
        
        const content = document.createTextNode(data[key]);
        
        fragment.appendChild(element).appendChild(content);
    });
    
    document.querySelector('main').appendChild(fragment);
}

fetch(url)
    .then(response => response.json)
    .then(data => create(data));


