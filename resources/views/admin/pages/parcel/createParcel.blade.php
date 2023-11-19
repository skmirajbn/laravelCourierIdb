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
                    <div class="w-full max-w-full form-control">
                        <h3 class="text-2xl font-bold">পার্সেল তৈরী করুন</h3>
                    </div>
                    <form action="{{ route('store-parcel') }}" method="post">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <div class="w-full form-control">
                                    <label for="">শপ</label>
                                    <select name="shop_id" class="select select-bordered">
                                        <option disabled selected>শপ সিলেক্ট করুন</option>
                                        @foreach ($shops as $shop)
                                            <option value="{{ $shop->id }}">{{ $shop->name }}</option>)
                                            
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <h2 class="text-xl font-semibold">কাস্টমার ইনফরমেনশন</h2>

                                <div class="flex gap-6">
                                    <div class="w-full">
                                        <x-input-label value="নাম" />
                                        <x-text-input class="w-full" name="name" disabled="" placeholder="গ্রাহকের নাম লিখুন" />
                                    </div>
                                    <div class="w-full">
                                        <x-input-label value="ফোন" />
                                        <x-text-input class="w-full" name="phone" disabled="" placeholder="ফোন নাম্বার লিখুন" />
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <h2 class="text-xl font-semibold">পার্সেল ইনফরমেনশন</h2>

                                <div class="flex gap-6">
                                    <div class="w-full">
                                        <x-input-label value="পার্সেল টাইপ" />
                                        <select class="w-full select select-bordered" name="parcel_type_id">
                                            <option disabled selected>পার্সেল টাইল সিলেক্ট করুন</option>
                                            @foreach ($parcelTypes as $parcelType)
                                                <option value="{{ $parcelType->id }}">{{ $parcelType->name }}</option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="w-full">
                                        <x-input-label value="ওজন" />
                                        <x-text-input class="w-full" name="weight" disabled=""
                                            placeholder="পার্সেলের ওজন প্রবেশ করুন" />
                                    </div>
                                </div>
                                <div class="flex gap-6">
                                    <div class="w-full">
                                        <x-input-label value="জেলা" />
                                        <select id="district" class="w-full select select-bordered" name="district_id">
                                            <option disabled selected>জেলা সিলেক্ট করুন</option>
                                           @foreach ($districts as $district)
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                    <div class="w-full">
                                        <x-input-label value="উপজেলা" />
                                        <select id="thana" class="w-full select select-bordered" name="thana_id">
                                            <option disabled selected>উপজেলা সিলেক্ট করুন</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex gap-6">
                                    <div class="w-full">
                                        <x-input-label value="ঠিকানা" />
                                        <textarea class="w-full textarea textarea-bordered" placeholder="পার্সেল ঠিকানা লিখুন" name="address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center w-full">
                                <x-primary-button>Create Parcel</x-primary-button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            setTimeout(() => {
                $(document).ready(function() {
                    document.getElementById('district').addEventListener('change', (e) => {
                        const districtId = e.target.value
                        $.ajax({
                            method: 'GET',
                            url: `http://localhost:8000/api/thana/district/${districtId}`,
                            success: (data) => {
                                let thanaOption =
                                    "<option disabled selected>উপজেলা/ থানা সিলেক্ট করুন</option>";
                                data.forEach((thana) => {
                                    thanaOption +=
                                        `<option value="${thana.id}">${thana.name}</option>`
                                })
                                //append the html in thana keep existing and append
                                document.getElementById('thana').innerHTML = thanaOption

                            }
                        })
                    })
                })
            }, 1);
        </script>
    @endpush
</x-app-layout>
