<x-app-layout>
    <div class="min-h-screen">
        <div class="w-full max-w-6xl p-5 mx-auto">
            <div class="p-2 rounded bg-slate-100 lg:p-11">
                <h2 class="py-4 text-xl font-bold text-blue-800">Withdraw</h2>
                <p class="mb-4">Please provide a valid wallet address. We won't take responsibily for any loss of funds due to incorrect credentials</p>
                <form action="" method="post" class="flex flex-col justify-between gap-4">
                    @csrf
                    <input type="hidden" name="type" value="{{request()->has('bank') ? 'bank' : 'crypto'}}">

                    <div class="p-3 mb-4 overflow-hidden bg-white rounded-3xl">
                        <label class="pl-4 text-xs font-bold">Amount</label>
                        <x-jet-input type="currency" name="amount" class="mb-2 text-gray-800"/>
                        @error('amount')
                            <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                        @enderror
                    </div>

                    @if (!request()->has('bank'))
                        <x-currency-list-input name="currency"/>
                    @endif

                    @if (request()->has('bank'))
                    <div class="flex flex-col p-2 space-y-3 bg-white rounded-lg lg:p-4">
                        <div>
                            <x-jet-input placeholder="Bank Name" name='bank_name' class="w-full px-3 py-2 bg-slate-100"/>
                            <x-jet-input-error for="bank_name"/>
                        </div>
                        <div>
                            <x-jet-input placeholder="Account Name" name='account_name' class="w-full px-3 py-2 bg-slate-100"/>
                            <x-jet-input-error for="account_name"/>
                        </div>
                        <div>
                            <x-jet-input placeholder="Account Number" name='account_number' class="w-full px-3 py-2 bg-slate-100"/>
                            <x-jet-input-error for="account_number"/>
                        </div>
                    </div>
                    @else
                    <div>
                        <x-clipboard-input name="address" type="paste" class="bg-white">
                            @error('address')
                                <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                            @enderror
                        </x-clipboard-input>
                    </div>
                    @endif

                    <div class="flex items-center justify-between">
                        <x-jet-button class="self-start bg-blue-500">Proceed</x-jet-button>
                        @if (request()->has('bank'))
                        <a class="text-sm font-semibold text-blue-500" href="{{route('withdraw.index')}}">Withdraw to wallet instead</a>
                        @else
                        <a class="text-sm font-semibold text-blue-500" href="{{route('withdraw.index', ['bank' => ''])}}">Withdraw to bank instead</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
