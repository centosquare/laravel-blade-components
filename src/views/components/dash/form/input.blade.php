<x-dash.col colSize="{{$colSize ?? 'default'}}" colLength="{{$colLength ?? 'default'}}" colClass="{{$colClass ?? ''}}">
    <x-dash.div divClass="{{$divClass ?? 'mb-4'}}">
        @isset($label)
            <label class="form-label {{$labelClass ?? ''}}">{{$label}}</label>
        @endisset
        @switch($type)
            @case('textarea')
                <textarea id="{{$inputId ?? Str::random(5)}}" class="form-control {{$inputClass ?? ''}}"
                          placeholder="{{$placeholder ?? ''}}"
                          name="{{$name}}" rows="{{$textAreaRow ?? '4'}}"
                          cols="{{$textAreaCol ?? '50'}}">{{isset($value) ? old($name,$value) : old($name)}}</textarea>
                @break
            @case(str_contains($type, "select"))
                <select id="{{$inputId ?? Str::random(5)}}" class="form-select {{$inputClass ?? ''}}"
                        name={{$name}} data-control="select2" data-placeholder="Select an option"
                        @if($type == 'select') data-hide-search="true" @endif>
                    <option></option>
                    @foreach($items as $key => $item)
                        <option
                            value="{{$key}}" {{ (old($name) == $key || isset($selected) && ($selected == $key) ? "selected":"") }}>{{$item}}</option>
                    @endforeach
                </select>
                @break
            @default
                <input id="{{$inputId ?? Str::random(5)}}" type="{{$type}}"
                       class="form-control {{$inputClass ?? ''}}"
                       placeholder="{{$placeholder ?? ''}}"
                       name="{{$name}}" value="{{isset($value) ? old($name,$value) : old($name)}}"/>
        @endswitch


        @isset($subLabel)
            <x-dash.heading.subtitle subLabelClass="{{$subLabelClass ?? ''}}"
                                     subTitle="{{$subLabel}}"></x-dash.heading.subtitle>
        @endisset
        @error($name)
        <x-dash.error message="{{$message}}"></x-dash.error>
        @enderror
    </x-dash.div>
</x-dash.col>
