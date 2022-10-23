<x-jet-action-section>
    <x-slot name="title">
        {{ __('KYC Verification') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Complete your KYC verification to gain complete access to all our platform features. This process usually takes less than a minute') }}
    </x-slot>

    <x-slot name="content">
        @if($kyc === null)
        <section class="mt-4">
            <form action="" wire:submit.prevent='submit'>
                <div class="bg-slate-300 flex rounded-xl overflow-hidden mb-4">
                    <div class="flex-1 flex">
                        <input value="passport" wire:model.defer='form.type' name="id_type" type="radio" id="passport-button" class="peer hidden" checked>
                        <label for="passport-button" class="text-sm cursor-pointer flex-1 text-center peer-checked:bg-black bg-slate-500 text-white p-2 inline-block">Passport</label>
                    </div>
                    <div class="flex-1 flex">
                        <input value="id" wire:model.defer='form.type' name="id_type" type="radio" id="id-button" class="peer hidden">
                        <label for="id-button" class="text-sm cursor-pointer flex-1 text-center peer-checked:bg-black bg-slate-500 text-white p-2 inline-block">ID Card</label>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="mb-2">
                        <x-jet-input wire:model.defer='form.name' type="text" name="fullname" class="w-full col-span-1 text-gray-800" placeholder="Enter Full Name"/>
                        @error('form.name')<span class="text-xs text-red-400">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <x-jet-input wire:model.defer='form.phone' type="text" name="phone" class="w-full col-span-1 text-gray-800" placeholder="Enter Phone"/>
                        @error('form.phone')<span class="text-xs text-red-400">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <x-jet-input wire:model.defer='form.address' type="text" name="address" class="w-full col-span-1 text-gray-800" placeholder="Enter Residence Address"/>
                        @error('form.address')<span class="text-xs text-red-400">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <x-jet-input wire:model.defer='form.date_of_birth' type="date" name="dob" class="w-full col-span-1 text-gray-800" placeholder="Date of Birth"/>
                        @error('form.date_of_birth')<span class="text-xs text-red-400">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-4 my-4" x-data="{photoName: null, photoPreview: null}">
                    <label class="h-32 cursor-pointer text-sm flex items-center justify-center border-2 border-dashed" for="photo">
                        <span x-show='!photoName'>Click to upload documents</span>
                        <img class="w-32 h-full object-cover" x-show='photoPreview' x-bind:src="photoPreview" alt="preview">
                    </label>
                    <input
                        id="photo"
                        x-ref='photo'
                        wire:model.defer='photo'
                        type="file"
                        class="hidden"
                        x-on:change="
                                photoName = $refs.photo.files[0].name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.photo.files[0]);
                        "/>
                    @error('photo')<span class="text-xs text-red-400">{{$message}}</span>@enderror
                </div>
                <x-jet-button wire:loading.attr='disabled'>
                    <span wire:loading.class='hidden'>Submit</span>
                    <span class="hidden" wire:loading.class.remove='hidden'>Loading...</span>
                </x-jet-button>
            </form>
        </section>
        @elseif($kyc?->isPending())
        <div class="text-center rounded-md bg-amber-500 text-amber-300 font-light py-8 px-4">KYC Request Pending</div>
        @else
        <div class="text-center  rounded-md bg-green-500 text-green-300 font-light py-8 px-4">KYC Complete</div>
        @endif
    </x-slot>
</x-jet-action-section>
