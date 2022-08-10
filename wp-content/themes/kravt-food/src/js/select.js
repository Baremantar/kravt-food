import {forEach} from "@splidejs/splide/src/js/utils";

function select() {
    let list = document.getElementsByClassName('select-days')
    for (let item of list) {
        item.addEventListener('click', (element) => {
            if (element.target.classList.contains('select-days')) {
            element.target.classList.toggle('active')
            }                                              else {
                element.target.parentNode.classList.toggle('active')
            }
        })
    }

}

export default select();