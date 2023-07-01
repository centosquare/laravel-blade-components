<!--begin:Menu Tree item-->
<div data-kt-menu-trigger="click" class="menu-item menu-accordion
{{isset($menuTreeItems) && is_array($menuTreeItems) && in_array(Request::route()->getName(), $menuTreeItems) ? 'show' : '' }}">
    <!--begin:Menu link-->
    <span class="menu-link">
        <span class="menu-icon">
           {{$icon ?? ''}}
        </span>
        <span class="menu-title">{{$title ?? ''}}</span>
        <span class="menu-arrow"></span>
    </span>
    <!--end:Menu link-->
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion">
        {{$sub_item ?? '' }}
    </div>
    <!--end:Menu sub-->
</div>
<!--end:Menu Tree item-->
