
const parentComponent = () =>
{
    return {
        render() {
            const childProps = 'lead';
            return Component.create(
                {'header': {'class': 'panel-header'}},
                childComponent(childProps);
            );
        }
    };
};

const childComponent = props => 
{
    return {
        Component.state = {
            'clicks': 0
        };
    
        handleSubmit() {
            const currentState = Component.state.clicks;
            Component.setState({
                'clicks': currentState + 1
            });
        };
        //Core renders components internally
        render() {
            return [
                {'h1': {'class': props}}
            ];
        }
    };
};

Component.render(
    parentComponent(),
    document.getElementById('root')
);
