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

                <h2>Reset Password</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Reset Password</li>
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
                    <h3>Reset your password</h3>
                </div>

                <!-- Form -->
                <form method="POST" id="login-form" action="{{ route('resetPassword') }}">
                        @csrf
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                    <div class="input-with-icon-left">
                        
                        <i class="icon-material-outline-lock"></i>
                        <input id="email" type="password" class="input-text with-border @error('email') is-invalid @enderror" name="password" autofocus  placeholder="Enter new password" required/>
                        
                    </div>
                    <div class="input-with-icon-left">
                        
                        <i class="icon-material-outline-lock"></i>
                        <input id="email-confirm" type="password" class="input-text with-border @error('email') is-invalid @enderror" name="password_confirmation" autofocus  placeholder="Confirm new password" required/>
                        
                    </div>
                    <input type="hidden" name="token" value={{$token}}>
                <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Reset passwird <i class="icon-material-outline-arrow-right-alt"></i></button>
                </form>



            </div>

        </div>
    </div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->


@endsection
