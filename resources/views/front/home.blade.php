@extends('front.layouts.app')
@section('content')
    <!-- Hero -->
    <section class="c0vjw">

        <!-- Stripes illustration -->
        <div class="cc8v2 c38j2 c82xa c3mi3 cxj2n cvd4p ci34p" aria-hidden="true">
            <img class="c13of" src="{{ asset('front') }}/images/stripes.svg" width="768" height="432" alt="Stripes">
        </div>

        <!-- Circles -->
        <div class="cc8v2 c38j2 cscpp c82xa cxj2n cxj7m" aria-hidden="true">
            <div class="cjxwv cwgyo cjgwc cmxwm csv9q ca7zz c5uon czfz1"></div>
        </div>
        <div class="cc8v2 c38j2 cfkl5 cvizd c82xa cxj2n" aria-hidden="true">
            <div class="cjxwv cwgyo cjgwc cmxwm csv9q cx349 ca7zz c5uon czfz1"></div>
        </div>
        <div class="cc8v2 c38j2 cinxm c2l8u c82xa cxj2n" aria-hidden="true">
            <div class="cjxwv cwgyo cjgwc cmxwm csv9q cx349 ca7zz c5uon czfz1"></div>
        </div>

        <div class="cxbfd cx5hs cqcwp cn7jq">

            <!-- Hero content -->
            <div class="ccd2c c71n8 cb4uz cbgts">

                <!-- Section header -->
                <div class="cczaz ce84p cb4uz">
                    <div class="cqzis chf5m cruyu" data-aos="zoom-y-out">
                        <div class="cxbhj czxkc c4quo c4a2s">
                            <img class="cf4eh csv9q caf8r c9xsv" src="{{ asset('front') }}/images/avatar-01.jpg"
                                width="32" height="32" alt="Avatar 01">
                            <img class="cf4eh csv9q caf8r c9xsv" src="{{ asset('front') }}/images/avatar-02.jpg"
                                width="32" height="32" alt="Avatar 02">
                            <img class="cf4eh csv9q caf8r c9xsv" src="{{ asset('front') }}/images/avatar-03.jpg"
                                width="32" height="32" alt="Avatar 03">
                            <img class="cf4eh csv9q caf8r c9xsv" src="{{ asset('front') }}/images/avatar-04.jpg"
                                width="32" height="32" alt="Avatar 04">
                            <img class="cf4eh csv9q caf8r c9xsv" src="{{ asset('front') }}/images/avatar-05.jpg"
                                width="32" height="32" alt="Avatar 05">
                            <img class="cf4eh csv9q caf8r c9xsv" src="{{ asset('front') }}/images/avatar-06.jpg"
                                width="32" height="32" alt="Avatar 06">
                        </div>
                    </div>
                    <h1 class="cqzis c9f55 cep6s chf5m c9s5u cruyu" data-aos="zoom-y-out" data-aos-delay="150">AM-Sender:
                        Send Offers,<br class="cby2r"> Grow Faster</h1>
                    <div class="c441s cqcwp">
                        <p class="ce0zw cprne c60f3" data-aos="zoom-y-out" data-aos-delay="300">AM-Sender helps you send
                            targeted offers to your customers on WhatsApp, boosting your sales and growing your business
                            automatically.
                        </p>
                        <div class="csw7z c2xfw cgkcp cnbst c0vjw">
                            <div class="c0ix1 citj5 c0vjw c6dyc cdj6q cqcwp" data-aos="zoom-y-out" data-aos-delay="450">
                                <a class="cdnfp cnbzd cnky1 cfdqu cw1xo c8tf8 cnbyk c8slg cg07b c07cc cwq93 codvp cnv5k cayql"
                                    href="{{ route('signup') }}">
                                    <span class="cdrow cdrak c0vjw">
                                        Sign Up Now <span class="cvsu8 ceifv ck2l5 ck05u cr1y2">-&gt;</span>
                                    </span>
                                </a>
                                {{-- <a class="c2np1 c3ns1 c8slg cgwj6 c2mml c07cc cwq93 cayql" href="#0">Learn More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <!-- Hero image -->
                        <div class="c441s cqcwp" data-aos="zoom-y-out" data-aos-delay="600">
                            <div class="csw7z ci4ez carbw c2xfw cjq0v cgkcp c030e cxhrx c5nka cxs6k cl5e2 ciff0 chf7m cncjq c0vjw c0dhx c1fmi">
                                <div class="ch676 cvvf7 cjpz9 cgijw c7uuq c5j5d cu52c cdrow c0vjw c60f3 c4a2s">
                                    <span class="czz77 cc7ls cnbyk">cruip.com</span>
                                </div>
                                <div class="cj4iq cn0bb cwzxh cnrm4">
                                    <span class="cuxmm ctwfu"></span> <span class="cvl7v">--registry=https://npm.pkg.github.com</span><br>
                                    <span class="cpik1">--scope=@phanatic</span> <span class="cor66">Successfully logged-in.</span><br><br>
                                    <span class="cfsl6 ctwfu">npm publish</span><br>
                                    <span class="cgmt8">Package published.</span>
                                </div>
                            </div>
                        </div> --}}

            </div>

        </div>
    </section>

    {{-- <!-- Business Categories -->
            <section>
                <div class="cxbfd cx5hs cqcwp cn7jq">
                    <div>

                        <!-- Tabs component -->
                        <div x-data="{ activeTab: 1 }">

                            <!-- Buttons -->
                            <div class="cxbhj c4a2s">
                                <div role="tablist" class="csoaf cdouf cnpw6 cimn0 carbw cynyd cv5x1 cy259 cz62q c2xfw cnbst cxbhj cpous cdrak chcxa c81cr cwoyc c0vjw cgwj6 c60f3 ckuz5" @keydown.right.prevent.stop="$focus.wrap().next()" @keydown.left.prevent.stop="$focus.wrap().prev()" @keydown.home.prevent.stop="$focus.first()" @keydown.end.prevent.stop="$focus.last()">
                                    <!-- Button #1 -->
                                    <button id="tab-1" class="cdlu6 cs5wq c5dhx cyywn cv7k7 cdrow cc7ls cl954 cgvdk cnrm4 cfxr2 c4a2s cblyd cbkjh" :class="activeTab === 1 ? 'cbzch ctwfu' : 'ce0zw'" :tabindex="activeTab === 1 ? 0 : -1" :aria-selected="activeTab === 1" aria-controls="tabpanel-1" @click="activeTab = 1" @focus="activeTab = 1">
                                        <svg class="cturl" :class="activeTab === 1 ? 'chql7' : 'cn0bb'" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                            <path d="M8 2a6 6 0 1 0 0 12A6 6 0 0 0 8 2ZM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8Z"></path>
                                        </svg>
                                        <span>Startups</span>
                                    </button>
                                    <!-- Button #2 -->
                                    <button id="tab-2" class="cdlu6 cs5wq c5dhx cyywn cv7k7 cdrow cc7ls cl954 cgvdk cnrm4 cfxr2 c4a2s cblyd cbkjh" :class="activeTab === 2 ? 'cbzch ctwfu' : 'ce0zw'" :tabindex="activeTab === 2 ? 0 : -1" :aria-selected="activeTab === 2" aria-controls="tabpanel-2" @click="activeTab = 2" @focus="activeTab = 2">
                                        <svg class="cturl" :class="activeTab === 1 ? 'chql7' : 'cn0bb'" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                            <path d="M5.936.278A7.983 7.983 0 0 1 8 0a8 8 0 1 1-8 8c0-.722.104-1.413.278-2.064a1 1 0 1 1 1.932.516A5.99 5.99 0 0 0 2 8a6 6 0 1 0 6-6c-.53 0-1.045.076-1.548.21A1 1 0 1 1 5.936.278Zm.132 7.204A2.003 2.003 0 0 0 8 10a2 2 0 1 0-.518-3.932L3.707 2.293a1 1 0 0 0-1.414 1.414l3.775 3.775Z"></path>
                                        </svg>
                                        <span>Web Apps</span>
                                    </button>
                                    <!-- Button #3 -->
                                    <button id="tab-3" class="cdlu6 cs5wq c5dhx cyywn cv7k7 cdrow cc7ls cl954 cgvdk cnrm4 cfxr2 c4a2s cblyd cbkjh" :class="activeTab === 3 ? 'cbzch ctwfu' : 'ce0zw'" :tabindex="activeTab === 3 ? 0 : -1" :aria-selected="activeTab === 3" aria-controls="tabpanel-3" @click="activeTab = 3" @focus="activeTab = 3">
                                        <svg class="cturl" :class="activeTab === 1 ? 'chql7' : 'cn0bb'" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                            <path d="M3 2a1 1 0 0 0-2 0v12a1 1 0 1 0 2 0V2Zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm4 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-5 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm5-13a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm4 0a1 1 0 1 0-2 0v12a1 1 0 1 0 2 0V2Z"></path>
                                        </svg>
                                        <span>eCommerce</span>
                                    </button>
                                    <!-- Button #4 -->
                                    <button id="tab-4" class="cdlu6 cs5wq c5dhx cyywn cv7k7 cdrow cc7ls cl954 cgvdk cnrm4 cfxr2 c4a2s cblyd cbkjh" :class="activeTab === 4 ? 'cbzch ctwfu' : 'ce0zw'" :tabindex="activeTab === 4 ? 0 : -1" :aria-selected="activeTab === 4" aria-controls="tabpanel-4" @click="activeTab = 4" @focus="activeTab = 4">
                                        <svg class="cturl" :class="activeTab === 1 ? 'chql7' : 'cn0bb'" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                            <path d="M.06 10.003a1 1 0 0 1 1.947.455c-.019.08.01.152.078.19l5.83 3.333c.052.03.115.03.168 0l5.83-3.333a.163.163 0 0 0 .078-.188 1 1 0 1 1 1.947-.459 2.161 2.161 0 0 1-1.032 2.384l-5.83 3.331a2.168 2.168 0 0 1-2.154 0l-5.83-3.331A2.162 2.162 0 0 1 .06 10.003Zm7.855-7.981-5.83 3.332a.17.17 0 0 0 0 .295l5.828 3.33a.172.172 0 0 0 .17.002l5.83-3.333a.17.17 0 0 0 0-.294L8.084 2.023a.172.172 0 0 0-.17-.001h.001ZM9.075.285l5.83 3.332c1.458.833 1.458 2.935 0 3.768l-5.83 3.333c-.667.38-1.485.38-2.153-.001l-5.83-3.332c-1.457-.833-1.457-2.935 0-3.767L6.924.285a2.173 2.173 0 0 1 2.15 0h.001Z"></path>
                                        </svg>
                                        <span>Enteprise</span>
                                    </button>
                                </div>
                            </div>

                            <div class="cxbhj cdrow cahd5 c0vjw c4a2s">
                                <!-- Small blue dots -->
                                <div class="cxj2n ci34p">
                                    <svg class="c4ow8" xmlns="http://www.w3.org/2000/svg" width="164" height="41" viewBox="0 0 164 41" fill="none">
                                        <circle cx="1" cy="8" r="1" fill-opacity="0.24"></circle>
                                        <circle cx="1" cy="1" r="1" fill-opacity="0.16"></circle>
                                        <circle cx="1" cy="15" r="1"></circle>
                                        <circle cx="1" cy="26" r="1" fill-opacity="0.64"></circle>
                                        <circle cx="1" cy="33" r="1" fill-opacity="0.24"></circle>
                                        <circle cx="8" cy="8" r="1"></circle>
                                        <circle cx="8" cy="15" r="1"></circle>
                                        <circle cx="8" cy="26" r="1" fill-opacity="0.24"></circle>
                                        <circle cx="15" cy="15" r="1" fill-opacity="0.64"></circle>
                                        <circle cx="15" cy="26" r="1" fill-opacity="0.16"></circle>
                                        <circle cx="8" cy="33" r="1"></circle>
                                        <circle cx="1" cy="40" r="1"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 164 7)" fill-opacity="0.24"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 164 0)" fill-opacity="0.16"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 164 14)"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 164 25)" fill-opacity="0.64"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 164 32)" fill-opacity="0.24"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 157 7)"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 157 14)"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 157 25)" fill-opacity="0.24"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 150 14)" fill-opacity="0.64"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 150 25)" fill-opacity="0.16"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 157 32)"></circle>
                                        <circle cx="1" cy="1" r="1" transform="matrix(-1 0 0 1 164 39)"></circle>
                                    </svg>
                                </div>
                                <!-- Blue glow -->
                                <div class="cxj2n ci34p">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="432" height="160" viewBox="0 0 432 160" fill="none">
                                        <g opacity="0.6" filter="url(#filter0_f_2044_9)">
                                            <path class="c4ow8" fill-rule="evenodd" clip-rule="evenodd" d="M80 112C62.3269 112 48 97.6731 48 80C48 62.3269 62.3269 48 80 48C97.6731 48 171 62.3269 171 80C171 97.6731 97.6731 112 80 112ZM352 112C369.673 112 384 97.6731 384 80C384 62.3269 369.673 48 352 48C334.327 48 261 62.3269 261 80C261 97.6731 334.327 112 352 112Z"></path>
                                        </g>
                                        <defs>
                                            <filter id="filter0_f_2044_9" x="0" y="0" width="432" height="160" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                <feGaussianBlur stdDeviation="32" result="effect1_foregroundBlur_2044_9"></feGaussianBlur>
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                                <!-- Horizontal lines -->
                                <div class="cxju3 c7pbn cev45 cedzu cniyu ckk6a cxj2n cvd4p ci34p cmce1"></div>
                                <div class="cxju3 c7pbn cev45 cedzu cniyu ckk6a cxj2n cvros ci34p cmce1"></div>
                                <div class="cxju3 cy2uf c7pbn cev45 c1xou cedzu cxj2n ciebj ci34p cmce1"></div>
                                <div class="clxah cet77 cao07 cihmh cxju3 csljt c7pbn cev45 c2xfw cedzu cniyu c1hbo ckk6a cxj2n ciebj ci34p cmce1"></div>
                                <div class="crjfc cet77 cufgj cihmh cxju3 csljt c7pbn cev45 c2xfw cedzu cniyu c1hbo ckk6a cxj2n ciebj ci34p cmce1"></div>
                                <!-- Diagonal lines -->
                                <div class="cxju3 c0zts cozp9 c7pbn cev45 cedzu cniyu cxj2n ciebj ci34p cmce1"></div>
                                <div class="cxju3 c0zts czmvk c7pbn cev45 cedzu cniyu cxj2n ciebj ci34p cmce1"></div>
                                <!-- Vertical lines -->
                                <div class="cgj8i cxju3 cm27f cedzu c2zxn c0u45 c82xa cxj2n ci34p cr0pe"></div>
                                <div class="cd2xo cxju3 cnky1 cedzu c2zxn c0u45 c82xa cxj2n ci34p cr0pe"></div>
                                <!-- Logos -->
                                <div class="ckmxx cdouf cnpw6 cpa9v cv5x1 ck41d c2xfw c2mkf cpous cxj2n">
                                    <div class="c509s">
                                        <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s c61hs cfonf">
                                            <img class="c0vjw" src="{{asset("front")}}/images/logo-01.svg" width="32" height="32" alt="Logo 01">
                                        </div>
                                    </div>
                                </div>
                                <!-- Panel #1 -->
                                <div id="tabpanel-1" class="cxbhj cdrow cg0u5 c07cc c4a2s" role="tabpanel" tabindex="0" aria-labelledby="tab-1" x-show="activeTab === 1" x-transition:enter="cwcpl crmdp cuwe0 c3mi3 cgn13" x-transition:enter-start="cio1t cj4vu" x-transition:enter-end="c8bnb ch07w" x-transition:leave="cwcpl crmdp coclo c3mi3 cxj2n" x-transition:leave-start="c8bnb ch07w" x-transition:leave-end="cio1t ce1bf">
                                    <div class="c1fmc cxj2n">
                                        <div class="cv954">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s cc61o ct4tf">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-02.svg" width="23" height="22" alt="Logo 02">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="czing cxj2n">
                                        <div class="c2kdw">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s cc61o ct4tf">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-03.svg" width="22" height="22" alt="Logo 03">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cgj8i cao07 cxj2n">
                                        <div class="cb1mz">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-04.svg" width="24" height="22" alt="Logo 04">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cao07 cd2xo cxj2n">
                                        <div class="cf2in">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-05.svg" width="25" height="25" alt="Logo 05">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cd2xo cufgj cxj2n">
                                        <div class="cdnce">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-06.svg" width="20" height="18" alt="Logo 06">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cgj8i cufgj cxj2n">
                                        <div class="cimwk">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-07.svg" width="25" height="25" alt="Logo 07">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c3kcn co8qp cxj2n">
                                        <div class="cdnce">
                                            <div class="cf84e cxbhj cdrow csv9q cwoyc cgwj6 c3ytk c4a2s c0rh9 cr97w">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-08.svg" width="20" height="20" alt="Logo 08">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c782f co8qp cxj2n">
                                        <div class="ckf6a">
                                            <div class="cf84e cxbhj cdrow csv9q cwoyc cgwj6 c3ytk c4a2s c0rh9 cr97w">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-09.svg" width="21" height="13" alt="Logo 09">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Panel #2 -->
                                <div id="tabpanel-2" class="cxbhj cdrow cg0u5 c07cc c4a2s" role="tabpanel" tabindex="0" aria-labelledby="tab-2" x-show="activeTab === 2" x-transition:enter="cwcpl crmdp cuwe0 c3mi3 cgn13" x-transition:enter-start="cio1t cj4vu" x-transition:enter-end="c8bnb ch07w" x-transition:leave="cwcpl crmdp coclo c3mi3 cxj2n" x-transition:leave-start="c8bnb ch07w" x-transition:leave-end="cio1t ce1bf">
                                    <div class="c1fmc cxj2n">
                                        <div class="cv954">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s cc61o ct4tf">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-03.svg" width="23" height="22" alt="Logo 03">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="czing cxj2n">
                                        <div class="c2kdw">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s cc61o ct4tf">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-04.svg" width="22" height="22" alt="Logo 04">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cgj8i cao07 cxj2n">
                                        <div class="cb1mz">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-05.svg" width="24" height="22" alt="Logo 05">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cao07 cd2xo cxj2n">
                                        <div class="cf2in">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-02.svg" width="25" height="25" alt="Logo 02">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cd2xo cufgj cxj2n">
                                        <div class="cdnce">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-07.svg" width="20" height="18" alt="Logo 07">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cgj8i cufgj cxj2n">
                                        <div class="cimwk">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-06.svg" width="25" height="25" alt="Logo 06">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c3kcn co8qp cxj2n">
                                        <div class="cdnce">
                                            <div class="cf84e cxbhj cdrow csv9q cwoyc cgwj6 c3ytk c4a2s c0rh9 cr97w">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-09.svg" width="20" height="20" alt="Logo 09">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c782f co8qp cxj2n">
                                        <div class="ckf6a">
                                            <div class="cf84e cxbhj cdrow csv9q cwoyc cgwj6 c3ytk c4a2s c0rh9 cr97w">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-08.svg" width="21" height="13" alt="Logo 08">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Panel #3 -->
                                <div id="tabpanel-3" class="cxbhj cdrow cg0u5 c07cc c4a2s" role="tabpanel" tabindex="0" aria-labelledby="tab-3" x-show="activeTab === 3" x-transition:enter="cwcpl crmdp cuwe0 c3mi3 cgn13" x-transition:enter-start="cio1t cj4vu" x-transition:enter-end="c8bnb ch07w" x-transition:leave="cwcpl crmdp coclo c3mi3 cxj2n" x-transition:leave-start="c8bnb ch07w" x-transition:leave-end="cio1t ce1bf">
                                    <div class="c1fmc cxj2n">
                                        <div class="cv954">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s cc61o ct4tf">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-02.svg" width="23" height="22" alt="Logo 02">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="czing cxj2n">
                                        <div class="c2kdw">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s cc61o ct4tf">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-03.svg" width="22" height="22" alt="Logo 03">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cgj8i cao07 cxj2n">
                                        <div class="cb1mz">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-04.svg" width="24" height="22" alt="Logo 04">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cao07 cd2xo cxj2n">
                                        <div class="cf2in">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-05.svg" width="25" height="25" alt="Logo 05">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cd2xo cufgj cxj2n">
                                        <div class="cdnce">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-06.svg" width="20" height="18" alt="Logo 06">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cgj8i cufgj cxj2n">
                                        <div class="cimwk">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-07.svg" width="25" height="25" alt="Logo 07">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c3kcn co8qp cxj2n">
                                        <div class="cdnce">
                                            <div class="cf84e cxbhj cdrow csv9q cwoyc cgwj6 c3ytk c4a2s c0rh9 cr97w">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-08.svg" width="20" height="20" alt="Logo 08">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c782f co8qp cxj2n">
                                        <div class="ckf6a">
                                            <div class="cf84e cxbhj cdrow csv9q cwoyc cgwj6 c3ytk c4a2s c0rh9 cr97w">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-09.svg" width="21" height="13" alt="Logo 09">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Panel #4 -->
                                <div id="tabpanel-4" class="cxbhj cdrow cg0u5 c07cc c4a2s" role="tabpanel" tabindex="0" aria-labelledby="tab-4" x-show="activeTab === 4" x-transition:enter="cwcpl crmdp cuwe0 c3mi3 cgn13" x-transition:enter-start="cio1t cj4vu" x-transition:enter-end="c8bnb ch07w" x-transition:leave="cwcpl crmdp coclo c3mi3 cxj2n" x-transition:leave-start="c8bnb ch07w" x-transition:leave-end="cio1t ce1bf">
                                    <div class="c1fmc cxj2n">
                                        <div class="cv954">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s cc61o ct4tf">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-03.svg" width="23" height="22" alt="Logo 03">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="czing cxj2n">
                                        <div class="c2kdw">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s cc61o ct4tf">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-04.svg" width="22" height="22" alt="Logo 04">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cgj8i cao07 cxj2n">
                                        <div class="cb1mz">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-05.svg" width="24" height="22" alt="Logo 05">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cao07 cd2xo cxj2n">
                                        <div class="cf2in">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-02.svg" width="25" height="25" alt="Logo 02">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cd2xo cufgj cxj2n">
                                        <div class="cdnce">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-07.svg" width="20" height="18" alt="Logo 07">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cgj8i cufgj cxj2n">
                                        <div class="cimwk">
                                            <div class="cab6c cynyd cdol0 cy259 cwsa9 c9x43 c2xfw cnbst cxbhj cpous cdrow csv9q cwoyc cgwj6 c4a2s ci2lm cju07">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-06.svg" width="25" height="25" alt="Logo 06">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c3kcn co8qp cxj2n">
                                        <div class="cdnce">
                                            <div class="cf84e cxbhj cdrow csv9q cwoyc cgwj6 c3ytk c4a2s c0rh9 cr97w">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-09.svg" width="20" height="20" alt="Logo 09">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c782f co8qp cxj2n">
                                        <div class="ckf6a">
                                            <div class="cf84e cxbhj cdrow csv9q cwoyc cgwj6 c3ytk c4a2s c0rh9 cr97w">
                                                <img class="c0vjw" src="{{asset("front")}}/images/logo-08.svg" width="21" height="13" alt="Logo 08">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End: Tabs component -->

                    </div>
                </div>
            </section>

            <!-- Large testimonial -->
            <section>
                <div class="cf2y5 cx5hs cqcwp cn7jq">
                    <div class="ck5d4 c1gwx">
                        <div class="cczaz cfrd0">
                            <div class="cdrak c0vjw">
                                <svg class="cxj2n cmb90 covyf ci34p" width="40" height="49" viewBox="0 0 40 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.7976 -0.000136375L39.9352 23.4746L33.4178 31.7234L13.7686 11.4275L22.7976 -0.000136375ZM9.34947 17.0206L26.4871 40.4953L19.9697 48.7441L0.320491 28.4482L9.34947 17.0206Z" fill="#D1D5DB"></path>
                                </svg>
                                <img class="csv9q" src="{{asset("front")}}/images/large-testimonial.jpg" width="48" height="48" alt="Large testimonial">
                            </div>
                            <p class="ctwbb cep6s ci34f">“Simple has simplified my life in more ways than one. From managing my sites to <em class="cn0bb cpiio">keeping track of tasks</em>, it's become my go-to tool for everything.”</p>
                            <div class="cn0bb cc7ls cnrm4">
                                <span class="ce0zw">Mary Sullivan</span> <span class="chql7">/</span> <a class="crnka" href="#0">CTO at Microsoft</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features -->
            <section class="c2bmm c2xfw cnbst crlr7 c0vjw">
                <div class="cxbfd cx5hs cqcwp cn7jq">
                    <div class="ck5d4 c1gwx">

                        <!-- Section header -->
                        <div class="cczaz c441s ccd2c cqcwp cx4ct">
                            <h2 class="ctwfu cmrh3 cep6s c0clt">Simple helps your teams work more efficiently together</h2>
                        </div>

                        <!-- Planet -->
                        <div class="ccd2c cx4ct" data-aos="zoom-y-out">
                            <div class="cczaz">
                                <div class="ce6as cfpsu ca99c clrg9 cqswb c77fw c02lw c2xfw c7wav cnbst c030e c4m92 cvbjy csv9q cdrak c0vjw">
                                    <img class="csv9q chf7m" src="{{asset("front")}}/images/planet.png" width="400" height="400" alt="Planet">
                                    <div class="cc8v2" aria-hidden="true">
                                        <img class="c13of cbtny cxj2n c8r9s cztq3" src="{{asset("front")}}/images/planet-overlay.svg" width="789" height="755" alt="Planet decoration">
                                        <div>
                                            <img class="cfvlc cwmoh c4giq cr8os cxj2n caxyn cj9zb cztq3" src="{{asset("front")}}/images/planet-tag-01.png" width="253" height="56" alt="Tag 01">
                                            <img class="c4m9r cwmoh c4giq cga69 cxj2n cl3uy c76qb cztq3" src="{{asset("front")}}/images/planet-tag-02.png" width="241" height="56" alt="Tag 02">
                                            <img class="c7dag cwmoh c4giq czeo4 cgh7d cxj2n cro3x cztq3" src="{{asset("front")}}/images/planet-tag-03.png" width="243" height="56" alt="Tag 03">
                                            <img class="c5vd6 cwmoh c4giq cr8os c2okp cxj2n ciq2k cztq3" src="{{asset("front")}}/images/planet-tag-04.png" width="251" height="56" alt="Tag 04">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Grid -->
                        <div class="overflow-hidden cw82x cjhg0 cpdf8 covse crp5p ckpfk c0rmx cf3dk cdjdr cfmt7 cai21 ced8l cck0n cj4bx c6ai0 csreq cf8cj c9k3o">
                            <article>
                                <h3 class="ctwfu cdrow cc7ls ciy3m cd57x c4a2s">
                                    <svg class="c4ow8" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M2 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Zm2-4a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4H4Zm1 10a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H5Z"></path>
                                      </svg>
                                      <span>Instant Analytics</span>
                                </h3>
                                <p class="cfl62 chql7">Collect essential insights about how visitors are using your site with in-depth page view metrics like pages, referring sites, and more.</p>
                            </article>
                            <article>
                                <h3 class="ctwfu cdrow cc7ls ciy3m cd57x c4a2s">
                                    <svg class="c4ow8" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M14.29 2.614a1 1 0 0 0-1.58-1.228L6.407 9.492l-3.199-3.2a1 1 0 1 0-1.414 1.415l4 4a1 1 0 0 0 1.496-.093l7-9ZM1 14a1 1 0 1 0 0 2h14a1 1 0 1 0 0-2H1Z"></path>
                                      </svg>
                                      <span>Metadata</span>
                                </h3>
                                <p class="cfl62 chql7">Collect essential insights about how visitors are using your site with in-depth page view metrics like pages, referring sites, and more.</p>
                            </article>
                            <article>
                                <h3 class="ctwfu cdrow cc7ls ciy3m cd57x c4a2s">
                                    <svg class="c4ow8" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                            <path d="M2.248 6.285a1 1 0 0 1-1.916-.57A8.014 8.014 0 0 1 5.715.332a1 1 0 0 1 .57 1.916 6.014 6.014 0 0 0-4.037 4.037Z" opacity=".3"></path>
                                            <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm1.715-6.752a1 1 0 0 1 .57-1.916 8.014 8.014 0 0 1 5.383 5.383 1 1 0 1 1-1.916.57 6.014 6.014 0 0 0-4.037-4.037Zm4.037 7.467a1 1 0 1 1 1.916.57 8.014 8.014 0 0 1-5.383 5.383 1 1 0 1 1-.57-1.916 6.014 6.014 0 0 0 4.037-4.037Zm-7.467 4.037a1 1 0 1 1-.57 1.916 8.014 8.014 0 0 1-5.383-5.383 1 1 0 1 1 1.916-.57 6.014 6.014 0 0 0 4.037 4.037Z"></path>
                                      </svg>
                                      <span>SEO &amp; Performance</span>
                                </h3>
                                <p class="cfl62 chql7">Collect essential insights about how visitors are using your site with in-depth page view metrics like pages, referring sites, and more.</p>
                            </article>
                            <article>
                                <h3 class="ctwfu cdrow cc7ls ciy3m cd57x c4a2s">
                                    <svg class="c4ow8" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M8 0a1 1 0 0 1 1 1v14a1 1 0 1 1-2 0V1a1 1 0 0 1 1-1Zm6 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1a1 1 0 1 1 0 2h-1a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3h1a1 1 0 1 1 0 2h-1ZM1 1a1 1 0 0 0 0 2h1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 1 0 0 2h1a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H1Z"></path>
                                      </svg>
                                      <span>Custom Code</span>
                                </h3>
                                <p class="cfl62 chql7">Collect essential insights about how visitors are using your site with in-depth page view metrics like pages, referring sites, and more.</p>
                            </article>
                            <article>
                                <h3 class="ctwfu cdrow cc7ls ciy3m cd57x c4a2s">
                                    <svg class="c4ow8" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M10.284.33a1 1 0 1 0-.574 1.917 6.049 6.049 0 0 1 2.417 1.395A1 1 0 0 0 13.5 2.188 8.034 8.034 0 0 0 10.284.33ZM6.288 2.248A1 1 0 0 0 5.718.33 8.036 8.036 0 0 0 2.5 2.187a1 1 0 0 0 1.372 1.455 6.036 6.036 0 0 1 2.415-1.395ZM1.42 5.401a1 1 0 0 1 .742 1.204 6.025 6.025 0 0 0 0 2.79 1 1 0 0 1-1.946.462 8.026 8.026 0 0 1 0-3.714A1 1 0 0 1 1.421 5.4Zm2.452 6.957A1 1 0 0 0 2.5 13.812a8.036 8.036 0 0 0 3.216 1.857 1 1 0 0 0 .574-1.916 6.044 6.044 0 0 1-2.417-1.395Zm9.668.04a1 1 0 0 1-.041 1.414 8.033 8.033 0 0 1-3.217 1.857 1 1 0 1 1-.571-1.917 6.035 6.035 0 0 0 2.415-1.395 1 1 0 0 1 1.414.042Zm2.242-6.255a1 1 0 1 0-1.946.462 6.03 6.03 0 0 1 0 2.79 1 1 0 1 0 1.946.462 8.022 8.022 0 0 0 0-3.714Z"></path>
                                      </svg>
                                      <span>Localization</span>
                                </h3>
                                <p class="cfl62 chql7">Collect essential insights about how visitors are using your site with in-depth page view metrics like pages, referring sites, and more.</p>
                            </article>
                            <article>
                                <h3 class="ctwfu cdrow cc7ls ciy3m cd57x c4a2s">
                                    <svg class="c4ow8" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M9 1a1 1 0 1 0-2 0v6a1 1 0 0 0 2 0V1ZM4.572 3.08a1 1 0 0 0-1.144-1.64A7.987 7.987 0 0 0 0 8a8 8 0 0 0 16 0c0-2.72-1.36-5.117-3.428-6.56a1 1 0 1 0-1.144 1.64A5.987 5.987 0 0 1 14 8 6 6 0 1 1 2 8a5.987 5.987 0 0 1 2.572-4.92Z"></path>
                                      </svg>
                                      <span>Canonical URL</span>
                                </h3>
                                <p class="cfl62 chql7">Collect essential insights about how visitors are using your site with in-depth page view metrics like pages, referring sites, and more.</p>
                            </article>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Features #2 -->
            <section class="c0vjw">
                <div class="c38j2 cx9qa c82xa cxj2n cvd4p ci34p" aria-hidden="true">
                    <div class="cjxwv cwgyo cjgwc cmxwm csv9q cx349 co8qp c5uon czfz1"></div>
                </div>
                <div class="cxbfd cx5hs cqcwp cn7jq">
                    <div class="ck5d4 c1gwx">

                        <!-- Section header -->
                        <div class="cczaz c441s cbjga cqcwp cxkvs">
                            <h2 class="cmrh3 cep6s c0clt cnv5k">Identify value much faster</h2>
                            <p class="ce0zw cprne">Use powerful yet familiar tools to create your ultimate website design. Import your files everywhere, including Figma.</p>
                        </div>

                        <!-- Illustration -->
                        <div class="cq6pt cxbhj ckh15 c0vjw cqcwp c07cc c1ncu codvp c4a2s" data-aos="zoom-y-out">
                            <div class="cxj2n cvros ci34p" aria-hidden="true">
                                <div class="cjxwv cjgwc csv9q cyqet c0c31 c5uon czfz1"></div>
                            </div>
                            <div class="ctgt9 cxs6k coclo ciff0 chf7m cwcpl co6sa cncjq c07cc c0dhx c1fmi">
                                <div class="ch676 cvvf7 cjpz9 cgijw c7uuq c5j5d cu52c cdrow c0vjw c60f3 c4a2s">
                                    <span class="czz77 cc7ls cnbyk">AI Project</span>
                                </div>
                                <div class="cjxwv c862v cj4iq cn0bb coclo cwcpl cwzxh cnrm4 cjin1">
                                    <span class="cuxmm ctwfu">npm login</span> <span class="cvl7v">--registry=https://npm.pkg.github.com</span><br>
                                    <span class="cpik1">--scope=@phanatic</span> <span class="cor66">Successfully logged-in.</span><br><br>
                                    <span class="cfsl6 ctwfu">npm publish</span><br>
                                    <span class="cgmt8">Package published.</span>
                                </div>
                            </div>
                            <div class="cxj2n cj9zb">
                                <div class="cq9di cxiaq cc8v2 cffni coclo cw2au cwcpl">
                                    <img class="c5l9j" src="{{asset("front")}}/images/features-02-overlay-01.png" width="500" height="72" alt="Overlay 01">
                                </div>
                                <div class="delay-50 cq9di cxiaq cc8v2 c5a5e cffni coclo cwcpl">
                                    <img src="{{asset("front")}}/images/features-02-overlay-02.png" width="500" height="40" alt="Overlay 02">
                                </div>
                                <div class="cq9di cxiaq cc8v2 cffni coclo cwcpl cjjqo">
                                    <img class="co6sa" src="{{asset("front")}}/images/features-02-overlay-03.png" width="500" height="91" alt="Overlay 03">
                                </div>
                            </div>
                        </div>

                        <!-- Grid -->
                        <div class="overflow-hidden cl3v7 cw82x cpdf8 ccfly c0rmx ct4ae cow1n c5bsq cai21 c0crf cz0hi cck0n csreq cf8cj chf5m c9k3o">
                            <article>
                                <h3 class="cdrow cc7ls ciy3m cd57x c4a2s">
                                    <svg class="c4ow8" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="m15.447 6.605-.673-.336a6.973 6.973 0 0 0-.761-1.834l.238-.715a.999.999 0 0 0-.242-1.023l-.707-.707a.995.995 0 0 0-1.023-.242l-.715.238a6.96 6.96 0 0 0-1.834-.761L9.394.552A1 1 0 0 0 8.5-.001h-1c-.379 0-.725.214-.895.553l-.336.673a6.973 6.973 0 0 0-1.834.761l-.715-.238a.997.997 0 0 0-1.023.242l-.707.707a1.001 1.001 0 0 0-.242 1.023l.238.715a6.959 6.959 0 0 0-.761 1.834l-.673.336a1 1 0 0 0-.553.895v1c0 .379.214.725.553.895l.673.336c.167.653.425 1.268.761 1.834l-.238.715a.999.999 0 0 0 .242 1.023l.707.707a.997.997 0 0 0 1.023.242l.715-.238a6.959 6.959 0 0 0 1.834.761l.336.673a1 1 0 0 0 .895.553h1c.379 0 .725-.214.895-.553l.336-.673a6.973 6.973 0 0 0 1.834-.761l.715.238a1.001 1.001 0 0 0 1.023-.242l.707-.707c.268-.268.361-.664.242-1.023l-.238-.715a6.959 6.959 0 0 0 .761-1.834l.673-.336A1 1 0 0 0 16 8.5v-1c0-.379-.214-.725-.553-.895ZM8 13a5 5 0 1 1 .001-10.001 5 5 0 0 1 0 10.001Z"></path>
                                      </svg>
                                      <span>Optimization</span>
                                </h3>
                                <p class="cfl62 ce0zw">Collect essential insights about how visitors are using your site with in-depth page view metrics like pages, referring sites, and more.</p>
                            </article>
                            <article>
                                <h3 class="cdrow cc7ls ciy3m cd57x c4a2s">
                                    <svg class="c4ow8" xmlns="http://www.w3.org/2000/svg" width="16" height="12">
                                        <path d="M2 0a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2H2Zm0 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7Zm1-3a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H3Z"></path>
                                      </svg>
                                      <span>Cookie Banner</span>
                                </h3>
                                <p class="cfl62 ce0zw">Collect essential insights about how visitors are using your site with in-depth page view metrics like pages, referring sites, and more.</p>
                            </article>
                            <article>
                                <h3 class="cdrow cc7ls ciy3m cd57x c4a2s">
                                    <svg class="c4ow8" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                            <path d="M14.75 2.5a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Zm0 13.5a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5ZM2.5 14.75a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0ZM1.25 2.5a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5ZM4 8a4 4 0 1 1 8 0 4 4 0 0 1-8 0Zm4-6a6 6 0 1 0 0 12A6 6 0 0 0 8 2Z"></path>
                                      </svg>
                                      <span>Custom Domain</span>
                                </h3>
                                <p class="cfl62 ce0zw">Collect essential insights about how visitors are using your site with in-depth page view metrics like pages, referring sites, and more.</p>
                            </article>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="carbw clrg9 cn8c0 cuhzn c2xfw cnbst cvbjy c0vjw">
                <div class="ctw0e covvi">
                    <div class="cxbfd cx5hs cqcwp cn7jq">
                        <div class="cczaz c441s cqcwp">
                            <h2 class="cmrh3 cep6s c0clt">Top startups love Simple</h2>
                        </div>
                    </div>
                    <div class="cappb cxbhj c0vjw cqcwp c4a2s">
                        <div class="ckmem c5dv1 cxj2n ci34p" aria-hidden="true">
                            <div class="cjxwv cwgyo cjgwc cmxwm csv9q cx349 cga69 c5uon czfz1"></div>
                        </div>
                        <div class="ci9en cxj2n ci34p" aria-hidden="true">
                            <div class="cjxwv cjgwc csv9q cyqet co8qp c5uon czfz1"></div>
                        </div>
                        <div class="cxj2n cvros ci34p" aria-hidden="true">
                            <div class="cjxwv ciq4z cynbf csv9q c1r3z cozgt ca62l"></div>
                        </div>
                        <!-- Row -->
                        <div x-data="{}" x-init="$nextTick(() => {
                                let ul = $refs.testimonials;
                                ul.insertAdjacentHTML('afterend', ul.outerHTML);
                                ul.nextSibling.setAttribute('aria-hidden', 'true');
                            })" class="c641p cdrak cn8zx ck5d4 c07cc c1gwx codvp">
                            <div x-ref="testimonials" class="cmpl0 cnboj cx5ec cbrx1 cxbhj ctoov c4a2s">
                                <!-- Item #1 -->
                                <article class="csoaf cdouf cnpw6 carbw cynyd cv5x1 cy259 c8782 ceifv c2xfw cnbst c3pm7 cpous cmk0x c73aj coclo cboar ciff0 cwoyc c0vjw cl8ef cg0u5 c4a2s cgafo">
                                    <header class="cdrow cnzyi cnv5k c4a2s">
                                        <img class="csv9q cfufg" src="{{asset("front")}}/images/testimonial-01.jpg" width="44" height="44" alt="Testimonial 01">
                                        <div>
                                            <div class="cep6s">Peter Lowe</div>
                                            <div>
                                                <a class="c1iai ciqaw cc7ls cwcpl cnrm4" href="#0">@peterlowex</a>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="ce0zw cnrm4 c7fsb">
                                        As a founder, having a visually appealing and user-friendly website is essential. This tool not only helped me achieve that but also improved my site's performance and SEO.
                                    </div>
                                    <footer class="ce0zw cdrow cgvdk ce61f c4a2s">
                                        <svg class="cturl" xmlns="http://www.w3.org/2000/svg" width="17" height="15" fill="none">
                                            <path fill-rule="evenodd" d="M16.928 14.054H11.99L8.125 9.162l-4.427 4.892H1.243L6.98 7.712.928.054H5.99L9.487 4.53 13.53.054h2.454l-5.358 5.932 6.303 8.068Zm-4.26-1.421h1.36L5.251 1.4H3.793l8.875 11.232Z"></path>
                                        </svg>
                                        <div class="cipq7">May 19, 2027</div>
                                    </footer>
                                </article>
                                <!-- Item #2 -->
                                <article class="csoaf cdouf cnpw6 carbw cynyd cv5x1 cy259 c8782 ceifv c2xfw cnbst c3pm7 cpous cmk0x c73aj coclo cboar ciff0 cwoyc c0vjw cl8ef cg0u5 c4a2s cgafo">
                                    <header class="cdrow cnzyi cnv5k c4a2s">
                                        <img class="csv9q cfufg" src="{{asset("front")}}/images/testimonial-02.jpg" width="44" height="44" alt="Testimonial 02">
                                        <div>
                                            <div class="cep6s">Rodri Alba</div>
                                            <div>
                                                <a class="c1iai ciqaw cc7ls cwcpl cnrm4" href="#0">@rodri_spn</a>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="ce0zw cnrm4 c7fsb">
                                        Simple has revolutionized the way I manage my work. Its intuitive interface and seamless functionality make staying organized effortless. I can't imagine my life without it.
                                    </div>
                                    <footer class="ce0zw cdrow cgvdk ce61f c4a2s">
                                        <svg class="cturl" xmlns="http://www.w3.org/2000/svg" width="17" height="15" fill="none">
                                            <path fill-rule="evenodd" d="M16.928 14.054H11.99L8.125 9.162l-4.427 4.892H1.243L6.98 7.712.928.054H5.99L9.487 4.53 13.53.054h2.454l-5.358 5.932 6.303 8.068Zm-4.26-1.421h1.36L5.251 1.4H3.793l8.875 11.232Z"></path>
                                        </svg>
                                        <div class="cipq7">Apr 12, 2027</div>
                                    </footer>
                                </article>
                                <!-- Item #3 -->
                                <article class="csoaf cdouf cnpw6 carbw cynyd cv5x1 cy259 c8782 ceifv c2xfw cnbst c3pm7 cpous cmk0x c73aj coclo cboar ciff0 cwoyc c0vjw cl8ef cg0u5 c4a2s cgafo">
                                    <header class="cdrow cnzyi cnv5k c4a2s">
                                        <img class="csv9q cfufg" src="{{asset("front")}}/images/testimonial-03.jpg" width="44" height="44" alt="Testimonial 03">
                                        <div>
                                            <div class="cep6s">Michele Lex</div>
                                            <div>
                                                <a class="c1iai ciqaw cc7ls cwcpl cnrm4" href="#0">@MikyBrown</a>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="ce0zw cnrm4 c7fsb">
                                        I've tried several website builders before, but none were as user-friendly and versatile as this one. From design to functionality, it exceeded my expectations!
                                    </div>
                                    <footer class="ce0zw cdrow cgvdk ce61f c4a2s">
                                        <svg class="cturl" xmlns="http://www.w3.org/2000/svg" width="17" height="15" fill="none">
                                            <path fill-rule="evenodd" d="M16.928 14.054H11.99L8.125 9.162l-4.427 4.892H1.243L6.98 7.712.928.054H5.99L9.487 4.53 13.53.054h2.454l-5.358 5.932 6.303 8.068Zm-4.26-1.421h1.36L5.251 1.4H3.793l8.875 11.232Z"></path>
                                        </svg>
                                        <div class="cipq7">Mar 04, 2027</div>
                                    </footer>
                                </article>
                                <!-- Item #4 -->
                                <article class="csoaf cdouf cnpw6 carbw cynyd cv5x1 cy259 c8782 ceifv c2xfw cnbst c3pm7 cpous cmk0x c73aj coclo cboar ciff0 cwoyc c0vjw cl8ef cg0u5 c4a2s cgafo">
                                    <header class="cdrow cnzyi cnv5k c4a2s">
                                        <img class="csv9q cfufg" src="{{asset("front")}}/images/testimonial-04.jpg" width="44" height="44" alt="Testimonial 04">
                                        <div>
                                            <div class="cep6s">Michael Ross</div>
                                            <div>
                                                <a class="c1iai ciqaw cc7ls cwcpl cnrm4" href="#0">@michjack</a>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="ce0zw cnrm4 c7fsb">
                                        Simple lives up to its name in every way. It's incredibly easy to use yet powerful enough to handle all my tasks effortlessly. It's become an essential part of my daily routine.
                                    </div>
                                    <footer class="ce0zw cdrow cgvdk ce61f c4a2s">
                                        <svg class="cturl" xmlns="http://www.w3.org/2000/svg" width="17" height="15" fill="none">
                                            <path fill-rule="evenodd" d="M16.928 14.054H11.99L8.125 9.162l-4.427 4.892H1.243L6.98 7.712.928.054H5.99L9.487 4.53 13.53.054h2.454l-5.358 5.932 6.303 8.068Zm-4.26-1.421h1.36L5.251 1.4H3.793l8.875 11.232Z"></path>
                                        </svg>
                                        <div class="cipq7">Jan 15, 2027</div>
                                    </footer>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section>
                <div class="cxbfd cx5hs cqcwp cn7jq">
                    <div class="overflow-hidden carbw cx1xp c2bmm c2xfw cnbst cvbjy ciff0 cczaz cncjq c0vjw" data-aos="zoom-y-out">
                        <!-- Glow -->
                        <div class="c38j2 cydfs c82xa cxj2n cvros ci34p" aria-hidden="true">
                            <div class="cjxwv ciq4z ci2i6 csv9q cmwh7 cjw6g cozgt"></div>
                        </div>
                        <!-- Stripes illustration -->
                        <div class="cc8v2 c38j2 c82xa c3mi3 cxj2n cvd4p ci34p" aria-hidden="true">
                            <img class="c13of" src="{{asset("front")}}/images/stripes-dark.svg" width="768" height="432" alt="Stripes">
                        </div>
                        <div class="c9u6s ck5d4 c1gwx cn7jq">
                            <h2 class="cy4m1 ctwfu cmrh3 cep6s cdffh chf5m c0clt cruyu">Create your next project with Simple</h2>
                            <div class="c0ix1 citj5 c6dyc cdj6q cqcwp">
                                <a class="cdnfp cnbzd cnky1 cfdqu cw1xo c8tf8 cnbyk c8slg cg07b c07cc cwq93 codvp cnv5k cayql" href="#0">
                                    <span class="cdrow cdrak c0vjw">
                                        Start Free Trial <span class="cvsu8 ceifv ck2l5 ck05u cr1y2">-&gt;</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
@endsection
