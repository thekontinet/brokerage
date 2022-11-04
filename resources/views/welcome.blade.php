<x-front-layout>
    <x-navbar/>

    <div class="relative overflow-hidden h-[90vh] lg:h-[80vh]" >
        <video autoplay muted loop class="object-cover w-full h-full sm:h-72 md:h-96 lg:w-full lg:h-full" src="/videos/bg.mp4"></video>
        <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center bg-black bg-opacity-60">
        <div class="pb-8">
            <main class="px-4 mx-auto mt-10 max-w-7xl sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-3xl md:text-6xl">
                    <span class="block text-white xl:inline">Join <span class="block text-blue-400 xl:inline">+20m</span> users trading cryptocurrency at true cost</span>
                    </h1>
                    <p class="mt-3 text-base text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Enjoy up to 5% back on all investment with automated trading bot and instant transaction system<p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="{{route('register')}}" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Get started </a>
                    </div>
                    </div>
                </div>
            </main>
        </div>
        </div>
    </div>

    <section>
        <x-crypto-ticker/>
    </section>

    {{-- What are we section --}}
    <section class="px-2 py-16 mx-auto text-center">
        <h2 class="mb-3 text-3xl font-bold">Why Choose Us</h2>
        <p class="max-w-3xl mx-auto text-sm">We focus on the best asset management and financial concept that you will see in the current industry. Here at Completefxtrader you have total control of your finances and see how everything happens in front of your computer screen. Your consent a top priority</p>
        <div class="w-12 p-1 mx-auto my-3 bg-blue-600 rounded"></div>
        <div class="grid my-16 lg:grid-cols-3">
        <div class="mb-10 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto text-blue-900" viewBox="0 0 20 20" fill="currentColor">
            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
            </svg>
            <h4 class="text-lg font-bold">Instant Transaction</h4>
            <p class="px-5">You can manage all your assets directly from our platform, and perform instant and transactions.</p>
        </div>
        <div class="mb-10 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto text-blue-900" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
            </svg>
            <h4 class="text-lg font-bold">World Class Support</h4>
            <p class="px-5">If you have some problem, specialists from the support service are always ready to give you a consultation according to any question you have.</p>
        </div>
        <div class="mb-10 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto text-blue-900" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <h4 class="text-lg font-bold">Security</h4>
            <p class="px-5">A global team of top security professionals who take a risk-based approach to ensuring our clients assets are protected at the highest levels while maintaining exceptional performance and an unparalleled client experience</p>
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
    <section class="px-5 py-32 lg:p-11 lg:py-40 bg-blue-50">
            <h3 class="text-3xl font-bold text-center">Question & Answer</h3>
            <p class="max-w-2xl mx-auto text-sm text-center">Listed questions and answers, all supposed to be commonly asked in some context, and pertaining to a particular topic.</p>
            <div class="mt-6 lg:grid lg:grid-cols-2 gap-x-10">
                <div>
                    <div class="mb-5">
                        <div class="flex items-center justify-between px-4 py-2 text-xl font-bold text-white bg-blue-500 rounded cursor-pointer peer group">
                            <h3 class="">What is cryptocurrency ?</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-all group-hover:rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                        <p class="h-0 px-3 overflow-hidden text-lg transition-all delay-300 bg-white opacity-0 peer-hover:py-4 peer-hover:h-auto peer-hover:opacity-100 hover:opacity-100 hover:h-auto">
                            Cryptocurrency is a form of payment that can be exchanged online for goods and services. Many companies have issued their own currencies, often called tokens, and these can be traded specifically for the good or service that the company provides. Think of them as you would arcade tokens or casino chips. You'll need to exchange real currency for the cryptocurrency to access the good or service. Cryptocurrencies work using a technology called blockchain. Blockchain is a decentralized technology spread across many computers that manages and records transactions. Part of the appeal of this technology is its security.
                        </p>
                    </div>
                    <div class="mb-5">
                        <div class="flex items-center justify-between px-4 py-2 text-xl font-bold text-white bg-blue-500 rounded cursor-pointer peer group">
                            <h3 class="">How safe is my funds ?</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-all group-hover:rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                        <p class="h-0 px-3 overflow-hidden text-lg transition-all delay-200 bg-white opacity-0 peer-hover:py-4 peer-hover:h-auto peer-hover:opacity-100 hover:opacity-100 hover:h-auto">
                            Here at Completefxtrader all invested funds are insured, backed and guaranteed by the Funds Insurance Office(FIO) & The Federal Deposit Insurance Corporation(FDIC) here in the United States. And the world financial group (internationally for foreign investors)
                        </p>
                    </div>
                </div>
                <div>
                    <div class="mb-5">
                        <div class="flex items-center justify-between px-4 py-2 text-xl font-bold text-white bg-blue-500 rounded cursor-pointer peer group">
                            <h3 class="">How can I trade ?</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-all group-hover:rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                        <p class="h-0 px-3 overflow-hidden text-lg transition-all delay-200 bg-white opacity-0 peer-hover:py-4 peer-hover:h-auto peer-hover:opacity-100 hover:opacity-100 hover:h-auto">
                            You dont have to trade. We have group of expert with great market experience that trade with your funds with a certain percentage return
                        </p>
                    </div>
                    <div class="mb-5">
                        <div class="flex items-center justify-between px-4 py-2 text-xl font-bold text-white bg-blue-500 rounded cursor-pointer peer group">
                            <h3 class="">Can i withdraw my profit to my personal wallet ?</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-all group-hover:rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                        <p class="h-0 px-3 overflow-hidden text-lg transition-all delay-200 bg-white opacity-0 peer-hover:py-4 peer-hover:h-auto peer-hover:opacity-100 hover:opacity-100 hover:h-auto">
                            Profit earned from any investment can be transfered to your main wallet. Withdrawal to your personal wallet is 100% possible and flexible
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <footer class="flex flex-col items-center justify-center p-4 space-y-4 text-black bg-blue-200 lg:px-20">
        <x-jet-application-logo/>
        <p class="text-sm font-bold text-black">You can always trust us with your investments</p>
        <div>
            {{env('APP_NAME')}} Inc. &copy; {{date('Y')}}
        </div>
    </footer>
</x-front-layout>
