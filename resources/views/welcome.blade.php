@extends("layout.app")
@section("body") 
    <section class="flex justify-center mb-10">
        <div class="max-w-6xl flex flex-col sm:gap-y-0 md:gap-y-5">
            <div class="md:grid md:grid-cols-3 gap-2">
                <div class="flex flex-col md:col-span-2 sm:col-span-1 md:pt-40 md:px-0 pt-16 px-10  gap-y-5">
                    <span class="text-4xl font-semibold font-serif uppercase text-blue-950 md:text-7xl">
                        Bienvenue sur <span class="">la plateforme </span><a href="#apropos" class="flex font-bold text-slate-900 hover:text-slate-950">Zoto Madagascar,</a>
                        
                        {{-- <span class="lowercase text-xl md:text-4xl"><span class="uppercase">d</span>ecouvrez les offres et promotions.</span>  --}}
                    </span>
                    <div class="flex flex-col gap-y-10">
                        <div>
                            <a href={{route("descript")}} class="font-mono bg-gray-900 py-3 lowercase px-20 md:px-32 text-white text-lg hover:bg-slate-950 rounded-lg"><span class="uppercase">E</span>n savoir plus</a>
                        </div>
                    </div>

                </div>
                {{-- <div class="md:col-span-1 sm:col-span-1 md:pt-20 h-20" style="background-image: url('{{asset("photos/123.jpg")}}')">
                    <img src={{asset("photos/123.jpg")}} alt="">
                </div> --}}
            </div>
            <div class="text-blue-950 font-medium font-serif text-xl md:text-3xl mt-5 md:mt-5 px-10 md:px-0 sm:py-5">Suggestion compagnies</div> 
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-10 md:px-0">
                <div class="py-7 rounded-sm shadow-lg flex flex-col justify-center items-center bg-gray-100">
                    <div class="w-32 h-32 rounded-full border  hover:border-5 hover:border-blue-700 shadow-md shadow-black border-blue-800" style="background-image:url('{{asset('photos/comp.jpg')}}');background-size:cover;background-position:center;"></div>
                    <div class="flex gap-x-1 mb-3">
                        <p class="text-3xl font-extrabold font-sans">
                            Zozoro
                        </p>
                        <div>
                            <span class="text-xs bg-emerald-100 py-1 px-2 rounded-xl text-emerald-800 font-bold">124 points</span>
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <a href="" class="py-2 bg-blue-950 hover:bg-blue-900 text-white px-32 md:px-28 rounded-md shadow-sm">Voir</a>
                    </div>
                </div>
                <div class="py-7 rounded-sm shadow-lg flex flex-col justify-center items-center bg-gray-100">
                    <div class="w-32 h-32 rounded-full border hover:border-5 hover:border-blue-700 shadow-md shadow-black border-blue-800" style="background-image:url('{{asset('photos/comp.jpg')}}');background-size:cover;background-position:center;"></div>
                    <div class="flex gap-x-1 mb-3">
                        <p class="text-3xl font-extrabold font-sans">
                            Zozoro
                        </p>
                        <div>
                            <span class="text-xs bg-emerald-100 py-1 px-2 rounded-xl text-emerald-800 font-bold">124 points</span>
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <a href="" class="py-2 bg-blue-950 hover:bg-blue-900 text-white px-32 md:px-28 rounded-md shadow-sm">Voir</a>
                    </div>
                </div>
                <div class="py-7 rounded-sm shadow-lg flex flex-col justify-center items-center bg-gray-100">
                    <div class="w-32 h-32 rounded-full border hover:border-5 hover:border-blue-700 shadow-md shadow-black border-blue-800" style="background-image:url('{{asset('photos/comp.jpg')}}');background-size:cover;background-position:center;"></div>
                    <div class="flex gap-x-1 mb-3">
                        <p class="text-3xl font-extrabold font-sans">
                            Zozoro
                        </p>
                        <div>
                            <span class="text-xs bg-emerald-100 py-1 px-2 rounded-xl text-emerald-800 font-bold">124 points</span>
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <a href="" class="py-2 bg-blue-950 hover:bg-blue-900 text-white px-32 md:px-28 rounded-md shadow-sm">Voir</a>
                    </div>
                </div>
                <div class="py-7 rounded-sm shadow-lg flex flex-col justify-center items-center bg-gray-100">
                    <div class="w-32 h-32 rounded-full border  hover:border-5 hover:border-blue-700 shadow-md shadow-black border-blue-800" style="background-image:url('{{asset('photos/comp.jpg')}}');background-size:cover;background-position:center;"></div>
                    <div class="flex gap-x-1 mb-3">
                        <p class="text-3xl font-extrabold font-sans">
                            Zozoro
                        </p>
                        <div>
                            <span class="text-xs bg-emerald-100 py-1 px-2 rounded-xl text-emerald-800 font-bold">124 points</span>
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <a href="" class="py-2 bg-blue-950 hover:bg-blue-900 text-white px-32 md:px-28 rounded-md shadow-sm">Voir</a>
                    </div>
                </div>
                <a href="#" class="py-7 rounded-sm shadow-lg flex flex-col justify-center items-center bg-gray-100">
                    <div class="w-32 h-32 rounded-full border-8 border-gray-800 flex justify-center items-center mb-3" style="background-image:url('{{asset('photos/csomp.jpg')}}');background-size:cover;background-position:center;"><i class="fa fa-add font-bold text-5xl font-serif text-gray-800"></i></div>
                    <div class="flex gap-x-1">
                        <p class="text-3xl font-extrabold font-sans">
                            Creer
                        </p>
                        <div>
                            <span class="text-xs bg-red-100 py-1 px-2 rounded-xl text-red-800 font-bold">pt</span>
                        </div>
                    </div>
                    {{-- <div class="w-full text-center">
                        <a href="" class="py-2 bg-blue-950 hover:bg-blue-900 text-white px-32 md:px-28 rounded-md shadow-sm">GO</a>
                    </div> --}}
                </a>
            </div>
            <div class="text-blue-950 font-medium font-serif mt-5 md:mt-10 px-10 md:px-0 text-xl md:text-3xl">Decouvrez quelques articles.</div> 
            <!-- div class="flex flex-col overflow-x px-5 md:px-0">
                <div>
                    <nav class="inline gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-900 hs-tab-active:text-blue-900 py-4 px-4 inline-flex items-center font-bold font-serif gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap text-gray-800 hover:text-blue-900 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-700 dark:hover:text-blue-900 active" id="tabs-with-underline-item-1" aria-selected="true" data-hs-tab="#tabs-with-underline-1" aria-controls="tabs-with-underline-1" role="tab">
                            Tous
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-900 hs-tab-active:text-blue-900 py-4 px-4 inline-flex items-center font-bold font-serif gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap text-gray-800 hover:text-blue-900 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-700 dark:hover:text-blue-900" id="tabs-with-underline-item-2" aria-selected="false" data-hs-tab="#tabs-with-underline-2" aria-controls="tabs-with-underline-2" role="tab">
                            Voyage
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-900 hs-tab-active:text-blue-900 py-4 px-4 inline-flex items-center font-bold font-serif gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap text-gray-800 hover:text-blue-900 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-700 dark:hover:text-blue-900" id="tabs-with-underline-item-3" aria-selected="false" data-hs-tab="#tabs-with-underline-3" aria-controls="tabs-with-underline-3" role="tab">
                            Location Voiture
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-900 hs-tab-active:text-blue-900 py-4 px-4 inline-flex items-center font-bold font-serif gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap text-gray-800 hover:text-blue-900 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-700 dark:hover:text-blue-900" id="tabs-with-underline-item-4" aria-selected="false" data-hs-tab="#tabs-with-underline-4" aria-controls="tabs-with-underline-4" role="tab">
                            Service Colis
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-900 hs-tab-active:text-blue-900 py-4 px-4 inline-flex items-center font-bold font-serif gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap text-gray-800 hover:text-blue-900 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-700 dark:hover:text-blue-900" id="tabs-with-underline-item-5" aria-selected="false" data-hs-tab="#tabs-with-underline-5" aria-controls="tabs-with-underline-5" role="tab">
                            Chauffeur
                        </button>
                    </nav>
                </div>
                <div class="mt-3">
                    <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                        <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-y-3 md:gap-3">
                            {{-- @foreach ($article as $article)
                                <div class="flex flex-col border rounded-sm colore h-96 justify-end"
                                    style="background-image: url('{{ asset('assets/uploads/' . $article->photo) }}'); 
                                            background-size: cover;background-position: center; 
                                            filter: grayscale(50%);">
                                    <div class="flex justify-between p-3">
                                        <div class="flex flex-col mt-1">
                                            <p class="uppercase font-bold leading-relaxed text-white text-lg">{{ $article->titre }}</p>
                                            <div>
                                                <span class="text-xs font-bold text-white"><span class="uppercase">{{ $article->activite->designation }} </span><i>par</i></span>
                                                <span class="text text-yellow-200 font-sans font-bold">Nom_de_la_company</span>
                                            </div>
                                            <p id="truncate-text" class="text-white font-mono text-sm truncate-words">{{ $article->description }}</p>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    const spanElement = document.getElementById('truncate-text');
                                                    const text = spanElement.textContent;
                                                    const words = text.split(' ');

                                                    if (words.length > 15) {
                                                    const truncatedText = words.slice(0, 15).join(' ') + '...';
                                                    spanElement.textContent = truncatedText;
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 px-3 py-3 w-full rounded-b-sm" style="background-color:rgba(8, 8, 8, 0.479)">
                                        <button class="hover:bg-white hover:text-black text-white px-3 py-1 rounded-lg">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <button class="hover:bg-white hover:text-black text-white px-3 py-1 rounded-lg">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <a href="/payer/{{$article->id}}" class="bg-green-800 hover:bg-green-900 font-bold text-white px-3 py-1 rounded-lg font-sans text-xs inline-flex items-center">Prendre</a>
                                    </div>
                                </div>
                            @endforeach     --}}
                        </div>
                    </div>
                    <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
                        <div class="md:grid md:grid-cols-3 md:gap-3 sm:gap-y-5 sm:gap-3">
                            {{-- @foreach ($voyage as $voyage)
                                <div class="flex flex-col border rounded-sm colore h-96 justify-end"
                                    style="background-image: url('{{ asset('assets/uploads/' . $voyage->photo) }}'); 
                                            background-size: cover;background-position: center; 
                                            filter: grayscale(50%);">
                                    <div class="flex justify-between p-3">
                                        <div class="flex flex-col mt-1">
                                            <p class="uppercase font-bold leading-relaxed text-white text-lg">{{ $voyage->titre }}</p>
                                            <div>
                                                <span class="text-xs font-bold text-white"><span class="uppercase">{{ $voyage->activite->designation }} </span><i>par</i></span>
                                                <span class="text text-yellow-200 font-sans font-bold">Nom_de_la_company</span>
                                            </div>
                                            <p id="truncate-text" class="text-white font-mono text-sm truncate-words">{{ $voyage->description }}</p>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    const spanElement = document.getElementById('truncate-text');
                                                    const text = spanElement.textContent;
                                                    const words = text.split(' ');

                                                    if (words.length > 15) {
                                                    const truncatedText = words.slice(0, 15).join(' ') + '...';
                                                    spanElement.textContent = truncatedText;
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 px-3 py-3 w-full rounded-b-sm" style="background-color:rgba(8, 8, 8, 0.479)">
                                        <button class="hover:bg-white hover:text-black text-white px-3 py-1 rounded-lg">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <button class="hover:bg-white hover:text-black text-white px-3 py-1 rounded-lg">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <a href="/payer/{{$voyage->id}}" class="bg-green-800 hover:bg-green-900 font-bold text-white px-3 py-1 rounded-lg font-sans text-xs inline-flex items-center">Prendre</a>
                                    </div>
                                </div>
                            @endforeach     --}}
                        </div>
                    </div>
                    <div id="tabs-with-underline-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-3">
                        <div class="md:grid md:grid-cols-3 md:gap-3 sm:gap-y-5 sm:gap-3">
                            {{-- @foreach ($location as $location)
                                <div class="flex flex-col border rounded-sm colore h-96 justify-end"
                                    style="background-image: url('{{ asset('assets/uploads/' . $location->photo) }}'); 
                                            background-size: cover;background-position: center; 
                                            filter: grayscale(50%);">
                                    <div class="flex justify-between p-3">
                                        <div class="flex flex-col mt-1">
                                            <p class="uppercase font-bold leading-relaxed text-white text-lg">{{ $location->titre }}</p>
                                            <div>
                                                <span class="text-xs font-bold text-white"><span class="uppercase">{{ $location->activite->designation }} </span><i>par</i></span>
                                                <span class="text text-yellow-200 font-sans font-bold">Nom_de_la_company</span>
                                            </div>
                                            <p id="truncate-text" class="text-white font-mono text-sm truncate-words">{{ $location->description }}</p>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    const spanElement = document.getElementById('truncate-text');
                                                    const text = spanElement.textContent;
                                                    const words = text.split(' ');

                                                    if (words.length > 15) {
                                                    const truncatedText = words.slice(0, 15).join(' ') + '...';
                                                    spanElement.textContent = truncatedText;
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 px-3 py-3 w-full rounded-b-sm" style="background-color:rgba(8, 8, 8, 0.479)">
                                        <button class="hover:bg-white hover:text-black text-white px-3 py-1 rounded-lg">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <button class="hover:bg-white hover:text-black text-white px-3 py-1 rounded-lg">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <a href="/payer/{{$location->id}}" class="bg-green-800 hover:bg-green-900 font-bold text-white px-3 py-1 rounded-lg font-sans text-xs inline-flex items-center">Prendre</a>
                                    </div>
                                </div>
                            @endforeach     --}}
                        </div>
                    </div>
                    <div id="tabs-with-underline-4" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-4">
                        <div class="md:grid md:grid-cols-3 md:gap-3 sm:gap-y-5 sm:gap-3">
                            {{-- @foreach ($colis as $colis)
                                <div class="flex flex-col border rounded-sm colore h-96 justify-end"
                                    style="background-image: url('{{ asset('assets/uploads/' . $colis->photo) }}'); 
                                            background-size: cover;background-position: center; 
                                            filter: grayscale(50%);">
                                    <div class="flex justify-between p-3">
                                        <div class="flex flex-col mt-1">
                                            <p class="uppercase font-bold leading-relaxed text-white text-lg">{{ $colis->titre }}</p>
                                            <div>
                                                <span class="text-xs font-bold text-white"><span class="uppercase">{{ $colis->activite->designation }} </span><i>par</i></span>
                                                <span class="text text-yellow-200 font-sans font-bold">Nom_de_la_company</span>
                                            </div>
                                            <p id="truncate-text" class="text-white font-mono text-sm truncate-words">{{ $colis->description }}</p>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    const spanElement = document.getElementById('truncate-text');
                                                    const text = spanElement.textContent;
                                                    const words = text.split(' ');

                                                    if (words.length > 15) {
                                                    const truncatedText = words.slice(0, 15).join(' ') + '...';
                                                    spanElement.textContent = truncatedText;
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 px-3 py-3 w-full rounded-b-sm" style="background-color:rgba(8, 8, 8, 0.479)">
                                        <button class="hover:bg-white hover:text-black text-white px-3 py-1 rounded-lg">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <button class="hover:bg-white hover:text-black text-white px-3 py-1 rounded-lg">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <a href="/payer/{{$colis->id}}" class="bg-green-800 hover:bg-green-900 font-bold text-white px-3 py-1 rounded-lg font-sans text-xs inline-flex items-center">Prendre</a>
                                    </div>
                                </div>
                            @endforeach     --}}
                        </div>
                    </div>
                    <div id="tabs-with-underline-5" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-5">
                        <div class="md:grid md:grid-cols-3 md:gap-3 sm:gap-y-5 sm:gap-3">
                            {{-- @foreach ($chauffeur as $chauffeur)
                                <div class="flex flex-col border rounded-sm colore h-96 justify-end"
                                    style="background-image: url('{{ asset('assets/uploads/' . $chauffeur->photo) }}'); 
                                            background-size: cover;background-position: center; 
                                            filter: grayscale(50%);">
                                    <div class="flex justify-between p-3">
                                        <div class="flex flex-col mt-1">
                                            <p class="uppercase font-bold leading-relaxed text-white text-lg">{{ $chauffeur->titre }}</p>
                                            <div>
                                                <span class="text-xs font-bold text-white"><span class="uppercase">{{ $chauffeur->activite->designation }} </span><i>par</i></span>
                                                <span class="text text-yellow-200 font-sans font-bold">Nom_de_la_company</span>
                                            </div>
                                            <p id="truncate-text" class="text-white font-mono text-sm truncate-words">{{ $chauffeur->description }}</p>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    const spanElement = document.getElementById('truncate-text');
                                                    const text = spanElement.textContent;
                                                    const words = text.split(' ');

                                                    if (words.length > 15) {
                                                    const truncatedText = words.slice(0, 15).join(' ') + '...';
                                                    spanElement.textContent = truncatedText;
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 px-3 py-3 w-full rounded-b-sm" style="background-color:rgba(8, 8, 8, 0.945)">
                                        <button class="hover:bg-white hover:text-black text-white px-3 py-1 rounded-lg">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <button class="hover:bg-white hover:text-black text-white px-3 py-1 rounded-lg">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <a href="/payer/{{$chauffeur->id}}" class="bg-green-800 hover:bg-green-900 font-bold text-white px-3 py-1 rounded-lg font-sans text-xs inline-flex items-center">Prendre</a>
                                    </div>
                                </div>
                            @endforeach     --}}
                        </div>
                    </div>
                </div> 
            </div -->    
        </div>
    </section>
@endsection