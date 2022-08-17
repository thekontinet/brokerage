<x-front-layout>
<nav class="flex justify-between items-center lg:absolute lg:bg-transparent bg-white z-10 w-full px-12 py-4">
    <x-jet-application-mark class="w-12 h-12"/>
    <div>
        <a href="{{route('register')}}" class="font-bold text-sm lg:text-white text-blue-300 bg-blue-800 px-6 py-2 rounded hover:opacity-75">Create Account</a>
    </div>
</nav>
<div class="relative bg-white overflow-hidden h-[60vh] lg:h-[80vh]" x-data="{show:false}" >
    <video autoplay muted loop class="h-full w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/videos/bg.mp4"></video>
    <div class="absolute bottom-0 right-0 top-0 left-0 bg-black bg-opacity-60  flex items-center">
      <div class="pb-8">
        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
          <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block xl:inline text-white">Join <span class="block text-blue-400 xl:inline">+20m</span> users trading cryptocurrency at true cost</span>
            </h1>
            <p class="mt-3 text-base text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Enjoy up to 5% back on all investment with automated trading bot and instant transaction system<p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <a href="{{route('register')}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Get started </a>
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
  <section class="text-center mx-auto px-2 py-16">
    <h2 class="text-3xl font-bold mb-3">Why Choose Us</h2>
    <p class="text-sm mx-auto max-w-3xl">We focus on the best asset management and financial concept that you will see in the current industry. Here at Completefxtrader you have total control of your finances and see how everything happens in front of your computer screen. Your consent a top priority</p>
    <div class="p-1 my-3 bg-blue-600 w-12 mx-auto rounded"></div>
    <div class="my-16 grid lg:grid-cols-3">
      <div class="text-center mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-blue-900" viewBox="0 0 20 20" fill="currentColor">
          <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
          <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
        </svg>
        <h4 class="text-lg font-bold">Instant Transaction</h4>
        <p class="px-5">You can manage all your assets directly from our platform, and perform instant and transactions.</p>
      </div>
      <div class="text-center mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-blue-900" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
        </svg>
        <h4 class="text-lg font-bold">World Class Support</h4>
        <p class="px-5">If you have some problem, specialists from the support service are always ready to give you a consultation according to any question you have.</p>
      </div>
      <div class="text-center mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-blue-900" viewBox="0 0 20 20" fill="currentColor">
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
    <div class="lg:grid grid-cols-2 mx-auto max-w-3xl">
        <div class="mb-10 lg:mb-0">
            <img class="block mx-auto lg:ml-auto" src="/images/man-on-coin.png" alt="Get started">
        </div>
        <div class="lg:text-left">
            <div class="mb-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-900 mx-auto lg:mx-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                <h2 class="font-bold text-lg">Create an Account</h2>
                <p>Create your new account and verify to enable your wallet.</p>
            </div>

            <div class="mb-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-900 mx-auto lg:mx-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
                <h2 class="font-bold text-lg">Make a Deposit</h2>
                <p>Deposit fund to your wallet to initiate your investment.</p>
            </div>

            <div class="mb-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-900 mx-auto lg:mx-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                <h2 class="font-bold text-lg">Profit & Withdraw</h2>
                <p>Relax and watch your funds grow as you earn daily profit.</p>
            </div>
        </div>
    </div>
  </section>

  <section class="h-[700px] bg-slate-900 text-white">
    <x-crypto-news/>
  </section>

  {{-- Q & A --}}
  <section class="px-5 lg:p-11 py-32 lg:py-40 bg-blue-50">
        <h3 class="text-center text-3xl font-bold">Question & Answer</h3>
        <p class="max-w-2xl mx-auto text-sm text-center">Listed questions and answers, all supposed to be commonly asked in some context, and pertaining to a particular topic.</p>
        <div class="mt-6 lg:grid lg:grid-cols-2 gap-x-10">
            <div>
                <div class="mb-5">
                    <div class="py-2 px-4 font-bold text-xl peer group bg-blue-500 text-white flex rounded cursor-pointer justify-between items-center">
                        <h3 class="">What is cryptocurrency ?</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:rotate-90 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <p class="text-lg peer-hover:py-4 px-3 bg-white peer-hover:h-auto h-0 opacity-0 peer-hover:opacity-100 hover:opacity-100 hover:h-auto overflow-hidden transition-all delay-300">
                        Cryptocurrency is a form of payment that can be exchanged online for goods and services. Many companies have issued their own currencies, often called tokens, and these can be traded specifically for the good or service that the company provides. Think of them as you would arcade tokens or casino chips. You'll need to exchange real currency for the cryptocurrency to access the good or service. Cryptocurrencies work using a technology called blockchain. Blockchain is a decentralized technology spread across many computers that manages and records transactions. Part of the appeal of this technology is its security.
                    </p>
                </div>
                <div class="mb-5">
                    <div class="py-2 px-4 font-bold text-xl peer group bg-blue-500 text-white flex rounded cursor-pointer justify-between items-center">
                        <h3 class="">How safe is my funds ?</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:rotate-90 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <p class="text-lg peer-hover:py-4 px-3 bg-white peer-hover:h-auto h-0 opacity-0 peer-hover:opacity-100 hover:opacity-100 hover:h-auto overflow-hidden transition-all delay-200">
                        Here at Completefxtrader all invested funds are insured, backed and guaranteed by the Funds Insurance Office(FIO) & The Federal Deposit Insurance Corporation(FDIC) here in the United States. And the world financial group (internationally for foreign investors)
                    </p>
                </div>
            </div>
            <div>
                <div class="mb-5">
                    <div class="py-2 px-4 font-bold text-xl peer group bg-blue-500 text-white flex rounded cursor-pointer justify-between items-center">
                        <h3 class="">How can I trade ?</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:rotate-90 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <p class="text-lg peer-hover:py-4 px-3 bg-white peer-hover:h-auto h-0 opacity-0 peer-hover:opacity-100 hover:opacity-100 hover:h-auto overflow-hidden transition-all delay-200">
                        You dont have to trade. We have group of expert with great market experience that trade with your funds with a certain percentage return
                    </p>
                </div>
                <div class="mb-5">
                    <div class="py-2 px-4 font-bold text-xl peer group bg-blue-500 text-white flex rounded cursor-pointer justify-between items-center">
                        <h3 class="">Can i withdraw my profit to my personal wallet ?</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:rotate-90 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <p class="text-lg peer-hover:py-4 px-3 bg-white peer-hover:h-auto h-0 opacity-0 peer-hover:opacity-100 hover:opacity-100 hover:h-auto overflow-hidden transition-all delay-200">
                        Profit earned from any investment can be transfered to your main wallet. Withdrawal to your personal wallet is 100% possible and flexible
                    </p>
                </div>
            </div>
        </div>
  </section>

  <footer class="lg:flex justify-between items-center lg:px-20 p-11 bg-blue-200 text-black">
    <div class="mb-5 lg:mb-0">
        <x-jet-application-logo class="mb-3"/>
        <p class="text-black text-sm font-bold">A broker you can trust</p>
    </div>
    <div>
        &copy; {{date('Y')}}. {{env('APP_NAME')}} Incoporated
    </div>
  </footer>
</x-front-layout>
