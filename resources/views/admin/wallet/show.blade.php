<x-app-layout>
    <div class="px-3 lg:p-10 bg-gray-50">
        <div class="mb-10 text-center">
            <div class="py-6">
                <h4 class="text-2xl font-bold">{{format_as_money($wallet->getBalance())}}</h4>
                <p class="text-sm">Wallet Balance</p>
                <div class="flex justify-between max-w-2xl py-6 mx-auto">
                    <div>
                        <h4 class="text-lg font-bold">{{format_as_money($wallet->getBalance('profit'))}}</h4>
                        <p class="text-xs">Profit Balance</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold">{{format_as_money($wallet->getBalance('bonus'))}}</h4>
                        <p class="text-xs">Bonus Balance</p>
                    </div>
                </div>
                <div class="mt-4">
                    <form action="{{route('admin.wallets.update', $wallet->id)}}" method="post" class="max-w-2xl p-4 mx-auto bg-gray-200 rounded">
                        @csrf
                        @method('put')
                        <div class="my-5">
                            <x-jet-input type="currency" name="amount"/>
                        </div>
                        <div class="p-3 bg-white rounded-3xl">
                            <x-radio-button name="group" value="balance" id="input-balance">
                                <strong class="text-sm">Balance</strong>
                            </x-radio-button>
                            <x-radio-button name="group" value="profit" id="input-profit">
                                <strong class="text-sm">Profit</strong>
                            </x-radio-button>
                            <x-radio-button name="group" value="bonus" id="input-bonus">
                                <strong class="text-sm">Bonus</strong>
                            </x-radio-button>
                            @error('group')
                                <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="p-3 my-4 bg-white rounded-3xl">
                            <x-radio-button name="type" value="credit" id="input-credit">
                                <strong class="text-sm">Credit</strong>
                            </x-radio-button>
                            <x-radio-button name="type" value="debit" id="input-debit">
                                <strong class="text-sm">Debit</strong>
                            </x-radio-button>
                            @error('type')
                                <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                            @enderror
                        </div>
                        <x-jet-button>Proceed</x-jet-button>
                    </form>
                </div>
            </div>
            <hr class="my-8">
        </div>
        <x-admin.transaction-list-card :transactions="$wallet->transactions()->limit(5)->get()" class="col-span-12 mb-8 bg-white lg:col-span-8">
            <div class="text-center">
                <x-jet-button href="{{route('admin.transactions.show', $wallet->id)}}">See All</x-jet-button>
            </div>
        </x-admin.transaction-list-card>
    </div>
</x-app-layout>
