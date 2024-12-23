@props(['state','player1' =>'', 'player2'=>'', 'league'=>''])
@php
    $typeState;
    $textState;
    $typeText;

    switch($state){
        case 'prox':
            $typeState = 'select-none font-bold p-2 rounded-xl bg-gray-500 text-white';
            $textState = 'select-none flex gap-2 text-white';
            $typeText = 'Proximament';
            break;
        case 'live':
            $typeState = 'select-none font-bold p-2 rounded-xl bg-green-600';
            $textState = 'select-none flex gap-2 text-green-600';
            $typeText = 'En vivo';
            break;
        case 'end':
            $typeState = 'select-none font-bold p-2 rounded-xl bg-red-500 text-white';
            $textState = 'select-none flex gap-2 text-red-500';
            $typeText = 'Finalizado';
            break;
    }
@endphp

<article style="width: 500px;" class="flex h-80 bg-banner-color border-0 rounded-2xl ">
    <div class="grid grid-cols-6 grid-rows-2 relative h-full w-full">
        <span class="flex flex-col w-full items-center justify-center col-span-2 gap-4 m-auto ">
            <x-soccer-icon />
            <span class="text-2xl">Fútbol</span>
        </span>
        <div class="flex p-4 h-full items-center justify-between col-start-3 col-span-4 border-l border-b border-white">
            <ul class="flex flex-col h-full font-bold gap-7">
                <li>{{$league}}</li>
                <li>{{$player1}}</li>
                <li>{{$player2}}</li>
            </ul>
            <ul class="flex flex-col h-full gap-7 text-end items-end">
                <li>
                    <x-heart-icon width='20px' height='20px' />
                </li>
                <li>
                    <span class="{{$typeState}}">
                        {{$typeText}}
                    </span>
                </li>
                <li>
                    <span class="{{$textState}}">
                        <x-live-icon width='24px' height='24px' /> 45'1 parte
                    </span>
                </li>
            </ul>
        </div>
        <div class="col-start-1 items-center justify-center text-center col-span-2 flex flex-col h-3/4 w-3/4 m-auto hover:scale-110 cursor-no-drop select-none transition-transform border-2 border-white rounded-xl">
            <x-blocked-icon width="48px" height="48px" />
            <span>{{$player1}}</span>
        </div>
        <div class="col-start-3 items-center justify-center text-center col-span-2 flex flex-col h-3/4 w-3/4 m-auto hover:scale-110 cursor-no-drop select-none transition-transform border-2 border-white rounded-xl">
            <x-blocked-icon width="48px" height="48px" />
            <span>Empate</span>
        </div>
        <div class="col-start-5 items-center justify-center text-center col-span-2 flex flex-col h-3/4 w-3/4 m-auto hover:scale-110 cursor-no-drop select-none transition-transform border-2 border-white rounded-xl">
            <x-blocked-icon width="48px" height="48px" />
            <span>{{$player2}}</span>
        </div>
    </div>
</article>