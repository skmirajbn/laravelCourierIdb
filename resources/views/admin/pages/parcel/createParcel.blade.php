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
                    <form action="">
                        <div class="space-y-6">
                            <div>
                                <div class="form-control w-full">
                                    <label for="">শপ</label>
                                    <select name="shop_id" class="select select-bordered">
                                        <option disabled selected>শপ সিলেক্ট করুন</option>
                                        <option value="1">Star Wars</option>
                                        <option>Harry Potter</option>
                                        <option>Lord of the Rings</option>
                                        <option>Planet of the Apes</option>
                                        <option>Star Trek</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <h2 class="text-xl font-semibold">কাস্টমার ইনফরমেনশন</h2>

                                <div class="flex gap-6">
                                    <div class="w-full">
                                        <x-input-label value="নাম" />
                                        <x-text-input class="w-full" name="customer_name" disabled="" placeholder="গ্রাহকের নাম লিখুন" />
                                    </div>
                                    <div class="w-full">
                                        <x-input-label value="ফোন" />
                                        <x-text-input class="w-full" name="customer_phone" disabled="" placeholder="ফোন নাম্বার লিখুন" />
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <h2 class="text-xl font-semibold">পার্সেল ইনফরমেনশন</h2>

                                <div class="flex gap-6">
                                    <div class="w-full">
                                        <x-input-label value="পার্সেল টাইপ" />
                                        <select class="select select-bordered w-full" name="parcel_type_id">
                                            <option disabled selected>পার্সেল টাইল সিলেক্ট করুন</option>
                                            <option value="1">Star Wars</option>
                                            <option>Harry Potter</option>
                                            <option>Lord of the Rings</option>
                                            <option>Planet of the Apes</option>
                                            <option>Star Trek</option>
                                        </select>
                                    </div>
                                    <div class="w-full">
                                        <x-input-label value="ওজন" />
                                        <x-text-input class="w-full" name="parcel_weight" disabled=""
                                            placeholder="পার্সেলের ওজন প্রবেশ করুন" />
                                    </div>
                                </div>
                                <div class="flex gap-6">
                                    <div class="w-full">
                                        <x-input-label value="জেলা" />
                                        <select class="select select-bordered w-full" name="district_id">
                                            <option disabled selected>জেলা সিলেক্ট করুন</option>
                                            <option>Star Wars</option>
                                            <option>Harry Potter</option>
                                            <option>Lord of the Rings</option>
                                            <option>Planet of the Apes</option>
                                            <option>Star Trek</option>
                                        </select>
                                    </div>
                                    <div class="w-full">
                                        <x-input-label value="উপজেলা" />
                                        <select class="select select-bordered w-full" name="thana_id">
                                            <option disabled selected>উপজেলা সিলেক্ট করুন</option>
                                            <option>Star Wars</option>
                                            <option>Harry Potter</option>
                                            <option>Lord of the Rings</option>
                                            <option>Planet of the Apes</option>
                                            <option>Star Trek</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex gap-6">
                                    <div class="w-full">
                                        <x-input-label value="ঠিকানা" />
                                        <textarea class="textarea textarea-bordered w-full" placeholder="পার্সেল ঠিকানা লিখুন"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center">
                                <x-primary-button>Create Parcel</x-primary-button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
