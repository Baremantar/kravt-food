function select() {
    document.getElementsByClassName('current')[0].addEventListener('click', (event) => {
        if (event.target.classList.contains('current')) {
            event.target.children[1].classList.toggle('active');
            event.target.parentNode.children[1].classList.toggle('active');
        }
    });
}

export default select();