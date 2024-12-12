@extends('front.layouts.app')

@section('content')
    <div class="cc8v2 ccthb cxj2n cvros cynql" aria-hidden="true">
        <div class="cjxwv cwgyo cjgwc cmxwm csv9q c0c31 c5uon czfz1"></div>
    </div>

    <!-- Content -->
    <div class="c07cc">

        <div class="cjmss cpnre cxbhj ce3b0 c5fai cl8ef cg0u5 c4a2s">

            <div class="cx5hs cn7jq">
                <div class="csnm3 cqcwp c07cc">
                    <div class="ck5d4 c5yxd">

                        <div class="cwdf1">
                            <h1 class="cep6s cq262">Forgot Password</h1>
                        </div>
                        <div class="row">
                            @if (session('error'))
                                <div
                                    style="background-color: #f8d7da; color: #721c24; padding: 15px; border: 1px solid #f5c6cb; border-radius: 5px; font-size: 16px;">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <!-- Form -->
                        <div id="send-otp">
                            <form action="{{ route('send-otp') }}" method="post" id="" onsubmit="sendOtp(event)">
                                @csrf
                                <div class="cw6xm">
                                    <div>
                                        <label class="ce0zw cc7ls cnrm4 cskbc c0dxj" for="username">Username</label>
                                        <input id="username" class="c8okn c07cc c37mk" name="username" type="text"
                                            required>
                                    </div>

                                </div>
                                <div class="cichh">
                                    <button class="cdnfp cnbzd cnky1 cfdqu cw1xo c8tf8 cnbyk c07cc cwq93 cayql">Send
                                        OTP</button>
                                </div>
                            </form>

                        </div>

                        <div id="submit-otp">


                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection


@section('js')
    <script>
        $("#submit-otp").hide();

        function sendOtp(e) {
            e.preventDefault();

            let username = $("#username").val();
            $.ajax({
                url: "{{ route('send-otp') }}",
                type: "POST",
                data: $("#send-otp form").serialize(),
                success: function(response) {
                    if (response.status) {
                        $("#send-otp").hide();
                        $("#submit-otp").html(submitOtpHtml(username));
                        $("#submit-otp").show();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('CSRF token mismatch error:', error);
                }
            });




        }


        function submitOtpHtml(username) {
            return `
                            <form action="{{ route('submit-otp') }}" method="post" id="submit-otp">
                                @csrf
                                <div class="cw6xm">
                                    <div>
                                        <label class="ce0zw cc7ls cnrm4 cskbc c0dxj" for="otp">Enter OTP</label>
                                        <input id="otp" class="c8okn c07cc c37mk" name="otp" type="text" required>
                                    </div>
                                        <input id="usernamee" class="c8okn c07cc c37mk" name="username" type="hidden" value="${username}" required>


                                </div>
                                <div class="cichh">
                                    <button class="cdnfp cnbzd cnky1 cfdqu cw1xo c8tf8 cnbyk c07cc cwq93 cayql">Submit</button>
                                </div>
                            </form>

                        `
        }
    </script>
@endsection
