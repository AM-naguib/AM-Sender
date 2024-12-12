<!DOCTYPE html>
<html lang="en" class="cguq1">

<head>
    @include('front.layouts.head')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body class="cbyl4 ctwbb c8l5g csjju co5fe">

    <!-- Page wrapper -->
    <div class="overflow-hidden cuwej crocn cl8ef c4a2s">

        <!-- Site header -->
        <header class="cwa0a c07cc cr6bd cvyg4 cein3">
            @include('front.layouts.header')
        </header>

        <!-- Page content -->
        <main class="c7fsb">

            @yield('content')


        </main>

        {{-- <!-- Site footer -->
        <footer>
            <div class="cxbfd cx5hs cqcwp cn7jq">

                <!-- Top area: Blocks -->
                <div class="cg3qe ca3sx c96k8 c9k3o c6cri">

                    <!-- 1st block -->
                    <div class="cu88u cjouy cih6g">
                        <div>
                            <!-- Logo -->
                            <a class="cdrak" href="index-2.html" aria-label="Cruip">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28">
                                    <path class="c4ow8" fill-rule="evenodd" d="M15.052 0c6.914.513 12.434 6.033 12.947 12.947h-5.015a7.932 7.932 0 0 1-7.932-7.932V0Zm-2.105 22.985V28C6.033 27.487.513 21.967 0 15.053h5.015a7.932 7.932 0 0 1 7.932 7.932Z" clip-rule="evenodd"></path>
                                    <path class="cfix0" fill-rule="evenodd" d="M0 12.947C.513 6.033 6.033.513 12.947 0v5.015a7.932 7.932 0 0 1-7.932 7.932H0Zm22.984 2.106h5.015C27.486 21.967 21.966 27.487 15.052 28v-5.015a7.932 7.932 0 0 1 7.932-7.932Z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="c34vk cnrm4">
                            © Cruip.com - All rights reserved.
                        </div>
                    </div>

                    <!-- 2nd block -->
                    <div class="c6dpm cc16l cpgwb cih6g">
                        <h3 class="cc7ls cnrm4">Product</h3>
                        <ul class="cih6g cnrm4">
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Features</a>
                            </li>
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Integrations</a>
                            </li>
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Pricing &amp; Plans</a>
                            </li>
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Changelog</a>
                            </li>
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Our method</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 3rd block -->
                    <div class="c6dpm cc16l cpgwb cih6g">
                        <h3 class="cc7ls cnrm4">Company</h3>
                        <ul class="cih6g cnrm4">
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">About us</a>
                            </li>
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Diversity &amp; Inclusion</a>
                            </li>
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Blog</a>
                            </li>
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Careers</a>
                            </li>
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Financial statements</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 4th block -->
                    <div class="c6dpm cc16l cpgwb cih6g">
                        <h3 class="cc7ls cnrm4">Resources</h3>
                        <ul class="cih6g cnrm4">
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Community</a>
                            </li>
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Terms of service</a>
                            </li>
                            <li>
                                <a class="cgq07 c34vk cwcpl" href="#0">Report a vulnerability</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 5th block -->
                    <div class="c6dpm cc16l cpgwb cih6g">
                        <h3 class="cc7ls cnrm4">Social</h3>
                        <ul class="cd48q c4a2s">
                            <li>
                                <a class="cztsb cxbhj crnka cdrow cwcpl c4a2s" href="#0" aria-label="Twitter">
                                    <svg class="cturl cbkjh cj90k" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m13.063 9 3.495 4.475L20.601 9h2.454l-5.359 5.931L24 23h-4.938l-3.866-4.893L10.771 23H8.316l5.735-6.342L8 9h5.063Zm-.74 1.347h-1.457l8.875 11.232h1.36l-8.778-11.232Z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="cztsb cxbhj crnka cdrow cwcpl c4a2s" href="#0" aria-label="Medium">
                                    <svg class="cturl cbkjh cj90k" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23 8H9a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1Zm-1.708 3.791-.858.823a.251.251 0 0 0-.1.241V18.9a.251.251 0 0 0 .1.241l.838.823v.181h-4.215v-.181l.868-.843c.085-.085.085-.11.085-.241v-4.887l-2.41 6.131h-.329l-2.81-6.13V18.1a.567.567 0 0 0 .156.472l1.129 1.37v.181h-3.2v-.181l1.129-1.37a.547.547 0 0 0 .146-.472v-4.749a.416.416 0 0 0-.138-.351l-1-1.209v-.181H13.8l2.4 5.283 2.122-5.283h2.971l-.001.181Z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="cztsb cxbhj crnka cdrow cwcpl c4a2s" href="#0" aria-label="Github">
                                    <svg class="cturl cbkjh cj90k" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

            <!-- Big text -->
            <div class="c0vjw cyf4s c07cc ci34p cb3iw" aria-hidden="true">
                <div class="caynm cy5yu cdm9m clrg9 cvw27 cigw0 cj3qy csrml cf9nj clb9z cleqp cc8v2 c2jz9 c38j2 czznb c030e cy5k3 c4m92 c1yep cczaz c82xa cep6s cxj2n ci34p"></div>
                <!-- Glow -->
                <div class="c38j2 cmxyr c82xa cxj2n cvros" aria-hidden="true">
                    <div class="cjxwv ciq4z cggjr c76rr csv9q cozgt ca62l"></div>
                </div>
            </div>
        </footer> --}}

    </div>

    <script src="{{ asset('front') }}/js/vendors/focus.min.js" defer=""></script><!-- Focus plugin: https://alpinejs.dev/plugins/focus -->
    <script src="{{ asset('front') }}/js/vendors/alpinejs.min.js" defer=""></script>
    <script src="{{ asset('front') }}/js/vendors/aos.js"></script>
    <script src="{{ asset('front') }}/js/main.js"></script>

    @yield('js')
</body>
<!-- Mirrored from preview.cruip.com/simple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 15:15:41 GMT -->

</html>
