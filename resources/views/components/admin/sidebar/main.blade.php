<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('dashboard')}}"
                                             aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Tableau de bord</span></a></li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Fonctionnalites</span></li>

                <li class="sidebar-item"> <a class="sidebar-link" href="{{route('contact.index')}}"
                                             aria-expanded="false"><i data-feather="compass" class="feather-icon"></i><span
                            class="hide-menu">Contact
                                </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('project.index')}}"
                                             aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                            class="hide-menu">Projet</span></a></li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Autres</span></li>

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('logout')}}"
                                             aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                            class="hide-menu">Deconnexion</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
