<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ogakin Bookmarks</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

  <nav>
    <div>
      <ul>
        <li class="sys_title">Ogakin Bookmarks</li>
        @if (Route::has('login'))
          @auth
            <li class="header-right"><a href="{{ url('/home') }}">Home</a></li>
            <li class="header-right"><a href="{{ url('/submit') }}">Add A Link</a></li>
          @else
            <li class="header-right"><a href="{{ route('login') }}">Login</a></li>
            <li class="header-right"><a href="{{ route('register') }}">Register</a></li>
          @endauth
        @endif
      </ul>
    </div>
  </nav>

  <main>
    <div class="side-bar">
      <ul>
        <li>Folder1</li>
        <li>Folder2</li>
        <li>Folder3</li>
        <li>Folder4</li>
      </ul>
    </div>

    <div class="links">
      <ul>
        @foreach ($links as $link)
            <li class="link">
              <a href="{{ $link->url }}" target="_blank">{{ $link->title }}</a>
              <p>{{$link->description}}</p>
            </li>
        @endforeach
      </ul>
    </div>
  </main>

  <footer>
    <small>&copy; Copyright 2020, Naoyuki Ishida</small>
  </footer>

</body>
</html>
