@extends('backend.master')

@section('content')
    <main class="section-forgot-password">
        <section class="section-forgot-password--logo">
            <a href="{{route('home')}}">
                <img src="{{asset('/')}}assets/images/logo.png" alt="logo" class="img-fluid" />
            </a>
        </section>

        <section class="section-forgot-password--form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title">Given Your New Password</div>
                            <div class="card-body">
                                <form action="{{route('password.change')}}" method="post">
                                    @csrf
                                    <div class="mt-3">
                                        <label for="" class="form-label">New Password</label>
                                        <input type="hidden" name="email" value="{{$user->email}}">
                                        <input
                                            type="password"
                                            class="form-control u-box-shadow-1 @error('password') is-invalid @enderror"
                                            name="password"
                                        />
                                        @error('password')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <label for="" class="form-label">Confirm Password</label>
                                        <input
                                            type="password"
                                            class="form-control u-box-shadow-1 @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation"
                                        />
                                        @error('password_confirmation')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="my-5">
                                        <button type="submit" class="btn btn-green">Change Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
