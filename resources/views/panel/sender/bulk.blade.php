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
                                <h4 class="card-title mb-0">Bulk Sender</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form action="{{ route('panel.sender.send') }}" method="POST">
                                        @csrf
                                        <div class="col-md-4 col-12 mx-auto">
                                            @include('panel.validation-show.index')

                                            <div class="mb-3">
                                                <label for="" class="form-label required">Select Device</label>
                                                <select name="device_id" id="device-select" class="form-select" required>
                                                    @forelse ($devices as $device)
                                                        <option
                                                            value="{{ $device->id }}"{{ old('device_id') == $device->id ? 'selected' : '' }}>
                                                            {{ $device->name }}</option>

                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Select Contact Group</label>
                                                <select class=" form-select" id="select-beast"
                                                    onchange="importContactsToTextarea(this.value)">
                                                    <option value=""></option>

                                                    @forelse ($contactGroups as $group)
                                                        <option value="{{ $group->contacts->pluck('phone') }}">
                                                            {{ $group->name }}</option>
                                                    @empty
                                                    @endforelse
                                                </select>

                                            </div>
                                            <div class="mb-3">
                                                <label for="receiver" class="form-label required">Receivers</label>
                                                <textarea type="text" class="form-control" name="receivers" id="receiver" rows="9"
                                                    placeholder="Enter receivers Without +, One number per line" required>{{ old('receivers') }}</textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label">Select Message Template</label>
                                                <select class=" form-select" id="select-messageTemplet"
                                                    onchange="importMessageToTextarea(this.value)">
                                                    <option value=""></option>

                                                    @forelse ($messageTemplates as $messageTemplate)
                                                        <option value="{{ $messageTemplate->message }}">
                                                            {{ $messageTemplate->name }}</option>
                                                    @empty
                                                    @endforelse
                                                </select>

                                            </div>

                                            <div class="mb-3">
                                                <label for="message" class="form-label required">Message</label>
                                                <textarea required type="text" class="form-control" rows="9" name="message" id="message"
                                                    placeholder="Enter Message">{{ old('message') }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="delay" class="form-label">Delay</label>
                                                <input type="number" class="form-control" name="delay_time" id="delay"
                                                    placeholder="Enter Delay With Seconds ,Default 1">
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="form-control bg-primary text-white"
                                                   >Send</button>
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


        function importContactsToTextarea(data) {
            $("#receiver").val("");
            if (data == '') return;
            data = JSON.parse(data);
            if (data.length > 0) {
                $("#receiver").val(data.join('\n'));
            }
        }


        function importMessageToTextarea(data) {
            $("#message").val("");
            if (data == '') return;
            if (data.length > 0) {
                $("#message").val(data);
            }
        }


        $(document).ready(function() {
            new TomSelect("#select-beast", {
                create: false,
                sortField: {

                    direction: "asc"
                }
            });

            new TomSelect("#device-select", {
                create: false,
                sortField: {

                    direction: "asc"
                }
            });

            new TomSelect("#select-messageTemplet", {
                create: false,
                sortField: {

                    direction: "asc"
                }
            });
        });
    </script>
@endsection
