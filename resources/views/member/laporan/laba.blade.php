@extends('member.layouts.app')
@section('title')
    Laporan Pendapatan
@endsection
@section('breadcrum')
    <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page">Laporan</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Laporan Pendapatan</h6>
    </nav>
@endsection
@section('content')

    <section class="px-10 py-2">





        <div
            class="lack/12.5 shadow-soft-xl  flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mt-3">

            <div class="flex-auto px-0  py-2">
                <div class="overflow-x-auto table-responsive">

                    <table id="dataTable" datatable id="datatable-search"
                        class="table table-flush items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mb-3">
                        <div>
                            <div class="font-bold flex ml-4 mb-4 mt-3">
                                <h3 class="me-2">Laporan Pendapatan</h3>
                                <span
                                class="bg-blue-100 text-blue-800 text-sm tracking-normal uppercase opacity-70 font-bold mr-2 px-3 py-1 rounded-lg p-4 dark:bg-blue-900 dark:text-blue-300">{{$data->count()}}</span>


                            </div>
                            <div class="w-40 px-4 ">

                                <a href="/laporan-laba-cetak"
                                class="flex px-4 py-3 w-auto font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl  from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" class="me-2" fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                                </svg> Download
                            </a>
                            </div>
                        </div>
                        <div>
                            <div class="text-center justify-end flex items-content-end mr-4">

                                <div class="flex py-2.5">

                                    <form action="/laporan-laba" method="get">
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
                            <tr class="border-b-2 font-bold  bg-gray-100">

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
                                    <span class=" leading-tight ">Total </span>
                                </td>



                            </tr>
                            @foreach ($data as $item)

                            <tr class="border-b-2">

                                <td
                                class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                <span class="font-semibold leading-tight text-xs">{{ $loop->iteration }}</span>
                            </td>


                            <td
                                class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                <span class="font-semibold leading-tight text-xs">{{$item->transaction->tanggal}}</span>
                            </td>
                            <td
                                class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                <span class="font-semibold leading-tight text-xs">{{$item->kode}}</span>
                            </td>




                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">Rp. {{number_format($item->transaction->total_harga)}}</span>
                                </td>





                            </tr>


                            @endforeach
                            <tr class="border-b-2 font-bold  bg-gray-100">




                            <td colspan="2"
                                class="p-2  leading-normal text-right align-middle bg-transparent  text-sm whitespace-nowrap">
                                <span class="font-bold leading-tight text-xs">Total :</span>
                            </td>




                                <td colspan="2"
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-bold leading-tight text-xs">Rp. {{number_format($pendapatan)}}</span>
                                </td>





                            </tr>
                        </tbody>


                    </table>

                </div>
            </div>
        </div>

    </section>
@endsection
