@extends("layouts.app")

@section("title", "Admin panel")

@section("content")
<section class="min-h-screen bg-gray-200 dark:bg-gray-900">
    <div class="container mx-auto px-4 sm:px-8 max-w-6xl">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr class="bg-lapis-lazuli">
                                <th scope="col" class="px-5 py-3 border-b border-sun-ray dark:border-lapis-lazuli text-gray-200  text-left text-sm uppercase font-normal">
                                    Evenement
                                </th>
                                <th scope="col" class="px-5 py-3 border-b border-sun-ray dark:border-lapis-lazuli text-gray-200  text-left text-sm uppercase font-normal">
                                    Organisator
                                </th>
                                <th scope="col" class="px-5 py-3 border-b border-sun-ray dark:border-lapis-lazuli text-gray-200  text-left text-sm uppercase font-normal">
                                    Datum
                                </th>
                                <th scope="col" class="px-5 py-3 border-b border-sun-ray dark:border-lapis-lazuli text-gray-200  text-left text-sm uppercase font-normal">
                                    Locatie
                                </th>
                                <th scope="col" class="px-5 py-3 border-b border-sun-ray dark:border-lapis-lazuli text-gray-200  text-left text-sm uppercase font-normal">
                                    Aanwezig
                                </th>
                                <th scope="col" class="px-5 py-3 border-b border-sun-ray dark:border-lapis-lazuli text-gray-200  text-left text-sm uppercase font-normal">
                                    Aanpassen
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                            <tr class="bg-gray-100 odd:bg-gray-300 dark:bg-gray-700 dark:odd:bg-gray-800">
                                <td class="px-5 py-5 border-b border-sun-ray dark:border-lapis-lazuli text-sm">
                                    <div class="flex items-center">
                                            <p class="text-gray-900 dark:text-gray-300 whitespace-no-wrap">
                                                {{$event->title}}
                                            </p>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-sun-ray dark:border-lapis-lazuli text-sm">
                                    <p class="text-gray-900 dark:text-gray-300 whitespace-no-wrap">
                                        {{ $event->organizer }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-sun-ray dark:border-lapis-lazuli text-sm">
                                    <p class="text-gray-900 dark:text-gray-300 whitespace-no-wrap">
                                        {{ $event->date }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-sun-ray dark:border-lapis-lazuli text-sm">
                                    <p class="text-gray-900 dark:text-gray-300 whitespace-no-wrap">
                                        {{ $event->location }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-sun-ray dark:border-lapis-lazuli text-sm">
                                    <p class="text-gray-900 dark:text-gray-300 whitespace-no-wrap">
                                        {{ $event->registrations->count()}}/{{$event->max_registration_num }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-sun-ray dark:border-lapis-lazuli text-sm">
                                    <a href="{{ route("events.edit", $event->id) }}" class="text-indigo-400 hover:text-indigo-900">
                                        Aanpassen
                                    </a>
                                    <form action="{{ route("events.destroy", $event->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                            Verwijderen
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
