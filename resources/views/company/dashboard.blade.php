@extends("layout.dash")
@section("dash")
<div class="flex px-6 md:px-0 h-full items-center">
  <a href={{route("tocreate")}} class="px-6 py-3 bg-red-950 text-white rounded-md">Créer une article</a>
    {{-- <div class="w-full bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-50 dark:border-neutral-700">
      <div class="p-4 sm:p-3 grid grid-cols-1 md:grid-cols-1">
        <div class="">
          <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Création article</h1>
          <p class="text-start mt-2 text-sm text-gray-900 dark:text-neutral-400">
            Procédures:
            <ol class="text-gray-300 dark:text-white">
                <li class="text-xs text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam commodi nesciunt alias adipisci, praesentium voluptatibus consequatur. Eius, recusandae?</li>
                <li class="text-xs text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam commodi nesciunt alias adipisci, praesentium voluptatibus consequatur. Eius, recusandae?</li>
            </ol>
          </p>
        </div>
    
        <div class="mt-5">
          <!-- Form -->
          <form action={{route("creation")}} method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                <!-- Form Group -->
                <div>
                  <label for="titre" class="block text-xs mb-2 text-gray-500 dark:text-black">Titre</label>
                  <div class="relative">
                    <input type="text" id="titre" name="titre" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50  dark:text-neutral-400 dark:placeholder-neutral-500" aria-describedby="titre">
                  </div>
                  @error("titre")
                  <p class="text-xs text-red-600 mt-2" id="">{{$message}}</p>
                  @enderror
                </div>
                <!-- End Form Group -->
                
              <!-- Form Group -->
              <div>
                <label for="type_id" class="block text-xs mb-2 text-gray-500 dark:text-black">Type d'Article</label>
                <div class="relative">
                  <select id="type_id" name="type_id" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50  dark:text-neutral-400 dark:placeholder-neutral-500" aria-describedby="type_id">
                    <option value="1">Voyage</option>
                    <option value="2">Colis</option>
                    <option value="3">Location</option>
                  </select>
                </div>
                @error("type_id")
                <p class="text-xs text-red-600 mt-2" id="type_id">{{$message}}</p>
                @enderror
              </div>
              <!-- End Form Group -->
              <!-- Form Group -->
              <div>
                <label for="references" class="block text-xs mb-2 text-gray-500 dark:text-black">Références Transfert</label>
                <div class="relative">
                  <input type="text" id="references" name="references" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50  dark:text-neutral-400 dark:placeholder-neutral-500" aria-describedby="references">
                </div>
                @error("references")
                <p class="text-xs text-red-600 mt-2" id="references">{{$message}}</p>
                @enderror
              </div>
              <!-- End Form Group -->
              <!-- Form Group -->
              <div>
                <label for="sender" class="block text-xs mb-2 text-gray-500 dark:text-black">Envoyé par:</label>
                <div class="relative">
                  <input type="text" id="sender" name="sender" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50  dark:text-neutral-400 dark:placeholder-neutral-500" aria-describedby="sender">
                </div>
                @error("sender")
                <p class="text-xs text-red-600 mt-2" id="sender">{{$message}}</p>
                @enderror
              </div>
              <!-- End Form Group -->
              <!-- Form Group -->
              <div class="md:col-span-2">
                <label for="photo" class="block text-xs mb-2 text-gray-500 dark:text-black">Illustrations</label>
                <div class="relative">
                        <input type="file" name="photo" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50 dark:border-neutral-300 dark:text-neutral-400
                          file:bg-gray-50 file:border-0
                          file:me-4
                          file:py-3 file:px-4
                          dark:file:bg-neutral-700 dark:file:text-neutral-400">
                </div>
                @error("photo")
                <p class="text-xs text-red-600 mt-2" id="photo">{{$message}}</p>
                @enderror
              </div>
              <!-- End Form Group -->
              <!-- Form Group -->
              <div class="md:col-span-2">
                <label for="description" class="block text-xs mb-2 text-gray-500 dark:text-black">Description</label>
                <div class="w-full">
                  <textarea id="description" cols="30" rows="10" name="description" class="h-20 py-3 px-4 block w-full border-gray-200 border rounded-md text-sm dark:focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-50  dark:text-neutral-400 dark:placeholder-neutral-500" aria-describedby="description"></textarea>
                </div>
                @error("description")
                <p class="text-xs text-red-600 mt-2" id="">{{$message}}</p>
                @enderror
              </div>
              <!-- End Form Group -->
              <button class="md:col-span-2 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-900 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Créer </button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
    </div> --}}
</div>

@endsection