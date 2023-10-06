@extends('admin.layouts.app')

@section('title')
    Data Customer
@endsection
@section('breadcrum')

    <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                aria-current="page">Data Customer</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">Data Customer</h6>
    </nav>

@endsection
@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 ">

<!-- Modal toggle -->
<button data-modal-target="tambah" data-modal-toggle="tambah" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3" type="button">
  Tambah Data
</button>

<!-- Main modal -->
<div id="tambah" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="tambah">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <div class="flex items-center justify-between border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Data Kategori</h3>
                </div>
                <form class="space-y-6" action="/tambah_customer" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="name" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                    </div>
                    <div>
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                    </div>
                    <div>
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                    </div>



                    <div class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">

                        <button type="submit" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs mb-3">
                            Submit
                        </button>
                    </div>




                </form>
            </div>
        </div>
    </div>
</div>

                <div
                    class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5  mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <div class="">

                            {{--  <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium">
                                    {{session('success')}}
                                </div>
                                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                                  <span class="sr-only">Close</span>
                                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                              </div>  --}}


                        </div>
                        <div class="flex flex-wrap mt-0 -mx-3">
                            <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                                <h6
                                    class="pt-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent  text-xxs whitespace-nowrap text-slate-400 opacity-70">
                                    Data Customer <span
                                        class="bg-blue-100 text-blue-800 text-sm tracking-normal uppercase opacity-70 font-bold mr-2 px-3 py-1 rounded-lg p-4 dark:bg-blue-900 dark:text-blue-300">{{$data->count()}}</span>
                                </h6>

                            </div>
                            <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">


                                <form class="flex items-center" action="/customer-admin" method="GET">
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
                                        <input type="text" id="simple-search"  name="search"
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
                                            class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Gambar</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Username</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Email</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Role</th>

                                        {{--  <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Slug</th>  --}}
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item => $value)
                                    <tr>


                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <span class="px-3 py-3 items-center justify-center">{{$loop->iteration}}</span>
                                                </div>

                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group">
                                                <div>
                                                    @if ($value->image)
                                                    <img class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" src="{{ asset('storage/' . $value->image) }}"
                                                    alt="user photo">
                                                    @else
                                                        <img src="{{ 'https://ui-avatars.com/api/?size=32&name=' . $value->name }}"
                                                        class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                            alt="{{ auth()->user()->name }}">
                                                    @endif

                                                </div>

                                            </div>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> {{$value->name}} </span>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> {{$value->email}} </span>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> {{$value->role}} </span>
                                        </td>
                                        {{--  <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> {{$item->slug}} </span>
                                        </td>  --}}
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">

                                            <button type="button"  data-modal-target="popup-modal{{$value->id}}" data-modal-toggle="popup-modal{{$value->id}}" data-tooltip-target="delete"

                                                class="text-white align-middle transition-all cursor-pointer bg-gradient-to-tl from-red-700 to-red-500 ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs   focus:outline-none  font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center mr-2 ">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </button>
                                            <div id="popup-modal{{$value->id}}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                @include('admin.Pelanggan.hapuspelanggan')
                                            </div>

                                            <div id="delete" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                Delete
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                            <button type="button"
                                           data-modal-target="edit{{$value->id}}" data-modal-toggle="edit{{$value->id}}" data-tooltip-target="edit"

                                                class="text-white align-middle transition-all cursor-pointer bg-gradient-to-tl from-blue-700 to-blue-500 ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-105 active:opacity-85 hover:shadow-soft-xs   focus:outline-none  font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center mr-2 ">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                  </svg>
                                            </button>
                                            <div id="edit{{$value->id}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                @include('admin.Pelanggan.editpelanggan')
                                            </div>

                                            <div id="edit" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                Edit
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>

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
