<x-app-layout>
    <div class="min-h-screen">
        <div class="w-full max-w-6xl p-5 mx-auto">
            <div class="p-2 rounded bg-slate-100 lg:p-11">
                <h2 class="py-4 text-xl font-bold text-blue-800">Withdraw</h2>
                <p class="mb-4">Please provide a valid wallet address. We won't take responsibily for any loss of funds due to incorrect credentials</p>
                <form action="{{route('withdraw.store')}}" method="post" class="flex flex-col justify-between gap-4">
                    @csrf
                    <div class="p-3 mb-4 overflow-hidden bg-white rounded-3xl">
                        <label class="pl-4 text-xs font-bold">Amount</label>
                        <x-jet-input type="currency" name="amount" class="mb-2 text-gray-800"/>
                        @error('amount')
                            <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="currency" value="usd">

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <x-jet-input name="bank" type="paste" class="bg-white w-full py-3 rounded-3xl px-4" placeholder='Enter Bank Name'/>
                                @error('bank')
                                    <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div>
                            <x-jet-input name="iban" type="paste" class="bg-white w-full py-3 rounded-3xl px-4" placeholder="Enter IBAN"/>
                                @error('iban')
                                    <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div>
                            <x-jet-input name="swift_code" type="paste" class="bg-white w-full py-3 rounded-3xl px-4" placeholder="Enter Swift code/ Routing Number"/>
                                @error('swift_code')
                                    <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div>
                            <x-jet-input name="account_name" type="paste" class="bg-white w-full py-3 rounded-3xl px-4" placeholder='Enter Account Name'/>
                                @error('account_name')
                                    <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div>
                            <x-jet-input name="account_number" type="paste" class="bg-white w-full py-3 rounded-3xl px-4" placeholder='Enter Account Number'/>
                                @error('account_number')
                                    <div class="pl-4 text-xs text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                    </div>

                    <x-jet-button class="self-start bg-blue-500">Proceed</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
