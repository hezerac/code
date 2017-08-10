/*
const dashboard = Object.create(main);

crud.buildEvents = () =>
{
    const event = this.createEventListeners();
    
    event.create('click', 'crud.buildResults');
    
    event.render();
};
*/

const component = (data) => {
    
    const fragment = this.createFragments();
    
    fragment.create(data.title, 'h1');
    
    fragment.create(data.description, 'p');
    
    fragment.create('submit', 'button', 'action()');
    
    //figure out how to nest fragments
    
    Object.keys(data).forEach(key => {
        fragment.create(data[key].value, 'div', { 'class': 'examples' });
    });
    
    fragment.render();
};
    
dashboard.render = () =>
{
    fetch(url)
        .then(response => response.json())
        .then(data => component(data));
};
