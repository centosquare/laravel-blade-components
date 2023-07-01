<!--begin:Menu item-->
<div class="menu-item">
    <!--begin:Menu link-->
    <a class="menu-link {{ Request::route()->getName() == ($routeName ?? '') ? 'active' : ''}}" href="{{$route ?? ''}}">
        @if(isset($icon))
            <span class="menu-icon">
            {{$icon}}
        </span>
        @else
            <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        @endif
        <span class="menu-title">{{$title ?? ''}}</span>
    </a>
    <!--end:Menu link-->
</div>
<!--end:Menu item-->
