<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Laravel Controll Structures!</h1>
    @if ($number > 0)
        <p>Records are greater than zero!</p>
    @else
        <p>Records are less than zero!</p>
    @endif

    @isset($x)
        <p>{{ $x }}</p>
    @endisset

    @foreach($namesArray as $name) 
        <h3><span>{{ $loop->last }}. </span>{{ $name }}</h3>
    @endforeach

    @include("pages.home")

    @include("pages.login")

    <!-- @php
        $y = phpinfo();
    @endphp

    @isset($y)        
        <p>y = {{ $y }}</p>
    @endisset -->



    <h1>End of this page!</h1>

    
</body>
</html>