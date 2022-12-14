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
                            <div class="card-title">Forgot Password</div>
                            <div class="card-body">
                                <form action="{{route('forgot_password.send')}}" method="post">
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
                                    <div class="my-5">
                                        <button type="submit" class="btn btn-green">Request Password</button>
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
