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
                    <div class="col-8">
                        <input type="text" placeholder="Service Title...">
                    </div>
                    <div class="col-2">
                        <span class="input-symbol-dollar">
                            <input class="price" type="text" placeholder="0.00">
                        </span>
                    </div>
                    <div class="col-2">
                        <select name="item">
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
                    <input type="text" value="" data-role="tagsinput" placeholder="#EnterTagsHere"/>
                    </div>
                </div>
                <div class="row pt-5 mt-5 mb-5">
                    <div class="col-6 text-right">
                        <button type="button" class="btn outline-md-cyan pl-5 pr-5">Cancel</button>
                    </div>
                    <div class="col-6 text-left">
                        <button class="btn btn-md-cyan pl-5 pr-5" @click="changeSection">Next</button>
                    </div>
                </div>
            </section>
            <section v-else-if="section == 'second'" class="text-center">
                <h3 class="mt-5">Set Your Availability</h3>
                <ul class="available-days mt-4">
                    <li>
                        <input class="mr-2 mt-1" type="checkbox"   @click="selectDay('Monday')"> Mondays
                    </li>
                    <li>
                        <input class="mr-2 mt-1" type="checkbox"  @click="selectDay('Tuesday')"> Tuesdays
                    </li>
                    <li>
                        <input class="mr-2 mt-1" type="checkbox"  @click="selectDay('Wednesday')"> Wednesdays
                    </li>
                    <li>
                        <input class="mr-2 mt-1" type="checkbox"  @click="selectDay('Thursday')"> Thursdays
                    </li>
                    <li>
                        <input class="mr-2 mt-1" type="checkbox"  @click="selectDay('Friday')"> Fridays
                    </li>
                    <li>
                        <input class="mr-2 mt-1" type="checkbox"   @click="selectDay('Saturday')"> Saturdays
                    </li>
                    <li>
                        <input class="mr-2 mt-1" type="checkbox"   @click="selectDay('Sunday')"> Sundays
                    </li>
                </ul>
                <div style="border:1px solid #ddd; background-color:#f7f7f7; height:45vh; overflow-y:scroll; padding: 30px; text-align:left">
                    <div v-for="(day, index) in availableDays" :key="day-index" class="mb-3">
                        <h4 class="mb-2">@{{day}}</h4>
                        <div class="row p-0">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <input style="width: 60px;" type="text" placeholder="XX" class="d-inline" maxlength="2" @keyup="isNumberKey($event, day)"  required  v-model="dayAndTime[day].fromH" :id="day+'-fromH'"><span class="ml-2 mr-2">:</span><input style="width: 60px;" type="text" placeholder="XX" class="d-inline" maxlength="2" @keyup="isNumberKey($event, day);" required v-model="dayAndTime[day].fromM" :id="day+'-fromM'">
                                <span v-if="renderComponent" class="ml-3" @click="changeMeridiem(day, 'from')">@{{dayAndTime[day].fromMeridiem}}</span>
                            </div>
                            <div class="text-center pt-2 mr-5">to</div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <input style="width: 60px;" type="text" placeholder="XX" class="d-inline" maxlength="2" @keyup="isNumberKey($event, day)" required v-model="dayAndTime[day].toH" :id="day+'-toH'">
                                <span class="ml-2 mr-2">:</span>
                                <input style="width: 60px;" type="text" placeholder="XX" class="d-inline" maxlength="2" @keyup="isNumberKey($event, day)" required v-model="dayAndTime[day].toM" :id="day+'-toM'">
                                <span v-if="renderComponent" class="ml-3" @click="changeMeridiem(day, 'to')">@{{dayAndTime[day].toMeridiem}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 mb-5">
                    <div class="col-6 text-right">
                        <button type="button" class="btn outline-md-cyan pl-5 pr-5" @click="goBack">Cancel</button>
                    </div>
                    <div class="col-6 text-left">
                        <button class="btn btn-md-cyan pl-5 pr-5" @click="changeSection">Next</button>
                    </div>
                </div>
            </section>
            <section v-else-if="section == 'third'">
                <div class="row">
                    <div class="col-12">
                        <input type="text" placeholder="Company Name (if none, enter your own name)">
                    </div>
                    <div class="col-12">
                        <input type="text" placeholder="Contact Email">
                    </div>
                    <div class="col-12 row m-0 p-0">
                        <div class="col-6">
                        <input type="text" placeholder="Contact Name">
                        </div>
                        <div class="col-6">
                            <input type="text" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-12 row m-0 p-0 mb-4">
                        <div class="col-6">
                        </div>
                        <div class="col-6 row">
                            <div class="col-6"></div>
                            <div class="col-6 d-flex call-text">
                                <input type="checkbox" class="mr-2 ml-4"> <span style="font-size:14px;">Call Me</span>
                                <input type="checkbox" class="mr-2 ml-4"> <span style="font-size:14px;">Text Me</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="text" placeholder="Street Address">
                    </div>
                    <div class="col-12 row p-0 m-0">
                        <div class="col-8">
                            <input type="text" placeholder="City">
                        </div>
                        <div class="col-2">
                            <select name="item">
                                <option value="CO">CO</option>
                                <option value="CO">CO</option>
                                <option value="CO">CO</option>
                                <option value="CO">CO</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <input type="text" placeholder="Zip">
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 mb-5">
                    <div class="col-6 text-right">
                        <button type="button" class="btn outline-md-cyan pl-5 pr-5">Cancel</button>
                    </div>
                    <div class="col-6 text-left">
                        <button class="btn btn-md-cyan pl-5 pr-5" @click="changeSection">Next</button>
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
            availableDays: [],
            dayAndTime: {}
        },
        methods: {
            changeSection(){
                window.scrollTo(0,0);
                if (this.section == 'first') {
                    this.section = 'second';
                } else if (this.section == 'second') {
                    this.section = 'third';
                }
            },

            goBack(){
                window.scrollTo(0,0);
                if (this.section == 'second') {
                    this.section = 'first';
                } else if (this.section == 'third') {
                    this.section = 'second';
                }
            },

            selectDay(day){
                if(this.availableDays.includes(day)){
                    this.availableDays = this.availableDays.filter(item => item !== day);
                    delete this.dayAndTime.day;
                } else {
                    this.availableDays.push(day);
                    this.dayAndTime[day] = {
                        fromH:'',
                        fromM:'',
                        fromMeridiem: 'AM',
                        toH:'',
                        toM:'',
                        toMeridiem: 'AM'
                    }
                }
                console.log(this.dayAndTime);
            },

            changeMeridiem(day, param){
                if(param == 'to'){
                    this.dayAndTime[day].toMeridiem == "AM" ? this.dayAndTime[day].toMeridiem = "PM": this.dayAndTime[day].toMeridiem = "AM";
                } else {
                    this.dayAndTime[day].fromMeridiem == "AM" ? this.dayAndTime[day].fromMeridiem = "PM": this.dayAndTime[day].fromMeridiem = "AM";
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

            isNumberKey(evt, day){
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if ((charCode >= 48 && charCode <= 57) || (charCode >= 97 && charCode <= 105)){
                    if (parseInt(this.dayAndTime[day].fromH) > 12) {
                        document.getElementById(day+'-fromH').value = 12;
                        this.dayAndTime[day].fromH = '12';
                    }
                    if (parseInt(this.dayAndTime[day].toH) > 12) {
                        document.getElementById(day+'-toH').value = 12;
                        this.dayAndTime[day].toH = '12';
                    }
                    if (parseInt(this.dayAndTime[day].fromM) > 59) {
                        document.getElementById(day+'-fromM').value = 59;
                        this.dayAndTime[day].fromM = '59';
                    }
                    if (parseInt(this.dayAndTime[day].toM) > 59) {
                        document.getElementById(day+'-toM').value = 59;
                        this.dayAndTime[day].toM = '59';
                    }
                    console.log(this.dayAndTime[day]);
                    return true;
                } else {
                    evt.preventDefault();
                }
            },
        },
        mounted() {
            console.log("here");
        },
    });
</script>
@endsection
