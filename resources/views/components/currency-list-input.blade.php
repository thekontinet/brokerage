<div class="p-3 bg-white rounded-3xl">
    <label class="p-3 text-xs font-bold">Currency</label>
    @foreach (App\Models\Currency::all() as $currency)
        <div>
            <input class="hidden peer" type="radio" name="{{$attributes->get('name')}}" id="{{$currency->name . '-currency'}}" value="{{$currency->name}}">
            <label class="block p-3 my-2 peer-checked:bg-slate-500 rounded-3xl hover:bg-slate-200" for="{{$currency->name . '-currency'}}">
                <img class="inline-block" src="{{$currency->getLogo('thumb')}}" alt="Icon">
                <strong>{{ucfirst($currency->name)}}</strong>
            </label>
        </div>
    @endforeach
    @error('currency')
        <div class="pl-4 text-xs text-red-500">{{$message}}</div>
    @enderror
</div>
