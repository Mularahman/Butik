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




                    <div
                        class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl mb-4 border-0 border-solid bg-white bg-clip-border">

                        <div class="flex-auto  px-0 pb-2">
                            <div class="overflow-x-auto">

                                <div class="px-6 py-3 lg:px-8">



                                    <div class="space-y-6 px-6">
                                        <div class="pt-4  flex justify-between ">

                                                <div class="grid justify-items-start">
                                                    <div>

                                                        <h5>Hello, <Strong>{{Auth::user()->name}}</Strong></h5>
                                                        <span>Terima Kasih Atas Pesanan Anda.</span>
                                                    </div>
                                                </div>


                                                <div  class="grid justify-items-end text-end">
                                                    <div>

                                                        <h6 class="mb-0 font-bold capitalize">{{ $transaction->kode }}</h6>
                                                        <span>{{$transaction->tanggal}}</span>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="pt-4">
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

                                                    @foreach ($transactiondetail as $item)

                                                        <tr>


                                                            <td
                                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                                                <div class="flex px-2 py-1">
                                                                    <div>
                                                                        <span
                                                                            class="px-3 py-3 items-center text-xs justify-center">{{ $loop->iteration }}</span>
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
                                                                    class=" leading-tight text-xs">{{ number_format($item->qty) }}</span>
                                                            </td>
                                                            <td
                                                                class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                                                <span class="font-semibold leading-tight text-xs">Rp.
                                                                    {{ number_format($item->harga) }}
                                                                </span>
                                                            </td>
                                                            <td
                                                                class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">


                                                                        @if ($item->status == 'SELESAI')
                                                                            <form class="space-y-2"
                                                                                action="/keranjang_aksi/{{ $item->produk->id }}"
                                                                                method="POST" enctype="multipart/form-data">
                                                                                @csrf


                                                                                    <button type="submit"
                                                                                        class="inline-block w-full px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs">
                                                                                        Beli Lagi
                                                                                    </button>

                                                                            </form>
                                                                        @else
                                                                            <form class="space-y-2"
                                                                                action="/transaction_selesai_aksi/{{ $item->id }}"
                                                                                method="POST" enctype="multipart/form-data">

                                                                                @csrf

                                                                                    <button type="submit"
                                                                                        class="inline-block w-full px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs">
                                                                                        Pesanan Diterima
                                                                                    </button>

                                                                            </form>
                                                                        @endif

                                                                    </div>
                                                                    <div>
                                                                        @if ($item->status == 'SELESAI')
                                                                            <div class="space-y-2 pt-2" >


                                                                                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                                                                                        class="inline-block w-full px-6 py-3 font-bold text-center  uppercase align-middle transition-all rounded-lg cursor-pointer text-gray-700 opacity-70 bg-white border border-gray-300 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3">
                                                                                        Ajukan Pengembalian
                                                                                    </button>


                                                                                <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                                                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                                                <div class="relative w-full max-w-md max-h-full">
                                                                                    <!-- Modal content -->
                                                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                                        <button type="button"
                                                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                                            data-modal-hide="authentication-modal">
                                                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none" viewBox="0 0 14 14">
                                                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                                            </svg>
                                                                                            <span class="sr-only">Close modal</span>
                                                                                        </button>
                                                                                        <div class="px-6 py-6 lg:px-8">
                                                                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Form Pengajuan
                                                                                                Pengembalian</h3>
                                                                                            <form class="space-y-6" action="/refund-aksi" method="POST">
                                                                                                @csrf
                                                                                                <div class="mb-4">
                                                                                                    <label for="kode"
                                                                                                        class="block mb-2 text-left text-sm font-medium text-gray-900 dark:text-white">Invoice</label>
                                                                                                    <input type="text" value="{{$item->transaction->kode}}" disabled class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  >
                                                                                                    <input type="text" value="{{$item->transaction->id}}" hidden name="kode">

                                                                                                </div>

                                                                                                <div class="mb-4">

                                                                                                    <label for="message"
                                                                                                        class="block mb-2 text-left text-sm font-medium text-gray-900 dark:text-white">Alasan</label>
                                                                                                    <textarea required id="message" name="alasan" rows="4"
                                                                                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                                        placeholder="Berikan alasan mengapa anda mengajukan pengembalian"></textarea>

                                                                                                </div>


                                                                                                <button type="submit"
                                                                                                    class="w-full text-white bg-gradient-to-tl  from-green-600 to-lime-400 leading-pro focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                        @else
                                                                            <form class="space-y-6 pt-2" >


                                                                                    <a type="button"
                                                                                        class="inline-block disabled w-full px-6 py-3 font-bold text-center  uppercase align-middle transition-all rounded-lg cursor-pointer text-gray-700 opacity-70 bg-white border border-gray-300 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25  active:opacity-85 hover:shadow-soft-xs mb-3">
                                                                                        Ajukan Pengembalian
                                                                                    </a>

                                                                            </form>
                                                                        @endif


                                                            </td>


                                                        </tr>

                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="flex justify-end">
                                            <table
                                                class="items-center text-right w-44 mb-0 mr-4 text-slate-500">

                                                <thead class="align-bottom">
                                                    <tr>
                                                        <th
                                                            class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent  border-gray-200 shadow-none text-xs  tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                            Sub Total :</th>
                                                        <th id="subtotal"
                                                            class="px-6 py-3 pl-2 font-bold text-right  align-middle bg-transparent  border-gray-200 shadow-none text-xs  tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                             Rp. {{ number_format($transaction->total_harga) }}</th>
                                                    </tr>
                                                    <tr>
                                                        <th
                                                            class="px-6 py-3 font-bold tracking-normal text-right uppercase align-middle bg-transparent  letter  text-xs whitespace-nowrap -gray-200 text-slate-400 opacity-70">
                                                            Diskon :</th>
                                                        @if (empty($transaction->diskon))
                                                        <th id="diskonelement"
                                                        class="px-6 py-3 pl-2 font-bold text-right  align-middle bg-transparent  border-gray-200 shadow-none text-xs  tracking-none whitespace-nowrap text-red-400 opacity-70">
                                                         - Rp. 0</th>
                                                        @else
                                                        <th id="diskonelement"
                                                        class="px-6 py-3 pl-2 font-bold text-right  align-middle bg-transparent  border-gray-200 shadow-none text-xs  tracking-none whitespace-nowrap text-red-400 opacity-70">
                                                         - Rp. {{ number_format($transaction->diskon) }}</th>
                                                        @endif


                                                    </tr>
                                                    <tr>
                                                        <th
                                                            class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent  border-gray-200 shadow-none text-xs  tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                            Ongkos Kirim :</th>
                                                        @if (empty($transactiondetail->first()->ongkir))
                                                            <th id="hargaongkir"
                                                                class="px-6 py-3 pl-2 font-bold text-right align-middle bg-transparent  border-gray-200 shadow-none text-xs  tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                 Rp. 0
                                                            </th>
                                                        @else
                                                            <th id="hargaongkir"
                                                                class="px-6 py-3 pl-2 font-bold text-right align-middle bg-transparent  border-gray-200 shadow-none text-xs  tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                 Rp. {{ number_format($transactiondetail->first()->ongkir) }}
                                                            </th>
                                                        @endif

                                                    </tr>

                                                    <tr class="">
                                                        <th
                                                            class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent shadow-none text-xs  tracking-none whitespace-nowrap text-slate-400 ">
                                                            Total Bayar :</th>
                                                        <th id="totalharga"
                                                            class="px-6 py-3 pl-2 font-bold text-right align-middle bg-transparent shadow-none text-xs tracking-none whitespace-nowrap text-slate-400 ">
                                                             Rp. {{ number_format($transaction->total_harga - $transaction->diskon + $transactiondetail->first()->ongkir) }}
                                                        </th>

                                                    </tr>
                                                    <tr class="">
                                                        <th
                                                            class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent shadow-none text-xs  tracking-none whitespace-nowrap  ">
                                                            Metode Bayar :</th>
                                                        <th id="totalharga"
                                                            class="px-6 py-3 pl-2 font-bold text-right uppercase align-middle bg-transparent shadow-none text-xs tracking-none whitespace-nowrap  ">
                                                             {{$transaction->pembayaran }}
                                                        </th>

                                                    </tr>

                                                </thead>

                                            </table>

                                        </div>




                                        <div class="pt-4 grid md:grid-cols-2 lg:grid-cols-2 gap-4">
                                            <div>
                                                <h6 class="mb-3 font-bold capitalize">Informasi Pengiriman</h6>
                                                <div class="">


                                                    <span for="customer"
                                                        class="block mb-2 text-md font-medium text-slate-400 dark:text-white">
                                                        <span
                                                            class="text-gray-700">{{ $transaction->user->name }}
                                                        </span>|
                                                        {{ $transaction->user->no_hp }} <br>
                                                        {{ $transaction->user->alamat1 }},
                                                        {{ $transaction->user->alamat2 }},
                                                        {{ $transaction->user->kecamatan->kecamatan }}, <br>
                                                        {{ $transaction->user->kota->kota }},
                                                        {{ $transaction->user->provinsi->provinsi }},
                                                        {{ $transaction->user->negara }},
                                                        {{ $transaction->user->kodepos }}</span>




                                                        <label for="customer"
                                                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white ">Catatan
                                                        : <span class="text-slate-400">{{ $transactiondetail->first()->catatan }}
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
                                                                @if ($transactiondetail->first()->status == 'SELESAI')
                                                                <label for="customer"
                                                                    class="block mb-2 text-md font-medium text-green-500 ">{{ $transactiondetail->first()->status }}</label>
                                                                @else

                                                                <label for="customer"
                                                                    class="block mb-2 text-md font-medium text-red-500 ">{{ $transactiondetail->first()->status }}</label>
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
                                                                class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transactiondetail->first()->kurir }}</label>

                                                        </div>

                                                    </div>
                                                    <div class="lg:grid-rows-2">
                                                        <div class="flex">
                                                            <label for="customer"
                                                                class="block mb-2 text-muted text-sm font-medium me-2">Resi
                                                                : </label>
                                                            <label for="customer"
                                                                class="block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $transactiondetail->first()->resi }}</label>

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
    </div>
@endsection
