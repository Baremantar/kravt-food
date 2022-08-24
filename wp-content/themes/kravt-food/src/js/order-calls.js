function orderCall() {
    var h3 = document.createElement("h3");
    var p = document.createElement("p");
    var img = document.createElement("div");
    h3.innerHTML = "Спасибо!";
    p.innerHTML = "Ваша заявка оформлена. Вскоре с Вами свяжется наш</br>менеджер для уточнения деталей";
    img.classList.add("wheel")
    img.innerHTML = '<img src="/wp-content/uploads/2022/08/dishes.png" alt="kravt-food"/><img src="/wp-content/themes/kravt-food/src/svg/rotate-words.svg" alt="kravt - food"/>'

    if (
        document.getElementById("order-call") &&
        document.getElementsByClassName("order-call")[0]
    ) {
        document.getElementById("order-call").addEventListener("click", (element) => {
            document
                .getElementsByClassName("order-call")[0]
                .classList.toggle("active");
            document.getElementById("background-popup").classList.toggle("active");
        });
        document.getElementsByClassName("order-call")[0].querySelector(".close").addEventListener("click", (event) => {
            event.target.closest(".close").offsetParent.classList.toggle("active");
            document.getElementById("background-popup").classList.toggle("active");
        });
        document.getElementById("order-call_form").addEventListener("submit", (e) => {
            e.preventDefault();
            e.target.offsetParent.querySelectorAll(".block").forEach(element => {
                element.innerHTML = "";
            });
            e.target.offsetParent.querySelectorAll(".block")[0].appendChild(h3);
            e.target.offsetParent.querySelectorAll(".block")[0].appendChild(p);
            e.target.offsetParent.querySelectorAll(".block")[1].appendChild(img);
        })
    }
}

export default orderCall();
