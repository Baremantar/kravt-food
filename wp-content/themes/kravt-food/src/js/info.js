function info() {
    if (document.getElementsByClassName('menus')) {
        document.getElementsByClassName('menus')[0].children[0].children[1].children[1].addEventListener('mouseenter', (element) => {
            console.dir(element)
            document.getElementsByClassName('menus-info')[0].classList.toggle('active')
        })
        document.getElementsByClassName('menus')[0].children[0].children[1].children[1].addEventListener('mouseleave', (element) => {
            document.getElementsByClassName('menus-info')[0].classList.toggle('active')
        })
    }

    if (document.getElementsByClassName('nutrition')) {
        document.getElementsByClassName('nutrition')[0].children[0].children[2].children[1].children[0].children[1].addEventListener('mouseenter', (element) => {
            document.getElementsByClassName('nutrition-info')[0].classList.toggle('active')
        })
        document.getElementsByClassName('nutrition')[0].children[0].children[2].children[1].children[0].children[1].addEventListener('mouseleave', (element) => {
            document.getElementsByClassName('nutrition-info')[0].classList.toggle('active')
        })
    }
}

export default info()