<x-app-layout>
    <div class="min-h-screen">
        <div class="w-full max-w-6xl p-5 mx-auto">
            <div class="p-2 rounded bg-slate-100 lg:p-11">
                <h2 class="py-4 text-xl font-bold text-blue-800">Transfer</h2>
                <p class="mb-4">Please deposit to the currect address in order not to lose your funds</p>
                <form action="" method="post" class="flex flex-col justify-between gap-4">
                    @csrf
                    <div class="p-3 mb-4 overflow-hidden bg-white rounded-3xl">
                        <label class="pl-4 text-xs font-bold">Amount</label>
                        <x-jet-input type="currency" name="amount" class="mb-2 text-gray-800"/>
                        @error('amount')
                            <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="p-3 bg-white rounded-3xl">
                        <label class="p-3 text-xs font-bold">From</label>
                        <x-radio-button class="flex items-center justify-between" name="from" value="profit" id="input-profit">
                            <strong class="text-sm">Profit</strong>
                            <strong class="text-sm">{{ format_as_money($wallet->getBalance('profit')) }}</strong>
                        </x-radio-button>
                        <x-radio-button class="flex items-center justify-between" name="from" value="bonus" id="input-bonus">
                            <strong class="text-sm">Bonus</strong>
                            <strong class="text-sm"> {{format_as_money($wallet->getBalance('bonus'))}}</strong>
                        </x-radio-button>
                        @error('from')
                            <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                        @enderror
                    </div>


                    <x-jet-button class="self-start bg-blue-500">Proceed</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
