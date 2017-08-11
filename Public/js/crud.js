
const Dashboard = data => {
    
    let state = {};
    
    return () => {
        
        const component = Core.createComponent();
    
        component.addElement('article', {'id': 'parent'});
        
        component.addElement('h1', {}, data.title)
            .appendTo('parent');
    
        component.addElement('button', {'onclick': 'action()'}, 'Submit')
            .appendTo('parent');
        
        component.addElement('p', {}, data.text)
            .appendTo('parent');
    
        Object.keys(data).forEach(key => {
            component.addElement('p', {'class': 'examples'}, data.value[key])
                .appendTo('parent');
        });
    
        component.render();
    }
};
    
dashboard.render = () =>
{
    fetch(url)
        .then(response => response.json())
        .then(data => component(data));
};
