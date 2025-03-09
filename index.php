<?php
// Iniciar la sesión al principio del archivo
session_start();

// Manejar la redirección antes de cualquier salida HTML
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['redirectPC'])) {
    header("Location: https://atlantida2.mx?usuario=usuario");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['redirectMobile'])) {
    header("Location: https://atlantida2.mx/mobile/?usuario=usuario");
    exit();
}

// Si el usuario ya recargo la página, borrar el caché de la página
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 30 Dec 2050 00:00:00 GMT");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión | ATLANTIDA</title>
    <!-- <link rel="stylesheet" href="./output.css" /> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var esDispositivoMovil = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

            if (esDispositivoMovil) {
                console.log("El usuario está accediendo desde un dispositivo móvil.");
            } else {
                console.log("El usuario está accediendo desde un PC.");
            }
        });
    </script>
</head>

<style>
    .slide-in {
        animation: slide-in 0.5s ease-in-out;
    }

    @keyframes slide-in {
        0% {
            transform: translateX(25%);
        }

        100% {
            transform: translateX(0);
        }
    }

    .slide-up {
        animation: slide-up 0.5s forwards;
    }

    @keyframes slide-up {
        0% {
            transform: translateY(-100%);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .image-container {
        position: relative;
        height: 100vh;
        /* Ajusta la altura según necesites */
        background-size: cover;
        background-position: center;
    }

    .logo {
        top: 20px;
        /* Ajusta según necesites */
        left: 20px;
        /* Ajusta según necesites */
    }

    .logo-letter {
        top: 50px;
        /* Ajusta para que 'gp-logo-letter-w.png' se posicione correctamente sobre 'gp-logo-w.png' */
        left: 50px;
        /* Ajusta según necesites */
    }

    .logo img,
    .logo-letter img {
        width: 100px;
        /* Ajusta el ancho como sea necesario */
        height: auto;
        /* Mantiene la proporción de la imagen */
    }

    body {
        justify-content: center;
        align-items: center;
        background-image: radial-gradient(circle, #D7D7D7, #D7D7D7 1px, #FFF 1px, #FFF);
        background-size: 28px 28px;
        position: relative;
        min-height: 100%;
        text-align: center;
        margin: 0;
        line-height: 1.3;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
        font-size: 16px;
        font-weight: 400;
        min-width: 320px;
        direction: ltr;
        font-feature-settings: 'kern';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-scroll-behavior: smooth;
        -moz-scroll-behavior: smooth;
        -ms-scroll-behavior: smooth;
        scroll-behavior: smooth;
    }

    .hidden {
        display: none;
    }
</style>

<body class="bg-gray-100">

    <nav class="lg:hidden bg-gray-800 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 py-3">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">
            <a href="index" class="flex items-center justify-center w-full">
                <img class="mx-auto" src="logoATL_w">
            </a>
        </div>
    </nav>

    <div class="grid grid-cols-none lg:grid-cols-2 gap-2">
        <div class="flex justify-center items-start h-screen">
            <div class="p-8 sm:w-96 md:2/3 lg:2/3">
                <div class="lg:grid lg:grid-cols-subgrid lg:gap-2 col-span-1 z-40 items-start mb-52">
                    <img class="w-60 mx-auto hidden" src="gp-logo">
                </div>
                <form id="loginForm" method="POST" action="">
                    <div
                        class="slide-in bg-white lg:bg-transparent p-10 lg:p-0 rounded-lg lg:rounded-none shadow-md lg:shadow-none">
                        <h2 class="lg:hidden block text-2xl font-bold mb-4">Iniciar sesión en Atlantida</h2>
                        <!-- <div class="mb-4">
                            <label for="usuario" class="text-start block text-gray-700 text-sm mb-2">Usuario</label>
                            <input type="text" id="usuario" name="usuario"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                                required>
                        </div> -->
                        <!-- <div class="mb-4">
                            <label for="contrasena" class="text-start block text-gray-700 text-sm mb-2">Contraseña</label>
                            <input type="password" id="contrasena" name="contrasena"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                                required>
                        </div> -->
                        <!-- <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="rememberUser" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                <label for="rememberUser" class="ms-2 text-xs font-medium text-gray-900">Recordar
                                    contraseña</label>
                            </div>
                        </div> -->
                        <!-- Botón de PC -->
                        <button type="submit" name="redirectPC"
                            class="hidden md:block w-full bg-[#0E1E47] text-white py-2 px-4 rounded hover:bg-blue-800 mt-0">Iniciar
                            sesión</button>
                        <!-- Botón de móvil -->
                        <button type="submit" name="redirectMobile"
                            class="block md:hidden w-full bg-[#0E1E47] text-white py-2 px-4 rounded hover:bg-blue-800 mt-0">Iniciar
                            sesión</button>
                    </div>
                </form>
            </div>
        </div>
        <div
            class="justify-center image-container flex h-screen lg:bg-[url('./background_2.png')] sticky sm:bg-transparent">
        </div>
    </div>

    <?php
    // Obtener el día actual
    $diaActual = date('j'); // 'j' devuelve el día del mes sin ceros iniciales
    
    // Función para determinar qué popup mostrar
    function mostrarPopup($diaActual)
    {
        if ($diaActual >= 15 && $diaActual <= 18) {
            return 'popup1';
        } elseif ($diaActual == 19 || $diaActual == 20) {
            return 'popup2';
        } else {
            return 'popup3';
        }
    }

    // Determinar qué popup mostrar
    $popupAMostrar = mostrarPopup($diaActual);
    ?>

    <!-- Popup 1: Días 15 al 18 -->
    <!-- <div id="popup1"
        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-900 bg-opacity-50 <?php echo $popupAMostrar !== 'popup1' ? 'hidden' : ''; ?>">
        <div class="slide-up bg-white rounded-lg shadow-lg p-8 w-auto mt-20 md:mt-0">
            <div class="flex justify-end">
                <button id="closePopup1" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex justify-center mt-4">
                <img src="alert-1.jpeg" alt="Popup Image" class="justify-center lg:w-96 w-52 rounded-lg">
            </div>
            <div>
                <button type="button" id="noMostrar1"
                    class="py-2.5 px-5 me-2 mt-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No
                    volver a mostrar</button>
            </div>
        </div>
    </div> -->

    <!-- Popup 2: Días 19 y 20 -->
    <!-- <div id="popup2"
        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-900 bg-opacity-50 <?php echo $popupAMostrar !== 'popup2' ? 'hidden' : ''; ?>">
        <div class="slide-up bg-white rounded-lg shadow-lg p-8 w-auto mt-20 md:mt-0">
            <div class="flex justify-end">
                <button id="closePopup2" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex justify-center mt-4">
                <img src="alert-2.jpeg" alt="Popup Image" class="justify-center lg:w-96 w-52 rounded-lg">
            </div>
            <div>
                <button type="button" id="noMostrar2"
                    class="py-2.5 px-5 me-2 mt-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No
                    volver a mostrar</button>
            </div>
        </div>
    </div> -->

    <!-- Popup 3: Todos los demás días -->
    <!-- <div id="popup3"
        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-900 bg-opacity-50 <?php echo $popupAMostrar !== 'popup3' ? 'hidden' : ''; ?>">
        <div class="slide-up bg-white rounded-lg shadow-lg p-8 w-auto mt-20 md:mt-0">
            <div class="flex justify-end">
                <button id="closePopup3" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex justify-center mt-4">
                <img src="alert-3.jpeg" alt="Popup Image" class="justify-center lg:w-96 w-52 rounded-lg">
                <div class="absolute pt-32 lg:pt-[15.5rem] justify-between">
                    <a target="_blank" href="https://atlantida.mx/promociones"
                        class="py-1.5 lg:py-2.5 px-1.5 lg:px-5 mr-6 mt-4 shadow-xl text-xs lg:text-sm font-normal lg:font-medium text-blue-800 focus:outline-none bg-gray-50 rounded-full border border-gray-300 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Promo</a>
                    <a target="_blank" href="https://grupocardinales.com/Bolet%C3%ADn%20GC%2001.25.pdf"
                        class="py-1.5 lg:py-2.5 px-1.5 lg:px-5 mt-4 shadow-xl text-xs lg:text-sm font-normal lg:font-medium text-blue-800 focus:outline-none bg-gray-50 rounded-full border border-gray-300 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Índice</a>
                </div>
            </div>
            <div>
                <button type="button" id="noMostrar3"
                    class="py-1.5 lg:py-2.5 px-1.5 lg:px-5 me-2 mt-4 shadow-md text-medium font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No
                    volver a mostrar</button>
            </div>
        </div>
    </div> -->

    <!-- Popup 4: Aparece después de cerrar o marcar "No volver a mostrar" en los otros popups -->
    <!-- <div id="popup4"
        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <div class="slide-up bg-white rounded-lg shadow-lg p-8 w-auto mt-20 md:mt-0">
            <div class="flex justify-end">
                <button id="closePopup4" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex justify-center mt-4">
                <img src="alert-4.jpeg" alt="Popup Image" class="justify-center md:w-64 2xl:w-96 w-52 rounded-lg">
            </div>
            <div>
                <button type="button" id="noMostrar4"
                    class="py-2.5 px-5 me-2 mt-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No
                    volver a mostrar</button>
            </div>
        </div>
    </div> -->

    <!-- Popup 1: Días 15 al 18 -->
    <div id="popup1">
        <div id="bottom-banner" tabindex="-1"
            class="grid grid-cols-1 fixed bottom-0 start-0 z-50 justify-items-center text-center gap-y-2 justify-between w-full p-4 backdrop-blur-[15px] backdrop-saturate-[200%] bg-[rgba(255,255,255,0.2)] border rounded-none border-solid border-[rgba(216,216,216,0.13)] -webkit-backdrop-filter: blur(10px) saturate(200%) dark:backdrop-blur-[10px] dark:backdrop-saturate-[200%] dark:bg-[rgba(5,0,70,0.4)] dark:border-solid dark:border-[rgba(0, 0, 0, 0.13)] <?php echo $popupAMostrar !== 'popup1' ? 'hidden' : ''; ?>">
            <div class="mb-4 md:mb-0 md:me-4">
                <h2 class="mb-1 text-base font-semibold text-gray-900 dark:text-white">¿Ya realizaste tu pago mensual?
                </h2>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">
                    Este es sólo un recordatorio. No olvides que a partir del día 20 de cada mes por sistema inician los
                    cortes de servicio.
                </p>
                <p class="text-sm font-bold text-red-500 dark:text-red-500">
                    Si ya realizaste tu pago, favor de hacer caso omiso.
                </p>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">
                    ¡Gracias por tu pago puntual!
                </p>
            </div>
            <div class="flex items-center flex-shrink-0">
                <button type="button" id="noMostrar1"
                    class="text-sm font-medium text-blue-700 dark:text-blue-300 focus:outline-none">No
                    volver a mostrar</button>
            </div>
        </div>
    </div>

    <!-- Popup 2: Días 19 y 20 -->
    <div id="popup2">
        <div id="bottom-banner" tabindex="-1"
            class="grid grid-cols-1 fixed bottom-0 start-0 z-50 justify-items-center text-center gap-y-2 justify-between w-full p-4 backdrop-blur-[15px] backdrop-saturate-[200%] bg-[rgba(255,255,255,0.2)] border rounded-none border-solid border-[rgba(216,216,216,0.13)] -webkit-backdrop-filter: blur(10px) saturate(200%) dark:backdrop-blur-[10px] dark:backdrop-saturate-[200%] dark:bg-[rgba(5,0,70,0.4)] dark:border-solid dark:border-[rgba(0, 0, 0, 0.13)] <?php echo $popupAMostrar !== 'popup1' ? 'hidden' : ''; ?>">
            <div class="mb-4 md:mb-0 md:me-4">
                <h2 class="mb-1 text-base font-semibold text-gray-900 dark:text-white">¡NO TE QUEDES SIN SERVICIO!
                </h2>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">
                    El día 20 de cada mes, por sistema inician cortes de servicio automáticos. Envía tu comprobante de
                    pago <span class="font-bold uppercase">hoy</span> mismo y evita suspensión vía correo o WhatsApp.
                </p>
                <p class="text-sm font-bold text-red-500 dark:text-red-500">
                    Si ya realizaste tu pago, favor de hacer caso omiso.
                </p>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">
                    ¡Gracias por tu pago puntual!
                </p>
            </div>
            <div class="flex items-center flex-shrink-0">
                <button type="button" id="noMostrar2"
                    class="text-sm font-medium text-blue-700 dark:text-blue-300 focus:outline-none">No
                    volver a mostrar</button>
            </div>
        </div>
    </div>

    <!-- Popup 3: Todos los demás días -->
    <div id="popup3">
        <div id="bottom-banner" tabindex="-1"
            class="grid grid-cols-1 fixed bottom-0 start-0 z-50 justify-items-center text-center gap-y-2 justify-between w-full p-4 backdrop-blur-[15px] backdrop-saturate-[200%] bg-[rgba(255,255,255,0.2)] border rounded-none border-solid border-[rgba(216,216,216,0.13)] -webkit-backdrop-filter: blur(10px) saturate(200%) dark:backdrop-blur-[10px] dark:backdrop-saturate-[200%] dark:bg-[rgba(5,0,70,0.4)] dark:border-solid dark:border-[rgba(0, 0, 0, 0.13)] <?php echo $popupAMostrar !== 'popup3' ? 'hidden' : ''; ?>">
            <div class="mb-4 md:mb-0 md:me-4">
                <h2 class="mb-1 text-base font-semibold text-gray-900 dark:text-white">Nuevo mes, nuevas noticias</h2>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">
                    Te invitamos a conocer las promociones que tenemos para ti este mes y/o los índices delictivos del
                    mes
                    anterior.
                </p>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">
                    ¡Agradecemos tu preferencia y tu pago puntual previo al día 10 del mes!
                </p>
            </div>
            <div class="flex items-center flex-shrink-0 mb-2">
                <a href="#"
                    class="inline-flex items-center justify-center px-3 py-2 me-3 text-xs font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <svg class="w-3 h-3 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <path fill="currentColor"
                            d="M14.25 2.1a1.25 1.25 0 0 0-1.17-.1L6.91 4.43a1.2 1.2 0 0 1-.46.09H2.5a1.25 1.25 0 0 0-1.25 1.25v.1H0v3h1.25V9a1.25 1.25 0 0 0 1.25 1.22L4 13.4a1.26 1.26 0 0 0 1.13.72h.63A1.25 1.25 0 0 0 7 12.87v-2.53l6.08 2.43a1.3 1.3 0 0 0 .47.09a1.3 1.3 0 0 0 .7-.22a1.25 1.25 0 0 0 .55-1V3.13a1.25 1.25 0 0 0-.55-1.03m-8.5 3.67V9H2.5V5.77zm0 7.1h-.63l-1.23-2.65h1.86zm1.62-3.72A2.3 2.3 0 0 0 7 9V5.7a2.3 2.3 0 0 0 .37-.11l6.18-2.46v8.48zm7.46-3.03v2.5a1.25 1.25 0 0 0 0-2.5" />
                    </svg>
                    Promo</a>
                <a href="#"
                    class="inline-flex items-center justify-center px-3 py-2 me-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <svg class="w-3 h-3 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56">
                        <path fill="currentColor"
                            d="M15.555 53.125h24.89c4.852 0 7.266-2.461 7.266-7.336V24.508c0-3.024-.328-4.336-2.203-6.258L32.57 5.102c-1.78-1.829-3.234-2.227-5.882-2.227H15.555c-4.828 0-7.266 2.484-7.266 7.36v35.554c0 4.898 2.438 7.336 7.266 7.336m.187-3.773c-2.414 0-3.68-1.29-3.68-3.633V10.305c0-2.32 1.266-3.657 3.704-3.657h10.406v13.618c0 2.953 1.5 4.406 4.406 4.406h13.36v21.047c0 2.343-1.243 3.633-3.68 3.633ZM31 21.132c-.914 0-1.29-.374-1.29-1.312V7.375l13.5 13.758Z" />
                    </svg>
                    Índice</a>
            </div>
            <div class="flex items-center flex-shrink-0">
                <button type="button" id="noMostrar3"
                    class="text-sm font-medium text-blue-700 dark:text-blue-300 focus:outline-none">No
                    volver a mostrar</button>
            </div>
        </div>
    </div>

    <!-- Popup 4: Aparece después de cerrar o marcar "No volver a mostrar" en los otros popups -->
    <div id="popup4">
        <div id="bottom-banner" tabindex="-1"
            class="grid grid-cols-1 fixed bottom-0 start-0 z-50 justify-items-center text-center gap-y-2 justify-between w-full p-4 backdrop-blur-[15px] backdrop-saturate-[200%] bg-[rgba(255,255,255,0.2)] border rounded-none border-solid border-[rgba(216,216,216,0.13)] -webkit-backdrop-filter: blur(10px) saturate(200%) dark:backdrop-blur-[10px] dark:backdrop-saturate-[200%] dark:bg-[rgba(5,0,70,0.4)] dark:border-solid dark:border-[rgba(0, 0, 0, 0.13)] <?php echo $popupAMostrar !== 'popup3' ? 'hidden' : ''; ?>">
            <div class="mb-4 md:mb-0 md:me-4">
                <h2 class="mb-1 text-base font-semibold text-red-900 dark:text-white">Aviso importante</h2>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">
                    Estimado cliente:
                </p>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">
                    Como cada año iniciaremos la limpieza del sistema ATLANTIDA, con la <span
                        class="text-red-500 dark:text-red-500">eliminación total de data</span> de unidades que se
                    dieron de baja en 2024.
                </p>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">
                    Igualmente se darán de baja unidades que no hayan reportado en los últimos 6 meses.
                </p>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-200">
                    En caso de querer mantener alguna unidad, favor de notificarlo a su asesor comercial.
                </p>
            </div>
            <div class="flex items-center flex-shrink-0">
                <button type="button" id="noMostrar4"
                    class="text-sm font-medium text-blue-700 dark:text-blue-300 focus:outline-none">No
                    volver a mostrar</button>
            </div>
        </div>
    </div>

    <div id="messageDiv" class="fixed sm:top-32 lg:top-20 sm:left-0 lg:left-[-25%] w-full flex justify-center mt-4">
    </div>

    <script>
        // Verificar si los popups deben mostrarse
        document.addEventListener('DOMContentLoaded', function () {
            if (localStorage.getItem('noMostrar1') === 'true') {
                document.getElementById('popup1').classList.add('hidden');
            }
            if (localStorage.getItem('noMostrar2') === 'true') {
                document.getElementById('popup2').classList.add('hidden');
            }
            if (localStorage.getItem('noMostrar3') === 'true') {
                document.getElementById('popup3').classList.add('hidden');
            }
        });

        //No volver a mostrar el boton del popup
        document.getElementById('noMostrar1').addEventListener('click', function () {
            localStorage.setItem('noMostrar1', 'true');
            document.getElementById('popup1').classList.add('hidden');
            mostrarPopup4();
        });
        document.getElementById('noMostrar2').addEventListener('click', function () {
            localStorage.setItem('noMostrar2', 'true');
            document.getElementById('popup2').classList.add('hidden');
            mostrarPopup4();
        });
        document.getElementById('noMostrar3').addEventListener('click', function () {
            localStorage.setItem('noMostrar3', 'true');
            document.getElementById('popup3').classList.add('hidden');
            mostrarPopup4();
        });

        document.getElementById('closePopup1').addEventListener('click', function () {
            document.getElementById('popup1').classList.add('hidden');
            mostrarPopup4();
        });
        document.getElementById('closePopup2').addEventListener('click', function () {
            document.getElementById('popup2').classList.add('hidden');
            mostrarPopup4();
        });
        document.getElementById('closePopup3').addEventListener('click', function () {
            document.getElementById('popup3').classList.add('hidden');
            mostrarPopup4();
        });

        // Función para mostrar el popup4
        function mostrarPopup4() {
            document.getElementById('popup4').classList.remove('hidden');
        }

        // JavaScript para cerrar el popup4
        document.getElementById('closePopup4').addEventListener('click', function () {
            document.getElementById('popup4').classList.add('hidden');
        });
        document.getElementById('noMostrar4').addEventListener('click', function () {
            document.getElementById('popup4').classList.add('hidden');
        });
    </script>

    <script src="./node_modules/flowbite/dist/flowbite.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var loginForm = document.getElementById("loginForm");
            var messageDiv = document.getElementById("messageDiv");

            var closePopup = document.getElementById("closePopup");
            var popup = document.getElementById("popup");

            closePopup.addEventListener("click", function () {
                popup.style.display = "none";
            });

            // loginForm.addEventListener("submit", function (e) {
            //     e.preventDefault();

            //     var usuario = document.getElementById("usuario").value;
            //     var contrasena = document.getElementById("contrasena").value;

            //     var xhr = new XMLHttpRequest();
            //     var proxyUrl = 'https://cors-anywhere.herokuapp.com/',
            //         targetUrl = `https://atlantida2.mx/index.php`;
            //     xhr.open("POST", proxyUrl + targetUrl, true);
            //     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            //     xhr.onreadystatechange = function () {
            //         if (xhr.readyState === 4) {
            //             if (xhr.status === 200) {
            //                 var responseText = xhr.responseText.trim();
            //                 console.log(responseText);
            //                 console.log(xhr.response);
            //                 console.log(xhr.responseText);
            //                 console.log(xhr.responseURL);
            //                 console.log(xhr.responseType);
            //                 console.log(xhr.responseXML);

            //                 if (xhr.responseURL.includes("index.php")) {
            //                     messageDiv.innerHTML = '<div class="text-green-500 bg-green-100 p-2 rounded">Inicio de sesión exitoso. Redirigiendo...</div>';
            //                     window.location.href = `https://atlantida2.mx/login.php?username=${usuario}&password=${contrasena}`;
            //                     setTimeout(function () {
            //                     }, 2000);
            //                 } else {
            //                     messageDiv.innerHTML = '<div class="text-red-500 bg-red-100 p-2 rounded">Usuario o contraseña incorrectos. Inténtalo de nuevo.</div>';
            //                 }
            //             } else {
            //                 messageDiv.innerHTML = '<div class="text-red-500 bg-red-100 p-2 rounded">Error en la solicitud. Inténtalo de nuevo.</div>';
            //             }
            //         }
            //     };
            //     xhr.send();
            // });
        });

    </script>
</body>

</html>