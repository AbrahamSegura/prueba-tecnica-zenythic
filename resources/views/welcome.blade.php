<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">

    <title>Fortunato Juegos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="game-container antialiased dark:bg-black dark:text-white/50">
    <x-header />
    <main class="container mx-auto text-white">
        <section
            class="w-2/4  mt-32 flex flex-col justify-between h-64">
            <article>
                <h2 class="text-5xl">Fortunato Casino</h2>
            </article>
            <article>
                <p>Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Iure asperiores, iste nemo
                    dolores mollitia odit
                    recusandae, nihil possimus maiores ex praesentium
                    non esse ea perspiciatis similique, totam ipsam?
                    Reprehenderit, veniam!</p>
            </article>
            <article>
                <button id="play-more"
                    class="p-3 font-bold bg-gradient-to-br from-vibrant-pink to-orange rounded-3xl hover:brightness-150">
                    Jugar ahora
                    <x-arrow id="arrow-l" />
            </article>
        </section>

        <section class="mt-7 gap-10" id="swiper-container">
            <article class="mt-7 swiper outstanding">
                <div class="flex flex-row justify-between my-5">
                    <h3 class="text-lg font-bold">Destacados</h3>
                    <div>
                        <button
                            class="
                                rounded-full
                                bg-gray-700
                                w-7 h-7 border-2
                                border-white
                                outstanding-prev">
                                <x-arrow rotate="2" />
                        </button>
                        <button
                            class="
                                rounded-full
                                bg-gray-700 
                                w-7 h-7 border-2 
                                border-white 
                                outstanding-next
                                pl-2">
                                <x-arrow />
                        </button>
                    </div>
                </div>
                <ul class="swiper-wrapper outstanding-swiper">
                </ul>
            </article>

            <article class="mt-7 swiper new-games">
                <div class="flex flex-row justify-between my-5">
                    <h3 class="text-lg font-bold">Nuevos Juegos</h3>
                    <div>
                        <button
                            class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white new-games-prev">
                            <x-arrow rotate="2" />
                        </button>
                        <button
                            class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white new-games-next pl-2">
                            <x-arrow/>
                        </button>
                    </div>
                </div>
                <ul class="swiper-wrapper new-games-swiper">
                </ul>
            </article>

            <article class="mt-7 swiper clasic">
                <div class="flex flex-row justify-between my-5">
                    <h3 class="text-lg font-bold">Clásicos</h3>
                    <div>
                        <button
                            class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white clasic-prev">
                            <x-arrow rotate="2" />
                         </button>
                        <button
                            class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white clasic-next pl-2">
                            <x-arrow />
                        </button>
                    </div>
                </div>
                <ul class="swiper-wrapper clasic-swiper">
                </ul>
            </article>
        </section>
        <section
            class="flex flex-col w-full m-auto mt-20 h-96 relative bg-banner-color px-10 rounded-lg">
            <span class="banner-decoration"> </span>
            <article class="w-1/2 m-auto ml-0">
                <div class="text-5xl">Inserta texto de</div>
                <div class="text-5xl">Tres lineas</div>
                <div class="text-5xl">Aquí</div>
                <button
                    class="mt-12 p-3 font-bold bg-gradient-to-br from-vibrant-pink to-orange rounded-3xl hover:brightness-150">
                    Obtener Recompensa
            </article>
            </article>
        </section>
        <section class="mt-7">
            <article class="mt-7 swiper all-games">
                <div class="flex flex-row justify-between my-5">
                    <h3 class="text-lg font-bold">Todos los Juegos
                    </h3>
                    <div>
                        <button
                            class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white all-games-prev">
                            <x-arrow rotate="2" /> 
                        </button>
                        <button
                            class="rounded-full bg-gray-700 w-7 h-7 border-2 border-white all-games-next pl-2">
                            <x-arrow />
                        </button>
                    </div>
                </div>
                <ul class="swiper-wrapper all-games-swiper">
                </ul>
            </article>
        </section>
        <section
            class="flex flex-col w-3/5 gap-5 m-auto mt-7 text-center items-center">
            <h2 class="text-5xl">¡Únete y juega ahora!</h2>
            <h3>Multiplica tu primer deposito x2</h3>
            <div class="flex gap-2 items-center ">
                <button
                    class="hover:bg-slate-800 border-white border-2 rounded-full p-2 ">Iniciar
                    Sesión</button>
                <button
                    class="hover:brightness-150 border-white border-2 rounded-full p-2 bg-orange">Registrarse</button>
            </div>
        </section>
    </main>
    <x-footer />
</body>

</html>