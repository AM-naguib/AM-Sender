<div class="cxbfd cx5hs cqcwp cn7jq">
    <div
        class="csoaf cdouf cnpw6 carbw cynyd cv5x1 cy259 ccd0d c2xfw c5j5d cnbst cpous cdrow czdar ciff0 cwoyc c0vjw cnzyi c4a2s cpzr5 cblyd">

        <!-- Site branding -->
        <div class="cdrow cfxr2 c4a2s">
            <!-- Logo -->
            <a class="cdrak" href="{{route('front.index')}}" aria-label="Cruip">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28">
                    <path class="c4ow8" fill-rule="evenodd"
                        d="M15.052 0c6.914.513 12.434 6.033 12.947 12.947h-5.015a7.932 7.932 0 0 1-7.932-7.932V0Zm-2.105 22.985V28C6.033 27.487.513 21.967 0 15.053h5.015a7.932 7.932 0 0 1 7.932 7.932Z"
                        clip-rule="evenodd"></path>
                    <path class="cfix0" fill-rule="evenodd"
                        d="M0 12.947C.513 6.033 6.033.513 12.947 0v5.015a7.932 7.932 0 0 1-7.932 7.932H0Zm22.984 2.106h5.015C27.486 21.967 21.966 27.487 15.052 28v-5.015a7.932 7.932 0 0 1 7.932-7.932Z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>

        <!-- Desktop navigation -->
        <nav class="cbj0o cppca c9gtw">

            <!-- Desktop menu links -->
            {{-- <ul class="cxbhj cdrow c81cr ccywq cnrm4 cnss4 c4a2s c7fsb">
                <li class="cblyd c88zw">
                    <a class="cgq07 ce0zw cdrow cwcpl c4a2s" href="pricing.html">Pricing</a>
                </li>
                <li class="cblyd c88zw">
                    <a class="cgq07 ce0zw cdrow cwcpl c4a2s" href="customers.html">Customers</a>
                </li>
                <li class="cblyd c88zw">
                    <a class="cgq07 ce0zw cdrow cwcpl c4a2s" href="blog.html">Blog</a>
                </li>
                <li class="cblyd c88zw">
                    <a class="cgq07 ce0zw cdrow cwcpl c4a2s" href="documentation.html">Docs</a>
                </li>
                <!-- 1st level: hover -->
                <li class="cdrow c0vjw c3o7t c4a2s cblyd c88zw" x-data="{ open: false }"
                    @mouseenter="open = true" @mouseleave="open = false">
                    <span class="cgq07 cgfbk ce0zw cdrow cwcpl c4a2s" aria-haspopup="true"
                        :aria-expanded="open">Extra</span>
                    <button class="cfufg c2aj1" :aria-expanded="open" @click.prevent="open = !open">
                        <span class="c55m0">Show submenu for "Extra"</span>
                        <svg class="clcg2" xmlns="http://www.w3.org/2000/svg" width="10"
                            height="6">
                            <path d="m1.06.19 3.5 3.5 3.5-3.5 1.061 1.06-4.56 4.56L0 1.25 1.06.19Z"></path>
                        </svg>
                    </button>
                    <!-- 2nd level: hover -->
                    <ul class="cy259 cm9sj c4vql chcxa cwoyc cxj2n cqzdr cgwj6 cynql c3ytk caqcf ckuz5"
                        x-show="open" x-transition:enter="cwcpl chyvu c3mi3"
                        x-transition:enter-start="cio1t color" x-transition:enter-end="c8bnb ch07w"
                        x-transition:leave="cwcpl chyvu" x-transition:leave-start="c8bnb"
                        x-transition:leave-end="cio1t" x-cloak=""
                        @focusout="await $nextTick();!$el.contains($focus.focused()) &amp;&amp; (open = false)">
                        <li>
                            <a class="chpyv ce0zw cl954 cwmyr cnrm4 c4a2s cb51q" href="support.html">Support
                                center</a>
                        </li>
                        <li>
                            <a class="chpyv ce0zw cl954 cwmyr cnrm4 c4a2s cb51q" href="apps.html">Apps</a>
                        </li>
                    </ul>
                </li>
            </ul> --}}

        </nav>

        <!-- Desktop sign in links -->
        <ul class="cdrow celda cfxr2 cnzyi c4a2s">
            <li>
                <a class="c2np1 c3ns1 cgwj6 c2htu cwq93" href="{{ route('login') }}">Login</a>
            </li>
            <li>
                <a class="cc3qo ctwfu cbzch c2htu cwq93" href="{{ route('signup') }}">Register</a>
            </li>
        </ul>

        <!-- Mobile menu -->
        <div class="cyv1b c4a2s" x-data="{ expanded: false }">

            <!-- Hamburger button -->
            <button class="cxbhj c3ns1 cdrow cdrak cczaz cwcpl cgwj6 codvp cbkjh cj90k"
                aria-controls="mobile-nav" :aria-expanded="expanded" @click.stop="expanded = !expanded">
                <span class="c55m0">Menu</span>
                <svg class="cc8v2 cturl ct7tn cdkxo" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect class="cdgbu c2848 cd5ia ctqdg cqqni cawtk c54ql c7fcq coclo" y="7" width="9"
                        height="2" rx="1"></rect>
                    <rect class="cl4gy cllhq c54ql c7fcq coclo" y="7" width="16" height="2"
                        rx="1"></rect>
                    <rect class="cdgbu cggs3 ctqdg c1w3t c54ql c7fcq coclo" y="7" width="9"
                        height="2" rx="1"></rect>
                </svg>
            </button>

            <!-- Mobile navigation -->
            <nav id="mobile-nav"
                class="csoaf cdouf cnpw6 carbw cynyd cv5x1 cy259 c2xfw cnbst cpous chcxa cwoyc cxj2n cqzdr cgwj6 cynql c07cc c3w9h"
                @click.outside="expanded = false" @keydown.escape.window="expanded = false"
                x-show="expanded" x-transition:enter="cwcpl chyvu ccybt c3mi3"
                x-transition:enter-start="cio1t color" x-transition:enter-end="c8bnb ch07w"
                x-transition:leave="cwcpl chyvu ccybt" x-transition:leave-start="c8bnb"
                x-transition:leave-end="cio1t" x-cloak="">
                {{-- <ul class="cnrm4 ckuz5">
                    <li>
                        <a class="chpyv ce0zw cl954 cwmyr c4a2s cb51q" href="pricing.html">Pricing</a>
                    </li>
                    <li>
                        <a class="chpyv ce0zw cl954 cwmyr c4a2s cb51q" href="customers.html">Customers</a>
                    </li>
                    <li>
                        <a class="chpyv ce0zw cl954 cwmyr c4a2s cb51q" href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a class="chpyv ce0zw cl954 cwmyr c4a2s cb51q" href="documentation.html">Docs</a>
                    </li>
                    <li>
                        <a class="chpyv ce0zw cl954 cwmyr c4a2s cb51q" href="support.html">Support
                            center</a>
                    </li>
                    <li>
                        <a class="chpyv ce0zw cl954 cwmyr c4a2s cb51q" href="apps.html">Apps</a>
                    </li>
                </ul> --}}
            </nav>

        </div>

    </div>
</div>
