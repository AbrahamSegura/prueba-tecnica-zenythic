<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fortunato</title>
        <!-- Fonts -->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased dark:bg-black dark:text-white/50">
        <header class="bg-slate-950 text-white sticky top-0 z-10 opacity-80 py-2">
            <nav class="flex justify-around p">
                <button>Logotipo</button>
                <ul class="flex items-center gap-4 px-4 justify-center">
                    <li class="p-3 cursor-pointer hover:bg-gray-700 border-b-4 border-transparent hover:border-white active:border-orange">Inicio</li>
                    <li class="p-3 cursor-pointer hover:bg-gray-700 border-b-4 border-transparent hover:border-white active:border-orange">Casino</li>
                    <li class="p-3 cursor-pointer hover:bg-gray-700 border-b-4 border-transparent hover:border-white active:border-orange">Deportes</li>
                </ul>
                <div class="flex gap-2 items-center "> 
                    <button class="hover:bg-slate-800 border-white border-2 rounded-full p-2 " >Iniciar Sesión</button>
                    <button class="hover:brightness-150 border-white border-2 rounded-full p-2 bg-orange" >Registrarse</button>
                </div>
            </nav>
        </header>
        <main class="container mx-auto text-white">
            <section class="w-2/4  mt-32 flex flex-col justify-between h-64">
                <article>
                    <h2 class="text-5xl">Fortunato Casino</h2>
                </article>
                <article >
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure asperiores, iste nemo dolores mollitia odit recusandae, nihil possimus maiores ex praesentium non esse ea perspiciatis similique, totam ipsam? Reprehenderit, veniam!</p>
                </article>
                <article>
                    <button id="play-more" class="p-3 font-bold bg-gradient-to-br from-vibrant-pink to-orange rounded-3xl hover:brightness-150">
                        Jugar ahora 
                        <svg id="arrow-l" class="inline" width="16px" height="16px" viewBox="-2 -2 24.00 24.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>arrow_right [#336]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#336]"> </path> </g> </g> </g> </g></svg>
                </article>
            </section>

            <section class="mt-7 gap-10" id="swiper-container">
                <article class="mt-7 swiper outstanding">
                <div class="flex flex-row justify-between my-5">
                    <h3 class="text-lg font-bold">Destacados</h3>
                    <div>
                        <button class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white outstanding-prev"> < </button>
                        <button class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white outstanding-next"> > </button>
                    </div>  
                </div>
                    <ul class="swiper-wrapper outstanding-swiper">
                    </ul>
                </article>

                <article class="mt-7 swiper new-games">
                <div class="flex flex-row justify-between my-5">
                    <h3 class="text-lg font-bold">Nuevos Juegos</h3>
                    <div>
                        <button class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white new-games-prev"> < </button>
                        <button class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white new-games-next"> > </button>
                    </div>  
                </div>
                    <ul class="swiper-wrapper new-games-swiper">
                    </ul>
                </article>
                
                <article class="mt-7 swiper clasic">
                <div class="flex flex-row justify-between my-5">
                    <h3 class="text-lg font-bold">Clásicos</h3>
                    <div>
                        <button class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white clasic-prev"> < </button>
                        <button class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white clasic-next"> > </button>
                    </div>  
                </div>
                    <ul class="swiper-wrapper clasic-swiper">
                    </ul>
                </article>
            </section>
            <section class="flex flex-col w-full m-auto mt-20 h-96 relative bg-banner-color px-10 rounded-lg">
                <span class="banner-decoration" > </span>
                <article class="w-1/2 m-auto ml-0" >
                    <div class="text-5xl">Inserta texto de</div>
                    <div class="text-5xl">Tres lineas</div>
                    <div class="text-5xl">Aquí</div>
                    <button class="mt-12 p-3 font-bold bg-gradient-to-br from-vibrant-pink to-orange rounded-3xl hover:brightness-150">
                            Obtener Recompensa
                    </article>
                </article>
            </section>
            <section class="mt-7">
            <article class="mt-7 swiper all-games">
                <div class="flex flex-row justify-between my-5">
                    <h3 class="text-lg font-bold">Todos los Juegos</h3>
                    <div>
                        <button class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white all-games-prev"> < </button>
                        <button class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white all-games-next"> > </button>
                    </div>  
                </div>
                    <ul class="swiper-wrapper all-games-swiper">
                    </ul>
                </article>
            </section>
            <section class="flex flex-col w-3/5 gap-5 m-auto mt-7 text-center items-center">
                <h2 class="text-5xl">¡Únete y juega ahora!</h2>
                <h3>Multiplica tu primer deposito x2</h3>
                <div class="flex gap-2 items-center "> 
                    <button class="hover:bg-slate-800 border-white border-2 rounded-full p-2 " >Iniciar Sesión</button>
                    <button class="hover:brightness-150 border-white border-2 rounded-full p-2 bg-orange" >Registrarse</button>
                </div>
            </section>
        </main>
        <footer class="flex flex-col w-full mt-7 bg-footer-color p-12">
            <img id="loteria" alt="loteria">
            <section class="flex my-4 text-white">
                <article class="w-1/3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos corrupti animi perferendis facilis deserunt quisquam.   </p>
                    <h4 class="my-7 text-xl">Síguenos en Redes Sociales</h4>
                    <div>
                        <button class="p-3 font-bold bg-gradient-to-br from-vibrant-pink to-orange rounded-full hover:brightness-150">
                        <svg width="25px" height="25px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path stroke="#ffffff" stroke-width="12" d="M96 162c-14.152 0-24.336-.007-32.276-.777-7.849-.761-12.87-2.223-16.877-4.741a36 36 0 0 1-11.33-11.329c-2.517-4.007-3.98-9.028-4.74-16.877C30.007 120.336 30 110.152 30 96c0-14.152.007-24.336.777-32.276.76-7.849 2.223-12.87 4.74-16.877a36 36 0 0 1 11.33-11.33c4.007-2.517 9.028-3.98 16.877-4.74C71.663 30.007 81.847 30 96 30c14.152 0 24.336.007 32.276.777 7.849.76 12.87 2.223 16.877 4.74a36 36 0 0 1 11.329 11.33c2.518 4.007 3.98 9.028 4.741 16.877.77 7.94.777 18.124.777 32.276 0 14.152-.007 24.336-.777 32.276-.761 7.849-2.223 12.87-4.741 16.877a36 36 0 0 1-11.329 11.329c-4.007 2.518-9.028 3.98-16.877 4.741-7.94.77-18.124.777-32.276.777Z"></path><circle cx="96" cy="96" r="30" stroke="#ffffff" stroke-width="12"></circle><circle cx="135" cy="57" r="9" fill="#ffffff"></circle></g></svg>
                        </button>
                        <button class="p-3 font-bold bg-gradient-to-br from-vibrant-pink to-orange rounded-full hover:brightness-150">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="25px" height="25px" viewBox="0 0 32.000000 33.000000" preserveAspectRatio="xMidYMid meet">
        <g transform="translate(0.000000,33.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">
        <path d="M52 255 c29 -41 57 -82 63 -89 7 -11 -7 -33 -54 -85 -37 -42 -56 -71 -48 -71 9 0 40 27 70 61 l54 61 43 -61 c43 -61 43 -61 92 -61 l49 0 -53 75 c-29 42 -58 83 -65 93 -10 14 -3 27 48 85 37 40 55 67 45 67 -8 0 -36 -25 -63 -55 -26 -30 -51 -55 -54 -55 -4 0 -24 25 -44 55 -38 54 -39 55 -87 55 l-49 0 53 -75z m90 -28 c31 -45 75 -108 98 -139 39 -55 40 -58 18 -58 -17 1 -35 18 -70 68 -25 37 -69 100 -97 140 -48 66 -50 72 -29 72 17 -1 37 -21 80 -83z"/>
        </g>
        </svg>
                        </button>

                    </div>
                </article>
                <article class="w-2/3">
                    <div class="grid grid-cols-3">
                        <ul class="gap-y-7">
                            <li><h2 class="text-xl mb-7 font-bold">Juegos</h2></li>
                            <li>Destacados</li>
                            <li>Nuevos</li>
                            <li>Clásicos</li>
                            <li>Todos los Juegos</li>
                            <li>Deportes</li>
                        </ul>
                        <ul class="gap-y-7">
                            <li><h2 class="text-xl mb-7 font-bold">Legales</h2></li>
                            <li>Acerca de Nosotros</li>
                            <li>Terminos y Condiciones</li>
                            <li>Políticas de Privacidad</li>
                            <li>Juego Responsable</li>
                        </ul>
                        <ul class="gap-y-7">
                            <li><h2 class="text-xl mb-7 font-bold">Ayuda</h2></li>
                            <li>Chat de soporte</li>
                            <li>Preguntas Frecuentes</li>
                            <li>Reembolso</li>
                            <li>Contacto</li>
                        </ul>
                    </div>
                </article>
            </section>
            <hr class="h-2 bg-gradient-to-r from-white to-slate-700">    
            <div class="flex justify-between m-2">
                <span>Casino Fortunato © Todos los derechos reservados, 2024</span>
                <img id="pagos" alt="tipos de pago">
            </div>
        </footer>
        <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>  
    </body>
</html>
