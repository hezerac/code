const scope = {};
(() => {
    const bindClasses = ["name", "age"];
    const attachEvent = classNames => {
        classNames.forEach(className => {
            let elements = document.getElementsByClassName(className);
            Object.keys(elements).forEach(key => {
                elements[key].onkeyup = () => {
                    for (let index in elements) {
                        elements[index].value = this.value;
                    }
                };
            });
            Object.defineProperty($scope, className, {
                set(newValue) {
                    for (var index in elements) {
                        elements[index].value = newValue;
                    }
                }
            });
        });
    };
    attachEvent(bindClasses);
})();
