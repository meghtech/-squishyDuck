@extends('layouts.seller')

@push('css')

    <style>
        .alert {
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
        }
        .alert-primary {
            color: #f7f7f7;
            background-color: #006171;
            border-color: #b8daff;
        }
    </style>
@endpush

@section('content')
    <!-- Dashboard Content
	================================================== -->
    <div id="app" class="dashboard-content-container create-service pl-5 pr-5 ml-6 mr-5" data-simplebar>
        <div class="dashboard-content-inner">
            <section>
                <div class="row">
                    <div class="col-8">
                        <input id="autocomplete-input" type="text" placeholder="Service Title...">
                    </div>
                    <div class="col-2">
                        <span class="input-symbol-dollar">
                            <input class="price" type="text" placeholder="0.00">
                        </span>
                    </div>
                    <div class="col-2">
                        <select name="item" id="">
                            <option value="flat">Flat</option>
                            <option value="flat">Flat</option>
                            <option value="flat">Flat</option>
                            <option value="flat">Flat</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <textarea name="about" cols="30" rows="10" class="with-border" placeholder="Description..."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <input type="text" value="" data-role="tagsinput" id="tags" placeholder="#EnterTagsHere"/>
                    </div>
                </div>
                <div class="row pt-5 mt-5 mb-5">
                    <div class="col-6 text-right">
                        <button type="button" class="btn outline-md-cyan pl-5 pr-5">Cancel</button>
                    </div>
                    <div class="col-6 text-left" @click="changeSection">
                        <button class="btn btn-md-cyan pl-5 pr-5">Next</button>
                    </div>
                </div>
            </section>
            <section>
                <div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur, quisquam esse nam est, numquam quia consequatur neque eum illum maiores a praesentium perspiciatis, quasi porro magnam aperiam provident iste natus!</p>
                </div>
            </section>
        </div>
            <!-- Fun Facts Container -->
    </div>
    <!-- Dashboard Content / End -->
    @include('layouts.large-footer')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            section = 'first',
        },
        methods: {
        },
        mounted() {
        },
    });
</script>
@endsection
