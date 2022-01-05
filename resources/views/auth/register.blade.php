@extends('layouts.appa')

@section('register')
<div class="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">    
                <div class="register-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input id="name" class="form-control @error('name') is-invalid @enderror" name="name" type="text" placeholder="First Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label>E-mail</label>
                                <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" type="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label>Password</label>
                                <input id="password" class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label>Retype Password</label>
                                <input id="password_confirm" class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>

                            <div class="col-md-12">
                                <button class="btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
