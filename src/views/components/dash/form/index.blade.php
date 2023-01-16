<!--begin::Form-->
<form id="{{$formId ?? 'form_id'}}" class="form" method="{{$method ?? 'POST'}}" action="{{$action ?? ''}}"
      @isset($enctype) enctype="multipart/form-data" @endisset>
    @csrf
    {{$slot}}
</form>
<!--end::Form-->
