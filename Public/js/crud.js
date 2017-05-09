
const create = (data, elements = []) =>
{
    const fragment = document.createDocumentFragment();
    
    for(let i = 0; i < data.length; i++) 
    {
        const element = document.createElement(elements[i] || 'div');
        
        const content = document.createTextNode(data[i]);
        
        fragment.appendChild(element).appendChild(content);
    }
    
    document.querySelector('main').appendChild(fragment);
}

fetch(url)
    .then(resource => resource.json)
    .then(data => create(data));


