<!--begin::Col-->
<div class="col-lg-{{$col ?? '8'}}">
    <!--begin::Image input-->
    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
        <!--begin::Preview existing avatar-->
        <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ URL::asset($image ?? 'assets/media/avatars/300-1.jpg') }})"></div>
        <!--end::Preview existing avatar-->
        <!--begin::Label-->
        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
            <i class="bi bi-pencil-fill fs-7"></i>
            <!--begin::Inputs-->
            <input type="file" name="{{$name ?? ''}}" accept=".png, .jpg, .jpeg" />
            {{-- <input type="hidden" name="avatar_remove" /> --}}
            <!--end::Inputs-->
        </label>
        <!--end::Label-->
        <!--begin::Cancel-->
        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
            <i class="bi bi-x fs-2"></i>
        </span>
        <!--end::Cancel-->
        <!--begin::Remove-->
        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
            <i class="bi bi-x fs-2"></i>
        </span>
        <!--end::Remove-->
    </div>
    <!--end::Image input-->
    <!--begin::Hint-->
    <div class="form-text">{{$hint ?? 'Allowed file types: png, jpg, jpeg.'}}</div>
    <!--end::Hint-->
</div>
<!--end::Col-->
