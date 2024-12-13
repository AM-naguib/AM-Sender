@extends("panel.layouts.app")
@section("content")
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Analytics</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Analytics</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-column h-100">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="fw-medium text-muted mb-0">Devices</p>
                                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="{{$devices}}">0</span></h2>
                                                <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                                    </span>
                                                </p>
                                            </div>
                                            <div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-primary rounded-circle fs-2">
                                                        <i data-feather="tablet"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="fw-medium text-muted mb-0">Messages</p>
                                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="{{$messages}}">0</span></h2>
                                                <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                                    </span>
                                                </p>
                                            </div>
                                            <div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-danger rounded-circle fs-2">
                                                        <i data-feather="activity"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="fw-medium text-muted mb-0">Contacts</p>
                                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="{{$contacts}}">0</span></h2>
                                                <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                                    </span>
                                                </p>
                                            </div>
                                            <div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-danger rounded-circle fs-2">
                                                        <i data-feather="user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="fw-medium text-muted mb-0">Message Template</p>
                                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="{{$message_templates}}">0</span></h2>
                                                <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                                    </span>
                                                </p>
                                            </div>
                                            <div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-danger rounded-circle fs-2">
                                                        <i data-feather="message-square"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row-->

                    </div>
                </div> <!-- end col-->

            </div> <!-- end row-->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © AM-Naguib.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by AM-Naguib
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->
@endsection
