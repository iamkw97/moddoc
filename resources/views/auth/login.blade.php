@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Login</li>
                </ol>
                <h2>Login</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class=" col-md-12">
            {{-- main content-------------------------------------------------------------------------------------------------------------- --}}
            <section class="background-radial-gradient overflow-hidden">
                <style>
                    .background-radial-gradient {
                        background-color: hsl(182, 40%, 15%);
                        background-image: radial-gradient(650px circle at 0% 0%,
                                hsl(182, 41%, 35%) 15%,
                                hsl(182, 41%, 30%) 35%,
                                hsl(182, 41%, 20%) 75%,
                                hsl(182, 41%, 19%) 80%,
                                transparent 100%),
                            radial-gradient(1250px circle at 100% 100%,
                                hsl(182, 41%, 45%) 15%,
                                hsl(182, 41%, 30%) 35%,
                                hsl(182, 41%, 20%) 75%,
                                hsl(182, 41%, 19%) 80%,
                                transparent 100%);
                    }

                    #radius-shape-1 {
                        height: 220px;
                        width: 220px;
                        top: -60px;
                        left: -130px;
                        background: radial-gradient(#006b5d, #1fcbff);
                        overflow: hidden;
                    }

                    #radius-shape-2 {
                        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                        bottom: -60px;
                        right: -110px;
                        width: 300px;
                        height: 300px;
                        background: radial-gradient(#006b5d, #1fcbff);
                        overflow: hidden;
                    }

                    .bg-glass {
                        background-color: hsla(0, 0%, 100%, 0.9) !important;
                        backdrop-filter: saturate(200%) blur(25px);
                    }
                </style>

                <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                    <div class="row gx-lg-5 align-items-center mb-5">
                        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                Your Doc <br />
                                <span style="color: hsl(192, 81%, 75%)">at your door step</span>
                            </h1>
                            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                                The quickest way to find and echannelling a doctor near you. Get access to 5,500+ specialist
                                doctors in over 260 hospitals to echannel your appointment. 24x7 Supervision. 260+ Prominent
                                Hospitals.
                            </p>
                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                            <div class="card bg-glass opacity-100" style="color: hsl(184, 94%, 25%)">
                                <div class="card-body px-4 py-5 px-md-5">

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0"><b>MedDOC</b> </span>
                                        </div>

                                        <h5 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;">Sign into your account
                                        </h5>

                                        <div class="form-outline mb-2">
                                            <label class="form-label" for="form2Example17">Email address</label>
                                            <div class="">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <div class="">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-block appointment-btn scrollto"
                                                type="submit">Login</button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link small" href="{{ route('password.request') }}"
                                                    style="color: #1fddffa5;">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>


                                        <p class="mb-2 pb-lg-2" style="color: #1fb1ff;">Don't have an account? <a
                                                href="{{ route('register') }}" style="color: #1fcbff;"><b>Register here</b></a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- main content ends-------------------------------------------------------------------------------------------------------------- --}}
        </div>
    </section>
@endsection
