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
                                    <a href="index.html">
                                        <img src="assets/images/logo-dark.png" alt="" height="24" />
                                    </a>
                                </div>

                                <h6 class="h5 mb-0 mt-3">Create your account</h6>
                                <p class="text-muted mt-1 mb-4">Create a free account and start using Shreyu</p>

                                <form action="{{ route('register') }}" method="post" class="authentication-form">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="icon-dual" data-feather="user"></i>
                                            </span>
                                            <input type="text" class="form-control" id="name"
                                                name="name"
                                                placeholder="Your full name">
                                            </div>
                                            @error('name')
                                             <div class="text-danger alert">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                    </div>

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
                                             <div class="text-danger">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="icon-dual" data-feather="lock"></i>
                                            </span>
                                            <input type="password" class="form-control" id="password"
                                                name="password"
                                                placeholder="Enter your password">
                                            </div>
                                            @error('password')
                                             <div class="text-danger">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup"
                                                checked>
                                            <label class="form-check-label" for="checkbox-signup">
                                                I accept <a href="javascript: void(0);">Terms and Conditions</a>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-3 text-center d-grid">
                                        <button class="btn btn-primary" type="submit">Sign Up</button>
                                    </div>
                                </form>

                            </div>
                            <div class="col-lg-6 d-none d-lg-inline-block">
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
                        <p class="text-muted">Already have account? <a href="{{ 'login' }}"
                                class="text-primary fw-bold ms-1">Login</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
