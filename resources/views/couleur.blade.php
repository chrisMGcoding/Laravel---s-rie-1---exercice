<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href='{{asset('style.css')}}'>

    <title>Document</title>
</head>
<body>
    
    <h2>
        {{$couleur}}
    </h2>

    

    
    @foreach ($couleurTab as $couleur)

        @if($couleur == '#AC4D39')
            <p class="gras">bingo</p>

        @else 
            <p>{{$couleur}}</p>
            
        @endif

    @endforeach
    

</body>
</html>