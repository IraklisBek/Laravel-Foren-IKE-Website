<div id="navPC">
    <nav>
        <ul class="logo-image-menu">
            <li>
                <img id="menuLogo" src="/visitor/images/general/menulogo.png" width="100%">
            </li>
        </ul>

        <ul class="main-menu">
            <li id="homeLi">
                <a href="{{ route('home') }}" class="{{ Request::is('/') ? "active" : "" }}">Home</a>
            </li>
            <li id="FORENBOXLi">
                <a href="{{ route('forenbox') }}" class="{{ Request::is('forenbox') ? "active" : "" }}">FORENBOX</a>
                <ul style="position:absolute; display:none;" id="galleryUL">
                    <li><a href="{{ route('gallery') }}" class="{{ Request::is('gallery') ? "active" : "" }}">Gallery</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('products') }}" class="{{ Request::is('products') ? "active" : "" }}">Products</a>
            </li>
            <li>
                <a href="{{ route('3dmodel') }}" class="{{ Request::is('3dmodel') ? "active" : "" }}">3D Model</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="{{ Request::is('about') ? "active" : "" }}">About us</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="{{ Request::is('contact') ? "active" : "" }}">Contact</a>
            </li>
        </ul>
        <ul class="login-menu">
            <li style="margin-right:15%; width:25%;" id="langLi">
                <a href=""><img src="visitor/images/flags/eng2.png" width="100%"><br>
                    <img src="visitor/images/general/VELOSKATO.png" width="40%" style="margin-top:-40%;"></a>
                <ul id="langUL" style="margin-top:-1%">
                    <li><a href=""><img src="visitor/images/flags/esp2.png" width="100%"> </a></li>
                    <li><a href=""><img src="visitor/images/flags/fr2.png" width="100%"> </a></li>
                </ul>
            </li>
            @if(!Auth::check())
                <li>
                    <a onclick="signup()" class="registerA">Register</a>
                </li>
                <li>
                    <a onclick="login()">Login</a>
                </li>
            @else
                <li id="accountLi">
                    <a>My Account</a>
                    <ul id="accountUL">
                        <li><a href="">Something</a></li>
                        <li><a href="{{ route('logoutUser') }}">Logout</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>
</div>
<div id="navMobile">
    <nav>
        <ul class="logo-image-menu">
            <li>
                <img id="menuLogo" src="/visitor/images/general/menulogo.png" width="100%">
            </li>
        </ul>
        <ul class="show-menu">
            <li>
                <img id="mobileMenuImg" src="/visitor/images/general/show-menu-icon.png" width="90%">
            </li>
        </ul>
    </nav>
    <div class="row"></div>
    <div id="navMobileElements">
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('forenbox') }}">FORENBOX</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('products') }}">Products</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="" >Login</a></li>
                <li><a href="">Register</a></li>
                <li style="margin-right:15%; width:25%;" id="langLi">
                    Language
                    <ul id="langUL">
                        <li><a href="">Spanish</a></li>
                        <li><a href="">French</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>