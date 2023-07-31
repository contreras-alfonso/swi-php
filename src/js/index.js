let checkBox = document.querySelectorAll('.checkBox');
const btn_consulta = document.querySelector('.btn_consulta');
const container_spiner = document.querySelector('.container_spiner');

let arraycheck = [];


document.addEventListener('DOMContentLoaded',()=>{
    agregarOQuitarSintomas(checkBox);

})

function agregarOQuitarSintomas(checkBox){
    checkBox.forEach((e)=>{
    e.addEventListener('click',(e)=>{
    if(e.target.checked == true){
        if(!arraycheck.includes(e.target.name)){
            arraycheck.push(e.target.name);
            return;
        }
        return;
    }

    arraycheck = arraycheck.filter(elemento=>{return elemento !== e.target.name})
    })
})
}

async function realizarConsulta(){
    const url = 'http://localhost/enfermedad/consultasEnfermedad.php?opc=diagnosticar';
    console.log(arraycheck);
    if(arraycheck.length===0){
        alertaError('Primero seleccione los sintomas.');
        return;
    }

    //activando el spinner
    container_spiner.style.display = 'flex';
    document.body.classList.add('body--no-scroll');
    const formData= new FormData();
    formData.append('sintomas',JSON.stringify(arraycheck));
    // console.log([...formData]);
    const respuesta = await fetch(url,{
        method:'POST',
        body: formData,
    });
    const data = await respuesta.json();
    console.log(data);
    setTimeout(() => {
        document.body.classList.remove('body--no-scroll');
        container_spiner.style.display = 'none';
        // alertaError(data);
        validarEnfermedadHTML(data);

        if(data){
        //quitar clase seccion activa al enlace_sintomas
        const enlace_sintomas = document.querySelector('.enlace_sintomas');
        enlace_sintomas.classList.remove('seccion_activa');

        //agregarle la clase sección activa al enlace_resultados
        const enlace_resultados = document.querySelector('.enlace_resultados');
        enlace_resultados.classList.add('seccion_activa');
        }

    }, 3000);
}

function validarEnfermedadHTML(enfermedad){
    console.log('La enfermedad es->'+enfermedad)
    switch (enfermedad) {
        case 'HE': mostrarEnfermedadHTML(enfermedad,'Enfermedad infecciosa, altamente contagiosa, con alta morbilidad pero baja mortalidad y producida por uno o varios agentes etiológicos. Afecta a los caninos de cualquier raza, sexo y edad. Está caracterizada por una tos paroxística de inicio agudo.'); break;

        case 'IS': mostrarEnfermedadHTML(enfermedad,'Enfermedad infecciosa altamente contagiosa que afecta a perros y otros carnívoros, con una alta morbimortalidad y de distribución mundial. Son susceptibles los animales de todas las edades, con una mayor prevalencia entre los 3 y 6 meses de edad, coincidiendo con la caída de la concentración de anticuerpos maternales.'); break;

        case 'MOQUILLO CANINO': mostrarEnfermedadHTML(enfermedad,'Enfermedad infecciosa altamente contagiosa que afecta a perros y otros carnívoros, con una alta morbimortalidad y de distribución mundial. Son susceptibles los animales de todas las edades, con una mayor prevalencia entre los 3 y 6 meses de edad, coincidiendo con la caída de la concentración de anticuerpos maternales.'); break;

        case 'LEPTOSPIROSIS AGUDA': mostrarEnfermedadHTML(enfermedad,'Enfermedad infecto-contagiosa, zoonótica, producida por bacterias del género Leptospira, que afecta a mamíferos salvajes y domésticos.'); break;

        case 'LEPTOSPIROSIS SUBAGUDA': mostrarEnfermedadHTML(enfermedad,'Enfermedad infecto-contagiosa, zoonótica, producida por bacterias del género Leptospira, que afecta a mamíferos salvajes y domésticos.'); break;

        case 'TOS DE LAS PERRERAS': mostrarEnfermedadHTML(enfermedad,'Enfermedad infecciosa, altamente contagiosa, con alta morbilidad pero baja mortalidad y producida por uno o varios agentes etiológicos. Afecta a los caninos de cualquier raza, sexo y edad. Está caracterizada por una tos paroxística de inicio agudo.'); break;

        case 'BRUCELOSIS CANINA': mostrarEnfermedadHTML(enfermedad,'Enfermedad infecto-contagiosa que afecta a los cánidos de cualquier raza, sexo y edad, producida por una bacteria del género Brucella especie canis. La enfermedad se caracteriza por producir disturbios reproductivos aunque puede ocasionar otro tipo de signología. Es una enfermedad zoonótica por lo cual su control tiene implicancias en la salud pública.'); break;

        case 'PARVOVIRUS CANINO': mostrarEnfermedadHTML(enfermedad,'Enfermedad infecto-contagiosa que afecta a los caninos, con una distribución mundial, morbimortalidad variable, caracterizada por una gastroenteritis hemorrágica.'); break;


        default: alertaError('Ninguna enfermedad encontrada, según los sintomas seleccionados.'); break;
    }
}

function mostrarEnfermedadHTML(enfermedad,descripcion){
    let lista_sintomas_seleccionados = '';
    arraycheck.forEach(sintoma=>{
        lista_sintomas_seleccionados += `<p><i class="fa-solid fa-triangle-exclamation"></i> ${sintoma}</p>`;
    })
    const contenido_informacion = document.querySelector('.contenido_informacion');
    contenido_informacion.innerHTML = `<div class="contenido_enfermedad">
    <p class="titulo_enfermedad">Posible enfemedad: ${enfermedad}</p>
    <p class="descripcion_enfermedad">${descripcion}</p>
    <a target="_blank" href="https://core.ac.uk/download/pdf/20528361.pdf"><p class="fuente_enfermedad">Fuente: Compendio de enfermedades de los caninos y felinos domésticos - Mario C. Brusa (2014)</p></a>
    <p class="sintomas_marcados">Sintomas seleccionados:</p>
    <div class="lista_sintomas">
        ${lista_sintomas_seleccionados}
    </div>
    <button class="btn_realizarOtraConsulta" onclick="realizarNuevaconsulta()">Realizar nueva consulta</button>
</div>`;
}

function realizarNuevaconsulta(){
    container_spiner.style.display = 'flex';
    document.body.classList.add('body--no-scroll');

    setTimeout(() => {
        document.body.classList.remove('body--no-scroll');
        container_spiner.style.display = 'none';
        const contenido_informacion = document.querySelector('.contenido_informacion');
    contenido_informacion.innerHTML = ` <div class="container_contenido">
    <p class="text_tall">Marque a continuación todos los sintomas de su mascota</p>
    <p class="text_small">Marque las casillas de ser necesario</p>
    <p class="categoria_tabla">Generales</p>
    <table class="tabla_sintomas">
        <tr>
            <td>Depresión (Decaimiento, cambios en hábitos, falta de interés en actividades)</td>
            <td><label><input type="checkbox" name="depresion" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Anorexia (Falta total de apetito)</td>
            <td><label><input type="checkbox" name="anorexia" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Deshidratación</td>
            <td><label><input type="checkbox" name="deshidratacion" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Shock hipovolémico</td>
            <td><label><input type="checkbox" name="shock" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td></i>Pirexia (Fiebre)</td>
            <td><label><input type="checkbox" name="pirexia" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Polidipsia (Aumento de ingesta de agua)</td>
            <td><label><input type="checkbox" name="polidipsia" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Mucosas pálidas o anémicas</td>
            <td><label><input type="checkbox" name="mucosas" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Taquicardia</td>
            <td><label><input type="checkbox" name="taquicardia" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Decaimiento</td>
            <td><label><input type="checkbox" name="decaimiento" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Expectoración espumosa blanca</td>
            <td><label><input type="checkbox" name="expectoracion" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Infertilidad</td>
            <td><label><input type="checkbox" name="infertilidad" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Linfadenopatía</td>
            <td><label><input type="checkbox" name="linfadenopatia" class="checkBox"> </label></td>
        </tr>
    </table>

    <p class="categoria_tabla">Respiratorios</p>
    <table class="tabla_sintomas">
        <tr>
            <td>Tos</td>
            <td><label><input type="checkbox" name="tos" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Estornudos</td>
            <td><label><input type="checkbox" name="estornudos" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Rinorrea mucosa. (Congestión nasal)</td>
            <td><label><input type="checkbox" name="rinorrea" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Neumonía (infecciones bacterianas)</td>
            <td><label><input type="checkbox" name="neumonia" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Epistaxis (Sangrado nasal en perros)</td>
            <td><label><input type="checkbox" name="epistaxis" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Rinitis</td>
            <td><label><input type="checkbox" name="rinitis" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Disnea (Dificultad para respirar)</td>
            <td><label><input type="checkbox" name="disnea" class="checkBox"> </label></td>
        </tr>
    </table>


    <p class="categoria_tabla">Oculares</p>
    <table class="tabla_sintomas">
        <tr>
            <td>Conjuntivitis (Secreción mucopurulenta)</td>
            <td><label><input type="checkbox" name="conjuntivitis" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Congestión de vasos epiesclerales</td>
            <td><label><input type="checkbox" name="congestion" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Uveítis</td>
            <td><label><input type="checkbox" name="uveitis" class="checkBox"> </label></td>
        </tr>

        
    </table>

    <p class="categoria_tabla">Dermatológicos</p>
    <table class="tabla_sintomas">
        <tr>
            <td>Pústulas</td>
            <td><label><input type="checkbox" name="pustulas" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Hiperqueratosis (nasal y digital).</td>
            <td><label><input type="checkbox" name="hiperqueratosis" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Púrpura (Petequias, equimosis).</td>
            <td><label><input type="checkbox" name="purpura" class="checkBox"> </label></td>
        </tr>

        
    </table>

    <p class="categoria_tabla">Digestivos/Gastrointestinales</p>
    <table class="tabla_sintomas">
        <tr>
            <td>Hipoplasia de esmalte dental</td>
            <td><label><input type="checkbox" name="hipoplasia" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Vómitos</td>
            <td><label><input type="checkbox" name="vomitos" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Diarrea</td>
            <td><label><input type="checkbox" name="diarrea" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Hematemesis (sangrado por la boca)</td>
            <td><label><input type="checkbox" name="hematemesis" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Melenas (expulsión por el recto de sangre parcial o totalmente digerida)</td>
            <td><label><input type="checkbox" name="melenas" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Hematoquecia (sangrado por el recto de sangre roja rutilante)</td>
            <td><label><input type="checkbox" name="hematoquecia" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Esplenomegalia (inflamación del bazo)</td>
            <td><label><input type="checkbox" name="esplenomegalia" class="checkBox"> </label></td>
        </tr>
    </table>

    <p class="categoria_tabla">Neurológicos</p>
    <table class="tabla_sintomas">
        <tr>
            <td>Hiperestesia (Sensibilidad táctil)</td>
            <td><label><input type="checkbox" name="hiperestesia" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Convulsiones</td>
            <td><label><input type="checkbox" name="convulsiones" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Ataxia (Falta de coordinación en movs. voluntarios)</td>
            <td><label><input type="checkbox" name="ataxia" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Paresias (Paraparesia/Tetraparesia -> debilidad muscular/parálisis)</td>
            <td><label><input type="checkbox" name="paresias" class="checkBox"> </label></td>
        </tr>

        <tr>
            <td>Mioclonias (movs involuntarios, breves y rápidos)</td>
            <td><label><input type="checkbox" name="mioclonias" class="checkBox"> </label></td>
        </tr>

    </table>
    
    <div class="flex contenedor_botones">
        <button class="btn_consulta" onclick="realizarConsulta(event)">Realizar consulta</button>
    </div>
</div>`


        //agregar clase seccion activa al enlace_sintomas
        const enlace_sintomas = document.querySelector('.enlace_sintomas');
        enlace_sintomas.classList.add('seccion_activa');

        //quitar la clase sección activa al enlace_resultados
        const enlace_resultados = document.querySelector('.enlace_resultados');
        enlace_resultados.classList.remove('seccion_activa');
        //limpiar el arreglo de sintomas
        arraycheck = [];
        //obtener los nuevos checkbox
        checkBox = document.querySelectorAll('.checkBox');
        //asignarle el evento click a los checkbox
        agregarOQuitarSintomas(checkBox);
    }, 2000);


}

function alertaError(msg){
    Swal.fire({
        title: 'Oppss..',
        text: `${msg}`,
        icon: 'error',
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: true,
        confirmButtonText:'Aceptar',
        confirmButtonColor: 'rgb(10, 149, 50)',
       
      })
}

