<x-app-layout>
    <div class="mx-auto bg-white p4 lg:p-11">
        <h3 class="my-5 text-2xl font-bold">Users</h3>
        <div class="grid gap-2 mb-3 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($users as $user)
            <div class="flex flex-col items-center py-16 rounded-lg md:py-12 bg-gradient-to-r from-blue-700 to-blue-500">
                <div class="flex items-center justify-center w-full">
                    <div class="flex flex-col items-center">
                        <img class="object-cover w-16 h-16 rounded-full" tabindex="0" class="focus:outline-none" src="{{ $user->profile_photo_url}}" alt="user avatar" />
                        <p tabindex="0" class="mt-2 text-xs font-semibold text-center text-white focus:outline-none sm:text-sm md:text-base">{{$user->name}}</p>
                        <p tabindex="0" class="mb-2 text-xs font-semibold text-center text-white focus:outline-none sm:text-sm md:text-base">{{$user->email}}</p>
                    </div>
                </div>
                <div class="flex items-center mt-7">
                    <div class="">
                        <p tabindex="0" class="text-xs text-gray-300 focus:outline-none">Balance</p>
                        <p tabindex="0" class="mt-2 text-base focus:outline-none sm:text-md md:text-xl 2xl:text-2xl text-gray-50">{{format_as_money($user->wallet->getBalance())}}</p>
                    </div>
                    <div class="ml-12">
                        <p tabindex="0" class="text-xs text-gray-300 focus:outline-none">Profit</p>
                        <p tabindex="0" class="mt-2 text-base focus:outline-none sm:text-md md:text-xl 2xl:text-2xl text-gray-50">{{format_as_money($user->wallet->getBalance('profit'))}}</p>
                    </div>
                    <div class="ml-12">
                        <p tabindex="0" class="text-xs text-gray-300 focus:outline-none">Bonus</p>
                        <p tabindex="0" class="mt-2 text-base focus:outline-none sm:text-md md:text-xl 2xl:text-2xl text-gray-50">{{format_as_money($user->wallet->getBalance('bonus'))}}</p>
                    </div>
                </div>
                <x-jet-button href="{{route('admin.users.show', $user->id)}}" class="mt-4">Impersonate</x-jet-button>
                <x-jet-button href="{{route('admin.wallets.show', $user->wallet->id)}}" class="mt-4">Fund Wallet</x-jet-button>
                @if($user->kyc)
                    <x-jet-button href="{{route('admin.kycs.edit', $user->kyc->id)}}" class="mt-4">
                        Verify KYC
                    </x-jet-button>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
