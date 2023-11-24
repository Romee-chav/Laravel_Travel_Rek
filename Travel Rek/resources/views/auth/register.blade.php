@extends('layouts.auth.app')
@section('title', 'Travel Rek - Registration')
@section('content')
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('img/logo1.jpeg') }}" alt="">
                                    <span class="d-none d-lg-block">Register</span>
                                </a>
                            </div><!-- End Logo -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        @if (Session::has('error'))
                                            <p class="text-danger">{{ Session::get('error') }}</p>
                                        @endif
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>
                                    <form action="{{ route('register') }}" method="post" class="row g-3 needs-validation"
                                        novalidate>
                                        @csrf
                                        @method('post')
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Your Name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ old('name') }}">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Your Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email') }}">
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            {{-- <div class="invalid-feedback">Please enter a valid Email adddress!</div> --}}
                                        </div>
                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Phone Number</label>
                                            <input type="numbers" name="phone" class="form-control"
                                                value="{{ old('phone') }}">
                                            <span class="text-danger">
                                                @error('phone')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            {{-- <div class="invalid-feedback">Please enter a valid Email adddress!</div> --}}
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control">
                                            <span class="text-danger">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox"
                                                    value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">I agree and accept the <a
                                                        href="#">terms and conditions</a></label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" class="btn btn-primary w-100" value="Create Account">
                                            {{-- <button class="btn btn-primary w-100" type="submit">Create Account</button> --}}
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a
                                                    href="{{ route('login') }}">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                &copy; 2023 © All Rights Reserved | <a href="#">Cooked with ❤️ by Psyber Inc</a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main><!-- End #main -->
@endsection
