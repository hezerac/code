//Controller executed by event
const NewController = () =>
{
    try {
        const request = fetch('/api/newapi');
    
        const data = newModel(request);
    
        return something;
        
    } catch (exception) {
        console.log(exception);
    }
};

const NewModel =(request) =>
{
    //validation and massaging
    
    request.then(data => data)
    
    return ;
}
