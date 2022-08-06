@props(['type' => null, 'data' => ''])
<div {{$attributes->class("px-5 py-3 rounded-3xl")}}  x-data="clipboard('{{$data}}')">
    <div class="flex items-center justify-between">
        <input name="{{$attributes->get('name')}}" class="w-full bg-transparent border-none outline-none focus:ring-0 focus:outline-none" type="text" data-target placeholder="Enter Wallet Address" x-bind:value="text" {{$type == 'copy' ? 'disabled' : ''}}>
        @if ($type == 'copy')
        <span class="pl-2 border-l-2 cursor-pointer" title="copy" @click="copy()">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-slate-400 hover:text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
        </span>
        @endif
        @if ($type == 'paste')
        <span class="pl-2 border-l-2 cursor-pointer" title="paste" @click="paste()">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-slate-400 hover:text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
        </span>
        @endif
    </div>
    {{$slot}}
</div>
