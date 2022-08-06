<x-app-layout>
    <div class="min-h-screen">
        <div class="w-full max-w-6xl p-5 mx-auto">
            <div class="p-2 rounded bg-slate-100 lg:p-11">
                <h2 class="py-4 text-xl font-bold text-blue-800">Withdraw</h2>
                <p class="mb-4">Please provide a valid wallet address. We won't take responsibily for any loss of funds due to incorrect credentials</p>
                <form action="" method="post" class="flex flex-col justify-between gap-4">
                    @csrf
                    <div class="p-3 mb-4 overflow-hidden bg-white rounded-3xl">
                        <label class="pl-4 text-xs font-bold">Amount</label>
                        <x-jet-input type="currency" name="amount" class="mb-2 text-gray-800"/>
                        @error('amount')
                            <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                        @enderror
                    </div>

                    <x-currency-list-input name="currency"/>

                    <div>
                        <x-clipboard-input name="address" type="paste" class="bg-white">
                            @error('address')
                                <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                            @enderror
                        </x-clipboard-input>
                    </div>

                    <x-jet-button class="self-start bg-blue-500">Proceed</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
