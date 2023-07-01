<x-dash.nav>
    <x-dash.nav.tree title="Dashboard">
        <x-slot name="icon">
            <x-dash.icons.dashboard></x-dash.icons.dashboard>
        </x-slot>
        <x-slot name="sub_item">
            <x-dash.nav.sub-item title="Dashboard"></x-dash.nav.sub-item>
        </x-slot>
    </x-dash.nav.tree>

    <x-dash.nav.item title="Calender" :route="route('card')" routeName="card">
        <x-slot name="icon">
            <x-dash.icons.dashboard></x-dash.icons.dashboard>
        </x-slot>
    </x-dash.nav.item>
</x-dash.nav>
