<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />
    
</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    <div class="container sticky top-0 z-sticky">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                <!-- Navbar -->


                <nav
                    class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 mx-6 my-4 shadow-soft-2xl rounded-blur bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
                    <div class="flex items-center justify-between w-full p-0 pl-6 mx-auto flex-wrap-inherit">
                        <a class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0"
                            href="../pages/dashboard.html"> Butik Imun</a>
                        <button navbar-trigger
                            class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg ease-soft-in-out lg:hidden"
                            type="button" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span
                                class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                                <span bar1
                                    class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar2
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar3
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                            </span>
                        </button>
                        <div navbar-menu
                            class="items-center flex-grow overflow-hidden transition-all duration-500 ease-soft lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                            <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                                <li>
                                    <a class="flex items-center px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                                        aria-current="page" href="/home">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                                        href="/about">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                                        href="/contact">
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                                        href="/galleries">
                                        galleries
                                    </a>
                                </li>
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
                                            class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                                <div>{{ auth()->user()->name }}</div>
                                                <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                                            </div>
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownUserAvatarButton">
                                                <li>
                                                    <a href="/dashboard"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                </li>
                                                {{--  <li>
                                                    <a href="/setting"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                </li>  --}}
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
                                            class="font-medium me-2 mx-2 leading-normal text-sm text-gray-600 dark:text-gray-300">Hi,
                                            {{ auth()->user()->name }}</span>
                                        @yield('keranjang')


                                    </li>
                                    {{--  @endforeach  --}}
                                @endauth
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        @yield('content')
        <section class="mt-3">

            <footer class="container bg-white dark:bg-gray-900">
                <div class="mx-auto w-full max-w-screen-xl p-4 py-6 px-8 lg:py-8">
                    <div class="md:flex md:justify-between flex-wrap">
                        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-4 ">
                            <div class="me-3 mb-3 ">
                                <h2 class="mb-3 text-sm font-semibold text-gray-900 uppercase dark:text-white">Butik
                                    Imun</h2>
                                <ul class="text-gray-600 dark:text-gray-400 font-medium">
                                    <li>
                                        <a href="https://flowbite.com/"
                                            class="hover:underline leading-tight text-sm">Jl. Amandit Rt.1 No.121 Desa
                                            Baroqah, Kec. Simpang Empat, Kab. Tanah Bumbu, Kalimantan Selatan</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/"
                                            class="hover:underline leading-tight text-sm">0812 - 5090 - 8321</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/"
                                            class="hover:underline leading-tight text-sm">support@inboutique.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="me-3 mb-3 ">
                                <h2 class="mb-3 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                                    Information</h2>
                                <ul class="text-gray-600 dark:text-gray-400 font-medium">
                                    <li>
                                        <a href="https://flowbite.com/"
                                            class="hover:underline leading-tight text-sm">About Us</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/"
                                            class="hover:underline leading-tight text-sm">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/"
                                            class="hover:underline leading-tight text-sm">How To Order ?</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/"
                                            class="hover:underline leading-tight text-sm">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/"
                                            class="hover:underline leading-tight text-sm">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="me-3 mb-3 ">
                                <h2 class="mb-3 text-sm font-semibold text-gray-900 uppercase dark:text-white">Customer
                                    Care</h2>
                                <ul class="text-gray-600 dark:text-gray-400 font-medium">
                                    <li>
                                        <a href="https://github.com/themesberg/flowbite"
                                            class="hover:underline leading-tight text-sm ">Payment Confirmation</a>
                                    </li>
                                    <li>
                                        <a href="https://discord.gg/4eeurUVvTy"
                                            class="hover:underline leading-tight text-sm">Return and Exchange</a>
                                    </li>
                                    <li>
                                        <a href="https://discord.gg/4eeurUVvTy"
                                            class="hover:underline leading-tight text-sm">Size and Guide</a>
                                    </li>
                                    <li>
                                        <a href="https://discord.gg/4eeurUVvTy"
                                            class="hover:underline leading-tight text-sm">Tracer and Tracking</a>
                                    </li>
                                    <li>
                                        <a href="https://discord.gg/4eeurUVvTy"
                                            class="hover:underline leading-tight text-sm">Help</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-3 ">
                                <h2 class="mb-3 text-sm font-semibold text-gray-900 uppercase dark:text-white">Payment
                                    Method</h2>
                                <ul class="text-gray-600 dark:text-gray-400 font-medium">
                                    <li>
                                        <a href="#" class="hover:underline leading-tight text-sm">Privacy
                                            Policy</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:underline leading-tight text-sm">Terms &amp;
                                            Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:underline leading-tight text-sm">Terms &amp;
                                            Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                    <div class="sm:flex sm:items-center sm:justify-center">
                        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                                href="https://inboutique.com/" class="hover:underline">Inboutique.com</a>. All Rights
                            Reserved.
                        </span>
                    </div>
                </div>
            </footer>

        </section>
    </main>

</body>
<!-- plugin for scrollbar  -->
<script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="{{ asset('/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4') }}" async></script>

</html>
