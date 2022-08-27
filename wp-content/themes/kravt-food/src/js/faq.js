function faq() {
    document.addEventListener('click', (event) => {
        if (event.target.classList.contains('info')){
             event.target.classList.toggle('active');
        }   else if (event.target.parentNode.classList.contains('info')){
            event.target.parentNode.classList.toggle('active');
        }
    })

}

export default faq();