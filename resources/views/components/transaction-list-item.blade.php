@props(['transaction'])
<a href="{{route('transactions.show', $transaction->id)}}" {{$attributes->merge(['class'=>"flex items-center justify-between p-3 rounded-lg cursor-pointer hover:bg-gray-50"])}}>
    <div class="flex items-center">
        <div class="p-1 mr-2 text-white bg-blue-600 rounded-md">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
        </div>
        <div>
            <h4 class="-mb-1 font-bold">
                {{ucfirst($transaction->type)}}
                @if ($transaction->isPending())
                <svg class="inline-block w-3 h-3 text-yellow-600 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                @endif
                @if ($transaction->isSuccess())
                <svg class="inline-block w-3 h-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>                @endif
                @if ($transaction->isRejected())
                <svg class="inline-block w-3 h-3 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                @endif
            </h4>
            <p class="text-xs">{{$transaction->created_at->diffForHumans()}}</p>
        </div>
    </div>
    <div class="font-bold {{$transaction->isPending() ? 'text-yellow-600' : ($transaction->isSuccess() ? 'text-green-600' : 'text-red-600')}}">{{format_as_money($transaction->amount)}}</div>
</a>
