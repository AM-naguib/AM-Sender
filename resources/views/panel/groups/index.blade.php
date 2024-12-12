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



                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Groups</h4>
                                <div class="btns">


                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Scrap Groups
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-12 mt-2 mx-2">
                                    <form action="{{route("panel.contact-groups.index")}}" method="get" class="d-flex align-items-center gap-2">
                                        <input type="text" value="{{request()->name ?? ""}}" name="name" id="name" class="form-control" placeholder="Search By Name">
                                        <button class="btn btn-primary">Search</button>
                                        <a href="{{route("panel.contact-groups.index")}}" class="btn btn-danger">Clear</a>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        @include('panel.validation-show.index')

                                        <div class="table-responsive">
                                            <table class="table align-middle mb-0" id="messages">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Device</th>
                                                        <th scope="col">Last Update</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($groups as $group)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $group->name }}</td>
                                                            <td>{{ $group->device->name }}</td>
                                                            <td>{{ $group->updated_at->diffForHumans() }}</td>
                                                            <td class="d-flex gap-2">
                                                                <a href="{{ route('panel.contacts.index', ['cg' => $group->contact_group_id]) }}" class="btn btn-info">View</a>

                                                                <form action="{{ route('panel.groups.update', $group->id) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <button class="btn btn-primary">Update</button>
                                                                </form>

                                                                <form
                                                                    action="{{ route('panel.groups.destroy', $group->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="btn btn-danger">Delete</button>
                                                                </form>

                                                            </td>

                                                        </tr>

                                                    @empty
                                                        <tr>
                                                            <td colspan="6" class="text-center">No Messages</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>

                                            </table>
                                            <!-- end table -->
                                        </div>
                                        <!-- end table responsive -->
                                    </div>

                                </div>
                                <div class="row my-3">
                                    <div class="col-12">
                                        {{ $groups->links('vendor.pagination.custom') }}

                                    </div>
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Scrap Groups From Device</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('panel.groups.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="device" class="col-form-label">Select Device</label>
                            <select name="device" class="form-select" id="">
                                @forelse ($devices as $device)
                                    <option value="{{ $device->id }}">{{ $device->name }}</option>

                                @empty
                                @endforelse
                            </select>
                        </div>
                        <button type="submit" class="form-control bg-primary text-white mt-2">Start Scrap</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
