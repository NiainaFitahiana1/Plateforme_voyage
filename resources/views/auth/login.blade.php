@extends('layout.base')
@section('base')
<div class="flex justify-center px-6 h-full items-center">
    <div class="w-full max-w-xl mt-16 md:mt-28 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
      <div class="p-4 sm:p-7">
        <div class="text-center">
          <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Se connecter</h1>
          <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
            Vous n'avez pas d'une compte?
            <a class="text-blue-900 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href={{route("toregister")}}>
              Inscrivez vous 
            </a>
          </p>
        </div>
    
        <div class="mt-5">
          <!-- Form -->
          <form action={{route("verification")}} method="POST">
            @csrf
            <div class="grid gap-y-4">
              <!-- Form Group -->
              <div>
                <label for="telephone" class="block text-sm mb-2 dark:text-white">Numéro téléphone</label>
                <div class="relative">
                  <input type="text" id="telephone" name="telephone" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900  dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" aria-describedby="email-error">
                </div>
                @error("telephone")
                <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                @enderror
              </div>
              <!-- End Form Group -->
    
              <!-- Form Group -->
              <div>
                <div class="flex justify-between items-center">
                  <label for="password" class="block text-sm mb-2 dark:text-white">Mot de passe</label>
                  <a class="inline-flex items-center gap-x-1 text-sm text-blue-900 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href={{route("forgotpassword")}}>Mot de passe oubliée?</a>
                </div>
                <div class="relative">
                  <input type="password" id="password" name="password" class="py-3 px-4 block w-full border-gray-200 border rounded-md text-sm focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900  dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" aria-describedby="password-error">
                </div>
                @error("password")
                <p class="text-xs text-red-600 mt-2" id="password-error">{{$message}}</p>
                @enderror
              </div>
              <!-- End Form Group -->
    
              <!-- Checkbox -->
              <div class="flex items-center ms-2">
                <div class="flex">
                  <input id="remember-me" name="remember-me" type="checkbox" class="h-5 w-5 shrink-0 mt-0.5 border-gray-200 rounded text-blue-900 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                </div>
                <div class="ms-3">
                  <label for="remember-me" class="text-sm dark:text-white">Se souvenir de moi</label>
                </div>
              </div>
              <!-- End Checkbox -->
    
              <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-900 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Se connecter</button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
    </div>
</div>

@endsection