@extends('layouts.app')

@section('content')
    <div class="side-bar">
      <h2>Folder</h2>
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
@endsection
