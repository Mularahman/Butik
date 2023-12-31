@extends('member.layouts.app')
@section('title')
    Store Settings
@endsection

@section('breadcrum')
    <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page">Store Settings</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Store Settings</h6>
    </nav>
@endsection
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 ">




            <div
                class="border-black/12.5 shadow-soft-xl flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

                <div class="flex-auto  px-0 pb-2">
                    <div class="overflow-x-auto">

                        <div class="px-6 py-3 lg:px-8">

                            <form class="space-y-6" action="/store_aksi/{{$id}}" method="POST"
                                >
                                @csrf
                                @method('put')
                                <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">
                                    <div>
                                        <label for="Storename"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Store Name</label>
                                        <input type="text" value="{{$user->nama_toko}}" name="nama_toko" id="Storename" placeholder=""
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            required>
                                    </div>

                                    <div>
                                        <label for="kategori"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <select id="kategori" name="kategori_id"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>--- Select Category ---</option>
                                            @foreach ($kategori as $data)
                                                <option value="{{ $data->id }}">{{ $data->kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label for="namaproduk"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Store Status</label>
                                            <label for="countries"
                                            class="block mb-2 text-sm font-medium text-muted dark:text-white">Apakah saat ini toko anda buka ?</label>
                                            <div class="flex">
                                                @if ($user->status_toko == 1)
                                                <div class="flex items-center  me-6">
                                                    <input name="status_toko" value=1
                                                    id="chkYes"  type="radio"  class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-yellow-300 dark:focus:ring-orange-400 dark:focus:bg-orange-400 text-orange-400 dark:bg-gray-700 dark:border-gray-600" checked>
                                                    <label for="openStoreTrue" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                      Buka
                                                    </label>
                                                  </div>
                                                  <div class="flex items-center ">
                                                    <input name="status_toko" value=0
                                                    id="chkNo"  type="radio" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-yellow-300 dark:focus:ring-orange-400 text-orange-400 dark:focus:bg-orange-400 dark:bg-gray-700 dark:border-gray-600"
                                                    <label for="openStoreFalse" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                      Sementara Tutup
                                                    </label>
                                                  </div>
                                                </div>
                                                @else
                                                <div class="flex items-center  me-6">
                                                    <input name="status_toko" value=1
                                                    id="chkYes"  type="radio"  class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-yellow-300 dark:focus:ring-orange-400 dark:focus:bg-orange-400 text-orange-400 dark:bg-gray-700 dark:border-gray-600" >
                                                    <label for="openStoreTrue" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                      Buka
                                                    </label>
                                                  </div>
                                                  <div class="flex items-center ">
                                                    <input name="status_toko" value=0
                                                    id="chkNo"  type="radio" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-yellow-300 dark:focus:ring-orange-400 text-orange-400 dark:focus:bg-orange-400 dark:bg-gray-700 dark:border-gray-600" checked>
                                                    <label for="openStoreFalse" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                      Sementara Tutup
                                                    </label>
                                                  </div>
                                                </div>
                                                @endif

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
