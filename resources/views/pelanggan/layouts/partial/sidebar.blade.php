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
    class="fixed top-0 left-0 py-4 mx-4 overflow-y-auto  rounded z-40 w-64 h-auto transition-transform -translate-x-full lg:translate-x-0"
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
            <img src="/assets/img/favicon.png"
                class="inline-block h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-8 dark:hidden"
                alt="main_logo">
            <img src="/assets/img/favicon.png"
                class="hidden h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-8 dark:inline-block"
                alt="main_logo">
            <span class="ml-1 font-semibold text-lg transition-all duration-200 ease-soft-in-out opacity-100">Butik
                Imun</span>
        </a>
    </div>
    <hr
        class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">

    <div class="h-full px-3  py-4 bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li class="mt-0.5 w-full ">
                <a href="/dashboard"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group visited:shadow-md drop-shadow hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{ (request()-> is('dashboard*')) ? 'visited' : ''}}">
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

                <a href="/myproduct"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 {{ (request()->is('/myproduct*')) ? 'active' : ''}} ">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bag-fill flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">My Product</span>
                </a>
            </li>

            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 btns  group"
                    aria-controls="kategori" data-collapse-toggle="kategori">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>


                    </div>

                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60"
                        sidebar-toggle-item>Transactions</span>
                    <svg id="arrow" sidebar-toggle-item class="w-5 h-5 opacity-60" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="kategori" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/transaction_buy"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60">
                            <div
                                class=" mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                            Buy Product
                        </a>
                    </li>
                    <li>
                        <a href="/transaction_sell"
                            class="mx-2 py-2.7 flex items-center   text-sm w-50 p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 opacity-60">
                            <div
                                class="mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg p-2.5 text-center text-gray-900">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>

                            </div>
                           Sell Product
                        </a>
                    </li>

                </ul>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/store_settings"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-shop flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Store Settings</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/myaccount"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">My Account</span>
                </a>
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
