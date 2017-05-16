const crud = Object.create(main);

crud.buildEvents = () =>
{
    const event = createEventListeners();
    
    event.create('click', 'crud.buildResults');
    
    event.render();
};

crud.buildContent = (data) => 
{
    const fragment = createFragments();
    
    fragment.create(data.title, 'h1');
    
    fragment.create(data.description, 'p');
    
    Object.keys(data).forEach(key => {
        fragment.create(data[key].value, 'div', { 'class': 'examples' });
    });
    
    fragment.render();
};
    
crud.buildResults = () =>
{
    fetch(url)
        .then(response => response.json())
        .then(data => { this.buildContent(data) });
};
