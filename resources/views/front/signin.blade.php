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
                            <h1 class="cep6s cq262">Sign in to your account</h1>
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
                        <form action="{{ route('login.store') }}" method="post">
                            @csrf
                            <div class="cw6xm">
                                <div>
                                    <label class="ce0zw cc7ls cnrm4 cskbc c0dxj" for="username">Username</label>
                                    <input id="username" class="c8okn c07cc c37mk" name="username" type="text" required>
                                </div>
                                <div>
                                    <label class="ce0zw cc7ls cnrm4 cskbc c0dxj" for="password">Password</label>
                                    <input id="password" class="c8okn c07cc c37mk" name="password" type="password"
                                        autocomplete="on" placeholder="••••••••" required="">
                                </div>
                            </div>
                            <div class="cichh">
                                <button class="cdnfp cnbzd cnky1 cfdqu cw1xo c8tf8 cnbyk c07cc cwq93 cayql">Sign In</button>
                            </div>
                        </form>

                        <!-- Bottom link -->
                        <div class="cczaz cichh">
                            <a class="captn ce0zw cmnlh cnrm4" href="{{ route('forgot-password') }}">Forgot password</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Right side -->
    <div class="overflow-hidden cjn1u ciff0 ct3oa c0vjw cfufg c9gtw cv8bq cx4ty">
        <!-- Background -->
        <div class="cc8v2 c38j2 cx9qa c52qd c82xa cxj2n ciebj cmyp3 ci34p" aria-hidden="true">
            <img src="images/auth-bg.svg" class="c13of" width="1285" height="1684" alt="Auth bg">
        </div>
        <!-- Illustration -->
        <div class="cx9qa cutxa cxj2n ciebj c6nmb">
            <div class="cxs6k coclo ciff0 chf7m cwcpl cncjq c07cc c0dhx c1fmi">
                <div class="ch676 cvvf7 cjpz9 cgijw c7uuq c5j5d cu52c cdrow c0vjw c60f3 c4a2s">
                    <span class="czz77 cc7ls cnbyk">cruip.com</span>
                </div>
                <div class="cj4iq cn0bb coclo cwcpl cwzxh cnrm4">
                    <span class="cuxmm ctwfu">npm login</span> <span
                        class="cvl7v">--registry=https://npm.pkg.github.com</span><br>
                    <span class="cpik1">--scope=@phanatic</span> <span class="cor66">Successfully
                        logged-in.</span><br><br>
                    <span class="cfsl6 ctwfu">npm publish</span><br>
                    <span class="cgmt8">Package published.</span>
                </div>
            </div>
        </div>
    </div>
@endsection
