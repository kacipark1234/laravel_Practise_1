
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>{{ $title }}</title>

    </head>
    <body class="antialiased">
        {{ $hello }}
    </body>
</html>

<!--
<html>
    <head>
        <meta charset="utf-8">
        
        <title>{{ $id }}</title>

    </head>
    <body class="antialiased">
        <form method="post" action="{{ url('/login') }}" >
            @method('PUT')
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <h1>{{ $id }}</h1>
            帳號：<input type='text' name='username'><br/>
            密碼：<input type='password' name='password'><br/>
            <button type='submit'>登入</button>
        </form>
    </body>
</html>
-->
