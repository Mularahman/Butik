@extends('layouts.app')
@section('title')
    Kategori Porduk
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
                    <li class=" font-bold">Kategori</li>
                    <span class="mx-2 text-gray-400">/</span>
                    <li class=" font-bold">{{$cari}}</li>
                </ol>


            </div>

            <div class="container">
                {{--  <form class="flex items-center justify-end"  action="/kategori/{{$id}}" method="GET">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-60">
                        <div class=" inset-y-0 left-0 items-center grid justify-items-end pl-3 ">

                            <select id="small" name="search" class="block w-60 p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Select Kategori</option>
                                @foreach ($subkategori as $filter)
                                <option value="{{$filter->id}}">{{$filter->subkategori}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <button type="submit"
                        class="p-2.5 ml-2 text-sm font-medium text-white bg-gradient-to-tl from-orange-400 hover:scale-102  to-yellow-300 rounded-lg inline-block cursor-pointer border-0 bg-transparent">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Cari Produk</span>
                    </button>
                </form>  --}}



        </div>
            <section class="mt-8 mb-8" id="produk">

                <h4 class="text-center">Produk {{$cari}} <span class="py-2 px-3 text-xs rounded-lg inline-block whitespace-nowrap text-center align-baseline font-semibold uppercase leading-tight text-white bg-gradient-to-tl from-orange-400 to-yellow-300">
                    {{$produk->count()}}</span></h4>

                <hr
                    class="h-px
                mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
                <div class="container ">
                    <div class="row flex-wrap flex">

                        <div
                            class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words bg-white ">
                            <div class="flex-auto p-4">
                                <div class="flex-wrap justify-center -mx-3 grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-4 ">
                                    @foreach ($produk as $item)
                                        @if ($item->users->status_toko == 1)
                                            <div class=" px-3 py-3">
                                                <img class="h-56 w-full rounded-lg justify-center align-middle items-center"
                                                    src="{{ asset('storage/' . $item->gambar->first()->thumbnail) }}" alt="">
                                                <div class=" mt-4 mb-4 ">
                                                    <span class="">{{ $item->namaproduk }}</span> <br>
                                                    <span
                                                        class="font-bold text-transparent bg-gradient-to-tl from-yellow-300 to-orange-400 bg-clip-text">Rp.
                                                        {{ number_format($item->hargaproduk) }}</span>
                                                </div>
                                                <div class="flex mt-4 mb-4 space-x-3 md:mt-6">
                                                    <a href="/detail-produk/{{ $item->id }}"
                                                        class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-orange-400 to-yellow-300 w-28 rounded-lg mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-2 py-3 text-center align-middle font-bold uppercase transition-all text-white"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-eye-fill me-2" viewBox="0 0 16 16">
                                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                            <path
                                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                        </svg>Detail</a>
                                                    <form class="" action="/produk_add_keranjangs/{{ $item->id }}" method="POST">
                                                        @csrf


                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-cart-plus-fill me-2"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                                            </svg> Keranjang
                                                        </button>




                                                    </form>


                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
                </div>

            </section>



        </section>

@endsection
