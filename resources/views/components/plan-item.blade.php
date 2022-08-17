@props(['plan'])
<div class="rounded-lg shadow-lg overflow-hidden mb-4">
    <div class="px-6 py-8 bg-white dark:bg-gray-800 sm:pb-6">
        <div class="flex justify-center">
            <span class="inline-flex px-4 py-1 dark:text-white rounded-full text-sm leading-5 font-semibold tracking-wide uppercase">
                {{$plan->title}}
            </span>
        </div>
        <div class="mt-4 flex justify-center text-4xl leading-none font-extrabold dark:text-white">
            {{format_as_money($plan->price)}}
            <span class="ml-1 pt-8 text-sm leading-8 font-medium text-gray-500 dark:text-gray-400">
                /{{$plan->type}}
            </span>
        </div>
    </div>
    <div class="px-6 pb-8 bg-white dark:bg-gray-800">
        <ul>
            <li class="mt-4 flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                </div>
                <p class="ml-3 text-base leading-6 text-gray-700 dark:text-gray-200">
                    {{$plan->percentage}}% returns per investment
                </p>
            </li>
            @foreach ($plan->extra as $extra)
            <li class="mt-4 flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-green-500" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                </div>
                <p class="ml-3 text-base leading-6 text-gray-700 dark:text-gray-200">
                    {{$extra}}
                </p>
            </li>
            @endforeach
        </ul>
        <div class="mt-6 rounded-md shadow">
            {{$slot}}
        </div>
    </div>
</div>
