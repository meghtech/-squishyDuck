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
    <div id="app" class="dashboard-content-container create-service pl-5 pr-5 ml-6 mr-5">
        <div class="dashboard-content-inner">
            <section v-if="section == 'first'">
                <div class="row">
                    <div class="col-sm-12 col-md-10">
                        <input type="text" placeholder="Posting Title..." v-model="title">
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <span class="input-symbol-dollar">
                            <input class="price" type="text" placeholder="0.00" v-model="price">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <textarea name="about" cols="30" rows="10" class="with-border" placeholder="Description..." v-model="description"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <input type="text" data-role="tagsinput" placeholder="#EnterTagsHere" id="tags"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="text" placeholder="Make/Manufacturer (if applicable)" v-model="manufacturer"/>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" placeholder="Model Name/Number (if applicable)" v-model="model"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <input type="text" placeholder="Length x Width x Height" v-model="dimension"/>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <select name="condition" v-model="condition">
                            <option disabled value="">Select Condition</option>
                            <option value="new">New</option>
                            <option value="used">Used</option>
                            <option value="renovated">Renovated</option>
                        </select>
                    </div>
                </div>
                <div class="row pt-5 mt-5 mb-5">
                    <div class="col-md-12 col-sm-12 text-center">
                        <button class="btn btn-md-cyan pl-5 pr-5" @click="changeSection">Next</button>
                    </div>
                </div>
            </section>
            <section v-else-if="section == 'second'">
                <div class="row mt-5">
                    <div class="col-md-12 col-sm-12">
                        <input type="text" placeholder="Contact Email" v-model="contactEmail">
                    </div>
                    <div class="col-md-12 col-sm-12 row m-0 p-0">
                        <div class="col-md-6 col-sm-12">
                        <input type="text" placeholder="Contact Name" v-model="contactName">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" placeholder="Phone Number" v-model="phoneNumber">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 row m-0 p-0 mb-4">
                        <div class="col-md-9 col-sm-12"></div>
                        <div class="col-md-3 col-sm-12 d-flex call-text">
                            <input type="checkbox" class="mr-2 ml-4" value="1" v-model="callMe"> <span style="font-size:14px;">Call Me</span>
                            <input type="checkbox" class="mr-2 ml-4" value="1" v-model="textMe"> <span style="font-size:14px;">Text Me</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <input type="text" placeholder="Street Address" v-model="streetAddress">
                    </div>
                    <div class="col-md-12 col-sm-12 row p-0 m-0">
                        <div class="col-md-8 col-sm-12">
                            <input type="text" placeholder="City" v-model="city">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <select name="state" v-model="state">
                                <option value="" disabled>State</option>
                                <option value="co">CO</option>
                                <option value="ca">CA</option>
                                <option value="la">LA</option>
                                <option value="fl">FL</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="Zip" v-model="zip">
                        </div>
                    </div>
                    <div class="row p-0 m-0">
                        <div class="col-md-12 col-sm-12">
                            <textarea name="deliveryDetails" cols="110" rows="2" class="with-border" placeholder="Pickup or delivery details..." v-model="deliveryDetails"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 mb-5">
                    <div class="col-md-6 text-right">
                        <button type="button" class="btn outline-md-cyan pl-5 pr-5" @click="goBack">Cancel</button>
                    </div>
                    <div class="col-md-6 text-left">
                        <button class="btn btn-md-cyan pl-5 pr-5" @click="postData">Next</button>
                    </div>
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
            renderComponent: true,
            section: 'first',
            title: '',
            price: '',
            description: '',
            tags: [],
            manufacturer: '',
            model: '',
            dimension: '',
            condition: '',
            contactEmail: '',
            contactName: '',
            phoneNumber: '',
            callMe: 0,
            textMe: 0,
            streetAddress: '',
            city: '',
            state: '',
            zip: '',
            type: 'market',
            deliveryDetails: '',
        },
        methods: {
            changeSection(){
                window.scrollTo(0,0);
                if (this.section == 'first') {
                    this.tags = document.getElementById('tags').value.split(',');
                    this.section = 'second';
                }
            },

            goBack(){
                window.scrollTo(0,0);
                if (this.section == 'second') {
                    this.section = 'first';
                }
            },

            postData(){
                let formData = new FormData();
                formData.append('title', this.title);
                formData.append('price', this.price);
                formData.append('description', this.description);
                formData.append('tags', JSON.stringify(this.tags));
                formData.append('manufacturer', this.manufacturer);
                formData.append('model', this.model);
                formData.append('dimension', this.dimension);
                formData.append('condition', this.condition);
                formData.append('contactEmail', this.contactEmail);
                formData.append('contactName', this.contactName);
                formData.append('phoneNumber', this.phoneNumber);
                formData.append('callMe', this.callMe);
                formData.append('textMe', this.textMe);
                formData.append('streetAddress', this.streetAddress);
                formData.append('city', this.city);
                formData.append('state', this.state);
                formData.append('zip', this.zip);
                formData.append('type', this.type);
                formData.append('deliveryDetails', this.deliveryDetails);

                axios.post('/seller/post-inventory', formData, {
                    headers: {
                    'Content-Type': 'multipart/form-data'
                    }
                }).then((response) => {
                    // console.log(response.data);
                });
            }
        },
        mounted() {
            console.log("Mounted");
        },
    });
</script>
@endsection
