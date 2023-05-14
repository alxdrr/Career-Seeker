let login = document.querySelector(".hero.container-fluid a")
let navLoggedIn = document.querySelector("body > nav > div > a.profle.collapse")
login.addEventListener("click", () => {
    navLoggedIn.classList.add("show");
});