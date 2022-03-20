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
                <div class="col-md-8 col-sm-12">
                    <input type="text" placeholder="Service Title..." v-model="title">
                </div>
                <div class="col-md-2 col-sm-12">
                    <span class="input-symbol-dollar">
                        <input class="price" type="text" placeholder="0.00" v-model="price">
                    </span>
                </div>
                <div class="col-md-2 col-sm-12">
                    <select name="item" v-model="itemType">
                        <option value="" disabled>Type</option>
                        <option value="Flat">Flat</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Car">Car</option>
                        <option value="Food">Food</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <textarea name="about" cols="30" rows="10" class="with-border" placeholder="Description..."
                        v-model="description"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="text" data-role="tagsinput" placeholder="#EnterTagsHere" id="tags" />
                </div>
            </div>
            <div class="row pt-5 mt-5 mb-5">
                <div class="col-md-6 col-sm-12 text-right">
                    <button type="button" class="btn outline-md-cyan pl-5 pr-5">Cancel</button>
                </div>
                <div class="col-md-6 col-sm-12 text-left">
                    <button class="btn btn-md-cyan pl-5 pr-5" @click="changeSection">Next</button>
                </div>
            </div>
        </section>
        <section v-else-if="section == 'second'" class="text-center">
            <h3 class="mt-5">Set Your Availability</h3>
            <ul class="available-days mt-4">
                <li>
                    <input class="mr-2 mt-1" type="checkbox" @click="selectDay('Monday')"> Mondays
                </li>
                <li>
                    <input class="mr-2 mt-1" type="checkbox" @click="selectDay('Tuesday')"> Tuesdays
                </li>
                <li>
                    <input class="mr-2 mt-1" type="checkbox" @click="selectDay('Wednesday')"> Wednesdays
                </li>
                <li>
                    <input class="mr-2 mt-1" type="checkbox" @click="selectDay('Thursday')"> Thursdays
                </li>
                <li>
                    <input class="mr-2 mt-1" type="checkbox" @click="selectDay('Friday')"> Fridays
                </li>
                <li>
                    <input class="mr-2 mt-1" type="checkbox" @click="selectDay('Saturday')"> Saturdays
                </li>
                <li>
                    <input class="mr-2 mt-1" type="checkbox" @click="selectDay('Sunday')"> Sundays
                </li>
            </ul>
            <div
                style="border:1px solid #ddd; background-color:#f7f7f7; height:45vh; overflow-y:scroll; padding: 30px; text-align:left">
                <div v-for="(day, index) in availableDays" :key="day-index" class="mb-3">
                    <h4 class="mb-2">@{{day}}</h4>
                    <div class="row p-0">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <input style="width: 60px;" type="text" placeholder="XX" class="d-inline" maxlength="2"
                                @keyup="isNumberKey($event, day)" required v-model="dayAndTime[day].fromH"
                                :id="day+'-fromH'"><span class="ml-2 mr-2">:</span><input style="width: 60px;"
                                type="text" placeholder="XX" class="d-inline" maxlength="2"
                                @keyup="isNumberKey($event, day);" required v-model="dayAndTime[day].fromM"
                                :id="day+'-fromM'">
                            <span v-if="renderComponent" class="ml-3" @click="changeMeridiem(day, 'from')"
                                style="cursor:pointer">@{{dayAndTime[day].fromMeridiem}}</span>
                        </div>
                        <div class="text-center pt-2 mr-5">to</div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <input style="width: 60px;" type="text" placeholder="XX" class="d-inline" maxlength="2"
                                @keyup="isNumberKey($event, day)" required v-model="dayAndTime[day].toH"
                                :id="day+'-toH'">
                            <span class="ml-2 mr-2">:</span>
                            <input style="width: 60px;" type="text" placeholder="XX" class="d-inline" maxlength="2"
                                @keyup="isNumberKey($event, day)" required v-model="dayAndTime[day].toM"
                                :id="day+'-toM'">
                            <span v-if="renderComponent" class="ml-3" @click="changeMeridiem(day, 'to')"
                                style="cursor:pointer">@{{dayAndTime[day].toMeridiem}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 mb-5">
                <div class="col-md-6 col-sm-12 text-right">
                    <button type="button" class="btn outline-md-cyan pl-5 pr-5" @click="goBack">Cancel</button>
                </div>
                <div class="col-md-6 col-sm-12 text-left">
                    <button class="btn btn-md-cyan pl-5 pr-5" @click="changeSection">Next</button>
                </div>
            </div>
        </section>
        <section v-else-if="section == 'third'">
            <div class="row mt-5">
                <div class="col-12">
                    <input type="text" placeholder="Company Name (if none, enter your own name)" v-model="companyName">
                </div>
                <div class="col-12">
                    <input type="text" placeholder="Contact Email" v-model="contactEmail">
                </div>
                <div class="col-12 row m-0 p-0">
                    <div class="col-md-6 col-sm-12">
                        <input type="text" placeholder="Contact Name" v-model="contactName">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" placeholder="Phone Number" v-model="phoneNumber">
                    </div>
                </div>
                <div class="col-12 row m-0 p-0 mb-4">
                    <div class="col-md-9 col-sm-12"></div>
                    <div class="col-md-3 col-sm-12 d-flex call-text">
                        <input type="checkbox" class="mr-2 ml-4" value="1" v-model="callMe"> <span
                            style="font-size:14px;">Call Me</span>
                        <input type="checkbox" class="mr-2 ml-4" value="1" v-model="textMe"> <span
                            style="font-size:14px;">Text Me</span>
                    </div>
                </div>
                <div class="col-12">
                    <input type="text" placeholder="Street Address" v-model="streetAddress">
                </div>
                <div class="col-12 row p-0 m-0">
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
                    <div class="col-md-2 col-sm-12">
                        <input type="text" placeholder="Zip" v-model="zip">
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 mb-5">
                <div class="col-md-6 col-sm-12 text-right">
                    <button type="button" class="btn outline-md-cyan pl-5 pr-5" @click="goBack">Cancel</button>
                </div>
                <div class="col-md-6 col-sm-12 text-left">
                    <button class="btn btn-md-cyan pl-5 pr-5" @click="changeSection">Next</button>
                </div>
            </div>
        </section>

        <section v-else-if="section == 'forth'">
            <h3 class="mt-5 text-center">Upload 1-10 Images</h3>
            <div class="row p-0 m-0">
                <div class="col-md-2 col-sm-12">
                    <div class="ad-image text-center" id="viewImage_0">
                        <img src="{{ asset('content/images/duck.svg') }}" />
                        <input id="files" type='file' style="display:none" @change="showImage"
                            accept="image/png, image/gif, image/jpeg, image/jpg" multiple />
                    </div>
                    <img id="displayImage_0" class="ad-image d-none" />
                    <button class="btn btn-success uploadImage mt-4 text-center" @click="uploadImage"><i
                            class="fa fa-long-arrow-up uploadIcon"></i>Upload Image</button>
                </div>
                <div class="col-md-1 col-sm-12 mr-5 viewImages">
                    <div class="ad-image text-center" id="viewImage_1"></div>
                    <img id="displayImage_1" class="ad-image d-none" />
                </div>
                <div class="col-md-1 col-sm-12 mr-5 viewImages">
                    <div class="ad-image text-center" id="viewImage_2"></div>
                    <img id="displayImage_2" class="ad-image d-none" />
                </div>
                <div class="col-md-1 col-sm-12 mr-5 viewImages">
                    <div class="ad-image text-center" id="viewImage_3"></div>
                    <img id="displayImage_3" class="ad-image d-none" />
                </div>
                <div class="col-md-1 col-sm-12 mr-5 viewImages">
                    <div class="ad-image text-center" id="viewImage_4"></div>
                    <img id="displayImage_4" class="ad-image d-none" />
                </div>

            </div>
            <div class="row p-0 m-0 ml-5" style="margin-top: -6% !important;">
                <div class="col-md-2 col-sm-12"></div>
                <div class="col-md-1 col-sm-12 mr-5 viewImages">
                    <div class="ad-image text-center" id="viewImage_5"></div>
                    <img id="displayImage_5" class="ad-image d-none" />
                </div>
                <div class="col-md-1 col-sm-12 mr-5 viewImages">
                    <div class="ad-image text-center" id="viewImage_6"></div>
                    <img id="displayImage_6" class="ad-image d-none" />
                </div>
                <div class="col-md-1 col-sm-12 mr-5 viewImages">
                    <div class="ad-image text-center" id="viewImage_7"></div>
                    <img id="displayImage_7" class="ad-image d-none" />
                </div>
                <div class="col-md-1 col-sm-12 mr-5 viewImages">
                    <div class="ad-image text-center" id="viewImage_8"></div>
                    <img id="displayImage_8" class="ad-image d-none" />
                </div>
                <div class="col-md-1 col-sm-12 mr-5 viewImages">
                    <div class="ad-image text-center" id="viewImage_9"></div>
                    <img id="displayImage_9" class="ad-image d-none" />
                </div>
            </div>

            <div class="row pt-5 mt-5 mb-5">
                <div class="col-md-6 col-sm-12 text-right">
                    <button type="button" class="btn outline-md-cyan pl-5 pr-5" @click="goBack">Cancel</button>
                </div>
                <div class="col-md-6 col-sm-12 text-left">
                    <button class="btn btn-md-cyan pl-5 pr-5" @click="changeSection">Next</button>
                </div>
            </div>
        </section>
        <section v-else-if="section == 'fifth'">
            <h3 class="mt-4 text-center">Submit This Post?</h3>
            <div class="row mt-5 p-5 bg-white productView">
                <div class="col-md-2 col-sm-12 p-0 mr-4">
                    <img @load="addSrc" id="displayImage_11" class="ad-image" />
                </div>
                <div class="col-4 p-0">
                    <h4 class='pt-1 pb-1'>@{{title}}</h4>
                    <h1 class="mb-3"><span class="text-success">$@{{price}}</span> <span style="color:gray;">/hr</span>
                    </h1>
                    <div>
                        <img class="bg-md-cyan border rounded-circle" alt="user" height="30px" width="30px">
                        <span class="text-md-cyan" style="font-size:14px">{{Auth::user()->name}}</span>
                    </div>
                </div>
                <div class="col-12 mt-3 p-0">
                    <p style="font-size: 12px;" class=" ml-2">Description</p>
                    <p style="font-size: 14px;" class="mt-3">@{{description}}</p>
                </div>
            </div>
            <div class="row pt-5 mt-5 mb-5">
                <div class="col-md-6 col-sm-12 text-right">
                    <button type="button" class="btn outline-md-cyan pl-5 pr-5" @click="goBack">Cancel</button>
                </div>
                <div class="col-md-6 col-sm-12 text-left">
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
            itemType: '',
            description: '',
            tags: [],
            availableDays: [],
            companyName: '',
            contactEmail: '',
            contactName: '',
            phoneNumber: '',
            callMe: 0,
            textMe: 0,
            streetAddress: '',
            city: '',
            state: '',
            zip: '',
            type: 'service',
            images: [],
            dayAndTime: {},
            thumbnail: '',
        },
        methods: {
            changeSection() {
                window.scrollTo(0, 0);
                if (this.section == 'first') {
                    this.tags = document.getElementById('tags').value.split(',');
                    this.section = 'second';
                } else if (this.section == 'second') {
                    this.section = 'third';
                } else if (this.section == 'third') {
                    this.section = 'forth';
                } else if (this.section == 'forth') {
                    this.section = 'fifth';
                }
            },

            goBack() {
                window.scrollTo(0, 0);
                if (this.section == 'second') {
                    this.section = 'first';
                } else if (this.section == 'third') {
                    this.section = 'second';
                } else if (this.section == 'forth') {
                    this.section = 'third';
                } else if (this.section == 'fifth') {
                    this.section = 'forth';
                }
            },

            selectDay(day) {
                if (this.availableDays.includes(day)) {
                    this.availableDays = this.availableDCompanyays.filter(item => item !== day);
                    delete this.dayAndTime.day;
                } else {
                    this.availableDays.push(day);
                    this.dayAndTime[day] = {
                        fromH: '',
                        fromM: '',
                        fromMeridiem: 'AM',
                        toH: '',
                        toM: '',
                        toMeridiem: 'AM'
                    }
                }
            },

            changeMeridiem(day, param) {
                if (param == 'to') {
                    this.dayAndTime[day].toMeridiem == "AM" ? this.dayAndTime[day].toMeridiem = "PM" : this.dayAndTime[day].toMeridiem = "AM";
                } else {
                    this.dayAndTime[day].fromMeridiem == "AM" ? this.dayAndTime[day].fromMeridiem = "PM" : this.dayAndTime[day].fromMeridiem = "AM";
                }
                this.forceRerender();
            },

            forceRerender() {
                // Remove component from the DOM
                this.renderComponent = false;
                this.$nextTick(() => {
                    // Add the component back in
                    this.renderComponent = true;
                });
            },

            isNumberKey(evt, day) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if ((charCode >= 48 && charCode <= 57) || (charCode >= 97 && charCode <= 105)) {
                    if (parseInt(this.dayAndTime[day].fromH) > 12) {
                        document.getElementById(day + '-fromH').value = 12;
                        this.dayAndTime[day].fromH = '12';
                    }
                    if (parseInt(this.dayAndTime[day].toH) > 12) {
                        document.getElementById(day + '-toH').value = 12;
                        this.dayAndTime[day].toH = '12';
                    }
                    if (parseInt(this.dayAndTime[day].fromM) > 59) {
                        document.getElementById(day + '-fromM').value = 59;
                        this.dayAndTime[day].fromM = '59';
                    }
                    if (parseInt(this.dayAndTime[day].toM) > 59) {
                        document.getElementById(day + '-toM').value = 59;
                        this.dayAndTime[day].toM = '59';
                    }
                    console.log(this.dayAndTime[day]);
                    return true;
                } else {
                    evt.preventDefault();
                }
            },

            uploadImage() {
                document.getElementById('files').click();
            },

            showImage() {
                this.images = [];
                var src = document.getElementById("files").files;
                src.length > 10 ? src.length = 10 : '';
                if (src.length < 10) {
                    for (let i = src.length; i < 10; i++) {
                        document.getElementById('displayImage_' + i).removeAttribute("src");
                    }
                }
                for (let index = 0; index < src.length; index++) {
                    var fr = new FileReader();
                    fr.readAsDataURL(src[index]);
                    fr.onload = (function (index, event) {
                        var displayImage = document.getElementById('displayImage_' + index);
                        displayImage.src = event.target.result;
                        displayImage.classList.remove('d-none');
                        if (index == '0') {
                            this.thumbnail = event.target.result;
                        }
                    }).bind(event, index);
                    this.images[index] = src[index];
                    document.getElementById('viewImage_' + index).classList.add('d-none');
                }
            },

            addSrc() {
                document.getElementById('displayImage_11').src = this.thumbnail;
            },

            postData() {
                let formData = new FormData();
                formData.append('title', this.title);
                formData.append('price', this.price);
                formData.append('itemType', this.itemType);
                formData.append('description', this.description);
                formData.append('tags', JSON.stringify(this.tags));
                formData.append('companyName', this.companyName);
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
                formData.append('dayAndTime', JSON.stringify(this.dayAndTime));

                if (this.images.length > 0) {
                    this.images.forEach((value, key) => {
                        formData.append('image-' + key, value);
                    });
                    formData.append('photoLength', this.images.length);
                }

                axios.post('/seller/post-service', formData, {
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