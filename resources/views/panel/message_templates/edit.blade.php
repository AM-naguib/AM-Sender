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
                                <h4 class="card-title mb-0">Edit Message Template</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form action="{{ route('panel.massage-templates.update', $massage_template) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-md-4 col-12 mx-auto">
                                            @include('panel.validation-show.index')

                                            <div class="mb-3">
                                                <label for="name" class="form-label">Template Name</label>
                                                <input name="name" id="name" class="form-control"
                                                    placeholder="Template Name" value="{{ $massage_template->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message" class="form-label">Message</label>
                                                <textarea name="message" id="message" class="form-control" rows="10"  required>{{ $massage_template->message }}</textarea>
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
