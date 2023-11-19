<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('সকম পার্সেল') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="py-12 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col gap-6 p-6 text-gray-900 dark:text-gray-100">
                    <table class="table text-lg">
                        <!-- head -->
                        <thead>
                            <tr class="text-xl">
                                <th>ID</th>
                                <th>শপ</th>
                                <th>পার্সেল টাইপ</th>
                                <th>জেলা</th>
                                <th>উপজেলা</th>
                                <th>কাস্টমার নাম</th>
                                <th>মোবাইল</th>
                                <th>ট্রাক</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $parcels as $parcel )
                            <tr class="bg-base-200">
                                <th>{{ $parcel->id }}</th>
                                <td>{{ $parcel->shop->name }}</td>
                                <td>{{ $parcel->type }}</td>
                                <td>{{ $parcel->shop->thana->district->name }}</td>
                                <td>{{ $parcel->shop->thana->name }}</td>
                                <td>{{ $parcel->customer->name}}</td>
                                <td>{{ $parcel->customer->phone }}</td>
                                <td><a href="/track-parcel/{{ $parcel->id }}" class="p-2 text-white bg-green-600">Track</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            document.getElementById('track').addEventListener('click', () => {
                const parcelId = document.getElementById('parcelId').value;
                window.location.href = `/track-parcel/${parcelId}`

            })
        </script>
    @endpush
</x-app-layout>
