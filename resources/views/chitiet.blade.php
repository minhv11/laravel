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
    <div class="container">
        <!-- Start Menu -->
        @include('menu')
        <!-- End Menu -->
        <div class="row">
            <div class="col-6">
            <img  src="{{asset('uploads/'.$detail->image)}}" class="card-img-top w-75" alt="...">
            
            </div>
            <div class="col-6">
                <h5>Ten sp: {{ $detail->TenSP }}</h5>
                <p>Gia: {{$detail->Gia}}</p>
                <div class="row">
                    <div class="col-6"><input class="" type="number" name="" id=""min=0 "></div>
                    <div class="col-6"><input type="button" value="Mua Hang"></div>
                </div>
            </div>

            
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