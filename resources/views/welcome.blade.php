<x-front-layout>
    <x-navbar/>

    <div class="relative overflow-hidden min-h-[50vh] lg:h-[80vh]" >
        <video autoplay muted loop class="object-cover w-full h-full sm:h-72 md:h-96 lg:w-full lg:h-full" src="/videos/bg.mp4"></video>
        <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center bg-black bg-opacity-60">
            <section class="text-white">
                <div class="grid px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">Join +20m users trading cryptocurrency at true cost</h1>
                        <p class="max-w-2xl mb-6 font-light text-slate-300 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Enjoy up to 5% back on all investment with automated trading bot and instant transaction system</p>
                        <a href="/register" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            Create Account
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="/banner.png" alt="mockup">
                    </div>
                </div>
            </section>
        </div>
    </div>

    <section>
        <x-crypto-ticker/>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Why Choose Us</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">We focus on the best asset management and financial concept that you will see in the current industry. Here at Completefxtrader you have total control of your finances and see how everything happens in front of your computer screen. Your consent a top priority</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                    <div class="flex items-center justify-center w-10 h-10 mb-4 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-auto text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Instant Transaction</h3>
                    <p class="text-gray-500 dark:text-gray-400">You can manage all your assets directly from our platform, and perform instant and transactions.</p>
                </div>
                <div>
                    <div class="flex items-center justify-center w-10 h-10 mb-4 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-900">
                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">World Class Support</h3>
                    <p class="text-gray-500 dark:text-gray-400">If you have some problem, specialists from the support service are always ready to give you a consultation according to any question you have.</p>
                </div>
                <div>
                    <div class="flex items-center justify-center w-10 h-10 mb-4 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-900">
                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Security</h3>
                    <p class="text-gray-500 dark:text-gray-400">A global team of top security professionals who take a risk-based approach to ensuring our clients assets are protected at the highest levels while maintaining exceptional performance and an unparalleled client experience</p>
                </div>
            </div>
        </div>
      </section>

    {{-- Get Started --}}
    <section class="text-center">
        <header class="mb-16">
            <h2 class="text-3xl font-bold">Get Started Now</h2>
            <p>Can't wait to try ? You don't have to! Getting started immediately with few easy steps.</p>
        </header>
        <div class="max-w-3xl grid-cols-2 mx-auto lg:grid">
            <div class="mb-10 lg:mb-0">
                <img class="block mx-auto lg:ml-auto" src="/images/man-on-coin.png" alt="Get started">
            </div>
            <div class="lg:text-left">
                <div class="mb-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto text-blue-900 lg:mx-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                    <h2 class="text-lg font-bold">Create an Account</h2>
                    <p>Create your new account and verify to enable your wallet.</p>
                </div>

                <div class="mb-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto text-blue-900 lg:mx-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <h2 class="text-lg font-bold">Make a Deposit</h2>
                    <p>Deposit fund to your wallet to initiate your investment.</p>
                </div>

                <div class="mb-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto text-blue-900 lg:mx-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h2 class="text-lg font-bold">Profit & Withdraw</h2>
                    <p>Relax and watch your funds grow as you earn daily profit.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="h-[700px] bg-slate-900 text-white">
        <x-crypto-news/>
    </section>


      {{-- Q & A --}}
    <section class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
        <h2 class="mb-8 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Frequently asked questions</h2>
        <div class="pt-8 text-left border-t border-gray-200 md:gap-16 dark:border-gray-700">
            <div class="grid gap-8 md:grid-cols-2">
                <div class="mb-10">
                    <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                        <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        What is Cryptocurrency ?
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Cryptocurrency is a form of payment that can be exchanged online for goods and services. Many companies have issued their own currencies, often called tokens, and these can be traded specifically for the good or service that the company provides. Think of them as you would arcade tokens or casino chips. You'll need to exchange real currency for the cryptocurrency to access the good or service. Cryptocurrencies work using a technology called blockchain. Blockchain is a decentralized technology spread across many computers that manages and records transactions. Part of the appeal of this technology is its security.
                    </p>
                </div>
                <div class="mb-10">
                    <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                        <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        How safe is my funds
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Here at Completefxtrader all invested funds are insured, backed and guaranteed by the Funds Insurance Office(FIO) & The Federal Deposit Insurance Corporation(FDIC) here in the United States. And the world financial group (internationally for foreign investors)
                    </p>
                </div>
                <div class="mb-10">
                    <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                        <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        Can i withdraw my profit to my personal wallet ?
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Profit earned from any investment can be transfered to your main wallet. Withdrawal to your personal wallet is 100% possible and flexible
                    </p>
                </div>
                <div class="mb-10">
                    <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                        <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        How do i invest
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        To invest, all you need to do is to create an account, select a plan and we trade for you with your investment capital.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </section>

    {{-- Contact --}}
    <section class="bg-slate-200 dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <div class="text-center">
                <p class="font-medium text-blue-500 dark:text-blue-400">Contact us</p>

                <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Get in touch</h1>

                <p class="mt-3 text-gray-500 dark:text-gray-400">Our friendly team is always here to chat.</p>
            </div>

            <div class="grid grid-cols-1 gap-12 mt-10 md:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center justify-center text-center">
                    <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Email</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Our friendly team is here to help.</p>
                    <p class="mt-2 text-blue-500 dark:text-blue-400">{{env('APP_EMAIL')}}</p>
                </div>

                <div class="flex flex-col items-center justify-center text-center">
                    <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Office</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Come say hello at our office HQ.</p>
                    <p class="mt-2 text-blue-500 dark:text-blue-400">{{env('APP_CONTACT_ADDRESS')}}</p>
                </div>

                <div class="flex flex-col items-center justify-center text-center">
                    <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Phone</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                    <p class="mt-2 text-blue-500 dark:text-blue-400">{{env('APP_PHONE')}}</p>
                </div>
            </div>
        </div>
    </section>


    <footer class="p-4 bg-slate-300 text-slate-700 md:p-8 lg:p-10 dark:bg-gray-800">
        <div class="max-w-screen-xl mx-auto text-center">
            <x-jet-application-logo/>
            <p class="my-6 text-gray-500 dark:text-gray-400">Your trusted platform when it comes to digital currency</p>
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2015-2023 <a href="#" class="hover:underline">{{config('app.name')}}</a>. All Rights Reserved.</span>
        </div>
      </footer>
</x-front-layout>
