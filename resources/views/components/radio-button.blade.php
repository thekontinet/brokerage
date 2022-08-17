@props(['name', 'value', 'id'])
<div class="select-none">
    <input x-model="checked" class="hidden peer" type="radio" name="{{$name}}" id="{{$id}}" value="{{$value}}">
    <label {{$attributes->class('block p-3 my-2 bg-gray-100 peer-checked:bg-slate-500 peer-checked:text-white rounded-3xl hover:bg-slate-200')}} for="{{$id}}">
        {{$slot}}
    </label>
</div>
