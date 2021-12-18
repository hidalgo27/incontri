<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body >
        <div class="flex z-30 px-24 items-center justify-center">
            <div class="flex md:hidden">
                <button id="clos"type="button" class="text-gray-50 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar" class="text-white my-auto w-full fixed items-center bg-primary bg-opacity-80 py-2 md:flex toggle hidden z-30 flex-col md:flex-row md:gap-0 gap-2 justify-between">
            
                <div id="logo1" class=" px-10 self-center">
                    <img src="{{asset('images/LOGOBLANCO.png')}}" class=" w-40">
                </div>
                <div id="logo2" class=" px-10 hidden self-center">
                    <img src="{{asset('images/logo.png')}}" class=" w-40">
                </div>
                <div class=" px-10 self-center">
                    <a class=" my-1 text-sm uppercase font-bold dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out"  href="/nosotros">Home</a>
                    <a class=" my-1 text-sm uppercase font-bold dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/en-tours">Menu</a>
                    <a class=" my-1 text-sm uppercase font-bold dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/informacion-de-viaje">About</a>
                    <a class=" my-1 text-sm uppercase font-bold dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/hoteles">Blog</a>
                    <a class=" my-1 text-sm uppercase font-bold dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/f-a-q">Shop</a>
                    <a id="reser" class=" my-1 text-sm uppercase font-bold dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out border border-white px-3 py-1" href="/f-a-q">Reservations</a>
                </div>
            
        </div>
        <div class=" bg-main h-screen bg-cover">
            <div class=" absolute right-0 top-1/2 pr-10">
                <h4 class=" text-5xl font-bold text-white text-right mb-2">TASTE <br>UNIQUE FOOD</h4>
                <span class="text-gray-300 text-2xl">Cooking delicious foods Peruvian</span><br>
                <div class="mt-4 text-right"><a class="px-4 py-2 bg-crema text-white font-semibold text-right rounded">Read More</a></div>
            </div>
        </div>
        <section class="pt-1">
            <div class="grid grid-cols-3 gap-1">
                <div class="card-zoom">
                    <div class="card-zoom-image bg-beetle3"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  text-white">
                        <p class=" text-center text-sm font-bold">MACHUPICCHU</p>
                        <h4 class="font-bold text-2xl text-center">OUR MENU</h4>
                        <p class=" text-center">View more</p>
                    </div>
                </div>
                <div class="card-zoom">
                    <div class="card-zoom-image bg-beetle2 "></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  text-white">
                        <p class=" text-center text-sm font-bold">CUSCO</p>
                        <h4 class="font-bold text-2xl text-center">OUR MENU</h4>
                        <p class="text-center">View more</p>
                    </div>
                </div>
                <div class="card-zoom">
                    <div class="card-zoom-image bg-beetle"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  text-white">
                        <h4 class="font-bold text-2xl text-center">SOCIAL RESPONSIBILITY</h4>
                    </div>
                </div>                     
            </div>
        </section>
        <section class="bg-banner py-28 container">
            <div class=" grid grid-cols-2 px-10">
                <div class=" text-center">
                    <img src="{{asset('images/chef.jpg')}}" class=" mx-auto">
                </div>
                <div class=" my-auto">
                    <h3 class=" text-3xl font-semibold mb-2">Some words about us</h3>
                    <span class=" tracking-wider text-gray-700">Cum doctus civibus efficiantur in imperdiet deterruisset</span>
                    <p class="leading-relaxed pt-6 pb-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p class="leading-relaxed pb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </section>
        <section class="bg-banner2 bg-fixed py-28 bg-cover">
            <div class="text-center py-8 px-8 bg-black2 w-1/3 mx-auto shadow">
                <p class="font-semibold text-5xl text-white mb-2">Celebrate</p>
                <p class="text-white tracking-wider text-lg mb-4">a Special Event with us!</p>
                <p class="text-gray-300 leading-relaxed mb-4" >Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <div class="mb-4 mt-8"><a class="px-4 py-2 bg-crema text-white font-semibold text-right rounded">Contact us</a></div>
            </div>
        </section>

        <section class="pt-20">
            <div class="grid grid-cols-2 mt-5">
                <div class="">
                    <img src="{{asset('images/chef2.png')}}" class=" w-1/2 h-auto object-cover mx-auto">
                </div>
                <div>hi</div>
            </div>
        </section>
        
        <footer class="bg-black2 py-12 px-16">
            <div class="grid grid-cols-4 gap-2 container">
                <div class="flex text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <div>
                        <h4 class="font-bold mb-3 tracking-wide ">Address</h4>
                        <p class="text-sm tracking-wider text-gray-400">Av. Pachacuteq s/n<br>
                        Esquina con Jiron Sinchi Roca</p>
                    </div>
                </div>
            
                <div class="flex text-white ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                    </svg>
                    <div>
                        <h4 class="font-bold mb-3 tracking-wide">Reservations</h4>
                        <p class="text-sm tracking-wider text-gray-400">+51-940450504<br>
                        reservations@Foores.com</p>
                    </div>
                </div>
            
                <div class="flex text-white ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    <div>
                        <h4 class="font-bold mb-3 tracking-wide">Opening Hours</h4>
                        <p class="text-sm tracking-wider text-gray-400">Lunes a Domingo<br>
                        de 11:00 a 22:00 horas</p>
                    </div>
                </div>
                <div>
                </div>
            </div>
            <hr class="border-gray-600 mt-8 mb-4">
            <p class="text-gray-500 text-center text-xs">© 2021 NEBULA - All rights reserved</p>
        </footer>
     </body>     
    

<script>
    document.getElementById("clos").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
            navToggle.item(i).classList.toggle("hidden");
        }
    };
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navbar").style['background-color'] = "#ffffff";
            document.getElementById("navbar").style['color'] = "#464646";
            document.getElementById("logo1").style['display'] = "none";
            document.getElementById("logo2").style['display'] = "block";
            document.getElementById("reser").style['background-color'] = "#262626";
            document.getElementById("reser").style['color'] = "#ffffff";
        } else {
            document.getElementById("navbar").style['background-color'] = "transparent";
            document.getElementById("navbar").style['color'] = "#ffffff";
            document.getElementById("logo2").style['display'] = "none";
            document.getElementById("logo1").style['display'] = "block";
        }
    }
</script>
     
</html>
