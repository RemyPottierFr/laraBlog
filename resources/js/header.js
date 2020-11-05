export function headerToggle() {
    const headerMenu = document.getElementById('header-menu');
    const headerButton = document.getElementById('header-button');

    headerButton.addEventListener('click', () => {
        headerMenu.classList.toggle('-right-full');
        headerMenu.classList.toggle('right-0');
    })
}
