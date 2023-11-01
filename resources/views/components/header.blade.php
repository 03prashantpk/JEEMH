<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->

                    <a href="{{ route('home') }}" class="logo col-4">
                        <h2 style="color: #E75E8D">JEE Mastery Hub</h2>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                        <form id="search" action="#">
                            <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                            <i class="fa fa-search"></i>
                        </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('browse') }}" class="{{ Request::is('browse') ? 'active' : '' }}">Browse</a></li>
                        <li><a href="{{ route('details') }}" class="{{ Request::is('details') ? 'active' : '' }}">Syllabus</a></li>
                       
                        @if(session()->has('user_email'))
                        <li><a href="{{ route('profile') }}" class="{{ Request::is('profile') ? 'active' : '' }}">Profile <img src="images/profile-header.jpg" alt=""></a></li>
                        @else
                        <li><a href="{{ route('login') }}" class="{{ Request::is('profile') ? 'active' : '' }}">Login <img src="images/profile-header.jpg" alt=""></a></li>
                        @endif

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>