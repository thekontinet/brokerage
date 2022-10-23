<x-app-layout>
    <div class="px-3 lg:p-10">
        <div class="mb-10 text-center">
                <div class="lg:flex gap-3">
                    <x-balance-card title="BALANCE" content="{{ format_as_money($wallet->getBalance()) }}" class="mb-4 bg-white">
                    </x-balance-card>
                    <x-balance-card title="PROFIT" content="{{ format_as_money($wallet->getBalance('profit')) }}"
                        class="mb-4 bg-white">
                    </x-balance-card>
                    @if ($wallet->investment?->exists())
                    <x-balance-card title="{{$wallet->investment?->plan->title}}" content="{{ format_as_money($wallet->getInvestmentBalance()) }}"
                        class="mb-4 bg-white">
                        <span class="text-light text-xs text-blue-500 block">Current Investment</span>
                        <span class="text-light text-xs text-slate-500">Bonus: {{format_as_money($wallet->getBalance('bonus'))}}</span>

                        <x-slot name='menuIcon'>
                            <form action="{{route('admin.investments.update', $wallet->investment->id)}}" method="post" onsubmit="return confirm('You are about to close/end this investment. Are you sure of this action ?')">
                                @csrf
                                @method('put')
                                <button class="text-red-500" title="Cancel Plan">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                </button>
                            </form>
                        </x-slot>
                    </x-balance-card>
                    @else
                    <x-balance-card title="No Active Investment" content=""
                        class="mb-4 bg-white border-red-700 text-red-700">
                        <span class="text-light text-xs text-blue-500 block">Current Investment</span>
                        <span class="text-light text-xs text-slate-500">Bonus: {{format_as_money($wallet->getBalance('bonus'))}}</span>
                    </x-balance-card>
                    @endif
                </div>
            </div>
        </div>

        <div class="lg:grid grid-row-2 lg:grid-cols-2 lg:gap-x-4 px-4 lg:px-8">
            <form action="{{route('admin.wallets.update', $wallet->id)}}" method="post" class="bg-white rounded-lg text-center mb-4 py-4">
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

            <x-admin.transaction-list-card :transactions="$wallet->transactions()->limit(5)->get()" class="mb-8 bg-white rounded-lg">
                <div class="text-center">
                    <x-jet-button href="{{route('admin.transactions.show', $wallet->id)}}">See All</x-jet-button>
                </div>
            </x-admin.transaction-list-card>
        </div>
    </div>
</x-app-layout>
