class Crud extends Create.View {}

fetch(url)
    .then(resource => resource.json)
    .then(data => {});

let fragment = document.createDocumentFragment();
let div = document.createElement('div');
let content = document.createTextNode(data.value);
fragment.appendChild(div).appendChild(content);
document.querySelector('main').appendChild(fragment);
