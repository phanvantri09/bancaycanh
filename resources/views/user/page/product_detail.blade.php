@extends('user.index')
@section('css')
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="title-page pt-md-4 pt-2 pb-2 text-success">
                <a href="{{ route('home') }}">Trang chủ</a> /
                <a href="{{ route('list_product', ['category'=>$product->id_category]) }}">{{\App\Helpers\ConstCommon::getnameByIDCategory($product->id_category) }}</a> /
                <a href="{{ route('list_product', ['category_item'=>$product->id_category_item]) }}">{{\App\Helpers\ConstCommon::getnameByIDCategoryItem($product->id_category_item) }}</a> /
                <a href="{{ route('product_detail', ['id'=>$product->id]) }}">{{$product->name}}</a>
            </div>

            <div class="bg-white my-2 rounded product-detail">
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-4 py-2">
                        <div class="slider-for">
                            <img src="{{\App\Helpers\ConstCommon::getLinkImageToStorage($product->img) }}"
                                alt="">
                            @foreach ($image as $item)
                            <img src="{{\App\Helpers\ConstCommon::getLinkImageToStorage($item->img_url) }}"
                                alt="">
                            @endforeach

                        </div>
                        <div class="slider-nav py-2">
                            <img src="{{\App\Helpers\ConstCommon::getLinkImageToStorage($product->img) }}"
                                alt="">
                            @foreach ($image as $item)
                            <img src="{{\App\Helpers\ConstCommon::getLinkImageToStorage($item->img_url) }}"
                                alt="">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-4 py-2 d-flex flex-column justify-content-between">
                        <div class="d-flex justify-content-between">
                            <h3 class="text-success mb-4">{{$product->name}}</h3>
                            <span class="text-grey">
                                {{$product->view}} lượt xem
                            </span>
                        </div>
                        <ul>
                            <li><b>Giá tốt so với thị trường</b></li>
                            <li><b>Giao hàng toàn quốc</b> (phí theo đơn hàng)</li>
                            <li><b>Bảo hành uy tín</b></li>
                            <li><b>Cây đẹp tuyển chọn, dễ sống</b></li>
                            <li><b>Tặng kèm thuốc kích rễ</b></li>
                            <li><b>Tư vấn miễn phí trồng và chăm sóc</b></li>
                            <li><b>Lỗi 1 đổi 1 nếu cây không đúng quy cách</b></li>
                        </ul>
                        <p>Cây Xanh Long Nguyên cung cấp sỉ lẻ cây xanh công trình, dịch vụ cây xanh uy tín số lượng
                            lớn, báo giá tốt, giao trồng uy tín.</p>
                        <p><b>Liên hệ: <span class="text-danger">0968060303</span></b> để được tư vấn miễn phí.</p>
                        <p><b>Email:</b> cayxanhlongnguyen@gmail.com</p>
                        <div>
                            <button class="btn bg-success text-white py-2 font-weight-bold">
                                <a class="text-white" href="tel:+84968060303">LIÊN HỆ ĐẶT MUA</a>
                            </button>
                        </div>
                        <div class="text-success">
                            <p class="text-center mb-0"><b>Phương thức thanh toán</b></p>
                            <hr>
                            <img src="https://caybamien.vn/wp-content/uploads/2021/07/phuong-thuc-thanh-toan-01.jpg"
                                alt="" width="100%">
                            <hr>
                        </div>

                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                            <u>
                                Xem thông tin giao hàng
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-truck" viewBox="0 0 16 16">
                                    <path
                                        d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                            </u>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog shipping-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header product-shipping">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                              <tr class="text-success">
                                                <th>VÙNG</th>
                                                <th>VÍ TRÍ</th>
                                                <th>PHƯƠNG THỨC GIAO HÀNG</th>
                                                <th>LOẠI HÌNH GIAO VẬN</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>Vùng còn lại</td>
                                                <td>Mọi nơi</td>
                                                <td>...</td>
                                                <td>...</td>
                                              </tr>
                                              <tr>
                                                <td>Việt Nam</td>
                                                <td>Việt Nam</td>
                                                <td>Giao tại cửa hàng</td>
                                                <td>...</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><span class="font-weight-bold text-success">Danh mục: </span>{{\App\Helpers\ConstCommon::getnameByIDCategory($product->id_category) }}, {{\App\Helpers\ConstCommon::getnameByIDCategoryItem($product->id_category_item) }}</p>

                    </div>
                </div>
            </div>
            <div class="bg-white my-3 rounded product-detail">
                <div class="p-2">
                    <ul class="nav nav-tabs d-flex justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#mota">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#thongtinbosung">Thông tin bổ sung</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content border-top mt-2">
                        <div class="tab-pane container active py-1 py-md-3" id="mota">{!!$product->description!!}</div>
                        <div class="tab-pane container fade py-1 py-md-3" id="thongtinbosung">{!!$product->info_bonus!!}</div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
@section('script')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                centerMode: true,
                focusOnSelect: true,
                prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
                nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
            });
        });
    </script>
@endsection
