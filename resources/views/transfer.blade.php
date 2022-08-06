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
                        <div>
                            <input class="hidden peer" type="radio" name="from" id="profit" value="profit">
                            <label class="block p-3 my-2 bg-gray-100 peer-checked:bg-slate-500 rounded-3xl hover:bg-slate-200" for="profit">
                                {{-- <img class="inline-block" src="{{$currency->getLogo('thumb')}}" alt="Icon"> --}}
                                <strong>Profit</strong>
                            </label>
                        </div>
                        <div>
                            <input class="hidden peer" type="radio" name="from" id="bonus" value="bonus">
                            <label class="block p-3 my-2 bg-gray-100 peer-checked:bg-slate-500 rounded-3xl hover:bg-slate-200" for="bonus">
                                <strong>Bonus</strong>
                            </label>
                        </div>
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
