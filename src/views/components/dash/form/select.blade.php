<x-dash.col colSize="{{$colSize ?? 'default'}}" colLength="{{$colLength ?? 'default'}}" colClass="{{$colClass ?? ''}}">
    <x-dash.div divClass="{{$divClass ?? 'mb-4'}}">
        @isset($label)
            <label class="form-label {{$labelClass ?? ''}}">{{$label}}</label>
        @endisset
            <select class="form-select" data-control="select2" data-placeholder="Select an option">
                <option></option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>
        @isset($subLabel)
            <x-dash.heading.subtitle subLabelClass="{{$subLabelClass ?? ''}}" subTitle="{{$subLabel}}"></x-dash.heading.subtitle>
        @endisset
        @error($name)
        <x-dash.error message="{{$message}}"></x-dash.error>
        @enderror
    </x-dash.div>
</x-dash.col>
