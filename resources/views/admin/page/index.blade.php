<x-app-layout>
    <div class="p-10 bg-gray-50">
        <div class="justify-between gap-3 mb-12 lg:flex">
            <x-balance-card title="Users" content="10" class="mb-4 bg-white">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </x-slot>
                <x-jet-button href="#" class="justify-center block w-full bg-blue-500 lg:w-fit hover:bg-blue-700">
                    See all
                </x-jet-button>
            </x-balance-card>
        </div>

        <div class="flex">
            <x-admin.transaction-list-card :transactions="$transactions" class="flex-1 mb-8 bg-white"/>
        </div>
    </div>
</x-app-layout>
