<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="public/index.css">
    <title>IAL | Instituto Arzobispo Loayza</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @tailwind components;
        @tailwindcss utilities;

        @layer utilities {
          .pop-bla {
            font-family: 'PopBlack';
          }
          .pop-med {
            font-family: 'PopMedium';
          }
          .pop-sem {
            font-family: 'PopSemiBold';
          }
          .pop-bol {
            font-family: 'PopBold';
          }
          .pop-ext {
            font-family: 'PopExtra';
          }
        }
        @layer components {
          .wrapper {
            @apply lg:max-w-[1400px] lg:px-4 w-[85%] mx-auto;
          }
          
        }
    </style>
</head>

<body class="bg-black">
    <main class="wrapper py-20 flex flex-col gap-y-8">
        <h1 class="text-center text-3xl lg:text-4xl leading-none text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-300 pop-bol">
            Si quieres conocer más <br>
            sobre nuestras carreras, <br>
            déjanos tus datos para <br>
            contactarnos contigo 
        </h1>
        <div class="iframe">
            <iframe class="iframe__iframe rounded-md" width="693" height="390" src="https://www.youtube.com/embed/G0wbZ6Jl064" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="bg-[url('public/img/borde.png')] bg-[length:100%_100%] p-12">
            <h2 class="uppercase pop-bol text-center leading-none text-[40px] lg:text-5xl text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-red-500 mb-2">Inscríbete Aquí</h2>
            <p class="pop-med text-center leading-none text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-300 mb-8">Conoce nuestras carrreras mayor <br> demandada en el sector salud.</p>
            <form class="flex flex-col gap-y-4" method="post" name="form_inscripcion" id="form_inscripcion">
                <input class ="placeholder:text-black py-1 px-4 text-black bg-white pop-sem lg:text-2xl text-xl rounded-full" name="nombres" type="text" placeholder="Nombres" id="nombres" required>
                <input class ="placeholder:text-black py-1 px-4 text-black bg-white pop-sem lg:text-2xl text-xl rounded-full" name="apellidos" type="text" placeholder="Apellidos" id="apellidos" required>
                <input class ="placeholder:text-black py-1 px-4 text-black bg-white pop-sem lg:text-2xl text-xl rounded-full" name="dni" type="tel" minlength="8" maxlength="9" placeholder="DNI/CE" id="dni" required>
                <input class ="placeholder:text-black py-1 px-4 text-black bg-white pop-sem lg:text-2xl text-xl rounded-full" name="celular" type="tel" minlength="9" maxlength="9" placeholder="Celular" id="celular" required>
                <input class ="placeholder:text-black py-1 px-4 text-black bg-white pop-sem lg:text-2xl text-xl rounded-full" name="correo" id="correo" type="email" placeholder="Email" required>
               <select class ="placeholder:text-black py-[3px] px-4 text-black bg-white pop-sem lg:text-2xl text-xl rounded-full" name="carrera" id="carrera" required="">
                    <option value="" disabled selected>Carrera:</option>
                    <option value="Enfermeria">Enfermeria Técnica</option>
                    <option value="Farmacia">Farmacia Técnica</option>
                    <option value="Fisioterapia">Fisioterapia</option>
                    <option value="Laboratio">Laboratorio Clínico</option>
                    <option value="Protesis">Prótesis Dental</option>
                </select>
                <p class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-300 pop-med text-sm leading-none flex">
                    <input class=" mr-2" name="chbx_confirmarcion" type="checkbox" id="chbx_confirmarcion" class="chk" value="" />
                    <span> Al marcar esta casilla, autorizo al Instituto Arzobispo Loayza a utilizar mis datos para comunicarse conmigo y entregarme la información solicitada.</span>
                </p>
                <div>
                <input class="uppercase pop-bla text-white lg:text-3xl text-2xl rounded-full py-2 px-10 bg-gradient-to-r from-cyan-500 to-red-500" type="submit" value="Enviar">
                </div>
            </form>
        </div>
        <ul>
            <li>
                <img src="" alt="">
                <span>Enfermeria Técnica</span>
            </li>
            <li>
                <img src="" alt="">
                <span>Farmacia Técnica</span>
            </li>
            <li>
                <img src="" alt="">
                <span>Prótesis Dental</span>
            </li>
            <li>
                <img src="" alt="">
                <span>Fisioterapia y <br> Rehabilitación</span>
            </li>
            <li>
                <img src="" alt="">
                <span>Laboratorio Clínico</span>
            </li>
        </ul>
    </main>
    <footer>
        <img src="" alt="">
        <p>Líderes en ciencias de la salud</p>
    </footer>
</body>

</html>