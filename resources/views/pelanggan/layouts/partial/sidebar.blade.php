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


            <li class="mt-0.5 w-full">
                <a href="/transaction"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Transaction</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/refund"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Refund</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a href="/review"
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group active:shadow-md drop-shadow  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <div
                        class="stroke-none shadow-soft-sm bg-gradient-to-tl  from-orange-400 to-yellow-300 mr-2 mx-4 py-2.7 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clipboard-data-fill  flex-shrink-0 w-15 h-15 text-white transition duration-75 group-hover:text-gray-300 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                          </svg>
                    </div>
                    <span class="flex-1 ml-1 text-left whitespace-nowrap  opacity-60">Review</span>
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
