<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div>
        <!-- Start Menu -->
        @include('menu')
        <!-- End Menu -->
        <h3 class="pt-5">TẤT CẢ SẢN PHẨM</h3>
        <div class="row">
            @foreach ($data as $i)

            <div class="col-md-3 mb-4" >
                <div class="card w-100 text-center" style=" display: inline; ">
                    <img src="{{asset('uploads/'.$i->image)}}" class="card-img-top w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="" class="text-black"
                                style="text-decoration: none">{{$i->TenSP}}</a> </h5>
                        <a class="card-text text-black" style="text-decoration: none" href="">{{$i->Gia}}Đ</a> <br>
                        <a href="{{route('chitiet', $i->id)}}" class="btn btn-primary">Xem chi
                            tiết</a>

                        <a href="" class="btn btn-primary">Mua ngay</a>
                    </div>
                </div>
            </div>

            @endforeach


        </div>







        <!-- Footer -->
        @include('footer')
        <!-- Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>