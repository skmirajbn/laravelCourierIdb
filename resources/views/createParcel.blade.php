<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('নতুন পার্সেল তৈরী করুন') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col gap-6 px-6 py-6">
                    <div class="form-control w-full max-w-full">
                        <h3 class="text-2xl font-bold">পার্সেল তৈরী করুন</h3>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold">কাস্টমার ইনফরমেনশন</h2>
                        <form action="">
                            <x-input-label value="নাম"/>
                            <x-text-input disabled="" placeholder="গ্রাহকের নাম লিখুন" />
                            <x-text-input disabled="" placeholder="ফোন নাম্বার লিখুন" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
