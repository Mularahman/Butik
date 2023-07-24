@extends('member.layouts.app')
@section('title')
    My Product
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
        <h6 class="mb-0 font-bold capitalize">My Product</h6>
    </nav>
@endsection
@section('content')
    <section class="px-10 py-4">


        <!-- Modal toggle -->
        <a href="/myproduct_add"
            class="flex px-4 py-3 w-[167px] font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl  from-green-600 to-lime-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-plus-circle-fill me-2" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
            </svg> Add New Produk
        </a>

    </section>
    <section class="px-10 py-2">
        <h6 class="mb-0 font-bold capitalize"></h6>
        <div class="container ">
            <div class="row flex-wrap flex">
                <div class="relative flex-auto mx-3 flex-col min-w-0 mb-6 break-words">
                    <div class="flex-auto p-4">
                        <div class="flex-wrap justify-center -mx-3 grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-4 ">
                            @foreach ($produk as $item)

                                <div
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="/myproduct_edit/{{$item->id}}">

                                        <img class="h-36 w-full p-3 rounded-[20px]"
                                        src="{{ asset('storage/' . $item->gambar->first()->thumbnail) }}" alt="" />

                                    </a>
                                    <div class="p-3 pt-0">
                                        <a href="/myproduct_edit/{{$item->id}}">
                                            <h5 class="font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $item->namaproduk }}</h5>
                                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">
                                                {{ $item->deskripsiproduk }}</p>
                                        </a>

                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
