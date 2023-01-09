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
        <x-dash.card.index>
            <x-slot name="body">
                <x-dash.form.index>
                    <x-slot name="input">
                        <x-dash.form.input></x-dash.form.input>
                    </x-slot>
                </x-dash.form.index>
            </x-slot>
        </x-dash.card.index>


    </x-slot>


</x-dash.layout.master>
