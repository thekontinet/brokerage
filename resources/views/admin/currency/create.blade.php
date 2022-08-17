<x-app-layout>
    <div class="max-w-xl mx-auto bg-slate-50">
        <div class="p-4 mt-5 bg-white rounded">
            <h1 class="my-4 font-bold">Add New Currency</h1>
            <form action="{{route('admin.currencies.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <x-jet-input name="name" class="w-full px-3 py-2 mb-3 bg-slate-50" placeholder="Currency Name"/>
                @error('name')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
                <x-jet-input name="address" class="w-full px-3 py-2 mb-3 bg-slate-50" placeholder="Address"/>
                @error('address')
                    <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label for="file" class="block text-sm">Upload Qr Code</label>
                    <input type="file" name="qr_code">
                    @error('qr_code')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <x-jet-button class="px-3 py-2">Save</x-jet-button>
            </form>
        </div>
    </div>
</x-app-layout>
