@extends('default.app')
@section('content')
    <header class="bg-coverMenu h-screen bg-cover  bg-center relative lg:-mt-8">
        <div class="frame white"></div>
        <div class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
            <img src="{{asset('images/divider.svg')}}" class="mx-auto mb-4 z-10">
            <h1 class="text-center font-bold text-5xl text-gray-200 mb-2">{{__('message.mapi_title_1')}}</h1>
            <p class=" text-center tracking-widest font-semibold text-gray-300 text-xl">{{__('message.mapi_title_2')}}</p>
        </div>
    </header>
    <section>
        <div class="grid md:grid-cols-5 grid-cols-1 lg:px-20 md:px-10 px-20 gap-5 md:py-20 py-16">
            @foreach ($menu_categoria as $item)
                @if(App::getLocale()=="es")
                    <a href="{{route('menuMapi')}}#{{$item->nombre}}"><button class="btn-secondary w-full h-full text-center mx-auto">{{$item->nombre}}</button></a>
                @else
                    <a href="{{route('menuMapi')}}#{{$item->nombre_ingles}}"><button class="btn-secondary w-full h-full text-center mx-auto">{{$item->nombre_ingles}}</button></a>
                @endif
            @endforeach
        </div>
    </section>
    <section class=" pb-20">
        @foreach ($menu_categoria as $item)
            @if(App::getLocale()=="es")
                <div class="grid md:grid-cols-2 grid-cols-1 mb-1" id="{{$item->nombre}}">
                    <div style="background-image:url('{{$item->imagen}}')" class="bg-cover bg-center h-64 w-full md:h-auto md:w-auto">
                    </div>
                    <div class="my-10">
                        <h2 class="text-center text-2xl font-semibold text-gray-800 my-5">{{$item->nombre}}</h2>
                        <img src="{{asset('images/divider_2.svg')}}" class="mx-auto mb-4 z-10">
                        <div class=" grid lg:grid-cols-2 grid-col-1 gap-5">
                            @foreach ($item->menu as $menu)
                                <div class="mb-5   md:mx-2 mx-10 px-5 py-3 hover:shadow border-dotted border-b-2 border-gray-200">
                                    <p class="text-center font-medium text-lg uppercase text-gray-700">{{$menu['nombre']}}<p>
                                    <p class="text-center text-gray-600 my-1 text-sm">{{$menu['descripcion']}}<p>
                                </div>
                            @endforeach
                        </div>
                    </div> 
                </div> 
            @else
                <div class="grid md:grid-cols-2 grid-cols-1 mb-1" id="{{$item->nombre_ingles}}">
                    <div style="background-image:url('{{$item->imagen}}')" class="bg-cover bg-center h-64 w-full md:h-auto md:w-auto">
                    </div>
                    <div class="my-10">
                        <h2 class="text-center text-2xl font-semibold text-gray-800 my-5">{{$item->nombre_ingles}}</h2>
                        <img src="{{asset('images/divider_2.svg')}}" class="mx-auto mb-4 z-10">
                        <div class=" grid lg:grid-cols-2 grid-col-1 gap-5">
                            @foreach ($item->menu as $menu)
                                <div class="mb-5   md:mx-2 mx-10 px-5 py-3 hover:shadow border-dotted border-b-2 border-gray-200">
                                    <p class="text-center font-medium text-lg uppercase text-gray-700">{{$menu['nombre_ingles']}}<p>
                                    <p class="text-center text-gray-600 my-1 text-sm">{{$menu['descripcion_ingles']}}<p>
                                </div>
                            @endforeach
                        </div>
                    </div> 
                </div> 
            @endif
        @endforeach 
    </section>
@endsection