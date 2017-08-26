const scope = {};
(() => {
    const bindClasses = ["name", "age"];
    const attachEvent = classNames => {
        classNames.forEach(className => {
            let elements = document.getElementsByClassName(className);
            createAciom(elements);
            createProps(elements);
        });
    };
    const createAction = elements => Object.keys(elements).forEach(key => {
        elements[key].onkeyup = () => {
            setValues(elements, this.value);
        };
    });
    const createProps = elements => Object.defineProperty(scope, className, {
        set(newValue) {
            setValues(elements, newValue);
        }
    });
    const setValues = (elements, value) => Object.keys(elements).forEach(key => elements[key].value = value);
    attachEvent(bindClasses);
})();
