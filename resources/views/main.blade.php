<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API test</title>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container my-5">
            
                @foreach($provinciasArray as $provincia)
                
                   
                        <p class="card-text">{{$provincia['title']}}</p>
                    
                  
                @endforeach
            
        </div>
    </body>
</html>