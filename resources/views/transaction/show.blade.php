<x-app-layout>
    <div class="px-3 bg-gray-100 lg:p-10">
        <div class="mb-10 text-center">
            <div class="py-6">
                <h4 class="text-2xl font-bold">{{format_as_money($transaction->amount)}}</h4>
                <p class="text-sm">Amount</p>
                <div class="mt-2">
                    @if ($transaction->isPending())
                    <svg class="w-12 h-12 mx-auto border-4 border-yellow-600 rounded-full print:hidden border-t-yellow-200 border-l-yellow-200 animate-spin" viewBox="0 0 24 24">
                    </svg>
                    <div class="hidden px-2 py-1 text-sm text-white bg-yellow-500 rounded print:inline-block">Pending</div>
                    @endif
                    @if ($transaction->isSuccess())
                    <svg class="w-12 h-12 mx-auto text-green-500 print:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    <div class="hidden px-2 py-1 text-sm text-white bg-green-500 rounded print:inline-block">Successful</div>
                    @endif
                    @if ($transaction->isRejected())
                    <svg class="w-12 h-12 mx-auto text-red-500 print:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div class="hidden px-2 py-1 text-sm text-white bg-red-500 rounded print:inline-block">Failed</div>
                    @endif
                </div>
            </div>
        </div>


        @if ($transaction->isPending() && $transaction->isDeposit())
        <div class="max-w-md p-4 mx-auto mb-4 text-center bg-white rounded-xl">
            @if ($transaction->asset?->qr_image_url)
            <img src="{{Illuminate\Support\Facades\Storage::url($transaction->asset?->qr_image_url)}}" alt="QR code">
            @endif
            <x-clipboard-input type="copy" data="{{$transaction->getAddress()}}" class="bg-slate-50"/>
            <h4 class="mt-5 text-sm font-bold">Note: To avoid the risk of losing your funds, please:</h4>
            <ul class="py-4 text-xs text-left list-disc px-7">
                <li class="text-xs">Send to the above address. We can't verify the deposit if sent to a wrong address</li>
                <li class="text-xs">Deposit only <span class="font-black">{{$transaction->asset->name}}</span> to this address.</li>
                <li class="text-xs">Do not deposit below <span class="font-black">{{format_as_money($transaction->amount)}}</span> (your deposit amount).</li>
            </ul>
        </div>
        @endif


        <div class="max-w-md p-4 mx-auto text-center bg-white rounded-xl">
            <ul class="">
                <li class="flex flex-wrap justify-between p-2 my-4 border-b">
                    <span class="font-bold">Hash</span>
                    <span>{{$transaction->hash}}</span>
                </li>
                <li class="flex flex-wrap justify-between p-2 my-4 border-b">
                    <span class="font-bold">Amount</span>
                    <span>{{format_as_money($transaction->amount)}}</span>
                </li>
                <li class="flex flex-wrap justify-between p-2 my-4 border-b">
                    <span class="font-bold">Type</span>
                    <span>{{$transaction->type}}</span>
                </li>
                <li class="flex flex-wrap justify-between p-2 my-4 border-b">
                    <span class="font-bold">Address</span>
                    <span class="font-mono">{{$transaction->getAddress()}}</span>
                </li>
                <li class="flex flex-wrap justify-between p-2 my-4 border-b">
                    <span class="font-bold">Date</span>
                    <span>{{$transaction->created_at->format('d M, Y')}} <sup class="text-xs">({{$transaction->created_at->diffForHumans()}})</sup></span>
                </li>
            </ul>
            <x-jet-button class="bg-blue-500">Print</x-jet-button>
            @if($transaction->isPending())
                <form onsubmit="return confirm('Note: This action is not reversable. Are you sure to discard this transaction ?')" action="{{route('transactions.destroy', $transaction->id)}}" method="post" class="inline-block">
                    @csrf
                    @method('delete')
                    <x-jet-button class="bg-red-500">Cancel</x-jet-button>
                </form>
            @endif
        </div>
    </div>
</x-app-layout>
