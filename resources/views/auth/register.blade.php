@extends('layouts.website')
@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Register</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Register</li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
    <div class="row">
        <div class="col-xl-5 offset-xl-3">

            <div class="login-register-page">
                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3 style="font-size: 26px;">Let's create your account!</h3>
                    <span>Already have an account? <a href="pages-login.html">Log In!</a></span>
                </div>

                <!-- Account Type -->
                <div class="account-type">
                    <div>
                        <input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" value="freelancer" checked/>
                        <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
                    </div>

                    <div>
                        <input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio" value="buyer" />
                        <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> As a Buyer</label>
                    </div>
                </div>
                    
                <!-- Form -->
                <form method="Post" action="{{ route("user.register")  }}" id="register-account-form">
                    @csrf
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Name " />

                                @error('email')
                                    <span class="invalid-feedback" style="color: red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border  @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" autocomplete="user_name" placeholder="Username " />

                                @error('user_name')
                                    <span class="invalid-feedback" style="color: red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email Address" />

                                @error('email')
                                    <span class="invalid-feedback" style="color: red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <input type="hidden" name="role" id="role" value="">

                    <div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" />

                                @error('password')
                                    <span class="invalid-feedback" style="color: red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input id="password-confirm" type="password" name="password_confirmation" class="input-text with-border" placeholder="Repeat Password" />
                    </div>


                <!-- Button -->
                <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Register <i class="icon-material-outline-arrow-right-alt"></i></button>
                </form>
               

            </div>

        </div>
    </div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->








    <section class="page-content section-padding">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <!-- Example DataTables Card-->
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card order-section">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-12">
                                    <div class="p-section-title text-center">
                                        <h4>Create A new Account </h4>
                                    </div>
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input value="{{ old("name")  }}" name="name" class="form-control" placeholder="Full name" type="text">
                                        </div> <!-- form-group// -->
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                            </div>
                                            <input value="{{ old("email")  }}" name="email" class="form-control" placeholder="Email address"
                                                   type="email">
                                        </div> <!-- form-group// -->
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                            </div>

                                            <input value="{{ old("phone_number")  }}" name="phone_number" class="form-control" placeholder="Phone number"
                                                   type="text">
                                        </div> <!-- form-group// -->

                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                            </div>
                                            <input value="{{ old("password")  }}" name="password" class="form-control" placeholder="Create password"
                                                   type="password">
                                        </div> <!-- form-group// -->

                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                            </div>
                                            <input value="{{ old("password_confirmation")  }}" name="password_confirmation" class="form-control"
                                                   placeholder="Confirm password" type="password">
                                        </div> <!-- form-group// -->

                                        <div class="form-group">
                                            <a href="{{ route("login")  }}" type="submit"
                                               class="btn btn-primary btn-block"> Login Account
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-block"> Create Account
                                            </button>
                                        </div> <!-- form-group// -->
                                    </form>
                                </div>

                                <div class="col-lg-4 col-md-8 col-sm-12 col-12">
                                    <div class="page-sidebar">
                                        <div class="sidebar-widget">
                                            <img src="">
                                            <span>Address: Lorem ipsum dolor </span>
                                            <span>Opening Hours: Lorem ipsum dolor </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
    </section>
@endsection

@push('js')
<script>
    $("input[type='radio']").on('click', function(){
        var getValue = $(this).val();

        $('#role').val(getValue);

     
    });
</script>
@endpush



