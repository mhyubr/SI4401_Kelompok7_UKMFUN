<nav class="navbar bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('asset/img/tel-u.png') }}" class="my-2" alt="tel-u" height="40px">
        </a>
        <div class="navbar-nav">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home') ? 'text-danger' : 'text-dark' }}" href="/home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">EVENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="ukm.html">UKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'About Us') ? 'text-danger' : 'text-dark' }}" href="/about">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#"><img src="{{ asset('asset/img/notifikasi.png') }}" alt=""
                            height="20px"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#"><img src="{{ asset('asset/img/profile.jpeg') }}" class="" alt=""
                            height="20px"></a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</nav>