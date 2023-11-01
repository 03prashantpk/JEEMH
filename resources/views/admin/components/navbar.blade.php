<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell mx-0"></i>
                            <span class="count bg-success">2</span>
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-email mx-0"></i>
                            <span class="count bg-primary">4</span>
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
                    </li>

                </ul>
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html">
                        <h2> <strong>JEE MH - Admin Panel</strong> </h2>
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <h2> <strong>JEE MH - Admin Panel</strong></h2>
                    </a>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <span class="nav-profile-name">{{ $loggedInUser->name  }}</span>
                            <span class="online-status"></span>
                            <img src="https://ashisheditz.com/wp-content/uploads/2023/09/profile-picture-cute-whatsapp.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </div>
    </nav>

    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation" style="justify-content: center !important;">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/admin') ? 'active' : '' }}" href="/admin">
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../admin/users" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
                        <i class=" mdi mdi-account-star  menu-icon"></i>
                        <span class="menu-title">Users</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Freemium</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Premium</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="../admin/addChapters" class="nav-link">
                        <i class="  mdi mdi-book-plus   menu-icon"></i>
                        <span class="menu-title">Upload</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="listAll" class="nav-link">
                        <i class=" mdi mdi-book-minus  menu-icon"></i>
                        <span class="menu-title">Subjects</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item"><a class="nav-link" href="../admin/Physics">Physics</a></li>
                            <li class="nav-item"><a class="nav-link" href="../admin/ListOrganic">Organic Chemistry</a></li>
                            <li class="nav-item"><a class="nav-link" href="../admin/Physical">Physical Chemistry</a></li>
                            <li class="nav-item"><a class="nav-link" href="../admin/ListInOrganic">Inorganic Chemistry</a></li>
                            <li class="nav-item"><a class="nav-link" href="../admin/Maths">Maths</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</div>