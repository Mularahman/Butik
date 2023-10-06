@extends('layouts.app')
@section('title')
    Detail Produk
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
    @foreach ($produk as $item)
        <section class="mt-32">
            <div class="container">

                <ol class="px-8 ml-3 flex flex-wrap ">
                    <li class=" text-dark opacity-50"><a href="/home">Home</a></li>
                    <span class="mx-2 text-gray-400">/</span>
                    <li class=" font-bold">Detail Produk</li>
                </ol>


            </div>
            <div class="container p-4 px-4">
                <div class="px-8">
                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2">
                        <div class="lg:col-span-2">
                            <div class="flex-wrap flex">


                                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                                    <!-- Carousel wrapper -->
                                    <div class="relative h-[432px] mx-2 overflow-hidden rounded-lg">
                                        <!-- Item 1 -->
                                        @foreach ($item->gambar as $gambar)
                                            <div class="hidden duration-700  ease-in-out" data-carousel-item>
                                                <div
                                                    class="relative flex-auto flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                                    <img class="h-[432px] w-full rounded-lg justify-center align-middle items-center"
                                                        src="{{ asset('storage/' . $gambar->thumbnail) }}" alt="">
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <!-- Slider indicators -->
                                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                            aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                            aria-label="Slide 2" data-carousel-slide-to="1"></button>

                                    </div>
                                    <!-- Slider controls -->
                                    <button type="button"
                                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                        data-carousel-prev>
                                        <span
                                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M5 1 1 5l4 4" />
                                            </svg>
                                            <span class="sr-only">Previous</span>
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                        data-carousel-next>
                                        <span
                                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                            <span class="sr-only">Next</span>
                                        </span>
                                    </button>
                                </div>


                            </div>
                        </div>
                        <div class="lg:col-span-1">
                            <div class="flex-wrap flex ">
                                @foreach ($item->gambar as $gambar)
                                    <div
                                        class="relative w-28  md:w-40 lg:w-44 cursor-pointer mx-1 lg:mx-8 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                        <img class="h-32 w-full rounded-lg justify-center align-middle items-center"
                                            src=" {{ asset('storage/' . $gambar->thumbnail) }}" alt="">
                                    </div>
                                @endforeach




                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section class=" mb-8">
            <div class="container px-4">
                <div class="px-10">
                    <h4>{{ $item->namaproduk }}</h4>
                    <p class="font-md text-muted pb-3">By {{ $item->users->nama_toko }}</p>
                    <h5
                        class="font-bold text-lg relative z-10 text-transparent bg-gradient-to-tl from-yellow-300 to-orange-400 bg-clip-text">
                        Rp. {{ number_format($item->hargaproduk) }}</h5>

                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2">
                        <div>
                            <table>
                                <tr>
                                    <td colspan="2">Berat </td>
                                    <td>: {{ $item->beratproduk }} Gram</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Stok </td>
                                    <td>: {{ $item->stokproduk }}</td>
                                </tr>

                            </table>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td colspan="2">Warna </td>
                                    <td>: {{ $item->warnaproduk }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Ukuran </td>
                                    <td>: {{ $item->ukuranproduk }}</td>
                                </tr>
                                {{--  <tr>
                                <td colspan="2">
                                    <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                        Warna</label>

                                </td>
                                <td> <select id="warna" name="warnaproduk"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>--- Pilih Warna ---</option>
                                    @foreach ($warna as $data)
                                        <option value="{{ $item->warnaproduk }}">{{ $item->warnaproduk }}</option>
                                    @endforeach
                                </select></td>
                            <tr>
                                <td colspan="2">
                                    <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                        Ukuran</label>

                                </td>
                                <td> <select id="warna" name="ukuranproduk"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>--- Pilih ukuran ---</option>
                                    @foreach ($ukuran as $data)
                                        <option value="{{ $item->ukuranproduk }}">{{ $item->warnaproduk }}</option>
                                    @endforeach
                                </select>
                            </td>
                            </tr>  --}}

                            </table>
                        </div>
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
                            <table>
                                <form class="" action="/produk_add_keranjang/{{ $item->id }}" method="POST">
                                    @csrf
                                    <tr>
                                        <td colspan="2">
                                            <label for="countries"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Atur
                                                Jumlah</label>

                                        </td>
                                        <td> <input type="number" name="jumlah" class="rounded-lg w-16" value=1></td>
                                    <tr>
                                        <td colspan="3">
                                            {{--  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">  --}}


                                            <button type="submit"
                                                class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-orange-400 to-yellow-300 w-44 rounded-lg mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-2 py-3 text-center align-middle font-bold uppercase transition-all text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-cart-plus-fill me-2"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                                </svg> Keranjang
                                            </button>






                                        </td>

                                    </tr>
                                </form>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="mb-8 ">
            <div class="container">
                <div class="px-8">
                    <h5>Deskripsi</h5>
                    <p class="font-bold">{{ $item->deskripsishort }}</p>
                    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">
                        <p class="justify-center text-justify">{{ $item->deskripsiproduk }}</p>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="container">
                <div class="px-8">

                    @if ($item->ulasan->count() > 0)


                        <h5>Ulasan Pelanggan ({{ $item->ulasan->count() }})</h5>



                        <div class="grid gird-cols-2 gap-4">
                            <div>


                                @foreach ($item->ulasan as $ulasan)
                                    <div class=" ">
                                        <figure class="flex flex-col items-start justify-center p-8 text-center ">

                                            <figcaption class="flex items-center justify-center space-x-3">
                                                <img class="rounded-full w-14 h-14"
                                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                                    alt="profile picture">
                                                <div class="space-y-0.5 font-medium dark:text-white text-left">

                                                    <div class="grid grid-cols-2 gap-4">
                                                        <div class="flex">
                                                            <div>
                                                                <div class="font-bold text-start me-4">
                                                                    {{ $ulasan->user->name }}</div>
                                                            </div>
                                                            <div>
                                                                <div class="font-bold text-end">
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        @if ($i <= $ulasan->bintang)
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                fill="currentColor"
                                                                                class="bi bi-star-fill text-orange-400"
                                                                                viewBox="0 0 16 16">
                                                                                <path
                                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                            </svg>
                                                                        @else
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                fill="currentColor"
                                                                                class="bi bi-star-fill "
                                                                                viewBox="0 0 16 16">
                                                                                <path
                                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                            </svg>
                                                                        @endif
                                                                    @endfor



                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="text-sm text-gray-500 dark:text-gray-400">
                                                        "{{ $ulasan->ulasan }}"</div>
                                                </div>
                                            </figcaption>
                                        </figure>

                                    </div>
                                @endforeach
                            </div>

                        </div>
                    @else
                    <h5>Ulasan Pelanggan ({{ $item->ulasan->count() }})</h5>



                    <div class="grid gird-cols-2 gap-4">
                        <div>



                                <div class=" ">
                                    <p>Belum ada review untuk produk ini.</p>

                                </div>

                        </div>

                    </div>
                        @endif
                </div>
            </div>
        </section>
    @endforeach
@endsection
