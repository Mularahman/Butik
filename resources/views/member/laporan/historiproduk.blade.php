@extends('member.layouts.app')
@section('title')
    Laporan Produk
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
        <h6 class="mb-0 font-bold capitalize">Laporan Produk Terjual</h6>
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
                                <h3 class="me-2">Laporan Produk Terjual</h3>
                                <span
                                class="bg-blue-100 text-blue-800 text-sm tracking-normal uppercase opacity-70 font-bold mr-2 px-3 py-1 rounded-lg p-4 dark:bg-blue-900 dark:text-blue-300">{{$jual->count()}}</span>


                            </div>
                            <div class="px-4 ">
                                <form action="/laporan-produk-cetak" method="get">
                                    <div class="flex">
                                    {{--  <div>
                                        <label class="me-2" for="">Mulai</label>
                                        <input type="date" name="start" placeholder="Mulai"
                                        class="bg-gray-50 border me-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                    <div>
                                        <label class="me-2" for="">Sampai</label>
                                        <input type="date" name="end" placeholder="Mulai"
                                    class="bg-gray-50 border me-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    </div>  --}}
                                    <div class="">

                                        <button type="submit"
                                        class="p-2.5   w-24 text-sm font-medium text-center text-white bg-gradient-to-tl from-green-600 to-lime-400  hover:scale-105   rounded-lg inline-block cursor-pointer border-0 bg-transparent">Download</button>
                                    </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                        <div>
                            <div class="text-center justify-end flex items-content-end mr-4">

                                <div class="flex py-2.5">

                                    <form action="/laporan-produk" method="get">
                                    <input type="text" name="search" placeholder="Cari Nama Produk"
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
                                    <span class=" leading-tight ">Gambar</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Nama Produk</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Harga </span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Stok Produk </span>
                                </td>

                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class=" leading-tight ">Jumlah Terjual </span>
                                </td>


                            </tr>
                            @foreach ($jual as $item)

                            <tr class="border-b-2">

                                <td
                                class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                <span class="font-semibold leading-tight text-xs">{{ $loop->iteration }}</span>
                            </td>


                            <td class="p-2 align-middle text-center bg-transparent  whitespace-nowrap">
                                <div class="mt-2 avatar-group">
                                    <div>

                                        <img src="{{ asset('storage/' . $item->produk->gambar->first()->thumbnail) }}"
                                            class="inline-flex items-center justify-center  text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                            alt="atlassian" />
                                    </div>

                                </div>
                            </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> {{$item->produk->namaproduk}} </span>
                                </td>


                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">Rp. {{number_format($item->produk->hargaproduk)}}</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">{{$item->produk->stokproduk}}</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">{{$item->total_sold}}</span>
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
