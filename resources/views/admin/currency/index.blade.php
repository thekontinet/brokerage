<x-app-layout>
    <div class="relative bg-slate-50 min-h-screen">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-lg">
            <div class="min-h-[300px] bg-white p-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-bold p-4">Currencies</h3>
                    <x-jet-button href="{{route('admin.currencies.create')}}">Create</x-jet-button>
                </div>
                <hr class="my-2">
                <ul>
                    @forelse ($currencies as $currency)
                        <li class="border-b border-blue-300 hover:bg-blue-50 p-2 rounded mb-2">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1">
                                    <img class="w-7 h-7 inline-block object-cover rounded-full" src="{{$currency->getLogo('thumb')}}" alt="Logo">
                                    <span class="font-bold text-sm">{{ucfirst($currency->name)}}</span>
                                </div>
                                <img class="w-11 h-11 inline-block mr-2 object-contain" src="{{Illuminate\Support\Facades\Storage::url($currency->qr_image_url)}}" alt="Logo">
                            </div>
                            <code class="my-2 block py-4 px-2 bg-blue-100 rounded">{{$currency->address}}</code>
                            <form class="my-2" method="post" action="{{route('admin.currencies.destroy', $currency->id)}}" onsubmit="return confirm('Are you sure you want to delete this currency ?')">
                                @csrf
                                @method('delete')
                                <x-jet-button class="">Remove</x-jet-button>
                            </form>
                        </li>
                        @empty
                        <div class="bg-blue-50 text-blue-400 text-center p-4 rounded">No Currency</div>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
