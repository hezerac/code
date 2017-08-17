
import Component from 'Component';

export default class Dashboard extends Component
{
    constructor() {
        super();
    }
    
    async buildComponent() {
        const response = await fetch('/api/v1/dashboard');
        const data = await response.json();
        return this.componentTemplate(data);
    }
    
    componentTemplate(data) {
        const template = Core.createTemplate();
    /*
    In Core when add element is run if exists remove from dom the container element id
    Then append the submissions to an element id then thats what goes to fragment.
    Actually it should be removed from dom in render method just before fragment append.
    */
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
    
        Object.keys(data).forEach(key =>
            template.addElement('p')
                .withAttributes({'class': 'examples'})
                .withContent(data.value[key])
                .appendTo('parent')
        );
    
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
