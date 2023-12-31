@extends('layouts.app')
<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-6 p-4">
                                <div class="mx-auto">
                                    <a href="index">
                                        <img src="assets/images/logo-dark.png" alt="" height="24" />
                                    </a>
                                </div>

                                <h6 class="h5 mb-0 mt-3">Welcome back!</h6>
                                <p class="text-muted mt-1 mb-4">
                                    Enter your email address and password to access admin panel.
                                </p>
                                @if (session('status'))
                                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                                    {{ session('status') }}
                                </div>
                            @endif
                

                                <form action="{{ route('login') }}" class="authentication-form" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="icon-dual" data-feather="mail"></i>
                                            </span>
                                            <input type="email" class="form-control" id="email" 
                                            name="email"
                                            placeholder="hello@coderthemes.com">
                                        </div>
                                        @error('email')
                                             <div class="text-danger alert">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <a href="forgot-password" class="float-end text-muted text-unline-dashed ms-1">Forgot your password?</a>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="icon-dual" data-feather="lock"></i>
                                            </span>
                                            <input type="password" class="form-control" name="password"
                                             id="password" placeholder="Enter your password">
                                        </div>
                                        @error('password')
                                             <div class="text-danger alert">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input"
                                            name="rember-me"
                                             id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="mb-3 text-center d-grid">
                                        <button class="btn btn-primary" type="submit">Log In</button>
                                    </div>
                                </form>
                                <div class="py-3 text-center"><span class="fs-16 fw-bold">OR</span></div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a href="auth/google" class="btn btn-white mb-2 mb-sm-0"><i class='uil uil-google icon-google me-2'></i>With Google</a>
                                        <a href="auth/faceboof" class="btn btn-white mb-2 mb-sm-0"><i class='uil uil-facebook me-2 icon-fb'></i>With Facebook</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-md-inline-block">
                                <div class="auth-page-sidebar">
                                    <div class="overlay"></div>
                                    <div class="auth-user-testimonial">
                                        <p class="fs-24 fw-bold text-white mb-1">I simply love it!</p>
                                        <p class="lead">"It's a elegent templete. I love it very much!"</p>
                                        <p>- Admin User</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="register" class="text-primary fw-bold ms-1">Sign Up</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
