<!DOCTYPE html>
<html class="bg-blue-800" lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css" />
    <title>ATLANTIDA</title>

    <style>
        .rounded-a-lg {
            border-bottom-right-radius: 1rem;
            border-bottom-left-radius: 1rem;
            border-top-left-radius: 1rem;
            /* padding-left: 2rem;
            padding-right: 2rem; */
        }

        #particles {
            background-color: #001237;
            background-image:
                radial-gradient(at 47% 33%, hsl(197.65, 76%, 49%) 0, transparent 59%),
                radial-gradient(at 82% 65%, hsl(215.21, 100%, 33%) 0, transparent 55%);
        }

        #blured {
            backdrop-filter: blur(3px) saturate(173%);
            -webkit-backdrop-filter: blur(3px) saturate(173%);
            background-color: rgba(13, 19, 25, 0.47);
        }
    </style>

</head>

<body>

    <section class="h-fit" id="particles">
        <div id="blured">
            <!-- <img src="img/bg/services.jpg" class="absolute w-full h-fit object-cover z-0" alt=""> -->
            <div class="grid relative justify-items-center items-center py-6" data-aos="fade-up">
                <!-- <h2 class="text-lg font-medium bg-gradient-to-r from-sky-100 to-sky-500 bg-clip-text text-transparent">
                    Lo que
                    somos</h2> -->
                <h1 class="text-4xl font-bold text-gray-50">Plataformas</h1>
                <div class="flex">
                    <hr
                        class="w-40 h-1 my-4 mx-auto bg-gradient-to-r from-blue-700 to-sky-500 border-0 rounded dark:bg-gray-700">
                    <img src="img/GPLogo-w.png" class="w-6 h-6 mx-2 mt-1" alt="">
                    <hr
                        class="w-40 h-1 my-4 mx-auto bg-gradient-to-r from-sky-500 to-blue-700 border-0 rounded dark:bg-gray-700">
                </div>
            </div>
            <div class="text-center relative" data-aos="fade-up">
                <p class="text-lg font-normal text-gray-50 pb-6">
                    Nuestras plataformas están diseñadas para brindar soluciones integrales en seguridad y logística.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 ">

                <div class="hidden md:grid grid-cols-1 justify-items-center items-center mb-52" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="z-0">
                        <img src="img/ATLInt.png" class="rounded-lg flex max-w-72 md:max-w-[22rem] lg:max-w-md"
                            alt="ATLANTIDA">
                    </div>
                    <div class="z-10 rounded-t-lg absolute ml-[17.5rem] md:ml-[15.6rem] lg:ml-[19.6rem] mt-8 lg:mt-14 group-hover:bg-white"
                        id="atl-cubo">
                        <!-- <img src="img/atl-logo-w.png" class="p-2.5" alt=""> -->
                    </div>
                    <a href="https://atlantida.mx" target="_blank"
                        class="w-[350px] md:w-80 lg:w-full absolute mt-80 max-w-sm z-10 bg-white border border-gray-200 rounded-a-lg shadow-xl dark:bg-gray-800 dark:border-gray-700 hover:bg-gradient-to-t from-blue-900 to-blue-600 group transition duration-300 transform hover:translate-y-[-8px] hover:border-0"
                        id="atl-card">
                        <div class="flex flex-col items-center pb-10 pt-4 px-4">
                            <h1 class="text-xl font-bold group-hover:text-gray-50">ATL INTEGRAL</h1>
                            <hr
                                class="w-full h-0.5 my-4 mx-auto bg-gradient-to-r from-blue-700 via-sky-400 to-blue-700 border-0 rounded dark:bg-gray-700">
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400 group-hover:text-gray-200">
                                Plataforma integral de geo localización y monitoreo con funciones de control y
                                administración de flotillas, rastreo de vehículos, control de combustible, reportes de
                                mantenimiento, alertas de seguridad y más.
                            </span>
                        </div>
                    </a>
                </div>

                <div class="grid md:hidden grid-cols-1 justify-self-center items-center mb-12 max-w-xs bg-white hover:bg-gradient-to-t from-blue-900 to-blue-600 group transition duration-300 transform hover:translate-y-[-8px] hover rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    data-aos="fade-up">
                    <div>
                        <img class="rounded-t-lg" src="img/ATLInt.png" alt="" />
                    </div>
                    <a href="https://atlantida.mx" target="_blank" id="atl-card">
                        <div class="flex flex-col items-center pb-10 pt-4 px-4">
                            <h1 class="text-xl font-bold group-hover:text-gray-50">ATLANTIDA</h1>
                            <hr
                                class="w-full h-0.5 my-4 mx-auto bg-gradient-to-r from-blue-700 via-sky-400 to-blue-700 border-0 rounded dark:bg-gray-700">
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400 group-hover:text-gray-200">Servicio
                                intregral de geo localización y
                                monitoreo de traslado logístico con 17 años de experiencia. Venta, renta e instalación
                                de equipos GPS,
                                video vigilancia y plataformas de visualización ATLANTIDA y ATLMAX.</span>
                        </div>
                    </a>
                </div>

                <div class="hidden md:grid grid-cols-1 justify-items-center items-center mb-52" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="z-0">
                        <img src="img/ATLMAX.png" class="rounded-lg flex max-w-72 md:max-w-[22rem] lg:max-w-md"
                            alt="HERMES">
                    </div>
                    <div class="z-10 rounded-t-lg absolute ml-[17.5rem] md:ml-[15.6rem] lg:ml-[19.6rem] mt-12 md:mt-8 lg:mt-14"
                        id="her-cubo">
                        <!-- <img src="img/logos/HERMES.png" class="p-2.5" alt=""> -->
                    </div>
                    <a href="hermes/index" target="_blank"
                        class="w-[350px] md:w-80 lg:w-full absolute mt-80 max-w-sm z-10 bg-white border border-gray-200 rounded-a-lg shadow-xl dark:bg-gray-800 dark:border-gray-700 hover:bg-gradient-to-t from-blue-900 to-blue-600 group transition duration-300 transform hover:translate-y-[-8px] hover:border-0"
                        id="her-card">
                        <div class="flex flex-col items-center pb-10 pt-4 px-4">
                            <h1 class="text-xl font-bold group-hover:text-gray-50">HERMES</h1>
                            <hr
                                class="w-full h-0.5 my-4 mx-auto bg-gradient-to-r from-blue-700 via-sky-400 to-blue-700 border-0 rounded dark:bg-gray-700">
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400 group-hover:text-gray-200">Servicio
                                de
                                custodia federal y local en
                                el translado de mercancías de alto valor. Ofrecemos respaldo de custodia blanca y
                                armada, con personal
                                altamente capacitado y certificado.</span>
                        </div>
                    </a>
                </div>

                <div class="grid md:hidden grid-cols-1 justify-self-center items-center mb-12 max-w-xs bg-white hover:bg-gradient-to-t from-blue-900 to-blue-600 group transition duration-300 transform hover:translate-y-[-8px] hover rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    data-aos="fade-up">
                    <div>
                        <img class="rounded-t-lg" src="img/ATLMAX.png" alt="" />
                    </div>
                    <a href="hermes/index" target="_blank" id="her-card">
                        <div class="flex flex-col items-center pb-10 pt-4 px-4">
                            <h1 class="text-xl font-bold group-hover:text-gray-50">HERMES</h1>
                            <hr
                                class="w-full h-0.5 my-4 mx-auto bg-gradient-to-r from-blue-700 via-sky-400 to-blue-700 border-0 rounded dark:bg-gray-700">
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400 group-hover:text-gray-200">Servicio
                                de
                                custodia federal y local en
                                el translado de mercancías de alto valor. Ofrecemos respaldo de custodia blanca y
                                armada, con personal
                                altamente capacitado y certificado.</span>
                        </div>
                    </a>
                </div>

                <div class="hidden md:grid grid-cols-1 justify-items-center items-center mb-52" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="z-0">
                        <img src="img/SOLID.png" class="rounded-lg flex max-w-72 md:max-w-[22rem] lg:max-w-md"
                            alt="ATLANTIDA">
                    </div>
                    <div class="z-10 rounded-t-lg absolute ml-[17.5rem] md:ml-[15.6rem] lg:ml-[19.6rem] mt-16 md:mt-12 lg:mt-[4.1rem]"
                        id="cen-cubo">
                        <!-- <img src="img/logos/CENTINELA.png" class="p-2.5" alt=""> -->
                    </div>
                    <a href="#" target="_blank"
                        class="w-[350px] md:w-80 lg:w-full absolute mt-80 max-w-sm z-10 bg-white border border-gray-200 rounded-a-lg shadow-xl dark:bg-gray-800 dark:border-gray-700 hover:bg-gradient-to-t from-blue-900 to-blue-600 group transition duration-300 transform hover:translate-y-[-8px] hover:border-0"
                        id="cen-card">
                        <div class="flex flex-col items-center pb-10 pt-4 px-4">
                            <h1 class="text-xl font-bold group-hover:text-gray-50">CENTINELA</h1>
                            <hr
                                class="w-full h-0.5 my-4 mx-auto bg-gradient-to-r from-blue-700 via-sky-400 to-blue-700 border-0 rounded dark:bg-gray-700">
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400 group-hover:text-gray-200">Ofrecemos
                                servicios de seguridad y
                                protección patrimonial intramuros, con personal altamente capacitado y certificado en el
                                estado de
                                Colima.</span>
                        </div>
                    </a>
                </div>

                <div class="grid md:hidden grid-cols-1 justify-self-center items-center mb-12 max-w-xs bg-white hover:bg-gradient-to-t from-blue-900 to-blue-600 group transition duration-300 transform hover:translate-y-[-8px] hover rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    data-aos="fade-up">
                    <div>
                        <img class="rounded-t-lg" src="img/SOLID.png" alt="" />
                    </div>
                    <a href="centinela/index" target="_blank" id="cen-card">
                        <div class="flex flex-col items-center pb-10 pt-4 px-4">
                            <h1 class="text-xl font-bold group-hover:text-gray-50">CENTINELA</h1>
                            <hr
                                class="w-full h-0.5 my-4 mx-auto bg-gradient-to-r from-blue-700 via-sky-400 to-blue-700 border-0 rounded dark:bg-gray-700">
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400 group-hover:text-gray-200">Ofrecemos
                                servicios de seguridad y
                                protección patrimonial intramuros, con personal altamente capacitado y certificado en el
                                estado de
                                Colima.</span>
                        </div>
                    </a>
                </div>

                <div class="hidden md:grid grid-cols-1 justify-items-center items-center mb-52" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="z-0">
                        <img src="img/EPCOM.png" class="rounded-lg flex max-w-72 md:max-w-[22rem] lg:max-w-md"
                            alt="ATLANTIDA">
                    </div>
                    <div class="z-10 rounded-t-lg absolute ml-[17.5rem] md:ml-[15.6rem] lg:ml-[19.6em] mt-14 md:mt-12 lg:mt-14"
                        id="ate-cubo">
                        <!-- <img src="img/logos/ATENEA.png" class="p-2.5" alt=""> -->
                    </div>
                    <a href="#" target="_blank"
                        class="w-[350px] md:w-80 lg:w-full absolute mt-80 max-w-sm z-10 bg-white border border-gray-200 rounded-a-lg shadow-xl dark:bg-gray-800 dark:border-gray-700 hover:bg-gradient-to-t from-blue-900 to-blue-600 group transition duration-300 transform hover:translate-y-[-8px] hover:border-0"
                        id="ate-card">
                        <div class="flex flex-col items-center pb-10 pt-4 px-4">
                            <h1 class="text-xl font-bold group-hover:text-gray-50">ATENEA</h1>
                            <hr
                                class="w-full h-0.5 my-4 mx-auto bg-gradient-to-r from-blue-700 via-sky-400 to-blue-700 border-0 rounded dark:bg-gray-700">
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400 group-hover:text-gray-200">Servicios
                                de
                                desarrollo, implementación
                                y
                                diseño de Software/Hardware, integraciones especializadas a sistemas orientados a la
                                seguridad y
                                control
                                de operaciones logísticas.</span>
                        </div>
                    </a>
                </div>

                <div class="grid md:hidden grid-cols-1 justify-self-center items-center mb-12 max-w-xs bg-white hover:bg-gradient-to-t from-blue-900 to-blue-600 group transition duration-300 transform hover:translate-y-[-8px] hover rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    data-aos="fade-up">
                    <div>
                        <img class="rounded-t-lg" src="img/EPCOM.png" alt="" />
                    </div>
                    <a href="atenea/index" target="_blank" id="ate-card">
                        <div class="flex flex-col items-center pb-10 pt-4 px-4">
                            <h1 class="text-xl font-bold group-hover:text-gray-50">ATENEA</h1>
                            <hr
                                class="w-full h-0.5 my-4 mx-auto bg-gradient-to-r from-blue-700 via-sky-400 to-blue-700 border-0 rounded dark:bg-gray-700">
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400 group-hover:text-gray-200">Servicios
                                de
                                desarrollo, implementación
                                y
                                diseño de Software/Hardware, integraciones especializadas a sistemas orientados a la
                                seguridad y
                                control
                                de operaciones logísticas</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <script src="./node_modules/flowbite/dist/flowbite.js"></script>
    <script src="js/cards.js"></script>
    <script src="js/particles.js"></script>
</body>

</html>