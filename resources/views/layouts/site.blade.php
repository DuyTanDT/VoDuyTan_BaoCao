<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

   


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Include Slick CSS and JS files -->
  <link rel="stylesheet" type="text/css" href="path/to/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="path/to/slick/slick-theme.css"/>
  <script type="text/javascript" src="path/to/slick/slick.min.js"></script>


    <title>Document</title>
    <style>
        .bg-mainmenu {
            background-color: #B0E0E6;
        }

        ul.menu {
            list-style: none;
            padding: 0px;
            margin: 0px;
        }

        ul.menu>li {
            float: left;
        }

        /*submenu*/
        ul.menu ul.submenu {
            display: none;
            position: absolute;
            background-color: #f0eeed;
            min-width: 200px;
            z-index: 999;
            padding: 0px;
            margin: 0px;
            list-style: none;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;

        }

        ul.menu ul.submenu a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: rgb(19, 18, 18);
        }

        ul.menu ul.submenu a:hover {
            color: #e1ede1;
            background-color: rgb(26, 5, 5);
            opacity: 0.6;

        }

        ul.menu>li>a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #006600;
            font-weight: bold;
        }

        ul.menu>li:hover ul.submenu {
            display: block;
        }

        ul.menu>li>a:hover {
            color: white;
        }

        .cart {

            margin-top: 120px;
        }
.find
{
    padding-left: 50px;
}
        
    </style>
</head>

<body>
    <div class="container">



        <div class="row bg-black">
            <div class="col-md-9">
                <div class="icon">
                    <img src="{{ @asset('img/duy.png') }}" width="150px" alt="">
                </div>

            </div>
            <div class="col-md-3 ">
                <div class="row cart">
                    <div class="col-md-6 ">
                        <i class="fa-solid fa-cart-shopping"></i>
                        giỏ hàng
                    </div>
                    <div class="col-md-6">
                        <i class="fa-solid fa-magnifying-glass"></i>tìm kiếm
                    </div>

                </div>
            </div>
        </div>

        <div class="nav">
            <nav class="">
                <div class="row">
                    <div class="col-8">
                        <ul class="menu">
                            <li><a href="#">Home</a></li>
                            <li>
                                <a href="#">Liên hệ</a>
                                <ul class="submenu">
                                    <li><a href="#">Sdt:029938483</a></li>
        
                                </ul>
                            </li>
                            <li>
                                <a href="#">Áo nam</a>
                                <ul class="submenu">
                                    <li><a href="#">Jacket</a></li>
                                    <li><a href="#">Sweater</a></li>
                                    <li><a href="#">Hoodie</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Áo nữ</a>
                                <ul class="submenu">
                                    <li><a href="#">Jacket</a></li>
                                    <li><a href="#">Sweater</a></li>
                                    <li><a href="#">Hoodie</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4 find">    
                         <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form></div>
                </div>
             
           
            </nav>
        </div>




        <div class="slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ @asset('img/sld1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ @asset('img/sld2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ @asset('img/sld3.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

  
     
        @foreach ($list_category as $cat)
        <x-product-home :cat='$cat' />
         @endforeach


         

{{-- 
         <div class="main-title text-center">
            <h2 class="tp_title">Sản phẩm nổi bật</h2>
            <div class="shop-now">
                <a href="/product?show=hot">Xem thêm</a>
            </div>
        </div>
        <div class="row clearfix border-top">
            <div class="meunu5 ">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-4 g-4 mt-1">
                        <style>
                            .card-text {
                                color: #a29c9cd7;
                            }

                            .align-right {
                                padding-left: 20px;
                            }
                        </style>
                        <div class="col">
                            <div class="card">
                                <a class="csw-media" href="#">

                                    <img src=" {{ @asset('img/ao1.jpg') }}" width="270px" alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        Outerity Winter Night Double Zip Jacket / Black
                                    </h5>

                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text text-danger text-bold align-right">890.000
                                            </p>
                                            </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text  card_price_after_sale text-decoration-line-through">
                                                900.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .card-text {
                                color: #a29c9cd7;
                            }

                            .align-right {
                                padding-left: 20px;
                            }
                        </style>
                        <div class="col">
                            <div class="card">
                                <a class="csw-media" href="#">
                                    <img src="{{ @asset('img/ao2.jpg') }}" width="270px" alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center">

                                        Outerity Winter Night Double Zip Jacket / Black
                                    </h5>

                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text text-danger text-bold align-right">890.000
                                            </p>
                                            </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text  card_price_after_sale text-decoration-line-through">
                                                990.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .card-text {
                                color: #a29c9cd7;
                            }

                            .align-right {
                                padding-left: 20px;
                            }
                        </style>
                        <div class="col">
                            <div class="card">
                                <a class="csw-media" href="#">

                                    <img src="{{ @asset('img/ao3.jpg') }}" width="270px" alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center">

                                        Outerity Sweater Collection TÉ / Brown
                                    </h5>

                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text text-danger text-bold align-right">590.000
                                            </p>
                                            </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text  card_price_after_sale text-decoration-line-through">
                                                990.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .card-text {
                                color: #a29c9cd7;
                            }

                            .align-right {
                                padding-left: 20px;
                            }
                        </style>
                        <div class="col">
                            <div class="card">
                                <a class="csw-media" href="#">

                                    <img src="{{ @asset('img/ao4.jpg') }}" width="270px" alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center">

                                        Outerity Sweater Collection TÉ / Brown
                                    </h5>

                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text text-danger text-bold align-right">590.000
                                            </p>
                                            </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text  card_price_after_sale text-decoration-line-through">
                                                990.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <div class="main-title text-center">
            <h2 class="tp_title">Sweater</h2>
            <div class="shop-now">
                <a href="/product?show=hot">Xem thêm</a>
            </div>
        </div>
        <div class="row clearfix border-top">
            <div class="meunu5 ">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-4 g-4 mt-1">
                        <style>
                            .card-text {
                                color: #a29c9cd7;
                            }

                            .align-right {
                                padding-left: 20px;
                            }
                        </style>
                        <div class="col">
                            <div class="card">
                                <a class="csw-media" href="#">

                                    <img src="{{ @asset('img/ao1.jpg') }}" width="270px" alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        Outerity Winter Night Double Zip Jacket / Black
                                    </h5>

                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text text-danger text-bold align-right">890.000
                                            </p>
                                            </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text  card_price_after_sale text-decoration-line-through">
                                                900.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .card-text {
                                color: #a29c9cd7;
                            }

                            .align-right {
                                padding-left: 20px;
                            }
                        </style>
                        <div class="col">
                            <div class="card">
                                <a class="csw-media" href="#">
                                    <img src="{{ @asset('img/ao2.jpg') }}" width="270px" alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center">

                                        Outerity Winter Night Double Zip Jacket / Black
                                    </h5>

                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text text-danger text-bold align-right">890.000
                                            </p>
                                            </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text  card_price_after_sale text-decoration-line-through">
                                                990.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .card-text {
                                color: #a29c9cd7;
                            }

                            .align-right {
                                padding-left: 20px;
                            }
                        </style>
                        <div class="col">
                            <div class="card">
                                <a class="csw-media" href="#">

                                    <img src="{{ @asset('img/ao5.jpg') }}" width="270px" alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        Outerity Hoodie Newfont - Meow Collection / Red
                                    </h5>

                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text text-danger text-bold align-right">590.000
                                            </p>
                                            </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text  card_price_after_sale text-decoration-line-through">
                                                990.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .card-text {
                                color: #a29c9cd7;
                            }

                            .align-right {
                                padding-left: 20px;
                            }
                        </style>
                        <div class="col">
                            <div class="card">
                                <a class="csw-media" href="#">

                                    <img src="{{ @asset('img/ao6.jpg') }}" width="270px" alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center">

                                        Outerity Sweater Collection TÉ / Brown
                                    </h5>

                                    <div class="row">
                                        <div class="col-7">
                                            <p class="card-text text-danger text-bold align-right">590.000
                                            </p>
                                            </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="card-text  card_price_after_sale text-decoration-line-through">
                                                990.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div> 
    --}}
 

        <section class="tuyendung">
            <div class="container">
                <h2 class="text-center py-1">BÀI VIẾT MỚI NHẤT</h2>
                <div class="row py-1">
                    <div class="col-4">
                        <img src="img/f1.webp" width="90%" alt="">
                        <h4>TUYỂN DỤNG</h4>
                        <p>Bạn tìm việc khó, đã có Duy Tân đây?Vì Duy Tân đang tìm kiếm những mảnh ghép còn sót lại cho
                            team, chúng mình đang ngày đêm mong mỏi nhận được các CV đầy...</p>
                    </div>
                    <div class="col-4">
                        <img src="img/f2.webp" width="90%" alt="">
                        <h4>ABOUT US</h4>
                        <p>Nói chung là…Nếu bạn biết đến Duy Tân, thì hẳn bạn đã nghe qua câu slogan của shốp “Did you
                            Duy Tân something?”.Dịch nôm na là “Bạn đã từng, bỏ lỡ điều...</p>
                    </div>
                    <div class="col-4">
                        <img src="img/f3.webp" width="90%" alt="">
                        <h4>CÂU CHUYỆN BÁN QUẦN ÁO..</h4>
                        <p>Duy Tân - Bỏ lỡHi mọi người ^^Đó giờ mọi người đều rất thích hỏi cung tui câu chuyện khai
                            sinh ra Brand. Ai cũng biết Duy Tân là "Bỏ lỡ" rồi, nhưng...</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Thông tin liên hệ</h2>
                        <ul class="list-type-none">
                            <li> Địa chỉ: CN1: 403 Sư Vạn Hạnh, P.12, Q.10.</li>
                            <li>CN2: The New Playground, 90 Lê Lai, Q.1.</li>
                            <li>CN3: The New Playground, 26 Lý Tự Trọng, Q.1.</li>
                            <li>Điện thoại: 0772011702</li>
                            <li>Mail: Duy Tânclo@gmail.com</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h2>Xã hội</h2>
                        <ul class="iconn">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100022848323876">
                                    <i class="fab fa-facebook-f icon"></i> </a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-twitter icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-google-plus-g icon"></i></a>
                            </li>
                        </ul>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125532.72478005324!2d107.09723376497038!3d10.508727217815167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175734ae3c62469%3A0xc41ecba1c1a58675!2zVHAuIELDoCBS4buLYSwgQsOgIFLhu4thIC0gVsWpbmcgVMOgdSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1700051113279!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class=" text-center border-top py-2">
                Thiết kế bởi Duy Tân
            </div>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
        // Lấy carousel element
        var carousel = document.getElementById('carouselExampleCaptions');

        // Kích hoạt carousel
        var carouselInstance = new bootstrap.Carousel(carousel, {
            interval: 1500 // Thời gian (miligiây) giữa các slide
        });
    </script>
</body>

</html>
