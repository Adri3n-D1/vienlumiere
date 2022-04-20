// Récupère la boite contenant l'icone de menu et l'affiche
let icon = document.getElementById("box-icon-header-menu");
icon.style.display = "inline-block";

// Récupère le menu et le cache
let menu = document.getElementById("site-header-menu");
menu.style.display = "none";

// Chaque clique sur l'icone du menu appel cette fonction
function switchMenu() {
    /* Permute l'état du menu entre affiché ou caché */
    if (menu.style.display === "none") {
        menu.style.display = "block";
    }
    else {
        menu.style.display = "none";
    }
}

// Créé une condition "si le viewport est en-dessous de 800px de large"
const alwaysMenuDisplay = window.matchMedia('(min-width: 800px)');

// On capte l'événement resize de la fenêtre et on le lie à une fonction 
window.addEventListener('resize', setDisplayMenu);
function setDisplayMenu() {
    /* Affiche ou cache le menu selon la largeur de la fenêtre si nécéssaire */
    // Si la fenêtre fait au minimum 800px
    if (alwaysMenuDisplay.matches) {
        // Et si le menu est caché
        if (menu.style.display === "none" ) {
            // On l'affiche
            menu.style.display = "block";
        }
    }
    // Sinon (la fenêtre fait moins de 800px)
    else {
        // Et si le menu est affiché
        if (menu.style.display === "block" ) {
            // On le cache
            menu.style.display = "none";
        }
    }
}

// On vérifie si le menu doit être affiché ou caché
setDisplayMenu();