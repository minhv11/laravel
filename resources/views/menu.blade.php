<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('test')}}">NVM PERFUME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('test')}}">TRANG CHỦ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('sanpham')}}">SẢN PHẨM</a>
          </li>
          
          
          @php
              $data_arr = DB::table('loaitin')->select('id', 'tenLoai')->get();
          @endphp
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BLOG
          </a>
          <ul class="dropdown-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('tin-tuc')}}">Tất Cả Tin Tức</a>
          </li>
            <li>@foreach ($data_arr  as $item)
          <li class="nav-item">
            <a class="nav-link" href="{{route('tin-cua-loai', $item->id)}}">{{ $item->tenLoai }}</a>
          </li>
          @endforeach</li>
            
            
          </ul>
        </li>
          <!-- @foreach ($data_arr  as $item)
          <li class="nav-item">
            <a class="nav-link" href="{{route('tin-cua-loai', $item->id)}}">{{ $item->tenLoai }}</a>
          </li>
          @endforeach -->
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TÀI KHOẢN
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('login')}}">ĐĂNG NHẬP</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">ĐĂNG KÝ</a></li>
            
          </ul>
        </li>
        </ul>
        
      </div>
    </div>
</nav>
