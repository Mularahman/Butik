@extends('member.layouts.app')
@section('title')
    Transaction Details
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



                <div
                    class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

                    <div class="flex-auto  px-0 pb-2">
                        <div class="overflow-x-auto">

                            <div class="px-6 py-3 lg:px-8">
                                <h6 class="mb-0 font-bold capitalize">{{$transactiondetail->kode}}</h6>

                                <form class="space-y-6" action="/transaction_active_aksi/{{$transactiondetail->id}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">



                                        <a href="#">
                                            <img class="h-48 w-full p-2 rounded-[20px]"
                                                src="{{ asset('storage/' . $transactiondetail->produk->gambar->first()->thumbnail) }}"
                                                alt="" />
                                        </a>



                                        <div class="lg:grid-rows-2">
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Nama
                                                    Pembeli</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transactiondetail->transaction->user->name }}</label>

                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Tanggal
                                                    Transaksi</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transactiondetail->transaction->tanggal }}</label>


                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Total
                                                    Harga</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Rp.
                                                    {{ number_format($transactiondetail->transaction->total_harga) }}</label>


                                            </div>
                                        </div>
                                        <div class="lg:grid-rows-2">
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Nama
                                                    Produk</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transactiondetail->produk->namaproduk }}</label>

                                            </div>

                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Qty</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 ">{{ $transactiondetail->qty }}</label>


                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Status
                                                    Pembayaran</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-red-500 ">{{ $transactiondetail->transaction->transaction_status }}</label>


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
                                                        class="text-gray-700">{{ $transactiondetail->transaction->user->name }}
                                                    </span>|
                                                    {{ $transactiondetail->transaction->user->no_hp }} <br>
                                                    {{ $transactiondetail->transaction->user->alamat1 }},
                                                    {{ $transactiondetail->transaction->user->alamat2 }},
                                                    {{ $transactiondetail->transaction->user->kecamatan->kecamatan }}, <br>
                                                    {{ $transactiondetail->transaction->user->kota->kota }},
                                                    {{ $transactiondetail->transaction->user->provinsi->provinsi }},
                                                    {{ $transactiondetail->transaction->user->negara }},
                                                    {{ $transactiondetail->transaction->user->kodepos }}</span>



                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white ">Catatan
                                                    : <span class="text-slate-400">{{ $transactiondetail->catatan }}
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
                                                        <label for="customer"
                                                            class="block mb-2 text-md font-medium text-red-600 dark:text-white">{{ $transactiondetail->status }}</label>

                                                    </div>

                                                </div>
                                                <div class="lg:grid-rows-2">
                                                    <div class="flex">
                                                        <label for="customer"
                                                            class="block mb-2 text-muted me-2 text-sm font-medium ">Jenis
                                                            Pengiriman :
                                                        </label>
                                                        <label for="customer"
                                                            class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transactiondetail->kurir }}</label>

                                                    </div>

                                                </div>
                                                <div class="lg:grid-rows-2">
                                                    <div class="flex">
                                                        <label for="customer"
                                                            class="block mb-2 text-muted text-sm font-medium me-2">Resi
                                                            : </label>
                                                        <label for="customer"
                                                            class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transactiondetail->resi }}</label>

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
                                                                @if (empty($transactiondetail->transaction->diskon))
                                                                <th id="diskonelement"
                                                                class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-red-400 opacity-70">
                                                                : - Rp. 0</th>
                                                                @else
                                                                <th id="diskonelement"
                                                                class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-red-400 opacity-70">
                                                                : - Rp. {{ number_format($transactiondetail->transaction->diskon) }}</th>
                                                                @endif


                                                            </tr>
                                                            <tr>
                                                                <th
                                                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                    Ongkos Kirim</th>
                                                                @if (empty($transactiondetail->ongkir))
                                                                    <th id="hargaongkir"
                                                                        class="px-6 py-3 pl-2 font-bold text-left align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                        : Rp. 0
                                                                    </th>
                                                                @else
                                                                    <th id="hargaongkir"
                                                                        class="px-6 py-3 pl-2 font-bold text-left align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                        : Rp. {{ number_format($transactiondetail->ongkir) }}
                                                                    </th>
                                                                @endif

                                                            </tr>
                                                            <tr>
                                                                <th
                                                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                    Sub Total</th>
                                                                <th id="subtotal"
                                                                    class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                    : Rp. {{ number_format($transactiondetail->produk->hargaproduk) }}</th>


                                                            </tr>
                                                            <tr class="bg-gray-100">
                                                                <th
                                                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent shadow-none text-xxs  tracking-none whitespace-nowrap text-slate-400 ">
                                                                    Total Bayar</th>
                                                                <th id="totalharga"
                                                                    class="px-6 py-3 pl-2 font-bold text-left align-middle bg-transparent shadow-none text-xxs tracking-none whitespace-nowrap text-slate-400 ">
                                                                    : Rp. {{ number_format($transactiondetail->transaction->total_harga) }}
                                                                </th>

                                                            </tr>
                                                        </thead>

                                                    </table>

                                                </div>




                                            </div>
                                        </div>

                                    </div>


                                    <div
                                        class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
                                        @if ($transactiondetail->status == 'DALAM PERJALANAN')
                                        @elseif($transactiondetail->status == 'SELESAI')
                                        @else
                                        <button type="submit"
                                            class="inline-block w-full px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3">
                                            Konfirmasi
                                        </button>
                                        @endif
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
