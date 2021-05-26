var tabInfo = document.querySelector('.tab-info');
var tabButtons = document.querySelectorAll('.tab-info-btn');
var tabTitle = document.querySelector('.tab-title');

// INFO DATA TABS - Se almacena en un array de objetos la informacion referente a cada una de las opciones de seccion bajo la propiedad "data"

const dataUl = [
    {
        title: 'Animate a desarrollar nuevas habilidades',
        data: `
        <li>Aprenderas muchas habilidades dentro del curso relacionadas con el aprendizaje tecnico de Oleohidraulica naval</li>
        <li>Trabajaras en habilidades unicas y demandadas dentro del sector</li>
        <li>Elementos de lista de prueba en tab "Habilidades"</li>
    `
    },
    {
        title: 'Somos expertos en Oleohidraulica Naval',
        data: `
        <li>Conoceras los principios físicos que rigen las aplicaciones hidráulicas complementándolos con el conocimiento sobre fluidos.</li>

        <li>Distinguiras la estructura básica de una <strong>centralina hidráulica</strong>, diferenciando entre los diferentes tipos de bombas a instalar y los accesorios que esta pueda presentar.</li>

        <li>Aprenderas a manejar los actuadores más comunes de las aplicaciones hidráulicas (desarrollando tanto función como cálculo).</li>
    `
    },
    {
        title: 'Demostrá todo lo que aprendiste',
        data: `
        <li>Recibiras un certificado avalado por diferentes entidades del area naval</li>
        <li>Demostraras tu asistencia y compromiso con la capacitacion que conlleva ser Técnico Oleohidraulico</li>
        <li>Elementos de lista de prueba en tab "Certificacion"</li>
    `
    },
    {
        title: 'Tus conocimientos son nuestro objetivo',
        data: `
        <li>Nuestro objetivo es expandir los conocimientos del area de Oleohidraulica Naval para capacitar a los futuros técnicos que decidan desarrollarse en la misma</li>
        <li>Contamos con el apoyo de diferentes recursos que nos garantizan tu correcto aprendizaje en la materia</li>
        <li>Elementos de lista de prueba en tab "Objetivos"</li>
    `
    }
]

/* DATA CHANGE - Se recorren los botones almacenados en la variable tabButtons y se les asigna el escuchador de eventos "click", al ocurrir esto sucede lo siguiente:

1 - Llamado a la funcion resetBtnActive() - se vuelven a recorrer todos los botones para removerles la clase "btn-tab-active", la cual agrega los estilos correspondientes al boton luego de hacerle click

2 - Se le vuelve a agregar la clase "btn-tab-active" solo al boton al que se le halla dado click, suena a un toggle, pero ya lo probe y no tiene sentido esa funcionalidad ya que el evento sucederia de manera intercalada, osea la primera vez funcionara y la segunda no, independientemente del boton. Y esto no es lo que buscamos claramente

3 - Llamado a la funcion resetAnimation() - Similar a lo que sucede con la clase "btn-tab-active". Esta vez se le agrega a la ul la clase que llama a la animacion de movimiento del contenido, la diferencia es que aca no funcionara la animacion si primero la removemos y despues la colocamos nuevamente, porque para ese entonces, el contenido de la ul ya estara disponible en el DOM y no toma accion la animacion, por lo que le agrege un setTimeOut(900ms) que remueve automaticamente la clase de la animacion luego de hacer click en cualquier boton

4 - Llamado a la funcion changeData() - Esta es la funcion mas importante diria yo xd. Aca es donde se modifica el innerHTML de la ul por el contenido guardado en la propiedad "data" de los objetos guardados en la variable dataUl, pasandole como parametro el indice que le corresponde al boton dado click en cuestion, por ejemplo si se le dio click al boton Nº3 "Certificacion", se le va a pasar el indice 3 al array de objetos de dataUl, el cual contiene la data respectiva de esa seccion, y simplemente se le agrega a la Ul como su nuevo contenido con innerHTML. 

*/

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

