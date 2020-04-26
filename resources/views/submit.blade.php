@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row submit-link-head">
            <h1>Submit a link</h1>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="/submit" method="post">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            Please fix the following errors
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input type="text" class="form-control @error('url') is-invalid @enderror submit-link-url" id="url" name="url" placeholder="URL" value="{{ old('url') }}">
                        @error('url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror submit-link-title" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror submit-link-description" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
