<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('ড্যাশবোর্ড') }}
        </h2>
    </x-slot>

    <div class="space-y-12 py-12">
        <div class="">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3>স্বাগতম, <span class="font-bold">{{ auth()->user()->name }}</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex gap-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex gap-10 px-4 py-10">
                        <img class="w-16 object-contain" src="{{ url('images/others/createparcel.png') }}"
                            alt="">
                        <div class="space-y-2">
                            <h3 class="text-2xl font-bold">পার্সেল তৈরী করুন</h3>
                            <p>আমাদের রাইডাররা আপনার পার্সেল আপনার পছন্দসই লোকেশণে পৌঁছে দিতে প্রস্তুত</p>
                            <a href="{{ route('create-parcel') }}"><x-primary-button>Create Parsel</x-primary-button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex gap-10 px-4 py-10">
                        <img class="w-16 object-contain" src="{{ url('images/others/credit.svg') }}" alt="">
                        <div class="space-y-2">
                            <h3 class="text-2xl font-bold">পেমেন্ট মেথড</h3>
                            <p>ইনস্ট্যান্ট পেমেন্টর জন্য আপনার ব্যাংক / বিকাশ অ্যাকাউন্ট অ্যাড করুন</p>
                            <x-primary-button>Add Payment Method</x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
