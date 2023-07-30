@extends('pelanggan.layouts.app')
@section('title')
    Transaction
@endsection
@section('keranjang')
    <a href="/keranjang" type="button"
        class="relative inline-flex items-center p-2 me-4 text-sm font-medium text-center text-white bg-gradient-to-tl from-yellow-300 to-orange-400 rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
@section('breadcrum')
    <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page">Transaction</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Transaction Buy Product</h6>
    </nav>
@endsection
@section('content')

    <section class="px-10 py-2">

        <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
            <li>
                <a class="block font-bold  me-3 px-4 py-2 mr-2 transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                    href="/transaction">
                    My Transaction
                </a>
            </li>
            <li>
                <a class="block font-bold  me-3 px-4 py-2 mr-2 transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                    href="/transaction-confirmed">
                    Confirmed
                </a>
            </li>
            <li>
                <a class="block font-bold border-b-2 me-3 px-4 py-2 mr-2 transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                    href="/transaction-packing">
                    Packing
                </a>
            </li>
            <li>
                <a class="block font-bold  me-3 px-4 py-2 mr-2 transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                    href="/transaction-delivered">
                    Delivered
                </a>
            </li>
            <li>
                <a class="font-bold me-3 block px-4 py-2 mr-2 transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                    href="/transaction-complated">
                    Complated
                </a>
            </li>

        </ul>





        @foreach ($transactiondetail as $transaksi)

        <div
            class="lack/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mt-3">

            <div class="flex-auto px-0  py-2">
                <div class="overflow-x-auto table-responsive">

                    <table id="dataTable" datatable id="datatable-search"
                        class="table  table-flush items-center w-full mb-0 align-top border-gray-200 text-slate-700"
                        style="max-height: 400px !important">

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 px-8 border-b-2">

                            <div>
                                <div class="font-bold flex ml-4 mt-3">
                                    <h3 class="me-2 text-slate-700">{{ $transaksi->produk->users->nama_toko }}</h3>
                                    <button></button>



                                </div>
                            </div>
                            <div>
                                <div class="text-center justify-end flex items-content-end mr-4">

                                    <div class="flex py-2.5 ">

                                        @if ($transaksi->status == 'PENDING')
                                            <span
                                                class=" text-orange-500 text-xs font-medium  px-2.5 py-0.5 rounded ">Menunggu
                                                Pembayaran |</span>
                                        @elseif ($transaksi->status == 'DIKONFIRMASI')
                                            <span
                                                class="text-orange-500 text-xs font-medium  px-2.5 py-0.5 rounded ">Pesanan
                                                Dikonfirmasi |</span>
                                        @elseif ($transaksi->status == 'DIKEMAS')
                                            <span
                                                class="text-orange-500 text-xs font-medium  px-2.5 py-0.5 rounded ">Sedang
                                                Dikemas |</span>
                                        @elseif ($transaksi->status == 'DALAM PERJALANAN')
                                            <span
                                                class="text-orange-500 text-xs font-medium  px-2.5 py-0.5 rounded ">Paket
                                                Dalam Perjalanan |</span>
                                        @elseif ($transaksi->status == 'SELESAI')
                                            <span
                                                class="text-green-500 text-xs font-medium  px-2.5 py-0.5 rounded ">Pesanan
                                                Telah Diterima |</span>
                                        @endif
                                        @if ($transaksi->transaction->transaction_status == 'PENDING')
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">UNPAID</span>
                                        @elseif ($transaksi->transaction->transaction_status == 'SUCCESS')
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">PAID</span>
                                        @elseif ($transaksi->transaction->transaction_status == 'CANCELLED')
                                            <
                                                class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                                CANCELLED</ @endif

                                            <span
                                                class="font-semibold leading-tight text-sm text-slate-700">{{ $transaksi->transaction->tanggal }}</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <tbody>
                            <tr class="border-b-2">
                                            <td class="p-2 align-middle text-center bg-transparent  whitespace-nowrap">
                                                <div class="mt-2 avatar-group">
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                                <div class="flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('storage/' . $transaksi->produk->gambar->first()->thumbnail) }}"
                                                            class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-12 w-12 rounded-xl"
                                                            alt="user1" />
                                                    </div>
                                                    <div class="flex flex-col justify-center">
                                                        <h6 class="mb-0 font-semibold leading-normal text-sm">
                                                            {{ $transaksi->produk->namaproduk }}
                                                        </h6>
                                                        <p class="mb-0 leading-tight text-xs text-slate-400">
                                                            Warna : {{ $transaksi->produk->warnaproduk }},
                                                            {{ $transaksi->produk->ukuranproduk }}
                                                        </p>
                                                        <h6 class="mb-0 font-semibold leading-normal text-sm">
                                                            {{ $transaksi->qty }} x
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>

                                            </div>
                                        </td>


                                <td class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" line-throughs font-semibold  leading-tight text-md text-gray-400">Rp
                                        {{ number_format($transaksi->harga) }}</span>
                                    <span class="font-semibold leading-tight text-md text-slate-700">Rp
                                        {{ number_format($transaksi->transaction->total_harga) }}</span>
                                </td>
                            </tr>
                            <tr class="border bg-gray-100">
                                <td colspan="2"
                                    class="p-2 leading-normal text-right align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-bold leading-tight text-xs">Total Pesanan :
                                    </span>
                                </td>
                                <td colspan="2"
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-md">Rp
                                        {{ number_format($transaksi->transaction->total_harga) }}</span>
                                </td>
                            </tr>
                            <tr class="border-b-2 bg-gray-100">
                                <td colspan="2"
                                    class="p-2 leading-normal text-right align-middle bg-transparent  text-sm whitespace-nowrap">

                                </td>
                                <td colspan="2"
                                    class="p-2 leading-normal text-center align-middle bg-transparent flex justify-center text-sm whitespace-nowrap">
                                    <div class="flex px-2 py-1">
                                        <a type="button" href="/detail-produk/{{ $transaksi->produk->id }}"
                                            class="text-white align-middle transition-all cursor-pointer bg-gradient-to-tl from-orange-400 to-yellow-300 ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs   focus:outline-none  font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center mr-2 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class=" me-2"
                                                fill="currentColor" viewBox="0 0 576 512">
                                                <path
                                                    d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                            </svg>
                                            Beli Lagi
                                        </a>
                                        <a type="button" href="/transaction_detailss/{{ $transaksi->id }}"
                                            class="text-gray-400 align-middle transition-all cursor-pointer bg-transparant border-2 border-solid  ease-soft-in tracking-tight-soft shadow-soft-md bg-150  active:opacity-85 hover:shadow-soft-xs   focus:outline-none hover:scale-105 hover:bg-transparent font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center mr-2 ">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-eye-fill me-2" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path
                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg> Lihat Detail
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    @endforeach

    </section>
@endsection
