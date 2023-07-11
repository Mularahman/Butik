@extends('layouts.app')
@section('title')
    Konfirmasi Alamat Pengiriman
@endsection
@section('keranjang')
<a href="/keranjang" type="button"
                                            class="relative inline-flex items-center p-2 me-4 text-sm font-medium text-center text-white bg-gradient-to-tl from-yellow-300 to-orange-400 rounded-3.5xl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                            </svg>
                                            <span class="sr-only">Notifications</span>
                                            <div
                                                class="absolute inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-1.5 p-1 -right-2 dark:border-gray-900">
                                                20</div>
                                        </a>
@endsection
@section('content')
    <section class="mt-32">
        <div class="container">

            <ol class="px-8 ml-3 flex flex-wrap ">
                <li class=" text-dark opacity-50"><a href="/home">Home</a></li>
                <span class="mx-2 text-gray-400">/</span>
                <li class=" text-dark opacity-50"><a href="/keranjang">Keranjang</a></li>
                <span class="mx-2 text-gray-400">/</span>
                <li class=" font-bold">Konfirmasi Alamat Pengiriman</li>
            </ol>


        </div>
        <div class="container p-4 px-4 ">
            <div class="px-8">
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-1">
                    <div class="lg:col-span-2 ">
                        <div class="flex-wrap flex">

                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                <div
                                    class="border-black/12.5  relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border ">

                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto mb-5 ">
                                            <div class="flex-0 w-full max-w-full px-3 m-auto lg:w-8/12">
                                                <form class=" mb-32" style="height: 402px;">
                                                    <div form="user"
                                                        class="absolute top-0 left-0 flex flex-col w-full min-w-0 p-4 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl  rounded-2xl bg-clip-border h-auto opacity-100 visible"
                                                        active="">
                                                        <h5 class="mb-0 font-bold dark:text-white">Alamat Pengiriman</h5>
                                                        <p class="mb-0 leading-normal text-sm">Informasi Pengiriman</p>
                                                        <div class="grid md:grid-cols-2 lg:grid-cols-2  gap-4">
                                                            <div class="flex flex-wrap mt-4 -mx-3">

                                                                <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                                                    <label
                                                                        class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                                                        for="First Name">Alamat 1</label>
                                                                    <input type="text" name="alamat1"
                                                                        placeholder="Username"
                                                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                                                </div>
                                                                <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                                                    <label
                                                                        class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                                                        for="Company">No Telepon/WA</label>
                                                                    <input type="text" name="notelpon" placeholder="+628"
                                                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                                                </div>
                                                            </div>
                                                            <div class="flex flex-wrap mt-4 -mx-3">
                                                                <div
                                                                    class="w-full max-w-full px-3 mt-4 flex-0 sm:mt-0 sm:w-6/12">
                                                                    <label
                                                                        class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                                                        for="Last Name">Alamat 2</label>
                                                                    <input type="text" name="alamat2"
                                                                        placeholder="email@gmail.com"
                                                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                                                </div>

                                                                <div
                                                                    class="w-full max-w-full px-3 mt-4 flex-0 sm:mt-0 sm:w-6/12">
                                                                    <label
                                                                        class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                                                        for="text Address">Kode Pos</label>
                                                                    <input type="text" name="kodepos"
                                                                        placeholder="eg. soft@dashboard.com"
                                                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid md:grid-cols-3 lg:grid-cols-3  gap-4">
                                                        <div class="flex flex-wrap mt-4 -mx-3">
                                                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">

                                                                <label for="countries"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                                                    an option</label>
                                                                <select id="countries"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    <option selected>Choose a country</option>
                                                                    <option value="US">United States</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="DE">Germany</option>
                                                                </select>

                                                            </div>

                                                        </div>
                                                        <div class="flex flex-wrap mt-4 -mx-3">
                                                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">

                                                                <label for="countries"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                                                    an option</label>
                                                                <select id="countries"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    <option selected>Choose a country</option>
                                                                    <option value="US">United States</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="DE">Germany</option>
                                                                </select>

                                                            </div>

                                                        </div>
                                                        <div class="flex flex-wrap mt-4 -mx-3">
                                                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">

                                                                <label for="countries"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                                                    an option</label>
                                                                <select id="countries"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    <option selected>Choose a country</option>
                                                                    <option value="US">United States</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="DE">Germany</option>
                                                                </select>

                                                            </div>

                                                        </div>



                                                    </div>
                                                    <div class="grid grid-cols-1 gap-4">
                                                        <div class="flex flex-wrap mt-4 -mx-3">
                                                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">


                                                            </div>
                                                            <div
                                                                class="w-full max-w-full px-3 mt-4 flex-0 sm:mt-0 sm:w-6/12">


                                                                <label for="message"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                                                    message</label>
                                                                <textarea id="message" rows="4"
                                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                    placeholder="Write your thoughts here..."></textarea>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1">
                        <div class="flex-wrap flex ">

                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white  rounded-2xl bg-clip-border">
                                <div
                                    class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

                                    <div class="flex-auto p-6 px-0 pb-2  mb-5">
                                        <div class="overflow-x-auto">
                                            <div class="px-5">

                                                <span class="font-bold">Ringkasan Pesanan</span>



                                                <table
                                                    class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                                    <thead class="align-bottom">
                                                        <tr>


                                                            <th
                                                                class="px-3 py-3 font-bold tracking-normal text-start uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                                Produk</th>
                                                            <th
                                                                class="px-3 py-3 font-bold tracking-normal text-end uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                                : Rp. 350.000</th>
                                                        </tr>
                                                        <tr>


                                                            <th
                                                                class="px-3 py-3 font-bold tracking-normal text-start uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                                Kuantitas</th>
                                                            <th
                                                                class="px-3 py-3 font-bold tracking-normal text-end uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                                : 1</th>
                                                        </tr>
                                                        <tr>


                                                            <th
                                                                class="px-3 py-3 font-bold tracking-normal text-start uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                                Sub Total</th>
                                                            <th
                                                                class="px-3 py-3 font-bold tracking-normal text-end uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                                                : Rp. 350.000</th>
                                                        </tr>
                                                        <tr>


                                                            <th
                                                                class="px-3 py-3 font-bold tracking-normal text-start uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 ">
                                                                Total Pembayaran</th>
                                                            <th
                                                                class="px-3 py-3 font-bold tracking-normal text-end uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400">
                                                                : Rp. 350.000</th>
                                                        </tr>

                                                    </thead>


                                                </table>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                <div
                                    class="border-black/12.5 relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

                                    <div class="flex-auto p-6 px-0 pb-2  mb-5">
                                        <div class="overflow-x-auto">
                                            <div class="px-5">

                                                <span class="font-bold">Pilih Metode Pembayaran</span>

                                                <div class="grid grid-cols-3 gap-4">

                                                    <div class="flex items-center justify-center">
                                                        <div class="">

                                                            <div class="flex flex-col items-center ">
                                                                <img class="h-16 w-16 mt-4 rounded-lg justify-center align-middle items-center"
                                                                    src="/frontend/img/model1.png" alt="">
                                                                <div class="flex items-center pt-3">
                                                                    <input id="orange-radio" type="radio"
                                                                        value="" name="colored-radio"
                                                                        class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                    <label for="orange-radio"
                                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Orange</label>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-center">
                                                        <div class="">

                                                            <div class="flex flex-col items-center ">
                                                                <img class="h-16 w-16 mt-4 rounded-lg justify-center align-middle items-center"
                                                                    src="/frontend/img/model1.png" alt="">
                                                                <div class="flex items-center pt-3">
                                                                    <input id="orange-radio" type="radio"
                                                                        value="" name="colored-radio"
                                                                        class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                    <label for="orange-radio"
                                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Orange</label>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-center">
                                                        <div class="">

                                                            <div class="flex flex-col items-center ">
                                                                <img class="h-16 w-16 mt-4 rounded-lg justify-center align-middle items-center"
                                                                    src="/frontend/img/model1.png" alt="">
                                                                <div class="flex items-center pt-3">
                                                                    <input id="orange-radio" type="radio"
                                                                        value="" name="colored-radio"
                                                                        class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                    <label for="orange-radio"
                                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Orange</label>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <a href="/success" type="submit"
                                                    class="p-2.5  mt-5 w-full text-sm font-medium text-center text-white bg-gradient-to-tl from-orange-400 hover:scale-102  to-yellow-300 rounded-lg inline-block cursor-pointer border-0 bg-transparent">

                                                    <span class="">Buat Pesanan</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
