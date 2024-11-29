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
                                <h4 class="card-title mb-0">Contracts</h4>
                                <div class="btns">

                                    <a href="{{ route('panel.contracts.create') }}" class="btn btn-primary">Create
                                        Contract</a>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Import
                                        Contracts</button>
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
                                                        <th scope="col">name</th>
                                                        <th scope="col">phone</th>
                                                        <th scope="col">Group</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($contracts as $contract)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $contract->name }}</td>
                                                            <td>{{ $contract->phone }}</td>
                                                            <td>{{ $contract->contractGroup->name ?? '' }}</td>
                                                            <td class="d-flex gap-2">
                                                                <a href="{{ route('panel.contracts.edit', $contract->id) }}"
                                                                    class="btn btn-primary">Edit</a>
                                                                <form
                                                                    action="{{ route('panel.contracts.destroy', $contract->id) }}"
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
                                        {{ $contracts->links('vendor.pagination.custom') }}

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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Impor Contracts From File</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route("panel.contracts.import") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="file" class="form-label">Select File</label>
                            <input type="file" name="file" accept=".xlsx,.xls,.csv" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="group" class="form-label">Select Contract Group</label>
                            <select name="contract_group_id" id="" class="form-select">
                                <option value=""></option>
                                @foreach ($contractGroups as $contractGroup)
                                    <option value="{{ $contractGroup->id }}">{{ $contractGroup->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <button type="submit" class="form-control bg-primary text-white">Import</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
