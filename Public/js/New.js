
const newComponent = () =>
{
    //parent component
    return {
        render() {
            childProps = someProps;
            return Core.createComponent(
                {'header': [{'class': 'panel-header'}]},
                {'h1': [{'class': 'lead'}]}
            );
        }
    };
};
