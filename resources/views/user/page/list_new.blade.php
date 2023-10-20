@extends('user.index')
@section('css')
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="title-page pt-md-4 pt-2 pb-2 text-success">
                <h2>Tin Tức</h2>
                <a href="{{ route('home') }}">Trang chủ</a> / <a href="{{ route('list_new') }}">Tin tức</a> / <a href="{{ route('list_new', ['category'=>$idCate]) }}">{{$linkCategory==true ? \App\Helpers\ConstCommon::getnameByIDCategory($idCate) : ''}}</a>
            </div>

            <div class="bg-white my-2">
                <div class="row p-3">
                    @foreach ($list_new as $item)
                    <div class="col-md-4 col-sm-6 col-12 mb-4">
                        <div class="new-card">
                            <a href="{{ route('content_new', ['id'=>$item->id]) }}">
                                <div class="img-wrapper">
                                    <img class="inner-img"
                                        src="{{\App\Helpers\ConstCommon::getLinkImageToStorage($item->img) }}"
                                        alt="">
                                </div>
                            </a>
                            <a href="{{ route('list_new', ['category'=>$item->id_category]) }}">
                                <div class="new-type pt-2 ">{{\App\Helpers\ConstCommon::getnameByIDCategory($item->id_category) }}</div>
                            </a>
                            <a href="{{ route('content_new', ['id'=>$item->id]) }}">
                                <div class="new-title">{{$item->name}}</div>
                            </a>
                            <p class="new-content">{{$item->content_pre}}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </main>
@endsection
@section('script')
@endsection
