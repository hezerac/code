class Crud extends Create.View {}

fetch(url)
	.then(resource => resource.json)
	.then(data => {});

let fragment = document.createDocumentFragment();
let div = document.createElement('div');
div.innerHTML = data;
fragment.appendChild(div);
document.querySelector('main').appendChild(fragment);
