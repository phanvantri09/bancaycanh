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
                    <form action="{{ route('product.adddetailPost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <h3>Sản phẩm: {{$product->name}}</h3>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" name="id_product" value="{{$id}}">
                                    <label>Nội dung chính</label>
                                    <textarea name="description"  id="summernote">
                                        {!! empty(old('description')) ? ($productDetail->description ?? null) : old('description') !!}
                                    </textarea>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Thông tin bổ sung</label>
                                    <textarea name="info_bonus"  id="summernote2">
                                        {!! empty(old('info_bonus')) ? ($productDetail->info_bonus ?? null) : old('info_bonus') !!}
                                    </textarea>
                                    @error('info_bonus')
                                        <div class="alert alert-danger">{{ $errors->first('info_bonus') }}</div>
                                    @enderror
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
<script src="../../plugins/codemirror/codemirror.js"></script>
    <script src="../../plugins/codemirror/mode/css/css.js"></script>
    <script src="../../plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote(
                {
                    minHeight: 400,
                }
            )
            $('#summernote2').summernote(
                {
                    minHeight: 400,
                }
            )
            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        });
    </script>
@endsection
