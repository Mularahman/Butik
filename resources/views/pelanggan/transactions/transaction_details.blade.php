@extends('pelanggan.layouts.app')
@section('title')
    Transaction Details
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
                aria-current="page">My Product</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Add New Product</h6>
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
                                <h6 class="mb-0 font-bold capitalize">#INVOICE21</h6>

                                <form class="space-y-6" action="/produk-admin_tambah_aksi" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">



                                        <a href="#">
                                            <img class="h-48 w-full p-2 rounded-[20px]" src="/frontend/img/model1.png"
                                                alt="" />
                                        </a>



                                        <div class="lg:grid-rows-2">
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Customer Name</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Mula
                                                    Rahman</label>

                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Product Name</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Baju
                                                    Batik</label>


                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Product Name</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Baju
                                                    Batik</label>


                                            </div>
                                        </div>
                                        <div class="lg:grid-rows-2">
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Product Name</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Mula
                                                    Rahman</label>

                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Payment Status</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-red-500 ">Pending</label>


                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Mobile</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">+628 1250908321</label>


                                            </div>
                                        </div>


                                    </div>
                                    <h6 class="mb-0 font-bold capitalize">Shipping Information</h6>
                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">

                                        <div class="lg:grid-rows-2">
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Address I</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Mula
                                                    Rahman</label>

                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Province</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Baju
                                                    Batik</label>


                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Postal Code</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Baju
                                                    Batik</label>


                                            </div>
                                        </div>
                                        <div class="lg:grid-rows-2">
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Address II</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Mula
                                                    Rahman</label>

                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">City</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-red-500 ">Pending</label>


                                            </div>
                                            <div>
                                                <label for="customer"
                                                    class="block mb-2 text-muted text-sm font-medium ">Country</label>
                                                <label for="customer"
                                                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">+628 1250908321</label>


                                            </div>
                                        </div>


                                    </div>
                                    <h6 class="mb-0 font-bold capitalize">Shipping Status</h6>
                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                                        <div>

                                            <select id="kategori" name="kategori_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>--- Pilih Status ---</option>
                                                {{--  @foreach ($kategori as $data)  --}}
                                                    <option value="Pendding">Pendding</option>
                                                {{--  @endforeach  --}}
                                            </select>
                                        </div>
                                        <div>

                                            <input disabled placeholder="JNE1213312"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>



                                    </div>

                                    <div
                                        class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
                                        <button type="submit"
                                            class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3">
                                            Save Now
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
@endsection
