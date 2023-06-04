@extends('layout.layout')

@section('content')
    <h3>Login</h3>
    <form action="post-login" method="post">
        {{ csrf_field() }}
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error}} <br>
            @endforeach
        </div>
        @endif
        <div>
            <label for="username">Email</label>
            <input id="email" type="text" class="form-control" name="email" required autofocus>

        </div>
        
        <div>
            <label for="password">password</label>
            <input id="password" type="password" class="form-control" name="password" required autofocus>
        </div>
        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign in</button>
    </form> 
    <p>Belum mempunyai akun? <a href="register">daftar</a></p>   
@endsection