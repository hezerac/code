class Crud extends Create.Section {
    
	
	render() {
		return ();
	}

}


let fragment = document.createDocumentFragment();
let div = document.createElement('div');
div.innerHTML = 'data';
fragment.appendChild(div);
document.querySelector('main').appendChild(fragment);
