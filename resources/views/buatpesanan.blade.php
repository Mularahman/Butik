@extends('layouts.app')
@section('title')
    Keranjang
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
@section('content')
    <section class="mt-32">
        <div class="container">

            <ol class="px-8 ml-3 flex flex-wrap ">
                <li class=" text-dark opacity-50"><a href="/home">Home</a></li>
                <span class="mx-2 text-gray-400">/</span>
                <li class=" text-dark opacity-50"><a href="/keranjang">Keranjang</a></li>
                <span class="mx-2 text-gray-400">/</span>
                <li class=" font-bold">Konfirmasi Pengiriman</li>
            </ol>


        </div>

        <div class="container p-4 px-4 ">
            <div class="px-8">
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-1">
                    <div class="lg:col-span-2 ">
                        <div class="flex-wrap flex">

                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white  rounded-2xl bg-clip-border">
                                <div
                                    class="border-black/12.5  relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border ">

                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto mb-5">
                                            <div class="px-4">

                                                <h5 class="mb-0 font-bold dark:text-white">Alamat Pengiriman</h5>
                                                <p class="mb-0 leading-normal text-sm">Informasi Pengiriman</p>
                                            </div>
                                            <form class="space-y-6  px-6" action="/checkout" method="POST">
                                                @csrf

                                                <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">

                                                    <div>
                                                        <label for="address"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address
                                                            1</label>
                                                        <input type="text" value="{{ $user->alamat1 }}" name="alamat1"
                                                            id="address" placeholder=""
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required>
                                                    </div>
                                                    <div>
                                                        <label for="address2"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address
                                                            2</label>
                                                        <input type="text" value="{{ $user->alamat2 }}" name="alamat2"
                                                            id="address2" placeholder=""
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required>
                                                    </div>


                                                </div>
                                                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">

                                                    <div>
                                                        <label for="country"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Negara</label>
                                                        <input type="text" value="{{ $user->negara }}" name="negara"
                                                            id="country" placeholder=""
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required>
                                                    </div>


                                                    <div>
                                                        <label for="Province"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>


                                                        <select id="Province" name="provinsi_id"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option selected>--- Pilih Provinsi ---</option>
                                                            @foreach ($provinsi as $data)
                                                                <option value="{{ $data->provinsi }}">
                                                                    {{ $data->provinsi }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>
                                                    <div>
                                                        <label for="kategori"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten
                                                            / Kota</label>


                                                        <select id="kota" name="kota_id"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option selected>--- Pilih Kota ---</option>
                                                            @foreach ($kota as $data)
                                                                <option value="{{ $data->kota }}">{{ $data->kota }}
                                                                </option>
                                                            @endforeach

                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                                    <div>
                                                        <label for="kategori"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>


                                                        <select id="kota" name="kecamatan_id"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option selected>--- Pilih Kecamatan ---</option>
                                                            @foreach ($kecamatan as $data)
                                                                <option value="{{ $data->kecamatan }}">
                                                                    {{ $data->kecamatan }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>


                                                    <div>
                                                        <label for="postalcode"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                                                            Pos</label>
                                                        <input type="number" value="{{ $user->kodepos }}" name="kodepos"
                                                            id="postalcode" placeholder=""
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required>
                                                    </div>
                                                    <div>
                                                        <label for="mobile"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                                            WA / Telepon</label>
                                                        <input type="number" value="{{ $user->no_hp }}" name="no_hp"
                                                            id="mobile" placeholder=""
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required>
                                                    </div>
                                                    <div>
                                                        <label for="kurir"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jasa
                                                            Kurir</label>


                                                        <select id="kurir" name="kurir"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option selected>--- Pilih Kurir ---</option>
                                                            @foreach ($kurir as $data)
                                                                <option value="{{ $data->kurir }}">
                                                                    {{ $data->kurir }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>


                                                </div>

                                                <div>
                                                    <label for="mobile"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>


                                                    <textarea id="message" name="catatan" rows="4"
                                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        placeholder="Write your thoughts here..."></textarea>

                                                </div>







                                                <div
                                                    class="flex flex-wrap items-center justify-end border-t border-solid shrink-0 px-3 border-slate-100 rounded-b-xl">
                                                    <button type="submit"
                                                        class="p-2.5  mt-5 w-full text-sm font-medium text-center text-white bg-gradient-to-tl from-gray-900 hover:scale-102  to-slate-800 rounded-lg inline-block cursor-pointer border-0 bg-transparent">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex-wrap flex">

                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white  rounded-2xl bg-clip-border">
                                <div
                                    class="border-black/12.5  relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border ">

                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto mb-5">
                                            <div class="px-4 mb-6">

                                                <h5 class="mb-0 font-bold dark:text-white">Informasi Pembayaran</h5>
                                                <p class="mb-0 leading-normal text-sm">Informasi Pembayaran</p>
                                            </div>
                                            <div class="space-y-6  px-6">
                                                <form class="" action="/diskon" method="POST">
                                                    @csrf
                                                    <div class="flex">
                                                        {{--  <label for="kupon"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kupon Diskon</label>  --}}
                                                        <div class="pt-6">

                                                            <input type="text" value="" name="diskon"
                                                                id="kupon" placeholder="Masukkan Kode"
                                                                class="bg-gray-50 me-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                        </div>
                                                        <div class="pt-1">
                                                            <button type="submit"
                                                                class="p-2.5  mt-5 w-20 text-sm font-medium text-center text-white bg-gradient-to-tl from-orange-400 to-yellow-300 hover:scale-102 rounded-lg inline-block cursor-pointer border-0 bg-transparent">
                                                                Gunakan
                                                            </button>
                                                        </div>

                                                    </div>
                                                </form>
                                                <form action="" method="post">


                                                        <div class="flex-auto px-0 pt-0 pb-2">
                                                          <div class="p-0 overflow-x-auto">
                                                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                                              <thead class="align-bottom">
                                                                <tr>
                                                                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Diskon</th>
                                                                  <th class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-red-400 opacity-70">: - Rp. 0</th>

                                                                </tr>
                                                                <tr>
                                                                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Ongkos Kirim</th>
                                                                  <th class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">: Rp. 0</th>

                                                                </tr>
                                                                <tr>
                                                                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Sub Total</th>
                                                                  <th class="px-6 py-3 pl-2 font-bold text-left  align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">: Rp. 500</th>

                                                                </tr>
                                                                <tr class="bg-gray-100">
                                                                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent shadow-none text-xxs  tracking-none whitespace-nowrap text-slate-400 ">Total Bayar</th>
                                                                  <th class="px-6 py-3 pl-2 font-bold text-left align-middle bg-transparent shadow-none text-xxs tracking-none whitespace-nowrap text-slate-400 ">: Rp. 500</th>

                                                                </tr>
                                                              </thead>

                                                            </table>
                                                          </div>
                                                        </div>

                                                    <div
                                                        class="flex flex-wrap items-center justify-end border-t border-solid shrink-0 px-3 border-slate-100 rounded-b-xl">
                                                        <button type="submit"
                                                            class="p-2.5  mt-5 w-full text-sm font-medium text-center text-white bg-gradient-to-tl from-orange-400 to-yellow-300 hover:scale-102 rounded-lg inline-block cursor-pointer border-0 bg-transparent">
                                                            Buat Pesanan
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

                </div>
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-1">
                    <div>
                        <div class="flex-wrap flex">

                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white  rounded-2xl bg-clip-border">
                                <div
                                    class="border-black/12.5  relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border ">

                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto mb-5">
                                            <div class="px-4">

                                                <h5 class="mb-0 font-bold dark:text-white">Cek Ongkos Kirim</h5>
                                                <p class="mb-0 leading-normal text-sm">Informasi Ongkir</p>
                                            </div>
                                            <form class="space-y-6  px-6" action="/cekongkir" method="POST">
                                                @csrf
                                                <div>
                                                    <label for="Province"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>


                                                    <select id="Province" name="provinsi_id"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option selected>--- Pilih Provinsi ---</option>
                                                        @foreach ($provinsi as $data)
                                                            <option value="{{ $data->provinsi }}">
                                                                {{ $data->provinsi }}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                                <div>
                                                    <label for="kategori"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten
                                                        / Kota</label>


                                                    <select id="kota" name="kota_id"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option selected>--- Pilih Kota ---</option>
                                                        @foreach ($kota as $data)
                                                            <option value="{{ $data->kota }}">{{ $data->kota }}
                                                            </option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                                <div>
                                                    <label for="kategori"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>


                                                    <select id="kota" name="kecamatan_id"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option selected>--- Pilih Kecamatan ---</option>
                                                        @foreach ($kecamatan as $data)
                                                            <option value="{{ $data->kecamatan }}">
                                                                {{ $data->kecamatan }}</option>
                                                        @endforeach

                                                    </select>

                                                </div>



                                                <div>
                                                    <label for="mobile"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>


                                                    <textarea id="message" name="catatan" rows="4"
                                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        placeholder="Write your thoughts here..."></textarea>

                                                </div>







                                                <div
                                                    class="flex flex-wrap items-center justify-end border-t border-solid shrink-0 px-3 border-slate-100 rounded-b-xl">
                                                    <button type="submit"
                                                        class="p-2.5  mt-5 w-full text-sm font-medium text-center text-white bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 rounded-lg inline-block cursor-pointer border-0 bg-transparent">
                                                        Cek Ongkir
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2 ">
                        <div class="flex-wrap flex">

                            <div
                                class="relative flex-auto mx-2 flex-col min-w-0 mb-6 break-words bg-white  rounded-2xl bg-clip-border">
                                <div
                                    class="border-black/12.5  relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border ">

                                    <div class="flex-auto p-6 px-0 pb-2">
                                        <div class="overflow-x-auto mb-5">
                                            <div class="px-4 mb-6">

                                                <h5 class="mb-0 font-bold dark:text-white">Hasil Pengecekan </h5>
                                                <p class="mb-0 leading-normal text-sm">Informasi Ongkir</p>
                                            </div>
                                            <div class="space-y-6  px-6">
                                                <div>

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
        </div>



    </section>
@endsection
