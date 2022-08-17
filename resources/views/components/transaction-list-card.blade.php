@props(['transactions'])
<div {{$attributes->merge(['class' => "shadow-md p-8"])}}>
    <h4 class="mb-8 text-lg font-bold ">Transactions</h4>
    <div>
        @forelse ($transactions as $transaction)
            <x-transaction-list-item :transaction="$transaction"/>
        @empty
            <p>No Transactions</p>
        @endforelse
    </div>
    @if(
        $transactions instanceof \Illuminate\Pagination\Paginator ||
        $transactions instanceof Illuminate\Pagination\LengthAwarePaginator
    )
        {{ $transactions->links() }}
    @endif
    {{$slot}}
</div>
