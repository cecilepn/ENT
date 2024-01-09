// Script pour le thème sombre et clair

document.addEventListener('DOMContentLoaded', function () {
    const themeSwitch = document.getElementById('themeSwitch');

    // Écouter les changements de la case à cocher
    themeSwitch.addEventListener('change', function () {
        const selectedTheme = themeSwitch.checked ? 'sombre' : 'clair';
        sessionStorage.setItem('theme', selectedTheme);
        changeTheme(selectedTheme);
        changeThemeIcons(selectedTheme);
    });

    // Fonction pour changer le thème
    function changeTheme(selectedTheme) {
        document.body.classList.remove('clair', 'sombre');
        document.body.classList.add(selectedTheme);
    }

    // Fonction pour changer les icônes en fonction du thème
    function changeThemeIcons(selectedTheme) {
        const sunIcon = document.querySelector('.sun');
        const moonIcon = document.querySelector('.moon');


        if (selectedTheme === 'sombre') {
            sunIcon.style.display = 'block';
            moonIcon.style.display = 'none';

        } else {
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'block';
        }
    }


    // Initialiser les icônes et la couleur du SVG en fonction du thème au chargement de la page
    const initialTheme = sessionStorage.getItem('theme') || 'clair';
    changeThemeIcons(initialTheme);
});

