<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="public/output.css">
    <title>IAL | Instituto Arzobispo Loayza</title>

</head>

<body class="body-bg">
    <main class="wrapper py-20 flex flex-col gap-y-8 md:max-w-[630px] lg:max-w-[1400px] lg:w-[92%] lg:grid lg:grid-cols-2 xl:grid-cols-[60%_40%] ">
        <div class="flex flex-col gap-y-8 lg:justify-center lg:pr-8 xl:pr-12">
            <h1 class="text-center text-2xl md:text-3xl lg:text-4xl leading-none text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-300 pop-bol">
                Si quieres conocer más <br class="hidden md:block">
                sobre nuestras carreras, <br class="hidden md:block">
                déjanos tus datos para <br class="hidden md:block">
                contactarnos contigo
            </h1>
            <div class="iframe">
                <iframe id="player" class="iframe__iframe rounded-md" width="693" height="390" src="https://www.youtube.com/embed/G0wbZ6Jl064?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="bg-[url('./img/borde.png')] bg-[length:100%_100%] px-6 py-10 sm:p-12 xl:px-12">
            <h2 class="uppercase pop-bol text-center leading-none text-[40px] lg:text-5xl text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-red-500 mb-2">Inscríbete Aquí</h2>
            <p class="pop-med text-center leading-none text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-300 mb-8">Conoce nuestras carrreras mayor <br class="hidden sm:block"> demandadas en el sector salud.</p>
            <form class="flex flex-col gap-y-5" action="../enviar.php" method="post" name="form_inscripcion" id="form_inscripcion">
                <input name="org" type="hidden" value="Tiktok">
                <input name="pro"type="hidden" value="1">
                <input name="dis"type="hidden" value="15">
                <input name="sw" type="hidden" value="0">
                <input name="mod" type="hidden" value="2">
                <input name="nom" class="placeholder:text-base md:placeholder:text-lg  placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full"  type="text" placeholder="Nombres" required>
                <input name="ape" class="placeholder:text-base md:placeholder:text-lg  placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full" type="text" placeholder="Apellidos" required>
                <input name="dni" class="placeholder:text-base md:placeholder:text-lg  placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full" type="tel" minlength="8" maxlength="9" placeholder="DNI/CE" required>
                <input name="tel" class="placeholder:text-base md:placeholder:text-lg  placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full" type="tel" minlength="9" maxlength="9" placeholder="Celular" required>
                <input name="maix" class="placeholder:text-base md:placeholder:text-lg  placeholder:text-black py-1 px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full" type="email" placeholder="Email" required>
                <div class="text-white flex gap-x-4 sm:gap-x-8 justify-start">
                    <div>Seleccionar:</div>
                    <div class="flex flex-wrap gap-y-1">
                        <label class="cursor-pointer inline-block mr-4  whitespace-nowrap" for="radio_carrera">Carrera <input type="radio" name="interes" id="radio_carrera" value="carrera" checked></label>
                        <label class="cursor-pointer whitespace-nowrap" for="radio_curso">Curso <input type="radio" name="interes" id="radio_curso" value="curso"></label>
                    </div>
                </div>
                <select name="int" id="carrera" class="placeholder:text-base md:placeholder:text-lg  placeholder:text-black py-[3px] px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full" required="">
                    <option value="" disabled selected>Carrera de interés:</option>
                    <option value="Enfermeria">Enfermeria Técnica</option>
                    <option value="Farmacia">Farmacia Técnica</option>
                    <option value="Fisioterapia">Fisioterapia</option>
                    <option value="Laboratio">Laboratorio Clínico</option>
                    <option value="Protesis">Prótesis Dental</option>
                </select>
                <select name="int" id="curso" disabled class="placeholder:text-base md:placeholder:text-lg  placeholder:text-black py-[3px] px-4 text-black bg-white pop-sem md:text-lg text-base rounded-full" required="">
                    <option value="" disabled selected>Curso de interés:</option>
                    <option value="Semi Presencial Inyectables">Semipresencial Inyectables</option>
                    <option value="RCP">Taller Soporte Vital Básico - RCP</option>
                    <option value="Cuidados del Adulto Mayor">Cuidados del Adulto Mayor</option>
                    <option value="Semi Presencial Técnicas de Sutura">Semipresencial Técnicas de Sutura</option>
                    <option value="Semi Presencial Primeros Auxilios">Semipresencial Primeros Auxilios</option>
                    <option value="Aplicacion de vitamina C">Aplicacíon de Vitamica C</option>
                    <option value="Fisioterapia Estetica">Fisioterapia Estética</option>
                    <option value="Marketing Farmaceutico">Marketing Farmaceútico</option>
                    <option value="Nutrición y Actividad Física">Nutrición y Actividad Física</option>
                    <option value="Paramédico">Paramédico</option>
                    <option value="Semi Presencial Movilización y Técnicas de Masaje">Semipresencial Movilización y Técnicas de Masaje</option>
                    <option value="Nutricion del niño en etapa escolar">Nutrición del Niño en Etapa Escolar</option>
                    <option value="Neuro Rehabilitación">Neuro Rehabilitación</option>
                    <option value="Cuidados Básicos en Pediatría">Cuidados Básicos en Pediatría</option>
                    <option value="Gestión Informática de la Oficina de Farmacia">Informática en la Gestión Farmaceútica</option>
                    <option value="Semi Presencial Primeros Auxilios">Semipresencial Primeros Auxilios</option>
                    <option value="Operador de Equipos de Fisioterapia">Operador de Equipos de Fisioterapia</option>
                    <option value="Fisioterapia Respiratoria en el Adulto">Fisioterapia Respiratoria en el Adulto</option>
                    <option value="Dispensación de Productos Farmaceuticos">Dispensación de Productos Farmacéuticos</option>
                    <option value="Bioseguridad">Bioseguridad</option>
                </select>
                <p class="text-transparent text-justify bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-300 pop-med text-sm leading-none flex">
                    <input class=" mr-2" name="chbx_confirmarcion" type="checkbox" id="chbx_confirmarcion" class="chk" value="" required />
                    <span> Al marcar esta casilla, autorizo al Instituto Arzobispo Loayza a utilizar mis datos para comunicarse conmigo y entregarme la información solicitada.</span>
                </p>
                <div class="flex justify-center">
                    <input class="uppercase pop-bla text-white lg:text-3xl text-2xl rounded-full py-2 px-10 bg-gradient-to-r from-cyan-500 to-red-500 cursor-pointer" type="submit" id="btn-submit" value="Enviar">
                </div>
            </form>
        </div>
        <ul class="flex flex-wrap gap-y-4 justify-center lg:gap-x-8 lg:col-span-2">
            <li class="w-[130px] lg:w-min flex flex-col items-center text-center">
                <img class="lg:w-[150px] lg:h-[100px] object-cover" src="public/img/enfermeria.png" width="180" height="105" alt="enfermeria ial">
                <div class="bg-clip-text bg-gradient-to-r from-cyan-500 to-red-500">
                    <span class="pop-bol text-base md:text-xl xl:text-2xl uppercase leading-none text-transparent">Enfermeria <br> Técnica</span>
                </div>
            </li>
            <li class="w-[130px] lg:w-min flex flex-col items-center text-center">
                <img class="lg:w-[150px] lg:h-[100px] object-cover" src="public/img/farmacia.png" alt="" width="180" height="105">
                <div class="bg-clip-text bg-gradient-to-r from-cyan-500 to-red-500">
                    <span class="pop-bol text-base md:text-xl xl:text-2xl uppercase leading-none text-transparent">Farmacia <br> Técnica</span>
                </div>
            </li>
            <li class="w-[130px] lg:w-min flex flex-col items-center text-center">
                <img class="lg:w-[150px] lg:h-[100px] object-cover" src="public/img/protesis.png" alt="" width="180" height="105">
                <div class="bg-clip-text bg-gradient-to-r from-cyan-500 to-red-500">
                    <span class="pop-bol text-base md:text-xl xl:text-2xl uppercase leading-none text-transparent">Prótesis <br> Dental</span>
                </div>
            </li>
            <li class="w-[130px] lg:w-min flex flex-col items-center text-center">
                <img class="lg:w-[150px] lg:h-[100px] object-cover" src="public/img/laboratorio.png" alt="" width="180" height="105">
                <div class="bg-clip-text bg-gradient-to-r from-cyan-500 to-red-500">
                    <span class="pop-bol text-base md:text-xl xl:text-2xl uppercase leading-none text-transparent">Laboratorio <br> Clínico</span>
                </div>
            </li>
            <li class="w-[130px] lg:w-min flex flex-col items-center text-center">
                <img class="lg:w-[150px] lg:h-[100px] object-cover" src="public/img/fisioterapia.png" alt="" width="180" height="105">
                <div class="bg-clip-text bg-gradient-to-r from-cyan-500 to-red-500">
                    <span class="pop-bol text-base md:text-xl xl:text-2xl uppercase leading-none text-transparent">Fisioterapia y <br> Rehabilitación</span>
                </div>
            </li>
        </ul>
    </main>
    <footer class="footer">
        <div class="wrapper flex justify-between items-center lg:w-full">
            <img class="lg:w-[85px] lg:h-[135px] object-cover" src="public/img/logo.png" width="50" height="105">
            <p class="text-black pop-ext text-sm md:text-2xl lg:text-3xl">Líderes en ciencias <br> de la salud</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('#form_inscripcion').submit(function (e){
            $('#btn-submit').val('ENVIANDO...');
        })
        $('input[type=radio][name=interes]').change(function() {
            const carrera = document.getElementById('carrera')
            const curso = document.getElementById('curso')
            if (this.value == 'carrera') {
              carrera.removeAttribute('disabled');
              curso.setAttribute('disabled', 'true');
              curso.value = ""
            }
            else if (this.value == 'curso') {
              curso.removeAttribute('disabled');
              carrera.setAttribute('disabled','true');
              carrera.value = ""
            }
        });
    </script>

</body>

</html>