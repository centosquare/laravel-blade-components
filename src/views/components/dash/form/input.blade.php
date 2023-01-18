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
                @if($type == 'select2')
                    <select class="form-select" data-control="select2" data-placeholder="Select an option">
                        @else
                            <select class="form-select">
                                @endif

                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
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
