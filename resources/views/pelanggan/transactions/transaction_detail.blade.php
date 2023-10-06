@extends('pelanggan.layouts.app')
@section('title')
    Transaction Detail
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
                aria-current="page">Transactions</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Transacions Detail</h6>
    </nav>
@endsection
@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 ">



                @foreach ($transactiondetail as $transaksi)
                    <div
                        class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl mb-4 border-0 border-solid bg-white bg-clip-border">

                        <div class="flex-auto  px-0 pb-2">
                            <div class="overflow-x-auto">

                                <div class="px-6 py-3 lg:px-8">
                                    <h6 class="mb-0 font-bold capitalize">{{ $transaction->kode }}</h6>


                                    <div class="space-y-6">


                                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">



                                            <a href="#">
                                                <img class="h-48 w-full p-2 rounded-[20px]"
                                                    src="{{ asset('storage/' . $transaksi->produk->gambar->first()->thumbnail) }}"
                                                    alt="" />
                                            </a>



                                            <div class="lg:grid-rows-2">
                                                <div>
                                                    <label for="customer"
                                                        class="block mb-2 text-muted text-sm font-medium ">Nama
                                                        Pembeli</label>
                                                    <label for="customer"
                                                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transaksi->transaction->user->name }}</label>

                                                </div>
                                                <div>
                                                    <label for="customer"
                                                        class="block mb-2 text-muted text-sm font-medium ">Tanggal
                                                        Transaksi</label>
                                                    <label for="customer"
                                                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transaksi->transaction->tanggal }}</label>


                                                </div>
                                                <div>
                                                    <label for="customer"
                                                        class="block mb-2 text-muted text-sm font-medium ">Total
                                                        Harga</label>
                                                    <label for="customer"
                                                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Rp.
                                                        {{ number_format($transaksi->transaction->total_harga - $transaksi->transaction->diskon + $transaksi->ongkir) }}</label>


                                                </div>
                                            </div>
                                            <div class="lg:grid-rows-2">
                                                <div>
                                                    <label for="customer"
                                                        class="block mb-2 text-muted text-sm font-medium ">Nama
                                                        Produk</label>
                                                    <label for="customer"
                                                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transaksi->produk->namaproduk }}</label>

                                                </div>

                                                <div>
                                                    <label for="customer"
                                                        class="block mb-2 text-muted text-sm font-medium ">Qty</label>
                                                    <label for="customer"
                                                        class="block mb-2 text-md font-medium text-gray-900 ">{{ $transaksi->qty }}</label>


                                                </div>
                                                <div>
                                                    <label for="customer"
                                                        class="block mb-2 text-muted text-sm font-medium ">Status
                                                        Pembayaran</label>
                                                        @if ($transaksi->transaction->transaction_status == 'SUCCESS')
                                                        <label for="customer"
                                                            class="block mb-2 text-md font-medium text-green-500 ">{{ $transaksi->transaction->transaction_status }}</label>
                                                        @else

                                                        <label for="customer"
                                                            class="block mb-2 text-md font-medium text-red-500 ">{{ $transaksi->transaction->transaction_status }}</label>
                                                        @endif


                                                </div>

                                            </div>


                                        </div>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">
                                            <div>
                                                <h6 class="mb-3 font-bold capitalize">Informasi Pengiriman</h6>
                                                <div class="">


                                                    <span for="customer"
                                                        class="block mb-2 text-md font-medium text-slate-400 dark:text-white">
                                                        <span
                                                            class="text-gray-700">{{ $transaksi->transaction->user->name }}
                                                        </span>|
                                                        {{ $transaksi->transaction->user->no_hp }} <br>
                                                        {{ $transaksi->transaction->user->alamat1 }},
                                                        {{ $transaksi->transaction->user->alamat2 }},
                                                        {{ $transaksi->transaction->user->kecamatan->kecamatan }}, <br>
                                                        {{ $transaksi->transaction->user->kota->kota }},
                                                        {{ $transaksi->transaction->user->provinsi->provinsi }},
                                                        {{ $transaksi->transaction->user->negara }},
                                                        {{ $transaksi->transaction->user->kodepos }}</span>



                                                    <label for="customer"
                                                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white ">Catatan
                                                        : <span class="text-slate-400">{{ $transaksi->catatan }}
                                                        </span></label>





                                                </div>

                                            </div>
                                            <div>
                                                <h6 class="mb-3 font-bold capitalize">Status Pengiriman</h6>
                                                <div class="">


                                                    <div class="">
                                                        <div class="flex">
                                                            <label for="customer"
                                                                class="block mb-2 text-muted text-sm font-medium me-2">Status
                                                                : </label>
                                                                @if ($transaksi->status == 'SELESAI')
                                                                <label for="customer"
                                                                    class="block mb-2 text-md font-medium text-green-500 ">{{ $transaksi->status }}</label>
                                                                @else

                                                                <label for="customer"
                                                                    class="block mb-2 text-md font-medium text-red-500 ">{{ $transaksi->status }}</label>
                                                                @endif


                                                        </div>

                                                    </div>
                                                    <div class="lg:grid-rows-2">
                                                        <div class="flex">
                                                            <label for="customer"
                                                                class="block mb-2 text-muted me-2 text-sm font-medium ">Jenis
                                                                Pengiriman :
                                                            </label>
                                                            <label for="customer"
                                                                class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transaksi->kurir }}</label>

                                                        </div>

                                                    </div>
                                                    <div class="lg:grid-rows-2">
                                                        <div class="flex">
                                                            <label for="customer"
                                                                class="block mb-2 text-muted text-sm font-medium me-2">Resi
                                                                : </label>
                                                            <label for="customer"
                                                                class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transaksi->resi }}</label>

                                                        </div>

                                                    </div>



                                                </div>
                                            </div>

                                        </div>
                                        <div class="">

                                            <div>
                                                <h6 class="mb-3 font-bold capitalize">Rincian Biaya</h6>
                                                <div class="text-xs">


                                                    <div class="">
                                                        <table
                                                            class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">

                                                            <thead class="align-bottom">

                                                                <tr>
                                                                    <th
                                                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                        Diskon</th>
                                                                    @if (empty($transaksi->transaction->diskon))
                                                                    <th id="diskonelement"
                                                                    class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-red-400 opacity-70">
                                                                    : - Rp. 0</th>
                                                                    @else
                                                                    <th id="diskonelement"
                                                                    class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-red-400 opacity-70">
                                                                    : - Rp. {{ number_format($transaksi->transaction->diskon) }}</th>
                                                                    @endif


                                                                </tr>
                                                                <tr>
                                                                    <th
                                                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                        Ongkos Kirim</th>
                                                                    @if (empty($transaksi->ongkir))
                                                                        <th id="hargaongkir"
                                                                            class="px-6 py-3 pl-2 font-bold text-left align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                            : Rp. 0
                                                                        </th>
                                                                    @else
                                                                        <th id="hargaongkir"
                                                                            class="px-6 py-3 pl-2 font-bold text-left align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                            : Rp. {{ number_format($transaksi->ongkir) }}
                                                                        </th>
                                                                    @endif

                                                                </tr>
                                                                <tr>
                                                                    <th
                                                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                        Sub Total</th>
                                                                    <th id="subtotal"
                                                                        class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                        : Rp. {{ number_format($transaksi->produk->hargaproduk) }}</th>


                                                                </tr>
                                                                <tr class="bg-gray-100">
                                                                    <th
                                                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent shadow-none text-xxs  tracking-none whitespace-nowrap text-slate-400 ">
                                                                        Total Bayar</th>
                                                                    <th id="totalharga"
                                                                        class="px-6 py-3 pl-2 font-bold text-left align-middle bg-transparent shadow-none text-xxs tracking-none whitespace-nowrap text-slate-400 ">
                                                                        : Rp. {{ number_format($transaksi->transaction->total_harga - $transaksi->transaction->diskon + $transaksi->ongkir) }}
                                                                    </th>

                                                                </tr>
                                                                <tr class="bg-gray-300">
                                                                    <th
                                                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent shadow-none text-xxs  tracking-none whitespace-nowrap text-white ">
                                                                        Metode Bayar</th>
                                                                    <th id="totalharga"
                                                                        class="px-6 py-3 pl-2 uppercase font-bold text-left align-middle bg-transparent shadow-none text-xxs tracking-none whitespace-nowrap text-white ">
                                                                        : {{$transaksi->transaction->pembayaran }}
                                                                    </th>

                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>




                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div>
                            </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
