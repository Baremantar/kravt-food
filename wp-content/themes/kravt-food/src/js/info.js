function info() {

    if (document.getElementsByClassName('menus')) {
        document.getElementsByClassName('menus')[0]
            .querySelector('h3 img')
            .addEventListener('mouseenter', (element) => {
                element.target.offsetParent.querySelector('.menus-info').classList.toggle('active');
            })
        document.getElementsByClassName('menus')[0]
            .querySelector('h3 img')
            .addEventListener('mouseleave', (element) => {
                element.target.offsetParent.querySelector('.menus-info').classList.toggle('active')
            })
    }

    if (document.getElementsByClassName('nutrition')) {
        document.getElementsByClassName('nutrition')[0]
            .querySelector('.nutrition-info')
            .offsetParent
            .lastElementChild
            .addEventListener('mouseenter', (element) => {
                element.target.parentElement.offsetParent.querySelector('.nutrition-info').classList.toggle('active')
            })
        document.getElementsByClassName('nutrition')[0]
            .querySelector('.nutrition-info')
            .offsetParent
            .lastElementChild
            .addEventListener('mouseleave', (element) => {
                element.target.parentElement.offsetParent.querySelector('.nutrition-info').classList.toggle('active')
            })
    }
}

export default info()