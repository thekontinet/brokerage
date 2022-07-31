<x-app-layout>
    <div class="p-10 bg-gray-50">
        <div class="justify-between gap-3 mb-12 lg:flex">
            <x-balance-card class="mb-4 bg-white"/>
            <x-balance-card class="mb-4 bg-white"/>
            <x-balance-card class="mb-4 bg-white"/>
        </div>

        <div class="grid grid-cols-12 gap-2">
            <x-transaction-list-card class="col-span-12 mb-8 bg-white lg:col-span-8"/>
            <div class="col-span-12 shadow lg:col-span-4">
                <div class="flex items-center justify-center h-full p-8 text-white bg-blue-600 rounded">
                    <div class="px-2">
                        <h4 class="text-2xl text-center">Refer and earn upto <strong>$500</strong> bonus</h4>
                        <form action="" class="my-2">
                            <div class="grid grid-cols-10">
                                <input type="text" class="col-span-8 border-gray-300 rounded-tl rounded-bl shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="https://domain.com/43Dezte">
                                <button class="col-span-2 p-2 text-white bg-gray-800 rounded-tr rounded-br hover:bg-gray-600">Copy</button>
                            </div>
                        </form>
                        <p class="text-sm text-center">
                            Copy your referal link and share to others to earn bonus point
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
