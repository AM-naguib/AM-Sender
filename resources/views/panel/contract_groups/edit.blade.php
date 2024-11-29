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
                                <h4 class="card-title mb-0">Edit Contract Group</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form action="{{ route('panel.contract-groups.update', $contractGroup) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-md-4 col-12 mx-auto">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Template Name</label>
                                                <input name="name" id="name" class="form-control"
                                                    placeholder="Template Name" value="{{ $contractGroup->name }}" required>
                                            </div>

                                            <button type="submit" class="form-control bg-primary text-white">Edit</button>

                                        </div>
                                    </form>
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
