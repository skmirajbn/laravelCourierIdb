@extends('admin.layouts.main')

@section('content')
    <div class="main-panel">
        <div>
            <div
  class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
  <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
    Shops
  </h4>

  <div class="flex flex-col">
    <div class="grid grid-cols-8 rounded-sm bg-gray-2 dark:bg-meta-4 sm:grid-cols-8">
      <div class="p-2.5 xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">ID</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Shop Name</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">District</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Thana</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Address</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Logo</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Owner</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Parcel</h5>
      </div>
    </div>

    @foreach ($allShops as $shop)
    <div class="grid grid-cols-8 border-b border-stroke dark:border-strokedark sm:grid-cols-8">
        <div class="flex items-center gap-3 p-2.5 xl:p-5">
          <div class="flex-shrink-0">
          {{ $shop->id }}
          </div>
          <p class="hidden font-medium text-black dark:text-white sm:block">
       
          </p>
        </div>
  
        <div class="flex items-center justify-center p-2.5 xl:p-5">
          <p class="font-medium text-black dark:text-white">{{ $shop->name }}</p>
        </div>
  
        <div class="flex items-center justify-center p-2.5 xl:p-5">
          <p class="font-medium text-meta-3">{{ $shop->thana->district->name }}</p>
        </div>
  
        <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
          <p class="font-medium text-black dark:text-white">{{ $shop->thana->name }}</p>
        </div>
  
        <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
          <p class="font-medium text-meta-5">{{ $shop->address }}</p>
        </div>
        <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
          <p class="font-medium text-meta-5"> <img src="{{ url('images/shops/logo/'.$shop->logo) }}" alt=""></p>
        </div>
        <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
          <p class="font-medium text-meta-5"> {{ $shop->user->name }}</p>
        </div>
        <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
          <p class="font-medium text-meta-5 bg-green-600 p-2 text-white">View Parsels</p>
        </div>
      </div>
        
    @endforeach

    
  </div>
</div>
        </div>
        <div>
        @endsection
