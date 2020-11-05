export function headerToggle() {
    const headerMenu = document.getElementById('header-menu');
    const headerButton = document.getElementById('header-button');

    headerButton.addEventListener('click', () => {
        headerMenu.classList.toggle('right-0');
        if(window.matchMedia('(min-width:1000px)').matches){
            headerMenu.classList.toggle('-right-1/4');
        }
        else if (window.matchMedia('(min-width:720px)').matches) {
            headerMenu.classList.toggle('-right-1/3');
        } else {
            headerMenu.classList.toggle('-right-full');
        }
    })
}
