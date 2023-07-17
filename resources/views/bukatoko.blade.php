<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buka Toko</title>
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
                    <li>
                        <a href="/login"
                            class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-gradient-to-tl from-gray-400 to-gray-100 rounded-3.5xl mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-8 py-2 text-center align-middle font-bold uppercase text-slate-800 transition-all">Sign
                            In</a>
                    </li>
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
                            <p class="text-white">Memulai untuk jual beli
                                dengan cara terbaru</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                        <div
                            class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">


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
                                <form role="form text-left" action="/buka-toko_aksi" method="post">
                                    @csrf

                                    <div class="mb-4 "  v-if="is_store_open">
                                        <label for="countries"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Toko</label>
                                            <input name="status_toko" hidden value=1
                                             class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-yellow-300 dark:focus:ring-orange-400 dark:focus:bg-orange-400 text-orange-400 dark:bg-gray-700 dark:border-gray-600" >
                                        <input type="text" id="toko_baru" name="nama_toko"
                                            class="text-sm toko_baru focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            required
                                            autocomplete="nama_toko"
                                            autofocus />
                                    </div>
                                    <div class="mb-4"  v-if="is_store_open">

                                        <label for="toko_baru"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                            <select id="toko_baru"  name="kategori_id"
                                            class="bg-gray-50 toko_baru border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-fuchsia-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-400 dark:focus:border-orange-400" \>
                                            <option selected >--- Pilih Kategori ---</option>
                                            @foreach ($kategori as $data)

                                            <option value="{{$data->id}}" >{{$data->kategori}}</option>
                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="min-h-6 pl-6.92 mb-0.5 block">
                                        <input id="terms"
                                            class="w-4.92 h-4.92 ease-soft -ml-6.92 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100"
                                            type="checkbox" value="" checked />
                                        <label
                                            class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700"
                                            for="terms"> I agree the <a href="javascript:;"
                                                class="font-bold text-slate-700">Terms and Conditions</a> </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-yellow-300 to-orange-400 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Buka Toko</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>
<script src="/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>

</html>
