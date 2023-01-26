<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIKBOOK</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"></i> WIKBOOK</a>

        <body>
            <div id="container">
              <div class="search-box">
                <input class="search-form-input" type="search" name="search" placeholder="Search...">
                <details id="dropdown" class="dropdown">
                  <summary class="dropdown-button">
                    <span id="selected-item" class="selected-item">Kategori</span>
                  </summary>
                  <details-menu class="dropdown-menu">
                    <div class="dropdown-menu-list">
                        @foreach($categories as $c)
                            <label class="dropdown-menu-item">
                                <input type="radio" name="item" value="All" checked>
                                <span>{{$c->category_name}}</span>
                            </label>
                        @endforeach
                    </div>
                  </details-menu>
                </details>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
        <div id="login-btn" class="fas fa-user mt-5"></div>
        </div>

    </div>

    <div class="header-2">
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <a href="/logout">
            <i class="fas fa-power-off mr-2"> Logout</i>
        </a>
    </form>

</div>

<body>
    <div class="container">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <p>Hujan</p>
                    </h3>
                    <p>This is where I network and build my professional protfolio.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <a href="https://twitter.com/AdamDipinto" target="_blank">@AdamDipinto</a>
                    </h3>
                    <p>This is where I read news and network with different social groups.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-github-square" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <a href="https://github.com/atom888" target="_blank">atom888</a>
                    </h3>
                    <p>This is where I share code and work on projects.</p>
                </div>
            </div>
        </div>
    </div>
</body>


<!-- blogs section starts  -->
<br><br>
<section class="blogs" id="blogs">

    <h1 class="heading"><span>Books Category</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="assets/img/novel1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cantik itu luka</h3>
                    <p> Pengarang : Eka Kurniawan.</p>
                    <p> Tahun Terbit : 2002</p>
                    <p> Penerbit : Gramedia Pustaka Utama</p>
                    <p> Jumlah Halaman : 537</p>
                    <p> Kategori : Fiksi</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="assets/img/novel3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kita pergi hari ini</h3>
                    <p> Pengarang : Ziggy Zezsyazeoviennazabrizkie</p>
                    <p> Tahun Terbit : Oktober 2021</p>
                    <p> Penerbit : Gramedia Pustaka Utama</p>
                    <p> Jumlah Halaman : 192</p>
                    <p> Kategori : Fiksi</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="assets/img/novel4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cerita bahagia hampir seluruhnya</h3>
                    <p> Pengarang : Norman Erikson</p>
                    <p> Tahun Terbit : Oktober 2022</p>
                    <p> Penerbit : Gramedia Pustaka Utama</p>
                    <p> Jumlah Halaman : 203</p>
                    <p> Kategori : Fiksi</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="assets/img/novel5.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>The star & I</h3>
                    <p> Pengarang : Ilana Tan</p>
                    <p> Tahun Terbit : Januari 2021</p>
                    <p> Penerbit : Gramedia Pustaka Utama</p>
                    <p> Jumlah Halaman : 344</p>
                    <p> Kategori : Romansa</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="assets/img/novel2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bibi Gil</h3>
                    <p> Pengarang : Tere Liye</p>
                    <p> Tahun Terbit : 21 Februari 2022</p>
                    <p> Penerbit : Gramedia Pustaka Utama</p>
                    <p> Jumlah Halaman : 500</p>
                    <p> Kategori : Fantasi</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

    {{-- <div class="credit"> created by <span>Wirda Almahera</span> | all rights reserved! </div> --}}

</section>


<!-- footer section ends -->

<!-- loader  -->

<div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div>
















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="{{asset('assets/js/dashboard.js')}}"></script>

</body>
</html>