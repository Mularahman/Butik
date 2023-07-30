@extends('pelanggan.layouts.app')
@section('title')
    Refund
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
                aria-current="page">Refund</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Refund Product</h6>
    </nav>
@endsection
@section('content')
    <section class="px-10 py-2">
        <div
            class="lack/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mt-3">




            <div class="flex-auto px-0  py-2">
                <div class="overflow-x-auto table-responsive">
                    <!-- Modal toggle -->
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="block ml-4 mt-4 mb-4 mx-3 my-3 text-white  hover:scale-102  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 uppercase align-middle transition-all cursor-pointer bg-gradient-to-tl  from-green-600 to-lime-400 leading-pro  ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs "
                        type="button">
                        Ajukan Pengembalian
                    </button>

                    <!-- Main modal -->
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
                                        <div>
                                            <label for="kode"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                            Invoice</label>
                                            <select id="kode" name="kode"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>--- Pilih Invoice ---</option>

                                                @foreach ($produk as $data)
                                                    <option value="{{ $data->transaction->id }}">{{ $data->transaction->kode }}
                                                    </option>
                                                @endforeach


                                            </select>
                                        </div>
                                        {{--  <div>
                                            <label for="pengembalian"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                                Produk</label>
                                            <select id="pengembalian" name="produk_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="">--- Pilih Produk ---</option>




                                            </select>
                                        </div>  --}}


                                        <div>

                                            <label for="message"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan</label>
                                            <textarea id="message" name="alasan" rows="4"
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
                    <table id="dataTable" datatable id="datatable-search"
                        class="table  table-flush items-center w-full mb-0 align-top border-gray-200 text-slate-500"
                        style="max-height: 400px !important">

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mb-3">

                            <div>
                                <div class="font-bold flex ml-4 mb-4 mt-3">
                                    <h3 class="me-2">Refund</h3>
                                    <span
                                        class="bg-blue-100 text-blue-800 text-sm tracking-normal uppercase opacity-70 font-bold mr-2 px-3 py-1 rounded-lg p-4 dark:bg-blue-900 dark:text-blue-300">{{ $refunds->count() }}</span>



                                </div>
                            </div>
                            <div>
                                <div class="text-center justify-end flex items-content-end mr-4">

                                    <div class="flex py-2.5">

                                        {{--  <form action="/transaction_buy" method="get">
                                            <input type="text" name="search" placeholder="Cari Invoice"
                                                class="bg-gray-50 border me-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                            <button type="submit"
                                                class="p-2.5   w-20 text-sm font-medium text-center text-white bg-gradient-to-tl from-orange-400 hover:scale-102  to-yellow-300 rounded-lg inline-block cursor-pointer border-0 bg-transparent">Cari</button>
                                        </form>  --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <tbody>
                            <tr class="border-b-2 font-bold">
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">No</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Tanggal</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Invoice</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Total</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Alasan</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Status</span>
                                </td>


                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Action</span>
                                </td>
                            </tr>
                            @foreach ($refunds as $refund)
                                <tr class="border-b-2">
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-xs">{{ $loop->iteration }}</span>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-xs">{{ $refund->tanggal }}</span>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                        <span
                                            class="font-semibold leading-tight text-xs">{{ $refund->transaction->kode }}</span>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-xs">Rp. {{ number_format($refund->transaction->total_harga) }} </span>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-xs"> {{ $refund->alasan }} </span>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-xs">  @if ($refund->status == 'PENDING')
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">PENDING</span>
                                        @elseif ($refund->status == 'DITERIMA')
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">SUCCESS</span>
                                        @elseif ($refund->status == 'DITOLAK')
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                                REJECT</ @endif </span>
                                    </td>

                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent text-sm whitespace-nowrap">

                                        <a type="button" href="/transaction_detailss/{{ $refund->transaction->id }}"
                                            data-tooltip-target="detail"
                                            class="text-white align-middle transition-all cursor-pointer bg-gradient-to-tl from-blue-600 to-cyan-400 ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs   focus:outline-none  font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center mr-2 ">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path
                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg>
                                        </a>


                                        <div id="detail" role="tooltip"
                                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Lihat Detail
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>



                                    </td>

                                </tr>
                            @endforeach
                        </tbody>


                    </table>

                </div>
            </div>
        </div>


    </section>
    <script>
        document.getElementById('kode').addEventListener('change', function () {
            var kode = this.value;
            if (kode) {
                fetch('/refund/' + kode)
                    .then(response => response.json())
                    .then(data => {
                        var pengembalianSelect = document.getElementById('pengembalian');
                        pengembalianSelect.innerHTML = '<option value="">--- Pilih Produk ---</option>';
                        data.forEach(pengembalian => {
                            var option = document.createElement('option');
                            option.value = pengembalian.id;
                            option.textContent = pengembalian.produk_id;
                            pengembalianSelect.appendChild(option);
                        });
                    });
            } else {
                var pengembalianSelect = document.getElementById('pengembalian');
                pengembalianSelect.innerHTML = '<option value="">--- Pilih Produk ---</option>';
            }
        });
    </script>
@endsection
