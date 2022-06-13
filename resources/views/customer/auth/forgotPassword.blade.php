@extends('layouts.website')

@section('content')


<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            </div>
            <div class="col-md-12">

                <h2>Forgot Password</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Forgot Password</li>
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
                    <h3>Please enter your email address</h3>
                </div>

                <!-- Form -->
                <form method="POST" id="login-form" action="{{ route('sendPassResetLink') }}">
                        @csrf
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    <div class="input-with-icon-left">
                        
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input id="email" type="email" class="input-text with-border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus  placeholder="Email Address" required/>
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        
                    </div>
                <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Send password reset email <i class="icon-material-outline-arrow-right-alt"></i></button>
                </form>



            </div>

        </div>
    </div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->


@endsection
