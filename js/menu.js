function toggleMenu() {
    var menu = document.getElementById('hamburger_menu');
    console.log(menu.style.display);
    if (menu.style.display == 'none') {
        menu.style.display = 'block';
    } else if (menu.style.display == 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
}