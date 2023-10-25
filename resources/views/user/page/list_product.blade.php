@extends('user.index')
@section('css')
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="title-page pt-md-4 pt-2 pb-2 text-success">
                <h2>{{ $category_item->name ?? $category->name ?? null }}</h2>
                <a href="{{ route('home') }}">Trang chủ</a>
                @if (!empty($category->id))
                    / <a href="">{{ \App\Helpers\ConstCommon::getnameByIDCategory($category->id) }}</a>
                @endif
                @if (!empty($category_item->id))
                    / <a href="{{ route('list_product', ['category_item' => $category_item->id]) }}">
                        {{ \App\Helpers\ConstCommon::getnameByIDCategoryItem($category_item->id) }}</a>
                @endif
            </div>
            @if (!empty($category_item->content))
                <div class="content-page text-justify bg-white p-2">
                    {!! $category_item->content !!}
                </div>
            @endif

            <div class="row p-1 my-2">
                @foreach ($product as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 py-2">
                        <div class="product-card bg-white">
                            <a href="{{ route('product_detail', ['id' => $item->id]) }}">
                                <img src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($item->img) }}" alt="">
                                <div class="product-title py-2 px-1">{{ $item->name ?? null }}</div>
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
    </main>
@endsection
@section('script')
@endsection
