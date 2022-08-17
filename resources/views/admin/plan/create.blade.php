<x-app-layout>
    <div class="relative bg-slate-50 min-h-screen">
        <div class="lg:absolute lg:top-1/2 lg:left-1/2 lg:-translate-x-1/2 lg:-translate-y-1/2 w-full max-w-lg">
            <div class="min-h-[300px] bg-white p-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-bold">Create Investment Plan</h3>
                </div>

                <x-jet-validation-errors/>

                <form class="mt-5" action="{{route('admin.plans.store')}}" method="post">
                    @csrf
                    <div class="mb-4">
                        <x-jet-input type="currency" name="price"/>
                    </div>
                    <div class="grid grid-cols-3 gap-x-3 mb-3">
                        <x-radio-button class="text-xs text-center p-1" name="type" value="day" id="day">Daily</x-radio-button>
                        <x-radio-button class="text-xs text-center p-1" name="type" value="week" id="week">Weekly</x-radio-button>
                        <x-radio-button class="text-xs text-center p-1" name="type" value="month" id="month">Monthly</x-radio-button>
                    </div>
                    <x-jet-input name="title" class="w-full py-2 px-3 border mb-4" placeholder="Enter Plan Name"/>
                    <x-jet-input name="percentage" class="w-full py-2 px-3 border mb-4" placeholder="Enter Percentage Return eg. 10 = 10%"/>
                    <div x-data="{items:[], text:''}">
                        <template x-for="(item, index) in items">
                            <div class="flex justify-between items-center">
                                <input x-bind:value="item"type="text" name="extra[]" readonly class="w-full border-none outline-none focus:ring-0 text-black text-sm mb-2">
                                <svg x-on:click="items = items.filter((v, i) => i !== index)"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </template>
                        <div class="flex mt-5">
                            <input x-model="text" class="flex-1 rounded-tl rounded-bl" type="text" placeholder="Extra Details">
                            <button type="button" class="bg-blue-800 text-white text-sm px-7 rounded-tr rounded-br" x-on:click.prevent="items.push(text); text=''">Add</button>
                        </div>
                    </div>
                    <x-jet-button class="my-5">Create</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
