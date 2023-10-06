@extends('layouts.app')
@section('title')
    Checkout
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
<form action="/kategori" method="post" >
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
    <section class="mt-32">
        <div class="container">

            <ol class="px-8 ml-3 flex flex-wrap ">
                <li class=" text-dark opacity-50"><a href="/home">Home</a></li>
                <span class="mx-2 text-gray-400">/</span>
                <li class=" text-dark opacity-50"><a href="/keranjang">Keranjang</a></li>
                <span class="mx-2 text-gray-400">/</span>
                <li class=" font-bold">Konfirmasi Pengiriman</li>
            </ol>


        </div>

        <div class="container p-4 px-4 ">
            <div class="px-8">
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-1">
                    <div class="lg:col-span-2 ">
                        <div class="flex-wrap flex">

                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white  rounded-2xl bg-clip-border">
                                <div
                                    class="border-black/12.5  relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border ">

                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto mb-5">
                                            <div class="px-4">

                                                <h5 class="mb-0 font-bold dark:text-white">Produk</h5>
                                                <p class="mb-0 leading-normal text-sm">Informasi Produk</p>
                                            </div>
                                            <div class="space-y-6  px-6 pt-6">
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


                                                        </tr>

                                                    @endforeach

                                                </tbody>

                                            </table>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto mb-5">
                                            <div class="px-4">

                                                <h5 class="mb-0 font-bold dark:text-white">Alamat Pengiriman</h5>
                                                <p class="mb-0 leading-normal text-sm">Informasi Pengiriman</p>
                                            </div>
                                            @if (empty($user->alamat1))
                                            <a type="button" class="p-2.5 mt-5 w-full text-sm font-medium text-center text-white bg-gradient-to-tl from-orange-400 to-yellow-300 hover:scale-102 rounded-lg inline-block cursor-pointer border-0 bg-transparent">
                                                Lengkapi Alamat
                                            </a>
                                        @else
                                            <div class="space-y-6 px-6 pt-6">
                                                <span class="">
                                                    <span class="font-bold">{{$user->name}}</span> | {{$user->no_hp}} <br>
                                                    {{$user->alamat1}}. {{$user->alamat2}} <br>
                                                    {{$user->kecamatan->kecamatan}}, {{$user->kota->kota}}, {{$user->provinsi->provinsi}}, {{$user->negara}}, {{$user->kodepos}}
                                                </span>
                                            </div>
                                        @endif

                                        </div>
                                    </div>
                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto ">
                                            <div class="px-4">

                                                <h5 class="mb-0 font-bold dark:text-white">Pilih Jasa Kurir</h5>
                                                <p class="mb-0 leading-normal text-sm">Informasi Ongkos Kirim</p>
                                            </div>
                                            <div class="space-y-6  px-6 pt-6">
                                                <div>
                                                    <label for="Kurir"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Kurir</label>


                                                    <select id="pilihKurir" name="kurir" required
                                                        class="bg-gray-50 required border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                                        <option selected>--- Select Kurir ---</option>
                                                        @foreach ($kurir as $data)

                                                        <option value="{{$data->kurir}}">{{$data->kurir}}</option>
                                                        @endforeach

                                                    </select>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto mb-5">

                                            <div class="space-y-6  px-6">
                                                <div id="ongkir" class="ongkir">


                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex-wrap flex">

                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white  rounded-2xl bg-clip-border">
                                <div
                                    class="border-black/12.5  relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border ">

                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto mb-5">
                                            <div class="px-4 mb-6">

                                                <h5 class="mb-0 font-bold dark:text-white">Informasi Pembayaran</h5>
                                                <p class="mb-0 leading-normal text-sm">Informasi Pembayaran</p>

                                            </div>

                                            <div class="space-y-6  px-6">
                                                <div>
                                                    @if (session()->has('error'))
                                                        <div id="alert-2"
                                                            class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                                            role="alert">
                                                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Info</span>
                                                            <div class="ml-3 text-sm font-medium">
                                                                {{ session('error') }}
                                                            </div>
                                                            <button type="button"
                                                                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                                                                data-dismiss-target="#alert-2" aria-label="Close">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="w-5 h-5" fill="currentColor"
                                                                    viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    @endif
                                                    @if (session()->has('success'))
                                                        <div id="alert-2"
                                                            class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                                                            role="alert">
                                                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Info</span>
                                                            <div class="ml-3 text-sm font-medium">
                                                                {{ session('success') }}
                                                            </div>
                                                            <button type="button"
                                                                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                                                                data-dismiss-target="#alert-2" aria-label="Close">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="w-5 h-5" fill="currentColor"
                                                                    viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    @endif
                                                </div>

                                                @php
                                                    $subtotal = 0;
                                                    if (empty($hargadiskon)) {
                                                        $hargadiskon = 0;
                                                    }
                                                    if (session('hargadiskon')) {
                                                        $hargadiskon = session('hargadiskon');
                                                    }

                                                    $ongkir = 0;
                                                    $totalbayar = 0;


                                                @endphp
                                                @foreach ($keranjang as $item)
                                                    @php
                                                        $hargaproduk = $item->produk->hargaproduk * $item->jumlah;
                                                        $subtotal += $hargaproduk;
                                                    @endphp
                                                @endforeach
                                                @php
                                                    $totalbayar = $subtotal + $ongkir - $hargadiskon;
                                                @endphp
                                                <form class="" action="/diskon" method="POST">
                                                    @csrf



                                                    <div class="flex">
                                                        {{--  <label for="kupon"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kupon Diskon</label>  --}}
                                                        <div class="pt-6">
                                                            <input type="number" hidden value="{{ $totalbayar }}"
                                                                name="total">
                                                            <input type="text" value="{{ old('diskon_kode') }}"
                                                                name="diskon_kode" id="kupon"
                                                                placeholder="Masukkan Kode"
                                                                class="bg-gray-50 me-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                        </div>
                                                        <div class="pt-1">
                                                            <button type="submit"
                                                                class="p-2.5  mt-5 w-20 text-sm font-medium text-center text-white bg-gradient-to-tl from-orange-400 to-yellow-300 hover:scale-102 rounded-lg inline-block cursor-pointer border-0 bg-transparent">
                                                                Gunakan
                                                            </button>
                                                        </div>

                                                    </div>
                                                </form>
                                                <form action="/checkout" method="post">
                                                    @csrf

                                                    <div class="flex-auto px-0 pt-0 pb-2">
                                                        <div class="p-0 overflow-x-auto">
                                                            <table
                                                                class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">

                                                                <thead class="align-bottom">
                                                                    <tr>
                                                                        <div>
                                                                              <textarea id="message" name="catatan" rows="4"
                                                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                placeholder="Tambahkan Catatan"></textarea>

                                                                        </div>
                                                                    </tr>
                                                                    <tr>
                                                                        <th
                                                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                            Diskon</th>
                                                                        <th id="diskonelement"
                                                                            class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-red-400 opacity-70">
                                                                            : - Rp. {{ number_format($hargadiskon) }}</th>
                                                                            <input type="number" hidden name="diskon" value="{{$hargadiskon}}">
                                                                    </tr>
                                                                    <tr>
                                                                        <th
                                                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                            Ongkos Kirim</th>
                                                                        <th id="hargaongkir"
                                                                            class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                            : Rp. {{number_format($ongkir)}}</th>
                                                                            <input type="hidden" id="valueongkir" name="ongkir" value="{{$ongkir}}">
                                                                    </tr>
                                                                    {{--  <tr>
                                                                        <th
                                                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                            Fee</th>
                                                                        <th
                                                                            class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                            : Rp. {{number_format($fee * $subtotal)}}</th>
                                                                            <input type="hidden"  name="fee" value="{{$fee * $subtotal}}">
                                                                    </tr>  --}}
                                                                    <tr>
                                                                        <th
                                                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                            Sub Total</th>
                                                                        <th id="subtotal"
                                                                            class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                            : Rp. {{ number_format($subtotal) }}</th>
                                                                            <input type="hidden" name="kurir" id="DataKurir" value="">
                                                                            <input type="number" hidden name="qty" value="{{$item->jumlah}}">

                                                                    </tr>
                                                                    <tr class="bg-gray-100">
                                                                        <th
                                                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent shadow-none text-xxs  tracking-none whitespace-nowrap text-slate-400 ">
                                                                            Total Bayar</th>
                                                                        <th id="totalharga"
                                                                            class="px-6 py-3 pl-2 font-bold text-left align-middle bg-transparent shadow-none text-xxs tracking-none whitespace-nowrap text-slate-400 ">
                                                                            : Rp. {{ number_format($totalbayar) }}</th>
                                                                            <input type="hidden" id="valuetotalbayar" name="total" value="{{$totalbayar}}">
                                                                    </tr>
                                                                </thead>

                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="flex flex-wrap items-center justify-end border-t border-solid shrink-0 px-3 border-slate-100 rounded-b-xl">
                                                        <button type="submit"
                                                            class="p-2.5  mt-5 w-full text-sm font-medium text-center text-white bg-gradient-to-tl from-orange-400 to-yellow-300 hover:scale-102 rounded-lg inline-block cursor-pointer border-0 bg-transparent">
                                                            Buat Pesanan
                                                        </button>
                                                    </div>
                                                </form>
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
    <style>
        ul.no-bullet {
          list-style-type: none;
        }
      </style>

      <script>
        document.getElementById('pilihKurir').addEventListener('change', function() {

        });
        let isProcessing = false;
        let btnCheck = document.getElementById('pilihKurir');
        btnCheck.addEventListener('change', function(e) {
            e.preventDefault();
            let cityData = @json($city);
            let cityDestinations = @json($user->kota->id);
            let weights = @json($berat);

            let token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
            let cityOrigin = cityData;
            let cityDestination = cityDestinations;
            let courier = document.querySelector('select[name=kurir]').value;
            let weight = parseInt(weights);

            if (isProcessing) {
                return;
            }

            isProcessing = true;
            fetch("/api/ongkir", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token
                    },
                    body: JSON.stringify({
                        city_origin: cityOrigin,
                        city_destination: cityDestination,
                        weight: weight,
                        courier: courier,
                    })
                })
                .then(response => response.json())
                .then(response => {
                    isProcessing = false;
                    if (response) {
                        console.log(response.rajaongkir.results);
                        let ongkirContainer = document.getElementById('ongkir');
                        ongkirContainer.innerHTML = '';

                        // Add class "no-bullet" to the <ul> to remove bullet points from <li>
                        let ongkirList = document.createElement('ul');
                        ongkirList.classList.add('bg-gray-100', 'divide-y', 'divide-gray-500', 'rounded-lg', 'shadow-sm', 'p-4', 'no-bullet');

                        response.rajaongkir.results.forEach((value, index) => {
                            console.log(value.name)
                            value.costs.forEach(item => {
                                let listItem = document.createElement('li');
                                listItem.classList.add('px-4', 'py-2', 'border-b', 'border-gray-200');

                                let radioInput = document.createElement('input');
                                radioInput.classList.add('me-3');
                                radioInput.type = 'radio';
                                radioInput.name = 'ongkir_option';
                                radioInput.setAttribute('onchange','valueradiobutton(this)')
                                radioInput.setAttribute('datakurir', value.name +' - '+ item.service)

                                // Set the value of the radio button as a JSON string
                                radioInput.value = item.cost[0].value

                                listItem.appendChild(radioInput);

                                let label = document.createElement('label');
                                label.textContent =
                                    `${value.code.toUpperCase()} : ${item.service} - Rp. ${item.cost[0].value} (${item.cost[0].etd} hari)`;
                                listItem.appendChild(label);

                                ongkirList.appendChild(listItem);
                            });
                        });

                        ongkirContainer.appendChild(ongkirList);
                        let ongkirSection = document.querySelector('.ongkir');
                        ongkirSection.classList.add('d-block');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    isProcessing = false;
                });
        });


        let datakurirElement = document.getElementById('DataKurir')
        let hargaongkir = document.getElementById('hargaongkir')
        let inputongkir = document.getElementById('valueongkir')
        let valuetotalbayar = document.getElementById('valuetotalbayar')
        let subtotal = document.getElementById('subtotal')
        let diskon = document.getElementById('diskonelement')
        let totalHargaElement = document.getElementById('totalharga')

        function valueradiobutton(value) {
            console.log(value.getAttribute('datakurir'))
            datakurirElement.value = value.getAttribute('datakurir')
            const formatHarga = new Intl.NumberFormat('id-ID', { style: 'decimal', currency: 'IDR' }).format(value.value);
            hargaongkir.innerText = ': Rp. ' + formatHarga;
            valueongkir = parseInt(value.value);



            let totalHarga = parseInt(totalHargaElement.innerText.replace(/\D/g, ''));
            let SubTotal = parseInt(subtotal.innerText.replace(/\D/g, ''));
            let Diskon = parseInt(diskon.innerText.replace(/\D/g, ''));


            totalHarga = valueongkir + SubTotal - Diskon;

            const formatTotalHarga = new Intl.NumberFormat('id-ID', { style: 'decimal', currency: 'IDR' }).format(totalHarga);
            totalHargaElement.innerText = ': Rp. ' + formatTotalHarga;
            inputongkir.value = parseInt(valueongkir);
            valuetotalbayar.value = parseInt(totalHarga);
          }

      </script>
@endsection
