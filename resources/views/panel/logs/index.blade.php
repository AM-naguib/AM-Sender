@extends('panel.layouts.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Create Device</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-nowrap table-striped-columns mb-0">
                                        <thead class="table-light">
                                            <tr>

                                                <th scope="col">#</th>
                                                <th scope="col">From</th>
                                                <th scope="col">To</th>
                                                <th scope="col">Device Name</th>
                                                <th scope="col">Created At</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($logs as $log)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $log->from }}</td>
                                                <td>{{ $log->to }}</td>
                                                <td>{{ $log->device }}</td>
                                                <td>{{ $log->created_at->diffForHumans() ?? ""}} {{ ' - ' . $log->created_at->format('M-d-Y')}} </td>

                                            </tr>
                                            @empty

                                            @endforelse


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->




            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
@endsection
