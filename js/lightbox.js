/*******LOADER LIGHTBOX ON DOCUMENT READY**********/

var containerLight = document.querySelector('.lightbox-container')

document.onreadystatechange = () => {
    if (document.readyState === 'complete') {
        containerLight.style.display = 'flex';
    }
}

/***********LIGHTBOX DATA WORKS*******************/

    const works = [
        {
            title: 'Polaris',
            date: '22/03/2013',
            description: 'Trabajos en dique SPI. Reparación del cilindro principal de la grúa de cargamento (centro de cubierta).'
        },
        {
            title: 'Rubimar',
            date: '12/10/2004',
            description: 'Cambio de la totalidad de flexibles y conectores de grúa de cargamento en navegación franca.'
        },
        {
            title: 'San Julian',
            date: '06/11/2009',
            description: 'Desmonte, recorrido y armado con puesta  punto de top bracing (amortiguadores del motor principal).'
        },
        {
            title: 'San Matias',
            date: '08/04/2012',
            description: 'Recorrido de bloques hidráulicos de cabrestante por falta de potencia (navegación franca).'
        }
    ]

/*************LIGHTBOX VARS************************/

var galleryImages = document.querySelectorAll('.img-work');
var lightboxData = document.querySelector('.lightbox-data');
var lightboxInfo = document.querySelector('.lightbox-info');
var open = document.querySelector('.show-lightx');
var close = document.querySelector('.close-lightbox');


/************LIGHTBOX OPEN/CLOSE***********************/

open.addEventListener('click',() => {
    containerLight.classList.add('show');
})

close.addEventListener('click', () => {
    containerLight.classList.remove('show');
})

/************LIGHTBOX FUNCTION***********************/

galleryImages.forEach((e,index) => {
    e.addEventListener('click',() => {
        changeInfo(e.src,index);
        resetWorkActive();
        e.classList.add('work-selected');
    })
})

const changeInfo = (src,indexWork) => {
    lightboxData.style.backgroundImage = `url(${src})`;
    
    lightboxInfo.innerHTML = `
    <h3>${works[indexWork].title}</h3>
    <span class="work-date">${works[indexWork].date}</span>
    <hr>
    <p class="work-description m-0">${works[indexWork].description}</p>
    `
}

const resetWorkActive = () => {
    galleryImages.forEach(e => {
        e.classList.remove('work-selected');
    })
}