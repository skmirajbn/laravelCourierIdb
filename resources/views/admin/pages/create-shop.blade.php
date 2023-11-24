<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('নতুন শপ তৈরী করুন') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col gap-6 px-6 py-6">
                    <div class="w-full max-w-full form-control">
                        <h3 class="text-2xl font-bold">শপ তৈরী করুন</h3>
                    </div>
                    <form method="post" action="{{ route('store-shop') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <div class="w-full form-control">
                                    <label for="">শপের নাম</label>
                                    <x-input-label value="নাম" />
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    <x-text-input class="w-full" name="name" placeholder="শপের নাম লিখুন" />
                                </div>
                            </div>

                            <div class="space-y-3">
                                <label for="">শপ লোকেশন</label>
                                <x-input-error class="mt-2" :messages="$errors->get('thana_id')" />
                                <div class="flex gap-6">
                                    <select id="district" class="w-full select select-bordered" name="district_id">
                                        <option disabled selected>জেলা সিলেক্ট করুন</option>
                                        @foreach ($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>

                                    <select id="thana" class="w-full select select-bordered" name="thana_id">
                                        <option disabled selected>উপজেলা/ থানা সিলেক্ট করুন</option>

                                    </select>
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('address')" />
                                <div class="flex gap-6">
                                    <div class="w-full">
                                        <x-input-label value="ঠিকানা" />
                                        <textarea class="w-full textarea textarea-bordered" placeholder="পার্সেল ঠিকানা লিখুন" name="address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('logo')" />
                            <div>
                                <x-input-label value="শপের লোগো সেলেক্ট করুন" />
                                <x-bladewind.input type='file' name="logo" />
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
            }, 1000);
        </script>
    @endpush
</x-app-layout>
