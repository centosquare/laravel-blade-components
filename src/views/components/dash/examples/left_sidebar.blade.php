<x-dash.nav>
    <x-dash.nav.tree title="Dashboard" :menuTreeItems="['example.index']">
        <x-slot name="icon">
            <x-dash.i iconClass="bi bi-bounding-box"></x-dash.i>
        </x-slot>
        <x-slot name="sub_item">
            <x-dash.nav.item title="Dashboard" :route="route('example.index')" routeName="example.index"></x-dash.nav.item>
        </x-slot>
    </x-dash.nav.tree>

    <x-dash.nav.item title="Calender" :route="route('card')" routeName="card">
        <x-slot name="icon">
            <x-dash.i iconClass="bi bi-calendar"></x-dash.i>
        </x-slot>
    </x-dash.nav.item>
</x-dash.nav>
