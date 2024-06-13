
<nav x-data="{ open: false }" class="bg-red-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">            
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- titre du site -->
                <div class="shrink-0 flex items-center">
                    <a href="/" class="text-white text-3xl font-bold p-3 justify-between"> BRAKBETCLIK</a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    <ul class="text-gray-400 sm:self-center text-xl border-t sm:border-none">
                        <li class="sm:inline-block">
                            <a href="/" class="p-3 hover:text-white">Acceuil</a>

                        </li>

                        <li class="sm:inline-block">
                            <a href="{{route('predictions')}}" class="p-3 hover:text-white">Prediction</a>

                        </li>

                        <li class="sm:inline-block">
                            <a href="{{route('apropos')}}" class="p-3 hover:text-white">A propos de nous</a>

                        </li>

                    </ul>

                </div>
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                
                </div>
            </div>
                <!-- ensemble d menu -->
            
            
            
            
            
        </div>
         

            
    </div> 

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <div>
                <a href="{{route('predictions')}}" >
                    {{ __('predictions') }}
                </a>

            </div>
            
            <a href="{{route('apropos')}}">
                {{ __('A propos de nous') }}
            </a>
            
        </div>
    </div> 
    
    


</nav>
        