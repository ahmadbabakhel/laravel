@extends('layouts.app')

@section('content')
    <!-- Begin page -->
    <div id="wrapper">

         @include('components.user.topbar')

         @include('components.user.sidebar')
         <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row mt-3 d-flex justify-content-center">
                        <div class="col-xl-12">
                            <div class="card border-primary" style="border-radius: 15px; background:none;">
                                <div class="card-body">
                                    <h5 class="header-title mb-1 mt-0">Order Form</h5>

                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active text-uppercase">
                                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                                <span class="d-none d-sm-block">Vector Order</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link text-uppercase">
                                                <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                                <span class="d-none d-sm-block">Embroidery Order</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#messages" data-bs-toggle="tab" aria-expanded="false" class="nav-link text-danger text-uppercase">
                                                <span class="d-block d-sm-none"><i class="uil-envelope"></i></span>
                                                <span class="d-none d-sm-block">Vector + Embroidery Combo</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content p-2 text-muted vector">
                                        @include('components.user.vector-order-frm')
                                        <div class="tab-pane embroidry" id="profile" >
                                           @include('components.user.embroidry-order-frm')
                                        </div>

                                        <div class="tab-pane combo" id="messages">
                                            @include('components.user.combo-order-frm')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Shreyu</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Starter</li> -->
                                        <!-- <li><a href="">Olymp</a></li> -->
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 

                    <div class="row mt-3">
                        {{-- @include('orders.latest-order') --}}
                    </div>
                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
             
            <!-- end Footer -->

        </div>
    