function orderMeal() {
  if (document.getElementsByClassName("offer")) {
    document
      .getElementsByClassName("offer")[0]
      .querySelector("button")
      .addEventListener("click", () => {
        document
          .getElementsByClassName("order-card")[0]
          .classList.toggle("active");
        document.getElementById("background-popup").classList.toggle("active");
      });

    document
      .getElementsByClassName("order-card")[0]
      .querySelector(".close")
      .addEventListener("click", (event) => {
        document.getElementById("background-popup").classList.toggle("active");
        event.target.closest(".close").offsetParent.classList.toggle("active");
        event.target.closest(".close").offsetParent.classList.remove("full");
        event.target.closest(".close").offsetParent.classList.remove("lite");
        document.body.style.overflow = 'visible';
        getData(1);
      });
      
    function getData(state) {
      document.getElementsByClassName("order-card")[0].querySelectorAll('.block').forEach(element => element.remove());
      return $.post({
            type: "POST",
            url: '/wp-content/themes/kravt-food/components/order_card.php',
            data: {state:state},
            success: function(data){
                document.getElementsByClassName('order-card')[0].querySelector('.wrapper').innerHTML = data;
                },
            dataType: 'html'
          })
    };

    
 
    document.getElementById("liteOrder").onclick = () => {
        getData(2);
        document.getElementsByClassName('order-card')[0].classList.add('lite')
    };
    document.getElementById("fullOrder").onclick = () => {
        getData(3);
        document.body.style.overflow = 'hidden';
        document.getElementsByClassName('order-card')[0].style.overflow = 'scroll';
        document.getElementsByClassName('order-card')[0].classList.add('full');
    };
  }
}
export default orderMeal();
