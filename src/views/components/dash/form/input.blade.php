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
                        name={{$name}} data-control="select2" data-placeholder="{{$placeholder ?? ''}}"
                        @if($type == 'select') data-hide-search="true" @endif>
                    @isset($placeholder)
                        <option></option>
                    @endisset
                    @foreach($items as $key => $item)
                        <option
                            value="{{$key}}" {{ (old($name) == $key || isset($selected) && ($selected == $key) ? "selected":"") }}>{{$item}}</option>
                    @endforeach
                </select>
                @break
            @case('checkbox')
                <x-dash.div divClass="form-check form-check-custom form-check-solid {{$checkboxClass ?? ''}}">
                    <input class="form-check-input {{$checkboxHeight ?? 'h-20px'}} {{$checkboxWidth ?? 'w-20px'}}"
                           type="checkbox" value="{{$value ?? ''}}"
                           id="{{$inputId ?? Str::random(5)}}"/>
                    @isset($checkboxText)
                        <label class="form-check-label">
                            {{$checkboxText}}
                        </label>
                    @endisset
                </x-dash.div>
                @break
            @case('radio')
                <x-dash.div
                    divClass="form-check form-check-custom form-check-solid form-check-{{$radioSize ?? 'sm'}} {{$radioClass ?? ''}}">
                    <input class="form-check-input" type="radio" value="{{$value ?? ''}}" name="{{$name}}"
                           id="{{$inputId ?? Str::random(5)}}"/>
                    @isset($radioText)
                        <label class="form-check-label">
                            {{$radioText}}
                        </label>
                    @endisset
                </x-dash.div>
                @break

            @case('switch')
                <x-dash.div
                    divClass="form-check form-switch form-check-custom form-check-solid {{$switchClass ?? ''}}">
                    <input
                        class="form-check-input {{$switchHeight ?? 'h-30px'}} {{$switchWidth ?? 'w-50px'}} {{$inputClass ?? ''}}"
                        type="checkbox"
                        value="{{$value ?? ''}}" name="{{$name}}"
                        id="{{$inputId ?? Str::random(5)}}"/>
                    @isset($switchText)
                        <label class="form-check-label {{$switchLabelClass ?? ''}}">
                            {{$switchText}}
                        </label>
                    @endisset
                </x-dash.div>
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
