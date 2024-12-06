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
                                <h4 class="card-title mb-0">Scan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row" id="deviceStatus">
                                    @if (!isset($res['status']))
                                        <div class="col-12 text-center">
                                            <img src="{{ $res['qrCodeURL'] ?? "" }}" alt="">
                                        </div>
                                        <div class="col-12 text-center p-2">
                                            <h1>How to scan</h1>
                                            <div class="col-md-4 col-12 mx-auto">
                                                <img src="https://wsup.app/uploads/scan-demo.gif" class="w-100"
                                                    height="300">

                                            </div>
                                        </div>
                                    @else
                                        <div class="col-12 text-center d-flex justify-content-center align-items-center">
                                            <h1 class="text-success">Your Device is Connected</h1><span
                                                style='font-size:50px;'>&#128640;</span>
                                        </div>.
                                        <div class="col-8 mx-auto text-center">
                                            <a href="{{route("panel.sender.single")}}" class="btn btn-primary">Single Send</a>
                                            <a href="{{route("panel.sender.bulk")}}" class="btn btn-primary">Bulk Send</a>
                                        </div>
                                    @endif
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
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('d20b36b25e12b6cc7ca7', {
            cluster: 'mt1'
        });

        var channel = pusher.subscribe('{{ $device->id }}');
        channel.bind('sessionstatus', function(data) {
        console.log(data);

            $("#deviceStatus").load(location.href + " #deviceStatus");

        });
    </script>
@endsection
