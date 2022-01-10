@extends('default.app')
@section('content')
    <header class="bg-coverShop h-screen bg-cover  bg-center  bg-center relative lg:-mt-8">
        <div class="frame white"></div>
        <div class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
            <img src="{{asset('images/divider.svg')}}" class="mx-auto mb-4">
            <h1 class="text-center font-bold text-5xl text-gray-200 mb-2">{{__('message.shop_title')}}</h1>
        </div>
    </header>
    <section class=" pt-20 py-8 px-10">
        <div class=" grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-3">
            @foreach ($productos as $item)
                @if($item->stock>0)
                    <div class="relative mb-12 shadow-xl">
                        <img src="https://admin.incontrimachupicchu.com/{{$item['imagen']}}" class="p-1 relative mx-auto h-auto w-auto object-cover hover:opacity-70">
                        @if ($item['descuento'])
                            <div class="absolute top-0 left-0 px-2 m-2 bg-yellow-600">
                                <span class="text-white font-medium tracking-wide text-sm">- {{$item['descuento']}}%</span>
                            </div>
                        @endif
                        <div class="">
                            @if($item->producto_categoria)
                            <div class="flex justify-center gap-2 items-center px-4 py-1 bg-crema">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                                @php
                                    $cat=" ";
                                    $cat_ingles=" ";
                                    foreach ($item->producto_categoria as $categoria){
                                        $cat.=$categoria->categoria->nombre." • ";
                                        $cat_ingles.=$categoria->categoria->nombre_ingles." • ";
                                    }
                                @endphp  
                                <p class="text-white">
                                    @if(App::getLocale()=="es")
                                        {{$cat}}
                                    @else
                                        {{$cat_ingles}}
                                    @endif
                                </p>
                            </div>
                            @endif
                            <a href="{{route('shop').'/'.$item['url']}}" >
                                <h3 class=" text-center mt-1 font-semibold text-lg text-gray-600 px-4">
                                    @if(App::getLocale()=="es")
                                        {{$item['nombre']}}
                                    @else
                                        {{$item['nombre_ingles']}}
                                    @endif
                                </h3>
                            </a>
                            @php
                                if($item['descuento']){
                                    $precio_act=$item['precio']-$item['descuento']/100*$item['precio'];
                                }
                            @endphp 
                            @if($item['descuento'])
                                <p class=" text-center text-crema font-medium mb-4 px-4"><span class="text-sm text-gray-400 line-through">S/. {{$item['precio']}}</span> S/.{{$precio_act}}</p>
                            @else
                                <p class=" text-center text-crema font-medium mb-4 px-4">S/. {{$item['precio']}}</p>
                            @endif 
                            <div class="flex justify-center">
                                <button class="mx-5 mb-4 btn-secondary text-xs py-1 "><a href="{{route('shop').'/'.$item['url']}}">{{__('message.button_v')}}</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection