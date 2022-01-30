<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Incontri | Machupicchu</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/additional.css') }}" rel="stylesheet">
        <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
        @livewireStyles
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
            crossorigin="anonymous">
        </script>
    </head>
    <body class="font-sans">
        <div class="flex lg:hidden  py-2 px-5 z-30 justify-between items-center">
            <button id="clos"type="button" class=" hover:text-crema focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                    <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                </svg>
            </button>
            <img src="{{asset('images/INCONTRI-LOGO-COLOR.png')}}" class=" h-16 w-auto object-cover">
            <div class="group inline-block">
                <button class="flex my-1 text-sm font-semibold text-gray-900  hover:text-crema lg:mx-2 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>
                    </span>
                    <span id="count-cart"class="h-4 w-4 rounded-full text-white bg-crema mt-2 font-medium -ml-1 text-xs my-auto">
                        @if($cart==null)
                            0
                        @else
                            {{count($cart)}}
                        @endif
                    </span>

                </button>
                @if($cart!=null)
                <ul class="z-10 mt-2 bg-white border text-gray-800 border-t-2 border-crema font-semibold transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top right-3">
                    <div class="grid grid-cols-1 px-4 py-2 gap-1">
                        @foreach ($cart as $item)
                            @php
                                if($item['descuento']){
                                    $precio_act=$item['price']-$item['descuento']/100*$item['price'];
                                }
                            @endphp
                            <div class="flex gap-5 items-center text-gray-500 text-sm justify-between ">
                                <div class="flex gap-1 items-center">
                                    <img src="https://admin.incontrimachupicchu.com/{{$item['imagen']}}" class="w-8 h-8">
                                    <a href="{{route('shop').'/'.$item['url']}}">
                                        <p class="hover:text-crema">{{$item['name']}}
                                            <br>
                                            @if($item['descuento'])
                                                S/.{{$item['cantidad']*$precio_act}}
                                            @else
                                                S/.{{$item['cantidad']*$item['price']}}
                                            @endif
                                        </p>
                                    </a>
                                </div>
                                <button class="delete-to-cart hover:text-crema " type="button" data-id="{{$item['id']}}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        @endforeach
                        <a href="{{route('card')}}"><button class="btn-secondary mx-auto  w-full text-center text-xs mt-3">{{__('message.button_view')}}</button></a>
                        <a href="{{route('checkout')}}"><button class="btn-primary mx-auto w-full text-center text-xs">{{__('message.button_check')}}</button></a>
                    </div>
                </ul>
                @endif
            </div>
        </div>
        <div class="hidden px-10 self-center bg-gray-100 lg:bg-transparent py-5 toggle z-30 fixed w-full text-gray-700">
            <button class=" block lg:inline-block my-1 text-sm text-left font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out border-b border-gray-200 py-2"><a  href="{{route('home')}}">{{__('message.nav_1')}}</a></button>
            <button id="clos-menu" class=" block lg:inline-block my-1 text-sm text-left font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out border-b border-gray-200 py-2" aria-label="toggle2">
                <a class="flex items-center">
                    {{__('message.nav_2')}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </button>
            <ul class=" hidden toggle2 text-sm font-medium ml-1">
                <li class="my-2 hover:text-crema text-sm"><a href="{{route('menuMapi')}}">Machupicchu</a></li>
                <li class="my-2 hover:text-crema text-sm"><a href="{{route('menuCarpe')}}">Carpedien</a></li>
            </ul>
            <button class=" block lg:inline-block my-1 text-sm text-left font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out border-b border-gray-200 py-2 w-full"><a href="{{route('about')}}">{{__('message.nav_3')}}</a></button>
            <button class=" block lg:inline-block my-1 text-sm text-left font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out border-b border-gray-200 py-2 w-full"><a href="{{route('blog')}}">{{__('message.nav_5')}}</a></button>
            <button class=" block lg:inline-block my-1 text-sm text-left font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out border-b border-gray-200 py-2 w-full"><a href="{{route('shop')}}">{{__('message.nav_6')}}</a></button>
            <button class=" block lg:inline-block my-1 text-sm text-left font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out border-b border-gray-200 py-2 w-full"><a href="{{route('reservations')}}">{{__('message.nav_4')}}</a></button>
            <button id="clos-leng" class=" block lg:inline-block my-1 text-sm text-left font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out border-b border-gray-200 py-2 w-full" aria-label="toggle3">
                <a class="flex items-center">
                    {{__('message.nav_7')}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </button>
            <ul class=" hidden toggle3 text-sm font-medium ml-1">
                <li class="my-2 hover:text-crema text-sm"><a href="{{('locale/es')}}">ES</a></li>
                <li class="my-2 hover:text-crema text-sm"><a href="{{('locale/en')}}">EN</a></li>
            </ul>
        </div>

        <div id="navbar" class=" mt-8 text-white my-auto w-full fixed items-center py-3 lg:flex  hidden z-30 flex-col lg:flex-row lg:gap-0 gap-2 justify-between z-50">
            <div id="logo1" class=" px-10 self-center">
                <img src="{{asset('images/INCONTRI-LOGO-BLANCO.png')}}" class=" w-32 h-auto object-cover">
            </div>
            <div id="logo2" class=" px-10 hidden self-center">
                <img src="{{asset('images/INCONTRI-LOGO-COLOR.png')}}" class=" w-28  h-auto object-cover">
            </div>
            <div class=" px-10 self-center py-10 lg:py-0 ">
                <button class=" my-1 text-sm  font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out"><a href="{{route('home')}}">{{__('message.nav_1')}}</a></button>
                <div class="group inline-block ">
                    <button class="flex my-1 text-sm font-semibold  hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out">
                        <span class="pr-1 font-semibold">{{__('message.nav_2')}}</span>
                        <span>
                            <svg
                                class="fill-current h-4 w-4 transform group-hover:-rotate-180
                                transition duration-150 ease-in-out"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                            >
                                <path
                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                />
                            </svg>
                        </span>
                    </button>
                    <ul class="mt-2 bg-white border text-gray-800 border-t-2 border-crema font-semibold transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32">
                        <a href="{{route('menuMapi')}}" class="hover:text-crema transform hover:-translate-x-2 transition duration-500 ease-in-out text-xs "><li class="px-8 py-3 hover:bg-gray-100 border-dotted  text-gray-700 border-b border-crema border-opacity-30">Machupicchu</li><a>
                        <a href="{{route('menuCarpe')}}" class="hover:text-crema transform hover:-translate-x-2 transition duration-500 ease-in-out text-xs "><li class="px-8 py-3 hover:bg-gray-100 text-gray-700">Carpedien</li></a>
                    </ul>
                </div>
                <a href="{{route('about')}}"><button class=" my-1 text-sm font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" >{{__('message.nav_3')}}</button></a>
                <button class=" my-1 text-sm  font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out"><a href="{{route('blog')}}">{{__('message.nav_5')}}</a></button>
                <button class=" my-1 text-sm  font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out"><a href="{{route('shop')}}">{{__('message.nav_6')}}</a></button>
                <button id="reser" class=" my-1 text-sm  font-semibold hover:text-crema lg:mx-4 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out border border-white px-3 py-1"><a href="{{route('reservations')}}">{{__('message.nav_4')}}</a></button>
                <div class="group inline-block">
                    <button class="flex my-1 text-sm font-semibold  hover:text-crema lg:mx-2 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 -mb-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                        </span>
                        <span id="count-cart"class="h-4 w-4 rounded-full text-white bg-crema mt-2 font-medium -ml-1 text-xs my-auto">
                            @if($cart==null)
                                0
                            @else
                                {{count($cart)}}
                            @endif
                        </span>

                    </button>
                    @if($cart!=null)
                    <ul class="w-64 mt-2 bg-white border text-gray-800 border-t-2 border-crema font-semibold transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top right-3">
                        <div class="grid grid-cols-1 px-4 py-2 gap-1 ">
                            @foreach ($cart as $item)
                                @php
                                    if($item['descuento']){
                                        $precio_act=$item['price']-$item['descuento']/100*$item['price'];
                                    }
                                @endphp
                                <div class="flex gap-5 items-center text-gray-500 text-sm justify-between">
                                    <div class="flex gap-1 items-center">
                                        <img src="https://admin.incontrimachupicchu.com/{{$item['imagen']}}" class="w-8 h-8">
                                        <a href="{{route('shop').'/'.$item['url']}}">
                                            <p class="hover:text-crema">{{$item['name']}}
                                                <br>
                                                @if($item['descuento'])
                                                    S/.{{$item['cantidad']*$precio_act}}
                                                @else
                                                    S/.{{$item['cantidad']*$item['price']}}
                                                @endif
                                            </p>
                                        </a>
                                    </div>
                                    <button class="delete-to-cart hover:text-crema" type="button" data-id="{{$item['id']}}" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            @endforeach
                            <a href="{{route('card')}}"><button class="btn-secondary mx-auto  w-full text-center text-xs mt-3">{{__('message.button_view')}}</button></a>
                            <a href="{{route('checkout')}}"><button class="btn-primary mx-auto w-full text-center text-xs">{{__('message.button_check')}}</button></a>
                        </div>
                    </ul>
                    @endif
                </div>
                <div class="group inline-block">
                    <button class="flex my-1 text-sm font-semibold  hover:text-crema lg:mx-2 lg:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 -mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </span>
                        <span>
                            <svg
                                class="fill-current h-4 w-4 transform group-hover:-rotate-180
                                transition duration-150 ease-in-out"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                            >
                                <path
                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                />
                            </svg>
                        </span>
                    </button>
                    <ul class="mt-2 bg-white border text-gray-800 border-t-2 border-crema font-semibold transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top">
                        <a href="{{('locale/es')}}" class="hover:text-crema transform hover:-translate-x-2 transition duration-500 ease-in-out text-xs uppercase"><li class="px-2 py-1 hover:bg-gray-100 border-dotted border-b border-crema border-opacity-30">ES</li><a>
                        <a href="{{('locale/en')}}" class="hover:text-crema transform hover:-translate-x-2 transition duration-500 ease-in-out text-xs uppercase"><li class="px-2 py-1 hover:bg-gray-100">EN</li></a>
                    </ul>
                </div>
            </div>
        </div>

        @yield('content')

        <footer class="bg-black2 px-12 pt-10 pb-5 relative" id="contactar">
            <div class="frame black"></div>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 md:gap-2 container gap-8">
                <div class="flex text-white  gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    <div>
                        <h4 class="font-semibold mb-3 tracking-wide  text-sm">{{__('message.footer_title_1')}}</h4>
                        <p class="text-sm tracking-wider text-gray-400">{{__('message.footer_subtitle_1')}}<br>
                            {{__('message.footer_subtitle_2')}}</p>
                    </div>
                </div>
                <div class="flex text-white gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                    </svg>
                    <div>
                        <h4 class="font-semibold mb-3 tracking-wide  text-sm">{{__('message.footer_title_2')}}</h4>
                        <p class="text-sm tracking-wider text-gray-400">
                            <span class=" font-black">•</span> +51 990 229 181<br>
                            <span class=" font-black">•</span> +51 940 450 504<br>
                            <span class=" font-black">•</span> reservations@Foores.com
                        </p>
                    </div>
                </div>
                <div class="flex text-white gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <div>
                        <h4 class="font-semibold mb-3 tracking-wide text-sm">{{__('message.footer_title_3')}}</h4>
                        <p class="text-sm tracking-wider text-gray-400">Av. Pachacuteq s/n<br>
                        Esquina con Jiron Sinchi Roca, Machupicchu, Perú</p>
                    </div>
                </div>
                <div class="my-auto">
                    <iframe height="100px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15540.502573280875!2d-72.5252006!3d-13.1544738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8be7a321f0b05f5!2sIncontri%20del%20Pueblo%20Viejo!5e0!3m2!1ses-419!2spe!4v1638034059182!5m2!1ses-419!2spe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <hr class="border-gray-600 mt-8 mb-4">
            <div class="flex justify-between items-center">
                <p class="text-gray-500 text-center text-xs">© 2021 - All rights reserved</p>
                <div class="flex justify-center gap-4">
                    <a href="https://web.facebook.com/incontridelpuebloviejo/?_rdc=1&_rdr" target="_blank"><button class="bg-white rounded-lg h-8 w-8 transform hover:scale-125 transition duration-500 ease-in-out"><img src="{{asset('images/facebook.png')}}" class="h-8 w-8"></button></a>
                    <a href="https://www.tripadvisor.com.pe/Restaurant_Review-g304036-d2460261-Reviews-Incontri_del_pueblo_Viejo-Aguas_Calientes_Machu_Picchu_Sacred_Valley_Cusco_Region.html" target="_blank"><button  class="transform hover:scale-125 transition duration-500 ease-in-out"><img src="{{asset('images/trip.png')}}" class="h-8 w-8 "></button></a>
                </div>
            </div>
        </footer>
    @livewireScripts
    </body>

    @stack('scripts')

    <script src="{{asset('js/plugins.js')}}"></script>

<script>
    feather.replace();

    document.getElementById("clos").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
            navToggle.item(i).classList.toggle("hidden");
        }
    };
    document.getElementById("clos-menu").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle2");
        for (let i = 0; i < navToggle.length; i++) {
            navToggle.item(i).classList.toggle("hidden");
        }
    };
    document.getElementById("clos-leng").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle3");
        for (let i = 0; i < navToggle.length; i++) {
            navToggle.item(i).classList.toggle("hidden");
        }
    };
    function ocultar(id){
        var elemento = document.getElementById('slider1');
        var elemento2 = document.getElementById('slider2');
        var elemento3 = document.getElementById('slider3');
        if(id=="slider1"){
            elemento.style.display = "block";
            elemento2.style.display = "none";
            elemento3.style.display = "none";
        }
        if(id=="slider2"){
            elemento.style.display = "none";
            elemento2.style.display = "block";
            elemento3.style.display = "none";
        }
        if(id=="slider3"){
            elemento.style.display = "none";
            elemento2.style.display = "none";
            elemento3.style.display = "block";
        }

        var elemento2 = document.getElementById(id2);
        elemento2.style.display = "none";
    }
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navbar").style['background-color'] = "#ffffff";
            document.getElementById("navbar").style['color'] = "#464646";
            document.getElementById("navbar").style['z-index'] = "20";
            document.getElementById("logo1").style['display'] = "none";
            document.getElementById("logo2").style['display'] = "block";
            document.getElementById("reser").style['background-color'] = "#262626";
            document.getElementById("reser").style['color'] = "#ffffff";
            document.getElementById("navbar").style['border-bottom']= "0.1px solid #F3F4F6";
        } else {
            document.getElementById("navbar").style['background-color'] = "transparent";
            document.getElementById("navbar").style['color'] = "#ffffff";
            document.getElementById("logo2").style['display'] = "none";
            document.getElementById("logo1").style['display'] = "block";
            document.getElementById("navbar").style['border-bottom']= "none";
        }
    }
</script>
<script>
    function decrement(e) {
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      if(value>0){
      value--;
      target.value = value;
      }
    }

    function increment(e) {
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      let max = Number(target.max);
      if(value<max){
      value++;
      target.value = value;
      }
    }

    const decrementButtons = document.querySelectorAll(
      `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
      `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
      btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
      btn.addEventListener("click", increment);
    });
</script>
<script>
    $(document).ready(function() {
        window.cart = <?php echo json_encode($cart) ?>;

        $('.add-to-cart').on('click', function(event){
            var cart = window.cart || [];
            cart.push({'id':$(this).data('id'), 'name':$(this).data('name'),'name_ingles':$(this).data('name_ingles'), 'price':$(this).data('price'),'descuento':$(this).data('descuento'),'cantidad':$('#cantidad').val(),'imagen':$(this).data('imagen'),'url':$(this).data('url')});
            window.cart = cart;

            $.ajax('/store/add-to-cart', {
                type: 'GET',
                data: {"_token": "{{ csrf_token() }}", "cart":cart},
                success: function (data, status, xhr) {
                }
            });
            location.reload(true);
        });
        $('.update-to-cart').on('click', function(event){
            var cart = window.cart || [];
            var objIndex = cart.findIndex((obj => obj.id == $(this).data('id')));
            cart[objIndex].cantidad = $('#cantidad').val();
            cart[objIndex].stock = $(this).data('stock');
            window.cart = cart;

            $.ajax('/store/update-to-cart', {
                type: 'GET',
                data: {"_token": "{{ csrf_token() }}", "cart":cart},
                success: function (data, status, xhr) {
                }
            });
            location.reload(true);
        });
        $('.delete-to-cart').on('click', function(event){
            var cart = window.cart || [];
            var objIndex = cart.findIndex((obj => obj.id == $(this).data('id')));
            cart.splice(objIndex, 1);
            window.cart = cart;

            $.ajax('/store/update-to-cart', {
                type: 'GET',
                data: {"_token": "{{ csrf_token() }}", "cart":cart},
                success: function (data, status, xhr) {
                }
            });
            location.reload(true);
        });
    })
</script>
@stack('scripts')
</html>
