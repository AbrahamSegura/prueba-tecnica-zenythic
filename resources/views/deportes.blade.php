<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">

    <title>Fortunato Deportes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-back-dark text-white/50">
    <x-header />
    <main class="flex flex-col container mx-auto text-white mt-7 relative">
        <aside class="bg-back-dark flex flex-col float-left h-fit w-60 rounded-xl absolute">
            <h2 class="text-xl font-bold transition-all p-2 rounded-ss-xl rounded-se-xl mb-4 bg-banner-color">Deportes</h2>
            <details class="py-2 pl-4">
                <summary class="flex justify-between items-center cursor-pointer ">
                    Fútbol
                    <span class="arrow transition-transform">
                        <x-arrow />
                    </span>
                </summary>
                <ul class="pl-5 transition-all duration-300 ease-in-out">
                    <li>
                        <details name="fb-country" class="py-2 pl-4">
                            <summary class="flex justify-between items-center cursor-pointer">
                                Alemania
                                <span class="arrow transition-transform">
                                    <x-arrow />
                                </span>
                            </summary>
                            <ul class="pl-5">
                                <li>A</li>
                                <li>B</li>
                                <li>C</li>
                                <li>D</li>
                                <li>E</li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details name="fb-country" class="py-2 pl-4">
                            <summary class="flex justify-between items-center cursor-pointer">
                                España
                                <span class="arrow transition-transform">
                                    <x-arrow />
                                </span>
                            </summary>
                            <ul class="pl-5">
                                <li>A</li>
                                <li>B</li>
                                <li>C</li>
                                <li>D</li>
                                <li>E</li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </details>
            <details class="py-2 pl-4">
                <summary class="flex justify-between items-center cursor-pointer ">
                    Baloncesto
                    <span class="arrow transition-transform">
                        <x-arrow />
                    </span>
                </summary>
            </details>
            <details class="py-2 pl-4">
                <summary class="flex justify-between items-center cursor-pointer ">
                    Béisbol
                    <span class="arrow transition-transform">
                        <x-arrow />
                    </span>
                </summary>
            </details>
            <details class="py-2 pl-4">
                <summary class="flex justify-between items-center cursor-pointer ">
                    Hockey
                    <span class="arrow transition-transform">
                        <x-arrow />
                    </span>
                </summary>
            </details>
            <details class="py-2 pl-4">
                <summary class="flex justify-between items-center cursor-pointer ">
                    Fútball Americano
                    <span class="arrow transition-transform">
                        <x-arrow />
                    </span>
                </summary>
            </details>
            <details class="py-2 pl-4">
                <summary class="flex justify-between items-center cursor-pointer ">
                    Ping Pong
                    <span class="arrow transition-transform">
                        <x-arrow />
                    </span>
                </summary>
            </details>
            <details class="py-2 pl-4">
                <summary class="flex justify-between items-center cursor-pointer ">
                    Rugby
                    <span class="arrow transition-transform">
                        <x-arrow />
                    </span>
                </summary>
            </details>
            <details class="py-2 pl-4">
                <summary class="flex justify-between items-center cursor-pointer ">
                    Boxeo
                    <span class="arrow transition-transform">
                        <x-arrow />
                    </span>
                </summary>
            </details>
            <details class="py-2">
                <summary class="flex justify-between items-center text-xl border-b-4 border-orange cursor-pointer ">
                    Favoritos
                    <span class="arrow transition-transform">
                        <x-arrow />
                    </span>
                </summary>
                <div class="flex flex-col h-32 w-full ">
                    <ul class="flex flex-col h-full justify-between">
                        <li class="flex justify-between p-2 ">
                            México > Liga MX
                            <x-heart-icon width='20px' height='20px' liked="liked" />
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="select-none font-bold p-1 rounded-xl bg-green-600">
                                En vivo
                            </span>
                            <span class="select-none flex gap-2 text-green-600">
                                <x-live-icon width='25px' height='25px'/> 45'1 parte
                            </span>
                            <x-pushpin-icon width='25px' height='25px' />
                        </li>
                        <li class="flex items-center justify-between">
                            <span>Luton Town</span>
                            <span>1</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span>Everton</span>
                            <span>2</span>
                        </li>
                    </ul>
                </div>
            </details>
        </aside>
        <div class="flex ml-60">
            <section class="swiper game-card-swiper max-w-screen-sm">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <x-game-card
                            state="live"
                            player1="Pachuca"
                            player2="Pumas UNAM"
                            league="México > Liga MX" />
                    </li>
                    <li class="swiper-slide">
                        <x-game-card
                            state='prox'
                            player1="Luton Town"
                            player2="Everton"
                            league="España > La Liga 2" />
                    </li>
                    <li class="swiper-slide">
                        <x-game-card
                            state="live"
                            player1="Bayer Leverkusen"
                            player2="Hamburgo"
                            league="Alemania > busdesliga" />
                    </li>
                    <li class="swiper-slide">
                        <x-game-card
                            state="end"
                            player1="Pachuca"
                            player2="Pumas UNAM"
                            league="México > Liga MX" />
                    </li>
                </ul>
                <div class="game-scrollbar"></div>
            </section>
            <section class="grid grid-rows-[36px_minmax(0,_1fr)] w-80 h-80 bg-banner-color border-0 rounded-xl ">
                <ul class="flex row-end-2 h-full w-full">
                    <li class="flex text-lg font-bold relative w-1/2 items-center cursor-pointer justify-center border-b-2 transition-colors border-orange"><span>Tu Cupón</span></li>
                    <li class="flex text-lg font-bold relative w-1/2 items-center cursor-pointer justify-center border-b-2 border-transparent transition-colors hover:border-orange"><span>Historial</span></li>
                </ul>
                <article class="flex flex-col justify-center items-center gap-2">
                    <span class="text-gray-500 mx-16 text-center">
                        No hay selecciones en el boleto de apuesta
                    </span>
                    <button class="flex justify-center items-center w-16 h-16 border-0 rounded-full bg-gradient-to-br from-vibrant-pink to-orange cursor-pointer">
                        <x-pushpin-icon width='50px' height='50px' />
                    </button>
                </article>
            </section>
        </div>
        <div class="flex flex-col ml-72 mt-7">
            <section class="flex bg-banner-color h-36 w-full overflow-x-scroll scroll-styled">
                <article class="flex flex-col gap-2 items-center justify-center active:bg-gradient-to-br from-vibrant-pink to-orange h-full min-w-36 transition-colors rounded-xl border border-transparent hover:border-white">
                    <x-all-icon width='60px' height='60px' />
                    <span class="text-xl font-bold">Todos</span>
                </article>
                <article class="flex flex-col gap-2 items-center justify-center active:bg-gradient-to-br from-vibrant-pink to-orange h-full min-w-36 transition-colors rounded-xl border border-transparent hover:border-white">
                    <x-soccer-icon width='60px' height='60px' />
                    <span class="text-xl font-bold">Fútbol</span>
                </article>
                <article class="flex flex-col gap-2 items-center justify-center active:bg-gradient-to-br from-vibrant-pink to-orange h-full min-w-36 transition-colors rounded-xl border border-transparent hover:border-white">
                    <x-basket-icon width='60px' height='60px' />
                    <span class="text-xl font-bold">Baloncesto</span>
                </article>
                <article class="flex flex-col gap-2 items-center justify-center active:bg-gradient-to-br from-vibrant-pink to-orange h-full min-w-36 transition-colors rounded-xl border border-transparent hover:border-white">
                    <x-baseball-icon width='60px' height='60px' />
                    <span class="text-xl font-bold">Béisbol</span>
                </article>
                <article class="flex flex-col gap-2 items-center justify-center active:bg-gradient-to-br from-vibrant-pink to-orange h-full min-w-36 transition-colors rounded-xl border border-transparent hover:border-white">
                    <x-hockey-icon width='60px' height='60px' />
                    <span class="text-xl font-bold">Hockey</span>
                </article>
                <article class="flex flex-col gap-2 items-center justify-center active:bg-gradient-to-br from-vibrant-pink to-orange h-full min-w-36 transition-colors rounded-xl border border-transparent hover:border-white">
                    <x-football-icon width='60px' height='60px' />
                    <span class="text-xl font-bold">Fútbol A</span>
                </article>
                <article class="flex flex-col gap-2 items-center justify-center active:bg-gradient-to-br from-vibrant-pink to-orange h-full min-w-36 transition-colors rounded-xl border border-transparent hover:border-white">
                    <x-pp-icon width='60px' height='60px' />
                    <span class="text-xl font-bold">Ping Pong</span>
                </article>
                <article class="flex flex-col gap-2 items-center justify-center active:bg-gradient-to-br from-vibrant-pink to-orange h-full min-w-36 transition-colors rounded-xl border border-transparent hover:border-white">
                    <x-rugby-icon width='60px' height='60px' />
                    <span class="text-xl font-bold">Rugby</span>
                </article>
                <article class="flex flex-col gap-2 items-center justify-center active:bg-gradient-to-br from-vibrant-pink to-orange h-full min-w-36 transition-colors rounded-xl border border-transparent hover:border-white">
                    <x-boxing-icon width='60px' height='60px' />
                    <span class="text-xl font-bold">Boxeo</span>
                </article>
            </section>
            <section class="mt-10">
                <x-game-resume-card
                    state="live"
                    player1="Pachuca"
                    player2="Pumas UNAM"
                    league="México > Liga MX" />
                <x-game-resume-card
                    state="live"
                    player1="Pachuca"
                    player2="Pumas UNAM"
                    league="México > Liga MX" />
                <x-game-resume-card
                    state="live"
                    player1="Pachuca"
                    player2="Pumas UNAM"
                    league="México > Liga MX" />
                <x-game-resume-card
                    state="live"
                    player1="Pachuca"
                    player2="Pumas UNAM"
                    league="México > Liga MX" />
            </section>
            <button
                class="flex mx-96 my-7 py-3 px-5 items-center justify-between font-bold bg-gradient-to-br from-vibrant-pink to-orange rounded-3xl hover:brightness-150">
                Ver todos los partidos
                <x-arrow rotate="1" />
            </button>
            <section class="mt-10">
                <h2 class="text-2xl">Recomendados</h2>
                <x-game-resume-card
                    state="end"
                    player1="Pachuca"
                    player2="Pumas UNAM"
                    league="México > Liga MX" />
                <x-game-resume-card
                    state="end"
                    player1="Pachuca"
                    player2="Pumas UNAM"
                    league="México > Liga MX" />
                <x-game-resume-card
                    state="end"
                    player1="Pachuca"
                    player2="Pumas UNAM"
                    league="México > Liga MX" />
                <x-game-resume-card
                    state="end"
                    player1="Luton Town"
                    player2="Everton"
                    league="España > La Liga 2" />
                <x-game-resume-card
                    state="end"
                    player1="Luton Town"
                    player2="Everton"
                    league="España > La Liga 2" />
                <x-game-resume-card
                    state="end"
                    player1="Luton Town"
                    player2="Everton"
                    league="España > La Liga 2" />
                <x-game-resume-card
                    state="end"
                    player1="Luton Town"
                    player2="Everton"
                    league="España > La Liga 2" />
            </section>
            <button
                class="flex mx-80 my-7 py-3 px-5 items-center justify-between font-bold bg-gradient-to-br from-vibrant-pink to-orange rounded-3xl hover:brightness-150">
                Ver todos los partidos recomendados
                <x-arrow rotate="1" />
            </button>
            <section class="mt-10">
                <h2 class="text-2xl">Próximos</h2>
                <x-game-resume-card
                    state="end"
                    player1="Pachuca"
                    player2="Pumas UNAM"
                    league="México > Liga MX" />
                <x-game-resume-card
                    state="end"
                    player1="Pachuca"
                    player2="Pumas UNAM"
                    league="México > Liga MX" />
                <x-game-resume-card
                    state="end"
                    player1="Pachuca"
                    player2="Pumas UNAM"
                    league="México > Liga MX" />
                <x-game-resume-card
                    state="end"
                    player1="Luton Town"
                    player2="Everton"
                    league="España > La Liga 2" />
                <x-game-resume-card
                    state="end"
                    player1="Luton Town"
                    player2="Everton"
                    league="España > La Liga 2" />
                <x-game-resume-card
                    state="end"
                    player1="Luton Town"
                    player2="Everton"
                    league="España > La Liga 2" />
                <x-game-resume-card
                    state="end"
                    player1="Luton Town"
                    player2="Everton"
                    league="España > La Liga 2" />
            </section>
            <button
                class="flex mx-80 my-7 py-3 px-5 items-center justify-between font-bold bg-gradient-to-br from-vibrant-pink to-orange rounded-3xl hover:brightness-150">
                Ver todos los próximos partidos
                <x-arrow rotate="1" />
            </button>
        </div>
    </main>
    <x-footer />
</body>

</html>