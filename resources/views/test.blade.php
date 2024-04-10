<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div>
        <!-- Start Menu -->
        @include('menu')
        <!-- End Menu -->
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner  " style="height: 480px">
                <div class="carousel-item active">
                    <img src="{{asset('uploads/sale.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('uploads/sale1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('uploads/banner.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class=" row text-bg-light text-center">
            <div class="col-sm-3"><img class="d-block w-75" src="{{asset('uploads/logo1.png')}}" alt=""></div>
            <div class="col-sm-3"><img class="d-block w-75" src="{{asset('uploads/logo2.png')}}" alt=""></div>
            <div class="col-sm-3"><img class="d-block w-75" src="{{asset('uploads/logo3.png')}}" alt=""></div>
            <div class="col-sm-3"><img class="d-block w-75" src="{{asset('uploads/logo4.png')}}" alt=""></div>
        </div>

        <h2 class="text-center text-white bg-secondary">SẢN PHẨM BÁN CHẠY</h2>
        <div class="container">
            <div class="row">
                @foreach ($data as $i)

                <div class="col-md-3 mb-4">
                    <div class="card w-100 text-center" style=" display: inline; ">
                        <img src="{{asset('uploads/'.$i->image)}}" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="" class="text-black"
                                    style="text-decoration: none">{{$i->TenSP}}</a> </h5>
                            <a class="card-text text-black" style="text-decoration: none"
                                href="">{{$i->Gia}}Đ</a> <br>
                            <a href="{{route('chitiet', $i->id)}}" class="btn btn-primary">Xem chi
                                tiết</a>

                            <a href="" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
        <div id="carouselExampleDark" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{asset('uploads/bg-khachhang.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption  text-white">

                        <h5>ĐÁNH GIÁ</h5>
                        <H5>KHÁCH HÀNG NÓI VỀ NVM PERFUME</H5>
                        <br>
                        <br>
                        <div class="row" style="margin-bottom: 5%; ">
                            <div class="col" style="border: 1px solid white; border-radius: 3%; margin-right: 2%;">
                                <i class="fa-solid fa-quote-left" style="color: #e3f02d;"></i>
                                <p>Mình rất hay ghé thăm NVM PERFUME, rất nhiều mùi hương mới lạ, thử là mê luôn</p>
                                <div class="row">
                                    <div class="col">
                                        <img class="rounded-circle w-50" src="{{asset('uploads/minh-hang.png')}}" alt="">

                                    </div>
                                    <div class="col">
                                        <span>Minh Hằng</span>
                                        <span>Cầu Giấy</span>
                                    </div>
                                    <div class="col"></div>

                                </div>
                            </div>
                            <div class="col" style="border: 1px solid white; border-radius: 3%;margin-right: 2%;">
                                <i class="fa-solid fa-quote-left" style="color: #e3f02d;"></i>
                                <p>Hàng chính hãng, đầy đủ bill, giá rẻ hơn so với các shop khác. Tư vấn mùi rất vừa ý
                                </p>
                                <div class="row">
                                    <div class="col">
                                        <img class="rounded-circle w-50" src="{{asset('uploads/hoang-thang.png')}}"
                                            alt="">

                                    </div>
                                    <div class="col">
                                        <span>HoàngThắng</span>
                                        <span>Nam Từ Liêm</span>
                                    </div>
                                    <div class="col"></div>

                                </div>
                            </div>
                            <div class="col" style="border: 1px solid white; border-radius: 3%;">
                                <i class="fa-solid fa-quote-left" style="color: #e3f02d;"></i>
                                <p>Mua nhiều lần ở NVM PERFUME lần nào cũng hài lòng từ cách đóng gói, giao hàng</p>
                                <div class="row">
                                    <div class="col">
                                        <img class="rounded-circle w-50" src="{{asset('uploads/trinh-chinh.png')}}"
                                            alt="">

                                    </div>
                                    <div class="col">
                                        <span>Trịnh Chinh</span>
                                        <span>Thanh Xuân</span>
                                    </div>
                                    <div class="col"></div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('uploads/bg-khachhang.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ĐÁNH GIÁ</h5>
                        <H5>KHÁCH HÀNG NÓI VỀ NVM PERFUME</H5>
                        <br>
                        <br>
                        <div class="row" style="margin-bottom: 5%; ">
                            <div class="col" style="border: 1px solid white; border-radius: 3%; margin-right: 2%;">
                                <i class="fa-solid fa-quote-left" style="color: #e3f02d;"></i>
                                <p>Trở thành khách ruột của NVM PERFUME lúc nào không hay vì mùi nào cũng thích</p>
                                <div class="row">
                                    <div class="col">
                                        <img class="rounded-circle w-50" src="{{asset('uploads/nguyen-son.png')}}"
                                            alt="">

                                    </div>
                                    <div class="col">
                                        <span>Nguyễn Sơn</span>
                                        <span>Mỹ Đình</span>
                                    </div>
                                    <div class="col"></div>

                                </div>
                            </div>
                            <div class="col" style="border: 1px solid white; border-radius: 3%;margin-right: 2%;">
                                <i class="fa-solid fa-quote-left" style="color: #e3f02d;"></i>
                                <p>NVM PERFUME gói quà rất xinh, giao hàng rất nhanh vừa đặt đã thấy giao rồi</p>
                                <div class="row">
                                    <div class="col">
                                        <img class="rounded-circle w-50" src="{{asset('uploads/hong-thuy.png')}}" alt="">

                                    </div>
                                    <div class="col">
                                        <span>Hồng Thúy</span>
                                        <span>Hà Đông</span>
                                    </div>
                                    <div class="col"></div>

                                </div>
                            </div>
                            <div class="col" style="border: 1px solid white; border-radius: 3%;">
                                <i class="fa-solid fa-quote-left" style="color: #e3f02d;"></i>
                                <p>Nước hoa thì mua đâu cũng được nhưng thích cách mà NVM PERFUME phục vụ</p>
                                <div class="row">
                                    <div class="col">
                                        <img class="rounded-circle w-50" src="{{asset('uploads/thang.png')}}" alt="">

                                    </div>
                                    <div class="col">
                                        <span>Mạnh Thắng</span>
                                        <span>Cầu Giấy</span>
                                    </div>
                                    <div class="col"></div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon  text-white" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h2 class="text-center">CÓ THỂ BẠN MUỐN XEM?</h2>
        <div class="row  text-center" style="margin: 2% 10% 2% 10% ;">
            <div class="col">
                <img class="w-100" style="height: 250px;" src="{{asset('uploads/bg6.jpg')}}" alt="">
                <h6 class="m-2"> [REVIEW] La Vie Est Belle “kho báu quyến rũ” nhà Lancome</h6>
                <p>Lancome La Vie Est Belle là một chai nước hoa đang được rất nhiều quý cô [...] </p>
            </div>
            <div class="col">
                <img class="w-100" style="height: 250px;" src="{{asset('uploads/bg4.jpg')}}" alt="">
                <h6 class="m-2">[REVIEW] Nước hoa Chanel N5 hương thơm của sự ngọt ngào</h6>
                <p>Nước hoa Chanel N5 được ví như một “tác phẩm nghệ thuật” trong thế giới [...]</p>
            </div>
            <div class="col"><img class="w-100" style="height: 250px;" src="{{asset('uploads/bg5.jpg')}}" alt="">
                <h6 class="m-2 "> [REVIEW] Sữa tắm nước hoa Tesori D’oriente mùi nào thơm nhất?</h6>
                <p>Sữa tắm Tesori D’Oriente là một thương hiệu không quá mới. Tuy nhiên trong thời [...]</p>
            </div>
        </div>
        <div class="text-center p-5 " style="background-color: rgb(200, 248, 248);">
            <p class="m-lg-5 ">Since 2014, hơn 9 năm phân phối sản phẩm nước hoa xách tay chính hãng giá rẻ, hàng xách
                tay trực
                tiếp từ Store Pháp, EU. NVM PERFUME tọt TOP 10 địa chỉ mua nước hoa uy tín nhất tại Hà Nội theo đánh giá
                của
                Toplist.vn. Chúng tôi không chỉ bán nước hoa. Chúng tôi bán những trải nghiệm tuyệt với về những mùi
                hương tuyệt
                vời.</p>
            <p>FOUNDER. Hoàng Hạnh</p>
        </div>
        <!-- Footer -->
        @include('footer')
        <!-- Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>