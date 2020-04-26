@extends('layouts.app')

@section('content')
    <div class="side-bar">
      <h2>Folders</h2>
      <ul>
        <li><i class="far fa-folder"></i> Folder1</li>
        <li><i class="far fa-folder"></i> Folder2</li>
        <li><i class="far fa-folder"></i> Folder3</li>
        <li><i class="far fa-folder"></i> Folder4</li>
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
