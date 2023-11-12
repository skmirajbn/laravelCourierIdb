
    
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('আপনার সব অর্ডার') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <div class="form-control w-full max-w-full">
                     
                        <div class="flex gap-3 py-4 px-6">
                            <select class=" py-2 px-6 rounded-lg">
                              <option disabled selected>Select Location</option>
                              <option>Star Wars</option>
                              <option>Harry Potter</option>
                              <option>Lord of the Rings</option>
                              <option>Planet of the Apes</option>
                              <option>Star Trek</option>
                            </select>
                            <select class="py-2 px-6 rounded-lg">
                              <option disabled selected>Tracking ID</option>
                              <option>Star Wars</option>
                              <option>Harry Potter</option>
                              <option>Lord of the Rings</option>
                              <option>Planet of the Apes</option>
                              <option>Star Trek</option>
                            </select>
                            <div class="w-full block"><x-bladewind.datepicker type="range"  /></div>
                        </div>
                      
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
