<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div>
        <!-- Start Menu -->
        @include('menu')
        <!-- End Menu -->
        <main>
            <div class="container">
                <div class="row">
                    <div class="card col-md-12">
                        <div class="card-header">
                          Cac tin
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($data as $i)

                                        <div class="card col-md-4 ms-2" style="width: 18rem;">
                                            <div class="card-body">
                                            <h5 class="card-title">{{$i->tenTin}}</h5>
                                            <p class="card-text">{{$i->tomTat}}</p>
                                            <p>Ngày đăng: {{$i->ngayDang}}</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        @include('footer')
    <!-- Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
