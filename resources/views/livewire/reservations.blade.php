<div class=" bg-gray-100 p-8 md:mr-10 shadow-lg">
    <form wire:submit.prevent="register">
        @if ($currentStep == 1)  
            <div class="step-one">
                <p class="text-xl font-semibold text-gray-500 mb-8">1/3 <span class=" text-black">{{__('message.home_subtitle_13')}}</span></p>
                <div class="bg-white px-5 py-5 mb-8 shadow">
                    <p class="font-bold mb-2 text-sm">{{__('message.home_p3')}}</p>
                    <input wire:model="date" name="date" type="date" class="text-sm w-full text-gray-500 py-3 px-5 focus:outline-none shadow bg-gray-50 border border-gray-400">
                    <p class="text-xs text-red-600 mt-2">@error('date'){{__('message.home_p18')}} @enderror</p>
                </div>
                <div class="bg-white px-5 py-5 mb-4 shadow">
                    <p class="font-bold mb-2 text-sm">{{__('message.home_p4')}}</p>
                    <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-3">
                        @foreach ($times as $time)
                            <label class="cursor-pointer btn-check-form text-gray-500 flex justify-start items-start relative bg-gray-50 border border-gray-400 py-1 flex flex-shrink-0 justify-center items-center hover:bg-white  hover:border-secondary transition duration-500">
                                <input  wire:model="time" name="time" type="radio" value="{{$time}}" class="hidden absolute">
                                <svg class="fill-current hidden absolute left-0 top-0 p-1  w-7 h-7 text-secondary pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                <span class="flex flex-col text-center">
                                    <div class="select-none block text-sm">{{$time}}</div>
                                </span>
                            </label>
                        @endforeach
                    </div>
                    <p class="text-xs text-red-600 mt-2">@error('time'){{__('message.home_p18')}} @enderror</p>
                </div>
            </div>
        @endif

         @if ($currentStep == 2)
            <div class="step-two">
                <p class="text-xl font-semibold text-gray-500 mb-8">2/3 <span class=" text-black">{{__('message.home_subtitle_14')}}</span></p>
                <div class="bg-white px-5 py-5 mb-8 shadow">
                    <p class="font-bold mb-2 text-sm">{{__('message.home_p5')}}</p>
                    <div class="grid grid-cols-4 gap-3">
                        @foreach ($people as $item)
                            <label class="cursor-pointer btn-check-form text-gray-500 flex justify-start items-start relative bg-gray-50 border border-gray-400 py-3 flex flex-shrink-0 justify-center items-center hover:bg-white  hover:border-secondary transition duration-500">
                                <input  wire:model="guess" name="guess" type="radio" value="{{$item}}" class="hidden absolute">
                                <svg class="fill-current hidden absolute left-0 top-0 p-1  w-7 h-7 text-secondary pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                                <span class="flex flex-col text-center">
                                    <div class="select-none block text-sm">{{$item}}</div>
                                </span>
                            </label>
                        @endforeach
                    </div>
                    <p class="text-xs text-red-600 mt-2">@error('guess'){{__('message.home_p18')}} @enderror</p>
                </div>
                <div class="bg-white px-5 py-5 mb-4 shadow">
                    <p class="font-bold mb-2 text-sm">{{__('message.home_p6')}}</p>
                    <select  wire:model="occasion" id="occasion" name="occasion" class="text-sm w-full text-gray-500 bg-gray-50 border border-gray-400 focus:outline-none py-3 px-5">
                        <option hidden>{{__('message.home_p7')}}</option>
                        <option value="Birthday">{{__('message.home_p12')}}</option>
                        <option value="Anniversary">{{__('message.home_p13')}}</option>
                        <option value="Date Night" >{{__('message.home_p14')}}</option>
                        <option value="Business Meal" >{{__('message.home_p15')}}</option>
                        <option value="Celebration" >{{__('message.home_p16')}}</option>
                    </select>
                </div>
            </div>
         @endif

         @if ($currentStep == 3)
            <div class="step-three">
                <div class="px-5 py-5 mb-4">
                    <p class="text-xl font-semibold text-gray-500 mb-8">3/3 <span class=" text-black">{{__('message.home_subtitle_15')}}</span></p>
                    <input name="name"  wire:model="name" type="text" class="bg-white border border-gray-400 py-3 px-5 text-gray-500 w-full focus:outline-none text-sm" placeholder="{{__('message.home_p8')}}">
                    <p class="text-xs text-red-600 mt-2">@error('name'){{__('message.home_p18')}} @enderror</p>
                    <div class="grid md:grid-cols-2 grid-cols-1 mt-5 gap-4">  
                        <div >
                            <input name="email"  wire:model="email" type="email" class="bg-white border border-gray-400 py-3 px-5 text-gray-500 w-full focus:outline-none text-sm" placeholder="{{__('message.home_p9')}}">
                            <p class="text-xs text-red-600 mt-2">@error('email'){{__('message.home_p18')}} @enderror</p>  
                        </div>
                        <div>
                            <input name="phone"  wire:model="phone" type="text" class="bg-white border border-gray-400 py-3 px-5 text-gray-500 w-full focus:outline-none text-sm" placeholder="{{__('message.home_p10')}}">
                            <p class="text-xs text-red-600 mt-2">@error('phone'){{__('message.home_p18')}} @enderror</p> 
                        </div> 
                    </div>
                    <textarea name="description"  wire:model="description" class="mt-5 bg-white border border-gray-400 py-3 px-5 text-gray-500 w-full focus:outline-none text-sm" rows="5" placeholder="{{__('message.home_p11')}}"></textarea> 
                </div>
            </div>
         @endif


         <div class="action-buttons flex justify-between pt-2 pb-2 bg-gray-100">

            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3 )
                <button type="button" class="bg-crema px-6 py-2 rounded text-white font-semibold" wire:click="decreaseStep()">Back</button>
            @endif
            
            @if ($currentStep == 1 || $currentStep == 2 )
                <button type="button" class=" bg-crema px-6 py-2 rounded text-white font-semibold" wire:click="increaseStep()">Next</button>
            @endif
            
            @if ($currentStep == 3)
                 <button type="submit" class="bg-crema px-6 py-2 rounded text-white font-semibold">Send</button>
            @endif
                
               
         </div>

     </form>



</div>
<style>
        input:checked + svg {
            display: block;
        }
    </style>
@push('scripts')

@endpush