<header class="header-area">
<div class="newspaper-main-menu" id="stickyMenu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li class="active"><a href="{{ url('frontend/index') }}">accueil</a></li>
                            <li><a href="{{ url('admin/categories') }}">Categories</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Politique</a></li>
                                    <li><a href="catagories-post.html">Economie</a></li>
                                    <li><a href="single-post.html">Culturel</a></li>
                                </ul>
                            </li>
                           
                            <li><a href="{{ url('admin/comments') }}">contact</a></li>
                            
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>