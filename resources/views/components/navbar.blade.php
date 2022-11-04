<nav x-data="{ isOpen: false }" class="absolute left-0 right-0 z-50 bg-transparent dark:bg-gray-800">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <div>
                <a class="text-2xl font-bold text-gray-800 transition-colors duration-300 transform dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="#"><x-jet-application-mark class="w-12 h-12"/></a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button" class="text-slate-200 dark:text-gray-200 hover:text-slate-200 dark:hover:text-gray-400 focus:outline-none focus:text-slate-200 dark:focus:text-gray-400" aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>

                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 left-0 z-40 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
            <div class="flex flex-col md:flex-row md:mx-6">
                <a class="my-2 text-center text-gray-400 transition-colors duration-300 transform lg:hidden dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/register">Signup</a>
                <a class="my-2 text-center text-gray-400 transition-colors duration-300 transform lg:hidden dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/login">Login</a>
                <a class="hidden px-8 py-1 my-2 text-sm text-center text-gray-700 transition-colors duration-300 transform bg-white border-gray-900 rounded hover:bg-transparent hover:border lg:block dark:text-gray-200 hover:text-white dark:hover:text-blue-400 md:mx-4 md:my-0" href="/register">Signup</a>
                <a class="hidden px-8 py-1 my-2 text-sm text-center text-gray-700 transition-colors duration-300 transform bg-white border-gray-900 rounded hover:bg-transparent hover:border lg:block dark:text-gray-200 hover:text-white dark:hover:text-blue-400 md:mx-4 md:my-0" href="/login">Login</a>
            </div>
        </div>
    </div>
</nav>
