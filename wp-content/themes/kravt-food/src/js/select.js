function select() {
    if (document.getElementsByClassName('select-days')) {
        for (let item of document.getElementsByClassName('select-days')) {
            item.addEventListener('click', (event) => {
                event.target.closest('.select-days').children[1].classList.toggle('active');
                event.target.closest('.select-days').classList.toggle('active')
            })

            for (let listItem of item.querySelector('.list').children) {
                listItem.addEventListener('click', (event) => {
                    item.querySelector('p').innerHTML = listItem.innerHTML;
                })
            }
        }
    }
}

export default select();