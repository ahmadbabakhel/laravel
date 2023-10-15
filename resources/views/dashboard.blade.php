@extends('layouts.app')

@section('content')
     
        <!-- Begin page -->
        <div id="wrapper">

            @include('components.user.topbar')

            @include('components.user.sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Customer Dashboard</h4>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-body pb-0">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <span class="text-muted text-uppercase fs-12 fw-bold">Total Orders</span>
                                                <h3 class="mb-0">21</h3>
                                            </div>
                                            <div class="align-self-center flex-shrink-0">
                                                <span class="icon-lg text-success" data-feather="file"></span>
                                            </div>
                                        </div>
                                        <div class="progress my-2" style="height: 12px;">
                                            <div class="progress-bar bg-success " role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><span class="fw-bold text-light" style="padding-top:2px;">60%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-body pb-0">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <span class="text-muted text-uppercase fs-12 fw-bold">Pending Orders</span>
                                                <h3 class="mb-0">7</h3>
                                            </div>
                                            <div class="align-self-center flex-shrink-0">
                                                <span class="icon-lg text-warning" data-feather="file-plus"></span>
                                            </div>
                                        </div>
                                        <div class="progress my-2" style="height: 12px;">
                                            <div class="progress-bar bg-warning " role="progressbar" style="width: 20%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><span class="fw-bold text-light" style="padding-top:2px;">20%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-body pb-0">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <span class="text-muted text-uppercase fs-12 fw-bold">Cancelled Orders</span>
                                                <h3 class="mb-0">5</h3>
                                            </div>
                                            <div class="align-self-center flex-shrink-0">
                                                <span class="icon-lg text-danger" data-feather="file-minus"></span>
                                            </div>
                                        </div>
                                        <div class="progress my-2" style="height: 12px;">
                                            <div class="progress-bar bg-danger " role="progressbar" style="width: 10%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><span class="fw-bold text-light" style="padding-top:2px;">10%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-body pb-0">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <span class="text-muted text-uppercase fs-12 fw-bold">Invoices</span>
                                                <h3 class="mb-0">$851</h3>
                                            </div>
                                            <div class="align-self-center flex-shrink-0">
                                                <span class="icon-lg text-primary" data-feather="file-text"></span>
                                            </div>
                                        </div>
                                        <div class="progress my-2" style="height: 12px;">
                                            <div class="progress-bar bg-primary " role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="fw-bold text-light" style="padding-top:2px;">80%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="uil uil-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="uil uil-refresh me-2"></i>Refresh
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="card-title mt-0 mb-0 header-title">Payments</h5>
                                        <div id="chartdiv"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-xl-8">
                                @include('components.user.recent-order')
                            </div> <!-- end col-->
                        </div>
                        <!-- end page title --> 
                        
                        <div class="chatbox overflow-hidden">
                            @include('components.user.chatbox')

                            <div class="chat-conversation p-2">

                                <ul class="conversation-list" data-simplebar style="max-height: 220px;">
                                    <li class="text-center">
                                        <span class="badge text-secondary">Today</span>
                                    </li>
                                    <li class="clearfix even">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-2.jpg" alt="male">
                                            <small>10:00</small>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <div class="fw-medium">Johnny</div>
                                                <p>Hello!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <div class="fw-medium">Nik P</div>
                                                <p>Hi, How are you? What about our next meeting?</p>
                                            </div>
                                        </div>
                                    </li>    
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-6.jpg" alt="male">
                                            <small>10:01</small>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <div class="fw-medium">Johnny</div>
                                                <p>Yeah everything is fine</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <div class="fw-medium">Nik P</div>
                                                <p>Wow that's great...</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <div class="position-relative chat-input">
                                    <input type="text" class="form-control" placeholder="Type your message...">
                                    <div class="chat-link">
                                        <a href="#" class="p-1"><i class="uil-navigator"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> <!-- container -->

                </div> <!-- content -->

               @include('components.user.footer')
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

 
@endsection