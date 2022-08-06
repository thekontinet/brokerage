<x-app-layout>
    <div class="px-3 lg:p-10 bg-gray-50">
        <div class="mb-10 text-center">
            <div class="py-6">
                <h4 class="text-2xl font-bold">{{format_as_money($wallet->getBalance())}}</h4>
                <p class="text-sm">Wallet Balance</p>
                <div class="mt-4">
                    <x-jet-button href="{{route('deposit.index')}}">Deposit</x-jet-button>
                    <x-jet-button href="{{route('withdraw.index')}}">Withdraw</x-jet-button>
                    <x-jet-button href="{{route('transfer.index')}}">Transfer</x-jet-button>
                </div>
            </div>
            <hr class="my-8">
        </div>
        <x-transaction-list-card :transactions="$transactions" class="col-span-12 mb-8 bg-white lg:col-span-8"/>
    </div>
</x-app-layout>
