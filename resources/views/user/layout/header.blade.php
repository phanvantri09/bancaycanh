
@php
   use App\Models\categoty;
   use App\Models\categoty_item;

   $category_item = categoty_item::all();
   $categoryDanhMucCay = categoty::where('type',1)->get();
   $categoryDuAn = categoty::where('type',2)->get();
   $categoryTinTuc = categoty::where('type',3)->get();
@endphp
<header class="px-2 py-3 py-lg-0 px-sm-0">
    <div class="container">
        <div class="row align-items-center justify-content-between pt-lg-3 pt-0">
            <div class="side-menu-close d-flex d-lg-none col-3 flex-wrap flex-column justify-content-center">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="{{ route('home') }}" title="Logo"
                class="header-logo d-flex justify-content-lg-start justify-content-center col-lg-2 col-6">
                Logo
            </a>

            <form class="form-inline form-search col-lg-9 justify-content-center d-lg-flex d-none"
                action="{{ route('search') }}" method="get">
                @csrf
                <input class="form-control w-75 h-100" type="text" value="{{ $_GET['key'] ?? null}}" name="key" placeholder="Tìm cây...">
                <button class="btn btn-success h-100" type="submit">Tìm</button>
            </form>

            <div class="col-lg-1 col-2 d-flex align-items-center justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </div>
            <nav class="d-none d-lg-block">
                <ul class="main-menu d-flex flex-column flex-lg-row align-items-lg-center list-unstyled p-0 m-0">
                    <li class="active">
                        <a href="{{ route('home') }}" class="d-block" title="Home">
                            <span>TRANG CHỦ</span>
                        </a>
                    </li>
                    <li>
                        <a  class="d-block" title="Services">
                            <span>DANH MỤC CÂY</span>
                        </a>
                        <ul class="sub-menu menu-flex list-unstyled p-0 m-0">
                            @foreach ($categoryDanhMucCay as $categoryDMC)
                            <li>
                                <a href="{{ route('list_product', ['category'=>$categoryDMC->id]) }}" class="d-block text-success" title="SERVICE 1">
                                    <span>{{$categoryDMC->name}}</span>
                                </a>
                                @php
                                    $categoryDMCItem = categoty_item::where('id_category', $categoryDMC->id)->get();
                                @endphp
                                <ul class="list-unstyled p-0 m-0">
                                    @foreach ($categoryDMCItem as $item)
                                        <li>
                                            <a href="{{ route('list_product', ['category'=>$categoryDMC->id ,'category_item'=>$item->id]) }}" class="d-block" title="SERVICE 1">
                                                <span>{{$item->name}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('list_new', ['type'=>3]) }}" class="d-block" title="Services">
                            <span>TIN TỨC</span>
                        </a>
                        <ul class="sub-menu list-unstyled p-0 m-0">
                            @foreach ($categoryTinTuc as $categoryTT)
                            <li>
                                <a href="{{ route('list_new', ['type'=>3]) }}" class="d-block text-success" title="SERVICE 1">
                                    <span>{{$categoryTT->name}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('list_project', ['type'=>2]) }}" class="d-block" title="About">
                            <span>DỰ ÁN</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('introduce') }}" class="d-block" title="Blog">
                            <span>GIỚI THIỆU</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="d-block" title="Contact">
                            <span>LIÊN HỆ</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
        <form class="form-inline form-search d-flex d-lg-none" action="{{ route('search') }}" method="get">
            @csrf
            <input class="form-control w-75" type="text" name="key" value="{{old('key')}}" placeholder="Tìm cây...">
            <button class="btn btn-success w-25" type="submit">Tìm</button>
        </form>
    </div>
</header>



<!-- side menu start -->
<div class="side-menu-wrap">
    <a href="{{ route('home') }}" title="Logo" class="side-menu-logo d-flex justify-content-center py-3">
        Logo
    </a>
    <nav class="side-menu-nav">
        <!-- auto generated side menu from top header menu -->
    </nav>
    <div class="side-menu-close d-flex flex-wrap flex-column align-items-center justify-content-center">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- side menu end -->
