function toggleMenu() {
    var menuOverlay = document.getElementById("menuOverlay");
    var burgerMenu = document.querySelector('.burger-menu');

    // Ouvrir ou fermer le menu
    if (menuOverlay.style.width === "100%") {
        menuOverlay.style.width = "0";
        burgerMenu.classList.remove('open'); // Retirer la classe 'open' pour réinitialiser le burger
    } else {
        menuOverlay.style.width = "100%";
        burgerMenu.classList.add('open'); // Ajouter la classe 'open' pour animer le burger
    }
}
