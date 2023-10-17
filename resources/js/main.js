// animazione dal basso
let contenuti = document.querySelectorAll('.contenuto');

window.addEventListener('scroll', mostraContenuti);

function mostraContenuti() {
    const triggerBottom = window.innerHeight * 0.8;

    contenuti.forEach((contenuto) => {
        const contenutoTop = contenuto.getBoundingClientRect().top;

        if (contenutoTop < triggerBottom) {
            contenuto.classList.add('animazione');
        } else {
            contenuto.classList.remove('animazione');
        }
    });
}

