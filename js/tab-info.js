var tabInfo = document.querySelector('.tab-info');
var tabButtons = document.querySelectorAll('.tab-info-btn');
var tabTitle = document.querySelector('.tab-title');

// INFO DATA TABS - Se almacena en un array de objetos la informacion referente a cada una de las opciones de seccion bajo la propiedad "data"

const dataUl = [
    {
        title: 'Animate a desarrollar nuevas habilidades',
        data: `
        <li>Aprenderás <strong>muchas habilidades</strong> dentro del curso relacionadas con el aprendizaje tecnico en Oleohidraulica naval, tales como: gesto profesional, correcto empleo de los E.P.P, generación de O.T y plan de trabajo</li>

        <li>Modalidad de trabajo para <strong>astilleros</strong> y reglamentaciónes vigentes</li>
    `
    },
    {
        title: 'Somos expertos en Oleohidraulica Naval',
        data: `
        <li>Conocer los principios físicos que rigen las aplicaciones hidráulicas complementándolos con los conocimientos sobre los fluidos.</li>

        <li>Distinguir la estructura básica de una <strong>centralina hidráulica</strong>, adecuar los <strong>componentes</strong> para su correcto funcionamiento tales como: tipo de bomba, válvulas, actuadores y más.</li>

        <li>Comprender el trabajo específico de los circuitos para poder <strong>diagnosticar una falla</strong>.</li>

        <li>Interpretación de planos/gráficos de circuitos.</li>
    `
    },
    {
        title: 'Demostrá todo lo que aprendiste',
        data: `
        <li>Recibiras un <strong>certificado</strong> avalado por prestigiosos entes del area naval como ser SICONARA, SAONSINRA, SAON (Conductores navales y obreros navales)</li>

        <li>Basado en <strong>competencias</strong>: Este curso fue avalado por el Ministerio de trabajo, empleo y seguridad 
social 
(MTE y SS) en el año 2015 con su numero de regice bajo la plataforma de Siconara Capacitación</li>
    `
    },
    {
        title: 'Tu aprendizaje es nuestro objetivo',
        data: `
        <li>Nuestro objetivo es expandir los conocimientos del area de Oleohidraulica Naval a futuros personales técnicos <strong>a bordo</strong></li>

        <li>Contamos con recursos y herramientas que nos garantizan tu correcto <strong>aprendizaje</strong></li>
    `
    }
]

tabButtons.forEach((e,indexBtn) => {
    e.addEventListener('click',() => {
        resetBtnActive();
        e.classList.add('btn-tab-active');
        resetAnimation();
        changeData(indexBtn);
    })
})

const changeData = (index) => {
    tabInfo.innerHTML = dataUl[index].data;
    tabTitle.innerHTML = dataUl[index].title;
}

const resetAnimation = () => {
    tabInfo.classList.add('animate__slideInLeft');
    setTimeout(() => {
        tabInfo.classList.remove('animate__slideInLeft');
    },900);

    tabTitle.classList.add('animate__slideInDown');
    setTimeout(() => {
        tabTitle.classList.remove('animate__slideInDown');
    },900);
}

const resetBtnActive = () => {
    tabButtons.forEach(e => {
        e.classList.remove('btn-tab-active');
    })
}

