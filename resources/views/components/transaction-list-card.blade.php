<div {{$attributes->merge(['class' => "shadow-md p-8"])}}>
    <h4 class="mb-8 text-lg font-bold ">Transactions</h4>
    <div>
        <x-transaction-list-item/>
        <x-transaction-list-item/>
        <x-transaction-list-item/>
        <x-transaction-list-item/>
    </div>
</div>
