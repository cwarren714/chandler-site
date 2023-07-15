<div class="flex flex-wrap place-items-center">
    <section class="relative mx-auto">
        <nav class="flex justify-between bg-slate-100 dark:bg-gray-900 dark:text-white w-screen">
            <div class="px-5 xl:px-12 py-3 flex w-full items-center">
                <a class="text-2xl font-bold font-heading" href="/">
                    Chandler W
                </a>
                <!-- Nav Links -->
                <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                    <li><a class="hover:text-gray-200" href="/">Home</a></li>
                    <!-- <li><a class="hover:text-gray-200" href="/about">About</a></li> -->
                    <!-- <li><a class="hover:text-gray-200" href="/blog">Blog</a></li> -->
                    <li><a class="hover:text-gray-200" href="/cards-or-diablo">CoD</a></li>
                    <li><a class="hover:text-gray-200" href="/contact">Contact Me</a></li>
                </ul>
                <div class="flex justify-center align-middle ml-4 mt-2">
                    <div x-show="darkMode == 'dark'">
                        <button x-on:click="darkMode = 'light'">
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="{'border-2 border-red/50': darkMode === 'light'}" class="w-6 h-6 p-1 text-gray-700 transition rounded-full cursor-pointer bg-gray-50 hover:bg-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span class="sr-only">light</span>
                        </button>
                    </div>

                    <div x-show="darkMode == 'light'">
                        <button x-on:click="darkMode = 'dark'">
                            <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="{'border-2 border-red/50': darkMode === 'dark'}" class="w-6 h-6 p-1 text-gray-100 transition bg-gray-700 rounded-full cursor-pointer dark:hover:bg-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                            </svg>
                            <span class="sr-only">dark</span>
                        </button>
                    </div>
                </div>

            </div>
            <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </a>
        </nav>

    </section>
</div>