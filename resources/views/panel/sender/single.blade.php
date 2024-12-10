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
                                <h4 class="card-title mb-0">Single Sender</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form action="{{ route('panel.sender.send') }}" method="POST">
                                        @csrf
                                        <div class="col-md-4 col-12 mx-auto">
                                            @include('panel.validation-show.index')


                                            <div class="mb-3">
                                                <label for="" class="form-label">Select Device</label>
                                                <select name="device_id" id="" class="form-select">
                                                    @forelse ($devices as $device)
                                                        <option @selected($device->id == old('device_id')) value="{{ $device->id }}">
                                                            {{ $device->name }}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="receiver" class="form-label">Receiver</label>
                                                <input type="text" class="form-control" name="receivers" id="receiver"
                                                    placeholder="Enter receiver Without +, ex 20101234567"
                                                    value="{{ old('receivers') }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message" class="form-label">Message</label>
                                                <textarea required type="text" class="form-control" name="message" placeholder="Enter Message">{{ old('message') }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit"
                                                    class="form-control bg-primary text-white" >Send</button>
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

@section('js')
    <script>

    </script>
@endsection
