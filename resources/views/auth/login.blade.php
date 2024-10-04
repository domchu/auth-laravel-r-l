@extends("layouts.main")

@section('content')
    <h1 class="title">Login into your account</h1>

    <form action="{{route('login')}}" method="POST" class="max-w-screen-md mx-auto" autocomplete="off">
       @csrf
        <div class="mb-4">

            <input type="text" class="input" placeholder="Your email address" name="email">
        </div>
        <div class="mb-4">

            <input type="password" class="input" placeholder="password" name="password">
        </div>
        @error('failed')
                <p class="error">{{$message}} </p>
            @enderror
        <button class="btn">Login</button>
    </form>
@endsection