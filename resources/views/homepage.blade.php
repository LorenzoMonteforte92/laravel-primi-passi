<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Greetings</title>
</head>
<body>

    <h1>Hello Word</h1>
      
    @if ($name === '')
    <div>Sono User</div> 
    @else
    <div>Sono {{$name}} {{$surname}}</div>
    @endif
    <div>I miei interessi sono:</div>
    @if ($hobbies)
    @foreach ($hobbies as $hobby)
     <div>{{$hobby}}</div>
    @endforeach
    @else
    <div>Qauli sono i tuoi interessi?</div> 
    @endif

</body>
</html>