<div {{$attributes->merge(['class' =>'flex flex-wrap items-center justify-between flex-1 p-5 border shadow-sm lg:flex-col lg:items-start rounded-xl'])}}>
    <div class="flex items-center flex-1">
        <div class="w-10 h-10 p-2 text-white bg-blue-600 rounded-lg">
            @if (!isset($icon))
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            @else
            {{$icon}}
            @endif
        </div>
        <h3 class="ml-2 ">{{$title}}</h3>
    </div>
    <div class="items-center w-full lg:flex lg:justify-between">
        <p class="py-4 text-2xl font-bold lg:pl-10">{{$content}}</p>
        {{$slot}}
    </div>
</div>
