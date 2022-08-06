<x-app-layout>
    <div class="p-10 bg-gray-50">
        <div class="justify-between gap-3 mb-12 lg:flex">
            <x-balance-card title="BALANCE" content="{{format_as_money($wallet->getBalance())}}" class="mb-4 bg-white">
                <x-jet-button href="{{route('deposit.index')}}" class="justify-center block w-full bg-blue-500 lg:w-fit hover:bg-blue-700">
                    Deposit
                </x-jet-button>
            </x-balance-card>
            <x-balance-card title="PROFIT" content="{{format_as_money($wallet->getBalance('profit'))}}" class="mb-4 bg-white">
                <x-jet-button href="{{route('withdraw.index')}}" class="justify-center block w-full bg-blue-500 lg:w-fit hover:bg-blue-700">
                    Withdraw
                </x-jet-button>
            </x-balance-card>
            <x-balance-card title="BONUS" content="{{format_as_money($wallet->getBalance('bonus'))}}" class="mb-4 bg-white">
                <x-jet-button href="{{route('transfer.index')}}" class="justify-center block w-full bg-blue-500 lg:w-fit hover:bg-blue-700">
                    Transfer
                </x-jet-button>
            </x-balance-card>
        </div>

        <div class="grid items-start grid-cols-12 gap-2">
            <x-transaction-list-card :transactions="$transactions" class="col-span-12 mb-8 bg-white lg:col-span-8"/>
            <div class="col-span-12 shadow lg:col-span-4">
                <div class="flex items-center justify-center h-full p-8 text-white bg-blue-600 rounded">
                    <div class="px-2">
                        <h4 class="text-lg text-center">Refer and earn upto <strong>$500</strong> bonus</h4>
                        <form action="" class="my-2">
                            <div class="flex items-center ">
                                <input type="text" class="flex-1 px-2 py-1 border-gray-300 rounded-tl rounded-bl shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="https://domain.com/43Dezte">
                                <button class="col-span-2 p-1 text-white bg-gray-800 rounded-tr rounded-br hover:bg-gray-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                                </button>
                            </div>
                        </form>
                        <p class="text-sm text-center">
                            Copy your referal link and share to others to earn bonus point
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
