@extends("layouts.main")

@section('content')
            @auth
                
            <h1 class="title">Welcome  {{  auth()->user()->username  }} </h1>
            @endauth

            @guest
                <h1 class="title">Welcome user</h1>
            @endguest
@endsection
















{{-- <?php 

// $name = "Laravel 10 Tutorials";
// $myCss = "color:purple; font-size:40px;text-align:center"
// ?> --}}



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Laravel</title>
</head>
<body>
    {{-- <h2>{{$title}}  </h2> --}}
    {{-- <h2 style="{{$myCss}}">Hello {{$name}}  </h2> --}}

    

   
{{-- </body> --}}
{{-- </html> --}} 