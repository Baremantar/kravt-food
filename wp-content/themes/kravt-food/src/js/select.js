function select() {
    let list = document.getElementsByClassName('select-days')
    for (let item of list) {
        item.addEventListener('click', (element) => {
            element.target.getElementsByTagName('svg')[0].classList.toggle('active');
            if (element.target.classList.contains('select-days')) {
                element.target.classList.toggle('active');

            } else {
                element.target.parentNode.classList.toggle('active')

            }
        })
    }

}

export default select();