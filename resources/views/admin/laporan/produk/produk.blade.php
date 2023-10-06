@extends('admin.layouts.app')

@section('title')
    Laporan - Produk
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
        <h6 class="mb-0 font-bold capitalize">Produk</h6>
    </nav>

@endsection
@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 ">


<a href="/laporan-produk-admin-cetak" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3" type="button">
    Download
</a>

                <div
                    class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5  mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <div class="">



                        </div>
                        <div class="flex flex-wrap mt-0 -mx-3">
                            <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                                <h6
                                    class="pt-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent  text-xxs whitespace-nowrap text-slate-400 opacity-70">
                                    Data Produk <span
                                        class="bg-blue-100 text-blue-800 text-sm tracking-normal uppercase opacity-70 font-bold mr-2 px-3 py-1 rounded-lg p-4 dark:bg-blue-900 dark:text-blue-300">{{$jual->count()}}</span>
                                </h6>

                            </div>
                            <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">


                                <form class="flex items-center" action="/laporan-produk-admin">
                                    <label for="simple-search" class="sr-only leading-normal text-sm">Search </label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input type="text" id="simple-search" name="search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Search" required>
                                    </div>
                                    <button type="submit"
                                        class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-6 px-0 pb-2">
                        <div class="overflow-x-auto">

                            <table id="dataTable" class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            No</th>

                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Kode Produk</th>

                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Nama Produk</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Nama Toko</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Kategori</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Stok</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Harga Satuan</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Total Terjual</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jual as $item)
                                    <tr>


                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <span class="px-3 py-3 items-center text-xs justify-center">{{$loop->iteration}}</span>
                                                </div>

                                            </div>
                                        </td>

                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> {{$item->produk->kodeproduk}} </span>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> {{$item->produk->namaproduk}} </span>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> {{$item->produk->users->nama_toko}} </span>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> {{$item->produk->kategori->kategori}} </span>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> {{$item->produk->stokproduk}} </span>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs">Rp. {{number_format($item->produk->hargaproduk)}} </span>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">

                                            <span class="font-semibold leading-tight text-xs"> {{$item->total_sold}} </span>

                                        </td>



                                    </tr>
                                        @endforeach

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
