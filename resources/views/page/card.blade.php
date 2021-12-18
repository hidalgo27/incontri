@extends('default.app')
@section('content')
    <header class="bg-coverBlog h-screen bg-cover bg-center relative lg:-mt-8">
        <div class="frame white"></div>
        <div class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
            <img src="{{asset('images/divider.svg')}}" class="mx-auto mb-4">
            <h1 class="text-center font-bold text-5xl text-gray-200 mb-2">{{__('message.order_title')}}</h1>
        </div>
        
    </header>
    <section class="py-20 lg:px-20 md:px-10 px-5">
        @php
         $total=0;   
        @endphp
        <div class="hidden md:block">
            <table calas="text-left border border-gray-200">
                <thead class="pb-5 border border-gray-200 bg-gray-100">
                <th class=" w-1/6 text-left px-5 py-5 font-semibold text-gray-800 text-sm"></th> 
                <th class=" w-3/12 text-left px-5 py-5 font-semibold text-gray-800 text-sm">{{__('message.order_th1')}}</th> 
                <th class=" w-2/12 text-right px-5 py-5 font-semibold text-gray-800 text-sm">{{__('message.order_th2')}}</th> 
                <th class=" w-3/12 text-left px-5 py-5 font-semibold text-gray-800 text-sm text-center">{{__('message.order_th3')}}</th> 
                <th class=" w-1/12 text-right px-5 py-5 font-semibold text-gray-800 text-sm">{{__('message.order_th4')}}</th> 
                <th class=" w-1/12 text-left px-5 py-5 font-semibold text-gray-800 text-sm"></th> 
                <thead>
                <tbody>
                    @foreach ($cart as $item)
                        @if($productos->find($item['id']) && $productos->find($item['id'])->stock >= $item['cantidad'] )
                        <tr class="border border-gray-200">
                            <td class="text-left px-5 py-2">
                                <img src={{$item['imagen']}} class=" h-24 w-auto object-cover">
                            </td>
                            <td class="text-left px-5 py-2">
                                @if(App::getLocale()=="es")
                                    <p>{{$item['name']}}</p>
                                @else
                                    <p>{{$item['name_ingles']}}</p>
                                @endif
                            </td>
                            @php
                                if($item['descuento']){
                                    $precio_act=$item['price']-$item['descuento']/100*$item['price'];
                                }
                            @endphp 
                            <td class="text-right px-5 py-2">
                                @if($item['descuento'])
                                    <p><span class="text-sm text-gray-400 line-through">S/.{{$item['price']}}</span><br>S/.{{$precio_act}}</p>
                                @else
                                    <p>S/. {{$item['price']}}</p>
                                @endif
                            </td>
                            <td class="mx-auto px-5 py-2 ">
                                <div class=" my-auto lg:w-1/2 w-full mx-auto">
                                    <div class="flex flex-row h-8 w-full rounded-lg relative bg-transparent mt-1">
                                        <button data-action="decrement" data-id="{{$item['id']}}" class="update-to-cart bg-white border border-gray-300 text-gray-600 hover:text-crema h-full w-20 rounded-l cursor-pointer outline-none">
                                            <span class="m-auto text-xl ">−</span>
                                        </button>
                                        <input type="number" max="{{$productos->find($item['id'])->stock}}" class="outline-none focus:outline-none text-center w-full bg-white border border-gray-300 hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="cantidad" id="cantidad" value="{{$item['cantidad']}}"/>
                                        <button data-action="increment" data-id="{{$item['id']}}" class="update-to-cart bg-white border border-gray-300 text-gray-600 hover:text-crema  h-full w-20 rounded-r cursor-pointer">
                                            <span class="m-auto text-xl ">+</span>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right px-5 py-2">
                                <p>
                                    @if($item['descuento'])
                                        S/. {{$item['cantidad']*$precio_act}}
                                    @else
                                        S/. {{$item['cantidad']*$item['price']}}
                                    @endif
                                </p>
                                @php
                                    if($item['descuento']){
                                        $total=$total+$item['cantidad']*$precio_act;
                                    }else{
                                        $total=$total+$item['cantidad']*$item['price'];
                                    }
                                @endphp
                            </td>
                            <td class="text-center px-5 py-2">
                                <button class="delete-to-cart" type="button" data-id="{{$item['id']}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto text-gray-500 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        @else
                            <tr class="border border-gray-200 opacity-50">
                                <td class="text-left px-5 py-2">
                                    <img src={{$item['imagen']}} class=" h-24 w-auto object-cover">
                                </td>
                                <td class="text-left px-5 py-2">
                                    @if(App::getLocale()=="es")
                                        <p>{{$item['name']}}</p>
                                    @else
                                        <p>{{$item['name_ingles']}}</p>
                                    @endif
                                </td>
                                @php
                                    if($item['descuento']){
                                        $precio_act=$item['price']-$item['descuento']/100*$item['price'];
                                    }
                                @endphp 
                                <td class="text-right px-5 py-2">
                                    @if($item['descuento'])
                                        <p><span class="text-sm text-gray-400 line-through">S/.{{$item['price']}}</span><br>S/.{{$precio_act}}</p>
                                    @else
                                        <p>S/.{{$item['price']}}</p>
                                    @endif
                                </td>
                                <td class="mx-auto px-5 py-2 ">
                                    <div class=" my-auto lg:w-1/2 w-full mx-auto">
                                        <div class="flex flex-row h-8 w-full rounded-lg relative bg-transparent mt-1">
                                            <button  class=" bg-white border border-gray-300 text-gray-600 hover:text-crema h-full w-20 rounded-l cursor-pointer outline-none">
                                                <span class="m-auto text-xl ">−</span>
                                            </button>
                                            <input type="number" max="0" class="outline-none focus:outline-none text-center w-full bg-white border border-gray-300 hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="cantidad" id="cantidad" value="0"/>
                                            <button class="bg-white border border-gray-300 text-gray-600 hover:text-crema  h-full w-20 rounded-r cursor-pointer">
                                                <span class="m-auto text-xl ">+</span>
                                            </button>
                                        </div>
                                        <p class="text-gray600 text-xs mt-1">{{__('message.order_p1')}}</p>
                                    </div>
                                </td>
                                <td class="text-right px-5 py-2">
                                    <p>
                                        0
                                    </p>
                                </td>
                                <td class="text-center px-5 py-2">
                                    <p >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </p>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="md:hidden">
            @foreach ($cart as $item)
                <div class="flex gap-5 items-center border-b border-dotted my-5 py-5 px-5">
                    <img src={{$item['imagen']}} class=" h-36 w-auto object-cover">
                    <div>
                        <p class="font-semibold text-center">
                            @if(App::getLocale()=="es")
                                {{$item['name']}}
                            @else
                                {{$item['name_ingles']}}
                            @endif
                        </p>
                        @php
                            if($item['descuento']){
                                $precio_act=$item['price']-$item['descuento']/100*$item['price'];
                            }
                        @endphp 
                        <p class="text-right text-crema font-medium">
                            @if($item['descuento'])
                                <span class="text-sm text-gray-400 line-through">S/.{{$item['price']}}</span> S/.{{$precio_act}}</p>
                            @else
                                S/. {{$item['price']}}
                            @endif
                        </p>
                        <p class="text-right font-medium my-2">
                            <span class="text-gray-700 font-medium">Subtotal: </span>
                            @if($item['descuento'])
                                S/. {{$item['cantidad']*$precio_act}}
                            @else
                                S/. {{$item['cantidad']*$item['price']}}
                            @endif
                        </p>
                        <div class=" text-right my-2">
                            <button class="delete-to-cart" type="button" data-id="{{$item['id']}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto text-gray-500 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </div>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-end mt-10">
           <div class="md:w-1/5 mx-5"> 
                <div class="flex justify-between text-red-600 font-semibold text-lg">
                    <p>TOTAL</p>
                    <p>S/. {{$total}}</p>
                </div>
                
                <a href="{{route('checkout')}}"><button class="w-full btn-primary mt-5 text-center">{{__('message.button_check2')}}</button></a>
            </div>
        </div>
    </section>
@endsection