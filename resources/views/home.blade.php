@extends('layouts.app')
@section('title')
    Home
@endsection
@section('keranjang')
    <a href="/keranjang" type="button"
        class="relative inline-flex items-center p-2 me-4 text-sm font-medium text-center text-white bg-gradient-to-tl from-yellow-300 to-orange-400 rounded-3.5xl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4"
            viewBox="0 0 16 16">
            <path
                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
        </svg>
        <span class="sr-only">Notifications</span>
        <div
            class="absolute inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-1.5 p-1 -right-2 dark:border-gray-900">
            {{ $keranjang->count() }}</div>
    </a>
@endsection
@section('search')
    <form action="/kategori" method="post">
        @csrf
        <div class="flex">
            <input type="text" name="cari" placeholder="Cari Produk" style="width: 384px"
                class="bg-gray-50 border me-2 border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
            <button type="submit"
                class="p-2.5   w-20 text-sm font-medium text-center text-white bg-gradient-to-tl from-orange-400 hover:scale-102  to-yellow-300 rounded-full inline-block cursor-pointer border-0 bg-transparent">Cari</button>
        </div>
    </form>
@endsection
@section('content')
    <section class="mb-[40px]">

        <div id="animation-carousel" class="relative w-full h-24 min-h-screen" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg md:h-96 h-24 min-h-full">
                <!-- Item 2 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <div class="container">

                        <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
                            <div class="container z-10">
                                <div class="relative" style="margin-top: 100px">
                                    <div class="grid grid-cols-2  lg:grid-cols-4   gap-4">
                                        <div class="col-span-2">
                                            <div class="px-8 py-8">
                                                <div class="flex flex-col w-full max-w-full px-3 mx-auto mt-8">

                                                    <h2
                                                        class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-yellow-300 to-orange-400 bg-clip-text">
                                                        Discover Your True Style
                                                    </h2>
                                                    <p class="py-3">
                                                        Temukan Fashion yang Menginspirasi di Setiap Langkahmu.
                                                    </p>

                                                    <a href="#produk" type="button"
                                                        class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-orange-400 to-yellow-300 w-40 rounded-3.5xl mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-5 py-3 text-center align-middle font-bold uppercase transition-all text-white">Pesan
                                                        Sekarang</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden  lg:block">
                                            <div class="px-8 py-8" style="padding-bottom: 20px">
                                                <div class="relative top-0  w-44  rounded-bl-xl md:block"
                                                    style="margin-left: 170px">
                                                    <img class="w-44 h-60 rounded-lg absolute inset-x-0 top-0 z-0 -ml-20 bg-cover skew-x-10"
                                                        src="/frontend/img/1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden  lg:block">
                                            <div class="px-8 py-8" style="padding-top: 20px">
                                                <div class="relative top-0  w-44  ml-[30px] rounded-bl-xl md:block">
                                                    <img class="w-44 h-60 rounded-lg absolute inset-x-0 top-0 z-0 -ml-[190px] bg-cover skew-x-10"
                                                        src="/frontend/img/2.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- Item 1 -->
                <div class="hidden duration-200 ease-linear  " data-carousel-item>
                    <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-screen h-24">
                        <div class="container z-10">
                            <div class="flex flex-wrap mt-0 -mx-3">
                                <div
                                    class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">

                                    <h2
                                        class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-yellow-300 to-orange-400 bg-clip-text">
                                        Make Your Beautiful clothes
                                    </h2>
                                    <p class="py-3">
                                        Buat baju sesuai keinginanmu agar makin percaya diri untuk tampil diacara
                                        penting.
                                    </p>

                                    <a href="#produk" type="button"
                                        class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-orange-400 to-yellow-300 w-40 rounded-3.5xl mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-5 py-3 text-center align-middle font-bold uppercase transition-all text-white">Pesan
                                        Sekarang</a>



                                </div>
                                <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                                    <div
                                        class="absolute top-0 hidden w-3/4 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
                                        <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10"
                                            style="background-image: url('/frontend/img/header.png')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>


    </section>
    <section class="mt-8 mb-8">

        <div class="container ">
            <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-4  flex-wrap ">

                <div
                    class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap justify-center  -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="text-center align-middle">
                                    <div
                                        class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-orange-300 to-yellow-400 shadow-soft-2xl">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="text-white relative top-2.5"
                                            viewBox="0 0 640 512">
                                            <path
                                                d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z" />
                                        </svg>
                                    </div>
                                    <h5 class="mb-0 text-sm font-bold">
                                        Pengiriman Cepat
                                        {{--  <span
                                        class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>  --}}
                                    </h5>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-xs">Kurir yang
                                        handal
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div
                    class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap justify-center -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="text-center align-middle">
                                    <div
                                        class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-orange-300 to-yellow-400 shadow-soft-2xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="relative text-white top-2.5"
                                            viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z" />
                                        </svg>
                                    </div>
                                    <h5 class="mb-0 text-sm font-bold">
                                        Kualitas Terjamin
                                        {{--  <span
                                        class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>  --}}
                                    </h5>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-xs">Garansi Produk
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div
                    class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap justify-center -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="text-center align-middle">
                                    <div
                                        class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-orange-300 to-yellow-400 shadow-soft-2xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor"
                                            class="bi bi-credit-card-2-back-fill text-white relative top-2.5"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
                                        </svg>
                                    </div>
                                    <h5 class="mb-0 text-sm font-bold">Pembayaran Mudah
                                        {{--  <span
                                        class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>  --}}
                                    </h5>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-xs">Go-Pay, M-Banking, dll.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div
                    class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap justify-center -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="text-center align-middle">
                                    <div
                                        class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-orange-300 to-yellow-400 shadow-soft-2xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor"
                                            class="bi bi-person-fill-check text-white relative top-2.5"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path
                                                d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                                        </svg>
                                    </div>
                                    <h5 class="mb-0 text-sm font-bold">
                                        Admin Bersahabat
                                        {{--  <span
                                        class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>  --}}
                                    </h5>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-xs">Admin Yang Ramah dan
                                        edukatif
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
    <section class="mt-8 mb-8" id="produk">
        <h4 class="text-center">Menjual Berbagai Macam Produk</h4>
        <hr
            class="h-px
        mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
        <div class="container ">
            <div class="row flex-wrap flex">

                <div
                    class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex-wrap justify-center -mx-3 grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-4 ">
                            @foreach ($produk as $item)
                                @if ($item->users->status_toko == 1)
                                    <div class=" px-3 py-3">
                                        <img class="h-56 w-full rounded-lg justify-center align-middle items-center"
                                            src="{{ asset('storage/' . $item->gambar->first()->thumbnail) }}"
                                            alt="">
                                        <div class="grid grid-cols-2 gap-4 mt-4 mb-4 w-full">
                                            <div class="flex justify-start">
                                                <div>
                                                    <span class="">{{ $item->namaproduk }}</span> <br>
                                                </div>
                                            </div>
                                            <div class="flex justify-between">
                                                <div class="text-start">
                                                    <span
                                                        class="font-bold text-transparent bg-gradient-to-tl from-yellow-300 to-orange-400 bg-clip-text">Rp.
                                                        {{ number_format($item->hargaproduk) }}</span>
                                                </div>
                                                <div>
                                                    <div class="font-bold text-end ">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $rating)
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-star-fill text-orange-400"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                </svg>
                                                            @else
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-star-fill " viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                </svg>
                                                            @endif
                                                        @endfor



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex mt-4 mb-4 space-x-3 md:mt-6">
                                            <a href="/detail-produk/{{ $item->id }}"
                                                class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-orange-400 to-yellow-300 w-28 rounded-lg mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-2 py-3 text-center align-middle font-bold uppercase transition-all text-white"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-eye-fill me-2" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>Detail</a>
                                            <form class="" action="/produk_add_keranjangs/{{ $item->id }}"
                                                method="POST">
                                                @csrf


                                                <button type="submit"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-cart-plus-fill me-2"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                                    </svg> Keranjang
                                                </button>




                                            </form>


                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>


                    </div>
                </div>

            </div>
        </div>
        </div>

    </section>
    {{--  <section class="mt-8 mb-8 bg-gray-300">
        <h4 class="text-center pt-10">Mengapa Memilih Toko Butik Imun ?</h4>
        <hr
            class="h-px
        mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
        <p class="text-center ">Kami berusaha untuk memberikan anda pengalaman yang terbaik dalam membuat produk ataupun
            membeli produk.</p>
        <div class="container pb-8 pt-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-4  flex-wrap ">



                <div class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words ">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap justify-center  -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="text-center align-middle">
                                    <div
                                        class="inline-block w-20 h-20 text-center rounded-lg bg-gradient-to-tl from-orange-300 to-yellow-400 shadow-soft-2xl">
                                        <i class="ni ni-money-coins text-lg relative top-3.5 text-white"
                                            aria-hidden="true"></i>
                                    </div>
                                    <h5 class="mb-0 text-sm font-bold">
                                        Bahan Terbaik

                                    </h5>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words ">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap justify-center -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="text-center align-middle">
                                    <div
                                        class="inline-block w-20 h-20 text-center rounded-lg bg-gradient-to-tl from-orange-300 to-yellow-400 shadow-soft-2xl">
                                        <i class="ni ni-money-coins text-lg relative top-3.5 text-white"
                                            aria-hidden="true"></i>
                                    </div>
                                    <h5 class="mb-0 text-sm font-bold">
                                        Kualitas Premium

                                    </h5>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words ">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap justify-center -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="text-center align-middle">
                                    <div
                                        class="inline-block w-20 h-20 text-center rounded-lg bg-gradient-to-tl from-orange-300 to-yellow-400 shadow-soft-2xl">
                                        <i class="ni ni-money-coins text-lg relative top-3.5 text-white"
                                            aria-hidden="true"></i>
                                    </div>
                                    <h5 class="mb-0 text-sm font-bold">
                                        Produk Original
                                    </h5>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words ">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap justify-center -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div class="text-center align-middle">
                                    <div
                                        class="inline-block w-20 h-20 text-center rounded-lg bg-gradient-to-tl from-orange-300 to-yellow-400 shadow-soft-2xl">
                                        <i class="ni ni-money-coins text-lg relative top-3.5 text-white"
                                            aria-hidden="true"></i>
                                    </div>
                                    <h5 class="mb-0 text-sm font-bold">
                                        Desain Inovatif
                                    </h5>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>  --}}
    <section class="mt-8 mb-8" id="produk">
        <h4 class="text-center">Produk Best Seller Untukmu!</h4>
        <hr
            class="h-px
        mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
        <div class="container ">
            <div class="row flex-wrap flex">

                <div class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white ">
                    <div class="flex-auto p-4">
                        <div class="flex-wrap justify-center -mx-3 grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-4 ">
                            @foreach ($best as $item)
                                @if ($item->users->status_toko == 1)
                                    <div class=" px-3 py-3">
                                        <img class="h-56 w-full rounded-lg justify-center align-middle items-center"
                                            src="{{ asset('storage/' . $item->gambar->first()->thumbnail) }}"
                                            alt="">
                                        <div class="grid grid-cols-2 gap-4 mt-4 mb-4 w-full">
                                            <div class="flex justify-start">
                                                <div>
                                                    <span class="">{{ $item->namaproduk }}</span> <br>
                                                </div>
                                            </div>
                                            <div class="flex justify-between">
                                                <div class="text-start">
                                                    <span
                                                        class="font-bold text-transparent bg-gradient-to-tl from-yellow-300 to-orange-400 bg-clip-text">Rp.
                                                        {{ number_format($item->hargaproduk) }}</span>
                                                </div>
                                                <div>
                                                    <div class="font-bold text-end ">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $rating)
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-star-fill text-orange-400"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                </svg>
                                                            @else
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-star-fill " viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                </svg>
                                                            @endif
                                                        @endfor



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex mt-4 mb-4 space-x-3 md:mt-6">
                                            <a href="/detail-produk/{{ $item->id }}"
                                                class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-orange-400 to-yellow-300 w-28 rounded-lg mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-2 py-3 text-center align-middle font-bold uppercase transition-all text-white"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-eye-fill me-2" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>Detail</a>
                                            <form class="" action="/produk_add_keranjangs/{{ $item->id }}"
                                                method="POST">
                                                @csrf


                                                <button type="submit"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-cart-plus-fill me-2"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                                    </svg> Keranjang
                                                </button>




                                            </form>


                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>


                    </div>
                </div>

            </div>
        </div>
        </div>

    </section>
    <section class="mt-8 mb-8">
        <h4 class="text-center">Kamu Cari Kategori Apa ?</h4>
        <hr
            class="h-px
        mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
        <div class="container ">
            <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-4  flex-wrap ">
                @foreach ($kategori as $item)
                    <a href="/kategori/{{ $item->id }}" type="button">
                        <div
                            class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap justify-center  -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div class="text-center align-middle">
                                            <div
                                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-orange-300 to-yellow-400 shadow-soft-2xl">

                                                <img class="h-8 w-8 rounded-lg justify-center relative top-2.5 flex-shrink-0 content-center align-middle items-center"
                                                    style="left: 8px" src="{{ asset('storage/' . $item->icon) }}"
                                                    alt="">
                                            </div>
                                            <h5 class="mb-0 text-sm font-bold">
                                                {{ $item->kategori }}
                                                {{--  <span
                                        class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>  --}}
                                            </h5>
                                            {{--  <p class="mb-0 font-sans font-semibold leading-normal text-xs">Kurir yang
                                        handal
                                    </p>  --}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>
        </div>

    </section>
    {{--  <section class="mt-3 mb-3">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-4   flex-wrap">
                <div class="">
                    <div class="relative flex flex-col min-w-0 px-8 py-8">


                        <h2
                            class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-yellow-300 to-orange-400 bg-clip-text">
                            Best Seller
                        </h2>
                        <p class="py-3">
                            Produk Best Seller yang kami miliki.
                        </p>

                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search" required>
                            </div>
                            <button type="submit"
                                class="p-2.5 ml-2 text-sm font-medium text-white bg-gradient-to-tl from-orange-400 hover:scale-102  to-yellow-300 rounded-lg inline-block cursor-pointer border-0 bg-transparent">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Cari Produk</span>
                            </button>
                        </form>

                    </div>
                </div>
                <div class="">
                    <div id="indicators-carousel1" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-96 overflow-hidden rounded-2xl md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <div class="flex items-center justify-center">
                                    <div
                                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                        <div class="flex flex-col items-center ">
                                            <img class="h-48 w-40 mt-4 rounded-lg justify-center align-middle items-center"
                                                src="/frontend/img/model1.png" alt="">
                                            <span class="pt-4">Baju Batik Kombinasi</span>
                                            <span
                                                class="font-bold text-transparent bg-gradient-to-tl from-yellow-300 to-orange-400 bg-clip-text">Rp.
                                                350.000</span>
                                            <div class="flex mt-4 mb-4 space-x-3 md:mt-6">
                                                <a href="#"
                                                    class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-orange-400 to-yellow-300 w-28 rounded-lg mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-2 py-3 text-center align-middle font-bold uppercase transition-all text-white">Beli</a>
                                                <a href="#"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">+
                                                    Keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <div class="flex items-center justify-center">
                                    <div
                                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                        <div class="flex flex-col items-center ">
                                            <img class="h-48 w-40 mt-4 rounded-lg justify-center align-middle items-center"
                                                src="/frontend/img/model3.png" alt="">
                                            <span class="pt-4">Baju Batik Kombinasi</span>
                                            <span
                                                class="font-bold text-transparent bg-gradient-to-tl from-yellow-300 to-orange-400 bg-clip-text">Rp.
                                                350.000</span>
                                            <div class="flex mt-4 mb-4 space-x-3 md:mt-6">
                                                <a href="#"
                                                    class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-orange-400 to-yellow-300 w-28 rounded-lg mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-2 py-3 text-center align-middle font-bold uppercase transition-all text-white">Beli</a>
                                                <a href="#"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">+
                                                    Keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}
    <section class="mt-3 mb-3 bg-gray-300">
        <div class="container pb-5">
            <div class="grid grid-cols-1  gap-4 flex-wrap">
                <div class=" justify-center items-center">

                    <h4 class="text-center pt-10">Apa Yang Meraka Katakan ?</h4>
                    <hr
                        class="h-px
        mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
                    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-96 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <div class="flex justify-center items-center">
                                    <div
                                        class="w-full lg:w-1/2 h-auto bg-white border  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                        <div class="flex flex-col items-center pb-10">
                                            <img class="w-24 h-24 mb-3 mt-8 rounded-full shadow-lg"
                                                src="/assets/img/team-1.jpg" alt="Bonnie image" />
                                            <p class="text-center pt-8 pb-8">" Saya Menyukai Pelayanannya Yang Mudah "</p>
                                            <h5
                                                class="mb-1 text-lg opacity-70  font-bold uppercase text-dark-700 dark:text-white">
                                                Eliesa
                                            </h5>
                                            <span class="text-sm text-gray-500 dark:text-gray-400">Pelanggan</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <div class="flex justify-center items-center">
                                    <div
                                        class="w-full lg:w-1/2 h-auto bg-white border  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                        <div class="flex flex-col items-center pb-10">
                                            <img class="w-24 h-24 mb-3 mt-8 rounded-full shadow-lg"
                                                src="/assets/img/team-2.jpg" alt="Bonnie image" />
                                            <p class="text-center pt-8 pb-8">" Bahan untuk membuat produk memiliki kualitas
                                                premium "</p>
                                            <h5
                                                class="mb-1 text-lg opacity-70  font-bold uppercase text-gray-700 dark:text-white">
                                                Sharelock Holmes
                                            </h5>
                                            <span class="text-sm text-gray-500 dark:text-gray-400">Pelanggan</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <div class="flex justify-center items-center">
                                    <div
                                        class="w-full lg:w-1/2 h-auto bg-white border  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                        <div class="flex flex-col items-center pb-10">
                                            <img class="w-24 h-24 mb-3 mt-8 rounded-full shadow-lg"
                                                src="/assets/img/team-3.jpg" alt="Bonnie image" />
                                            <p class="text-center pt-8 pb-8">" Saya membuat style sendiri sesuai
                                                keinginan saya dari produk toko ini "</p>
                                            <h5
                                                class="mb-1 text-lg opacity-70  font-bold uppercase text-gray-700 dark:text-white">
                                                Dr Watson
                                            </h5>
                                            <span class="text-sm text-gray-500 dark:text-gray-400">Pelanggan</span>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
