<x-app-layout>
    <div class="relative min-h-screen bg-slate-50">
        <div class="p-5 lg:p-11">
            <div class="min-h-[300px] bg-white p-4">
                <div class="flex items-center justify-between">
                    <h3 class="p-4 text-lg font-bold">Investment Plans</h3>
                </div>
                <hr class="my-2">
                <div class="items-start gap-2 md:grid md:grid-cols-2 lg:grid-cols-4">
                    @forelse ($plans as $plan)
                        <x-plan-item :plan="$plan">
                            <form action="{{route('deposit.index')}}" method="get">
                                <input type="hidden" name="amount" value="{{$plan->price}}">
                                <button class="w-full px-3 py-3 text-sm text-white bg-blue-700 rounded-lg shadow hover:bg-blue-900 ">
                                    Get Started
                                </button>
                            </form>
                        </x-plan-item>
                        @empty
                        <div class="py-20 text-center text-slate-400">No Plans Available</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
