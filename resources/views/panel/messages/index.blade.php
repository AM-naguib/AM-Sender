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
                                <h4 class="card-title mb-0">Live Messages Log</h4>
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
                                                        <th scope="col">To</th>
                                                        <th scope="col">Device Name</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($messages as $message)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $message->from }}</td>
                                                        <td>{{ $message->to }}</td>
                                                        <td>{{ $message->device->name }}</td>
                                                        <td class="{{ $message->status == 1 ? 'text-success' : 'text-danger'}}">{{ $message->status == 1 ? 'Sent' : 'Not Sent' }}</td>
                                                        <td>{{ $message->created_at->diffForHumans() }}</td>
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
                                        {{ $messages->links('vendor.pagination.custom') }}

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
@section('js')
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('d20b36b25e12b6cc7ca7', {
            cluster: 'mt1'
        });

        // var channel = pusher.subscribe('sasa');
        var channel = pusher.subscribe('user_{{ auth()->user()->id }}');
        channel.bind('message_status', function(data) {

            $("#messages").load(location.href + " #messages");



        });
    </script>
@endsection
