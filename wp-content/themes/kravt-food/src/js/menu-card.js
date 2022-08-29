function mealPopup() {
let b = document.getElementsByClassName("menu-card")[0];
  if (document.getElementsByClassName("menus")) {
    document
      .getElementsByClassName("menus")[0]
      .querySelectorAll(".splide__slide button")
      .forEach((element) => {
        element.addEventListener("click", () => {
          let a = element.offsetParent.offsetParent;
          let mealItem = {};
          mealItem.imgPath = a.querySelector("img").src;
          mealItem.callories =
            a.querySelector("[data-meal_cal]").dataset.meal_cal;
          mealItem.gramm =
            a.querySelector("[data-meal_gramm]").dataset.meal_gramm;
          mealItem.name = a.querySelector("p").innerText.split("\n").join(" ");
          mealItem.composition = a.dataset.meal_composition;
          mealItem.proteins = a.dataset.meal_proteins;
          mealItem.fat = a.dataset.meal_fat;
          mealItem.carbohydrates = a.dataset.meal_carbohydrates;
          mealItem.type = a.querySelector("[data-meal_type]").dataset.meal_type;
          
          document.getElementById("background-popup").classList.toggle("active");
          b.classList.toggle('active')
          b.querySelector('[data-meal_type]').innerText = mealItem.type
          b.querySelector('[data-meal_type]').dataset.meal_type = mealItem.type
          b.querySelector('#meal_name').innerText = mealItem.name
          b.querySelector('#meal_ccal').innerText = mealItem.callories + ' Ккал, ' + mealItem.gramm + ' г.'
          b.querySelector('#meal_composition').children[1].innerText = mealItem.composition
          b.querySelector('img').src = mealItem.imgPath
        });
        b.querySelector('.close').addEventListener('click', (event) => {
          document.getElementById("background-popup").classList.toggle("active");
          event.target.closest('.close').offsetParent.classList.toggle('active')
        })
      });
  }
}
export default mealPopup();
