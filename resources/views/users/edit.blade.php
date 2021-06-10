@extends("layouts.app")

@section("title", $user->name)

@section("content")
<section class="h-screen bg-gray-100 bg-opacity-50">
    <div class="px-4 pb-4 text-gray-500 pt-4 md:w-1/6">
        <a href="/gebruikers">
            <button type="button" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                Terug naar gebruikers 
            </button>
        </a>
    </div>
    <form class="container max-w-2xl mx-auto shadow-md md:w-3/4">
        <div class="p-4 bg-gray-100 border-t-2 border-indigo-400 rounded-lg bg-opacity-5">
            <div class="max-w-sm mx-auto md:w-full md:mx-0">
                <div class="inline-flex items-center space-x-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="https://via.placeholder.com/150" class="mx-auto object-cover rounded-full h-16 w-16 "/>
                    </a>
                    <h1 class="text-gray-600">
                        {{ $user->name }}
                    </h1>
                </div>
            </div>
        </div>
        <div class="space-y-6 bg-white">
            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                <h2 class="max-w-sm mx-auto md:w-1/3">
                    Account
                </h2>
                <div class="max-w-sm mx-auto md:w-2/3">
                    <div class=" relative ">
                        <input type="text" id="user-info-email" value="{{ $user->email }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Email"/>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3">
                        Persoonlijke informatie
                    </h2>
                <div class="max-w-sm mx-auto space-y-5 md:w-2/3">
                    <div>
                        <div class=" relative ">
                            <input type="text" id="user-info-name" value="{{ $user->name }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Name"/>
                        </div>
                </div>
            </div>
        </div>
            <hr/>
        <div class="items-center w-full p-8 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
            <h2 class="max-w-sm mx-auto md:w-4/12">
                Verander wachtwoord
            </h2>
            <div class="w-full max-w-sm pl-2 mx-auto space-y-5 md:w-5/12 md:pl-9 md:inline-flex">
                <div class=" relative ">
                    <input type="text" id="user-info-password" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Password"/>
                    </div>
                </div>
                <div class="text-center md:w-3/12 md:pl-6">
                    <button type="button" class="py-2 px-4  bg-pink-600 hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Verander
                    </button>
                </div>
            </div>
            <hr/>
            <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                <a href="/gebruikers/{{ $user->id }}">
                    <button type="submit" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Opslaan
                    </button>
                </a>
            </div>
        </div>
    </form>
</section>
@endsection