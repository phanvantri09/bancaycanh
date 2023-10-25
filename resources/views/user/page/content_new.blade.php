@extends('user.index')
@section('css')
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="title-page pt-md-4 pt-2 pb-2 text-success">
                <h2>
                    @if (\App\Helpers\ConstCommon::getTypeByCategoy($blogs->id_category) == 2)
                        Dự án
                    @elseIf(\App\Helpers\ConstCommon::getTypeByCategoy($blogs->id_category) == 3)
                        Tin tức
                    @else
                        Danh mục cây
                    @endif
                </h2>
                <a href="{{ route('home') }}">Trang chủ</a> / <a
                    href="{{ route('list_project', ['category' => $blogs->id_category]) }}">{{ \App\Helpers\ConstCommon::getnameByIDCategory($blogs->id_category) }}</a>
                / {{ $blogs->name }}
            </div>
            <div class="bg-white new-card my-2 content-new">
                <img src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($blogs->img) }}" alt="">
                <div class="px-2">
                    <div class="d-flex justify-content-between pt-2">
                        <div class="new-type">{{ \App\Helpers\ConstCommon::getnameByIDCategory($blogs->id_category) }}</div>
                        <span class="text-grey">
                            {{$blogs->view}} lượt xem
                        </span>
                    </div>
                    <div class="new-title">{{ $blogs->name }}</div>
                    <p class="new-content pt-2">{!! $blogs->content_main !!}</p>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
@endsection
