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
              <div class="row">
                <div class="col-md-11">
                  <a href="{{ $link->url }}" target="_blank">{{ $link->title }}</a>
                  <p>{{$link->description}}</p>
                </div>
                <div class="col-md-1">
                  <form action="/link/{{ $link->id }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-xs" aria-label="Left Align" id="del-link"><i class="fas fa-trash-alt"></i></button>
                  </form>
                </div>
              </div>
            </li>
        @endforeach
      </ul>
    </div>
@endsection
