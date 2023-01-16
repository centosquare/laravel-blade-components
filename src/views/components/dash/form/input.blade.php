<x-dash.col colSize="{{$colSize ?? ''}}" colClass="{{$colClass ?? ''}}">
    <x-dash.div divClass="{{$divClass ?? 'mb-4'}}">
        @isset($label)
            <label class="form-label {{$labelClass ?? ''}}">{{$label}}</label>
        @endisset
        <input type="{{$type ?? 'text'}}" class="form-control {{$inputClass ?? ''}}"
               placeholder="{{$placeholder ?? ''}}"
               name="{{$name}}" value="{{isset($value) ? old($name,$value) : old($name)}}"/>
        @error($name)
        <x-dash.error message="{{$message}}"></x-dash.error>
        @enderror
    </x-dash.div>
</x-dash.col>
