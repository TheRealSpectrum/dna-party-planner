@extends("layouts.app")

@section("title", "Gebruiker aanmaken")

@section("content")
<section class="bg-gray-100 dark:bg-gray-900 min-h-screen">
    <div class="px-4 pb-4 text-gray-500 pt-4 md:w-1/6">
        <a href="/gebruikers">
            <button type="button" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                Terug naar gebruikers 
            </button>
        </a>
    </div>
    <form class="container max-w-2xl mx-auto shadow-md md:w-3/4" action="{{ route("users.store") }}" method="POST">
        @csrf
        <div class="p-4 bg-gray-500 border-t-2 border-sun-ray dark:border-lapis-lazuli rounded-lg bg-opacity-5">
            <div class="max-w-sm mx-auto md:w-full md:mx-0">
                <div class="inline-flex items-center space-x-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="https://via.placeholder.com/150" class="mx-auto object-cover rounded-full h-16 w-16 "/>
                    </a>
                    <h1 class="text-gray-600 dark:text-gray-300">
                        
                    </h1>
                </div>
            </div>
        </div>
        <div class="space-y-6 bg-gray-100 dark:bg-gray-800">
            <div class="items-center w-full p-4 space-y-4 text-gray-500 dark:text-gray-300 md:inline-flex md:space-y-0">
                <h2 class="max-w-sm mx-auto md:w-1/3">
                    Email
                </h2>
                <div class="max-w-sm mx-auto md:w-2/3">
                    <div class=" relative ">
                        <input type="text" id="user-info-email" name="email" value="{{ $errors->has("email") ? "" : old("email") }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Email"/>
                        </div>
                        @error("email")
                            <p class="text-red-500">{{ $message }}</p> 
                        @enderror
                    </div>
                </div>
                <hr class="border-sun-ray dark:border-lapis-lazuli"/>
                <div class="items-center w-full p-4 space-y-4 text-gray-500 dark:text-gray-300 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3">
                        Naam
                    </h2>
                <div class="max-w-sm mx-auto space-y-5 md:w-2/3">
                    <div>
                        <div class=" relative ">
                            <input type="text" id="user-info-name" name="name" value="{{ $errors->has("name") ? "" : old("name") }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Naam"/>
                        </div>
                        @error("name")
                            <p class="text-red-500">{{ $message }}</p> 
                        @enderror
                </div>
            </div>
        </div>
            <hr class="border-sun-ray dark:border-lapis-lazuli"/>
        <div class="items-center w-full p-4 space-y-4 text-gray-500 dark:text-gray-300 md:inline-flex md:space-y-0">
            <h2 class="max-w-sm mx-auto md:w-1/3">
                Wachtwoord
            </h2>
            <div class="max-w-sm mx-auto space-y-5 md:w-2/3">
                <div class=" relative ">
                    <input type="password" id="user-info-password" name="password" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Wachtwoord"/>
                </div>
                @error("password")
                    <p class="text-red-500">{{ $message }}</p> 
                @enderror
            </div>
        </div>
            <hr class="border-sun-ray dark:border-lapis-lazuli"/>
            <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                    <button type="submit" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Opslaan
                    </button>
                </a>
            </div>
        </div>
    </form>
</section>
@endsection