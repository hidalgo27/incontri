@extends('default.app')
@section('content')
    <header class="bg-coverAbout h-screen bg-cover bg-center relative lg:-mt-8">
        <div class="frame white"></div>
		<div class=" absolute top-2/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
			<img src="{{asset('images/divider.svg')}}" class="mx-auto mb-4">
            <h1 class="text-center font-bold text-5xl text-gray-200 mb-2">{{__('message.about_title_1')}}</h1>
            <p class=" text-center tracking-widest font-semibold text-gray-300 text-xl">{{__('message.about_title_2')}}</p>
        </div>
    </header>
    <section class=" bg-banner py-20">
		<div class="bg-gray-200 w-28 mb-5 mx-auto">
			<div class="bg-crema w-1/2 h-0.5 mx-auto"></div>
		</div>
        <div class=" lg:w-3/5 mx-auto text-center md:px-20 lg:px-0 px-3">
            <h2 class=" text-4xl font-semibold mb-2">{{__('message.about_title_3')}}</h2>
            <p class="mb-4 text-gray-600 text-xl tracking-tight">{{__('message.about_subtitle_1')}}</p>
            <p class=" text-gray-500 tracking-wide leading-2 mb-2">{{__('message.about_p1')}}</p>
            <p class=" text-gray-500 tracking-wide leading-2 mb-2">{{__('message.about_p2')}}</p>
        </div>
    </section>
    <section class=" bg-gray-100 py-20 px-10">
        <div class=" grid lg:grid-cols-2 grid-cols-1">
            <div class=" lg:grid grid-cols-2 grid-cols-1 gap-8 md:px-20 lg:px-0 mb-16 lg:mb-0">
                <div class=" grid grid-rows-2 gap-8">
                    <div class=" bg-white p-8 shadow-xl">
                        <img src="{{asset('images/how_1.svg')}}" class=" mx-auto w-24 mb-4">
                        <h4 class=" text-xl text-center font-semibold text-gray-800 mb-2">{{__('message.about_subtitle_3')}}</h4>
                        <p class=" text-gray-600 text-center">{{__('message.about_p4')}}</p>
                    </div>
                    <div class="bg-white p-8 shadow-xl">
                        <img src="{{asset('images/how_2.svg')}}" class=" mx-auto w-24">
                        <h4 class=" text-xl text-center font-semibold text-gray-800 mb-2">{{__('message.about_subtitle_5')}}</h4>
                        <p class=" text-gray-600 text-center">{{__('message.about_p6')}}</p>
                    </div>
                </div>
                <div class="bg-white p-8 shadow-xl my-auto">
                    <img src="{{asset('images/how_3.svg')}}" class=" mx-auto w-24">
                    <h4 class=" text-xl text-center font-semibold text-gray-800 mb-2">{{__('message.about_subtitle_4')}}</h4>
                        <p class=" text-gray-600 text-center">{{__('message.about_p5')}}</p>
                </div>
            </div>
            <div class=" lg:px-20 my-auto md:px-20 lg:px-0">
                <h3 class=" text-4xl font-semibold mb-4">{{__('message.about_title_4')}}</h3>
                <p class="mb-4 text-gray-600 text-xl tracking-tight">{{__('message.about_subtitle_2')}}</p>
                <p class=" text-gray-500 tracking-wide mb-4">{{__('message.about_p3')}}</p>
                <div class="mb-4 mt-8"><a href="{{route('reservations')}}"><button class="btn-primary">{{__('message.button_reserve')}}</button></a></div>
            </div>
        </div>
    </section>
    <section class="bg-banner3 pt-16 pb-28 bg-cover bg-fixed relative carousel">
				<div class="carousel-inner ">
				<!--Slide 1-->
					<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
					<div class="carousel-item absolute opacity-0">
						<div class="block">
							<div id="slider1" class=" left-0 top-1/2 ">
								<div class=" w-3/5 bg-green-700 mx-auto lg:p-10 p-5">
									<div class=" flex md:flex-row flex-col">
										<div class=" flex my-auto">
											<div class=" w-20 h-20"><img src="{{asset('images/tripadvisor.png')}}" class=" w-20 h-20 object-cover"></div>
											<div class="text-white px-4 my-auto">
												<p class=" text-sm">{{__('message.about_p10')}}</p>
												<P class=" text-xs">{{__('message.about_p11')}} 2021</P>
											</div>
										</div>
										<div class=" md:border-l border-t md:border-t-0 border-white md:my-auto my-4">
											<p class=" text-white md:mx-8 mx-2 md:my-auto my-2 text-sm">
												<span class="uppercase text-yellow-300">
													<a target="_blank" href="https://www.tripadvisor.com.pe/ShowUserReviews-g304036-d2460261-r819599322-Incontri_del_pueblo_Viejo-Aguas_Calientes_Machu_Picchu_Sacred_Valley_Cusco_Regio.html" class="hover:text-gray-400">{{__('message.about_subtitle_8')}}</a>
												</span>
												<br>
												{{__('message.about_p9')}}
												<a target="_blank" href="https://www.tripadvisor.com.pe/ShowUserReviews-g304036-d2460261-r819599322-Incontri_del_pueblo_Viejo-Aguas_Calientes_Machu_Picchu_Sacred_Valley_Cusco_Regio.html" class="hover:text-gray-400 text-yellow-300">{{__('message.button_v')}}</a></p>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
						
					<!--Slide 2-->
					<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
					<div class="carousel-item absolute opacity-0" >
						<div class="block ">
							<div id="slider2" class="  left-0 top-1/2 hidden ">
								<div class=" w-3/5 bg-green-700 mx-auto lg:p-10 p-5">
									<div class=" flex md:flex-row flex-col">
										<div class=" flex my-auto">
											<div class=" w-20 h-20"><img src="{{asset('images/tripadvisor.png')}}" class=" w-20 h-20 object-cover"></div>
											<div class="text-white px-4 my-auto">
												<p class=" text-sm">{{__('message.about_p12')}}</p>
												<P class=" text-xs">{{__('message.about_p11')}} 2020</P>
											</div>
										</div>
										<div class=" md:border-l border-t md:border-t-0 border-white md:my-auto my-4">
											<p class=" text-white md:mx-8 mx-2 md:my-auto my-2 text-sm">
												<span class="uppercase text-yellow-300">
													<a target="_blank" href="https://www.tripadvisor.com.pe/ShowUserReviews-g304036-d2460261-r748587714-Incontri_del_pueblo_Viejo-Aguas_Calientes_Machu_Picchu_Sacred_Valley_Cusco_Regio.html" class="hover:text-gray-400">{{__('message.about_subtitle_7')}}</a>
												</span>
												<br>
												{{__('message.about_p8')}}
												<a target="_blank" href="https://www.tripadvisor.com.pe/ShowUserReviews-g304036-d2460261-r748587714-Incontri_del_pueblo_Viejo-Aguas_Calientes_Machu_Picchu_Sacred_Valley_Cusco_Regio.html" class="hover:text-gray-400 text-yellow-300">{{__('message.button_v')}}</a></p>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
					
					<!--Slide 3-->
					<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
					<div class="carousel-item absolute opacity-0" >
						<div class="block ">
							<div id="slider3" class="  left-0 top-1/2 hidden">
								<div class=" w-3/5 bg-green-700 mx-auto lg:p-10 p-5 ">
									<div class=" flex md:flex-row flex-col">
										<div class=" flex my-auto">
											<div class=" w-20 h-20"><img src="{{asset('images/tripadvisor.png')}}" class=" w-20 h-20 object-cover"></div>
											<div class="text-white px-4 my-auto">
												<p class=" text-sm">{{__('message.about_p10')}}</p>
												<P class=" text-xs">{{__('message.about_p11')}} 2021</P>
											</div>
										</div>
										<div class=" md:border-l border-t md:border-t-0 border-white md:my-auto my-4">
											<p class=" text-white md:mx-8 mx-2 md:my-auto my-2 text-sm">
												<span class="uppercase text-yellow-300">
													<a href="https://www.tripadvisor.com.pe/ShowUserReviews-g304036-d2460261-r820382834-Incontri_del_pueblo_Viejo-Aguas_Calientes_Machu_Picchu_Sacred_Valley_Cusco_Regio.html" class="hover:text-gray-400" target="_blank">{{__('message.about_subtitle_6')}}</a>
												</span>
												<br>
												{{__('message.about_p7')}}
												<a href="https://www.tripadvisor.com.pe/ShowUserReviews-g304036-d2460261-r820382834-Incontri_del_pueblo_Viejo-Aguas_Calientes_Machu_Picchu_Sacred_Valley_Cusco_Regio.html" target="_blank" class="hover:text-gray-400 text-yellow-300">{{__('message.button_v')}}</a></p>
										</div>
									</div>
								</div>
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
    </section>
    <section class=" bg-banner py-16 lg:px-20 px-10">
		<div class="bg-gray-200 w-28 mb-5 mx-auto">
			<div class="bg-crema w-1/2 h-0.5 mx-auto"></div>
		</div>
    	<h2 class=" md:text-4xl text-2xl font-semibold mb-10 text-center">{{__('message.about_title_5')}}</h2>
		<div class="grid md:grid-cols-4 grid-cols-1 gap-10 mt-5">
			<img src="{{asset('images/incontri-117.jpg')}}" class=" shadow-2xl hover:opacity-60 mt-1">
			<img src="{{asset('images/incontri-168.jpg')}}" class=" shadow-2xl hover:opacity-60">
			<img src="{{asset('images/incontri-29.jpg')}}" class=" shadow-2xl hover:opacity-60">
			<img src="{{asset('images/incontri-175.jpg')}}" class=" shadow-2xl hover:opacity-60 mt-1">
		</div>
    </section>
    
@endsection