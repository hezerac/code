
const Dashboard = data => {
    
    const component = Core.createComponent();
    
    component.addElement('article')
        .withAttributes({
            'id': 'parent',
            'class': 'articles',
            'data-type': 'container'
        });
        
    component.addElement('h1')
        .withAttributes({'id': 'title'})
        .withContent(data.title)
        .appendTo('parent');
    
    Object.keys(data).forEach(key => {
        component.addElement('p')
            .withAttributes({'class': 'examples'})
            .withContent(data.value[key])
            .appendTo('parent');
    });
    
    component.addElement('button')
        .withAttributes({'onclick': 'Dashboard.action()'})
        .withContent('Submit')
        .appendTo('parent');
        
    component.render(
        Dashboard,
        '/api/v1/dashboard'
    );
    
    return {
        action() {
            alert('this is a test.');
        }
    };
};
