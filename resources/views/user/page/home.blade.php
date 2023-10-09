@extends('user.index')
@section('css')
@endsection
@section('content')
    <main>
        <div class="container">
            <!-- slider -->
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://caybamien.vn/wp-content/themes/ocolus/images/banner-home-caybamien-moi.jpg"
                            alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="https://ktmt.vnmediacdn.com/images/2021/11/30/13-1638242620-cay-xanh-1.jpg"
                            alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="https://danviet.mediacdn.vn/2021/5/4/1-16201262148371204304011.jpg" alt="">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <!-- sleder end -->
            <div class="bg-white my-2">
                <div class="d-flex justify-content-between align-items-center p-2 border-bottom">
                    <h2>Cây Nổi Bật</h2>
                    <a href="" class="text-success">Xem thêm cây>></a>
                </div>
                <div class="row p-1">

                    @foreach ($productNew as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                        <div class="product-card">
                            <a href="">
                                <img src="https://vapa.vn/wp-content/uploads/2022/12/hinh-nen-cay-xanh-006.jpg"
                                    alt="">
                                <div class="product-title py-2 px-1">Cây tre vàng</div>
                            </a>
                            <div class="product-card-button w-100 d-flex justify-content-center">
                                <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                    <div class="btn-contact-content">Liên hệ đặt mua</div>
                                    <button class="btn-contact">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                    <div class="btn-see-content">Xem nhanh</div>
                                    <button class="btn-see">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="bg-white my-2">
                <div class="d-lg-flex d-block justify-content-between align-items-center p-2">
                    <h2>Cây Công Trình</h2>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-head" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#category11">Category 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#category12">Category 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#category13">Category 3</a>
                        </li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="category11" class="container tab-pane active">
                        <div class="row p-1">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://afamilycdn.com/thumb_w/650/150157425591193600/2020/2/23/photo-0-1502683544150-1582398096848224681684.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://cafebiz.cafebizcdn.vn/2020/2/23/photo-5-15824292599702014292693.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://afamilycdn.com/thumb_w/650/150157425591193600/2020/2/23/photo-0-1502683544150-1582398096848224681684.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://cafebiz.cafebizcdn.vn/2020/2/23/photo-5-15824292599702014292693.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="d-flex justify-content-center py-3">
                            <button class="btn btn-see-more-product d-flex align-items-center py-3 px-4">
                                Xem danh mục &nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path
                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div id="category12" class="container tab-pane fade">
                        <div class="row p-1">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="category13" class="container tab-pane fade">
                        <div class="row p-1">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white my-2">
                <div class="d-md-flex d-block baner-introduction">
                    <div class="col-md-6 col-sm-12 px-0 py-md-0 pb-2 baner-introduction-border">
                        <img src="https://images.pexels.com/photos/1796727/pexels-photo-1796727.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 px-0 py-md-0 pb-2 baner-introduction-border">
                        <img src="https://3.bp.blogspot.com/-IOHd-JuQRqA/W1WDy1GiKKI/AAAAAAAABfU/m7022vox5dMp2IWBVonB489GBPediQELgCLcBGAs/s640/hinh-anh-hoa-dep-1.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="bg-white my-2">
                <div class="d-lg-flex d-block justify-content-between align-items-center py-md-2 py-0 px-2">
                    <h2>Cây Nội Thất</h2>
                    <ul class="nav nav-tabs tabs-head" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#category21">Category 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#category22">Category 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#category23">Category 3</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="category21" class="container tab-pane active">
                        <div class="row p-1">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="d-flex justify-content-center py-3">
                            <button class="btn btn-see-more-product d-flex align-items-center py-3 px-4">
                                Tất cả sản phẩm &nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path
                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div id="category22" class="container tab-pane fade">
                        <div class="row p-1">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="category23" class="container tab-pane fade">
                        <div class="row p-1">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                <div class="product-card">
                                    <a href="">
                                        <img src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                            alt="">
                                        <div class="product-title py-2 px-1">Cây tre vàng</div>
                                    </a>
                                    <div class="product-card-button w-100 d-flex justify-content-center">
                                        <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                            <div class="btn-contact-content">Liên hệ đặt mua</div>
                                            <button class="btn-contact">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                            <div class="btn-see-content">Xem nhanh</div>
                                            <button class="btn-see">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white my-2">
                <div class="d-lg-flex d-block justify-content-between align-items-center py-md-2 py-0 px-2">
                    <h2>Tin tức - Sự kiện</h2>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-head" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#new1">Category 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#new2">Category 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#new3">Category 3</a>
                        </li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="new1" class="container tab-pane active">
                        <div class="row p-1">
                            <div class="col-md-4 col-sm-6 col-12 py-2">
                                <div class="new-card">
                                    <a href="">
                                        <div class="img-wrapper">
                                            <img class="inner-img"
                                                src="https://www.canhquanxanh.com.vn/images/images/news/loiichcayxanh_3_.jpg"
                                                alt="">
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="new-type pt-2 ">Kiến thức chăm sóc cây</div>
                                    </a>
                                    <a href="">
                                        <div class="new-title">Cây tre vàng</div>
                                    </a>
                                    <p class="new-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
                                        quae pariatur voluptatem exercitationem inventore fugiat animi, voluptas sunt
                                        libero consequatur unde molestias rem illo deserunt qui dolorem tempora
                                        perspiciatis iure.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="d-flex justify-content-center py-3">
                            <button class="btn btn-see-more-new  d-flex align-items-center py-3 px-4">
                                Xem thêm &nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path
                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div id="new2" class="container tab-pane fade">
                        fsdr
                    </div>
                    <div id="new3" class="container tab-pane fade">
                        sdfsd
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
@endsection
