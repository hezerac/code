
import Component from 'Component';

export default class Dashboard extends Component
{
    constructor() {
        super();
    }
    
    buildComponent() {
        fetch('/api/v1/dashboard'
            .then(response => response.json())
            .then(data => this.templateComponent(data));
    }
    
    templateComponent(data) {
        const template = Core.createTemplate();
    
        template.addElement('article')
            .withAttributes({
                'id': 'parent',
                'class': 'articles',
                'data-type': 'container'
            });
        
        template.addElement('h1')
            .withAttributes({'id': 'title'})
            .withContent(data.title)
            .appendTo('parent');
    
        Object.keys(data).forEach(key => {
            template.addElement('p')
                .withAttributes({'class': 'examples'})
                .withContent(data.value[key])
                .appendTo('parent');
        });
    
        template.addElement('button')
            .withAttributes({'onclick': 'methods.action()'})
            .withContent('Submit')
            .appendTo('parent');
        
        template.render()
    }
    
    action() {
        alert('this is a test.');
    }
}
