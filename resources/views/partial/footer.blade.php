<footer class="md:px-4 w-full bg-slate-950 px-4">
    <div class="justify-between lg:px-7 items-center py-3 flex">
        <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">
            <img src={{asset("assets/logos/logo.png")}} alt="" class="h-10">
        </a>
        <div>
                @if(Auth::check())
                <button type="button" class="m-1 ms-0 py-3 px-4 inline-flex items-center uppercase gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-overlay-body-scrolling">
                  Mon compte
                </button>  
                @else
                <a href={{route("tologin")}} class="py-2.5 px-4 uppercase inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                  Se connecter
                </a>
                @endif
        </div>
    </div>
    <div class="md:grid md:grid-cols-3 lg:grid:cols-6 gap-y-4 gap-x-9 px-4 lg:px-7">
        <div class="flex flex-col w-full mx-1">
            <div class="py-2">
                <p class="flex flex-col text-gray-100 font-medium text-sm" id="apropos">
                    <span class="text-lg inline-flex gap-x-3 items-center uppercase border-b border-white">
                        {{-- <i class="fa fa-pen"></i> --}}
                        A propos de la plateforme
                    </span>
                    <span class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime recusandae, cumque fuga quas quos numquam voluptates earum, quis reiciendis atque odit beatae corporis. Doloribus ea eius amet voluptates, quo dolore.
                    Quaerat officiis aliquam tempora enim ea, dolor magni earum temporibus.
                    </span>
                </p>
            </div>
            <div class="py-2">
                <p class="flex flex-col text-gray-100 font-medium text-sm">
                    <span class="text-lg inline-flex items-center uppercase border-b border-white">
                        {{-- <i class="fa fa-pen"></i> --}}
                        Réalise par :
                    </span>
                    <span class="mt-2 text-sm">
                        Manohitiana Niaina Fitahiana
                    </span>
                    <span>+261 33 61 428 48</span>
                    <link rel="stylesheet" href="">https://www.fitahiana-sika.com/</link>
                </p>
            </div>
        </div>
        <div class="flex flex-col w-full mx-1 col-span-2"> 
            <div class="py-2">
             
                {{-- <div class="flex flex-col text-white font-medium text-sm">
                    <span class="text-lg inline-flex items-center uppercase">
                        Evaluer l'app
                    </span>
                    <div class="flex flex-col gap-y-3 py-2">
                        <div class="flex gap-x-2 items-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>  
                </div> --}}
                <div class="flex flex-col text-white font-medium text-sm">
                    <span class="text-lg inline-flex items-center uppercase border-b border-white">
                        Contact
                    </span>
                    <div class="flex flex-col gap-y-3 py-2">
                        <div class="flex gap-x-2 items-center">
                            <i class="fa fa-envelope"></i>
                            <span class="text-sm">zoutoMad@gmail.com</span>
                        </div>
                        <div class="flex gap-x-2 flex-col">
                            <div class="text-white nline-flex items-bottom gap-x-2">
                                <i class="fa fa-phone mt-1"></i>
                                <span>Téléphone</span>
                            </div>
                            <div class="flex flex-col gap-y-2 mt-3 ms-5">
                                <span class="text-sm">+261 38 19 975 31</span>
                                <span class="text-sm">+261 38 19 975 31</span>
                                <span class="text-sm">+261 38 19 975 31</span>
                            </div>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <i class="fa fa-road"></i>
                            <span class="text-sm">Lot BVII12 Andranomanga</span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        </div>
    </div>
</footer>
