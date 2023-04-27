<x-app-layout>
    <div class="p-2 lg:p-10 bg-gray-50">
        <div class="justify-between gap-3 mb-12 lg:flex">
            <x-balance-card title="Users" content="{{\App\Models\User::count()}}" class="mb-4 bg-white">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </x-slot>
                <x-jet-button href="{{route('admin.users.index')}}" class="justify-center block w-full bg-blue-500 lg:w-fit hover:bg-blue-700">
                    See all
                </x-jet-button>
            </x-balance-card>
            <x-balance-card title="Pending Transactions" content="{{\App\Models\Transaction::pending()->count()}}" class="mb-4 bg-white">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                </x-slot>
                <x-jet-button href="{{route('admin.transactions.index')}}" class="justify-center block w-full bg-blue-500 lg:w-fit hover:bg-blue-700">
                    See all
                </x-jet-button>
            </x-balance-card>
            <x-balance-card title="Assets" content="{{App\Models\Currency::count()}}" class="mb-4 bg-white">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot>
                <x-jet-button href="{{route('admin.currencies.index')}}" class="justify-center block w-full bg-blue-500 lg:w-fit hover:bg-blue-700">
                    See all
                </x-jet-button>
            </x-balance-card>
            <x-balance-card title="Trading Plans" content="{{App\Models\Plan::count()}}" class="mb-4 bg-white">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </x-slot>
                <x-jet-button href="{{route('admin.plans.index')}}" class="justify-center block w-full bg-blue-500 lg:w-fit hover:bg-blue-700">
                    See all
                </x-jet-button>
            </x-balance-card>
        </div>

        <div class="flex">
            <x-admin.transaction-list-card :transactions="$transactions" class="flex-1 mb-8 bg-white"/>
        </div>
    </div>
</x-app-layout>
