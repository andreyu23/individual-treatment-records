<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">

        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left  text-light"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex text-light">
                <em class="icon ni ni-info"></em>
            </a>
        </div>

        <div class="nk-sidebar-brand text-light">
            <span id="title-sidemenu">
                    Welcome Back!
                 {{-- <b>{{ Str::substr(Auth::user()->name, 0, 14) }}</b> --}}
                {{-- {{ Str::length(Auth::user()->name) >= 14 ? '...' : '' }} --}}
            </span>
        </div>

    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <center>
                        <img src="/images/logo.png?e" id="logo-sidemenu" style="height: 130px;  filter: drop-shadow(0 0 10px #000);" alt="">
                    </center>
                    <hr class="mt-4 mb-4">
                    <li class="nk-menu-heading pt-0">
                        <h6 class="overline-title text-primary-alt">menu</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/dashboard" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-add"></em></span>
                            <span class="nk-menu-text">Patient Information</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/transaction-logs" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-add"></em></span>
                            <span class="nk-menu-text">Transaction Logs</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/individual" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                            <span class="nk-menu-text">Individual Patient Information</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/personnel" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                            <span class="nk-menu-text">CHU/RHU Personnel</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/visit" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-clipboard"></em></span>
                            <span class="nk-menu-text">Type of Cosultation/Purpose of Visit</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/pertinent" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-clipboad-check"></em></span>
                            <span class="nk-menu-text">Pertinent Findings per System</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/diagnosis" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-question"></em></span>
                            <span class="nk-menu-text">Diagnosis</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/manage" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                            <span class="nk-menu-text">Management</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/family" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-chart-up"></em></span>
                            <span class="nk-menu-text">Family Planning</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/lab" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-list-round"></em></span>
                            <span class="nk-menu-text">Laboratory/Imaging Examination</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/child" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                            <span class="nk-menu-text">Child Immunization</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/adult" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                            <span class="nk-menu-text">Adult Immunization</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/prenatal" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-plus-medi-fill"></em></span>
                            <span class="nk-menu-text">Prenatal</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/postpartum" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-plus-medi-fill"></em></span>
                            <span class="nk-menu-text">Postpartum</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/general" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-question-alt"></em></span>
                            <span class="nk-menu-text">General Consultation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
