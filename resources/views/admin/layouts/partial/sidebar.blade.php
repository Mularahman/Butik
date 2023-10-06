<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
    aria-controls="sidebar-multi-level-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="sidebar-multi-level-sidebar"
    class="fixed top-0 left-0 py-4 mx-4 overflow-y-auto  rounded z-40 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0"
    aria-label="Sidebar">
    <div class="h20 rounded-t-lg overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <button type="button" data-drawer-hide="sidebar-multi-level-sidebar"
            aria-controls="sidebar-multi-level-sidebar"
            class="text-gray-400 my-4 lg:hidden bg-transparent  hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>

        <a class="block px-8  py-6 m-0 text-sm whitespace-nowrap text-slate-700 dark:text-white"
            href=" /dashboard-admin ">
            {{--  <img src="/assets/img/favicon.png"
                class="inline-block h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-8 dark:hidden"
                alt="main_logo">
            <img src="/assets/img/favicon.png"
                class="hidden h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-8 dark:inline-block"
                alt="main_logo">  --}}
            <span class="ml-1 font-semibold text-lg transition-all duration-200 ease-soft-in-out opacity-100">Butik
                Imun</span>
        </a>
    </div>
    <hr
        class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">

    <div class="h-auto px-3  py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li class="mt-0.5 w-full">
                <a href="/dashboard-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('dashboard-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Dashboard</span>
                </a>
            </li>

            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Master Data</h6>
            </li>
            <li>
                <button type="button"
                    class="btns flex items-center  w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('kategori*') ? 'shadow-md' : ''}} {{Request::is('sub_kategori*') ? 'shadow-md' : ''}}"
                    aria-controls="kategori" data-collapse-toggle="kategori">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">

                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" height="1em" viewBox="0 0 640 512"><path d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z"/></svg>

                    </div>

                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60"
                        sidebar-toggle-item>Kategori</span>
                    <svg id="arrow" sidebar-toggle-item class="w-5 h-5 opacity-60" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="kategori" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/kategori-admin"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('kategori-admin*') ? 'border-b-2' : ''}}">
                            <div
                                class=" mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                            Kategori
                        </a>
                    </li>
                    <li>
                        <a href="/sub_kategori-admin"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('sub_kategori-admin*') ? 'border-b-2' : ''}}">
                            <div
                                class="mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                            Sub Kategori
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <button type="button"
                    class="btns flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('produk*') ? 'shadow-md' : ''}}"
                    aria-controls="produk" data-collapse-toggle="produk">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">

                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd"></path>
                        </svg>

                    </div>

                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60"
                        sidebar-toggle-item>Produk</span>
                    <svg id="arrow" sidebar-toggle-item class="w-5 h-5 opacity-60" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="produk" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/produk-admin"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('produk-admin*') ? 'border-b-2' : ''}}">
                            <div
                                class=" mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                            Kelola Produk
                        </a>
                    </li>
                    <li>
                        <a href="/produk-admin_tambah"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('produk-admin_tambah*') ? 'border-b-2' : ''}}">
                            <div
                                class=" mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                            Tambah Produk
                        </a>
                    </li>

                </ul>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/slider-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('slider-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" height="1em" viewBox="0 0 512 512"><path d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z"/></svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Slider</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/kupon-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('kupon-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75H192 160 64c-35.3 0-64 28.7-64 64v96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V352l8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V300.4c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4V32zm-64 76.7V240 371.3C357.2 317.8 280.5 288 200.7 288H192V192h8.7c79.8 0 156.5-29.8 215.3-83.3z"/></svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Kupon</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/kurir-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('kurir-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/></svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Kurir</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="btns flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('provinsi-admin*') ? 'shadow-md' : ''}} {{Request::is('kota-admin*') ? 'shadow-md' : ''}} {{Request::is('kecamatan-admin*') ? 'shadow-md' : ''}}"
                    aria-controls="wilayah" data-collapse-toggle="wilayah">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">

                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/></svg>

                    </div>

                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60"
                        sidebar-toggle-item>Wilayah</span>
                    <svg id="arrow" sidebar-toggle-item class="w-5 h-5 opacity-60" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="wilayah" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/provinsi-admin"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('provinsi-admin*') ? 'border-b-2' : ''}}">
                            <div
                                class=" mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                            Provinsi
                        </a>
                    </li>
                    <li>
                        <a href="/kota-admin"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('kota-admin*') ? 'border-b-2' : ''}}">
                            <div
                                class=" mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                            Kota / Kabupaten
                        </a>
                    </li>
                    <li>
                        <a href="/kecamatan-admin"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('kecamatan-admin*') ? 'border-b-2' : ''}}">
                            <div
                                class=" mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                            Kecamatan
                        </a>
                    </li>

                </ul>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/customer-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('customer-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Data Customer</span>
                </a>
            </li>



            <hr
                class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Laporan</h6>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/laporan-transaksi-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('laporan-transaksi-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Transaksi</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a href="/laporan-pelanggan-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('laporan-pelanggan-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Pengguna</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/laporan-toko-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('laporan-toko-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Toko</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/laporan-pembelian-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('laporan-pembelian-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Pembelian</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/laporan-penjualan-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('laporan-penjualan-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Penjualan</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/laporan-produk-admin"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('laporan-produk-admin*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Produk</span>
                </a>
            </li>



        </ul>
        <div class="ps__rail-y" style="top: 248px; height: 593px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 175px; height: 418px;"></div></div>
    </div>

    <script>
        const btn = document.querySelectorAll('.btns')
        for (i = 0; i < btn.length; i++) {

            btn[i].addEventListener('click', function() {
                this.children[2].classList.toggle('rotate-180')
            })

        }
    </script>
</aside>
