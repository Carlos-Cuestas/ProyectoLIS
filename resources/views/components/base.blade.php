@props(['val' => null,'tipo'=>null,'siso'=>true])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCG</title>
    <link rel="icon" href="qwe.ico">
    @vite('resources/js/app.js')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body{
            background-image: url('/img/white-concrete-wall.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    @if ($val != 'ini')
        <x-header/>
        <br>
        <div class="row">
            <div class="col-sm-3">
              <div class="card bg-transparent border-0">
                <div class="card-body">
                  <x-sidemenu controller="{{$tipo}}" :siso="$siso"/>
                </div>
              </div>
            </div>



            <div class="col-sm-8">
              <div class="card bg-transparent border-0 container">
                <div class="card-body">
                    {{ $slot }}
                </div>
              </div>
            </div>
          </div>


          <x-flashmessage/>
    @else

        {{ $slot }}

    @endif

    <x-footer/>
</body>
</html>
