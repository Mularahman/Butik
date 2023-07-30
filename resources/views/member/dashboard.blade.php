@extends('member.layouts.app')
@section('title')
    Dahsboard
@endsection

@section('breadcrum')
    <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page">Dashboard</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
    </nav>
@endsection
@section('content')
    <section class="px-10 py-4">


        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class=" flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Transaction</p>
                                    <h5 class="mb-0 font-bold">
                                        {{ $transaction->count() }}
                                        {{--  <span class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>  --}}
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 py-2.7 flex h-12 w-12 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                                        fill="currentColor"
                                        class="bi bi-clipboard-data-fill  flex-shrink-0   text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z" />
                                        <path
                                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card2 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class=" flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">
                                        Customers</p>
                                    <h5 class="mb-0 font-bold">
                                        {{ $customer->count() }}
                                        {{--  <span class="leading-normal text-sm font-weight-bolder text-lime-500">+3%</span>  --}}
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 py-2.7 flex h-12 w-12 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                                        fill="currentColor" class="flex-shrink-0 text-white " viewBox="0 0 640 512">
                                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card3 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class=" flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Produk
                                    </p>
                                    <h5 class="mb-0 font-bold">
                                        {{ $produk->count() }}
                                        {{--  <span class="leading-normal text-red-600 text-sm font-weight-bolder">-2%</span>  --}}
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 py-2.7 flex h-12 w-12 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                                        fill="currentColor" class="flex-shrink-0 text-white " viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card4 -->
            <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                <div class=" flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Pendapatan</p>
                                    <h5 class="mb-0 font-bold">
                                        Rp. {{ number_format($pendapatan) }}
                                        {{--  <span class="leading-normal text-sm font-weight-bolder text-lime-500">+5%</span>  --}}
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 py-2.7 flex h-12 w-12 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                                        fill="currentColor" class="flex-shrink-0 text-white " viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-10 py-2">
        <span>Recent Transaction</span>
        @foreach ($recent as $transaksi)
        <div
            class="lack/12.5 shadow-soft-xl  flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border mt-3">

            <div class="flex-auto px-0  py-2">
                <div class="overflow-x-auto table-responsive">

                    <table id="dataTable" datatable id="datatable-search"
                        class="table table-flush items-center w-full mb-0 align-top border-gray-200 text-slate-500">

                        <tbody>

                            <tr>

                                <td class="p-2 align-middle text-center bg-transparent  whitespace-nowrap">
                                    <div class="mt-2 avatar-group">
                                        <div>

                                            <img src="{{ asset('storage/' . $transaksi->produk->gambar->first()->thumbnail) }}"
                                                class="inline-flex items-center justify-center  text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                alt="atlassian" />
                                        </div>

                                    </div>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs"> {{$transaksi->produk->namaproduk}} </span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">{{$transaksi->transaction->user->name}}</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">{{$transaksi->transaction->tanggal}}</span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent  text-sm whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-xs">Rp. {{number_format($transaksi->transaction->total_harga)}}</span>
                                </td>

                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent text-sm whitespace-nowrap">

                                    <a type="button" href="/transaction_details/{{$transaksi->id}}" 
                                        data-tooltip-target="detail"
                                        class="text-white align-middle transition-all cursor-pointer bg-gradient-to-tl from-blue-600 to-cyan-400 ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs   focus:outline-none  font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center mr-2 ">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg>
                                    </a>
                                    <div id="popup-modal" tabindex="-1"
                                        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">

                                    </div>

                                    <div id="detail" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Lihat Detail
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>



                                </td>

                            </tr>


                        </tbody>


                    </table>

                </div>
            </div>
        </div>
       @endforeach

    </section>
@endsection
