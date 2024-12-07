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
                        <div class="head d-flex mb-3 align-items-center justify-content-between">
                            <h4 class=" " style="font-family: 'Cairo', sans-serif">Devices</h4>
                            <a href="{{ route('panel.devices.create') }}" class="btn btn-primary">Add Device</a>
                        </div>

                        <div class="row">
                            @forelse ($devices as $device)
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="fw-medium text-muted mb-0">{{ $device->name }}</p>
                                                    <p class="fw-medium text-muted mb-0">Phone : {{ $device->phone ?? '' }}
                                                    </p>
                                                    <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                            data-target="{{$device->messages->count()}}">0</span></h2>
                                                    <p class="mb-0 text-muted"><span
                                                            class="badge bg-light {{ $device->status == 'active' ? 'text-success' : 'text-danger' }} mb-0">{{ $device->status }}</span>
                                                    </p>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-info dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('panel.devices.scan', $device->id) }}">Scan</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('panel.devices.edit', $device->id) }}">Edit
                                                                Name</a></li>
                                                        <li>
                                                            <form action="{{ route('panel.devices.destroy', $device->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="dropdown-item text-danger"
                                                                    href="{{ route('panel.devices.edit', $device->id) }}"
                                                                    type="submit">Delete</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div><!-- end card body -->
                                    </div> <!-- end card-->
                                </div>

                            @empty
                            @endforelse
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


