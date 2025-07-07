// Favorito

document.addEventListener('DOMContentLoaded', () => {
    const favBtn = document.getElementById('fav-btn');
    const sidebarFav = document.getElementById('sidebar-Fav');
    const overlayFav = document.getElementById('overlay-Fav');
    const close = document.getElementById('FavClose');

    if (favBtn && sidebarFav && overlayFav) {
        favBtn.addEventListener('click', () => {
            sidebarFav.classList.remove('translate-x-full');
            overlayFav.classList.remove('hidden');
        });

        overlayFav.addEventListener('click', () => {
            sidebarFav.classList.add('translate-x-full');
            overlayFav.classList.add('hidden');
        });

         close.addEventListener('click', () => {
                sidebarFav.classList.add('translate-x-full');
                overlayFav.classList.add('hidden');
            });
    } else {
        console.warn('Algum dos elementos do menu não foi encontrado no DOM.');
    }
});
