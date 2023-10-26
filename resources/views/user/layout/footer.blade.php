<div class="container section-contact">
    <div class="bg-white my-3 p-2">
        <h4 class="text-success">Điền thông tin của bạn để nhận báo giá ưu đãi - Chúng tôi sẽ gọi lại ngay !
        </h4>
        <form action="{{ route('contact.addPost') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6 col-12">
                    <label for="inputName">Họ và tên</label>
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Họ và tên">
                    @error('name')
                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="inputSdt">Số điện thoại</label>
                    <input type="tel" name="tel" class="form-control" id="inputSdt" placeholder="039*******">
                    @error('tel')
                        <div class="alert alert-danger">{{ $errors->first('tel') }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="exampleContent">Lời nhắn</label>
                <textarea name="content" class="form-control" id="exampleFormContent" rows="3"></textarea>
                @error('content')
                    <div class="alert alert-danger">{{ $errors->first('content') }}</div>
                @enderror
            </div>
            <button type="submit" class="btn bg-success text-white font-weight-bold px-4 py-2 mb-2">GỬI</button>
        </form>
        <div class="bg-success-dark p-3 rounded">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 col-6 d-flex py-2">
                    <img src="https://demo4.drfuri.com/media/razzi/truck3.svg" alt="" width="15%">
                    <div class="pl-2">
                        <p class="mb-0"><b>Vận chuyển toàn quốc</b></p>
                        <p class="mb-0">Với đơn hàng từ 1.000.000đ</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 d-flex py-2">
                    <img src="https://demo4.drfuri.com/media/razzi/money.svg" alt="" width="15%">
                    <div class="pl-2">
                        <p class="mb-0"><b>Thanh Toán Linh Hoạt</b></p>
                        <p class="mb-0">Thanh toán khi nhận cây</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 d-flex py-2">
                    <img src="https://demo4.drfuri.com/media/razzi/box.svg" alt="" width="15%">
                    <div class="pl-2">
                        <p class="mb-0"><b>Mua Sắm Tiện Lợi</b></p>
                        <p class="mb-0">Tất cả sản phẩm mà bạn tìm kiếm</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 d-flex py-2">
                    <img src="https://demo4.drfuri.com/media/razzi/like.svg" alt="" width="15%">
                    <div class="pl-2">
                        <p class="mb-0"><b>Hơn 10,000 Khách Hàng</b></p>
                        <p class="mb-0">Chất lượng kiểm chứng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="container">
    <div class="bg-white my-3 p-2">
        <div class="row p-2">
            <div class="col-md-5 col-sm-12 col-12">
                <h5 class="text-success">Liên hệ chúng tôi</h5>
                <div class="footer-content">
                    <p>Công ty TNHH KD&XD Long Nguyên</p>
                    <p><b>Địa chỉ:</b> Tổ 13, thôn Tú Ngọc B, Xã Bình Tú, Huyện Thăng Bình, Tỉnh Quảng Nam</p>
                    <p><b>SĐT:</b> 0968060303</p>
                    <p><b>Email:</b> cayxanhlongnguyen@gmail.com</p>
                    <p><b>Ngày Làm Việc:</b> <i>Thứ Hai – CN</i></p>
                    <p><b>Giờ Làm Việc:</b> <i>08:00 – 21:00</i></p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6">
                <h5 class="text-success">Chính sách</h5>
                <div class="footer-content">
                    <p><a href="">Tiêu chí bán hàng</a></p>
                    <p><a href="">Cây công trình</a></p>
                    <p><a href="">Chính sách vận chuyển</a></p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6">
                <h5 class="text-success">Về chúng tôi</h5>
                <div class="footer-content">
                    <p><a href="{{ route('introduce') }}">Giới thiệu</a></p>
                    <p><a href="{{ route('contact') }}">Liên hệ</a></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-12">
                <h5 class="text-success">Danh mục nổi bật</h5>
                <div class="footer-content d-md-block d-flex flex-wrap">
                    @php
                        $categoryDMCItem = \App\Models\categoty::where('type', 1)->get();
                    @endphp
                    <ul class="list-unstyled p-0 m-0">
                        @foreach ($categoryDMCItem as $item)
                        <p class="px-md-0 px-2"><a href="{{ route('list_product', ['category' => $item->id]) }}">{{ $item->name }}</a></p>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-grey m-2 p-2">
            <span class="text-success font-weight-bold">Khu vực phục vụ:</span> <i>Đà Nẵng, Quảng Nam, Quảng Ngãi, Huế,
                Bình Định...</i>
        </div>
    </div>

</footer>
