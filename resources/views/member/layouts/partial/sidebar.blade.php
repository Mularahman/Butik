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
            href=" /home ">
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

    <div class="h-full px-3  py-4 bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">

            <li class="mt-0.5 w-full  " >
                <a href="/dashboard-member"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group  drop-shadow hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('dashboard-member*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
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


            <li class="mt-0.5 w-full ">

                <a href="/myproduct-member"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('myproduct-member*') ? 'shadow-md' : ''}} ">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bag-fill flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">My Product</span>
                </a>
            </li>


            <li class="mt-0.5 w-full">
                <a href="/transaction-member"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('transaction-member*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Transactions</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/review-member"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('review-member*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg"class="flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2 0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.3-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9l0 0 0 0-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"/></svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Reviews</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/refund-member"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('refund-member*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6v167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5v-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128h2.2z"/></svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Refund</span>
                </a>
            </li>
            {{--  <li class="mt-0.5 w-full">
                <a href="/billings-member"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor"   viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H80c-8.8 0-16-7.2-16-16s7.2-16 16-16H448c17.7 0 32-14.3 32-32s-14.3-32-32-32H64zM416 272a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Billings</span>
                </a>
            </li>  --}}
            <li class="mt-0.5 w-full">
                <a href="/store_settings"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('store_settings*') ? 'shadow-md' : ''}}">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor"  viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M547.6 103.8L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.2 0 49.3-11.4 65.2-29c16 17.6 39.1 29 65.2 29c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4zM499.7 254.9l-.1 0c-5.3 .7-10.7 1.1-16.2 1.1c-12.4 0-24.3-1.9-35.4-5.3V384H128V250.6c-11.2 3.5-23.2 5.4-35.6 5.4c-5.5 0-11-.4-16.3-1.1l-.1 0c-4.1-.6-8.1-1.3-12-2.3V384v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 252.6c-4 1-8 1.8-12.3 2.3z"/></svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Store Settings</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{Request::is('laporan*') ? 'shadow-md' : ''}} btns  group"
                    aria-controls="laporan" data-collapse-toggle="laporan">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>


                    </div>

                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60"
                        sidebar-toggle-item>Laporan</span>
                    <svg id="arrow" sidebar-toggle-item class="w-5 h-5 opacity-60" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="laporan" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/laporan-transaksi"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('laporan-transaksi*') ? 'border-b-2' : ''}}">
                            <div
                                class=" mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                            transaksi
                        </a>
                    </li>
                    <li>
                        <a href="/laporan-produk"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('laporan-produk*') ? 'border-b-2' : ''}}">
                            <div
                                class="mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                           Penjualan Produk
                        </a>
                    </li>
                    <li>
                        <a href="/laporan-pelanggan"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('laporan-pelanggan*') ? 'border-b-2' : ''}}">
                            <div
                                class="mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                           Customer
                        </a>
                    </li>
                    <li>
                        <a href="/laporan-ulasan"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('laporan-ulasan*') ? 'border-b-2' : ''}}">
                            <div
                                class="mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                           Review
                        </a>
                    </li>
                    <li>
                        <a href="/laporan-laba"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('laporan-laba*') ? 'border-b-2' : ''}}">
                            <div
                                class="mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                           Pendapatan
                        </a>
                    </li>
                    <li>
                        <a href="/laporan-pembayaran"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60 {{Request::is('laporan-pembayaran*') ? 'border-b-2' : ''}}">
                            <div
                                class="mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                           Pembayaran
                        </a>
                    </li>

                </ul>
            </li>







        </ul>

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
