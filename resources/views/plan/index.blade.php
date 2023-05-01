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
                            <x-jet-button class="justify-center w-full" data-modal-target="invest-modal" data-modal-toggle="invest-modal">
                                Get Started
                            </x-jet-button>
                        </x-plan-item>
                        @empty
                        <div class="py-20 text-center text-slate-400">No Plans Available</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>




      <!-- Main modal -->
  <div id="invest-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 hidden right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="invest-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Open New Order</h3>
                <form class="space-y-6" action="{{route('investments.store')}}" method="POST">
                   @csrf
                    <div>
                        <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Investment Amount</label>
                        <x-jet-input type="currency" name="amount" placeholder="0.00" required/>
                        <x-jet-input-error for='amount'/>
                    </div>
                    <x-jet-button>Proceed</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
