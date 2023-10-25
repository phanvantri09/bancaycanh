@extends('admin.index')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">
                        {{-- @isset($title)
                            {{ $title }}
                        @else
                            Chưa có tiêu đề cho trang này
                        @endisset --}}
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('product.editPost',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter ..."
                                        value="{{ old('name', $data->name) }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Nội dung xem trước</label>
                                    <textarea class="form-control" name="content_pre" rows="3" placeholder="Enter ...">{{ empty(old('content_pre')) ? $data->content_pre : old('content_pre') }}</textarea>
                                    @error('content_pre')
                                        <div class="alert alert-danger">{{ $errors->first('content_pre') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Loại thành phần</label>
                                    <select name="id_category_item" class="form-control">
                                        @foreach ($id_category_item as $key => $item)
                                            <option {{$item->id ==$data->id_category_item ? 'selected' : ''}} value="{{ $item->id }}"> {{\App\Helpers\ConstCommon::getnameByIDCategory($item->id_category)}} | {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_category_item')
                                    <div class="alert alert-danger">{{ $errors->first('id_category_item') }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <!-- select -->
                                <img height="200px" width="230px" src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($data->img ?? null) }}" alt="">

                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input type="file" name="img" class="form-control">
                                </div>
                            </div>

                            @error('img')
                                <div class="alert alert-danger">{{ $errors->first('img') }}</div>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu lại</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
