<!--begin::Form-->
    <form id="kt_account_profile_details_form" class="form">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            {{$input ?? ''}}
            {{$textarea ?? ''}}
            {{$dropdown ?? ''}}
        </div>
        <!--end::Card body-->
        <!--begin::Actions-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
        </div>
        <!--end::Actions-->
    </form>
<!--end::Form-->
