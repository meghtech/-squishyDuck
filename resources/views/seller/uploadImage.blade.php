@extends('layouts.seller')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<style>
    .card-header i {
        margin-right: 5px;
    }
</style>
@endpush
@section('content')


<div id="app" style="margin-left: 5rem" class="div">

    <input type="hidden" value="{{ $id }}" id="getId">
    <h3 class="mt-5 text-center">Upload 1-10 Images</h3>
    {{-- <form action="{{ route('') }}" --}}
    <div class="row p-0 m-0">
        <div class="col-md-2 col-sm-12">
            <div class="ad-image text-center" id="viewImage_0">
                <img src="{{ asset('content/images/duck.svg') }}"/>
                <input id="files" type='file' style="display:none" @change="showImage" accept="image/png, image/gif, image/jpeg, image/jpg" multiple/>
            </div>
            <img id="displayImage_0" class="ad-image d-none"/>
            <label for="files" class="btn btn-success uploadImage mt-4 text-center" ><i class="fa fa-long-arrow-up uploadIcon"></i>Upload Image</label>
        </div>
        <div class="col-md-1 col-sm-12 mr-5 viewImages">
            <div class="ad-image text-center" id="viewImage_1"></div>
            <img id="displayImage_1" class="ad-image d-none"/>
        </div>
        <div class="col-md-1 col-sm-12 mr-5 viewImages">
            <div class="ad-image text-center" id="viewImage_2"></div>
            <img id="displayImage_2" class="ad-image d-none"/>
        </div>
        <div class="col-md-1 col-sm-12 mr-5 viewImages">
            <div class="ad-image text-center" id="viewImage_3"></div>
            <img id="displayImage_3" class="ad-image d-none"/>
        </div>
        <div class="col-md-1 col-sm-12 mr-5 viewImages">
            <div class="ad-image text-center" id="viewImage_4"></div>
            <img id="displayImage_4" class="ad-image d-none"/>
        </div>

    </div>
    <div class="row p-0 m-0 ml-5" style="margin-top: -6% !important; margin-left:12rem !important;">
        <div class="col-md-2 col-sm-12"></div>
        <div class="col-md-1 col-sm-12 mr-5 viewImages">
            <div class="ad-image text-center" id="viewImage_5"></div>
            <img id="displayImage_5" class="ad-image d-none"/>
        </div>
        <div class="col-md-1 col-sm-12 mr-5 viewImages">
            <div class="ad-image text-center" id="viewImage_6"></div>
            <img id="displayImage_6" class="ad-image d-none"/>
        </div>
        <div class="col-md-1 col-sm-12 mr-5 viewImages">
            <div class="ad-image text-center" id="viewImage_7"></div>
            <img id="displayImage_7" class="ad-image d-none"/>
        </div>
        <div class="col-md-1 col-sm-12 mr-5 viewImages">
            <div class="ad-image text-center" id="viewImage_8"></div>
            <img id="displayImage_8" class="ad-image d-none"/>
        </div>
        <div class="col-md-1 col-sm-12 mr-5 viewImages">
            <div class="ad-image text-center" id="viewImage_9"></div>
            <img id="displayImage_9" class="ad-image d-none"/>
        </div>
    </div>
<input type="hidden" name="gigId" id="gigId" value={{$id}}>
    <div class="row pt-5 mt-5 mb-5">
        <div class="col-md-6 col-sm-12 text-right">
            <button type="button" class="btn outline-md-cyan pl-5 pr-5" @click="goBack">Cancel</button>
        </div>
        <div class="col-md-6 col-sm-12 text-left">
            <button type="submit" class="btn btn-md-cyan pl-5 pr-5" @click="postData" onclick="showProgress()">Submit</button>
        </div>
    </div>
    <div class="progress" style="height: 30px; display:none" id="progressBar1">
                    <div class="progress-bar progress-bar-striped progress-bar-animated text-left pl-3" style="width:100%">Submitting</div>
                </div>

</div>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    function showProgress(){
    document.getElementById("progressBar1").style.display="block";
}
</script>
<script>
    new Vue({
        el: '#app',
        data: {
            renderComponent: true,
            gigId:null,
            images: [],
            thumbnail: '',
        },
        methods: {
           
            forceRerender() {
                // Remove component from the DOM
                this.renderComponent = false;
                this.$nextTick(() => {
                    // Add the component back in
                    this.renderComponent = true;
                });
            },


            

            
            async showImage() {
                imgLen = this.images.length;
                var src = document.getElementById("files").files;
                for (let index = 0; index < src.length; index++) {
                    var fr = new FileReader();
                    await fr.readAsDataURL(src[index]);
                    let imgStr = ''
                    fr.onload = await (function (index, event) {
                        var displayImage = document.getElementById('displayImage_' + (index+imgLen));
                        displayImage.src = event.target.result;
                        imgStr = event.target.result;
                        displayImage.classList.remove('d-none');
                        if (index == '0') {
                            this.thumbnail = event.target.result;
                        }
                    }).bind(event, index);

                    await setTimeout(() => {
                        this.images[index+imgLen] = imgStr;
                    }, 200);
                    
                    document.getElementById('viewImage_' + (index+imgLen)).classList.add('d-none');
                    if(imgLen+index ===9){
                        break;
                    }
                }
                // console.log(this.images);
            },
            postData() {
                // alert(8);
                let formData = new FormData();
                formData.append('id', document.getElementById('gigId').value);
                
                if (this.images.length > 0) {
                    console.log(this.images.length);
                    this.images.forEach((value, key) => {
                        formData.append('image_' + key, value);
                    });
                    formData.append('photoLength', this.images.length);
                    formData.append('id', this.gigId);
                }
                // console.log(...formData);
                

                axios.post('/seller/add-historyImg', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                       
                    }
                }).then((response) => {
                    console.log(response.data);
                    if(response.data==="success"){
                        window.location.replace('/seller/history')
                    }
                });
            },

            addSrc() {
                document.getElementById('displayImage_11').src = this.thumbnail;
            },

        },
        mounted() {
            // console.log("Mounted");
           var value=document.getElementById("getId").value;
           this.gigId=value;
           
            
        },
    });
</script>

@endsection
@push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@endpush