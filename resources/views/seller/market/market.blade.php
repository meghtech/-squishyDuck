@extends('layouts.seller')

@push('css')
@endpush

@section('content')

	<!-- Dashboard Content
	================================================== -->
	<div class="container-fluid">
		<div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 bg-light">
                <div class="col-12 pt-5">
                    <p>Price</p>
                    <select name="sortByPrice" id="sortByPrice">
                        <option value="0" selected>Lowest to Highest</option>
                        <option value="1">Highest to Lowest</option>
                    </select>
                </div>
                <div class="col-12 pt-2">
                    <p>Rating</p>
                    <div class="stars">
                        <form>
                            <input class="star star-5" id="star-5" type="radio" name="star" />
                            <label class="star star-5" for="star-5"></label>

                            <input class="star star-4" id="star-4" type="radio" name="star" />
                            <label class="star star-4" for="star-4"></label>

                            <input class="star star-3" id="star-3" type="radio" name="star" />
                            <label class="star star-3" for="star-3"></label>

                            <input class="star star-2" id="star-2" type="radio" name="star" />
                            <label class="star star-2" for="star-2"></label>

                            <input class="star star-1" id="star-1" type="radio" name="star" />
                            <label class="star star-1" for="star-1"></label>
                        </form>
                        <button type="button" class="btn btn-dark btn-lg ml-10">Apply</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 bg-white">
                    <div class="col-12 pt-5 pb-4">
                        <form>
                            <input type="text">
                        </form>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <p class="float-left">Buy Results</p>
                                <p class="float-right">Page 1 of 10</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-4 border rounded">
                                <a href="#" class="text-decoration-none">
                                    <img class="d-flex text-center" src="https://i.picsum.photos/id/223/200/200.jpg?hmac=CNNyWbBcEAJ7TPkTmEEwdGrLFEYkxpTeVwJ7U0LB30Y" alt="">
                                    <h4 class="pt-4">Office chair for sale</h4>
                                    <h3 class="pt-4 text-success">$123.00</h3>
                                    <a class="float-left" href="">
                                        <img class="bg-primary border rounded-circle float-left mr-3" alt="user" height="30px" width="30px">
                                        <h5 class="float-right text-primary">John Doe</h5>
                                    </a>
                                    <a class="float-right text-dark" href="#">More Details</a>
                                </a>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 border rounded">
                                <a href="#" class="text-decoration-none">
                                    <img class="d-flex text-center" src="https://i.picsum.photos/id/223/200/200.jpg?hmac=CNNyWbBcEAJ7TPkTmEEwdGrLFEYkxpTeVwJ7U0LB30Y" alt="">
                                    <h4 class="pt-4">Office chair for sale</h4>
                                    <h3 class="pt-4 text-success">$123.00</h3>
                                    <a class="float-left" href="">
                                        <img class="bg-primary border rounded-circle float-left mr-3" alt="user" height="30px" width="30px">
                                        <h5 class="float-right text-primary">John Doe</h5>
                                    </a>
                                    <a class="float-right text-dark" href="#">More Details</a>
                                </a>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 border rounded">
                                <a href="#" class="text-decoration-none">
                                    <img class="d-flex text-center" src="https://i.picsum.photos/id/223/200/200.jpg?hmac=CNNyWbBcEAJ7TPkTmEEwdGrLFEYkxpTeVwJ7U0LB30Y" alt="">
                                    <h4 class="pt-4">Office chair for sale</h4>
                                    <h3 class="pt-4 text-success">$123.00</h3>
                                    <a class="float-left" href="">
                                        <img class="bg-primary border rounded-circle float-left mr-3" alt="user" height="30px" width="30px">
                                        <h5 class="float-right text-primary">John Doe</h5>
                                    </a>
                                    <a class="float-right text-dark" href="#">More Details</a>
                                </a>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 border rounded">
                                <a href="#" class="text-decoration-none">
                                    <img class="d-flex text-center" src="https://i.picsum.photos/id/223/200/200.jpg?hmac=CNNyWbBcEAJ7TPkTmEEwdGrLFEYkxpTeVwJ7U0LB30Y" alt="">
                                    <h4 class="pt-4">Office chair for sale</h4>
                                    <h3 class="pt-4 text-success">$123.00</h3>
                                    <a class="float-left" href="">
                                        <img class="bg-primary border rounded-circle float-left mr-3" alt="user" height="30px" width="30px">
                                        <h5 class="float-right text-primary">John Doe</h5>
                                    </a>
                                    <a class="float-right text-dark" href="#">More Details</a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
	</div>
	<!-- Dashboard Content / End -->





@endsection