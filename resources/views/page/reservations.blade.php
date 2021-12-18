@extends('default.app')
@section('content')
    <header class="bg-coverBlog h-screen bg-cover  bg-center relative lg:-mt-8">
        <div class="frame white"></div>
        <div class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
            <img src="{{asset('images/divider.svg')}}" class="mx-auto mb-4">
            <h1 class="text-center font-bold text-5xl text-gray-200 mb-2">{{__('message.home_subtitle_11')}}</h1>
            <p class=" text-center tracking-widest font-semibold text-gray-300 text-xl">{{__('message.home_subtitle_12')}} +51 990 229 181</p>
        </div>
        
    </header>
    <section class="pt-20 bg-banner">
        <div class=" md:hidden text-center mb-10 mx-5">
            <h3 class="text-4xl font-medium mb-1">{{__('message.home_subtitle_11')}}</h3>
            <p class="tracking-wider text-gray-700 text-lg mb-1">{{__('message.home_subtitle_12')}} +51 990 229 181</p>
        </div>
        <div class=" flex md:flex-row flex-col mt-5 md:gap-20 gap-0">
            <div class="md:w-2/5 md:h-4/5 w-full h-auto my-auto mx-auto">
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