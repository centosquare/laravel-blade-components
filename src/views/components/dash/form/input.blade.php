<!--begin::Col-->
<div class="col-lg-{{$col ?? '12'}} fv-row">
        <!--begin::Label-->
            <label class="required fw-semibold fs-6">{{$label ?? 'Label Goes Here'}}</label>
        <!--end::Label-->
        <!--begin::Input-->
            <input type="{{$type ?? 'text'}}" name="{{$name ?? ''}}" class="form-control form-control-lg form-control-solid" placeholder="{{$placeholder ?? ''}}"/>
        <!--end::Input-->
        <!--begin::Hint-->
            <div class="form-text">{{$hint ?? ''}}</div>
        <!--end::Hint-->
        <!--begin::Error-->
            <div class="text-danger">{{$error ?? ''}}</div>
        <!--end::Error-->
</div>
<!--end::Col-->
