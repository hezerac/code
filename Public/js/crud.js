
const create = (...args) =>
{
    const fragment = document.createDocumentFragment();
    
    for(let i = args[2] || 1; i > 0; i--) 
    {
        let element = document.createElement(args[1] || 'div');
        
        let content = document.createTextNode(args[0]);
        
        fragment.appendChild(element).appendChild(content);
    }
    
    document.querySelector('main').appendChild(fragment);
}


fetch(url)
    .then(resource => resource.json)
    .then(data => create(data, null, 7));


