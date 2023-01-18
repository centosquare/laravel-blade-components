<x-dash.col colSize="{{$colSize ?? 'default'}}" colLength="{{$colLength ?? 'default'}}" colClass="{{$colClass ?? ''}}">
    <x-dash.div divClass="{{$divClass ?? 'mb-4'}}">
        @isset($label)
            <label class="form-label {{$labelClass ?? ''}}">{{$label}}</label>
        @endisset
        <textarea id="{{$inputId ?? Str::random(5)}}" class="form-control {{$inputClass ?? ''}}"
               placeholder="{{$placeholder ?? ''}}"
                  name="{{$name}}" rows="{{$textAreaRow ?? '4'}}" cols="{{$textAreaCol ?? '50'}}">{{isset($value) ? old($name,$value) : old($name)}}</textarea>
        @isset($subLabel)
            <x-dash.heading.subtitle subLabelClass="{{$subLabelClass ?? ''}}" subTitle="{{$subLabel}}"></x-dash.heading.subtitle>
        @endisset
        @error($name)
        <x-dash.error message="{{$message}}"></x-dash.error>
        @enderror
    </x-dash.div>
</x-dash.col>
