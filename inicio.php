<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/spinner.css">
    <link rel="stylesheet" href="src/styles/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png"  href="src/img/favicon.ico">

    <title>Sistemas inteligentes</title>
</head>
<body>

<header class="header">
        <a class="enlace_logo" href="">Sistemas inteligentes</a>
        <div class="header_enlaces">
        <a class="enlace_logo" href="#"><i class="fa-solid fa-dog"></i></a>

        </div>
    </header>

    <div class="contenido">
        <div class="contenido_secciones">
            <a href="" class="seccion_activa">Introducción</a>
            <!-- <a href="">Paciente</a> -->
            <a href="index.php"  class="enlace_sintomas">Sintomas</a>
            <!-- <a href="">Regiones</a>
            <a href="">Entrevista</a> -->
            <a href="#" class="enlace_resultados">Resultados</a>
        </div>

        <div class="contenido_informacion_inicio">
            <div class="container_contenido_inicio">
                <div class="container_contenido_inicio_info">
                <p class="titulo_verificar_sintomas">Verifique los sintomas de su mascota</p>
                <p>Realice una breve evaluación de los sintomas de su mascota. La información que proporcione está segura y no será compartida. Los resultados incluiran:</p>
                <ul>
                    <li>Posibles causas de los sintomas de su mascota.</li>
                    <li>Descripción de la posible enfermedad, según los sintomas seleccionados.</li>
                    <li>Imagenes descriptivas de la posible enfermedad de su mascota.</li>
                    <li>Una lista de los sintomas seleccionados en el test.</li>
                </ul>
                </div>

                <div class="container_contenido_inicio_img">
                    <img src="src/img/Screenshot_1.png" alt="gif_perro">
                </div>
            </div>

            <div class="container_lista_enfermedades">
                <p class="titulo_verificar_sintomas">La lista de enfermedades a detectar son:</p>
                <p class="sintoma_check"><i class="fa-solid fa-circle-check icono_check"></i><b> MOQUILLO CANINO:</b> Enfermedad infecciosa altamente contagiosa que afecta a perros y otros carnívoros, con una alta morbimortalidad y de distribución mundial. Son susceptibles los animales de todas las edades, con una mayor prevalencia entre los 3 y 6 meses de edad, coincidiendo con la caída de la concentración de anticuerpos maternales.</p>
                <p class="sintoma_check"><i class="fa-solid fa-circle-check icono_check"></i><b> PARVOVIRUS CANINO:</b>  Enfermedad infecto-contagiosa que afecta a los caninos, con una distribución mundial, morbimortalidad variable, caracterizada por una gastroenteritis hemorrágica.</p>
                <p class="sintoma_check"><i class="fa-solid fa-circle-check icono_check"></i><b>  LEPTOSPIROSIS SUBAGUDA - AGUDA:</b> Enfermedad infecto-contagiosa, zoonótica, producida por bacterias del género Leptospira, que afecta a mamíferos salvajes y domésticos.</p>
                <p class="sintoma_check"><i class="fa-solid fa-circle-check icono_check"></i><b> TOS DE LAS PERRERAS:</b> Enfermedad infecciosa, altamente contagiosa, con alta morbilidad pero baja mortalidad y producida por uno o varios agentes etiológicos. Afecta a los caninos de cualquier raza, sexo y edad. Está caracterizada por una tos paroxística de inicio agudo.</p>
                <p class="sintoma_check"><i class="fa-solid fa-circle-check icono_check"></i><b> BRUCELOSIS CANINA:</b> Enfermedad infecto-contagiosa que afecta a los cánidos de cualquier raza, sexo y edad, producida por una bacteria del género Brucella especie canis. La enfermedad se caracteriza por producir disturbios reproductivos aunque puede ocasionar otro tipo de signología. Es una enfermedad zoonótica por lo cual su control tiene implicancias en la salud pública.</p>
            </div>

            <div class="contenido_informacion_inicio_libro">
                <p class="acerca_verificador">Acerca de este verificador de sintomas:</p>
                <a target="_blank" href="https://core.ac.uk/download/pdf/20528361.pdf"><p class="fuente_enfermedad">Fuente: Compendio de enfermedades de los caninos y felinos domésticos - Mario C. Brusa (2014)</p></a>

            </div>
        </div>


        
    </div>

   
    <div class="container_spiner">
    <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="src/js/index.js"></script>
    <script src="src/js/header_flotante.js"></script>
</body>
</html>