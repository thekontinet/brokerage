<x-app-layout>
    <div class="min-h-[80vh] flex items-center justify-center">
        <div class="bg-white w-full max-w-xl p-10 rounded-lg flex flex-col gap-8">
            <h4 class="font-normal text-center text-2xl">Verify User KYC</h4>
            <p class="font-light">Complete your KYC verification to gain complete access to all our platform features. This process usually takes less than a minute</p>
            <ul>
                <li class="flex justify-between p-4">
                    <span class="font-medium">Name</span>
                    <span class="font-light">{{$kyc->data['name'] ?? null}}</span>
                </li>
                <li class="flex justify-between p-4">
                    <span class="font-medium">Phone</span>
                    <span class="font-light">{{$kyc->data['phone'] ?? null}}</span>
                </li>
                <li class="flex justify-between p-4">
                    <span class="font-medium">Date of Birth</span>
                    <span class="font-light">{{$kyc->data['date_of_birth'] ?? null}}</span>
                </li>
                <li class="flex justify-between p-4">
                    <span class="font-medium">Address</span>
                    <span class="font-light">{{$kyc->data['address'] ?? null}}</span>
                </li>
                <li class="flex justify-between p-4">
                    <span class="font-medium">Verification type</span>
                    <span class="font-light">{{$kyc->data['type'] ?? null}}</span>
                </li>
                <li class="flex justify-between p-4">
                   <img class="w-52" src="{{Storage::url($kyc->data['documentURL']) ?? null}}" alt="Images">
                </li>
            </ul>
            <div class="flex items-center gap-4 justify-center">
                <form action="{{route('admin.kycs.update', $kyc->id)}}" method="post">
                    @csrf
                    @method('put')
                    @if ($kyc->isPending())
                        <x-jet-button>Verify</x-jet-button>
                    @else
                        <x-jet-button class="bg-amber-500">Unverify</x-jet-button>
                    @endif
                </form>
                <form action="{{route('admin.kycs.destroy', $kyc->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <x-jet-button class="bg-red-500">Delete</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
