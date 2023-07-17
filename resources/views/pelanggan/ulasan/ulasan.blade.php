@extends('pelanggan.layouts.app')
@section('title')
    Review
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
                aria-current="page">Review</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Review Product</h6>
    </nav>
@endsection
@section('content')
    <section class="px-10 py-2">
        <div
            class="lack/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mt-3">

            <div class="flex-auto px-0  py-2">
                <div class="overflow-x-auto table-responsive">

                    <table id="dataTable" datatable id="datatable-search"
                        class="table  table-flush items-center w-full mb-0 align-top border-gray-200 text-slate-500" style="max-height: 400px !important">

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mb-3">

                            <div>
                                <div class="font-bold flex ml-4 mb-4 mt-3">
                                    <h3 class="me-2">Review</h3>
                                    <span
                                    class="bg-blue-100 text-blue-800 text-sm tracking-normal uppercase opacity-70 font-bold mr-2 px-3 py-1 rounded-lg p-4 dark:bg-blue-900 dark:text-blue-300">{{$transactiondetail->count()}}</span>



                                </div>
                            </div>
                            <div>
                                <div class="text-center justify-end flex items-content-end mr-4">

                                    <div class="flex py-2.5">

                                        <form action="/transaction_buy" method="get">
                                        <input type="text" name="search" placeholder="Cari Invoice"
                                            class="bg-gray-50 border me-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <button type="submit"
                                            class="p-2.5   w-20 text-sm font-medium text-center text-white bg-gradient-to-tl from-orange-400 hover:scale-102  to-yellow-300 rounded-lg inline-block cursor-pointer border-0 bg-transparent">Cari</button>
                                        </form>
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
                                    <span class=" leading-tight ">Produk</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Review</span>
                                </td>


                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Action</span>
                                </td>
                            </tr>
                            @foreach ($transactiondetail as $transaksi)
                                <tr class="border-b-2">
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-xs">{{ $loop->iteration }}</span>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-xs">{{ $transaksi->transaction->tanggal }}</span>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                        <span class="font-semibold leading-tight text-xs"> {{ $transaksi->transaction->kode }} </span>
                                    </td>

                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent text-sm whitespace-nowrap">

                                        <a type="button" href="/transaction_detail/{{ $transaksi->transaction->id }}"
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
@endsection
