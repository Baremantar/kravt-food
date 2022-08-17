function support() {
    if (document.getElementsByClassName("support")) {
        document.getElementsByClassName('support')[0].addEventListener('click', (element) => {
        document.getElementsByClassName('support')[0].classList.toggle('active');
    })
    }
}

export default support();