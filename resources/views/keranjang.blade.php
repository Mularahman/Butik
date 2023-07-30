@extends('layouts.app')
@section('title')
    Keranjang
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
@section('content')
    <section class="mt-32">
        <div class="container">

            <ol class="px-8 ml-3 flex flex-wrap ">
                <li class=" text-dark opacity-50"><a href="/home">Home</a></li>
                <span class="mx-2 text-gray-400">/</span>
                <li class=" font-bold">Keranjang</li>
            </ol>


        </div>
        <div class="container p-4 px-4 ">
            <div class="px-8">
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-1 md:grid-cols-1">
                    <div class="lg:col-span-2 ">
                        <div class="flex-wrap flex">

                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white rounded-2xl bg-clip-border">
                                <div
                                    class="border-black/12.5  relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white  bg-clip-border ">

                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto mb-5">
                                            <div class="px-4 mb-6">

                                                <h5 class="mb-0 font-bold dark:text-white">Keranjang</h5>
                                                <p class="mb-0 leading-normal text-sm">Informasi Keranjang</p>
                                            </div>
                                            <table
                                                class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                                <thead class="align-bottom">
                                                    <tr>
                                                        <th
                                                            class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                            No</th>
                                                        <th
                                                            class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                            Produk</th>
                                                        <th
                                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                            Kuantitas</th>
                                                        <th
                                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                            Sub Total</th>
                                                        <th
                                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                            Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $total = 0;
                                                        $diskon = 0;
                                                        $totalbayar = 0;

                                                    @endphp
                                                    @foreach ($keranjang as $item)
                                                        @php
                                                            $subtotal = $item->produk->hargaproduk * $item->jumlah;
                                                        @endphp
                                                        <tr>


                                                            <td
                                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                                                <div class="flex px-2 py-1">
                                                                    <div>
                                                                        <span
                                                                            class="px-3 py-3 items-center justify-center">{{ $loop->iteration }}</span>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td
                                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                                                <div class="flex px-2 py-1">
                                                                    <div>
                                                                        <img src="{{ asset('storage/' . $item->produk->gambar->first()->thumbnail) }}"
                                                                            class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                                            alt="user1" />
                                                                    </div>
                                                                    <div class="flex flex-col justify-center">
                                                                        <h6 class="mb-0 leading-normal text-sm">
                                                                            {{ $item->produk->namaproduk }}
                                                                        </h6>
                                                                        <p
                                                                            class="mb-0 leading-tight text-xs text-slate-400">
                                                                            By {{ $item->produk->users->nama_toko }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                                                <span
                                                                    class="font-semibold leading-tight text-xs">{{ number_format($item->jumlah) }}</span>
                                                            </td>
                                                            <td
                                                                class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                                                <span class="font-semibold leading-tight text-xs">Rp.
                                                                    {{ number_format($subtotal) }}
                                                                </span>
                                                            </td>
                                                            <td
                                                                class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">

                                                                <button type="button"
                                                                    data-modal-target="popup-modal{{ $item->id }}"
                                                                    data-modal-toggle="popup-modal{{ $item->id }}"
                                                                    data-tooltip-target="delete"
                                                                    class="text-white align-middle transition-all cursor-pointer bg-gradient-to-tl from-red-700 to-red-500 ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs   focus:outline-none  font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center mr-2 ">

                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                                    </svg>
                                                                </button>
                                                                <div id="popup-modal{{ $item->id }}" tabindex="-1"
                                                                    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                                    @include('hapuskeranjang')
                                                                </div>

                                                                <div id="delete" role="tooltip"
                                                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    Delete
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>


                                                            </td>

                                                        </tr>

                                                    @endforeach

                                                </tbody>

                                            </table>
                                            <div
                                            class="flex flex-wrap items-center justify-end border-t border-solid shrink-0 px-3 pt-4 border-slate-100 rounded-b-xl">
                                            <a type="button" href="/buatpesanan"
                                                class="p-2.5  mt-5 w-full text-sm font-medium text-center text-white bg-gradient-to-tl from-orange-400 hover:scale-102  to-yellow-300 rounded-lg inline-block cursor-pointer border-0 bg-transparent">
                                                Checkout
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>




    </section>
@endsection
