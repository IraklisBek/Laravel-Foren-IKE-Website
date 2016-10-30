<div id="navPC">
    <nav>
        <ul class="logo-image-menu">
            <li>
                <img id="menuLogo" src="/visitor/images/general/menulogo.png" width="100%">
            </li>
        </ul>

        <ul class="main-menu">
            <li id="homeLi">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li id="FORENBOXLi">
                <a href="{{ route('forenbox') }}">FORENBOX</a>
                <ul style="position:absolute; display:none;" id="galleryUL">
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('products') }}">Products</a>
            </li>
            <li>
                <a href="{{ route('3dmodel') }}">3D Model</a>
            </li>
            <li>
                <a href="{{ route('about') }}">About us</a>
            </li>
            <li>
                <a href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
        <ul class="login-menu">
            <li style="margin-right:15%; width:25%;" id="langLi">
                <a href=""><img src="visitor/images/flags/eng.jpg" width="100%"> </a>
                <ul id="langUL">
                    <li><a href=""><img src="visitor/images/flags/esp2.png" width="100%"> </a></li>
                    <li><a href=""><img src="visitor/images/flags/fr2.png" width="100%"> </a></li>
                </ul>
            </li>
            <li>
                <a href="">Register</a>
            </li>
            <li>
                <a href="">Login</a>
            </li>
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
                <li><a href="">Login</a></li>
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