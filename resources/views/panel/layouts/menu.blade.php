        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('panel') }}/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('panel') }}/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('panel') }}/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('panel') }}/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>


                        <li class="nav-item">
                            <a class="nav-link menu-link active" style="" href="{{route("panel.index")}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link active" style="" href="{{route("panel.devices.index")}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Devices</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link active" style="" href="{{route("panel.sender.single")}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Single Sender</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link active" style="" href="{{route("panel.sender.bulk")}}">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Bulk Sender</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashboard-analytics-rtl.html" class="nav-link"
                                            data-key="t-analytics"> Analytics </a>
                                    </li>

                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->



                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
