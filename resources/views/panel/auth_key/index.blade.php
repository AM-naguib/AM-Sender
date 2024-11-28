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
                                <h4 class="card-title mb-0">Auth API Key</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                 

                                    <div class="col-md-4 col-12 mx-auto">

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>

                                    <form action="{{ route('panel.auth_key.update') }}" method="POST">
                                        @csrf
                                        <div class="col-md-4 col-12 mx-auto">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Auth Key</label>
                                                <input type="text" name="auth_key" class="form-control" style="background-color: rgb(230 230 230) !important;"
                                                    required readonly value="{{ $user->auth_key }}">
                                            </div>

                                            <div class="mb-3">
                                                <button type="submit"
                                                    class="form-control bg-primary text-white">Update Auth Key</button>
                                            </div>
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
