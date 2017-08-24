
const parentComponent = () => {
    const childProps = 'lead';
    return [
        {'header': {'class': 'panel-header'}},
        ...childComponent(childProps);
    ];
};

const childComponent = props => {
    const state = {
        'clicks': 0
    };
    
    const handleSubmit = () => {
        const currentState = Component.state.clicks;
        Core.setState({
            'clicks': currentState + 1
        });
    };
    return [
        {'h1': {'class': props}}
    ];
};

Core.render(
    parentComponent(),
    document.getElementById('root')
);
