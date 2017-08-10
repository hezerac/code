
const Dashboard = data => {
    
    const component = Core.createComponent();
    
    component.addElement(data.title, 'h1');
    
    component.addElement(data.description, 'article', {'id': 'parent'});
    
    component.appendElement('submit', 'button', {'onclick': 'action()'}, 'parent');
    
    Object.keys(data).forEach(key => {
        component.appendElement(data[key].value, 'div', {'class': 'examples'});
    });
    
    component.render();
};
    
dashboard.render = () =>
{
    fetch(url)
        .then(response => response.json())
        .then(data => component(data));
};
