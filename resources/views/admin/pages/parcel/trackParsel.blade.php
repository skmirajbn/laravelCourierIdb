<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('ড্যাশবোর্ড') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="py-12 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col gap-6 p-6 text-gray-900 dark:text-gray-100">
                   <h2 class="text-3xl font-bold text-center">পার্সেল ট্রাক করুন <i class="fa-solid fa-truck"></i></h2>
                   <div class="flex items-center justify-center w-full gap-3">
                        <x-text-input id="parcelId" class="border-2 border-red-600" value="{{ $parcel->id }}" placeholder="পার্সেল আইডি লিখুন"  />
                        <x-primary-button id="track" class="px-6 py-3">Track</x-primary-button>
                    </div>
                    <div class="flex py-3">
                        <div class="w-1/2 text-center">
                            <h3 class="font-bold">পার্সেল বিস্তারিত</h3>
                            <h3 class="my-2">Customer Name: {{ $parcel->customer->name }} </h3>
                            <h3 class="my-2">Customer Phone: {{ $parcel->customer->phone }} </h3>
                            <h3 class="my-2">Parcel Address: {{ $parcel->address }} </h3>
                        </div>
                    
                        <div class="w-1/2 text-center">
                            <h3 class="font-bold">শপ বিস্তারিত</h3>
                            <h3 class="my-2">Shop Name: {{ $parcel->shop->name }} </h3>
                            <h3 class="my-2">Shop Phone: {{ $parcel->shop->phone }} </h3>
                            <h3 class="my-2">Shop Address: {{ $parcel->shop->address }} </h3>
                        </div>
                    </div>
                    <div class="mx-auto">
                        @foreach ($trackings as $tracking)
                            <x-bladewind.timeline
                                date="{{ $tracking->date }}"
                                label="{{ $tracking->message }}"
                                completed="{{ $tracking->status }}"
                                color="{{ $tracking->color }}" />
                        @endforeach

                        
                    </div>
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
