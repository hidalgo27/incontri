@extends('default.app')
@section('content')
    <header class="relative flex flex-col justify-between h-screen overflow-hidden">
        <div class="relative items-start grid grid-cols-3 justify-between z-30">
{{--            <div></div>--}}
{{--            <div class="p-3">--}}
{{--                <a href="/"><img src="<?php echo e(asset('images/logo-apu.png')); ?>" alt="" class="w-60 mx-auto"></a>--}}
{{--            </div>--}}
{{--            <div class="flex justify-end p-8 invisible sm:visible">--}}
{{--                <a href="https://web.facebook.com/cicapuantasaqa" target="_blank" class="mx-2">--}}
{{--                    <i data-feather="facebook" class="text-gray-50" stroke-width="1"></i>--}}
{{--                </a>--}}
{{--                <a href="https://twitter.com/apuantasaqa" target="_blank" class="mx-2">--}}
{{--                    <i data-feather="twitter" class="text-gray-50" stroke-width="1"></i>--}}
{{--                </a>--}}
{{--                <a href="https://www.youtube.com/channel/UCvY1nlgzRfRgkB9EHUYCRyw" target="_blank" class="mx-2">--}}
{{--                    <i data-feather="youtube" class="text-gray-50" stroke-width="1"></i>--}}
{{--                </a>--}}
{{--                <a href="https://www.instagram.com/apuantasaqa/" target="_blank" class="mx-2">--}}
{{--                    <i data-feather="instagram" class="text-gray-50" stroke-width="1"></i>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
        <div class="relative mt-52  grid grid-cols-1 gap-6 place-items-center text-center justify-center text-white z-30"><a href="https://web.facebook.com/cicapuantasaqa" target="_blank" class="mx-2">
                <div class="flex justify-end p-4 invisible sm:visible gap-2">
{{--                    <a href="https://web.facebook.com/cicapuantasaqa" target="_blank" class="mx-2">--}}
{{--                        <i data-feather="facebook" class="text-gray-50" stroke-width="1"></i>--}}
{{--                    </a>--}}
{{--                    <a href="https://twitter.com/apuantasaqa" target="_blank" class="mx-2">--}}
{{--                        <i data-feather="twitter" class="text-gray-50" stroke-width="1"></i>--}}
{{--                    </a>--}}
{{--                    <a href="https://www.youtube.com/channel/UCvY1nlgzRfRgkB9EHUYCRyw" target="_blank" class="mx-2">--}}
{{--                        <i data-feather="youtube" class="text-gray-50" stroke-width="1"></i>--}}
{{--                    </a>--}}
{{--                    <a href="https://www.instagram.com/apuantasaqa/" target="_blank" class="mx-2">--}}
{{--                        <i data-feather="instagram" class="text-gray-50" stroke-width="1"></i>--}}
{{--                    </a>--}}
                    <a href="https://web.facebook.com/incontridelpuebloviejo/?_rdc=1&_rdr" target="_blank" class="bg-white rounded-lg h-8 w-8 transform hover:scale-125 transition duration-500 ease-in-out">

                            <img src="{{asset('images/facebook.png')}}" class="h-8 w-8">

                    </a>
                    <a href="https://www.tripadvisor.com.pe/Restaurant_Review-g304036-d2460261-Reviews-Incontri_del_pueblo_Viejo-Aguas_Calientes_Machu_Picchu_Sacred_Valley_Cusco_Region.html" target="_blank"
                       class="transform hover:scale-125 transition duration-500 ease-in-out">
                        <img src="{{asset('images/trip.png')}}" class="h-8 w-8 ">
                    </a>
                </div>
            <div>
                <h1 class="text-4xl font-cinzel text-gray-50 sm:text-6xl">{{__('message.home_title_1')}}</h1>
                <h2 class="text-2xl font-cinzel text-gray-50 sm:text-2xl">{{__('message.home_title_3')}}</h2>

{{--                <h4 class=" md:text-5xl text-3xl font-semibold text-center mb-4 text-white text-opacity-80">{{__('message.home_title_1')}}</h4>--}}
{{--                <p class="text-white text-opacity-60 font-medium md:text-xl text-lg text-center">{{__('message.home_title_3')}}</p><br>--}}
{{--                <div class="mt-4 text-center"><a href="{{route('menuMapi')}}"><button class="btn-primary">{{__('message.button_menu')}}</button></a></div>--}}

            </div>
            <div>
                <a class="venobox" data-gall="myGallery" data-autoplay="true" data-maxwidth="1000px" data-vbtype="video" href="https://youtu.be/teT93b-G9YI">
                    <i data-feather="play-circle" class="text-gray-50 mx-auto" stroke-width="1" width="70" height="70"></i>
                </a>
                <h3 class="font-lusitana font-light mt-2 text-gray-50">{{__('message.button_menu')}}</h3>
                {{--                <a href="#"  class="px-12 py-3 text-xs font-light tracking-wider border border-gray-300 hover:bg-gray-200 hover:bg-opacity-5 transition duration-500 text-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">Explorar</a>--}}
            </div>
        </div>
        <div class="relative z-30 p-5 flex justify-center">
            <a href="#" class="text-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
            {{--            <source src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4" type="video/mp4" />Your browser does not support the video tag.--}}
            <source src="{{asset('media/intro.mp4')}}" type="video/mp4" />Your browser does not support the video tag.
            {{--            <source src="http://apuantasaqa.com/media/intro.mp4" type="video/mp4" />--}}
        </video>
        {{--        <div class="vimeo-wrapper absolute z-10 w-auto min-w-full min-h-full max-w-none">--}}
        {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"--}}
        {{--                    frameborder="0"  class="absolute z-10 w-auto min-w-full min-h-full max-w-none"></iframe>--}}
        {{--        </div>--}}
        <div class="absolute z-10 w-auto min-w-full min-h-full bg-gray-900 max-w-none opacity-50">

        </div>
        <div class="bg-footer-texture bg-repeat-x absolute h-6 bg-12 bottom-0 w-full z-30"></div>

    </header>

{{--    <div class="carousel relative shadow-2xl bg-white lg:-mt-8">--}}
{{--        <div class="carousel-inner relative overflow-hidden w-full lg:pt-8">--}}
{{--        <!--Slide 1-->--}}
{{--            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">--}}
{{--            <div class="carousel-item absolute opacity-0">--}}
{{--                <div class="block bg-main h-screen bg-cover bg-center">--}}
{{--                    <div id="slider1" class=" absolute md:top-2/3 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">--}}
{{--                        <h4 class=" md:text-5xl text-3xl font-semibold text-center mb-4 text-white text-opacity-80">{{__('message.home_title_1')}}</h4>--}}
{{--                        <p class="text-white text-opacity-60 font-medium md:text-xl text-lg text-center">{{__('message.home_title_3')}}</p><br>--}}
{{--                        <div class="mt-4 text-center"><a href="{{route('menuMapi')}}"><button class="btn-primary">{{__('message.button_menu')}}</button></a></div>--}}
{{--                    </div>--}}
{{--                    <div class="h-20 w-20 bg-white absolute bottom-0 left-0">--}}
{{--                    <img src="{{asset('images/TC_LL.svg')}}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!--Slide 2-->--}}
{{--            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">--}}
{{--            <div class="carousel-item absolute opacity-0" >--}}
{{--                <div class="block bg-main2 h-screen bg-cover bg-center">--}}
{{--                        <div id="slider2" class=" absolute left-0 md:top-1/2 top-1/3 md:pl-20 pl-5 hidden">--}}
{{--                            <h4 class=" md:text-5xl text-3xl font-semibold text-white text-left mb-4">{{__('message.home_title_4')}} <br>{{__('message.home_title_5')}}<br>{{__('message.home_title_6')}}</h4>--}}
{{--                            <p class="text-gray-300 md:text-xl text-lg md:text-left text-left font-medium">{{__('message.home_title_7')}}</p><br>--}}
{{--                            <div class=" text-left"><a href="{{route('reservations')}}"><button class="btn-primary">{{__('message.button_reserve')}}</button></a></div>--}}
{{--                        </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!--Slide 3-->--}}
{{--            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">--}}
{{--            <div class="carousel-item absolute opacity-0" >--}}
{{--                <div class="block bg-main3 h-screen bg-cover bg-center">--}}
{{--                <div id="slider3" class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 md:top-2/3 top-1/2 hidden">--}}
{{--                        <h4 class=" md:text-5xl text-3xl font-semibold text-white text-center mb-2">{{__('message.home_title_8')}}</h4>--}}
{{--                        <p class="text-gray-300 md:text-xl text-lg  text-center font-medium">{{__('message.home_title_9')}}</p><br>--}}
{{--                        <div class="mt-4 text-center"><a  href="{{route('about')}}"><button class="btn-primary">{{__('message.button_ver')}}</button></a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Add additional indicators for each slide-->--}}
{{--            <ol class="carousel-indicators">--}}
{{--                <li class="inline-block mr-3">--}}
{{--                    <label  for="carousel-1" onclick="ocultar('slider1');"  class="carousel-bullet cursor-pointer block text-5xl text-white hover:text-crema">•</label>--}}
{{--                </li>--}}
{{--                <li class="inline-block mr-3">--}}
{{--                    <label for="carousel-2" onclick="ocultar('slider2');" class="carousel-bullet cursor-pointer block text-5xl text-white hover:text-crema">•</label>--}}
{{--                </li>--}}
{{--                <li class="inline-block mr-3">--}}
{{--                    <label  for="carousel-3" onclick="ocultar('slider3');"  class="carousel-bullet cursor-pointer block text-5xl text-white hover:text-crema ">•</label>--}}
{{--                </li>--}}
{{--            </ol>--}}

{{--        </div>--}}
{{--    </div>--}}
    <section class="pt-1">
        <div class="grid md:grid-cols-3 grid-cols-1 gap-1">
            <div class="card-zoom">
                <a href="{{route('menuMapi')}}">
                    <div class="card-zoom-image bg-beetle3"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  text-white">
                        <p class=" text-center text-sm font-bold">MACHUPICCHU</p>
                        <h4 class="font-bold text-2xl text-center">{{__('message.home_subtitle_1')}}</h4>
                        <a href="{{route('menuMapi')}}"><p class=" text-center">{{__('message.button_ver')}}</p></a>
                    </div>
                </a>
            </div>
            <div class="card-zoom">
                <a href="{{route('menuCarpe')}}">
                    <div class="card-zoom-image bg-beetle2 "></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  text-white">
                        <p class=" text-center text-sm font-bold">CARPEDIEN</p>
                        <h4 class="font-bold text-2xl text-center">{{__('message.home_subtitle_1')}}</h4>
                        <a href="{{route('menuCarpe')}}"><p class="text-center">{{__('message.button_ver')}}</p></a>
                    </div>
                </a>
            </div>
            <div class="card-zoom">
                <div class="card-zoom-image bg-beetle"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  text-white">
                    <h4 class="font-bold text-2xl text-center">{{__('message.home_subtitle_2')}}</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-banner py-20 container">
        <div class=" grid md:grid-cols-2 grid-cols-1 px-10 gap-5">
            <div class=" text-center">
                <img src="{{asset('images/chef.jpg')}}" class=" mx-auto shadow-lg">
            </div>
            <div class=" my-auto">
                <div class="bg-gray-200 w-28 mb-5">
                    <div class="bg-crema w-1/2 h-0.5"></div>
                </div>
                <h3 class=" text-4xl font-medium mb-1">{{__('message.home_subtitle_3')}}</h3>
                <span class=" font-medium text-gray-700 text-xl ">{{__('message.home_subtitle_4')}}</span>
                <p class=" pt-6 pb-2 text-justify">{{__('message.home_p1')}}</p>
                <p class="pb-4  text-justify">{{__('message.home_p2')}}</p>
                <div class="mt-4"><a href="{{route('about')}}"><button  class="btn-secondary">{{__('message.button_leer')}}</button></a></div>
            </div>
        </div>
    </section>
    <section class=" bg-gray-50 pt-20 pb-24 md:px-10 px-0">
        <div class="bg-gray-200 w-28 mb-5 mx-auto">
            <div class="bg-crema w-1/2 h-0.5 mx-auto"></div>
        </div>
        <h3 class="text-4xl font-medium mb-2 text-center mb-10">{{__('message.home_subtitle_5')}}</h3>
        <div class="bg-bannerMenu bg-cover bg-center md:px-20 px-5 py-20 rounded mb-10">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-20">
                <div class="my-auto">
                    <p class="text-white font-semibold upcase">{{__('message.home_p17')}}</p>
                    <h5 class="text-white text-4xl font-bold tracking-wide my-1">MI LOMO SALTADO</h5>
                    <p class="text-gray-300 tracking-wide text-sm w-1/2">{{__('message.mapi_p16')}}</p>
                    <div class="mt-8 mb-3"><a href="{{route('menuMapi')}}#platos-de-fondo" class=" px-4 py-2 bg-crema text-white font-semibold rounded transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">{{__('message.button_ver')}}</a></div>
                </div>
            </div>
        </div>
        <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-1 gap-8 pt-8 mx-5 md:mx-0">
            @foreach($menu_categoria as $menu)
                @if(App::getLocale()=="es")
                    <a href="{{route('menuMapi')}}#{{$menu['nombre']}}" >
                        <div class="flex items-center gap-2 shadow-lg transform hover:-translate-x-2 transition duration-500 ease-in-out">
                            <img src="{{asset($menu['imagen'])}}" class=" h-20 w-20 object-cover">
                            <h4 class="font-medium text-black2 py-3 px-3 text-center mx-auto hover:text-crema text-sm">{{$menu['nombre']}}</h4>
                        </div>
                    </a>
                @else
                    <a href="{{route('menuMapi')}}#{{$menu['nombre_ingles']}}" >
                        <div class="flex items-center gap-2 shadow-lg transform hover:-translate-x-2 transition duration-500 ease-in-out">
                            <img src="{{asset($menu['imagen'])}}" class=" h-20 w-20 object-cover">
                            <h4 class="font-medium text-black2 py-3 px-3 text-center mx-auto hover:text-crema text-sm">{{$menu['nombre_ingles']}}</h4>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </section>
    <section class="bg-banner2 bg-fixed bg-center py-20 bg-cover px-10 md:px-0">
        <div class="text-center py-8 px-8 bg-black2 lg:w-1/3 md:w-1/2 mx-auto shadow">
            <p class="font-semibold text-5xl text-white mb-2">{{__('message.home_ora')}}</p>
            <p class="text-white tracking-wider text-lg mb-4">{{__('message.home_ora2')}}</p>
            <p class="text-gray-300 leading-relaxed mb-4" >
                {{__('message.home_ora3')}}
            </p>
            <div class="mb-4 mt-8"><a href="{{route('home')}}#contactar"><button class="btn-primary">{{__('message.home_ora4')}}</button></a></div>
        </div>
    </section>

    <section class="pt-20 bg-banner" id="reservation">
        <div class=" md:hidden text-center mb-10">
            <h3 class="text-4xl font-medium mb-1">{{__('message.home_subtitle_11')}}</h3>
            <p class="tracking-wider text-gray-700 text-lg mb-1">{{__('message.home_subtitle_12')}} +51 990 229 181</p>
        </div>
        <div class=" flex md:flex-row flex-col mt-5 md:gap-20 gap-0">
            <div class="md:w-2/5 md:h-4/5 w-full h-auto mx-auto self-end">
                <img src="{{asset('images/chef2.png')}}" class=" w-4/5 object-cover mx-auto">
            </div>
            <div class="md:w-3/5 w-full my-auto mx-auto">
                <div class=" md:block hidden mb-5">
                    <h3 class="text-4xl font-semibold">{{__('message.home_subtitle_11')}}</h3>
                    <p class="tracking-wider text-gray-700 text-lg mb-1">{{__('message.home_subtitle_12')}} +51 990 229 181</p>
                </div>
                @livewire('reservations')
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        // $(document).ready(function(){
        //     $('.venobox').venobox();
        // });
        new VenoBox({
            selctor: '.venobox'
        });
    </script>
@endpush
