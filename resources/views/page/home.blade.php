@extends('default.app')
@section('content')
    <div class="carousel relative shadow-2xl bg-white lg:-mt-8">
        <div class="carousel-inner relative overflow-hidden w-full lg:pt-8">
        <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0">
                <div class="block bg-main h-screen bg-cover bg-center">
                    <div id="slider1" class=" absolute md:top-2/3 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <h4 class=" md:text-5xl text-3xl font-semibold text-center mb-4 text-white text-opacity-80">{{__('message.home_title_1')}}</h4>
                        <p class="text-white text-opacity-60 font-medium md:text-xl text-lg text-center">{{__('message.home_title_3')}}</p><br>
                        <div class="mt-4 text-center"><a href="{{route('menuMapi')}}"><button class="btn-primary">{{__('message.button_menu')}}</button></a></div>
                    </div>
                    <div class="h-20 w-20 bg-white absolute bottom-0 left-0">
                    <img src="{{asset('images/TC_LL.svg')}}">
                    </div>
                </div>
            </div>
                
            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" >
                <div class="block bg-main2 h-screen bg-cover bg-center">
                        <div id="slider2" class=" absolute left-0 md:top-1/2 top-1/3 md:pl-20 pl-5 hidden">
                            <h4 class=" md:text-5xl text-3xl font-semibold text-white text-left mb-4">{{__('message.home_title_4')}} <br>{{__('message.home_title_5')}}<br>{{__('message.home_title_6')}}</h4>
                            <p class="text-gray-300 md:text-xl text-lg md:text-left text-left font-medium">{{__('message.home_title_7')}}</p><br>
                            <div class=" text-left"><a href="{{route('reservations')}}"><button class="btn-primary">{{__('message.button_reserve')}}</button></a></div>
                        </div>
                </div>
            </div>
            
            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" >
                <div class="block bg-main3 h-screen bg-cover bg-center">
                <div id="slider3" class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 md:top-2/3 top-1/2 hidden">
                        <h4 class=" md:text-5xl text-3xl font-semibold text-white text-center mb-2">{{__('message.home_title_8')}}</h4>
                        <p class="text-gray-300 md:text-xl text-lg  text-center font-medium">{{__('message.home_title_9')}}</p><br>
                        <div class="mt-4 text-center"><a  href="{{route('about')}}"><button class="btn-primary">{{__('message.button_ver')}}</button></a></div>
                    </div>
                </div>
            </div>
            
            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label  for="carousel-1" onclick="ocultar('slider1');"  class="carousel-bullet cursor-pointer block text-5xl text-white hover:text-crema">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" onclick="ocultar('slider2');" class="carousel-bullet cursor-pointer block text-5xl text-white hover:text-crema">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label  for="carousel-3" onclick="ocultar('slider3');"  class="carousel-bullet cursor-pointer block text-5xl text-white hover:text-crema ">•</label>
                </li>
            </ol>
            
        </div>
    </div>
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
<script>
    
</script>
@endpush