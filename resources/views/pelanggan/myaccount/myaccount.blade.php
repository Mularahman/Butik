@extends('pelanggan.layouts.app')
@section('title')
    My Account
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
                aria-current="page">My Account</li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">My Account</h6>
    </nav>
@endsection
@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 ">
                <div class="grid lg:grid-cols-2 gap-4">
                    <div
                        class="border-black/12.5 mb-7 shadow-soft-xl  flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

                        <div class="flex-auto  px-0 pb-2">
                            <div class="overflow-x-auto">
                                <div class="px-6 py-3 lg:px-8">
                                    <h3 class="mb-0 font-bold dark:text-white">Basic Info</h3>

                                    <form class="space-y-6" action="/myaccount/update_profile/{{ $id }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div>
                                            <label for="yourname"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                                Name</label>
                                            <input type="text" value="{{ $user->name }}" name="name"
                                                id="yourname" placeholder=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="youremail"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                                Email</label>
                                            <input type="email" value="{{ $user->email }}" name="email"
                                                id="youremail" placeholder=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">

                                            <div>
                                                <label for="jeniskelamin"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                                    Gender</label>
                                                <select id="jeniskelamin" name="jenis_kelamin"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option selected>{{ $user->jenis_kelamin }}</option>
                                                    {{--  @foreach ($kategori as $data)  --}}
                                                    <option value="Laki - laki">Laki - laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                    {{--  @endforeach  --}}
                                                </select>
                                            </div>
                                            <div>
                                                <label for="tahun"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                                    Brithday</label>
                                                <input type="date" value="{{$user->tahun}}" name="tahun" id="tahun"
                                                    placeholder=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">
                                            <div>
                                                <label class="block mb-2 text-sm  font-medium text-gray-900 dark:text-white"
                                                    for="gambarInput">Your Image</label>
                                                <input
                                                    class="block w-full text-sm text-gray-600 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400"
                                                    name="image" multiple="multiple" id="gambarInput"
                                                    onchange="tampilkanGambar()" type="file">
                                            </div>

                                            <div id="previewGambar"
                                                class="h-40  w-40 content-center justify-center text-center flex"></div>
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
                    <div
                        class="border-black/12.5 mb-7 shadow-soft-xl  flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                        <div class="flex-auto  px-0 pb-2">
                            <div class="overflow-x-auto">
                                <div class="px-6 py-3 lg:px-8">
                                    <h3 class="mb-0 font-bold dark:text-white">Change Password</h3>

                                    <form class="space-y-6" action="/myaccount/update_password/{{ $id }}"
                                        method="POST">
                                        @csrf
                                        @method('put')
                                        <div>
                                            <label for="yourpassword"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                                Password</label>
                                            <input type="password" name="oldpassword" id="yourpassword" placeholder="********" value=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="newpassword"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                                Password</label>
                                            <input type="password" name="newpassword" id="newpassword" placeholder="********"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="confirmpassword"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                                Password</label>
                                            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="********"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
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
                <div
                    class="border-black/12.5  shadow-soft-xl  flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

                    <div class="flex-auto  px-0 pb-2">
                        <div class="overflow-x-auto">
                            <div class="px-6 py-3 lg:px-8">
                                <h3 class="mb-0 font-bold dark:text-white">Information Detail</h3>

                                <form class="space-y-6" action="/myaccount/update_alamat/{{$id}}"
                                    method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">

                                        <div>
                                            <label for="address"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address
                                                1</label>
                                            <input type="text" value="{{$user->alamat1}}" name="alamat1" id="address" placeholder=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="address2"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address
                                                2</label>
                                            <input type="text" value="{{$user->alamat2}}" name="alamat2" id="address2" placeholder=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>


                                    </div>
                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">

                                        <div>
                                            <label for="country"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                            <input type="text" value="{{$user->negara}}"  name="negara" id="country" placeholder=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>


                                        <div>
                                            <label for="Province"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>


                                            <select id="Province" name="provinsi_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>--- Select Province ---</option>
                                                @foreach ($provinsi as $data)

                                                <option value="{{$data->provinsi}}">{{$data->provinsi}}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                        <div>
                                            <label for="kategori"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>


                                            <select id="kota" name="kota_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>--- Select City ---</option>
                                                @foreach ($kota as $data)

                                                <option value="{{$data->kota}}">{{$data->kota}}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                        <div>
                                            <label for="kategori"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">District</label>


                                            <select id="kota" name="kecamatan_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>--- Select District ---</option>
                                                @foreach ($kecamatan as $data)

                                                <option value="{{$data->kecamatan}}">{{$data->kecamatan}}</option>
                                                @endforeach

                                            </select>

                                        </div>


                                        <div>
                                            <label for="postalcode"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Postal
                                                Code</label>
                                            <input type="number" value="{{$user->kodepos}}"  name="kodepos" id="postalcode" placeholder=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required>
                                        </div>
                                        <div>
                                            <label for="mobile"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile</label>
                                            <input type="number"  value="{{$user->no_hp}}" name="no_hp" id="mobile" placeholder=""
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
