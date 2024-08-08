@extends("layout.app")
@section("body") 
    <section class="flex justify-center mb-10">
        <div class="max-w-6xl flex flex-col sm:gap-y-0 md:gap-y-5">
            <div class="md:grid md:grid-cols-3 gap-2">
                <div class="flex flex-col md:col-span-2 sm:col-span-1 md:pt-20 md:px-0 pt-16 px-10 gap-y-5">
                    <span class="text-2xl font-semibold font-serif text-blue-950 md:text-4xl">
                        Mettre à jour votre compte et vous pouvez ajouter vos articles sur ce plateforme
                    </span>
                    <div class="flex flex-col gap-y-2">
                          <div class="inline-flex items-center">
                            <span class="size-2 inline-block bg-gray-500 rounded-full me-2"></span>
                            <span class="text-gray-600 dark:text-neutral-400">Ajouter vos articles en ligne </span>
                          </div>
                          <div class="inline-flex items-center">
                            <span class="size-2 inline-block bg-red-500 rounded-full me-2"></span>
                            <span class="text-gray-600 dark:text-neutral-400">Gérer vos clients dans vos dashboard</span>
                          </div>
                          <div class="inline-flex items-center">
                            <span class="size-2 inline-block bg-green-500 rounded-full me-2"></span>
                            <span class="text-gray-600 dark:text-neutral-400">Gagnez plus d'argent</span>
                          </div>
                    </div>
                    <div class="flex flex-col gap-y-10">
                        <div>
                            <a href={{route("tocreatecompany",Auth::user()->id)}} class="font-mono bg-gray-900 py-3 px-20 md:px-32 text-white text-lg hover:bg-slate-950 rounded-lg">Mise à jour </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

