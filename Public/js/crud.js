
const Dashboard = (props) => {
    
    const component = Core.createComponents();
    
    component.create(props.title, 'h1');
    
    component.create(props.description, 'article', {'id': 'parent'});
    
    component.append('submit', 'button', {'onclick': 'action()'}, 'parent');
    
    Object.keys(props).forEach(key => {
        component.create(props[key].value, 'div', {'class': 'examples'});
    });
    
    component.render();
};
    
dashboard.render = () =>
{
    fetch(url)
        .then(response => response.json())
        .then(data => component(data));
};
