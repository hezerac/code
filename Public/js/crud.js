
const Dashboard = (props) => {
    
    const component = Core.createComponent();
    
    component.addElement(props.title, 'h1');
    
    component.addElement(props.description, 'article', {'id': 'parent'});
    
    component.appendElement('submit', 'button', {'onclick': 'action()'}, 'parent');
    
    Object.keys(props).forEach(key => {
        component.appendElement(props[key].value, 'div', {'class': 'examples'});
    });
    
    component.render();
};
    
dashboard.render = () =>
{
    fetch(url)
        .then(response => response.json())
        .then(data => component(data));
};
