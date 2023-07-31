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
            <a href="inicio.php">Introducción</a>
            <!-- <a href="">Paciente</a> -->
            <a href="index.php"  class="seccion_activa enlace_sintomas">Sintomas</a>
            <!-- <a href="">Regiones</a>
            <a href="">Entrevista</a> -->
            <a href="#" class="enlace_resultados">Resultados</a>
        </div>

        <div class="contenido_informacion">
            <div class="container_contenido">
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