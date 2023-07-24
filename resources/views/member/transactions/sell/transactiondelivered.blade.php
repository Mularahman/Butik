@extends('member.layouts.app')
@section('title')
    Transaction
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
        <h6 class="mb-0 font-bold capitalize">Transaction Sell Product</h6>
    </nav>
@endsection
@section('content')

    <section class="px-10 py-2">

        <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
            <li>
                <a class="block font-bold  me-3 px-4 py-2 mr-2 transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                    href="/transaction-member">
                    Active Order
                </a>
            </li>
            <li>
                <a class="block font-bold  me-3 px-4 py-2 mr-2 transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                    href="/transaction_confirmed">
                    Confirmed
                </a>
            </li>
            <li>
                <a class="block font-bold me-3 px-4 py-2 mr-2 transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                    href="/transaction_packing">
                    Packing
                </a>
            </li>
            <li>
                <a class="block font-bold border-b-2 me-3 px-4 py-2 mr-2 transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                    href="/transaction_delivered">
                    Delivered
                </a>
            </li>
            <li>
                <a class="font-bold  me-3 block px-4 py-2 mr-2 transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                    href="/transaction_complated">
                    Complated
                </a>
            </li>

        </ul>




        <div
            class="lack/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mt-3">

            <div class="flex-auto px-0  py-2">
                <div class="overflow-x-auto table-responsive">

                    <table id="dataTable" datatable id="datatable-search"
                        class="table table-flush items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead>
                            <div class="font-bold flex ml-4 mb-4 mt-3">
                                <h3 class="me-2">Data Pesanan Dalam Perjalanan</h3>
                                <span
                                class="bg-blue-100 text-blue-800 text-sm tracking-normal uppercase opacity-70 font-bold mr-2 px-3 py-1 rounded-lg p-4 dark:bg-blue-900 dark:text-blue-300">{{$transactiondetail->count()}}</span>
                            </div>
                        </thead>
                        <tbody>
                            <tr class="border-b-2 font-bold">
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">No</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Invoice</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Tanggal</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Customer</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Produk</span>
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
                            @foreach ($transactiondetail as $transaksi)
                            <tr class="border-b-2">

                                <td
                                class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                <span class="font-semibold leading-tight text-xs">{{ $loop->iteration }}</span>
                            </td>
                            <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">{{$transaksi->kode}}</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">{{$transaksi->transaction->tanggal}}</span>
                                </td>

                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> {{$transaksi->transaction->user->name}} </span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> {{$transaksi->produk->namaproduk}} </span>
                                </td>
                                <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
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
                                    </td>

                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent text-sm whitespace-nowrap">

                                    <a type="button" href="/transaction_details/{{$transaksi->id}}"
                                        data-tooltip-target="detail"
                                        class="text-white align-middle transition-all cursor-pointer bg-gradient-to-tl from-blue-600 to-cyan-400 ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 pacity-85 hover:shadow-soft-xs   focus:outline-none  font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center mr-2 ">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
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
