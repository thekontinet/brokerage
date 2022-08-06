@props(['disabled' => false])
@if ($attributes->get('type') === 'currency')
<div {{$attributes->class(["relative text-4xl overflow-hidden"])}} x-data="{value:0}">
    <input id="input-text-currency" x-model="value" type="number" class="absolute -translate-x-[500%] peer" name="{{$attributes->get('name')}}" placeholder="$0.00"/>
    <label for="input-text-currency" class="p-2 px-3 block overflow-hidden relative peer-focus-within:text-black text-slate-400" x-text="(new Intl.NumberFormat('en-us', { style: 'currency', currency: 'USD' })).format(isNaN(parseInt(value)/100) ? 0 : parseInt(value)/100)"></label>
</div>
@else
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
@endif
