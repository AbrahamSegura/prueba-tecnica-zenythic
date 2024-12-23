<header
        class="bg-slate-950 text-white sticky top-0 z-10 opacity-80">
        <nav class="flex justify-around h-20">
            <button>Logotipo</button>
            <ul
                class="flex items-center gap-4 px-4 justify-center h-full">
                <li
                class="h-full flex items-center cursor-pointer hover:bg-gray-700 border-b-4 border-transparent hover:border-white active:border-orange">
                        <a class="p-3 flex h-full w-full items-center" href="{{route('games')}}">Inicio</a> 
                </li>
                    <li
                    class="p-3 h-full flex items-center cursor-pointer hover:bg-gray-700 border-b-4 border-transparent hover:border-white active:border-orange">
                    Casino
                </li>
                    <li
                        class="h-full flex items-center cursor-pointer hover:bg-gray-700 border-b-4 border-transparent hover:border-white active:border-orange">
                        <a class="p-3 flex h-full w-full items-center" href="{{route('sport')}}">Deportes</a> 
                    </li>
            </ul>
            <div class="flex gap-2 items-center ">
                <button
                    class="hover:bg-slate-800 border-white border-2 rounded-full p-2 ">Iniciar
                    Sesión</button>
                <button
                    class="hover:brightness-150 border-white border-2 rounded-full p-2 bg-orange">Registrarse</button>
            </div>
        </nav>
    </header>