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
                    <li class="p-3  hover:bg-gray-700 border-b-4 border-transparent hover:border-white active:border-orange">Inicio</li>
                    <li class="p-3  hover:bg-gray-700 border-b-4 border-transparent hover:border-white active:border-orange">Casino</li>
                    <li class="p-3  hover:bg-gray-700 border-b-4 border-transparent hover:border-white active:border-orange">Deportes</li>
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

            <section class="mt-7" id="swiper-container">
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
                    <h3 class="text-lg font-bold">Destacados</h3>
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
                    <h3 class="text-lg font-bold">Destacados</h3>
                    <div>
                        <button class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white clasic-prev"> < </button>
                        <button class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white clasic-next"> > </button>
                    </div>  
                </div>
                    <ul class="swiper-wrapper clasic-swiper">
                    </ul>
                </article>
            </section>
        </main>
        <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>  
    </body>
</html>
