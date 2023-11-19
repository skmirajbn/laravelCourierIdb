<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('শপ ডিটেইলস') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col gap-6 py-16 px-14">
                    <div class="w-full max-w-full form-control">
                        <h3 class="text-2xl font-bold">শপ</h3>
                    </div>
                    <div class="p-8 rounded-lg bg-slate-100">
                        <table class="table-auto">
                            <tbody>
                                <tr>
                                    <td class="w-1/5 font-bold text-blue-600">শপের নামঃ</td>
                                    <td>{{ $shop->name }}</td>
                                </tr>
                                <tr>
                                    <td class="w-1/5 text-gray-700">জেলাঃ</td>
                                    <td>{{ $shop->thana->district->name }}</td>
                                </tr>
                                <tr>
                                    <td class="w-1/5 text-gray-700">উপজেলাঃ</td>
                                    <td>{{ $shop->thana->name }}</td>
                                </tr>
                                <tr>
                                    <td class="w-1/5 text-gray-700">ঠিকানাঃ</td>
                                    <td>{{ $shop->address }}</td>
                                </tr>
                                <tr>
                                    <td class="w-1/5 text-sm text-gray-600">লোগোঃ</td>
                                    <td><img class="object-cover w-20 h-20" src="{{ url('images/shops/logo/' . $shop->logo) }}"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
