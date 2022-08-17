<x-app-layout>
    <div class="relative bg-slate-50 min-h-screen">
        <div class="p-5 lg:p-11">
            <div class="min-h-[300px] bg-white p-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-bold p-4">Investment Plans</h3>
                    <x-jet-button href="{{route('admin.plans.create')}}">Create</x-jet-button>
                </div>
                <hr class="my-2">
                <div class="md:grid md:grid-cols-2 lg:grid-cols-4 items-start gap-2">
                    @forelse ($plans as $plan)
                        <x-plan-item :plan="$plan">
                            <form action="{{route('admin.plans.destroy', $plan->id)}}" method="post" onsubmit="return confirm('Are you sure ?')">
                                @csrf
                                @method('delete')
                                <button class="w-full px-3 py-3 text-sm shadow rounded-lg text-white bg-black hover:bg-gray-800 ">
                                    Delete
                                </button>
                            </form>
                        </x-plan-item>
                        @empty
                        <div class="text-slate-400 text-center py-20">No Plans Available</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
