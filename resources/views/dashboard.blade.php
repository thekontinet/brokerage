<x-app-layout>
    <div class="lg:p-10 bg-gray-50">
        @if (\App\Features::impersonation())
            @impersonating('web')
                <x-jet-button href="{{ route('impersonate.leave') }}">Leave impersonation</x-jet-button>
            @endImpersonating
        @endif
        <div class="mb-4">
            <x-widget.single-crypto-chart />
        </div>
        <div class="justify-between gap-3 mb-12 lg:flex lg:p-0 p-4">
            <x-balance-card title="BALANCE" content="{{ format_as_money($wallet->getBalance()) }}" class="mb-4 bg-white">
                <x-slot name='menuIcon'>
                    <x-dropdown>
                        <x-dropdown-item href="{{ route('deposit.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                            </svg>
                            <span class="mx-1">
                                Deposit
                            </span>
                        </x-dropdown-item>
                        <x-dropdown-item href="{{ route('withdraw.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>
                            <span class="mx-1">
                                Withdraw to wallet
                            </span>
                        </x-dropdown-item>
                        <x-dropdown-item href="{{ route('withdraw.bank') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                              </svg>
                            <span class="mx-1">
                                Withdraw to bank
                            </span>
                        </x-dropdown-item>
                    </x-dropdown>
                </x-slot>
            </x-balance-card>
            <x-balance-card title="PROFIT" content="{{ format_as_money($wallet->getBalance('profit')) }}"
                class="mb-4 bg-white">
                <x-jet-button href="{{ route('transfer.index') }}"
                    class="justify-center block w-full bg-blue-500 lg:w-fit hover:bg-blue-700">
                    Transfer
                </x-jet-button>
            </x-balance-card>
            <x-balance-card title="INVESTMENT CAPITAL" content="{{ format_as_money($wallet->getInvestmentBalance()) }}"
                class="mb-4 bg-white">
                <span class="text-light text-xs text-slate-500">Bonus: {{format_as_money($wallet->getBalance('bonus'))}}</span>
            </x-balance-card>
        </div>

        <div class="lg:flex items-start gap-2">
            <x-transaction-list-card :transactions="$transactions" class="flex-1 mb-8 bg-white" />
            <div class="col-span-12 shadow lg:col-span-4">
                @if (auth()->user()->ref_link)
                    <div class="w-full flex items-center justify-center h-full p-8 text-white bg-blue-600 rounded">
                        <div class="px-2">
                            <h4 class="text-lg text-center">Refer and earn upto <strong>$500</strong> bonus</h4>
                            <div class="my-2">
                                <div class="flex items-center " x-data="clipboard({{json_encode(route('referrer', auth()->user()->ref_link))}})">
                                    <input type="text"
                                        class="flex-1 px-2 py-1 border-gray-300 rounded-tl rounded-bl shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-black text-sm"
                                        x-bind:value="text"
                                        readonly>
                                    <button
                                    x-on:click="copy()"
                                        class="col-span-2 p-1 text-white bg-gray-800 rounded-tr rounded-br hover:bg-gray-600">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <p class="text-sm text-center">
                                Copy your referal link and share to others to earn bonus point
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
