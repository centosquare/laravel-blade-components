<x-dash.layout.master>
    {{--header start--}}
    <x-slot name="header">
        <x-dash.layout.header>

        </x-dash.layout.header>
    </x-slot>
    {{--header end--}}

    {{--left sidebar start--}}
    <x-slot name="left_sidebar">
        <x-dash.examples.left_sidebar></x-dash.examples.left_sidebar>
    </x-slot>
    {{--left sidebar end--}}

    {{--toolbar start--}}
    <x-slot name="toolbar">
        <x-dash.toolbar>
            <x-slot name="title">
                <x-dash.heading.title title="Test Toolbar"></x-dash.heading.title>
                <x-dash.heading.subtitle
                    subTitle="Testing subtitle for example and it's work"></x-dash.heading.subtitle>
            </x-slot>
            <x-slot name="action">
                <x-dash.anchor.btn text="Go to main" :route="route('example.index')"></x-dash.anchor.btn>
            </x-slot>
        </x-dash.toolbar>
    </x-slot>
    {{--toolbar end--}}

    {{--footer start--}}
    <x-slot name="footer">
        <x-dash.layout.footer></x-dash.layout.footer>
    </x-slot>
    {{--footer end--}}
</x-dash.layout.master>
