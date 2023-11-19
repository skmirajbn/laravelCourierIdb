<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ড্যাশবোর্ড') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg py-12">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col gap-6">
                   <h2 class="text-3xl font-bold text-center">পার্সেল ট্রাক করুন <i class="fa-solid fa-truck"></i></h2>
                   <div class="w-full flex justify-center items-center gap-3">
                        <x-text-input class="border-2 border-red-600" disabled="" placeholder="পার্সেল আইডি লিখুন" />
                        <x-primary-button class="py-3 px-6">Track</x-primary-button>
                    </div>
                    <div class="mx-auto">
                        <x-bladewind.timeline
                            date="18-JUL"
                            label="You signed up"
                            completed="true"
                            color="red" />

                        <x-bladewind.timeline
                            date="19-JUL"
                            label="Customer rep assigned"
                            completed="true"
                            color="blue" />

                        <x-bladewind.timeline
                            date="20-JUL"
                            label="Customer rep called"
                            completed="true" 
                            color="green"/>

                        <x-bladewind.timeline label="Account is being reviewed" />

                        <x-bladewind.timeline label="Account activated" last="true"/>
                    </div>
               </div>
            </div>
        </div>
    </div>
</x-app-layout>
