<x-dash.layout.master>
    <x-slot name="header">
        <x-dash.layout.header></x-dash.layout.header>
    </x-slot>
    <x-slot name="left_sidebar">
        <x-dash.layout.left_sidebar></x-dash.layout.left_sidebar>
    </x-slot>
    {{-- <x-slot name="content">
        <x-dash.table.index></x-dash.table.index>
    </x-slot> --}}
    <x-slot name="content">
        <x-dash.form.index></x-dash.form.index>
    </x-slot>


</x-dash.layout.master>
