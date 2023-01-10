<!--begin::Input group-->
<div class="col-lg-{{$col ?? '12'}} fv-row">
    <!--begin::Label-->
    <label class="fw-semibold fs-6">Currency</label>
    <!--end::Label-->
    <!--begin::Select-->
        <select name="{{$name ?? ''}}" data-control="select2" data-placeholder="{{$label ?? 'Select a label'}}" class="form-select form-select-solid form-select-lg">
            @foreach ($key ?? [] as $value)
                <option value="{{ $value->id }}">{{ $value->name}}</option>
            @endforeach
        </select>
    <!--end::Select-->
</div>
<!--end::Input group-->
