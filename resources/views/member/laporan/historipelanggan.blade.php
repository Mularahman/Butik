@extends('member.layouts.app')
@section('title')
    Laporan Pelanggan
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
        <h6 class="mb-0 font-bold capitalize">Laporan Pelanggan</h6>
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
                                <h3 class="me-2">Laporan Pelanggan</h3>
                                <span
                                class="bg-blue-100 text-blue-800 text-sm tracking-normal uppercase opacity-70 font-bold mr-2 px-3 py-1 rounded-lg p-4 dark:bg-blue-900 dark:text-blue-300">{{$data->count()}}</span>


                            </div>
                            <div class="px-4 ">
                                <form action="/laporan-pelanggan-cetak" method="get">
                                    <div class="flex">
                                    <div>
                                        <label class="me-2" for="">Mulai</label>
                                        <input type="date" name="start" placeholder="Mulai"
                                        class="bg-gray-50 border me-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                    <div>
                                        <label class="me-2" for="">Sampai</label>
                                        <input type="date" name="end" placeholder="Mulai"
                                    class="bg-gray-50 border me-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                    <div class="pt-3">

                                        <button type="submit"
                                        class="p-2.5 mt-3  w-24 text-sm font-medium text-center text-white bg-gradient-to-tl from-green-600 to-lime-400  hover:scale-105   rounded-lg inline-block cursor-pointer border-0 bg-transparent">Download</button>
                                    </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                        <div>
                            <div class="text-center justify-end flex items-content-end mr-4">

                                <div class="flex py-2.5">

                                    <form action="/laporan-pelanggan" method="get">
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
                                    <span class=" leading-tight ">Nama Pelanggan</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Email</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Tanggal Transaksi</span>
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
                                    <span class="font-semibold leading-tight text-xs"> {{$item->transaction->user->name}} </span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> {{$item->transaction->user->email}} </span>
                                </td>

                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">{{$item->transaction->tanggal}}</span>
                                </td>



                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">Rp. {{number_format($item->transaction->total_harga - $item->transaction->diskon + $item->first()->ongkir)}}</span>
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
