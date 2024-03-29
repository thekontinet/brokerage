<x-front-layout>

    <header>
        <nav id="header_" class="fixed top-0 left-0 z-20 w-full transition-all ease-in">
            <div class="container m-auto px-6 md:px-12 lg:px-6">
                <div class="flex flex-wrap items-center justify-between py-6 md:py-4 md:gap-0">
                    <div class="w-full flex items-center justify-between lg:w-auto">
                        <a href="#" aria-label="logo">
                            <img src="images/logo.svg" class="w-36" alt="tailus logo" width="144" height="48">
                        </a>

                        <div class="block max-w-max">
                            <button aria-label="humburger" id="hamburger" class="block relative h-auto lg:hidden">
                                <div aria-hidden="true" id="line" class="m-auto h-0.5 w-6 rounded bg-gray-100 transition duration-300"></div>
                                <div aria-hidden="true" id="line2" class="m-auto mt-2 h-0.5 w-6 rounded bg-gray-100 transition duration-300"></div>
                            </button>
                        </div>
                    </div>

                    <div id="navbar" class="flex h-0 lg:h-auto overflow-hidden lg:flex lg:pt-0 w-full md:space-y-0 lh:p-0 md:bg-transparent lg:w-auto transition-all duration-300">
                        <div id="navBox" class="w-full p-6 lg:p-0 bg-white bg-opacity-40 backdrop-blur-md lg:items-center flex flex-col lg:flex-row lg:bg-transparent transition-all ease-in">
                            <ul class="space-y-6 pb-6 tracking-wide font-medium text-gray-800 lg:text-gray-100 lg:pb-0 lg:pr-6 lg:items-center lg:flex lg:space-y-0">
                                <li>
                                    <a href="#" class="block md:px-3">
                                        <span>Product</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block md:px-3">
                                        <span>Use Cases</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block md:px-3">
                                        <span>Integrations</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block md:px-3">
                                        <span>Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block md:px-3">
                                        <span>Blog</span>
                                    </a>
                                </li>
                            </ul>

                            <ul class="border-t w-full lg:w-max gap-3 pt-2 lg:pt-0 lg:pl-2 lg:border-t-0 lg:border-l flex flex-col lg:gap-0 lg:items-center lg:flex-row">
                                <li class="flex w-full lg:max-w-max justify-center">
                                    <button type="button" title="Start buying" class="flex w-full py-3 px-6 rounded-md text-center transition border border-purple-600 bg-white bg-opacity-40 backdrop-blur-md lg:backdrop-blur-none lg:bg-opacity-0 lg:bg-transparent lg:border-transparent active:border-purple-400 justify-center max-w-lg lg:max-w-max">
                                        <span class="block text-gray-700 lg:text-white font-semibold">
                                            Login
                                        </span>
                                    </button>
                                </li>

                                <li class="flex w-full lg:max-w-max justify-center">
                                    <button type="button" title="Start buying" class="flex w-full py-3  px-6 rounded-lg text-center transition bg-purple-600 lg:bg-white active:bg-purple-700 lg:active:bg-purple-200 focus:bg-purple-500 lg:focus:bg-purple-100 justify-center max-w-lg lg:max-w-max">
                                        <span class="block text-sm text-white lg:text-purple-600 font-semibold">
                                            Sign In
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <div class="relative">

        <img class="absolute inset-0 w-full h-full object-cover object-top" src="images/background2.webp" width="400" height="500" alt="hero background image">
        <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-purple-900 bg-opacity-30 backdrop-blur-sm"></div>
        <div class="relative container m-auto px-6 md:px-12 lg:px-6">
            <div class="mb-12 pt-40 space-y-16 md:mb-20 md:pt-56 lg:w-8/12 lg:mx-auto">
                <h1 class="text-white text-center text-3xl font-bold sm:text-4xl md:text-5xl">
                    Don't look again for your next freelance projects, you got them.
                </h1>

                <form action="" class="w-full">
                    <div class="relative flex p-1 rounded-xl bg-white shadow-2xl md:p-2">
                        <div id="catJobBox" class="hidden text-gray-600 relative md:flex justify-between items-center min-w-max select-none">
                            <input type="checkbox" name="" id="toggleJobLstCat" class="peer hidden outline-none">
                            <input type="text" name="" id="catJobName" value="Design" class="pl-3 w-full bg-white text-base font-medium cursor-pointer" readonly>
                            <label for="toggleJobLstCat" class="absolute top-0 left-0 w-full h-full"></label>
                            <span class="min-w-max">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div id="catJobLst" class="absolute transition-all duration-500 ease-in-out translate-y-10 opacity-0 invisible peer-checked:opacity-100 peer-checked:visible peer-checked:translate-y-1 top-full left-0 w-full bg-white bg-opacity-80 rounded-lg py-2">
                                <ul class="flex flex-col w-full">
                                    <li class="cursor-default transition hover:bg-gray-100 hover:bg-opacity-80 flex px-5 py-2">Design</li>
                                    <li class="cursor-default transition hover:bg-gray-100 hover:bg-opacity-80 flex px-5 py-2">Development</li>
                                    <li class="cursor-default transition hover:bg-gray-100 hover:bg-opacity-80 flex px-5 py-2">Marketing</li>
                                </ul>
                            </div>
                        </div>
                        <input placeholder="Your favorite position" class="w-full p-4 outline-none text-gray-600" type="text">
                        <button type="button" title="Start buying" class="ml-auto py-3 px-6 rounded-lg text-center transition bg-gradient-to-br from-pink-500 to-purple-500 hover:to-purple-600 active:from-pink-700 focus:from-pink-600 md:px-12">
                            <span class="hidden text-white font-semibold md:block">
                                Search
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mx-auto text-white md:hidden" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <div class="pb-16">
                <div class="md:px-12">
                    <span class="block text-center font-medium text-pink-50">Trusted by your favorite giants</span>
                    <div class="mt-8 -mx-6 px-6 overflow-x-auto md:overflow-x-hidden">
                        <div class="w-max flex justify-center flex-wrap items-center gap-4 md:w-auto md:gap-6 lg:gap-8">
                            <div class="flex items-center">
                                <img class="w-36 grayscale contrast-200 brightness-200" src="images/clients/microsoft.png" alt="client logo" loading="lazy" width="100" height="122">
                            </div>
                            <div class="flex items-center">
                                <img class="w-28 grayscale contrast-200 brightness-200" src="images/clients/grabyo.png" alt="client logo" loading="lazy" width="100" height="219">
                            </div>
                            <div class="flex items-center">
                                <img class="w-32 grayscale contrast-200 brightness-200" src="images/clients/lifegroups.png" alt="client logo" loading="lazy" width="100" height="219">
                            </div>
                            <div class="flex items-center">
                                <img class="w-24 grayscale contrast-200 brightness-200" src="images/clients/lilly.png" alt="client logo" loading="lazy" width="100" height="219">
                            </div>
                            <div class="flex items-center">
                                <img class="w-28 grayscale contrast-200 brightness-200" src="images/clients/grabyo.png" alt="client logo" loading="lazy" width="100" height="219">
                            </div>
                            <div class="flex items-center">
                                <img class="w-32 grayscale contrast-200 brightness-200" src="images/clients/lifegroups.png" alt="client logo" loading="lazy" width="100" height="219">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        window.addEventListener('scroll', e => {
            const header = document.querySelector('#header_')
            e.preventDefault()
            header.classList.toggle('sticky-nav', window.scrollY > 0);
        })

        const toggleMobileMenu = document.querySelector('#hamburger')
        const navbar = document.querySelector('#navbar')

        toggleMobileMenu.addEventListener('click', e => {
            e.preventDefault()
            toggleMobileMenu.querySelector('#line').classList.toggle('rotate-45')
            toggleMobileMenu.querySelector('#line').classList.toggle('translate-y-1.5')

            toggleMobileMenu.querySelector('#line2').classList.toggle('-rotate-45')
            toggleMobileMenu.querySelector('#line2').classList.toggle('-translate-y-1')
            if (navbar.clientHeight === 0) {
                navbar.style.paddingTop = '20px'
                navbar.style.paddingBottom = '20px'
                navbar.style.height = `${parseInt(navbar.scrollHeight) + 60}px`
                return
            }
            navbar.style.height = '0px'
            navbar.style.paddingTop = '0px'
            navbar.style.paddingBottom = '0px'
        })

    </script>
</x-front-layout>
