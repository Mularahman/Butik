@extends('layouts.app')
@section('title')
    Detail Produk
@endsection
@section('content')
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

                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                <img class="h-[432px] w-full rounded-lg justify-center align-middle items-center"
                                    src="/frontend/img/model1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1">
                        <div class="flex-wrap flex ">


                            <div
                                class="relative w-28  md:w-40 lg:w-44 cursor-pointer mx-1 lg:mx-8 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                <img class="h-32 w-full rounded-lg justify-center align-middle items-center"
                                    src="/frontend/img/model1.png" alt="">
                            </div>
                            <div
                                class="relative w-28 md:w-40 lg:w-44  cursor-pointer mx-1 lg:mx-8 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                <img class="h-32 w-full rounded-lg justify-center align-middle items-center"
                                    src="/frontend/img/model1.png" alt="">
                            </div>
                            <div
                                class="relative w-28 md:w-40 lg:w-44 cursor-pointer mx-1  lg:mx-8 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                <img class="h-32 w-full rounded-lg justify-center align-middle items-center"
                                    src="/frontend/img/model1.png" alt="">
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class=" mb-8">
        <div class="container px-4">
            <div class="px-10">
                <h4>Baju Batik</h4>

                    <h5 class="font-bold text-lg relative z-10 text-transparent bg-gradient-to-tl from-yellow-300 to-orange-400 bg-clip-text">Rp. 350.000</h5>

                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2">
                    <div>
                        <table>
                            <tr>
                                <td colspan="2">Berat </td>
                                <td>: 500 Gram</td>
                            </tr>
                            <tr>
                                <td colspan="2">Stok </td>
                                <td>: 5</td>
                            </tr>

                        </table>
                    </div>
                    <div>
                        <table>
                            <tr>
                                <td colspan="2">
                                    <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                        Warna</label>

                                </td>
                                <td> <select id="countries"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Pilih Warna</option>
                                        <option value="US">Merah</option>
                                        <option value="CA">Hitam</option>
                                        <option value="FR">Cream</option>

                                    </select></td>
                            <tr>
                                <td colspan="2">
                                    <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                        Ukuran</label>

                                </td>
                                <td> <select id="countries"
                                        class="block w-full p-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Pilih Warna</option>
                                        <option value="US">M</option>
                                        <option value="CA">L</option>
                                        <option value="FR">XL</option>

                                    </select></td>
                            </tr>

                        </table>
                    </div>
                    <div>
                        <table>
                            <tr>
                                <td colspan="2">
                                    <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Atur Jumlah</label>

                                </td>
                                <td> <input type="number" class="rounded-lg w-16"></td>
                            <tr>
                                <td colspan="3" >
                                    <button type="submit"
                                    class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-orange-400 to-yellow-300 w-44 rounded-lg mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-2 py-3 text-center align-middle font-bold uppercase transition-all text-white">+ Keranjang</button>

                                </td>

                            </tr>

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
                <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">

                    <p class="justify-center text-justify">Baju batik kami dibuat menggunakan bahan premium dengan dipadukan jahitan berkualitas membuat baju batik ini menjadi produk yang nyaman dipakai</p>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="px-8">
                <h5>Ulasan</h5>
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-start px-8 ">
                        <img class="h-20 w-20 mt-4 rounded-lg justify-center rounded-circle  items-center"
                            src="/frontend/img/model1.png" alt="">
                            <span class="pt-4">*****</span>
                        <span class=" text-sm font-bold font-italic">1 minggu yang lalu</span>
                        <p>" Kualitas produk Bagus "</p>
                </div>
            </div>
        </div>
    </section>
@endsection
