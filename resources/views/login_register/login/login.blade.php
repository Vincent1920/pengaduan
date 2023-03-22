@extends('login_register.login_register')
@section('container')


<div class="login">
    <h1>Login</h1>
    @if(session()->has('success'))
        
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button> --}}
    </div>
    @endif

    @if(session()->has('loginerror'))
        
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginerror')}}
        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button> --}}
    </div>
    @endif
    
    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email"required value="{{old('email')}}" class="form-control  @error('email')is-invalid @enderror" id="email" name="email">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <a class="loginicon" href="/register">
            <img class="registericonimg" src="img/register.png" alt="Register">
            <p class="href_register">Register</p>
        </a>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>
</div>
@endsection