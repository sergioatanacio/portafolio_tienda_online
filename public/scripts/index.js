const burger = document.querySelector('.burger-menu');
const sideMenu =document.querySelector('.side-menu');

burger.addEventListener("click", () => {
    burger.classList.toggle("active");
    sideMenu.classList.toggle("active");
})
document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
   burger.classList.remove("active");
   sideMenu.classList.remove("active");
}))
