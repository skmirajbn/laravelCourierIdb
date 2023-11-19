<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('সকল শপ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col gap-6 py-16 px-14">
                    <div class="w-full max-w-full form-control">
                        <h3 class="text-2xl font-bold">List</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table text-lg">
                            <!-- head -->
                            <thead>
                                <tr class="text-xl">
                                    <th>ID</th>
                                    <th>নাম</th>
                                    <th>জেলা</th>
                                    <th>উপজেলা/থানা</th>
                                    <th>ঠিকানা</th>
                                    <th>লোগো</th>
                                    <th>একশন</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                @foreach ($shops as $shop)
                                    <tr class="bg-base-200">
                                        <th>{{ $shop->id }}</th>
                                        <td>{{ $shop->name }}</td>
                                        <td>{{ $shop->thana->district->name }}</td>
                                        <td>{{ $shop->thana->name }}</td>
                                        <td>{{ $shop->address }}</td>
                                        <td><img class="object-cover w-20 h-20"
                                                src="{{ url('images/shops/logo/' . $shop->logo) }}">
                                        </td>
                                        <td class="text-white">
                                           <a href="{{ route('shop', $shop->id) }}"><span class="p-2 bg-blue-800"> <i class="fa-solid fa-eye"></i></span></a>
                                            <span class="p-2 bg-green-600"><i class="fa-solid fa-pen-to-square"></i></span>
                                            <span class="p-2 bg-red-600"><i class="fa-solid fa-trash"></i></span>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
