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
                <x-dash.heading.title title="Test Card"></x-dash.heading.title>
                <x-dash.heading.subtitle
                    subTitle="Testing Subtitle in card example and it's work"></x-dash.heading.subtitle>
            </x-slot>
            <x-slot name="action">
                <x-dash.anchor.btn text="Go to main" :route="route('example.index')"></x-dash.anchor.btn>
            </x-slot>
        </x-dash.toolbar>
    </x-slot>
    {{--toolbar end--}}

    {{--content start--}}
    <x-slot name="content">
        {{--card start--}}
        <x-dash.card>
            <x-dash.card.header title="Card Title" subTitle="Card Subtitle Example">
                <x-slot name="action">
                    <x-dash.anchor.btn text="Card Button"></x-dash.anchor.btn>
                </x-slot>
            </x-dash.card.header>
            <x-dash.form action="{{route('cardPost')}}">
                <x-dash.card.body>
                    <x-dash.row>
                        <x-dash.form.input type="text" label="Test Label*" subLabel="Test input sub-label"
                                           name="test_label" placeholder="test placeholder"></x-dash.form.input>
                        <x-dash.form.input type="textarea" label="Test textarea Label*"
                                           subLabel="Test textarea sub-label" name="test_textarea"
                                           placeholder="test placeholder"></x-dash.form.input>
                        <x-dash.form.input type="select" label="Test select Label*" subLabel="Test select sub-label"
                                           name="test_select" placeholder="Select an option"
                                           :items="['pending' => 'Pending', 'delivered' => 'Delivered', 'received' => 'Received','cancelled' => 'Cancelled']"></x-dash.form.input>
                        <x-dash.form.input type="checkbox" colLength="2" checkboxText="test checkbox1"
                                           label="Test select Label*" subLabel="Test select sub-label"
                                           name="test_select"></x-dash.form.input>
                        <x-dash.form.input type="checkbox" checkboxClass="mt-8" colLength="2"
                                           checkboxText="test checkbox2"
                                           name="test_select"></x-dash.form.input>
                        <x-dash.form.input type="checkbox" checkboxClass="mt-8" colLength="2"
                                           checkboxText="test checkbox3"
                                           name="test_select"></x-dash.form.input>
                        <x-dash.row>
                            <x-dash.form.input type="radio" colLength="2"
                                               radioText="test radio1" label="Test radio button*"
                                               name="test_select"></x-dash.form.input>
                            <x-dash.form.input type="radio" radioClass="mt-8" colLength="2"
                                               radioText="test radio2"
                                               name="test_select"></x-dash.form.input>
                        </x-dash.row>

                    </x-dash.row>
                </x-dash.card.body>
                <x-dash.card.footer>
                    <x-dash.btn text="Submit"></x-dash.btn>
                </x-dash.card.footer>
            </x-dash.form>
        </x-dash.card>
        {{--card end--}}
    </x-slot>
    {{--content end--}}

    {{--footer start--}}
    <x-slot name="footer">
        <x-dash.layout.footer></x-dash.layout.footer>
    </x-slot>
    {{--footer end--}}
</x-dash.layout.master>
