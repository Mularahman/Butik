<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setting Alamat</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("input[name='status_toko']").click(function () {
                if ($("#chkYes").is(":checked")) {
                    $(".toko_baru").removeAttr("disabled");
                    $(".toko_baru").focus();
                } else {
                    $(".toko_baru").attr("disabled", "disabled");
                }
            });
        });
    </script>
</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">

    <!-- Navbar -->
    <nav
        class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start">
        <div class="container flex items-center justify-between py-0 flex-wrap-inherit">
            <a class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-white lg:ml-0" href="/home"> Butik
                Imun </a>
            <button navbar-trigger
                class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg ease-soft-in-out lg:hidden"
                type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                    <span bar1
                        class="w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                    <span bar2
                        class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                    <span bar3
                        class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                </span>
            </button>
            <div navbar-menu
                class="items-center flex-grow transition-all ease-soft duration-350 lg-max:bg-white lg-max:max-h-0 lg-max:overflow-hidden basis-full rounded-xl lg:flex lg:basis-auto">
                <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                    <li>
                        <a class="flex items-center px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75"
                            aria-current="page" href="/home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="block px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75"
                            href="/about">
                            About
                        </a>
                    </li>
                    <li>
                        <a class="block px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75"
                            href="/contact">
                            Contact
                        </a>
                    </li>
                    {{--  <li>
              <a class="block px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75" href="/galleries">
                Galleries
              </a>
            </li>  --}}
                </ul>

                <ul class="hidden pl-0 mb-0 list-none lg:block lg:flex-row">
                    @guest
                        <li>

                            <a href="/login"
                                class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-yellow-300 to-orange-400 rounded-3.5xl mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-8 py-2 text-center align-middle font-bold uppercase text-white transition-all">Sign
                                In</a>
                        </li>
                    @endguest
                    @auth
                    {{--  @foreach ($user as $item)  --}}


                        <li class="flex items-center">


                            <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                                class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                type="button">
                                <span class="sr-only">Open user menu</span>
                                @if (Auth()->user()->image)
                                    <img class="w-8 h-8 rounded-full"
                                        src="{{ asset('storage/' . auth()->user()->image) }}" alt="user photo">
                                @else
                                    <img src="{{ 'https://ui-avatars.com/api/?size=32&name=' . auth()->user()->name }}"
                                        class="w-8 h-8 rounded-full border-2 border-orange-300 " alt="{{ auth()->user()->name }}">
                                @endif

                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownAvatar"
                                class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600 ">

                                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white ">
                                    <figcaption class="flex items-center justify-center space-x-2">
                                        @if (Auth()->user()->image)
                                        <img class="w-10 h-10 rounded-full"
                                            src="{{ asset('storage/' . auth()->user()->image) }}" alt="user photo">
                                    @else
                                        <img src="{{ 'https://ui-avatars.com/api/?size=32&name=' . auth()->user()->name }}"
                                            class="w-12 h-12 rounded-full border-2 border-orange-300 " alt="{{ auth()->user()->name }}">
                                    @endif
                                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                                            <div>{{ auth()->user()->name }}</div>
                                        <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                                        </div>
                                    </figcaption>
                                    @if (Auth()->user()->role == 'pelanggan')
                                    <a href="/buka-toko" type="button" class="text-gray-900 mt-3 w-full bg-white border border-gray-300 focus:outline-none text-center hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-xs px-3 py-2 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Switch To Seller</a>
                                    @else
                                    <a href="/dashboard-member" type="button" class="text-gray-900 mt-3 w-full bg-white border border-gray-300 focus:outline-none text-center hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-xs px-3 py-2 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Switch To Seller</a>
                                    @endif

                                </div>

                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownUserAvatarButton">
                                    <li>
                                        <a href="/transaction"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My Transaction</a>
                                    </li>
                                    <li>
                                        <a href="/myaccount"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My Account</a>
                                    </li>
                                    {{--  <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li>  --}}
                                </ul>
                                <div class="py-2">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full text-start px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                            out</button>
                                    </form>
                                </div>
                            </div>

                            <span
                                class="font-medium me-2 mx-2 leading-normal text-sm text-white dark:text-gray-300">Hi,
                                {{ auth()->user()->name }}</span>
                            @yield('keranjang')


                        </li>
                        {{--  @endforeach  --}}
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <section class="min-h-screen mb-32">
            <div class="relative flex items-start pt-12 pb-44 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl"
                style="background-image: url('/frontend/img/a.jpg')">
                <span
                    class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
                <div class="container z-10">
                    <div class="flex flex-wrap justify-center -mx-3">
                        <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                            <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
                            <p class="text-white">Silahkan atur alamat toko terlebih dahulu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">



                            <div class="flex-auto p-6">
                                @if (session()->has('error'))
                                    <div id="alert-2"
                                        class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                @endif
                                <div
                    class="border-black/12.5 relative -mx-3 -mt-48 md:-mt-56 lg:-mt-48  shadow-soft-xl  flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

                    <div class="flex-auto  px-0 pb-2">
                        <div class="overflow-x-auto">
                            <div class="px-6 py-3 lg:px-8">


                                <form class="space-y-6" action="/setting-alamat/{{$id}}"
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


                                            <select id="pilihprovince" name="provinsi_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                                <option selected>--- Select Province ---</option>
                                                @foreach ($provinsi as $data)

                                                <option value="{{$data->id}}">{{$data->provinsi}}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                        <div>
                                            <label for="kategori"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>


                                            <select id="pilihkota" name="kota_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>--- Select City ---</option>


                                                <option value=""></option>


                                            </select>

                                        </div>
                                        <div>
                                            <label for="kategori"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">District</label>


                                            <select id="kecamatan" name="kecamatan_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>--- Select District ---</option>


                                                <option value=""></option>


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
                                            Mulai Berjualan
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                </div>
            </div>
        </section>
    </main>
    <script>
        document.getElementById('pilihprovince').addEventListener('change', function() {
            var provinsi = this.value;
            if (provinsi) {

                fetch('/kota/' + provinsi)
                .then(response => response.json())
                .then(data => {
                    var kotaSelect = document.getElementById('pilihkota');
                    kotaSelect.innerHTML = '<option value="">--- Pilih Kabupaten / Kota ---</option>';
                    console.log(data);
                    data.forEach(kota => {
                            var option = document.createElement('option');
                            option.value = kota.id;
                            option.textContent = kota.kota;
                            kotaSelect.appendChild(option);
                        });
                    });
            } else {
                var kotaSelect = document.getElementById('kota');
                kotaSelect.innerHTML = '<option value="">--- Pilih Kabupaten / Kota ---</option>';
            }
        });
        document.getElementById('pilihkota').addEventListener('change', function() {
            var kota = this.value;
            if (kota) {
                fetch('/kecamatan/' + kota)
                    .then(response => response.json())
                    .then(data => {
                        var kecamatanSelect = document.getElementById('kecamatan');
                        kecamatanSelect.innerHTML = '<option value="">--- Pilih Kecamatan ---</option>';
                        data.forEach(kecamatan => {

                            var option = document.createElement('option');
                            option.value = kecamatan.id;
                            option.textContent = kecamatan.kecamatan;
                            kecamatanSelect.appendChild(option);
                        });
                    });
            } else {
                var kecamatanSelect = document.getElementById('kecamatan');
                kecamatanSelect.innerHTML = '<option value="">--- Pilih Kecamatan ---</option>';
            }
        });
    </script>
</body>

<script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>
<script src="/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>

</html>
