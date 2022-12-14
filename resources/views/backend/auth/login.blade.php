@extends('backend.master')

@section('content')
    <main class="section-login">
        <section class="section-login--logo">
            <a href="{{route('home')}}">
                <img src="assets/images/logo.png" alt="logo" class="img-fluid" />
            </a>
        </section>

        <section class="section-login--form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title">Sign In</div>
                            <div class="card-body">
                                <form action="{{route('login.store')}}" method="post">
                                    @csrf
                                    <div class="mt-3">
                                        <label for="" class="form-label">Email</label>
                                        <input
                                            type="email"
                                            class="form-control u-box-shadow-1 @error('email') is-invalid @enderror"
                                            name="email"
                                        />
                                        @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="" class="form-label">Password</label>
                                        <input
                                            type="password"
                                            class="form-control u-box-shadow-1 @error('password') is-invalid @enderror "
                                            name="password"
                                        />
                                        @error('password')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-green">Sign In</button>
                                    </div>
                                </form>
                                <div class="links">
                                    <p>
                                        <a href="{{route('register')}}">Need an account?</a>
                                        <a href="{{route('forgot_password')}}">Forgot Password?</a>
                                    </p>
                                </div>
                                <div class="back-button">
                                    <a href="{{route('home')}}">
                                        <i class="bi bi-arrow-left-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
