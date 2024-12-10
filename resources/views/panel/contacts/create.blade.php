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
                                <h4 class="card-title mb-0">Create Contact</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-12 mx-auto">

                                        @include('panel.validation-show.index')

                                    </div>
                                    <form action="{{ route('panel.contacts.store') }}" method="POST">
                                        @csrf
                                        <div class="col-md-4 col-12 mx-auto">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input name="name" id="name" class="form-control"
                                                    placeholder="Enter Contact Name" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Phone</label>
                                                <input name="phone" id="name" class="form-control"
                                                    placeholder="Enter Contact Phone" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="contact_group_id" class="form-label">Select Contact
                                                    Group</label>
                                                <select name="contact_group_id" id="contact-group-select" class="form-select">
                                                    <option value=""></option>
                                                    @foreach ($contactGroups as $group)
                                                        <option value="{{ $group->id }}">{{ $group->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <button type="submit"
                                                class="form-control bg-primary text-white">Create</button>


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


@section('js')
    <script>
        $(document).ready(function() {
            new TomSelect("#contact-group-select", {
                create: false,
                sortField: {

                    direction: "asc"
                }
            });
        });
    </script>
@endsection
