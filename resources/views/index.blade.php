<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redx Courier Service</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/all.min.css')

</head>
<body>
    <main>
        <header class="flex container">
            <div class="flex gap-16 py-4 w-1/2">
                <img class="w-32" src="{{URL::asset('/images/new-redx-logo.svg')}}" />
                <div class="flex items-center gap-6">
                    <a href="">এন্টারপ্রাইজ</a>
                    <a href="">কুরিয়ার</a>
                </div>
            </div>
            <div class="w-1/2 flex justify-end items-center gap-6">
                <p> <i class="fa-solid fa-phone text-red-600"></i> কল করুন ০৯৬১০০০৭৩৩৯</p>
                <a href="{{url('/login')}}" class="px-8 py-2 border-2 rounded-lg border-red-600">লগ ইন</a>
                <div><i class="fa-solid fa-globe"></i> EN</div>
            </div>
        </header>
        <section>
            <div class="flex">
                <div class="w-2/3 relative">
                    <div class="pb-6">
                        <video autoplay loop>
                            <source src="https://d118vismjsp9sl.cloudfront.net/web2.0/video/hero-video-2.webm" type="video/mp4">
                        </video>
                        <div class="absolute w-full px-20 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-7xl">
                            <h1 class="font-medium">দেশজুড়ে সবচেয়ে বেশি রাইডার</h1>
                            <h1 class="text-red-600 font-bold">৩৫০০+ ফ্রন্টলাইনার</h1>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 bg-black text-white flex justify-center items-center rounded-bl-3xl">
                    <div class="space-y-3">
                        <h3 class="text-center">বিনামূল্যে সাইন আপ করুন মাত্র দুই মিনিটে</h3>
                        <div class="flex bg-white rounded-md overflow-hidden px-2 border-2 border-red-500">
                            <h3 class="bg-white text-black flex items-center">
                                <div class="bg-green-600 w-6 h-4 flex justify-center items-center">
                                    <div class="bg-red-600 w-2 h-2 rounded-full"></div>
                                </div>
                                +880
                            </h3>
                            <input class="w-full border-none focus:border-none p-2 text-black" placeholder="ফোন নাম্বার" type="text">
                        </div>
                        <a href="{{url('register')}}" class="block text-center bg-red-600 w-full py-2 rounded-lg">সাইন আপ</a>
                        <h3 class="text-center">অথবা,</h3>
                        <h2 class="text-center">ট্রাক মুভমেন্ট স্ট্যাটাস</h2>
                        <div class="flex bg-white rounded-md overflow-hidden pl-2">
                            <input class="w-full border-none focus:border-none p-2 text-black" placeholder="ট্রাকিং আইডি দিন" type="text">
                            <button class="bg-red-600 px-6">ট্রাক</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container py-10">
            <div class="flex justify-between h-20">
                <img class="w-20 object-contain" src="images/brands/ajkerdeal-color.png" alt="">
                <img class="w-20 object-contain" src="images/brands/bata-color.png" alt="">
                <img class="w-20 object-contain" src="images/brands/daraz-color.png" alt="">
                <img class="w-20 object-contain" src="images/brands/lotto-color.png" alt="">
                <img class="w-20 object-contain" src="images/brands/othoba-color.png" alt="">
                <img class="w-20 object-contain" src="images/brands/rangs-group-color.png" alt="">
            </div>
        </section>
        <section class="container space-y-12 py-10">
            <h2 class="text-4xl text-center font-bold">সার্ভিস সমূহ</h2>
            <div class="grid grid-cols-4 gap-10 px-16">
                <div class=" space-y-4">
                    <img class="w-full" src="images/services/parcel-delivery.webp" alt="">
                    <h3 class="text-2xl font-bold">পার্সেল ডেলিভারি</h3>
                    <p class="text-xl">ব্যক্তিগত, ছোট ব্যবসা এবং কর্পোরেটদের জন্য ফার্স্ট-মাইল পিকআপ এবং লাস্ট মাইল ডেলিভারি সেবা</p>
                </div>
                <div class="space-y-4">
                    <img class="w-full" src="images/services/bulk-shipment.webp" alt="">
                    <h3 class="text-2xl font-bold">পার্সেল ডেলিভারি</h3>
                    <p class="text-xl">ব্যক্তিগত, ছোট ব্যবসা এবং কর্পোরেটদের জন্য ফার্স্ট-মাইল পিকআপ এবং লাস্ট মাইল ডেলিভারি সেবা</p>
                </div>
                <div class="space-y-4">
                    <img class="w-full" src="images/services/line-haul.webp" alt="">
                    <h3 class="text-2xl font-bold">পার্সেল ডেলিভারি</h3>
                    <p class="text-xl">ব্যক্তিগত, ছোট ব্যবসা এবং কর্পোরেটদের জন্য ফার্স্ট-মাইল পিকআপ এবং লাস্ট মাইল ডেলিভারি সেবা</p>
                </div>
                <div class="space-y-4">
                    <img class="w-full" src="images/services/warehouse.webp" alt="">
                    <h3 class="text-2xl font-bold">পার্সেল ডেলিভারি</h3>
                    <p class="text-xl">ব্যক্তিগত, ছোট ব্যবসা এবং কর্পোরেটদের জন্য ফার্স্ট-মাইল পিকআপ এবং লাস্ট মাইল ডেলিভারি সেবা</p>
                </div>
                <div class="space-y-4">
                    <img class="w-full" src="images/services/truck-rent.webp" alt="">
                    <h3 class="text-2xl font-bold">পার্সেল ডেলিভারি</h3>
                    <p class="text-xl">ব্যক্তিগত, ছোট ব্যবসা এবং কর্পোরেটদের জন্য ফার্স্ট-মাইল পিকআপ এবং লাস্ট মাইল ডেলিভারি সেবা</p>
                </div>
                <div class="space-y-4">
                    <img class="w-full" src="images/services/load-unload.webp" alt="">
                    <h3 class="text-2xl font-bold">পার্সেল ডেলিভারি</h3>
                    <p class="text-xl">ব্যক্তিগত, ছোট ব্যবসা এবং কর্পোরেটদের জন্য ফার্স্ট-মাইল পিকআপ এবং লাস্ট মাইল ডেলিভারি সেবা</p>
                </div>
                <div class="space-y-4">
                    <img class="w-full" src="images/services/logistics-service.webp" alt="">
                    <h3 class="text-2xl font-bold">পার্সেল ডেলিভারি</h3>
                    <p class="text-xl">ব্যক্তিগত, ছোট ব্যবসা এবং কর্পোরেটদের জন্য ফার্স্ট-মাইল পিকআপ এবং লাস্ট মাইল ডেলিভারি সেবা</p>
                </div>
                <div class="space-y-4">
                    <img class="w-full" src="images/services/customised-solutions.webp" alt="">
                    <h3 class="text-2xl font-bold">পার্সেল ডেলিভারি</h3>
                    <p class="text-xl">ব্যক্তিগত, ছোট ব্যবসা এবং কর্পোরেটদের জন্য ফার্স্ট-মাইল পিকআপ এবং লাস্ট মাইল ডেলিভারি সেবা</p>
                </div>
            </div>
        </section>
        <section class="container space-y-12 py-10">
            <h2 class="text-4xl text-center font-bold">আপনার লজিস্টিক পার্টনার হিসেবে REDX বেছে নিন</h2>
            <div class="grid grid-cols-3 px-16 gap-16">
                <div>
                    <img class="mx-auto" src="images/courierFeatures/fastest-delivery.svg" alt="">
                    <h2 class="text-center font-bold text-2xl">৩ দিনে ডেলিভারি গ্যারান্টিড</h2>
                    <p class="text-center">মাত্র ৩ দিনে বাংলাদেশের যেকোনো প্রান্তে পার্সেল ডেলিভারির নিশ্চয়তা</p>
                </div>
                <div>
                    <img class="mx-auto" src="images/courierFeatures/doorstep-pickup-delivery.svg" alt="">
                    <h2 class="text-center font-bold text-2xl">৩ দিনে ডেলিভারি গ্যারান্টিড</h2>
                    <p class="text-center">মাত্র ৩ দিনে বাংলাদেশের যেকোনো প্রান্তে পার্সেল ডেলিভারির নিশ্চয়তা</p>
                </div>
                <div>
                    <img class="mx-auto" src="images/courierFeatures/sms-update.svg" alt="">
                    <h2 class="text-center font-bold text-2xl">৩ দিনে ডেলিভারি গ্যারান্টিড</h2>
                    <p class="text-center">মাত্র ৩ দিনে বাংলাদেশের যেকোনো প্রান্তে পার্সেল ডেলিভারির নিশ্চয়তা</p>
                </div>
                <div>
                    <img class="mx-auto" src="images/courierFeatures/next-day-payment.svg" alt="">
                    <h2 class="text-center font-bold text-2xl">৩ দিনে ডেলিভারি গ্যারান্টিড</h2>
                    <p class="text-center">মাত্র ৩ দিনে বাংলাদেশের যেকোনো প্রান্তে পার্সেল ডেলিভারির নিশ্চয়তা</p>
                </div>
                <div>
                    <img class="mx-auto" src="images/courierFeatures/best-cod-rates.svg" alt="">
                    <h2 class="text-center font-bold text-2xl">৩ দিনে ডেলিভারি গ্যারান্টিড</h2>
                    <p class="text-center">মাত্র ৩ দিনে বাংলাদেশের যেকোনো প্রান্তে পার্সেল ডেলিভারির নিশ্চয়তা</p>
                </div>
                <div>
                    <img class="mx-auto" src="images/courierFeatures/secure-handling.svg" alt="">
                    <h2 class="text-center font-bold text-2xl">৩ দিনে ডেলিভারি গ্যারান্টিড</h2>
                    <p class="text-center">মাত্র ৩ দিনে বাংলাদেশের যেকোনো প্রান্তে পার্সেল ডেলিভারির নিশ্চয়তা</p>
                </div>
            </div>
        </section>
        <section class="space-y-12 py-10 bg-black text-white">
            <div class="container flex px-16 gap-28">
                <div class="w-1/3">
                    <img class="w-full" src="images/bangladash-map.svg" alt="">
                </div>
                <div class="w-2/3 px-16 flex items-center">
                    <div class="flex flex-col gap-5">
                        <h2 class="text-5xl font-bold">রেডএক্সের লজিস্টিকস সেবা সারাদেশে ৬৪ জেলা এবং ৪৯৩ উপজেলা জুড়ে বিস্তৃত</h2>
                        <p class="text-lg">আপনার যেকোনো লজিস্টিকস প্রয়োজনের জন্য আমরা নিশ্চিত করি দেশজুড়ে সবচেয়ে দ্রুতগতির সেবা</p>
                        <button class="bg-red-600 px-10 py-3 rounded-lg w-fit">কভারেজ এলাকা দেখুন</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container space-y-12 py-10">
            <h2 class="text-4xl text-center font-bold">ডেলিভারি ক্যালকুলেটর</h2>
            <p>আপনার শিপমেন্টের সুবিধার জন্য আগে থেকেই আপনার ডেলিভারী চার্জ সম্পর্কে ধারণা নিন</p>
            <div class="flex px-44 gap-16">
                <div class="w-1/2 space-y-8">
                    <div class="">
                        <h5>পণ্যের ওজন ( সর্বোচ্চ 10 কেজি )</h5>
                        <input type="text" placeholder="পন্যের ওজন লিখুন" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="">
                        <h5>পিক-আপ এলাকা</h5>
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled selected>পিকআপের এলাকা নির্বাচন করুন</option>
                            <option>Han Solo</option>
                            <option>Greedo</option>
                          </select>
                    </div>
                </div>
                <div class="w-1/2 space-y-8">
                    <div class="">
                        <h5>পণ্যের বিক্রয়মূল্য</h5>
                        <input type="text" placeholder="পন্যের বিক্রয়মূল্য লিখুন" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="">
                        <h5>ডেলিভারি এলাকা</h5>
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled selected>ডেলিভারির এলাকা নির্বাচন করুন</option>
                            <option>Han Solo</option>
                            <option>Greedo</option>
                          </select>
                    </div>
                </div>
            </div>
            <button class="mx-auto bg-red-600 block px-6 py-3 rounded-lg text-white font-bold">ডেলিভারি চার্জ দেখুন</button>
            <p class="text-center">আপনি কি জানতে চান, যেকোনো লোকেশনে আপনার পার্সেল পাঠাতে কত খরচ হতে পারে?<br>
                আমাদের বিস্তারিত <span class="text-red-600 font-bold">লিস্টটি দেখুন</span></p>
        </section>
        <section class="container space-y-12 py-10">
            <h2 class="text-4xl text-center font-bold">রেডএক্সের প্রতি গ্রাহকদের ভালোবাসা</h2>
            <div class="flex gap-3">
                <div class="w-1/3 border border-gray-300 p-6 space-y-2">
                    <div class="block"><button class="bg-gray-300 px-2 py-1">SME</button></div>
                    <i class="fa-solid fa-quote-left text-4xl text-red-600"></i>
                    <p>লজিস্টিকস পার্টনার হিসেবে রেডএক্স আমাদের বিশ্বস্ত ও গুরুত্বপূর্ণ অংশীদার। আমাদের পথচলায় রেডএক্সকে সবসময়ই অত্যন্ত প্রফেশনাল এবং আন্তরিক সাপোর্ট পেয়েছি।</p>
                    <div class="flex gap-4">
                        <img class="w-20" src="images/client/client-love1.webp" alt="">
                        <div>
                            <h2 class="font-bold">আবদুল্লাহ আল মোনায়েম</h2>
                            <p>আলফা কনজুমার ফুড</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 border border-gray-300 p-6 space-y-2">
                    <div class="block"><button class="bg-gray-300 px-2 py-1">SME</button></div>
                    <i class="fa-solid fa-quote-left text-4xl text-red-600"></i>
                    <p>লজিস্টিকস পার্টনার হিসেবে রেডএক্স আমাদের বিশ্বস্ত ও গুরুত্বপূর্ণ অংশীদার। আমাদের পথচলায় রেডএক্সকে সবসময়ই অত্যন্ত প্রফেশনাল এবং আন্তরিক সাপোর্ট পেয়েছি।</p>
                    <div class="flex gap-4">
                        <img class="w-20" src="images/client/client-love1.webp" alt="">
                        <div>
                            <h2 class="font-bold">আবদুল্লাহ আল মোনায়েম</h2>
                            <p>আলফা কনজুমার ফুড</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 border border-gray-300 p-6 space-y-2">
                    <div class="block"><button class="bg-gray-300 px-2 py-1">SME</button></div>
                    <i class="fa-solid fa-quote-left text-4xl text-red-600"></i>
                    <p>লজিস্টিকস পার্টনার হিসেবে রেডএক্স আমাদের বিশ্বস্ত ও গুরুত্বপূর্ণ অংশীদার। আমাদের পথচলায় রেডএক্সকে সবসময়ই অত্যন্ত প্রফেশনাল এবং আন্তরিক সাপোর্ট পেয়েছি।</p>
                    <div class="flex gap-4">
                        <img class="w-20" src="images/client/client-love1.webp" alt="">
                        <div>
                            <h2 class="font-bold">আবদুল্লাহ আল মোনায়েম</h2>
                            <p>আলফা কনজুমার ফুড</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container space-y-12 py-10">
            <h2 class="text-4xl text-center font-bold">আপনার সকল জিজ্ঞাসা</h2>
            <p class="text-center font-bold">সর্বাধিক জিজ্ঞাসিত প্রশ্নগুলি দেখুন, যেকোনো প্রয়োজনে আমরা আপনার পাশে আছি</p>
            <div class="w-1/2 space-y-4 mx-auto">
                <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        রেডএক্স কি?
                    </div>
                    <div class="collapse-content"> 
                      <p>রেডএক্স একটি প্রযুক্তিনির্ভর লজিস্টিকস কোম্পানি যা দেশজুড়ে এসএমই প্রোডাক্ট ডেলিভারি সেবা থেকে শুরু করে ব্যাক্তিগত ডকুমেন্ট, পার্সেল ডেলিভারি, এবং বড় কর্পোরেট কোম্পানিগুলোকে ইন্ডাস্ট্রিয়াল লজিস্টিকস সেবা প্রদান করে থাকে।</p>
                    </div>
                </div>
                <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" /> 
                    <div class="collapse-title text-xl font-medium">
                        রেডএক্স কি কি ধরনের সেবা দিয়ে থাকে?
                    </div>
                    <div class="collapse-content"> 
                      <p>যে কোন ব্যবসা বা ব্যক্তিগত প্রয়োজনে ডেলিভারি সংক্রান্ত সেবা প্রদানের একটি পূর্ণাঙ্গ প্ল্যাটফর্ম রেডএক্স। পার্সেল ডেলিভারি, বাল্ক শিপমেন্ট, লাইন হল, ট্রাক ভাড়া, লোডিং-আনলোডিং, ওয়্যারহাউজ, সার্ভিস হিসেবে লজিস্টিকস সল্যুশন এবং প্রয়োজন অনুযায়ী কাস্টমাইজড সল্যুশনও দিয়ে থাকে রেডএক্স।</p>
                    </div>
                </div>
                <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" /> 
                    <div class="collapse-title text-xl font-medium">
                        রেডএক্স ডেলিভারির কভারেজ এরিয়া কি?
                    </div>
                    <div class="collapse-content"> 
                      <p>রেডএক্স বাংলাদেশের ৬৪ টি জেলায় ডেলিভারি করে। আমাদের ডেলিভারি এরিয়া জানতে লিঙ্কে ক্লিক করুন https://redx.com.bd/coverage-area আপনার নিকটস্থ রেডএক্স হাবে যোগাযোগ করে আজই ডেলিভারি বুক করুন। রেডএক্স হাবের সম্পূর্ণ লিস্ট দেখতে এখানে ক্লিক করুন</p>
                    </div>
                </div>
                <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" /> 
                    <div class="collapse-title text-xl font-medium">
                        আপনাদের লজিস্টিকস চার্জ সম্পর্কে জানতে চাই?
                    </div>
                    <div class="collapse-content"> 
                      <p>মার্চেন্টদের পার্সেল ডেলিভারিতে আমরা প্রতি কেজি অনুযায়ী চার্জ করে থাকি l ঢাকার ভেতরে প্রতি কেজি ৬৯ টাকা, ঢাকার আশেপাশে ১১৫ এবং ঢাকার বাইরে ১৫০ টাকা থেকে চার্জ শুরু হয়। ঢাকার আশেপাশে এবং বাইরে প্রতি ডেলিভারিতে ১% ক্যাশ অন ডেলিভারি চার্জ প্রযোজ্য। প্রতিটি চার্জের সাথে ভ্যাট সংযুক্ত।

                        ব্যক্তিগত পার্সেল পাঠানোর চার্জ সম্পর্কে জানতে আমাদের হোম ডেলিভারি এবং হাব ডেলিভারির প্রাইস চার্টটি দেখুন।
                        
                        এন্টারপ্রাইজ লজিস্টিকসের জন্য আমাদের দক্ষ সেলস টিম রয়েছে। ০৯৬১০০০৭৩৩৯ নাম্বারে কল দিয়ে এ সংক্রান্ত সকল তথ্য পাবেন।
                        
                        অনুগ্রহপূর্বক মনে রাখবেন ওজন এবং অবস্থানের ভিত্তিতে ডেলিভারি চার্জ পরিবর্তন হতে পারে  এ বিষয়ে আরও বিস্তারিত জানতে লিঙ্কে ক্লিক করুন এবং আমাদের প্রাইস সম্পর্কে আরো বিস্তারিত জানুন।</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container flex bg-black text-white py-12 px-16 gap-6 items-center">
            <div class="w-1/2">
                <div class="mx-auto">
                    <h2 class="text-4xl font-bold">রেডএক্সের পার্টনার হোন আজই</h2>
                    <p class="font-bold">সাইন-আপ করুন করুন মাত্র দুই মিনিটে</p>
                </div>
            </div>
            <div class="w-1/2">
                <button class="bg-red-600 px-12 py-4 rounded-lg block mx-auto w-fit">সাইন-আপ কারুন</button>
            </div>
        </section>
        <section class="container space-y-12 py-20">
          <h2 class="text-4xl text-center font-bold">মিডিয়াতে রেডএক্স</h2>
          <div class="grid grid-cols-3 gap-6">
            <div class="border border-gray-300 rounded-lg p-8 space-y-3">
                <img class="w-48" src="images/media/Redx-news3.webp" alt="">
                <p>September 7, 2021</p>
                <h3 class="text-xl font-bold">Commerce platform Shopup raises $75 million in Bangladesh</h3>
            </div>
            <div class="border border-gray-300 rounded-lg p-8 space-y-3">
                <img class="w-48" src="images/media/Redx-news4.png" alt="">
                <p>September 7, 2021</p>
                <h3 class="text-xl font-bold">Commerce platform Shopup raises $75 million in Bangladesh</h3>
            </div>
            <div class="border border-gray-300 rounded-lg p-8 space-y-3">
                <img class="w-48" src="images/media/Redx-news2.png" alt="">
                <p>September 7, 2021</p>
                <h3 class="text-xl font-bold">Commerce platform Shopup raises $75 million in Bangladesh</h3>
            </div>
            <div class="border border-gray-300 rounded-lg p-8 space-y-3">
                <img class="w-48" src="images/media/Redx-news5.png" alt="">
                <p>September 7, 2021</p>
                <h3 class="text-xl font-bold">Commerce platform Shopup raises $75 million in Bangladesh</h3>
            </div>
            <div class="border border-gray-300 rounded-lg p-8 space-y-3">
                <img class="w-48" src="images/media/Redx-news1.png" alt="">
                <p>September 7, 2021</p>
                <h3 class="text-xl font-bold">Commerce platform Shopup raises $75 million in Bangladesh</h3>
            </div>
            <div class="border border-gray-300 rounded-lg p-8 space-y-3">
                <img class="w-48" src="images/media/Redx-news2.png" alt="">
                <p>September 7, 2021</p>
                <h3 class="text-xl font-bold">Commerce platform Shopup raises $75 million in Bangladesh</h3>
            </div>
          </div>
        </section>
        <footer class="bg-gray-100 py-28">
            <div class="container gap-10 flex justify-between px-16">
                <div class="space-y-5">
                    <img src="images/new-redx-logo.svg" alt="">
                    <p>দ্রুততম সল্যুশনের জন্য রেডএক্স অ্যাপটি ডাউনলোড করুন</p>
                    <img src="images/google-play-badge.svg" alt="">
                </div>
                <div class="space-y-5">
                    <h3 class="font-bold">গুরুত্বপূর্ণ লিংক</h3>
                    <div class="flex flex-col gap-3">
                        <a href="">কুরিয়ার</a>
                        <a href="">এন্টারপ্রাইজ</a>
                        <a href="">কভারেজ এরিয়া</a>
                        <a href="">প্রাইভেসী পলিসি</a>
                        <a href="">FAQ</a>
                    </div>
                </div>
                <div class="space-y-5">
                    <h3 class="font-bold">যোগাযোগ</h3>
                   <p>শপআপ, ৪র্থ তলা, এসকেএস <br> টাওয়ার, ৭ ভিআইপি রোড, মহাখালী, <br> ঢাকা</p>
                   <p>০৯৬১০০০৭৩৩৯</p>
                   <p>contact@redx.com.bd</p>
                </div>
                <div class="space-y-5">
                    <h3 class="font-bold">সংযুক্ত হন</h3>
                    <div class="flex gap-4">
                        <img src="images/social/fb-icon.svg" alt="">
                        <img src="images/social/linkedIn-icon.svg" alt="">
                        <img src="images/social/yt-icon.svg" alt="">
                    </div>
                    <p class="text-xs text-gray-600">© Redx 2023. All Rights reserved</p>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>