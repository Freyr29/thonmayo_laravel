<nav id="navbar">
    <ul class="navbar-items flexbox-col" style="margin-top: 20px;">
        <li class="navbar-item flexbox-left">
            <a href="{{ route('accueil') }}" class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <i class="fa-solid fa-house-chimney"></i>
                </div>
                <span class="link-text">ThonMayo</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left" style="margin-top: 60px;">
            <a href="{{ route('menus') }}" class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <span class="link-text">Menus</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a href="{{ route('sandwichs') }}" class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <i class="fa-solid fa-burger"></i>
                </div>
                <span class="link-text">Sandwichs</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a href="{{ route('boissons') }}" class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <i class="fa-solid fa-glass-water"></i>
                </div>
                <span class="link-text">Boissons</span>
            </a>
        </li>
        <li class="navbar-item flexbox-left">
            <a href="{{ route('snacks') }}" class="navbar-item-inner flexbox-left">
                <div class="navbar-item-inner-icon-wrapper flexbox">
                    <i class="fa-solid fa-cookie-bite"></i>
                </div>
                <span class="link-text">Snacks</span>
            </a>
        </li>
        @auth
            @if(Auth::user()->isadmin)
                <li class="navbar-item flexbox-left">
                    <a href="{{ route('admin') }}" class="navbar-item-inner flexbox-left">
                        <div class="navbar-item-inner-icon-wrapper flexbox">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        <span class="link-text">Admin</span>
                    </a>
                </li>
            @endif
        @endauth
    </ul>
</nav>
