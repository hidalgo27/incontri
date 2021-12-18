@extends('default.app')
@section('content')
    <header class="bg-black2 h-28 relative lg:-mt-8 hidden lg:block">
    </header>
    @if(session('status'))
        <div class="bg-green-50 text-green-900 border-t-4 border-green-500 shadow-lg lg:mx-36 md:mx-10 px-3 py-2 z-50 mt-20">
            <div class="flex items-center py-2">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
                </div>
                <div>
                    <p class=" font-medium">{{__('message.aux_2')}}</p>
                    <p class="text-sm">{{__('message.aux_3')}}</p>
                </div>
            </div>
        </div>
    @endif
    <section class=" bg-banner lg:px-36 md:px-10 px-5 pt-10 pb-20">
        <form action="{{route('order')}}" method="post" >
            @csrf
            <div class=" flex flex-col md:flex-row gap-10">   
                <div class=" md:w-2/3">
                    <div class=" shadow-xl lg:ml-5 rounded-lg">
                        <div class=" bg-crema py-4">
                            <h3 class=" text-white font-semibold text-center text-xl">{{__('message.check_p1')}}</h3>
                        </div>
                        <div class=" px-8">
                            <div class=" mb-5 mt-8">
                                <label class="block mb-1 text-sm text-gray-700 font-semibold" for="name">
                                    {{__('message.home_p8')}}
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm  text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                    id="name"
                                    name="name"
                                    type="text"
                                    placeholder="First and Last Name"
                                    required
                                />
                            </div>
                            <div class="mb-5">
                                <div class=" grid md:grid-cols-2 grid-cols-1 gap-5">
                                    <div>
                                        <label class="block mb-1 text-sm text-gray-700 font-semibold" for="email">
                                            {{__('message.home_p9')}}
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm  text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                            id="email"
                                            name="email"
                                            type="email"
                                            placeholder="Email Address"
                                            required
                                        />
                                    </div>
                                    <div>
                                        <label class="block mb-1 text-sm text-gray-700 font-semibold" for="phone">
                                            {{__('message.home_p10')}}
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm  text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                            id="phone"
                                            name="phone"
                                            type="text"
                                            placeholder="Phone"
                                            required
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class=" mb-5">
                                <label class="block mb-1 text-sm text-gray-700 font-semibold" for="direccion">
                                    {{__('message.check_p2')}}
                                </label>
                                <input
                                    class="mb-8 w-full px-3 py-2 text-sm  text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                    id="direccion"
                                    name="direccion"
                                    type="text"
                                    placeholder="Full Address"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" md:w-1/3">
                    <div class=" border border-dotted broder-gray-300 bg-white">
                        <div class=" bg-gray-100 py-5">
                            <h3 class=" text-center">{{__('message.check_title')}}</h3>
                        </div>
                        <div class=" my-4 mx-5">
                            @php
                                $total=0;
                            @endphp
                            @if($cart)
                                @foreach ($cart as $item)
                                    @if(($productos->find($item['id'])->stock-$item['cantidad'])>=0)
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-2 hover:text-red-600">
                                                <button class="delete-to-cart" type="button" data-id="{{$item['id']}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 font-bold text-gray-700 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                                @if(App::getLocale()=="es")
                                                    <p class=" text-sm text-gray-700 ">{{$item['name']}} x{{$item['cantidad']}}</p>
                                                @else
                                                    <p class=" text-sm text-gray-700 ">{{$item['name_ingles']}} x{{$item['cantidad']}}</p>
                                                @endif
                                                
                                            </div>
                                            <div>
                                                @php
                                                    if($item['descuento']){
                                                        $precio_act=$item['price']-$item['descuento']/100*$item['price'];
                                                    }
                                                @endphp 
                                                <p class=" text-sm text-gray-600">
                                                    @if($item['descuento'])
                                                        S/.{{$item['cantidad']*$precio_act}}
                                                    @else
                                                        S/.{{$item['cantidad']*$item['price']}}
                                                    @endif
                                                    @php
                                                        if($item['descuento']){
                                                            $total=$total+$item['cantidad']*$precio_act;
                                                        }else{
                                                            $total=$total+$item['cantidad']*$item['price'];
                                                        }
                                                    @endphp
                                                </p>
                                            </div>
                                        </div>
                                    @else
                                        <div class=" text-xs text-gray-400 my-1 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 font-bold text-gray-700 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            {{__('message.check_p3')}} 
                                            @if(App::getLocale()=="es") 
                                                {{$item['name']}}
                                            @else 
                                                {{$item['name_ingles']}} 
                                            @endif 
                                            {{__('message.check_p4')}}
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                            @if($total>0)
                                <div class=" flex justify-between my-8 text-red-600 font-semibold">
                                    <p>TOTAL</p>
                                    <p>S/. {{$total}}</p>
                                </div>
                                <button class=" btn-primary text-sm w-full text-center" type="submit">{{__('message.button_order')}}</button>
                            @else
                                <button class="btn-secondary text-sm w-full text-center"><a href="{{route('shop')}}">{{__('message.aux_1')}}</a></button>
                            @endif
                            <p class=" text-xs text-center py-3">{{__('message.home_subtitle_12')}} +51 990 229 181</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    
@endsection