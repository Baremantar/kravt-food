function support() {
    if (document.getElementsByClassName("support")) {
        document.getElementsByClassName('support')[0].addEventListener('click', (element) => {
        element.target.closest('.support').classList.toggle('active');
        document.getElementById('background-popup').classList.toggle('active')
    })
    }
}

export default support();