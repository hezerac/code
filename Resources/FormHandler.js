class FormProcessor {
    
    post(form) {
        const data = new FormData(form);
        fetch('/', { method: 'post', body: data });
    }



}
