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
                    <h2 class="text-success">Cây Nổi Bật</h2>
                    <a href="{{ route('list_product') }}" class="text-success">Xem thêm cây>></a>
                </div>
                <div class="row p-1">
                    @foreach ($productNew as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                            <div class="product-card">
                                <a href="{{ route('product_detail', ['id' => $item->id]) }}">
                                    <img src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($item->img) }}"
                                        alt="">
                                    <div class="product-title py-2 px-1">{{ $item->name }}</div>
                                </a>
                                <div class="product-card-button w-100 d-flex justify-content-center">
                                    <div class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                        <div class="btn-contact-content">Liên hệ</div>
                                        <button class="btn-contact">
                                            <a href="tel:+84968060303">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                </svg>
                                            </a>
                                        </button>
                                    </div>
                                    <div class="product-btn-see w-50 d-flex flex-column align-items-center">
                                        <div class="btn-see-content">Xem nhanh</div>
                                        <button class="btn-see" data-toggle="modal"
                                            data-target="#seeModal{{ $item->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="seeModal{{ $item->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="seeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-see-detail" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="seeModalLabel">Thông tin sản phẩm</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-4 py-2">
                                                <div class="slider-for">
                                                    <img src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($item->img) }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-6 col-md-6 col-sm-12 col-12 px-4 py-2 d-flex flex-column justify-content-between">
                                                <h3 class="text-success">{{ $item->name }}</h3>
                                                <ul>
                                                    <li><b>Giá tốt so với thị trường</b></li>
                                                    <li><b>Giao hàng toàn quốc</b> (phí theo đơn hàng)</li>
                                                    <li><b>Bảo hành uy tín</b></li>
                                                    <li><b>Cây đẹp tuyển chọn, dễ sống</b></li>
                                                    <li><b>Tặng kèm thuốc kích rễ</b></li>
                                                    <li><b>Tư vấn miễn phí trồng và chăm sóc</b></li>
                                                    <li><b>Lỗi 1 đổi 1 nếu cây không đúng quy cách</b></li>
                                                </ul>
                                                <p>Cây Xanh Long Nguyên cung cấp sỉ lẻ cây xanh công trình, dịch vụ cây xanh
                                                    uy tín số lượng
                                                    lớn, báo giá tốt, giao trồng uy tín.</p>
                                                <p><b>Liên hệ: <span class="text-danger">0968060303</span></b> để được tư
                                                    vấn miễn phí.</p>
                                                <p><b>Email:</b> cayxanhlongnguyen@gmail.com</p>
                                                <div>
                                                    <button class="btn bg-success text-white py-2 font-weight-bold">
                                                        <a class="text-white" href="tel:+84968060303">
                                                            LIÊN HỆ ĐẶT MUA
                                                        </a>
                                                        </button>
                                                </div>
                                                <div class="text-success">
                                                    <p class="text-center mb-0"><b>Phương thức thanh toán</b></p>
                                                    <hr>
                                                    <img src="https://caybamien.vn/wp-content/uploads/2021/07/phuong-thuc-thanh-toan-01.jpg"
                                                        alt="" width="100%">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            @php
                $index = 0;
            @endphp
            @foreach ($cacheProductCategory as $keyy => $cacheProductCatego)
                @php
                    $index++;
                @endphp
                <div class="bg-white my-2">
                    <div class="d-lg-flex d-block justify-content-between align-items-center p-2">
                        <h2 class="text-success">{{ \App\Helpers\ConstCommon::getnameByIDCategory($keyy) }}</h2>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-head" role="tablist">
                            @php
                                $counttttt = 0;
                            @endphp
                            @foreach ($cacheProductCatego as $key => $cacheProductCat)
                                @php
                                    $counttttt++;
                                @endphp
                                <li class="nav-item">
                                    <a class="nav-link {{ $counttttt > 1 ? '' : 'active' }}" data-toggle="tab"
                                        href="#category{{ $key }}">{{ \App\Helpers\ConstCommon::getnameByIDCategoryItem($key) }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <!-- Tab panes -->
                    @php
                        $count = 0;
                    @endphp

                    <div class="tab-content">
                        @foreach ($cacheProductCatego as $keyyy => $cacheProductCat)
                            @php
                                $count++;
                            @endphp
                            <div id="category{{ $keyyy }}"
                                class="container tab-pane {{ $count > 1 ? 'fade' : 'active' }}">
                                <div class="row p-1">
                                    @foreach ($cacheProductCat as $product)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                                            <div class="product-card">
                                                <a href="{{ route('product_detail', ['id' => $product->id]) }}">
                                                    <img src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($product->img) }}"
                                                        alt="">
                                                    <div class="product-title py-2 px-1">{{ $product->name ?? null }}
                                                    </div>
                                                </a>
                                                <div class="product-card-button w-100 d-flex justify-content-center">
                                                    <div
                                                        class="product-btn-contact w-50 d-flex flex-column align-items-center">
                                                        <div class="btn-contact-content">Liên hệ</div>
                                                        <button class="btn-contact">
                                                            <a href="tel:+84968060303">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                                </svg>
                                                            </a>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="product-btn-see w-50 d-flex flex-column align-items-center">
                                                        <div class="btn-see-content">Xem nhanh</div>
                                                        <button class="btn-see" data-toggle="modal"
                                                            data-target="#seeModal{{ $product->id }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-search"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="modal fade" id="seeModal{{ $product->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="seeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-see-detail" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="seeModalLabel">Thông tin sản phẩm</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-4 py-2">
                                                            <div class="slider-for">
                                                                <img src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($product->img) }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-12 col-12 px-4 py-2 d-flex flex-column justify-content-between">
                                                            <h3 class="text-success">{{ $product->name }}</h3>
                                                            <ul>
                                                                <li><b>Giá tốt so với thị trường</b></li>
                                                                <li><b>Giao hàng toàn quốc</b> (phí theo đơn hàng)</li>
                                                                <li><b>Bảo hành uy tín</b></li>
                                                                <li><b>Cây đẹp tuyển chọn, dễ sống</b></li>
                                                                <li><b>Tặng kèm thuốc kích rễ</b></li>
                                                                <li><b>Tư vấn miễn phí trồng và chăm sóc</b></li>
                                                                <li><b>Lỗi 1 đổi 1 nếu cây không đúng quy cách</b></li>
                                                            </ul>
                                                            <p>Cây Xanh Long Nguyên cung cấp sỉ lẻ cây xanh công trình, dịch vụ cây xanh
                                                                uy tín số lượng
                                                                lớn, báo giá tốt, giao trồng uy tín.</p>
                                                            <p><b>Liên hệ: <span class="text-danger">0968060303</span></b> để được tư
                                                                vấn miễn phí.</p>
                                                            <p><b>Email:</b> cayxanhlongnguyen@gmail.com</p>
                                                            <div>
                                                                <button class="btn bg-success text-white py-2 font-weight-bold">LIÊN HỆ
                                                                    ĐẶT MUA</button>
                                                            </div>
                                                            <div class="text-success">
                                                                <p class="text-center mb-0"><b>Phương thức thanh toán</b></p>
                                                                <hr>
                                                                <img src="https://caybamien.vn/wp-content/uploads/2021/07/phuong-thuc-thanh-toan-01.jpg"
                                                                    alt="" width="100%">
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    @endforeach

                                </div>
                                <a href="{{ route('list_product', ['category_item' => $keyyy]) }}"
                                    class="d-flex justify-content-center py-3">
                                    <button class="btn btn-see-more-product d-flex align-items-center py-md-3 px-md-4">
                                        Xem danh mục &nbsp;
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                            <path
                                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>

                @if ($index < count($cacheProductCategory))
                    <div class="bg-white my-2">
                        <div class="d-md-flex d-block baner-introduction">
                            <div class="col-md-6 col-sm-12 px-0 py-md-0 pb-2 baner-introduction-border">
                                <img src="https://images.pexels.com/photos/1796727/pexels-photo-1796727.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                    alt="">
                            </div>
                            <div class="col-md-6 col-sm-12 px-0 py-md-0 pb-2 baner-introduction-border">
                                <img src="https://3.bp.blogspot.com/-IOHd-JuQRqA/W1WDy1GiKKI/AAAAAAAABfU/m7022vox5dMp2IWBVonB489GBPediQELgCLcBGAs/s640/hinh-anh-hoa-dep-1.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="bg-white my-2">
                <div class="d-lg-flex d-block justify-content-between align-items-center py-md-2 py-0 px-2">
                    <h2 class="text-success">Tin tức - Sự kiện</h2>
                    <!-- Nav tabs -->
                    @php
                        $countttt = 0;
                    @endphp
                    <ul class="nav nav-tabs tabs-head" role="tablist">
                        @foreach ($cacheBlogCategoryItems as $key => $item)
                            @php
                                $countttt++;
                            @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $countttt > 1 ? '' : 'active' }}" data-toggle="tab"
                                    href="#new{{ $key }}">{{ \App\Helpers\ConstCommon::getnameByIDCategory($key) }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="tab-content">
                    @php
                        $countCC = 0;
                    @endphp
                    @foreach ($cacheBlogCategoryItems as $key => $item)
                        @php
                            $countCC++;
                        @endphp
                        <div id="new{{ $key }}"
                            class="container tab-pane {{ $countCC > 1 ? 'fade' : 'active' }}">
                            <div class="row p-1">
                                @foreach ($item as $itm)
                                    <div class="col-md-4 col-sm-6 col-12 py-2">
                                        <div class="new-card">
                                            <a href="{{ route('content_new', ['id'=>$itm->id]) }}">
                                                <div class="img-wrapper">
                                                    <img class="inner-img"
                                                        src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($itm->img) }}"
                                                        alt="">
                                                </div>
                                            </a>
                                            <a href="{{ route('list_new', ['category'=>$key]) }}">
                                                <div class="new-type pt-2 ">
                                                    {{ \App\Helpers\ConstCommon::getnameByIDCategory($key) }}</div>
                                            </a>
                                            <a href="{{ route('content_new', ['id'=>$itm->id]) }}">
                                                <div class="new-title">{{ $itm->name ?? null }}</div>
                                            </a>
                                            <p class="new-content">{!! $itm->content_pre ?? null !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <a href="{{ route('list_new', ['category'=>$key]) }}" class="d-flex justify-content-center py-3">
                                <button class="btn btn-see-more-new  d-flex align-items-center py-md-3 px-md-4">
                                    Xem thêm &nbsp;
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    @endforeach

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
