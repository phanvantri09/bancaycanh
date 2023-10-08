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
                    <form action="{{ route('contact.addPost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" name="name"  class="form-control" placeholder="Enter ..."
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email"  class="form-control" placeholder="Enter ..."
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="tel" name="tel"  class="form-control" placeholder="Enter ..."
                                            value="{{ old('tel') }}">
                                        @error('tel')
                                            <div class="alert alert-danger">{{ $errors->first('tel') }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea class="form-control" name="content" rows="3" placeholder="Enter ...">
                                            {{ empty(old('content')) ? '' : old('content') }}
                                        </textarea>
                                        @error('content')
                                            <div class="alert alert-danger">{{ $errors->first('content') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
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
