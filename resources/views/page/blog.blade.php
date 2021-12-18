@extends('default.app')
@section('content')
    <header class="bg-coverBlog h-screen bg-cover  bg-center relative lg:-mt-8">
        <div class="frame white"></div>
        <div class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
            <img src="{{asset('images/divider.svg')}}" class="mx-auto mb-4">
            <h1 class="text-center font-bold text-5xl text-gray-200 mb-2">Incontry Blog</h1>
            <p class=" text-center tracking-widest font-semibold text-gray-300 text-xl">Cooking delicious food</p>
        </div>
    </header>
    <section class=" py-20 md:px-20 px-5">
        <div class=" grid lg:grid-cols-2 grid-cols-1 gap-16 mb-20">
            @foreach ($posts as $item)
                <div class=" flex flex-col shadow-xl">
                    <a href=""><img src="{{asset($item['img'])}}" class=" object-cover h-72 w-full hover:opacity-60"></a>
                    <div class=" my-5 md:px-12 px-5">
                        <div class="text-sm text-gray-500 flex md:flex-row flex-col justify-between items-center mb-4">
                            <p class=" flex  gap-2 "><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                              </svg> {{$item['categoria']}} - <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                              </svg> {{$item['fecha']}}</p>
                            <p class="flex gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg> Admin
                            </p>
                        </div>
                        <hr class=" border-crema border-opacity-30 my-2">
                        <a href=""><h3 class=" text-xl font-bold text-gray-700 mb-2 hover:text-crema">{{$item['titulo']}}</h3></a>
                        <p class=" text-gray-600">{{substr($item['descripcion'],0,120)}}...</p>
                        <div class="mt-8 mb-3 text-center"><a href="" class=" px-4 py-2 bg-crema text-white font-semibold text-right rounded transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">Leer más</a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection