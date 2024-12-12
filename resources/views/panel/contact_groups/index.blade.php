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
                                <h4 class="card-title mb-0">Contact Groups</h4>
                                <a href="{{ route('panel.contact-groups.create') }}" class="btn btn-primary">Create Contact
                                    Group</a>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-11 mt-2 mx-2">
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
                                        <div class="table-responsive">
                                            <table class="table align-middle mb-0" id="messages">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Namr</th>
                                                        <th scope="col">Count Contacts</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($contactGroups as $group)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $group->name }}</td>
                                                            <td>{{ $group->contacts->count() }}</td>
                                                            <td class="d-flex gap-2">
                                                                <a href="{{ route('panel.contacts.index', ['cg' => $group->id]) }}"
                                                                    class="btn btn-info">View</a>

                                                                <a href="{{ route('panel.contact-groups.edit', $group->id) }}"
                                                                    class="btn btn-primary">Edit</a>
                                                                <form
                                                                    action="{{ route('panel.contact-groups.destroy', $group->id) }}"
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
                                        {{ $contactGroups->links('vendor.pagination.custom') }}

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
@endsection
