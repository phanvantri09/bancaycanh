@extends('admin.index')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        .cover-image {
            width: 200px;
            position: relative;
        }

        .cover-image img {
            width: 100%;
            height: auto;
        }
    </style>
@endsection
@section('content')
    <div class="m-3">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h3>
                    <i class="fas fa-pen"></i> Tên sản phẩm: {{ $data->name }}
                    <small class="float-right"><span>Ngày tạo: {{ $data->created_at }}</span> - Ngày sửa:
                        {{ $data->updated_at }}</small>
                </h3>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info border p-5 mt-5">
            <div class="col-12 col-sm-4 invoice-col">
                <img height="auto" width="100%" src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($data->img ?? null) }}" alt="">
                <br>
                <b>Mã sản phẩm:</b> {{ $data->id }}<br>
                <b>Loại:</b> <span class="border p-1">{{ \App\Helpers\ConstCommon::getnameByIDCategory($data->id_category) }}</span><br>
                <b>Loại thành phần:</b> <span class="border p-1">{{ \App\Helpers\ConstCommon::getnameByIDCategoryItem($data->id_category_item) }}</span><br>
                <b>Nội dung xem trước: </b> {{ $data->content_pre }}
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row p-5">
            <h3 class="col-12">Ảnh thành phần</h3>
            @if (count($getAllByIDProductItem))
                @foreach ($getAllByIDProductItem as $key => $item)
                    <div class="col-md-4">
                        <div class="d-flex flex-column">
                            <img style="width: 100%;height: auto; object-fit: cover;" class="rounded"
                                src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($item->img_url ?? null) }}">
                            <div class=" d-flex align-items-center">
                                <a href="{{ route('product.deleteImage', ['id' => $item->id]) }}" type="button"
                                    class="btn btn-outline-danger btn-block btn-sm"><i class="fa fa-book"></i> Xóa ảnh</a>
                            </div>
                    </div>
                    </div>
                @endforeach
            @else
                <p>Chưa có ảnh</p>
            @endif
        </div>
        <div class="row border p-1">
            <div class="col-12 mt-4 border p-2">
                <h3>Mô tả</h3>
                <div>
                    {!! $data->description ?? null !!}
                </div>
            </div>
            <div class="col-12 mt-4 border p-2">
                <h3>Thông tin chi tiết</h3>
                <div>
                    {!! $data->info_bonus ?? null !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
