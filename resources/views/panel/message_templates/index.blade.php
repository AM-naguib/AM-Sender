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
                                <h4 class="card-title mb-0">Message Templates</h4>
                                <a href="{{ route('panel.massage-templates.create') }}" class="btn btn-primary">Create Message Template</a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table align-middle mb-0" id="messages">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">From</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($templates as $template)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $template->name }}</td>
                                                        <td class="d-flex gap-2">
                                                            <a href="{{ route('panel.massage-templates.edit', $template->id) }}" class="btn btn-primary">Edit</a>
                                                            <form action="{{ route('panel.massage-templates.destroy', $template->id) }}" method="post">
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
                                        {{ $templates->links('vendor.pagination.custom') }}

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

