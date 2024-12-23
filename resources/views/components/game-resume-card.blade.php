@props(['state','player1' =>'', 'player2'=>'', 'league'=>''])

@php
    $time;
    $typeState;
    $textState;
    $typeText;
    $hid;

    switch($state){
        case 'live':
            $typeState = 'select-none font-bold p-2 rounded-xl bg-green-600';
            $textState = 'select-none flex gap-2 text-green-600';
            $typeText = 'En vivo';
            $time = "45'1 parte";
            $hid = "";
            break;
        case 'end':
            $typeState = 'select-none font-semibold p-2 text-gray-500';
            $textState = 'select-none flex gap-2 text-gray-500';
            $typeText = '26 may';
            $time = "12:30pm";
            $hid = "hidden";
            break;
    }
@endphp

<article class="flex bg-banner-color h-48 w-full rounded-2xl overflow-x-scroll scroll-styled mt-10">
    <table>
        <thead>
            <tr>
                <th class="flex justify-between p-2 border-b-2 border-r-2 border-white">{{$league}} 
                    <x-heart-icon width='20px' height='20px'/>
                 </th>
                <th class="border-b-2 border-r-2 border-white">1x2</th>
                <th class="border-b-2 border-r-2 border-white">Doble oportunidad</th>
                <th class="border-b-2 border-white">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-r-2 border-white p-3">
                    <div class="flex flex-col w-64">
                        <ul>
                            <li class="flex items-center justify-between">
                                <span class="{{$typeState}}">
                                    {{$typeText}}
                                </span>
                                <span class="{{$textState}}">
                                <span class="{{$hid}}" ><x-live-icon width='25px' height='25px' /></span> {{$time}}
                                </span>
                                <x-pushpin-icon width='25px' height='25px' />
                            </li>
                            <li class="flex items-center justify-between">
                                <span>{{$player1}}</span>
                                <span>1</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>{{$player2}}</span>
                                <span>2</span>
                            </li>
                        </ul>
                    </div>
                </td>
                <td class="border-r-2 border-white p-3">
                    <div class="grid grid-cols-3 p-4 h-full w-72">
                        <div class="border-r-2 text-center h-full justify-between gap-2 border-gray-500">
                            <h2 class="text-lg mb-4 text-slate-500">1</h1>
                                <h3 class="text-lg">1.07</h3>
                        </div>
                        <div class="border-r-2 text-center h-full justify-between gap-2 border-gray-500">
                            <h2 class="text-lg mb-4 text-slate-500">Empate</h1>
                                <h3 class="text-lg">11</h3>
                        </div>
                        <div class="text-center h-full justify-between gap-2">
                            <h2 class="text-lg mb-4 text-slate-500">1</h1>
                                <h3 class="text-lg">2.9</h3>
                        </div>
                    </div>
                </td>
                <td class="border-r-2 border-white p-3">
                    <div class="grid grid-cols-3 h-full w-80">
                        <div class="border-r-2 text-center h-full justify-between gap-2 border-gray-500">
                            <h2 class="text-lg mb-4 text-slate-500">1 ó Empate</h1>
                                <h3 class="text-lg">1.07</h3>
                        </div>
                        <div class="border-r-2 text-center h-full justify-between gap-2 border-gray-500">
                            <h2 class="text-lg mb-4 text-slate-500"> 1 ó 2</h1>
                                <h3 class="text-lg">11</h3>
                        </div>
                        <div class="text-center h-full justify-between gap-2">
                            <h2 class="text-lg mb-4 text-slate-500">Empate ó 2</h1>
                                <h3 class="text-lg">2.9</h3>
                        </div>
                    </div>
                </td>
                <td class="p-3">
                    <div class="grid grid-cols-4 h-full w-96">
                        <div class="border-r-2 text-center h-full justify-between gap-2 border-gray-500">
                            <h2 class="text-lg mb-4 text-slate-500">más de 3.0</h1>
                                <h3 class="text-lg">2.9</h3>
                        </div>
                        <div class="border-r-2 text-center h-full justify-between gap-2 border-gray-500">
                            <h2 class="text-lg mb-4 text-slate-500">menos de 3.0</h1>
                                <h3 class="text-lg">2.9</h3>
                        </div>
                        <div class="border-r-2 text-center h-full justify-between gap-2 border-gray-500">
                            <h2 class="text-lg mb-4 text-slate-500">más de 3.5</h1>
                                <h3 class="text-lg">2.9</h3>
                        </div>
                        <div class="text-center h-full justify-between gap-2">
                            <h2 class="text-lg mb-4 text-slate-500">menos de 3.5</h1>
                                <h3 class="text-lg">2.9</h3>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</article>