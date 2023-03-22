@extends('dashboard.views')
@section('container')

<div class="mt-4 text-decoration-none ">

    <a href="/dashboard/pengaduan"><i class="bi bi-backspace">back</i></a>
</div>
<div class="col-lg-8 ml-5" >
    <form method="POST" action="/dashboard/pengaduan/create">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">post image</label>
            <input class="form-control @error('image') is-invalid @enderror" id="slug" type="file" id="image" name="image">
            
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        
        <div class="mb-3">
            <input id="x"  type="hidden" name="body">
            <trix-editor input="x"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
</div>
@endsection