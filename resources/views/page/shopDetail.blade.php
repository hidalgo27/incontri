@extends('default.app')
@section('content')
    <header class="bg-coverShop h-screen bg-cover  bg-center  bg-center relative lg:-mt-8">
        <div class="frame white"></div>
        <div class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
            <img src="{{asset('images/divider.svg')}}" class="mx-auto mb-4">
            <h1 class="text-center font-bold text-5xl text-gray-200 mb-2">{{__('message.shop_title')}}</h1>
            <p class=" text-center tracking-widest font-semibold text-gray-300 text-xl">
                @if(App::getLocale()=="es")
                    • {{$producto->nombre}} •
                @else
                    • {{$producto->nombre_ingles}} •
                @endif
            </p>
        </div>
    </header>
    <section class="py-20 px-12">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
            <img src="{{$producto->imagen}}">
            <div class="my-auto">
                @if($producto->producto_categoria)
                <div class="flex gap-2 items-center px-4 py-4 bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    @php
                        $cat=" ";
                        $cat_ingles=" ";
                        foreach ($producto->producto_categoria as $categoria){
                            $cat.=$categoria->categoria->nombre." • ";
                            $cat_ingles.=$categoria->categoria->nombre_ingles." • ";
                        }
                    @endphp  
                    <p class="text-gray-600">
                        <span class="text-sm text-gray-600">{{__('message.shop_p1')}}:</span> 
                        @if(App::getLocale()=="es")
                            {{$cat}}
                        @else
                            {{$cat_ingles}}
                        @endif
                    </p>
                </div>
                @endif
                <h2 class="text-3xl font-bold mt-8 mb-5">
                    @if(App::getLocale()=="es")
                        {{$producto->nombre}}
                    @else
                        {{$producto->nombre_ingles}}
                    @endif
                </h2>
                <p class="text-gray-600 my-5">
                    @if(App::getLocale()=="es")
                        {{$producto->descripcion}}
                    @else
                        {{$producto->descripcion_ingles}}
                    @endif
                </p>
                @if($cart_product)
                    <div class="grid grid-cols-2 mt-10">
                        <div class="my-auto">
                            <p class="text-gray-700 font-medium text-sm">{{__('message.shop_p2')}}:</p>
                        </div>
                        
                        <div class=" my-auto lg:w-1/2 w-full">
                            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                <button data-action="decrement" class=" bg-white border border-gray-300 text-gray-600 hover:text-crema h-full w-20 rounded-l cursor-pointer outline-none">
                                    <span class="m-auto text-2xl font-medium">−</span>
                                </button>
                                <input type="number" max="{{$producto->stock}}"  id="cantidad"  class="outline-none focus:outline-none text-center w-full bg-white border border-gray-300  font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="cantidad" value="{{$cart_product['cantidad']}}"/>
                                <button data-action="increment" class="bg-white border border-gray-300 text-gray-600 hover:text-crema  h-full w-20 rounded-r cursor-pointer">
                                    <span class="m-auto text-2xl font-medium">+</span>
                                </button>
                            </div>
                        </div>
                    
                    </div>
                    <div class="grid grid-cols-2 mt-10">
                        @php
                            if($producto['descuento']){
                                $precio_act=$producto['precio']-$producto['descuento']/100*$producto['precio'];
                            }
                        @endphp 
                        @if($producto->descuento)
                            <div class="my-auto">
                                <span class=" px-2 py-1 bg-yellow-600 text-white font-medium tracking-wide text-xs">- {{$producto['descuento']}}%</span>
                                <p class=" text-gray-400 line-through mt-2 ">S/. {{$producto->precio}}</p>
                                <p class="font-medium text-2xl text-crema">S/. {{$precio_act}}</p>
                            </div>
                        @else
                            <div class="my-auto">
                                <p class="font-medium text-2xl text-crema">S/. {{$producto->precio}}</p>
                            </div>
                        @endif    

                        <div class="my-auto lg:w-1/2 w-full">
                            <button class="update-to-cart btn-primary text-sm md:text-base text-center" type="button" 
                                data-id="{{$producto->id}}" data-stock="{{$producto->stock}}">{{__('message.button_add')}}
                            </button>
                        </div>
                    </div>  
                @else
                    <div class="grid grid-cols-2 mt-10">
                        <div class="my-auto">
                            <p class="text-gray-700 font-medium text-sm">{{__('message.shop_p2')}}:</p>
                        </div>
                
                        <div class=" my-auto lg:w-1/2 w-full">
                            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                <button data-action="decrement" class=" bg-white border border-gray-300 text-gray-600 hover:text-crema h-full w-20 rounded-l cursor-pointer outline-none">
                                    <span class="m-auto text-2xl font-medium">−</span>
                                </button>
                                <input type="number" max="{{$producto->stock}}"  id="cantidad"  class="outline-none focus:outline-none text-center w-full bg-white border border-gray-300  font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="cantidad" value="0"/>
                                <button data-action="increment" class="bg-white border border-gray-300 text-gray-600 hover:text-crema  h-full w-20 rounded-r cursor-pointer">
                                    <span class="m-auto text-2xl font-medium">+</span>
                                </button>
                            </div>
                        </div>
                    
                    </div>
                    <div class="grid grid-cols-2 mt-10">
                        @php
                            if($producto['descuento']){
                                $precio_act=$producto['precio']-$producto['descuento']/100*$producto['precio'];
                            }
                        @endphp 
                        @if($producto->descuento)
                            <div class="my-auto ">
                                <span class="px-2 py-1 bg-yellow-600 text-white font-medium tracking-wide text-xs">- {{$producto['descuento']}}%</span>
                                <p class=" text-gray-400 line-through mt-2">S/. {{$producto->precio}}</p>
                                <p class="font-medium text-2xl text-crema">S/. {{$precio_act}}</p>
                            </div>
                        @else
                            <div class="my-auto ">
                                <p class="font-medium text-2xl text-crema">S/. {{$producto->precio}}</p>
                            </div>
                        @endif   
                        <div class="md:my-auto my-5 lg:w-1/2 w-full">
                            <button class="add-to-cart btn-primary text-sm md:text-base text-center" type="button" data-id="{{$producto->id}}" data-name="{{$producto->nombre}}" data-name_ingles="{{$producto->nombre_ingles}}" data-price="{{$producto->precio}}"  data-descuento="{{$producto->descuento}}" data-imagen="{{$producto->imagen}}" data-url="{{$producto->url}}">
                                    {{__('message.button_add')}}
                            </button>
                        </div>
                    </div>  
                @endif
            </div>
        </div> 
    </section>
@endsection
