@extends('user.index')
@section('css')
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="title-page pt-md-4 pt-2 pb-2 text-success">
                <a href="">Trang chủ</a> / <a href="">Cây công Trình</a> / <a href="">Cây ăn quả</a>
            </div>

            <div class="bg-white my-2 rounded product-detail">
                <div class="row p-2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-4 py-2">
                        <div class="slider-for">
                            <img src="https://cayxanhmientrung.com/wp-content/uploads/2023/02/anh-cay-xanh-1.jpg"
                                alt="">
                            <img src="https://vapa.vn/wp-content/uploads/2022/12/hinh-nen-cay-xanh-008.jpg" alt="">
                            <img src="https://vapa.vn/wp-content/uploads/2022/12/hinh-nen-cay-xanh-006.jpg" alt="">
                            <img src="https://vapa.vn/wp-content/uploads/2022/12/hinh-nen-cay-xanh-008.jpg" alt="">
                            <img src="https://vapa.vn/wp-content/uploads/2022/12/hinh-nen-cay-xanh-006.jpg" alt="">

                        </div>
                        <div class="slider-nav py-2">
                            <img src="https://cayxanhmientrung.com/wp-content/uploads/2023/02/anh-cay-xanh-1.jpg"
                                alt="">
                            <img src="https://vapa.vn/wp-content/uploads/2022/12/hinh-nen-cay-xanh-008.jpg" alt="">
                            <img src="https://vapa.vn/wp-content/uploads/2022/12/hinh-nen-cay-xanh-006.jpg" alt="">
                            <img src="https://vapa.vn/wp-content/uploads/2022/12/hinh-nen-cay-xanh-008.jpg" alt="">
                            <img src="https://vapa.vn/wp-content/uploads/2022/12/hinh-nen-cay-xanh-006.jpg" alt="">

                        </div>


                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-4 py-2 d-flex flex-column justify-content-between">
                        <h3 class="text-success mb-4">CÂY BỒ KẾT</h3>
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
                            <button class="btn bg-success text-white py-2 font-weight-bold">LIÊN HỆ ĐẶT MUA</button>
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
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><span class="font-weight-bold text-success">Danh mục: </span>Cây Bóng Mát, Cây Công Trình, Cây
                            Tâm Linh</p>

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
                        <div class="tab-pane container active" id="mota">
                            Cây Bồ Kết một cái tên gắn liền với 2 chữ quê hương, có ý nghĩa đặc biệt trong tiềm thức của bao
                            thế hệ Việt Nam. Mùi thơm ngai ngái của quả Bồ Kết hòa với hương lá bưởi, lá xả thơm nồng mang
                            tấm lòng thơm thảo của mình để giữ gìn mái tóc cho bao thế hệ các bà, các mẹ và những người con
                            gái quê.

                            “… Hương bồ kết chính là hương quê mẹ

                            Em giữ giùm trên mái tóc đông phương

                            Trên tóc mẹ – anh nghe từ thuở bé

                            Cái mùi thơm kỳ diệu của quê hương….”

                            Trước dòng chảy của thời đại, hình ảnh cây Bồ Kết không còn phổ biến như trước. Có nhiều người,
                            đặc biệt là các bạn trẻ không biết đến loài cây này, hoặc có biết nhưng không nắm rõ tác dụng, ý
                            nghĩa, cách trồng và chăm sóc của nó.

                            Bài viết dưới đây, với tư cách là một đơn vị mua bán cây Bồ Kết trồng công trình có kinh nghiệm
                            và am hiểu nhất định về cây, chúng tôi sẽ giới thiệu thật tường tận. Mời Quý vị cùng theo dõi!


                        </div>
                        <div class="tab-pane container fade" id="thongtinbosung">...</div>
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
